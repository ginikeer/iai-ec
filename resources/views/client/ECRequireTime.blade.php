<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    	<title>6．输入周期时间</title>
    	<link rel="stylesheet" href="{{ asset('css/client/style.css') }}"/>
	</head>
	<body class="child-body" style="">
    	<form method="post" action=" " id="form1">
			<div class="aspNetHidden">
				<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="cDxgis2AZ6pumXJVvGN75D+C3ydsVuL19K09qBCFaFg1bx/1bZL01Cdg4S3cC8+pbvts9dNM0RbObBMdXlASKDuarojWe66S3bDnHsihkwC1Oy9yu2zZGzn9bg4SVTue2gIEBeVQ+1AiKW5fx2PJt5sIIoY82TWY2Rjvbi5E1PChkc5YFCUdoYQTzhMwyAMhvHcxb8rXtEoiiPta6sYz7HadbgOdopep8BVl0Vbmk9ewAcJsGTLpzZUhYRN+7emi4pgCcM24GOyg+9UOf9qpNh9W9KNLU+Ld2VvxeBDGNunwoENcxXk+zYxYiOjw/tiEhkllFfv+PSvl8nas9jU9dsjw1WED+Tm6RVpDF+kk9T7X0dijxDFIWxX61BF2Khd62sE+cIJ2fAaNhYvCMIRIn0Kn5kPhIwKjAwtnK9S94n9X6mBsf58Uj8HdwrgDxBLWpyBdlA34hpbwIbefieuf4G1VBCk08RqeAo6GoVhzodQIjbJLsuhtADwvObx9nwnxD+/yB9rs2swDgNNipCEU8hnivDcIYhu2y+K/JSxT7FiV/80ncpgoO33SdpQSk1PTnn6STu9N/sUOQ7fumP6SWCV3EQB9B0sKBjz6wkQJz2WvsR7gNMxwHJs1XTCRz65lAsIv46qBhBO7IjQYCxKyIoqbwxZXBP1Qx/qhqkYWZ3MnitG86nfo9XuJarnvdYzvdP3RuZM4nVhwcGx1kEn/2VaA1hXoFEceAM09IxTPav+37SSYp+KJZN3EMIvlGBoUjwaZrGUVtI0IGygLga0EfR2XqAisjeC6u3D2v+gdgpFpygZCgwu+cUau7FMA5ny7XiPm0W+DPnGDjJB95mEQpY5g7jUEBYeaq1HdGFK+CFI2j30coBfyN/IEde/1xB0nyKfufv4yKsACECBz7uKUYPYjc8ljTVenZtZVHGEHOV9E/eJeo/stVtAxj+IWGNPD">
			</div>

    		<div>
        
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
			     <script src="{{ asset('js/client/jquery-1.11.2.min.js') }}"></script>
				<script src="{{ asset('js/client/common.js') }}"></script>
				<script src="{{ asset('js/client/ECRequirementSelection.js') }}"></script>
				<script src="{{ asset('js/client/ECRequirementCycleTimeSlider.js') }}"></script>
			    <script type="text/javascript">
			        window.onload = function () {
			            var elm = window.parent.document.getElementById("ifr");
			            elm.style.height = ($('#form1').height() + 30) + "px";
			        };
			    </script>
    		</div>
    	</form>
	</body>
</html>