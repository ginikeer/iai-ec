@section('title') e电缸机种选定 @stop
@section('style')
<style type="text/css">
	#dvConditionLoadEntryImg{ float:left; } 
	#dvConditionLoadEntry1{ float:right; } 
	#dvConditionLoadEntry2{ float:right; } 
	#imgdvConditionLoad{ width:auto; height:auto; max-width:350px; max-height:350px; } 
	.imgSize { width:auto; height:auto; max-height:70px; }
</style>
@stop

@extends('master/clientsub')
@section('content')
<div id="child-site-box">
    <img id="ContentPlaceHolder1_imgLoadSliderTitle" class="imgSize" src="{{ asset('i/client/EcRequire/LoadSliderTitle.png') }}">
    
    <div id="entry-box">
        
        <div id="dvWorkLoadingState">
            <div id="dvWorkLoadingStateDescription" style="float:left">
                <img id="ContentPlaceHolder1_imgWorkLoadStateContent1" class="imgSize" src="{{ asset('i/client/EcRequire/LoadSlider_content1.png') }}">
            </div>

            <div id="dvWorkLoadingStateEntry">
                <div style="float:left;">                    
                    <div id="dvWorkLoadingStateEntryHTitle">
                        <img id="ContentPlaceHolder1_imgWorkLoadStateHTitle" class="imgSize" src="{{ asset('i/client/EcRequire/LoadSlider_WorkLoadStateH.png') }}">
                    </div>                   
                    <div id="dvWorkLoadingStateEntryHImage">
                        <div>
                            <input type="image" name="ctl00$ContentPlaceHolder1$imgWorkLoadState1" id="ContentPlaceHolder1_imgWorkLoadState1" class="ImgWorkLoadStateSlider" src="{{ asset('i/client/EcRequire/WorkLoadState1_Off.png') }}" onclick="return ImageChange(this,1);">
                            <input type="image" name="ctl00$ContentPlaceHolder1$imgWorkLoadState2" id="ContentPlaceHolder1_imgWorkLoadState2" class="ImgWorkLoadStateSlider" src="{{ asset('i/client/EcRequire/WorkLoadState2_Off.png') }}" onclick="return ImageChange(this,2);">
                            <input type="image" name="ctl00$ContentPlaceHolder1$imgWorkLoadState3" id="ContentPlaceHolder1_imgWorkLoadState3" class="ImgWorkLoadStateSlider" src="{{ asset('i/client/EcRequire/WorkLoadState3_Off.png') }}" onclick="return ImageChange(this,3);">
                        </div>
                        <div>
                            <input type="image" name="ctl00$ContentPlaceHolder1$imgWorkLoadState4" id="ContentPlaceHolder1_imgWorkLoadState4" class="ImgWorkLoadStateSlider" src="{{ asset('i/client/EcRequire/WorkLoadState4_Off.png') }}" onclick="return ImageChange(this,4);">
                            <input type="image" name="ctl00$ContentPlaceHolder1$imgWorkLoadState5" id="ContentPlaceHolder1_imgWorkLoadState5" class="ImgWorkLoadStateSlider" src="{{ asset('i/client/EcRequire/WorkLoadState5_Off.png') }}" onclick="return ImageChange(this,5);">
                            <input type="image" name="ctl00$ContentPlaceHolder1$imgWorkLoadState6" id="ContentPlaceHolder1_imgWorkLoadState6" class="ImgWorkLoadStateSlider" src="{{ asset('i/client/EcRequire/WorkLoadState6_Off.png') }}" onclick="return ImageChange(this,6);">
                        </div>
                    </div>
                    <div>
                        <span id="ContentPlaceHolder1_lblError1" class="AttentionMsg"></span>
                    </div>
                </div>
                <div style="float:right;">
                    <div id="dvWorkLoadingStateEntryV">
                        <img id="ContentPlaceHolder1_imgWorkLoadStateVTitle" class="imgSize" src="{{ asset('i/client/EcRequire/LoadSlider_WorkLoadStateV.png') }}">
                    </div>                                               
                    <div id="dvWorkLoadingStateEntryVImage">
                        <input type="image" name="ctl00$ContentPlaceHolder1$imgWorkLoadState7" id="ContentPlaceHolder1_imgWorkLoadState7" class="ImgWorkLoadStateSlider" src="{{ asset('i/client/EcRequire/WorkLoadState7_Off.png') }}" onclick="return ImageChange(this,7);" >
                        <input type="image" name="ctl00$ContentPlaceHolder1$imgWorkLoadState8" id="ContentPlaceHolder1_imgWorkLoadState8" class="ImgWorkLoadStateSlider" src="{{ asset('i/client/EcRequire/WorkLoadState8_Off.png') }}" onclick="return ImageChange(this,8);" >
                        <input type="image" name="ctl00$ContentPlaceHolder1$imgWorkLoadState9" id="ContentPlaceHolder1_imgWorkLoadState9" class="ImgWorkLoadStateSlider" src="{{ asset('i/client/EcRequire/WorkLoadState9_Off.png') }}" onclick="return ImageChange(this,9);" >
                    </div>
                </div>
            </div>
        </div>
        
        <div id="dvConditionLoad" style="clear:both;">
            <div id="dvConditionLoadDescription" style="float:left">
                <img id="ContentPlaceHolder1_imgConditionLoadContent1" class="imgSize" src="{{ asset('i/client/EcRequire/LoadSlider_content2.png') }}" style="max-height:25px;">
            </div>
            <div id="dvConditionLoadEntry">
                <div id="dvConditionLoadEntryImg" style="clear:both;">
                    <img id="imgdvConditionLoad" class="imgSize" src="{{ asset('i/client/EcRequire/ConditionLoadSliderImage1.png') }}">
                </div>
                <div id="dvConditionLoadEntry1">
                    <img id="ContentPlaceHolder1_imgConditionLoadEntry1Content" src="{{ asset('i/client/EcRequire/LoadSlider_content3.png') }}" style="max-width:300px;">
                    <img id="ContentPlaceHolder1_imgConditionLoadItem" class="imgSize" src="{{ asset('i/client/EcRequire/LoadSlider_LoadItem.png') }}">
                    <input name="ctl00$ContentPlaceHolder1$numConditionLoad" type="text" id="ContentPlaceHolder1_numConditionLoad" class="number" isimeon="false" onchange="calc()" onkeydown="javascript:return numOnly(document.getElementById('ContentPlaceHolder1_numConditionLoad'),1,false);return true;" onblur="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_numConditionLoad'),4,true,2,1);return true;" onfocus="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_numConditionLoad'),4,false,2,1);return true;" style="ime-mode:disabled;">
                    <img id="ContentPlaceHolder1_imgConditionLoadUnit" src="{{ asset('i/client/EcRequire/LoadSlider_LoadUnit.png') }}">
                    <div>
                        <span id="ContentPlaceHolder1_lblError2" class="AttentionMsg"></span>
                    </div>
                    <br>
                                            <hr id="hrConditionLoadEntry" class="hr-margin">
                </div>                                        
                <div id="dvConditionLoadEntry2">
                    <img id="ContentPlaceHolder1_imgConditionLoadEntry2Content" src="{{ asset('i/client/EcRequire/LoadSlider_content4.png') }}" style="max-width:300px;">
                    <!--<img id="ContentPlaceHolder1_imgConditionGravityCenterPositionItem" class="imgSize" src="{{ asset('i/client/EcRequire/LoadSlider_GrvCntrPositionItem.png') }}">-->
                    <input name="ctl00$ContentPlaceHolder1$numConditionGravityCenterPosition" type="text" maxlength="3" id="ContentPlaceHolder1_numConditionGravityCenterPosition" class="number" onchange="calc()" onkeypress="return CheckNum();" style="ime-mode:disabled;">
                    <img id="ContentPlaceHolder1_imgConditionGravityCenterPositionUnit" src="{{ asset('i/client/EcRequire/LoadSlider_GrvCntrPositionUnit.png') }}">
                    <div>
                        <span id="ContentPlaceHolder1_lblError3" class="AttentionMsg"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
	<script src="{{ asset('js/client/ECRequirementLoadSlider.js') }}"></script>
	<script type="text/javascript">
		function procCheckLoadSlider(WorkLoadingState) {
	        var Load = 0;
	        var GrvCntrPosition = 0;
	        var cntCheck = 0;
	
	        var ctrLoad = document.getElementById("ContentPlaceHolder1_numConditionLoad");
	        var ctrGrvCntrPosition = document.getElementById("ContentPlaceHolder1_numConditionGravityCenterPosition");
	
	
	        Load = ctrLoad.value;
	        GrvCntrPosition = ctrGrvCntrPosition.value;
	
	        if ((WorkLoadingState == null || WorkLoadingState != null) || (ctrLoad.value.length == 0 || ctrLoad.value == 0) || (GrvCntrPosition.length == 0 || GrvCntrPosition.value == 0)) {
	
	            if (WorkLoadingState == null) {
	                document.getElementById("ContentPlaceHolder1_lblError1").innerHTML = "ワーク積載状態を選択してください。";
	                cntCheck ++;
	            }
	            if (ctrLoad.value.length == 0) {
	                document.getElementById("ContentPlaceHolder1_lblError2").innerHTML = "荷重を入力してください。";
	                cntCheck++;
	            }
	            if (Load == '0') {
	                document.getElementById("ContentPlaceHolder1_lblError2").innerHTML = "荷重は0kgより大きい値を入力してください";
	                cntCheck++;
	            }
	
	            if (GrvCntrPosition.length == 0) {
	                document.getElementById("ContentPlaceHolder1_lblError3").innerHTML = "重心位置を入力してください。";
	                cntCheck++;
	            }
	            if (GrvCntrPosition == '0') {
	                document.getElementById("ContentPlaceHolder1_lblError3").innerHTML = "重心位置は0㎜より大きい値を入力してください";
	                cntCheck++;
	            }
	
	            if (cntCheck != 0) {
	                return false;
	            }                
	        }
	
	        return true;
	    };
    </script>
@stop