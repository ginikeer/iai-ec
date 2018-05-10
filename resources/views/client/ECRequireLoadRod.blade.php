@section('title') 荷重・重心 @stop
@extends('master/clientsub')
@section('content')
<div id="child-site-box">
	<img id="ContentPlaceHolder1_imgLoadRodTitle" src="{{ asset('i/client/EcRequire/LoadRodTitle.png') }}">
	<div id="entry-box">
		<div id="dvLoadRod">
			<div id="dvLoadRodDescription">
				<img id="ContentPlaceHolder1_imgLoadRodContent1" src="{{ asset('i/client/EcRequire/LoadRodContent1.png') }}">
			</div>
			<div id="dvLoadRodImage">
				<img id="ContentPlaceHolder1_imgLoadRodImage" src="{{ asset('i/client/EcRequire/LoadRodImage1.png') }}">
			</div>
			<div id="dvLoadRodEntry">
				<input name="ctl00$ContentPlaceHolder1$numLoadRod" type="text" id="ContentPlaceHolder1_numLoadRod" class="number" isimeon="false" onchange="txtChange(this)" onkeydown="javascript:return numOnly(document.getElementById('ContentPlaceHolder1_numLoadRod'),1,false);return true;" onblur="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_numLoadRod'),4,true,2,1);return true;" onfocus="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_numLoadRod'),4,false,2,1);return true;" style="ime-mode:disabled;">
				<span id="ContentPlaceHolder1_lblLoadRodUnit" class="ctlLabel">Kg</span>
				<div>
					<span id="ContentPlaceHolder1_lblError" class="AttentionMsg"></span>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
	<script src="{{ asset('js/client/ECRequirementLoadRod.js') }}"></script>
	<script type="text/javascript">
		function procCheckLoadRod() {

			var ctrLoad;
			ctrLoad = document.getElementById("ContentPlaceHolder1_numLoadRod")

			if(ctrLoad.value == '0' || ctrLoad.value == '') {
				document.getElementById("ContentPlaceHolder1_lblError").innerHTML = "荷重は0kgより大きい値を入力してください";
				return false;
			};
		};
	</script>
@stop
