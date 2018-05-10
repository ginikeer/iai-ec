@section('title') e电缸机种选定 @stop
@section('style')
<style type="text/css">
	#dvConditionPressingEntryImg{
	    float:left;
	}
	#dvConditionPressingEntry1{
	    float:right;
	    margin-right:5px;
	}
	#dvConditionPressingEntry2{
	    float:right;
	}
	
	#imgdvConditionPressing{
	    width:auto;
	    height:auto;
	    max-width:350px;
	    max-height:350px;
	}
	
	#dvPressingError{
	    float:right;
	    height:30px;
	    text-align:right;
	    margin-right:20px;
	}
	
	.imgSize
	{
	    width:auto;
	    height:auto;
	    max-height:70px;
	}
	input.number{
		vertical-align: bottom;
	}
</style>
@stop

@extends('master/clientsub')
@section('content')
<div id="child-site-box">
    <img id="ContentPlaceHolder1_imgPressingSmallTitle" class="imgSize" src="{{ asset('i/client/EcRequire/PressingSmallTypeTitle.png') }}">
    <div id="entry-box">
        <div id="dvLinearGuideSmall">
            <div id="dvLinearGuideSmallDescription">
                <img id="ContentPlaceHolder1_imgLinearGuideSmallContent1" class="imgSize" src="{{ asset('i/client/EcRequire/PressingSmallTypeContent1.png') }}">
            </div>
            <div>
                <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton1" id="ContentPlaceHolder1_ImageButton1" class="ImgLinearGuide" onclick="return dummyFunc();">
            </div>

            <div id="dvLinearGuideSmallntry">
                <div style="float:left;">                    
                    <div id="dvSmallTypeHeaderNoneTitle">
                        <img id="ContentPlaceHolder1_imgSmallTypeHeaderNone" class="imgSize" src="{{ asset('i/client/EcRequire/SmallTypeHeaderNone.png') }}">
                    </div>
                    <div id="dvSmallTypeHeaderNoneImage">
                        <input type="image" name="ctl00$ContentPlaceHolder1$imgSmallTypeRP" id="ContentPlaceHolder1_imgSmallTypeRP" class="ImgLinearGuide" src="{{ asset('i/client/EcRequire/SmallTypeRP_Off.png') }}" onclick="return ImageChange(this,1);">
                    </div>
                </div>
                <div style="float:left;">       
                    <div id="dvSmallTypeHeaderBallBushGSTitle">
                        <img id="ContentPlaceHolder1_imgSmallTypeHeaderBallBushGS" class="imgSize" src="{{ asset('i/client/EcRequire/SmallTypeHeaderBallBush_GS.png') }}">
                    </div>
                    <div id="dvSmallTypeHeaderBallBushGSImage">
                        <input type="image" name="ctl00$ContentPlaceHolder1$imgSmallTypeGS" id="ContentPlaceHolder1_imgSmallTypeGS" class="ImgLinearGuide" src="{{ asset('i/client/EcRequire/SmallTypeGS_Off.png') }}" onclick="return ImageChange(this,2);">
                        
                    </div>
                </div>
                <div style="float:left;">       
                    <div id="dvSmallTypeHeaderBallBushGDTitle">
                        <img id="ContentPlaceHolder1_imgSmallTypeHeaderBallBushGD" class="imgSize" src="{{ asset('i/client/EcRequire/SmallTypeHeaderBallBush_GD.png') }}">
                    </div>
                    <div id="dvSmallTypeHeaderBallBushGDImage">
                        <input type="image" name="ctl00$ContentPlaceHolder1$imgSmallTypeGD" id="ContentPlaceHolder1_imgSmallTypeGD" class="ImgLinearGuide" src="{{ asset('i/client/EcRequire/SmallTypeGD_Off.png') }}" onclick="return ImageChange(this,3);">
                    </div>
                </div>
                <div style="float:left;">
                    <div id="dvSmallTypeHeaderTCTitle">
                        <img id="ContentPlaceHolder1_imgSmallTypeHeaderTC" class="imgSize" src="{{ asset('i/client/EcRequire/SmallTypeHeaderTC.png') }}">
                    </div>
                    <div id="dvSmallTypeHeaderTC">
                        <input type="image" name="ctl00$ContentPlaceHolder1$imgSmallTypeTC" id="ContentPlaceHolder1_imgSmallTypeTC" class="ImgLinearGuide" src="{{ asset('i/client/EcRequire/SmallTypeTC_Off.png') }}" onclick="return ImageChange(this,4);">
                    </div>
                </div>
                <div style="float:left;">
                    <div id="dvSmallTypeHeaderTWTitle">
                        <img id="ContentPlaceHolder1_imgSmallTypeHeaderTW" class="imgSize" src="{{ asset('i/client/EcRequire/SmallTypeHeaderTW.png') }}">
                    </div>
                    <div id="dvSmallTypeHeaderTW">
                        <input type="image" name="ctl00$ContentPlaceHolder1$imgSmallTypeTW" id="ContentPlaceHolder1_imgSmallTypeTW" class="ImgLinearGuide" src="{{ asset('i/client/EcRequire/SmallTypeTW_Off.png') }}" onclick="return ImageChange(this,5);">
                    </div>
                </div>
            </div>
        </div>
        
        <div id="dvConditionPressing" style="clear:both;">
            <div id="dvConditionPressingDescription" style="float:left">
                <img id="ContentPlaceHolder1_imgConditionPressingContent1" class="imgSize" src="{{ asset('i/client/EcRequire/PressingSmallTypeContent2.png') }}">
            </div>
            <div id="dvConditionPressingEntry">
                <div id="dvConditionPressingEntryImg" style="clear:both;">
                    <img id="imgdvConditionPressing" class="imgSize">
                </div>
                <div id="dvConditionPressingEntry1">
                    <img id="ContentPlaceHolder1_imgPressingRange" src="{{ asset('i/client/EcRequire/PressingSmallType_Range.png') }}">
                    <input name="ctl00$ContentPlaceHolder1$txtPressing" type="text" id="ContentPlaceHolder1_txtPressing" class="number" isimeon="false" onchange="calc()" onkeydown="javascript:return numOnly(document.getElementById('ContentPlaceHolder1_txtPressing'),0,false);return true;" onblur="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_txtPressing'),3,true,2,0);return true;" onfocus="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_txtPressing'),2,false,2,0);return true;" style="ime-mode:disabled;" maxlength="3">
                    <img id="ContentPlaceHolder1_imgConditionPressUnit" src="{{ asset('i/client/EcRequire/PressingSmallType_Unite.png') }}">
                    <br>
                </div>              
                <div id="dvPressingError">
                    <span id="ContentPlaceHolder1_lblPressingError" class="AttentionMsg"> </span>
                </div>                          
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
	<script src="{{ asset('js/client/ECRequirementPressingSmall.js') }}"></script>
@stop
