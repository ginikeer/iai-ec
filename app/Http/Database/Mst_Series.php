<?php namespace App\Http\Database;

use Illuminate\Database\Eloquent\Model;

use App\Services\Mst;

use DB;

class Mst_Series extends Model {
	
//vGravityOfCenter: -1
//vGravityOfCenterX: -1
//vGravityOfCenterY: -1
//vGravityOfCenterZ: -1

//vWorkLoadingState: -1
//vPressingForce: 100

//vHopeCycleTime: -1
//vUptime1: -1
//vUptime2: -1
//vUptime3: -1
	
	static public $table_name = 'mst_series_lead_stroke as ls';
	
	
	static public function getFilterData ($param) {
		$position = '';	//位置
		if($param["vHorizontal"] > 0) 
			$position = 'horizontal';
		if($param["vVertical"] > 0) 	
			$position = 'vertical';
		
		//完整的条件筛选
		$data = self::baseFilter(DB::table(self::$table_name), $param);
		
		//stroke范围
		if($param["vStroke"] > 0) {
			$stroke_range_arr = self::getFilterStrokeRange($param);
			$data->where('ls.STROKE', Mst::largeThanClosest($stroke_range_arr, $param["vStroke"]));
		}
		
		//载重范围
		if($param["vLoad"] > 0 && !empty($position)) {
			$filed = ($position == 'horizontal') ? 'ls.MAX_POWER_HRZ' : 'ls.MAX_POWER_VTC';
			$load_range_arr = self::getFilterPowerRange($position, $param);
			$data->where($filed, Mst::largeThanClosest($load_range_arr, $param["vLoad"]));
		}

		$data = $data->leftJoin('mst_series_type as t', function($join) {
					$join->on('t.SERIES', '=', 'ls.SERIES')->on('ls.TYPE', '=', 't.TYPE');
				})
				->select('ls.ID', 'ls.SERIES', 'ls.TYPE', 'ls.STROKE', 't.LIST_ORDER', 't.TYPE_NAME', 't.TYPE_FORM', 
						't.TRANSPORT', 't.PRESSING', 't.HORIZONTAL', 't.VERTICAL', 't.STANDARD_LIFE', 't.MA_OVERHANG_ABOVE');
		
		//检查必填项是否都有数据，是的话多条数据则只取第一项
		$must = Mst::checkMust($param);
		if($must) {
			$data = $data->first();
			$data = Mst::completeData($data, $param["vLoad"], $position);
		} else {	//否的话取多条数据
			$data = $data->get();
		}
		
		return $data;
	}
	
	//没有加入stroke和load条件筛选的查询结果
	static public function baseFilter ($data, $param) {
		//用途
		if($param["vTransport"] > 0) 
			$data->where('t.TRANSPORT', $param["vTransport"]);
		if($param["vPressing"] > 0) 
			$data->where('t.PRESSING', $param["vPressing"]);
			
		//形状
		if($param["vSlider"] > 0) 
			$data->where('t.TYPE_FORM', "スライダ");
		if($param["vRod"] > 0) 
			$data->where('t.TYPE_FORM', "ロッド");
		if($param["vSmall"] > 0) 
			$data->where('t.TYPE_FORM', "細小型");
		
		//形状2
		if($param["vLinearGuideRod"] > 0) {
			if($param["vLinearGuideRod"] == 1) 
				$data->where('t.TYPE_FORM2', "標準タイプ");
			if($param["vLinearGuideRod"] == 2) 
				$data->where('t.TYPE_FORM2', "ラジアルシリンダー");
			if($param["vLinearGuideRod"] == 3) 
				$data->where('t.TYPE_FORM2', "防塵・防滴タイプ");
		}
		
		//形状2
		if($param["vLinearGuideSmall"] > 0) {
			if($param["vLinearGuideSmall"] == 1) 
				$data->where('t.TYPE_FORM2', "標準タイプ");
			if($param["vLinearGuideSmall"] == 2) 
				$data->where('t.TYPE_FORM2', "シングルガイドタイプ");
			if($param["vLinearGuideSmall"] == 3) 
				$data->where('t.TYPE_FORM2', "ダブルガイドタイプ");
			if($param["vLinearGuideSmall"] == 4) 
				$data->where('t.TYPE_FORM2', "テーブルタイプ");
			if($param["vLinearGuideSmall"] == 5) 
				$data->where('t.TYPE_FORM2', "テーブルタイプ");
		}
		
		//位置
		if($param["vHorizontal"] > 0) 
			$data->where('t.HORIZONTAL', $param["vHorizontal"]);
		if($param["vVertical"] > 0) 
			$data->where('t.VERTICAL', $param["vVertical"]);
			
		return $data;
	}
	
	//
	static public function getDataById ($id) {
		$d = DB::table(self::$table_name)
				->leftJoin('mst_series_type as t', function($join) {
					$join->on('t.SERIES', '=', 'ls.SERIES')->on('ls.TYPE', '=', 't.TYPE');
				})->where('ls.ID', $id)
//				->select()
				->first();
					
		$data->FULL_NAME = Mst::getFullName($d->SERIES, $d->TYPE, $d->STROKE);
	}
	
	//获取表中所有的stroke范围，返回数组格式
	static public function getStrokeRange () {
		return DB::table("mst_series_lead_stroke")
				->select(DB::raw('distinct(STROKE) as stroke'))
				->orderBy('stroke', 'asc')
				->lists('stroke');
	}
	
	//根据已有筛选条件，获取表中符合要求的stroke范围，返回数组格式
	static public function getFilterStrokeRange ($param) {
		$base = self::baseFilter(DB::table(self::$table_name), $param);
		$base = $base->leftJoin('mst_series_type as t', function($join) {
					$join->on('t.SERIES', '=', 'ls.SERIES')->on('ls.TYPE', '=', 't.TYPE');
				})
				->select(DB::raw('distinct(STROKE) as stroke'))
				->orderBy('stroke', 'asc')
				->lists('stroke');
		
		return $base;
	}
	
	//获取表中所有的最大载重范围，返回数组格式
	static public function getPowerRange ($position) {
		$filed = ($position == 'horizontal') ? 'MAX_POWER_HRZ' : 'MAX_POWER_VTC';
		
		return DB::table("mst_series_lead_stroke")
				->select(DB::raw('distinct(' . $filed . ') as `load`'))
				->orderBy('load', 'asc')
				->lists('load');
	}
	
	//根据已有筛选条件，获取表中符合要求的最大载重范围，返回数组格式
	static public function getFilterPowerRange ($position, $param) {
		$filed = ($position == 'horizontal') ? 'MAX_POWER_HRZ' : 'MAX_POWER_VTC';
		
		$base = self::baseFilter(DB::table(self::$table_name), $param);
		$base = $base->leftJoin('mst_series_type as t', function($join) {
					$join->on('t.SERIES', '=', 'ls.SERIES')->on('ls.TYPE', '=', 't.TYPE');
				})
				->select(DB::raw('distinct(' . $filed . ') as `load`'))
				->orderBy('load', 'asc')
				->lists('load');
		
		return $base;
	}
	
	static public function getSpeedAndAcceleration($series, $type, $set_direction, $stroke, $vLoad) {
		$data = DB::table('mst_acceleration')
						->where('SERIES', $series)
						->where('TYPE', $type)
						->where('SET_DIRECTION', $set_direction)
						->where('STROKE', $stroke);
		
		$loadRange = $data;
		
		$loadRange = $loadRange->select(DB::raw('distinct(`LOAD`) as `load`'))
							   ->orderBy('load', 'asc')
							   ->lists('load');
		
		$load = Mst::largeThanClosest($loadRange, $vLoad);
		
		$data = $data->where('LOAD', $load)
					 ->select('SPEED', 'ACCELERATION')
					 ->first();
			 
		return $data;
	}
}
