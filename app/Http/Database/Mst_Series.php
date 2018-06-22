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
		$direction = '';	//方向
		if($param["vHorizontal"] > 0) 
			$direction = 'horizontal';
		if($param["vVertical"] > 0) 	
			$direction = 'vertical';
		
		//完整的条件筛选
		$data = self::baseFilter(DB::table(self::$table_name), $param);
		
		//stroke范围
		if($param["vStroke"] > 0) {
			$stroke_range_arr = self::getFilterStrokeRange($param);
			$data->where('ls.STROKE', Mst::largeThanClosest($stroke_range_arr, $param["vStroke"]));
		}
		
		//载重范围
		if($param["vLoad"] > 0 && !empty($direction)) {
			$filed = ($direction == 'horizontal') ? 'ls.MAX_POWER_HRZ' : 'ls.MAX_POWER_VTC';
			$load_range_arr = self::getFilterPowerRange($direction, $param);
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
			$data = Mst::completeData($data, $param, $direction);
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
			$data->where('t.TYPE_FORM', "滑块型");
		if($param["vRod"] > 0) 
			$data->where('t.TYPE_FORM', "拉杆型");
		if($param["vSmall"] > 0) 
			$data->where('t.TYPE_FORM', "细小型");
		
		//形状2
		if($param["vLinearGuideRod"] > 0) {
			if($param["vLinearGuideRod"] == 1) 
				$data->where('t.TYPE_FORM2', "标准型");
			if($param["vLinearGuideRod"] == 2) 
				$data->where('t.TYPE_FORM2', "径向拉杆型");
			if($param["vLinearGuideRod"] == 3) 
				$data->where('t.TYPE_FORM2', "防尘防滴型");
		}
		
		//形状2
		if($param["vLinearGuideSmall"] > 0) {
			if($param["vLinearGuideSmall"] == 1) 
				$data->where('t.TYPE_FORM2', "标准型");
			if($param["vLinearGuideSmall"] == 2) 
				$data->where('t.TYPE_FORM2', "单导轨型");
			if($param["vLinearGuideSmall"] == 3) 
				$data->where('t.TYPE_FORM2', "双导轨型");
			if($param["vLinearGuideSmall"] == 4) 
				$data->where('t.TYPE_FORM2', "桌上型");
			if($param["vLinearGuideSmall"] == 5) 
				$data->where('t.TYPE_FORM2', "桌上型");
		}
		
		//方向
		if($param["vHorizontal"] > 0) 
			$data->where('t.HORIZONTAL', $param["vHorizontal"]);
		if($param["vVertical"] > 0) 
			$data->where('t.VERTICAL', $param["vVertical"]);
			
		return $data;
	}
	
	//根据id获取详细信息
	static public function getDataById ($id, $direction, $load) {
		$d = DB::table(self::$table_name)
				->leftJoin('mst_series_type as t', function($join) {
					$join->on('t.SERIES', '=', 'ls.SERIES')->on('ls.TYPE', '=', 't.TYPE');
				})->where('ls.ID', $id)
				->first();
					
		$d->NAME = $d->SERIES . '-' . $d->TYPE;
		$d->FULL_NAME = Mst::getFullName($d->SERIES, $d->TYPE, $d->STROKE);
		$d->IMG_NAME = Mst::getImgName(EC_APPEARANCE_IMG_PATH, $d->SERIES, $d->TYPE);
		$d->KAHAN = Mst::getKahan($d->SERIES, $d->TYPE);
		$d->STROKE_IMG_NAME = Mst::getStrokeImg($d->SERIES, $d->TYPE, $d->STROKE);
		$d->PURPOSE = $d->TRANSPORT == 1 ? '搬运定位' : '推压压入';
		$d->DIRECTION = ($direction == 'horizontal') ? '水平安装' : '垂直安装';
		
		$set_direction = ($direction == 'horizontal') ? '水平' : '垂直';
		$temp = self::getSpeedAndAcceleration($d->SERIES, $d->TYPE, $set_direction, $d->STROKE, $load);
		$d->SPEED = $temp->SPEED;
		$d->ACCELERATION = $temp->ACCELERATION;
		
		return $d;
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
	
	//根据已有筛选条件，获取表中符合要求的最大载重范围，返回数组格式
	static public function getFilterPowerRange ($direction, $param) {
		$filed = ($direction == 'horizontal') ? 'MAX_POWER_HRZ' : 'MAX_POWER_VTC';
		
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
					 ->select('SPEED', 'ACCELERATION', 'SCREW_LIFE', 'BEARING_LIFE')
					 ->first();
			 
		return $data;
	}
	
	static public function get_mst_series_type($type) {
		return DB::table('mst_series_type')
				->where('type', $type)
				->select('MA_MOMENT', 'MB_MOMENT', 'MC_MOMENT', 'MA', 'MA_OVERHANG_ABOVE', 
						'DYNAMIC_RADIAL_LOAD', 'DYNAMIC_TORQUE', 'EQUIVALENT_COEFFICIENT_Ka', 
						'EQUIVALENT_COEFFICIENT_Kb', 'EQUIVALENT_COEFFICIENT_Kc', 'DYNAMIC_EQUIVALENT_LOAD')
				->first();
	}
	
}
