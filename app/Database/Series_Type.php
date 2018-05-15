<?php namespace App\Http\Database;

use Illuminate\Database\Eloquent\Model;

use DB;

class Series_Type extends Model {
	protected $table = 'mst_series_type';
	
	protected $guarded  = ["id"];
	
	
//[
//"vLinearGuideSmall" => "-1"

//"vStroke" => "100"

//"vLoad" => "-1"
//"vGravityOfCenter" => "-1"
//"vGravityOfCenterX" => "-1"
//"vGravityOfCenterY" => "-1"
//"vGravityOfCenterZ" => "-1"
//"vWorkLoadingState" => "-1"
//"vPressingForce" => "-1"
//"vHopeCycleTime" => "-1"
//"vCycleTimeCalcKbn" => "1"
//"vUptime1" => "-1"
//"vUptime2" => "-1"
//"vUptime3" => "-1"];
	
	static public function getFilterData ($param) {
		$data = array();
		$data = DB::table("mst_series_type as st");
		
		if($param["vTransport"] > 0) 
			$data->where('TRANSPORT', $param["vTransport"]);
		if($param["vPressing"] > 0) 
			$data->where('PRESSING', $param["vPressing"]);
		if($param["vSlider"] > 0) 
			$data->where('TYPE_FORM', "スライダ");
		if($param["vRod"] > 0) 
			$data->where('TYPE_FORM', "ロッド");
		if($param["vSmall"] > 0) 
			$data->where('TYPE_FORM', "細小型");
		if($param["vSmall"] > 0) 
			$data->where('TYPE_FORM', "細小型");
		if($param["vLinearGuideRod"] == 1) 
			$data->where('TYPE_FORM2', "標準タイプ");
		if($param["vLinearGuideRod"] == 2) 
			$data->where('TYPE_FORM2', "ラジアルシリンダー");
		if($param["vLinearGuideRod"] == 3) 
			$data->where('TYPE_FORM2', "防塵・防滴タイプ");
		if($param["vHorizontal"] > 0) 
			$data->where('HORIZONTAL', $param["vHorizontal"]);
		if($param["vVertical"] > 0) 
			$data->where('VERTICAL', $param["vVertical"]);
//		if($param["vStroke"] > 0) 
//			$data->where('', "");
		if($param["vPressingForce"] > 0) 
			$data->where('', "");
		if($param[""] > 0) 
			$data->where('', "");	
				
	}
	
	
}
