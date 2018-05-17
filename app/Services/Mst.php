<?php namespace App\Services;

use Cookie, Storage;

use App\Http\Database\Mst_Series;

//Mst工具类
class Mst {
	
	//返回有序数组中大于参数且最接近参数的值
	static public function largeThanClosest($arr, $target)
	{
		foreach($arr as $r) {
			if($target <= $r) 
				return $r;
		}
		
		return -1;
	}
	
	static public function lastInArr($arr)
	{
		return $arr[count($arr) - 1];
	}

	static public function checkMust($param)
	{
		$step1 = $step2 = $step3 = $step4 = $step5 = $step6 = false;
		
		if($param["vTransport"] > 0 || $param["vPressing"] > 0) 
			$step1 = true;
		
		if($param["vSlider"] > 0 || $param["vRod"] > 0 || $param["vSmall"] > 0) 
			$step2 = true;
		
		if($param["vSlider"] > 0 || ($param["vRod"] > 0 && $param["vLinearGuideRod"] > 0) || 
			($param["vSmall"]) > 0 && $param["vLinearGuideSmall"] > 0) 
			$step3 = true;
		
		if($param["vHorizontal"] > 0 || $param["vVertical"] > 0) 
			$step4 = true;
		
		if($param["vStroke"] > 0) 
			$step5 = true;
		
		if($param["vLoad"] > 0) 
			$step6 = true;
		
		return ($step1 && $step2 && $step3 && $step4 && $step5 && $step6);
	}
	
	static public function completeData($data, $vLoad, $vPosition)
	{
		if(empty($data)) return array();
		$series = $data->SERIES;
		$type = $data->TYPE;
		$set_direction = ($vPosition == 'horizontal') ? '水平' : '垂直';
		$stroke = $data->STROKE;
		
		$temp = Mst_Series::getSpeedAndAcceleration($series, $type, $set_direction, $stroke, $vLoad);
		
		$data->SPEED = $temp->SPEED;
		$data->ACCELERATION = $temp->ACCELERATION;
		$data->IMG_NAME = EC_REQUIRE_IMG_PATH . $series . '-' . $type . ".png";
		$data->FULL_NAME = self::getFullName($series, $type, $stroke);
		
		$data->ERROR_KBN = 0;
		$data->CALC_CYCLE_TIME = 0;
		$data->CALC_MOMENT = 0;
		$data->CALC_DISTANCE = 0;
		$data->CALC_LIFE = 0;
		
		return $data;
	}
	
	static public function getFullName($series, $type, $stroke)
	{
		return $series . '-' . $type . '-' . $stroke;
	}
	
}

?>