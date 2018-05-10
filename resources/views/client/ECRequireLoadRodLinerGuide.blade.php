@section('title') 荷重・重心 @stop
@extends('master/clientsub')
@section('content')
<div id="child-site-box">
	<img id="ContentPlaceHolder1_imgLoadRodTitle" src="{{ asset('i/client/EcRequire/LoadRRTitle.png') }}">

	<div id="entry-box">

		<div id="dvLoadRod">
			<div id="dvLoadRodDescription">
				<img id="ContentPlaceHolder1_imgLoadRodContent1" src="{{ asset('i/client/EcRequire/LoadRRContent1.png') }}">
			</div>
			<div id="dvLoadRodImage">
				<img id="ContentPlaceHolder1_imgLoadRodImage" src="{{ asset('i/client/EcRequire/LoadRR.png') }}">
			</div>
			<div id="dvLoadRodEntry">
				<div>
					<img id="ContentPlaceHolder1_imgLoadRod" src="{{ asset('i/client/EcRequire/LoadRR_LoadItem.png') }}">
					<input name="ctl00$ContentPlaceHolder1$numLoadRod" type="text" id="ContentPlaceHolder1_numLoadRod" class="number" isimeon="false" onchange="txtChange(this)" onkeydown="javascript:return numOnly(document.getElementById('ContentPlaceHolder1_numLoadRod'),1,false);return true;" onblur="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_numLoadRod'),4,true,2,1);return true;" onfocus="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_numLoadRod'),4,false,2,1);return true;" style="ime-mode:disabled;">
					<img id="ContentPlaceHolder1_imgLoadRodUnit" src="{{ asset('i/client/EcRequire/LoadSlider_LoadUnit.png') }}">
				</div>
				<div>
					<img id="ContentPlaceHolder1_imgOffSetDistance" src="{{ asset('i/client/EcRequire/LoadRR_OffsetItem.png') }}">
					<input name="ctl00$ContentPlaceHolder1$txtOffSetDistance" type="text" id="ContentPlaceHolder1_txtOffSetDistance" class="number" isimeon="false" onchange="txtChange(this)" onkeydown="javascript:return numOnly(document.getElementById('ContentPlaceHolder1_txtOffSetDistance'),1,false);return true;" onblur="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_txtOffSetDistance'),4,true,2,1);return true;" onfocus="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_txtOffSetDistance'),4,false,2,1);return true;" style="ime-mode:disabled;">
					<img id="ContentPlaceHolder1_imgOffSetDistanceUnit" src="{{ asset('i/client/EcRequire/LoadSlider_GrvCntrPositionUnit.png') }}">
				</div>
				<div>
					<img id="ContentPlaceHolder1_imgOverhangDistance" src="{{ asset('i/client/EcRequire/LoadRR_OverhangItem.png') }}">
					<input name="ctl00$ContentPlaceHolder1$txtOverhangDistance" type="text" id="ContentPlaceHolder1_txtOverhangDistance" class="number" isimeon="false" onchange="txtChange(this)" onkeydown="javascript:return numOnly(document.getElementById('ContentPlaceHolder1_txtOverhangDistance'),1,false);return true;" onblur="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_txtOverhangDistance'),4,true,2,1);return true;" onfocus="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_txtOverhangDistance'),4,false,2,1);return true;" style="ime-mode:disabled;">
					<img id="ContentPlaceHolder1_imgOverhangDistanceUnit" src="{{ asset('i/client/EcRequire/LoadSlider_GrvCntrPositionUnit.png') }}">
				</div>
				<div id="dvOverhangDistanceError">
					<span id="ContentPlaceHolder1_lblOverhangDistanceError" class="AttentionMsg"></span>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
	<script src="{{ asset('js/client/ECRequirementLoadRodLinerGuide.js') }}"></script>
	<script type="text/javascript">
		function procCheckLoadRadial() {

			var ctrLoadRod = document.getElementById("ContentPlaceHolder1_numLoadRod");
			var ctrOffSet = document.getElementById("ContentPlaceHolder1_txtOffSetDistance");
			var Overhang = document.getElementById("ContentPlaceHolder1_txtOverhangDistance");
	
			if((ctrOffSet.value == '' || ctrOffSet.value == 0) && (Overhang.value == '' || Overhang.value == 0)) {
				document.getElementById("ContentPlaceHolder1_lblOverhangDistanceError").innerHTML = "張出し距離またはオフセット距離を入力して下さい。";
				return false;
			}
	
			if(ctrLoadRod.value == '' || ctrLoadRod.value == 0) {
				document.getElementById("ContentPlaceHolder1_lblOverhangDistanceError").innerHTML = "荷重は0kgより大きい値を入力してください。";
				return false;
			}
			return true;
		};
	</script>
@stop
