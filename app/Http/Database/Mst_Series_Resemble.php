<?php namespace App\Http\Database;

use Illuminate\Database\Eloquent\Model;

use App\Services\Mst;

use DB;

class Mst_Series_Resemble extends Model {
	
	static public $table_name = 'mst_acceleration as a';
	
	static public function getFilterData ($param) {
		//完整的条件筛选
		$data = self::baseFilter(DB::table(self::$table_name), $param);
		
		//stroke范围
		if($param["vStroke"] > 0) {
			$stroke_range_arr = self::getFilterStrokeRange($param);
			$data->where('a.STROKE', Mst::largeThanClosest($stroke_range_arr, $param["vStroke"]));
		}

		$data = $data->leftJoin('mst_series_type as t', function($join) {
					$join->on('t.SERIES', '=', 'a.SERIES')->on('a.TYPE', '=', 't.TYPE');
				})
				->select('a.ID', 'a.SERIES', 'a.TYPE', 'a.STROKE', 't.LIST_ORDER', 't.TYPE_NAME', 't.TYPE_FORM', 
						't.TRANSPORT', 't.PRESSING', 't.HORIZONTAL', 't.VERTICAL', 't.STANDARD_LIFE', 'a.SPEED', 'a.ACCELERATION');
		
		//检查必填项是否都有数据，是的话多条数据则只取第一项
		$must = Mst::checkResembleMust($param);
		if($must) {
			$data = $data->first();
			$data = Mst::completeResembleData($data);
		} else {	//否的话取多条数据
			$data = $data->get();
		}
		
		return $data;
	}
	
	//没有加入stroke和load条件筛选的查询结果
	static public function baseFilter ($data, $param) {
		//半径
		if($param["vBore1"] > 0) 
			$data->where('a.BORE_DIAMETER', 10);
		if($param["vBore2"] > 0) 
			$data->where('a.BORE_DIAMETER', 16);
		if($param["vBore3"] > 0) 
			$data->where('a.BORE_DIAMETER', 20);
		if($param["vBore4"] > 0) 
			$data->where('a.BORE_DIAMETER', 25);
		if($param["vBore5"] > 0) 
			$data->where('a.BORE_DIAMETER', 32);
		if($param["vBore6"] > 0) 
			$data->where('a.BORE_DIAMETER', 40);
		if($param["vBore7"] > 0) 
			$data->where('a.BORE_DIAMETER', 50);
		
		//压力
		if($param["vAir1"] > 0) 
			$data->where('a.PRESSURE', 0.4);
		if($param["vAir2"] > 0) 
			$data->where('a.PRESSURE', 0.5);
		
		//形状
		if($param["vRodless"] > 0) 
			$data->where('a.TYPE_FORM', "无杆");
		if($param["vRod"] > 0) 
			$data->where('a.TYPE_FORM', "推杆");
		
		//方向
		if($param["vHorizontal"] > 0) {
			$data->where('t.HORIZONTAL', $param["vHorizontal"]);
			$data->where('a.SET_DIRECTION', '水平');
		}
		if($param["vVertical"] > 0) {
			$data->where('t.VERTICAL', $param["vVertical"]);
			$data->where('a.SET_DIRECTION', '垂直');
		}
		
		return $data;
	}
	
	//根据id获取详细信息
	static public function getDataById ($id) {
		$d = DB::table(self::$table_name)
				->leftJoin('mst_series_type as t', function($join) {
					$join->on('t.SERIES', '=', 'a.SERIES')->on('a.TYPE', '=', 't.TYPE');
				})->where('a.ID', $id)
				->first();
					
		$d->NAME = $d->SERIES . '-' . $d->TYPE;
		$d->FULL_NAME = Mst::getFullName($d->SERIES, $d->TYPE, $d->STROKE);
		$d->IMG_NAME = Mst::getImgName(EC_APPEARANCE_IMG_PATH, $d->SERIES, $d->TYPE);
		$d->KAHAN = Mst::getKahan($d->SERIES, $d->TYPE);
		$d->STROKE_IMG_NAME = Mst::getStrokeImg($d->SERIES, $d->TYPE, $d->STROKE);
		$d->PURPOSE = $d->TRANSPORT == 1 ? '搬运定位' : '推压压入';
		$d->DIRECTION = $d->SET_DIRECTION;
		
		$temp = self::getLeadStroke($d->SERIES, $d->TYPE, $d->STROKE);
		$d->MAX_POWER_HRZ = $temp->MAX_POWER_HRZ;
		$d->MAX_POWER_VTC = $temp->MAX_POWER_VTC;
		$d->MAX_SPEED_HRZ = $temp->MAX_SPEED_HRZ;
		$d->MAX_SPEED_VTC = $temp->MAX_SPEED_VTC;
		$d->MAX_ACCEL_HRZ = $temp->MAX_ACCEL_HRZ;
		$d->MAX_ACCEL_VTC = $temp->MAX_ACCEL_VTC;
		
		return $d;
	}
	
	//根据已有筛选条件，获取表中符合要求的stroke范围，返回数组格式
	static public function getFilterStrokeRange ($param) {
//		DB::connection()->enableQueryLog(); // 开启查询日志
//		$queries = DB::getQueryLog(); // 获取查询日志
		
		$base = self::baseFilter(DB::table(self::$table_name), $param);
		$base = $base->leftJoin('mst_series_type as t', function($join) {
					$join->on('t.SERIES', '=', 'a.SERIES')->on('a.TYPE', '=', 't.TYPE');
				})
				->select(DB::raw('distinct(STROKE) as stroke'))
				->orderBy('stroke', 'asc')
				->lists('stroke');
		
		return $base;
	}
	
	static public function getLeadStroke ($series, $type, $stroke) {
		return DB::table('mst_series_lead_stroke')
				->where('SERIES', $series)
				->where('TYPE', $type)
				->where('STROKE', $stroke)
				->first();
	}
}
