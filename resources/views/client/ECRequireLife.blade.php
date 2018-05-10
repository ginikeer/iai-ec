@section('title') 運転時間@stop
@extends('master/clientsub')
@section('content')
<div id="child-site-box">
    <img id="ContentPlaceHolder1_imgRequirementRunnintTimeTitle" src="{{ asset('i/client/EcRequire/ECRequirementRunningTimeTitle.png') }}">
    <div id="dvRoundTrip">
        <img id="ContentPlaceHolder1_imgNo1Title" src="{{ asset('i/client/EcRequire/RunnningTime-content1.png') }}">
        <div id="dvRoundTripEntry">
        <img id="ContentPlaceHolder1_imgNo1ContentTitle" src="{{ asset('i/client/EcRequire/RunnningTime-RoundTripItem.png') }}">
            <input name="ctl00$ContentPlaceHolder1$numRoundTrip" type="text" id="ContentPlaceHolder1_numRoundTrip" class="number" onchange="txtChange(this)" onkeydown="javascript:return numOnly(document.getElementById('ContentPlaceHolder1_numRoundTrip'),1,false);return true;" onblur="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_numRoundTrip'),6,true,4,1);return true;" onfocus="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_numRoundTrip'),6,false,4,1);return true;" style="ime-mode:disabled;">
            <img id="ContentPlaceHolder1_imgNo1ContentUnit" src="{{ asset('i/client/EcRequire/RunnningTime-RoundTripUnit.png') }}">
        </div>
        <div id="dvRoundTripError">
            <span id="ContentPlaceHolder1_lblRoundTripError" class="AttentionMsg"></span>
        </div>
    </div>
    <div id="dvOperatingTime">
        <img id="ContentPlaceHolder1_imgNo2Title" src="{{ asset('i/client/EcRequire/RunnningTime-content2.png') }}">
        <div id="dvOperatingTimeEntry">
            <img id="ContentPlaceHolder1_imgNo2ContentTitle" src="{{ asset('i/client/EcRequire/RunnningTime-OperatingTimeItem.png') }}">
            <input name="ctl00$ContentPlaceHolder1$numOperatingTime" type="text" maxlength="2" id="ContentPlaceHolder1_numOperatingTime" class="number" onchange="txtChange(this)" onkeypress="return CheckNum();" style="ime-mode:disabled;">
            <img id="ContentPlaceHolder1_imgNo2ContentUnit" src="{{ asset('i/client/EcRequire/RunnningTime-OperatingTimeUnit.png') }}">
        </div>
        <div id="dvOperatingTimeError">
            <span id="ContentPlaceHolder1_lblOperatingTimeError" class="AttentionMsg"></span>
        </div>
    </div>
    <div id="dvOperatingDay">
        <img id="ContentPlaceHolder1_imgNo3Title" src="{{ asset('i/client/EcRequire/RunnningTime-content3.png') }}">
        <div id="dvOperatingDayEntry">
            <img id="ContentPlaceHolder1_imgNo3ContentTitle" src="{{ asset('i/client/EcRequire/RunnningTime-OperatingDaysItem.png') }}">
            <input name="ctl00$ContentPlaceHolder1$numOperatingDay" type="text" maxlength="3" id="ContentPlaceHolder1_numOperatingDay" class="number" onchange="txtChange(this)" onkeypress="return CheckNum();" style="ime-mode:disabled;">
        	<img id="ContentPlaceHolder1_imgNo3ContentUnit" src="{{ asset('i/client/EcRequire/RunnningTime-OperatingDaysUnit.png') }}">
        </div>
        <div id="dvOperatingDayError">
            <span id="ContentPlaceHolder1_lblOperatingDayError" class="AttentionMsg"></span>
        </div>
    </div>
</div>
@endsection

@section('script')
	<script src="{{ asset('js/client/ECRequirementRunningTime.js') }}"></script>
@stop
