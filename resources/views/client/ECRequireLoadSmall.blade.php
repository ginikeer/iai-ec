@section('title') e电缸机种选定 @stop
@section('style')
<style type="text/css">
	#dvConditionLoadEntryImg {
		float: left;
	}
	
	#dvConditionLoadEntry1 {
		float: right;
	}
	
	#dvConditionLoadEntry2 {
		float: right;
	}
	
	#imgdvConditionLoad {
		width: auto;
		height: auto;
		max-width: 330px;
		max-height: 330px;
	}
	
	.imgSize {
		width: auto;
		height: auto;
		max-height: 70px;
	}
	
	input.number {
		vertical-align: bottom;
	}
</style>
@stop

@extends('master/clientsub')
@section('content')
<div id="child-site-box">
	<img id="ContentPlaceHolder1_imgLoadSliderTitle" class="imgSize" src="{{ asset('i/client/EcRequire/LoadSmallTypeTitle.png') }}">

	<div id="entry-box">
		<div id="dvLinearGuideRod">
			<div id="dvLinearGuideRodDescription" style="float:left">
				<img id="ContentPlaceHolder1_imgLinearGuideRodContent1" class="imgSize" src="{{ asset('i/client/EcRequire/LoadSmallTypeContent1.png') }}">
			</div>
			<div>
				<input type="image" name="ctl00$ContentPlaceHolder1$ImageButton1" id="ContentPlaceHolder1_ImageButton1" class="ImgLinearGuide" onclick="return dummyFunc();">
			</div>

			<div id="dvLinearGuideRodEntry">
				<div style="float:left;">
					<div id="dvSmallTypeHeaderNoneTitle">
						<img id="ContentPlaceHolder1_imgSmallTypeHeaderNone" class="imgSize" src="{{ asset('i/client/EcRequire/SmallTypeHeaderNone.png') }}">
					</div>
					<div id="dvSmallTypeHeaderNoneImage">
						<input type="image" name="ctl00$ContentPlaceHolder1$imgSmallTypeRP" id="ContentPlaceHolder1_imgSmallTypeRP" class="ImgLinearGuide" onkeydown="return KeyDownButton(this)" src="{{ asset('i/client/EcRequire/SmallTypeRP_Off.png') }}" onclick="return ImageChangeGuide(this,1);">
					</div>
				</div>
				<div style="float:left;">
					<div id="dvSmallTypeHeaderBallBushGSTitle">
						<img id="ContentPlaceHolder1_imgSmallTypeHeaderBallBushGS" class="imgSize" src="{{ asset('i/client/EcRequire/SmallTypeHeaderBallBush_GS.png') }}">
					</div>
					<div id="dvSmallTypeHeaderBallBushImageGS">
						<input type="image" name="ctl00$ContentPlaceHolder1$imgSmallTypeGS" id="ContentPlaceHolder1_imgSmallTypeGS" class="ImgLinearGuide" onkeydown="return KeyDownButton(this)" src="{{ asset('i/client/EcRequire/SmallTypeGS_Off.png') }}" onclick="return ImageChangeGuide(this,2);">

					</div>
				</div>
				<div style="float:left;">
					<div id="dvSmallTypeHeaderBallBushGDTitle">
						<img id="ContentPlaceHolder1_imgSmallTypeHeaderBallBushGD" class="imgSize" src="{{ asset('i/client/EcRequire/SmallTypeHeaderBallBush_GD.png') }}">
					</div>
					<div id="dvSmallTypeHeaderBallBushImageGD">
						<input type="image" name="ctl00$ContentPlaceHolder1$imgSmallTypeGD" id="ContentPlaceHolder1_imgSmallTypeGD" class="ImgLinearGuide" onkeydown="return KeyDownButton(this)" src="{{ asset('i/client/EcRequire/SmallTypeGD_Off.png') }}" onclick="return ImageChangeGuide(this,3);">
					</div>
				</div>
				<div style="float:left;">
					<div id="dvSmallTypeHeaderTCTitle">
						<img id="ContentPlaceHolder1_imgSmallTypeHeaderTC" class="imgSize" src="{{ asset('i/client/EcRequire/SmallTypeHeaderTC.png') }}">
					</div>
					<div id="dvSmallTypeHeaderTC">
						<input type="image" name="ctl00$ContentPlaceHolder1$imgSmallTypeTC" id="ContentPlaceHolder1_imgSmallTypeTC" class="ImgLinearGuide" onkeydown="return KeyDownButton(this)" src="{{ asset('i/client/EcRequire/SmallTypeTC_Off.png') }}" onclick="return ImageChangeGuide(this,4);">
					</div>
				</div>
				<div style="float:left;">
					<div id="dvSmallTypeHeaderTWTitle">
						<img id="ContentPlaceHolder1_imgSmallTypeHeaderTW" class="imgSize" src="{{ asset('i/client/EcRequire/SmallTypeHeaderTW.png') }}">
					</div>
					<div id="dvSmallTypeHeaderTW">
						<input type="image" name="ctl00$ContentPlaceHolder1$imgSmallTypeTW" id="ContentPlaceHolder1_imgSmallTypeTW" class="ImgLinearGuide" onkeydown="return KeyDownButton(this)" src="{{ asset('i/client/EcRequire/SmallTypeTW_Off.png') }}" onclick="return ImageChangeGuide(this,5);">
					</div>
				</div>
			</div>
		</div>

		<div id="dvWorkLoadingState">
			<div id="dvWorkLoadingStateDescription" style="float:left">
				<img id="ContentPlaceHolder1_imgWorkLoadStateContent1" class="imgSize" src="{{ asset('i/client/EcRequire/imgLinearGuideRodContent2.png') }}">
			</div>
			<div id="dvWorkLoadingStateEntry">
				<div style="float:left;">
					<div id="dvWorkLoadingStateEntryHImage">
						<div>
							<input type="image" name="ctl00$ContentPlaceHolder1$imgWorkLoadState1" id="ContentPlaceHolder1_imgWorkLoadState1" class="ImgWorkLoadStateSmallType" src="{{ asset('i/client/EcRequire/WorkSmallLoadState1_Off.png') }}" onclick="return ImageChange(this,1);">
							<input type="image" name="ctl00$ContentPlaceHolder1$imgWorkLoadState2" id="ContentPlaceHolder1_imgWorkLoadState2" class="ImgWorkLoadStateSmallType" src="{{ asset('i/client/EcRequire/WorkSmallLoadState2_Off.png') }}" onclick="return ImageChange(this,2);" disabled="">
							<input type="image" name="ctl00$ContentPlaceHolder1$imgWorkLoadState3" id="ContentPlaceHolder1_imgWorkLoadState3" class="ImgWorkLoadStateSmallType" src="{{ asset('i/client/EcRequire/WorkSmallLoadState3_Off.png') }}" onclick="return ImageChange(this,3);">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="dvConditionLoad" style="clear:both;">
			<div id="dvConditionLoadDescription" style="float:left">
				<img id="ContentPlaceHolder1_imgConditionLoadContent1" class="imgSize" src="{{ asset('i/client/EcRequire/imgLinearGuideRodContent3.png') }}" style="max-height:25px;">
			</div>
			<div id="dvConditionLoadEntry">
				<div id="dvConditionLoadEntryImg" style="clear:both;">
					<img id="imgdvConditionLoad" class="imgSize" src="{{ asset('i/client/EcRequire/ConditionSmallLoadSliderImage1.png') }}">
				</div>
				<div id="dvConditionLoadEntry1">
					<img id="ContentPlaceHolder1_imgConditionLoadEntry1Content" src="{{ asset('i/client/EcRequire/imgLinearGuideRodContent4.png') }}" style="max-width:300px;">
					<img id="ContentPlaceHolder1_imgConditionLoadItem" class="imgSize" src="{{ asset('i/client/EcRequire/LoadSlider_LoadItem.png') }}">
					<input name="ctl00$ContentPlaceHolder1$numConditionLoad" type="text" id="ContentPlaceHolder1_numConditionLoad" class="number" isimeon="false" onchange="calc()" onkeydown="javascript:return numOnly(document.getElementById('ContentPlaceHolder1_numConditionLoad'),1,false);return true;" onblur="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_numConditionLoad'),4,true,2,1);return true;" onfocus="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_numConditionLoad'),4,false,2,1);return true;" style="ime-mode:disabled;">
					<img id="ContentPlaceHolder1_imgConditionLoadUnit" src="{{ asset('i/client/EcRequire/LoadSlider_LoadUnit.png') }}">
					<div>
						<span id="ContentPlaceHolder1_lblErrorLoad" class="AttentionMsg"></span>
					</div>
					<hr id="hrConditionLoadEntry" class="hr-margin">
				</div>
				<div id="dvConditionLoadEntry2">
					<img id="ContentPlaceHolder1_imgConditionLoadEntry2Content" src="{{ asset('i/client/EcRequire/imgLinearGuideRodContent5.png') }}" style="max-width:300px; padding-right:5px;">
					<div style="float:right;">
						<div>
							<img id="ContentPlaceHolder1_imgConditionGravityCenterXPositionItem" class="imgSize" src="{{ asset('i/client/EcRequire/LoadSlider_GrvCntrPositionItem_X.png') }}">
							<input name="ctl00$ContentPlaceHolder1$numConditionGravityCenterXPosition" type="text" maxlength="3" id="ContentPlaceHolder1_numConditionGravityCenterXPosition" class="number" onchange="calc()" onkeypress="return CheckNum();" style="ime-mode:disabled;">
							<img id="ContentPlaceHolder1_imgConditionGravityCenterXPositionUnit" src="{{ asset('i/client/EcRequire/LoadSlider_GrvCntrPositionUnit.png') }}">
						</div>
						<div>
							<img id="ContentPlaceHolder1_imgConditionGravityCenterYPositionItem" class="imgSize" src="{{ asset('i/client/EcRequire/LoadSlider_GrvCntrPositionItem_Y.png') }}">
							<input name="ctl00$ContentPlaceHolder1$numConditionGravityCenterYPosition" type="text" maxlength="3" id="ContentPlaceHolder1_numConditionGravityCenterYPosition" class="number" onchange="calc()" onkeypress="return CheckNum();" style="ime-mode:disabled;">
							<img id="ContentPlaceHolder1_imgConditionGravityCenterYPositionUnit" src="{{ asset('i/client/EcRequire/LoadSlider_GrvCntrPositionUnit.png') }}">
						</div>
						<div>
							<img id="ContentPlaceHolder1_imgConditionGravityCenterZPositionItem" class="imgSize" src="{{ asset('i/client/EcRequire/LoadSlider_GrvCntrPositionItem_Z.png') }}">
							<input name="ctl00$ContentPlaceHolder1$numConditionGravityCenterZPosition" type="text" maxlength="3" id="ContentPlaceHolder1_numConditionGravityCenterZPosition" class="number" onchange="calc()" onkeypress="return CheckNum();" style="ime-mode:disabled;">
							<img id="ContentPlaceHolder1_imgConditionGravityCenterZPositionUnit" src="{{ asset('i/client/EcRequire/LoadSlider_GrvCntrPositionUnit.png') }}">
						</div>
					</div>
					<div>
						<span id="ContentPlaceHolder1_lblError" class="AttentionMsg"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
	<script src="{{ asset('js/client/ECRequirementLoadSmall.js') }}"></script>
	<script type="text/javascript">
		function procCheckLoadSmall(LinearGuideSmall) {
			var ctrLoad = document.getElementById("ContentPlaceHolder1_numConditionLoad")
			if(ctrLoad.value == '0' || ctrLoad.value == '') {
				document.getElementById("ContentPlaceHolder1_lblErrorLoad").innerHTML = "荷重は0kgより大きい値を入力してください";
				return false;
			};

			if(LinearGuideSmall == 4 || LinearGuideSmall == 5) {
				var ctrGrvCntrXPosition = document.getElementById("ContentPlaceHolder1_numConditionGravityCenterXPosition");
				var ctrGrvCntrYPosition = document.getElementById("ContentPlaceHolder1_numConditionGravityCenterYPosition");
				var ctrGrvCntrZPosition = document.getElementById("ContentPlaceHolder1_numConditionGravityCenterZPosition");

				if((ctrGrvCntrXPosition.value == '' || ctrGrvCntrXPosition.value == 0) && (ctrGrvCntrYPosition.value == '' || ctrGrvCntrYPosition.value == 0) && (ctrGrvCntrZPosition.value == '' || ctrGrvCntrZPosition.value == 0)) {
					document.getElementById("ContentPlaceHolder1_lblError").innerHTML = "いずれかの重心位置を入力して下さい。";
					return false;
				}
			}
			return true;
		};
	</script>
@stop
