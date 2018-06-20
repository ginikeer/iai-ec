<?php

const RET_OK = 0;

const ERR_ARGUMENT = 1;

const DMY_M1 = 0;

const CONST_PI_OFF_BRD_TUNE = 3.14159265358979;

const CONST_CNVRT_UNIT_G_TO_M_S2_OFF_BRD_TUNE = 9.80665;

const CONST_CNVRT_UNIT_001G_TO_G_OFF_BRD_TUNE = 100;

const CONST_CNVRT_UNIT_0001MM_S2_TO_MM_S2_OFF_BRD_TUNE = 1000;

const CONST_CNVRT_UNIT_MS_TO_S_OFF_BRD_TUNE = 1000;

const CONST_CNVRT_UNIT_0000000001NMS_TO_NMS_OFF_BRD_TUNE = 1000000000;

const CONST_CNVRT_UNIT_0000001NMS_TO_NMS_OFF_BRD_TUNE = 1000000;

const CONST_CNVRT_UNIT_0001NMS_TO_NMS_OFF_BRD_TUNE = 1000;

const CONST_CNVRT_UNIT_0000001NM_TO_NM_OFF_BRD_TUNE = 1000000;

const CONST_CNVRT_UNIT_0000000001KGM2_TO_KGM2_OFF_BRD_TUNE = 1000000000;

const CONST_CNVRT_UNIT_0001KGM2_TO_KGM2_OFF_BRD_TUNE = 1000;

const CONST_CNVRT_UNIT_0000001KGM2_TO_KGM2_OFF_BRD_TUNE = 1000000;

const CONST_CNVRT_UNIT_01KG_TO_KG_OFF_BRD_TUNE = 10;

const CONST_CNVRT_UNIT_0001KG_TO_KG_OFF_BRD_TUNE = 1000;

const CONST_CNVRT_UNIT_0001KG_M_TO_KG_M_OFF_BRD_TUNE = 1000;

const CONST_CNVRT_UNIT_0001MM_TO_M_OFF_BRD_TUNE = 1000000;

const CONST_CNVRT_UNIT_0001MM_TO_MM_OFF_BRD_TUNE = 1000;

const CONST_CNVRT_UNIT_0001MM_TO_001MM_OFF_BRD_TUNE = 10;

const CONST_CNVRT_UNIT_01MM_TO_M_OFF_BRD_TUNE = 10000;

const CONST_CNVRT_UNIT_MM_TO_M_OFF_BRD_TUNE = 1000;

const CONST_CNVRT_UNIT_0001NM_TO_NM_OFF_BRD_TUNE = 1000;

const CONST_CNVRT_UNIT_0001NM_A_TO_NM_A_OFF_BRD_TUNE = 1000;

const CONST_CNVRT_UNIT_00001NM_A_TO_NM_A_OFF_BRD_TUNE = 10000;

const CONST_CNVRT_UNIT_0001MM_S_TO_M_S_OFF_BRD_TUNE = 1000000;

const CONST_CNVRT_UNIT_0001MM_S_TO_MM_S_OFF_BRD_TUNE = 1000;

const CONST_CNVRT_UNIT_0001MM_S_TO_001MM_S_OFF_BRD_TUNE = 10;

const CONST_CNVRT_UNIT_001MM_S_TO_M_S_OFF_BRD_TUNE = 100000;

const CONST_CNVRT_UNIT_001MM_S_TO_MM_S_OFF_BRD_TUNE = 100;

const CONST_CNVRT_UNIT_0001RAD_S_TO_RAD_S_OFF_BRD_TUNE = 1000;

const CONST_CNVRT_UNIT_01K_TO_K_OFF_BRD_TUNE = 10;

const CONST_CNVRT_UNIT_0001PER_TO_PER_OFF_BRD_TUNE = 1000;

const CONST_CNVRT_UNIT_PER_TO_100PER_OFF_BRD_TUNE = 100;

const CONST_CNVRT_UNIT_001_TO_1_OFF_BRD_TUNE = 100;

const CONST_CNVRT_UNIT_001_TO_01_OFF_BRD_TUNE = 10;

const CONST_CNVRT_UNIT_01_TO_1_OFF_BRD_TUNE = 10;

const CONST_CNVRT_UNIT_0001_TO_1_OFF_BRD_TUNE = 1000;

const CONST_UNIT_1_OFF_BRD_TUNE = 1;

const CONST_RATIO_CALC_MASS_SCREW_OFF_BRD_TUNE = 7800;

const CONST_CALC_GAIN_PRPRTNL_LOOP_VEL_OFF_BRD_TUNE = 10000;

const CONST_CALC_GAIN_INTGRL_LOOP_VEL_OFF_BRD_TUNE = 1000;

const CONST_CALC_CNSTNT_TIME_INTGRL_LOOP_VEL_OFF_BRD_TUNE = 1000;

const CONST_CALC_BAND_TO_CNSTNT_TIME_FILTR_TRQ_OFF_BRD_TUNE = 100000;

const CONST_STEP_SIZ_GAIN_POS_CALC_NO_GAIN_SRV_OFF_BRD_TUNE = 5;

const CONST_CFFCNT_TRNSFRM_FOR_PHYSCL_CALC_RECTLINER_OFF_BRD_TUNE = 1000;

const CONST_LEN_LEAD_TYPE_ACTUATOR_ROTATIONAL_OFF_BRD_TUNE = 0;

const CONST_CALC_FACTOR_RSPNC_TMPR_WITH_FEEDFRWRD_IF_FEEDFRWRD_100_OFF_BRD_TUNE = 0.5;

const CONST_CALC_CNT_ERR_FROM_STATNRY_ERR_OFF_BRD_TUNE = 1.5;

function CalcCycleTime($distance_mm, $vel_mmps, $acc_G, $dcl_G, $inp_mm, $t_div_msec, $rate_Smotion, $gainPos, $gainFF, $modeAcc, &$timeInp_msec)
{
    $num = 0;
    $a_ = 0;
    $dt = array();
    $a_2 = $modeAcc == 1 && true;
    $a_3 = $distance_mm * 1000.0;
    $a_4 = $vel_mmps * 1000.0;
    $a_5 = $acc_G * 100.0;
    $a_6 = $dcl_G * 100.0;
    $a_7 = $inp_mm * 1000.0;
    $result;
    if (($result = a8($a_3, $a_4, $a_5, $a_6, 0, $t_div_msec, $gainPos, $a_)) != 0)
    {
        return $result;
    }
    if (($result = c($a_3, $a_4, $a_5, $a_6, $a_7, $t_div_msec, $rate_Smotion, $gainPos, $gainFF, $a_2, $dt, $num, $a_)) != 0)
    {
        return $result;
    }
    if ($num == 0)
    {
        $timeInp_msec = $num;
    }
    else
    {
        $timeInp_msec = $num - 1;
    }
    return 0;
}

function CalcMaxVelRunningTriangle($distance_mm, $acc_G, $dcl_G, &$refMaxVel_mmps)
{
    $num = 0;
    $result;
    if (($result = a4(($distance_mm * 1000.0), ($acc_G * 100.0), ($dcl_G * 100.0), $num)) != 0)
    {
        return $result;
    }
    $refMaxVel_mmps = $num / 1000.0;
    $refMaxVel_mmps = floor($refMaxVel_mmps * 1000.0) / 1000.0;
    return 0;
}

function c($A_0, $A_1, $A_2, $A_3, $A_4, $A_5, $A_6, $A_7, $A_8, $A_9, &$A_10, &$A_11, $A_12)
{
    $num = 0;
    if ($A_1 <= 0)
    {
        return int.Parse(Resources.RTN_ERR_VEL);
    }
    if ($A_0 < 0)
    {
        return int.Parse(Resources.RTN_ERR_DISTANCE);
    }
    if ($A_12 <= 0)
    {
        return int.Parse(Resources.RTN_ERR_QNT_RCRD);
    }
    if ($A_5 <= 0)
    {
        return int.Parse(Resources.RTN_ERR_TIME_DIV);
    }
    if ($A_6 < 0)
    {
        return int.Parse(Resources.RTN_ERR_RATE_S_MOTION);
    }
    if ($A_2 <= 0)
    {
        return int.Parse(Resources.RTN_ERR_ACC);
    }
    if ($A_3 <= 0)
    {
        return int.Parse(Resources.RTN_ERR_ACC);
    }
    if ($A_8 < 0)
    {
        return int.Parse(Resources.RTN_ERR_GAIN_FEEDFORWORD);
    }
    if ($A_7 <= 0)
    {
        return int.Parse(Resources.RTN_ERR_GAIN_POS);
    }
    $num2 = 0.0;
    CalcMaxVelRunningTriangle($A_0 / 1000.0, $A_2 / 100.0, $A_3 / 100.0, $num2);
    $result = 0;
    if (($result = a4($A_0, $A_2, $A_3, $num)) != 0)
    {
        return $result;
    }
    if ($num < $A_1)
    {
        $A_1 = $num;
    }
    try
    {
        $dt = null;
        if (($result = a13($A_0, $A_1, $A_2, $A_3, $A_4, $A_5, $A_6, $A_7, $A_8, $A_9, $dt, $A_11, $A_12)) != 0)
        {
            return $result;
        }
        $A_10 = null;
        //$A_10.TableName = "速度応答[mm/s]";
        // $A_10.Columns.Add("時刻[msec]", typeof(long));
        // $A_10.Columns.Add("速度応答[0.001mm/s]", typeof(double));
        $A_10Row = array("時刻[msec]" => 0, "速度応答[0.001mm/s]" => 0);
        $A_10[0] = $A_10Row;
        for ($num3 = 1; $num3 < $A_12; $num3++)
        {
            unset($A_10Row);
            $A_10Row = array(
                "時刻[msec]" => $num3,
                "速度応答[0.001mm/s]" => round(chgNumeric($dt[$num3]["速度応答[m/s]"]) * 1000000)
            );
            $A_10[$num3] = $A_10Row;
        }
    }
    catch(Exception $e)
    {
        return int.Parse(Resources.RTN_ERR_CALC);
    }
    return 0;
}

function a11($A_0, $A_1, $A_2, $A_3, $A_4, $A_5, $A_6, $A_7, &$A_8, &$A_9, $A_10)
{
    $num = 0.0;
    $num2 = 0.0;
    $num3 = 0.0;
    $num4 = 0.0;
    $num5 = 0.0;
    $num6 = $A_0 / 1000000.0;
    $num7 = $A_2 / 100.0 * 9.80665;
    $num8 = $A_3 / 100.0 * 9.80665;
    $num9 = $A_1 / 1000000.0;
    $num10 = $A_5 / 1000.0;
    $num11 = (!($A_0 - $A_4 < 0.0)) ? (($A_0 - $A_4) / 1000000.0) : 0.0;
    $result = 0;
    if (($result = b3($A_1, $num7, $num)) != 0)
    {
        return $result;
    }
    if (($result = a3($A_1, $num7, $num4)) != 0)
    {
        return $result;
    }
    if (($result = b5($A_0, $A_1, $num7, $num8, $num2)) != 0)
    {
        return $result;
    }
    if (($result = a5_2($A_0, $A_1, $num7, $num8, $num5)) != 0)
    {
        return $result;
    }
    if (($result = b3($A_1, $num8, $num3)) != 0)
    {
        return $result;
    }
    $num14;
    $num15;
    if ($A_7)
    {
        $num12 = pow($num9, 2.0) / (4.0 * pow(3.14159265358979, 2.0) * $num7);
        $num13 = pow($num9, 2.0) / (4.0 * pow(3.14159265358979, 2.0) * $num8);
        $num14 = $num12 * ($A_6 / 100.0);
        $num15 = $num13 * ($A_6 / 100.0);
    }
    else
    {
        $num14 = 0.0;
        $num15 = 0.0;
    }
    $num16 = $num + $num2;
    $num17 = $num4 + $num5;
    $A_8 = null;
    //$A_8.TableName = "位置指令[m]";
    // $A_8.Columns.Add("時刻[msec]", typeof(long));
    // $A_8.Columns.Add("位置指令[m]", typeof(double));
    $A_8Row = array("時刻[msec]" => 0, "位置指令[m]" => 0);
    $A_8 = array($A_8Row);
    $A_9 = 0;
    $num18 = 0.0;
    for ($num19 = 1; $num19 < $A_10; $num19++)
    {
        $num20;
        $num21;
        if ($num7 * pow($num10 * $num19, 2.0) / 2.0 <= $num4)
        {
            $num20 = $num7 * pow($num10 * $num19, 2.0) / 2.0;
            $num21 = $num14 * (1.0 - cos(6.28318530717958 * $num19 * $num10 / $num));
        }
        else if ($num4 + $num9 * ($num10 * $num19 - $num) <= $num17)
        {
            $num20 = $num4 + $num9 * ($num19 * $num10 - $num);
            $num21 = 0.0;
        }
        else if ($num18 < $num6)
        {
            $num20 = $num17 + ($num9 - $num8 * ($num19 * $num10 - $num16) / 2.0) * ($num19 * $num10 - $num16);
            $num21 = -1.0 * $num15 * (1.0 - cos(6.28318530717958 * ($num19 * $num10 - $num16) / $num3));
            if ($num18 > $num20 - $num21)
            {
                $num20 = $num6;
                $num21 = 0.0;
            }
        }
        else
        {
            $num20 = $num6;
            $num21 = 0.0;
        }
        unset($A_8Row);
        $A_8Row = array("時刻[msec]" => $num19, "位置指令[m]" => $num20 - $num21);
        $A_8[$num19] = $A_8Row;
        $num18 = chgNumeric($A_8Row["位置指令[m]"]);
        if ($num18 < $num11)
        {
            $A_9 = $num19;
        }
    }
    $A_9 += 1;
    return 0;
}

function b13($A_0, $A_1, $A_2, $A_3, $A_4, $A_5, $A_6, $A_7, $A_8, $A_9, &$A_10, &$A_11, $A_12)
{
    $num = 0.0;
    $num2 = 0.0;
    $num3 = 0.0;
    $num4 = 0.0;
    $num5 = 0.0;
    $dt = null;
    $num6 = $A_2 / 100.0 * 9.80665;
    $a_ = $A_3 / 100.0 * 9.80665;
    $result = 0;
    if (($result = b3($A_1, $num6, $num)) != 0)
    {
        return $result;
    }
    if (($result = a3($A_1, $num6, $num4)) != 0)
    {
        return $result;
    }
    if (($result = b5($A_0, $A_1, $num6, $a_, $num2)) != 0)
    {
        return $result;
    }
    if (($result = a5_2($A_0, $A_1, $num6, $a_, $num5)) != 0)
    {
        return $result;
    }
    $num3 = $A_5 / 1000.0;
    if ($A_7 <= 0)
    {
        return int.Parse(Resources.RTN_ERR_GAIN_POS);
    }
    $num7 = $A_8 / 100.0;
    $num8 = ($A_0 - $A_4 >= 0) ? (($A_0 - $A_4) / 1000000.0) : 0.0;
    try
    {
        if (($result = a11($A_0, $A_1, $A_2, $A_3, $A_4, $A_5, $A_6, $A_9, $dt, $A_11, $A_12)) != 0)
        {
            return $result;
        }
        $A_10 = null;
        //$A_10.TableName = "位置応答[m]";
        //$A_10.Columns.Add("時刻[msec]", typeof(long));
        //$A_10.Columns.Add("位置応答[m]", typeof(double));
        $A_10Row = array("時刻[msec]" => 0, "位置応答[m]" => 0);
        $A_10 = array(0 => $A_10Row);
        $A_11 = 0;
        $num9 = 0.0;
        for ($num10 = 1; $num10 < $A_12; $num10++)
        {
            unset($A_10Row);
            $A_10Row = array(
                "時刻[msec]" => $num10, 
                "位置応答[m]" => (($num3 * $A_7 + 2.0 * $num7) * chgNumeric($dt[$num10]["位置指令[m]"]) + ($num3 * $A_7 - 2.0 * $num7) * chgNumeric($dt[$num10 - 1]["位置指令[m]"]) + (2.0 - $num3 * $A_7) * $num9) / ($num3 * $A_7 + 2.0));
            $A_10[$num10] = $A_10Row;
            $num9 = chgNumeric($A_10Row["位置応答[m]"]);
            if ($num9 < $num8)
            {
                $A_11 = $num10;
            }
        }
        $A_11 += 1;
    }
    catch(Exception $e)
    {
        return int.Parse(Resources.RTN_ERR_CALC);
    }
    return 0;
}

function a13($A_0, $A_1, $A_2, $A_3, $A_4, $A_5, $A_6, $A_7, $A_8, $A_9, &$A_10, &$A_11, $A_12)
{
    $num = $A_5 / 1000.0;
    $dt = null;
    $result = 0;
    if (($result = b13($A_0, $A_1, $A_2, $A_3, $A_4, $A_5, $A_6, $A_7, $A_8, $A_9, $dt, $A_11, $A_12)) != 0)
    {
        return $result;
    }
    try
    {
        $num2 = 0.0;
        $A_10 = null;
        //$A_10.TableName = "速度応答[m/s]";
        //$A_10.Columns.Add("時刻[msec]", typeof(long));
        //$A_10.Columns.Add("速度応答[m/s]", typeof(double));
        $A_10Row = array("時刻[msec]" => 0, "速度応答[m/s]" => 0, );
        $A_10 = array(0 => $A_10Row);
        for ($num3 = 1; $num3 < $A_12; $num3++)
        {
            unset($A_10Row);
            $A_10Row = array(
                "時刻[msec]" => $num3, 
                "速度応答[m/s]" => (chgNumeric($dt[$num3]["位置応答[m]"]) - $num2) / $num, );
            $A_10[$num3] = $A_10Row;
            $num2 = chgNumeric($dt[$num3]["位置応答[m]"]);
        }
    }
    catch(Exception $e)
    {
        return int.Parse(Resources.RTN_ERR_CALC);
    }
    return 0;
}

function b3($A_0, $A_1, &$A_2)
{
    if ($A_1 <= 0.0)
    {
        return int.Parse(Resources.RTN_ERR_ACC);
    }
    $num = $A_0 / 1000000.0;
    try
    {
        $A_2 = $num / $A_1;
    }
    catch(Exception $e)
    {
        return int.Parse(Resources.RTN_ERR_CALC);
    }
    return 0;
}

function a3($A_0, $A_1, &$A_2)
{
    $x = 0.0;
    $result = 0;
    if (($result = b3($A_0, $A_1, $x)) != 0)
    {
        return $result;
    }
    try
    {
        $A_2 = $A_1 * pow($x, 2.0) / 2.0;
    }
    catch(Exception $e)
    {
        return int.Parse(Resources.RTN_ERR_CALC);
    }
    return 0;
}

function b5($A_0, $A_1, $A_2, $A_3, &$A_4)
{
    $num = 0.0;
    $num2 = 0.0;
    $num3 = 0.0;
    $result = 0;
    if (($result = a3($A_1, $A_2, $num)) != 0)
    {
        return $result;
    }
    if (($result = a3($A_1, $A_3, $num2)) != 0)
    {
        return $result;
    }
    $num4 = $A_1 / 1000000.0;
    $num3 = ($A_0 / 1000000.0 - $num - $num2) / $num4;
    if ($num3 < 0.0)
    {
        $num3 = 0.0;
    }
    try
    {
        $A_4 = $num3;
    }
    catch(Exception $e)
    {
        return int.Parse(Resources.RTN_ERR_CALC);
    }
    return 0;
}

function a5_1($A_0, $A_1, $A_2, $A_3, &$A_4)
{
    $num = 0.0;
    $num2 = 0.0;
    $num3 = 0.0;
    $result = 0;
    if (($result = b3($A_1, $A_2, $num)) != 0)
    {
        return $result;
    }
    if (($result = b5($A_0, $A_1, $A_2, $A_3, $num2)) != 0)
    {
        return $result;
    }
    if (($result = b3($A_1, $A_3, $num3)) != 0)
    {
        return $result;
    }
    try
    {
        $A_4 = $num + $num2 + $num3;
    }
    catch(Exception $e)
    {
        return int.Parse(Resources.RTN_ERR_CALC);
    }
    return 0;
}

function a5_2($A_0, $A_1, $A_2, $A_3, &$A_4)
{
    $num = 0.0;
    $result = 0;
    if (($result = b5($A_0, $A_1, $A_2, $A_3, $num)) != 0)
    {
        return $result;
    }
    $num2 = $A_1 / 1000000.0 * $num;
    try
    {
        $A_4 = $num2;
    }
    catch(Exception $e)
    {
        return int.Parse(Resources.RTN_ERR_CALC);
    }
    return 0;
}

function a8($A_0, $A_1, $A_2, $A_3, $A_4, $A_5, $A_6, &$A_7)
{
    $num = 0.0;
    $num2 = 0;
    if ($A_1 <= 0)
    {
        return int.Parse(Resources.RTN_ERR_VEL);
    }
    if ($A_0 <= 0)
    {
        return int.Parse(Resources.RTN_ERR_DISTANCE);
    }
    if ($A_5 <= 0)
    {
        return int.Parse(Resources.RTN_ERR_TIME_DIV);
    }
    if ($A_4 < 0)
    {
        return int.Parse(Resources.RTN_ERR_TIME_REST);
    }
    if ($A_2 <= 0)
    {
        return int.Parse(Resources.RTN_ERR_ACC);
    }
    if ($A_3 <= 0)
    {
        return int.Parse(Resources.RTN_ERR_ACC);
    }
    if ($A_6 <= 0)
    {
        return int.Parse(Resources.RTN_ERR_GAIN_POS);
    }
    $num3 = 1.0 / $A_6;
    $a_ = $A_2 / 100.0 * 9.80665;
    $a_2 = $A_3 / 100.0 * 9.80665;
    $result = 0;
    if (($result = a4($A_0, $A_2, $A_3, $num2)) != 0)
    {
        return $result;
    }
    if ($num2 < $A_1)
    {
        $A_1 = $num2;
    }
    if (($result = a5_1($A_0, $A_1, $a_, $a_2, $num)) != 0)
    {
        return $result;
    }
    $num4 = $A_5 / 1000.0;
    $num5 = $A_4 / 1000.0;
    try
    {
        $A_7 = ceil(($num + $num5 + $num3 * 10.0) / $num4);
    }
    catch(Exception $e)
    {
        return int.Parse(Resources.RTN_ERR_CALC);
    }
    return 0;
}

function a4($A_0, $A_1, $A_2, &$A_3)
{
    if ($A_0 < 0)
    {
        return int.Parse(Resources.RTN_ERR_DISTANCE);
    }
    if ($A_1 <= 0)
    {
        return int.Parse(Resources.RTN_ERR_ACC);
    }
    if ($A_2 <= 0)
    {
        return int.Parse(Resources.RTN_ERR_ACC);
    }
    $num = ($A_1 + $A_2);
    if ($num == 0.0)
    {
        return int.Parse(Resources.RTN_ERR_CALC);
    }
    $num2 = $A_1 / 100.0 * 9.80665;
    $num3 = $A_2 / 100.0 * 9.80665;
    $num = $num / 100.0 * 9.80665;
    $num4 = $A_0 / 1000000.0;
    $num5 = sqrt(2.0 * $num2 * $num3 * $num4 / $num);
    try
    {
        $A_3 = round($num5 * 1000000.0);
    }
    catch(Exception $e)
    {
        return int.Parse(Resources.RTN_ERR_CALC);
    }
    return 0;
}

function chgNumeric($stTarget)
{
    if (is_numeric($stTarget))
    {
        return $stTarget;
    }
    return 0;
}

//$output = null;
//CalcCycleTime(100,450,0.5,0.5,0.1,1,0,40,0,0,$output);
//print("output=");
//print($output);

?>