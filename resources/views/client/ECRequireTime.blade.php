@section('title') 6．输入周期时间@stop
@extends('master/clientsub')
@section('content')
<div id="child-site-box">
    <img id="ContentPlaceHolder1_imgCycleTimeSliderTitle" src="{{ asset('i/client/EcRequire/CycleTimeSliderTitle.png') }}">
    
    <div id="entry-box">
        
        <div id="dvRoundTrip">
            <div id="dvRoundTripDescription">
                <img id="ContentPlaceHolder1_imgCycletimeSliderContent1" src="{{ asset('i/client/EcRequire/CycleTimeContent1.png') }}">
            </div>
            <div id="dvCycleTimeImg">
                <img id="ContentPlaceHolder1_imgCycleTimeSlider" src="{{ asset('i/client/EcRequire/CycleTimeSliderImage1.png') }}">
            </div>
            <div id="dvCycleTimeEntry">
                <img id="ContentPlaceHolder1_imgHopeCycleTimeTitle" src="{{ asset('i/client/EcRequire/CycleTime_HopeCycleTime.png') }}">
                <input name="ctl00$ContentPlaceHolder1$numHopeCycleTime" type="text" id="ContentPlaceHolder1_numHopeCycleTime" class="number" onchange="txtChange(this)" onkeydown="javascript:return numOnly(document.getElementById('ContentPlaceHolder1_numHopeCycleTime'),3,false);return true;" onblur="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_numHopeCycleTime'),7,true,3,3);return true;" onfocus="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_numHopeCycleTime'),7,false,3,3);return true;" style="ime-mode:disabled;">
                <span id="ContentPlaceHolder1_lblHopeCycleTimeUnit" class="ctlLabel">S</span>
            </div>
            <div id="dvCycleTimeDisp">
                <img id="ContentPlaceHolder1_imgStrokeTitle" src="{{ asset('i/client/EcRequire/CycleTime_Stroke.png') }}">
                <span id="ContentPlaceHolder1_lblStroke" class="lblFix">908</span>
                <span id="ContentPlaceHolder1_lblStrokeUnit" class="ctlLabel">mm</span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
	<script src="{{ asset('js/client/ECRequirementCycleTimeSlider.js') }}"></script>
@stop