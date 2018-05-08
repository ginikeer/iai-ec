<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>荷重・重心</title>
		<link rel="stylesheet" href="{{ asset('css/client/style.css') }}"/>
	</head>

	<body class="child-body" style="">
		<form method="post" action="" id="form1">
			<div class="aspNetHidden">
				<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="RMHGpbjEtD11vPhajxty+BUR98CDa1BCb5MjRSCTmVKfRMLceCK6AH2mPF5Mb4S9KLuHssvqdmY0SnkfyNDnN8HJe7iGQJevrjLsLiIagiHc8Tr7vsmL0ix5HNVW/UgpI7wOY0cH6DeRCJkCjPExU/d9eqrdEJtBCmy4ZItFEcArJJhi+pHXl0ZTnbDISi4/Jm5qZFAO54gKcbyODJ0Opp8K87Unr0h5SGkaqfA/YWWCy6fTMmucAw3wcd/YdLatKiBle0PktBpgjyfUcRPb2L6LS52iUu2IvINBIBHD9ylleWXbAWKj/kbTwmvk29e0c6r/JqKbKpK+H/vW9Q0daWAlo/5Jckyhn59OwS9eYZolpEAXiXf5kqsL06FuD0AIsW5T2ZhfbABScaiPkk+kjOs+y2316sL01xvoY74fDvbfHoDQthPDN+GMkfPBRsY2fR9jtOna85su1XFxa55slpbpF1XbafLyqXnfaBntqhfeF2hkr+eapdlHDI1bXteeuvgu5QitluBOAPwBDU4JBD26bE6FufiGkd9JssbxsVDjPmJkYkOACk3xvQxAWa0i3gfNet7cH7SuK8/UQX+DH+FIOIAlkG87uXo0UfhEUMilBLQ6Oar6fLMjdmdVIrEJI1/JJqQDsTi121kIgF9EYbeQ1IE3L442if6TlVkTMiv2ZsjH1zHcadb28Z+lf0g/c2uge+Ykjyko2XCJ8HtXrzvfacCCHSnM9SIPAC4RzbfDu53iINrZOr2ObVbjSPrUcO/JGWuXaOiRbEndbKTtilU9QP0aY2lF3SxIz3Pzr6vfm4C5pwjrCmp9ZpLbk60eCujW7cSBQzkyEX4qM2DKNAQ3Nj+ghu6TWuN1vs7Wg4WSOw888dkMmlV7iNjnAJibsIXwZbJ1ydgEJ1EZxx5FMXwo4ZUcTbqlIQKKltjrlXggD0RYqmCLGxvcB+9r8oSKXYvNF6UT8clONTrJSeE8KnRUlsejR4mogT9j14yJehRbrB28OSDYtzTTc6F5O91XnTikDxr6AL75C8X8tbc/GUwzow8UvUKDnqDfGTt3CVe5DRZ+UNdPiIEC9VPXJwmiFSVvopWEeCYJiayeBRMSb/EKeitqTnP7N29Bl8xIBD/pwoI8n4ou2/aUv/fA7trLuHx4hQJKsuX7sCL/rFCei6xwQcA0b/lV0f0rcN5l3ytnan1sNHn9YNsqqATsbbQ4Dp4YR9tD8Mu5wEspGLKjEguFypnzA/pLYo4AoUhbS9rZnmt+cL3TdddxtNztcArUMcGQjUEnFX+wJs7OJ+ty163XHkYfeMMwgjVyeryMmwgq9umCpzqVE7dJ714n+ew7BnqL359BiCn1k4TLfrWns+k/qVJT8eUo6SHsljhj+HJxkRdDiW1o8eCqNtrlG0wL1ij2ZinnEFa+ZZw1Fmq8pCj8Bf2pwMVwCgri/hWujIRF1pwrgs1ff0E1UgChuZJP5u3CZPP6EzUXGWkpatClEu+MKBO7EIo+fEtzcSmT0Tmmsz/1DGNk9ZVAq7RdVA+2Th0tCY5u5j6bizQlSKrsOKA3/EmcwEl1ryBDN5cTcWKLG//8hTAICvUPH9zUdJSHRar8pBSsSgGjAdtZikCsAd/IGUmHzV/TTHiqggkHbJWGJ+sRYKAJVUVLn4jQFWDOXr5+13E12POkQYM24W3o3RArAWblxALN/jwq9y+nSW/zocdcFaznmvAeJWz8QSMY/c/hGyApvU/S8dpT4MdPORvBZmMQnvNST0KDoEzMpaxNKLsIch8TNQRwrXL8y68hWonQcdxgrh6stXYQyGazcplIppkTCpRukbdpZyFtN9N8GxNkBUmYMNPw8k1WMTYwGIRzltMzirSzf1Mv6fpoHibIVjSg0MM0Byr+jN8DdaSLhH8HDtT1rHICuQmKfr6s5lPtrIlHNhgWI9r8tb9IvrRFiqyoVfv/WvPXuUc7fty8T71ENc3ZRVJFsG3vB8EPjFK4TPqcM2clrMHTTObt2vzoncRWxcBv9/NtJHNdZGUeynt94PIvxmo8Z+mElhPNldAQ/bWJsLHnNZ1GRuVqPfZReK7f2fzC7+qC66axWvatWcwGucgwmGvyKZ/yW+9/RuOyubuoh7hKPBbduLcw5ir+BzVOvjIwDDMjinr16RHC6JNlVwT3O86sZLmeTUT9tBV3YgwCmc1HBxbtd+H6agM5EpgacMVP6sYhYnC5q47Uhm14NSImCwCo+87LInyBSlIz1TUbVS7kDRelcNKagizBAs+yJXgOVWv8c+KSmJFoQSb0HP0WSvZlteJ5QWDPPfgw1kj/VrtQDop81szMVgLsgNji5PJ/XeOilOag8DRI7XR5sFwTuWCx7psbOosuoYISNru+upYT0UNRlUfC+A==">
			</div>

			<div>

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
				<script src="{{ asset('js/client/jquery-1.11.2.min.js') }}"></script>
				<script src="{{ asset('js/client/common.js') }}"></script>
				<script src="{{ asset('js/client/ECRequirementSelection.js') }}"></script>
				<script src="{{ asset('js/client/ECRequirementLoadRodLinerGuide.js') }}"></script>
				<script type="text/javascript">
					window.onload = function() {
						var elm = window.parent.document.getElementById("ifr");
						elm.style.height = ($('#form1').height() + 30) + "px";
					};

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

			</div>
		</form>

	</body>

</html>