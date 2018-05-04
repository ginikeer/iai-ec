<?php namespace App\Services;

use Cookie, Storage;

//工具类
class Helper {
	
	//保存数据
	static public function tableSave($data, $param)
	{
		foreach($param as $k => $v) {
			$data->$k = SELF::newlineEscape($v);
		}
		$data->save();
		
		return $data->id;
	}
	
	static public function removeFromAll($remove, $all)
	{
		foreach($remove as $r) {
			unset($all[$r]);
		}
		
		return $all;
	}
	
	//将换行符转义为<br/>
	static public function newlineEscape($str)
	{
		if(stripos($str, "\n") !== false) {
			return str_replace("\n", "<br/>", $str);
		} else {
			return $str;
		}
	}
	
	//将<br/>转义为换行符
	static public function brEscape($str)
	{
		if(stripos($str, "<br/>") !== false) {
			return str_replace("<br/>", "\n", $str);
		} else {
			return $str;
		}
	}
	

	
}

?>