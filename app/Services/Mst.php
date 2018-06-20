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
	
	static public function checkResembleMust($param)
	{
		$step1 = $step2 = $step3 = $step4 = $step5 = false;
		
		if($param["vBore1"] > 0 || $param["vBore2"] > 0 || $param["vBore3"] > 0 || $param["vBore4"] > 0 ||
			$param["vBore5"] > 0 || $param["vBore6"] > 0 || $param["vBore7"] > 0) 
			$step1 = true;
			
		if($param["vAir1"] > 0 || $param["vAir2"] > 0)
			$step2 = true;
		
		if($param["vRodless"] > 0 || $param["vRod"] > 0) 
			$step3 = true;
		
		if($param["vHorizontal"] > 0 || $param["vVertical"] > 0) 
			$step4 = true;
		
		if($param["vStroke"] > 0) 
			$step5 = true;
		
		return ($step1 && $step2 && $step3 && $step4 && $step5);
	}
	
	static public function completeData($data, $vLoad, $vDirection)
	{
		if(empty($data)) return array();
		$series = $data->SERIES;
		$type = $data->TYPE;
		$set_direction = ($vDirection == 'horizontal') ? '水平' : '垂直';
		$stroke = $data->STROKE;
		$temp = Mst_Series::getSpeedAndAcceleration($series, $type, $set_direction, $stroke, $vLoad);
		
		$data->SPEED = $temp->SPEED;
		$data->ACCELERATION = $temp->ACCELERATION;
		$data->IMG_NAME = self::getImgName(EC_APPEARANCE_IMG_PATH, $series, $type);
		$data->FULL_NAME = self::getFullName($series, $type, $stroke);
		
		$calc_cycle_time = null;
		CalcCycleTime(10, $temp->SPEED, $temp->ACCELERATION, $temp->ACCELERATION, 0.1, 1, 0, 40, 0, 0, $calc_cycle_time);
		$calc_cycle_time = $calc_cycle_time;
		
		$data->ERROR_KBN = 0;
		$data->CALC_CYCLE_TIME = $calc_cycle_time;
		$data->CALC_MOMENT = 0;
		$data->CALC_DISTANCE = 0;
		$data->CALC_LIFE = 0;
		
		return $data;
	}
	
	static public function completeResembleData($data)
	{
		if(empty($data)) return array();
		$series = $data->SERIES;
		$type = $data->TYPE;
		$stroke = $data->STROKE;
		
		$data->IMG_NAME = self::getImgName(EC_APPEARANCE_IMG_PATH, $series, $type);
		$data->FULL_NAME = self::getFullName($series, $type, $stroke);
		
		return $data;
	}
	
	static public function getFullName($series, $type, $stroke)
	{
		return $series . '-' . $type . '-' . $stroke;
	}
	
	static public function getImgName($path, $series, $type)
	{
		return $path . $series . '-' . $type . ".png";
	}
	
	static public function getKahan($series, $type)
	{
		return EC_LOADCAPALEDGER_IMG_PATH . $series . '-' . $type . "_SOKUDO-KAHAN.png";
	}
	
	static public function getStrokeImg($series, $type, $stroke)
	{
		if( strlen($stroke) == 1) $stroke = '000' . $stroke;
		if( strlen($stroke) == 2) $stroke = '00' . $stroke;
		if( strlen($stroke) == 3) $stroke = '0' . $stroke;
		
		return EC_DRAWING_IMG_PATH . $series . '-' . $type . "_STROKE-" . $stroke . ".png";
	}
	
}

?>