<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	    <title>荷重・重心</title>
	    <link rel="stylesheet" href="{{ asset('css/client/style.css') }}"/>
	</head>
	<body class="child-body" style="">
		<form method="post" action="" id="form1">
			<div class="aspNetHidden">
				<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="citBFAyyp53VYZL3RA+rv0s/wwx2NVXpbFTXNfWr3KK6aKct3ZmdebxRllTrE5tGrfM+zrYuYqajvxcdJaSVUI3Q5oFim84MvlsRndTkwwsovSrm4EYVKb877g0XOV3k70pKUJHh0G+edW4IIgZ2O3T/hfI/+FC9QSJ/2InJwGdFFCOXoL+9FdpLz/swjtLJ8kOzeXxtrHZz2+XYRywUOG7+7I4MtEVZ81IpPQRt1oUlntM3SvudSKWNlrBjXm7PMc98QYB4GEQVAz/sUGrW03D+Jv/idzeZ9YjYPu5XRKHaonN4gGvLclVELrwF8mR1zO3O12+gAIiq6BT7hystBtqO7jLMN2Qf3W1OKuM1KxGKKFXGJEr+mNW+4BRnHoqMTzZJZG0A+xVG1/VHMPc1Vg2r5jluznB8Gz0boMT8BMkwsoSQI0+gNS/Ms1nu5OU9+mybI7Ckebp2EH0PBMlRZVZ+WW3SJJ3AM6nAjdozmmTpthVj4f3XdkrLZGEqXlzXDyo/Wq3wgXOIxxpFqvttan+lJVi4oLbSyX3ZI+15sP1ASraYd6Youf9MzpYmly/6D1WS32AUrr2PlPppfv9FQYkx3bTViaHbi9zKbaSn4zbwa2MSX72wJmUy+Nm7zzxrlbb2tdB94rKPGzaSLDnFmbCZUns1x/MfgxgPAB0Y1NIAngj7q1OQz0fsr+RIK9LBXo3VvSd6/1GEUF9skCg57mPGk/nKyyggFdsWwZRIYeYt85bM7bbrqriqCMT+ppRkKCzklYR3NEdeLkrMIOBU4w==">
			</div>
			<div>
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
				<script src="{{ asset('js/client/jquery-1.11.2.min.js') }}"></script>
				<script src="{{ asset('js/client/common.js') }}"></script>
				<script src="{{ asset('js/client/ECRequirementSelection.js') }}"></script>
				<script src="{{ asset('js/client/ECRequirementLoadRod.js') }}"></script>
				<script type="text/javascript">
					window.onload = function() {
						var elm = window.parent.document.getElementById("ifr");
						// 子要素のコンテンツサイズに合わせて調整
						elm.style.height = ($('#form1').height() + 30) + "px";
					};
	
					function procCheckLoadRod() {
	
						var ctrLoad;
						ctrLoad = document.getElementById("ContentPlaceHolder1_numLoadRod")
	
						if(ctrLoad.value == '0' || ctrLoad.value == '') {
							document.getElementById("ContentPlaceHolder1_lblError").innerHTML = "荷重は0kgより大きい値を入力してください";
							return false;
						};
					};
				</script>
	
			</div>
		</form>
	
	</body>
</html>