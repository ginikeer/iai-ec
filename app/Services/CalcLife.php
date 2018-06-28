<?php namespace App\Services;

use Cookie, Storage, DB;

use App\Http\Database\Mst_Series;

//计算寿命
class CalcLife {
	
	public $load;				//载重范围
	public $gravity;			//重心位置
	public $standard_life;		//标准寿命
	public $acceleration;		//加速度
	public $guide_rod;			//拉杆类型
	
	public function calcDistance($data, $param) {
		$this->standard_life 		= $data->STANDARD_LIFE;
		$this->acceleration 		= $data->ACCELERATION;
		$this->speed				= $data->SPEED;
		$this->load 				= $param["vLoad"];
		$this->gravity 				= $param["vGravityOfCenter"];
		$this->work_state 			= $param["vWorkLoadingState"];
		$this->guide_rod			= $param["vLinearGuideRod"];
		$this->guid_small			= $param["vLinearGuideSmall"];
		$this->horizontal			= $param["vHorizontal"];
		$this->stroke				= $param["vStroke"];
		$this->gravity_x			= $param["vGravityOfCenterX"];
		$this->gravity_y			= $param["vGravityOfCenterY"];
		$this->gravity_z			= $param["vGravityOfCenterZ"];
		$this->offset_distance		= isset($param["vOffSetDistance"]) ? $param["vOffSetDistance"] : 0;
		$this->overhang_distance 	= isset($param["vOverhangDistance"]) ? $param["vOverhangDistance"] : 0;
		
		if($param["vPressing"] > 0)
			return 0;
		
		if($param["vSlider"] > 0) {	//滑块型
			return $this->sliderHandel($data);
		} else 
		if($param["vRod"] > 0) {	//拉杆型
			return $this->rodHandel($data);
		} else 
		if($param["vSmall"] > 0) {	//细小型
			if($this->guid_small == 4 || $this->guid_small == 5) {
				return $this->smallHandel($data);
			} else {
				return 0;
			}
		}
	}
	
	private function sliderHandel($data) {
		$type 					= $data->TYPE;
		$s6lh					= Mst_Series::get_mst_series_type('S6LH');
		$s6l 					= Mst_Series::get_mst_series_type('S6L');
		$s7lh					= Mst_Series::get_mst_series_type('S7LH');
		$s7l					= Mst_Series::get_mst_series_type('S7L');
				
		if(stripos($type, 'S6') !== false) {
			if( $data->MA_OVERHANG_ABOVE == $s6lh->MA_OVERHANG_ABOVE ) {
				$selected		= $s6lh;
			} else {
				$selected 		= $s6l;
			}
		} else if(stripos($type, 'S7') !== false) {
			if( $data->MA_OVERHANG_ABOVE == $s7lh->MA_OVERHANG_ABOVE ) {
				$selected		= $s7lh;
			} else {
				$selected 		= $s7l;
			}
		} else {
			return 0;
		}
		
		$ma_moment 				= $selected->MA_MOMENT;
		$mb_moment 				= $selected->MB_MOMENT;
		$mc_moment 				= $selected->MC_MOMENT;
		$ma 					= $selected->MA;
		$above 					= $selected->MA_OVERHANG_ABOVE;
		
		return $this->sliderWorkLoadingState($ma_moment, $mb_moment, $mc_moment, $ma, $above);
	}
	
	private function rodHandel($data) {
		$result 				= array();
		$_r						= $this->guide_rod;
		$_h						= $this->horizontal;
		$_l 					= $this->load;
		$_o						= $this->offset_distance;
		$_s						= $this->stroke;
		$_od					= $this->overhang_distance;
		$sp						= $this->speed;
		$rr6s					= Mst_Series::get_mst_series_type('RR6S');
		$rr7s					= Mst_Series::get_mst_series_type('RR7S');
		$oDistance				= 0;
		$oError 				= 0;
		
		if($_r == 2 && $_h == 1) {
			if( ($_l * 9.8) <= $rr6s->DYNAMIC_RADIAL_LOAD && ($_l * 9.8 * $_o / 1000) <= $rr6s->DYNAMIC_TORQUE ) {
				$oDistance = $_l * ($_s + $rr6s->MA + $_od) / 1000 * $rr6s->EQUIVALENT_COEFFICIENT_Ka + $_l * $_o / 1000 * $sp * $rr6s->EQUIVALENT_COEFFICIENT_Kb + $_l * $_o / 1000 * $rr6s->EQUIVALENT_COEFFICIENT_Kc; 
				$oDistance = round( pow(($rr6s->DYNAMIC_EQUIVALENT_LOAD / $oDistance), 3) * 5000 );
			} else
			if( ($_l * 9.8) <= $rr7s->DYNAMIC_RADIAL_LOAD && ($_l * 9.8 * $_o / 1000) <= $rr7s->DYNAMIC_TORQUE  ) {
				$oDistance = $_l * ($_s + $rr7s->MA + $_od) / 1000 * $rr7s->EQUIVALENT_COEFFICIENT_Ka + $_l * $_o / 1000 * $sp * $rr7s->EQUIVALENT_COEFFICIENT_Kb + $_l * $_o / 1000 * $rr7s->EQUIVALENT_COEFFICIENT_Kc; 
				$oDistance = round( pow(($rr7s->DYNAMIC_EQUIVALENT_LOAD / $oDistance), 3) * 5000 );
			} else {
				$oDistance = 0;
				$oError = 3;
			}
		} else {
			$oDistance = 0;
		}
		
		$result["CALC_DISTANCE"] = $oDistance;
		$result["CALC_MOMENT"] = 0;
		$result["ERROR_KBN"] = $oError;
	}
	
	private function smallHandel($data) {
		$_s						= $this->guid_small;
		$_w 					= $this->work_state;
		$_st					= $this->stroke;
		$_l 					= $this->load;
		$_x						= $this->gravity_x;			
		$_y						= $this->gravity_y;			
		$_z						= $this->gravity_z;
		$_a						= $this->acceleration;		
		$tc4h					= Mst_Series::get_mst_series_type('TC4H');
		$tw4h					= Mst_Series::get_mst_series_type('TW4H');
		
		if($_w == 1 || $_w == 4) {
			if($_s == 4) {
				$tcma = round( ( pow(($tc4h->MA_MOMENT / (($_st + $_x + 39.5) * $_l * 9.8 / 1000 + ($_z + 10.5) * $_l * 9.8 * $_a / 1000)), 3) ) * $tc4h->STANDARD_LIFE );
				$tcmb = round( ( pow(($tc4h->MB_MOMENT / ($_y * $_l * 9.8 / 1000 * $_a)), 3) ) * $tc4h->STANDARD_LIFE );
				$tcmc = round( ( pow(($tc4h->MC_MOMENT / ($_y * $_l * 9.8 / 1000)), 3) ) * $tc4h->STANDARD_LIFE );
			} else {
				$twma = round( ( pow(($tw4h->MA_MOMENT / (($_st + $_x + 38.5) * $_l * 9.8 / 1000 + ($_z + 10.5) * $_l * 9.8 * $_a / 1000)), 3) ) * $tw4h->STANDARD_LIFE );
				$twmb = round( ( pow(($tw4h->MB_MOMENT / ($_y * $_l * 9.8 / 1000 * $_a)), 3) ) * $tw4h->STANDARD_LIFE );
				$twmc = round( ( pow(($tw4h->MC_MOMENT / ($_y * $_l * 9.8 / 1000)), 3) ) * $tw4h->STANDARD_LIFE);
			}
		} else if($_w == 2) {
			if($_s == 4) {
				$tcma = round( ( pow(($tc4h->MA_MOMENT / (($_z + 10.5) * $_l * 9.8 / 1000 * (1 + $_a))), 3) ) * $tc4h->STANDARD_LIFE );
				$tcmb = round( ( pow(($tc4h->MB_MOMENT / ($_y * $_l * 9.8 / 1000 * (1 + $_a))), 3) ) * $tc4h->STANDARD_LIFE );
				$tcmc = -1;
			} else {
				$twma = round( ( pow(($tw4h->MA_MOMENT / (($_z + 10.5) * $_l * 9.8 / 1000 * (1 + $_a))), 3) ) * $tw4h->STANDARD_LIFE );
				$twmb = round( ( pow(($tw4h->MB_MOMENT / ($_y * $_l * 9.8 / 1000 * (1 + $_a))), 3) ) * $tw4h->STANDARD_LIFE );
				$twmc = -1;
			}
		} else if($_w == 3) {
			if($_s == 4) {
				$tcma = round( ( pow(($tc4h->MA_MOMENT / (($_z + 10.5) * $_l * 9.8 / 1000 * $_a)), 3) ) * $tc4h->STANDARD_LIFE );
				$tcmb = round( ( pow(($tc4h->MB_MOMENT / (($_y * $_l * 9.8 / 1000 * $_a) + ($_st + $_x + 39.5) * $_l * 9.8 / 1000)), 3) ) * $tc4h->STANDARD_LIFE );
				$tcmc = round( ( pow(($tc4h->MC_MOMENT / (($_z + 10.5) * $_l * 9.8 / 1000)), 3) ) * $tc4h->STANDARD_LIFE );
			} else {
				$twma = round( ( pow(($tw4h->MA_MOMENT / (($_z + 10.5) * $_l * 9.8 / 1000 * $_a)), 3) ) * $tw4h->STANDARD_LIFE );
				$twmb = round( ( pow(($tw4h->MB_MOMENT / (($_y * $_l * 9.8 / 1000 * $_a) + ($_st + $_x + 38.5) * $_l * 9.8 / 1000)), 3) ) * $tw4h->STANDARD_LIFE );
				$twmc = round( ( pow(($tw4h->MC_MOMENT / (($_z + 10.5) * $_l * 9.8 / 1000)), 3) ) * $tw4h->STANDARD_LIFE );
			}
		}
		
		if($_s == 4) {
			$oDistance = ($tcma < $tcmb) ? $tcma : $tcmb;
			$oDistance = ($tcmc > 0 && $tcmc < $oDistance) ? $tcmc : $oDistance;
		} else {
			$oDistance = $twma < $twmb ? $twma : $twmb;
			$oDistance = ($twmc > 0 && $twmc < $oDistance) ? $twmc : $oDistance;
		}
		
		return $oDistance;
	}
	
	private function sliderWorkLoadingState($ma_moment, $mb_moment, $mc_moment, $ma, $above) {
		$result 				= array();
		$_l 					= $this->load;
		$_g						= $this->gravity;
		$_a 					= $this->acceleration;
		$_s 					= $this->standard_life;
		$_w 					= $this->work_state;
		
		switch ($_w) {
			case 1:
				$state1 = round( ( pow(($mc_moment / ($_l * $_g * 9.8 / 1000.0)), 3) ) * $_s );
				$state2 = round( ( pow(($mb_moment / ($_l * $_g * 9.8 * $_a / 1000.0)), 3) ) * $_s );
				
				if($state1 < $state2) {
					$oDistance = $state1;
					$oMoment = $_l * $_g * 9.8 / 1000.0;
				} else {
					$oDistance = $state2;
					$oMoment = $_l * $_g * 9.8 * $_a / 1000.0;
				}
				break;
			case 2:
				$oDistance = round( ( pow(($ma_moment / ($_l * $_g * 9.8 / 1000.0)), 3) ) * $_s );
				$oMoment = $_l * $_g * 9.8 / 1000.0;
				break;
			case 3:
				$oDistance = round( ( pow(($ma_moment / ($_l * ($_g + $ma) * 9.8 * $_a / 1000.0)), 3) ) * $_s );
				$oMoment = $_l * ($_g + $ma) * 9.8 * $_a / 1000.0;
				break;
			case 4:
				$state1 = round( ( pow(($ma_moment / ($_l * ($_g + $ma) * 9.8 * $_a / 1000.0)), 3) ) * $_s );
				$state2 = round( ( pow(($mc_moment / ($_l * ($_g + $ma) * 9.8 / 1000.0)), 3) ) * $_s );
				
				if($state1 < $state2) {
					$oDistance = $state1;
					$oMoment = $_l * ($_g + $ma) * 9.8 * $_a / 1000.0;
				} else {
					$oDistance = $state2;
					$oMoment = $_l * ($_g + $ma) * 9.8 / 1000.0;
				}
				break;
			case 5:
				$oDistance = round( ( pow(($mb_moment / ($_l * $_g * 9.8 / 1000.0)), 3) ) * $_s );
				$oMoment = $_l * $_g * 9.8 / 1000.0;
				break;
			case 6:
				$state1 = round( ( pow(($mc_moment / ($_l * ($_g + $ma) * 9.8 / 1000.0)), 3) ) * $_s );
				$state2 = round( ( pow(($mb_moment / ($_l * $_g * 9.8 * $_a / 1000.0)), 3) ) * $_s );
				
				if($state1 < $state2) {
					$oDistance = $state1;
					$oMoment = $_l * ($_g + $ma) * 9.8 / 1000.0;
				} else {
					$oDistance = $state2;
					$oMoment = $_l * $_g * 9.8 * $_a / 1000.0;
				}
				break;
			case 7:
				$oDistance = round( ( pow(($mb_moment / ($_l * $_g * 9.8 * (1 + $_a) / 1000.0)), 3) ) * $_s );
				$oMoment = $_l * $_g * 9.8 * (1 + $_a) / 1000.0;
				break;
			case 8:
				$oDistance = round( ( pow(($ma_moment / ($_l * $_g * 9.8 * $_a / 1000.0)), 3) ) * $_s );
				$oMoment = $_l * $_g * 9.8 * $_a / 1000.0;
				break;
			case 9:
				$oDistance = round( ( pow(($ma_moment / ($_l * ($_g + $ma) * 9.8 * (1 + $_a) / 1000.0)), 3) ) * $_s );
				$oMoment = $_l * ($_g + $ma) * 9.8 * (1 + $_a) / 1000.0;
				break;
			default:
				$oDistance = 0;
				$oMoment = 0;
				break;
		}
		
		$result["CALC_DISTANCE"] = $oDistance;
		$result["CALC_MOMENT"] = round($oMoment, 1);
		$result["ERROR_KBN"] = 0;
		
		return $result;
	}
}

?>