<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>6.输入周期时间</title>
		<link rel="stylesheet" href="{{ asset('css/client/style.css') }}"/>
	</head>
	<body class="child-body" style="">
		<form method="post" action="" id="form1">
			<div class="aspNetHidden">
				<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="IdXtWpYI7NuHzVbI07y3lG4VuAzu/mb34g1nY4HJJnRcHeDVHZqif+EdEuGJwGPZVKTi+jlBOo+b/bCohi72rvEwwpzyOcovc8dc62aDTW0bqnoqsR9+v9iSPT6J6ZXs3gi0jxy57fkEuvJXNvKrS7XyNNMmrVr0tSxWdubzafRXo6ReMPZYtjcr8kWWZEXDedGXDm5dawLC/QuzzQYEqHc/3kfkdZGrKgOcLRnoNka7u2eylVPzp8w3qaons1IWgBYhKp5DdgjN80s92neAaSApIQOdEWMVvZ7FHDupCt8PUbOudKjJBZZQ62WcHqrcj+9Uysgd44fl2S1IRxLQUtFmuK/or5JIE89YixwcoRKL2B1OgnitrtvC6FFEy6ug0fo2s9LU3l6h0/Rwsn+9mpfKmvJLW4B9tbBxH7g1B0zdoQytXm38vywcjhqj8HOCa7I+8W3/q54ozwiXb54ASPJUPUHaw2aYy94HQs1MUfz+43XM0ZyzOjE2ZZ2til6B5vvY8SA2kYsXqaoBzDGMVODWh1ybUtG2SljAlTDWLuAct7Jnl+sF87D1ND+AZ9o0Ldnb1Xhrd+5/poxirXjYDwZPxSrzJ8DIbbRTabW31uDjVu5qaO+MXKRgxGUWFdgy1Dg1wVG6ipvU+e33tvc10+OX38h0D/J7+jTsw4zDxequYVkjhI6pWogbuz+LxCYX69npALtmFg1Db0Ss8BAio55Z/fq/4oRWPEsNdJmnF6CVju70kIEt9x0xOKNeZG0Wapm1Q7DKy1H5FosupJLAjZS2SQknWFkfj/otQ72i6ufW8MT37THr9kGGFuJhHqMTYlMJ6qQT1VaqXmlerIc0Mkwto9WQDrw5h3E0ryffqvKf2DhcWhxHUHiyQTz0/cfowfLkROvyi2ngcNSuvZKh4RXf4UKEeTz0M7D+H+PvYoE=">
			</div>
			<div>
				<div id="child-site-box">
					<img id="ContentPlaceHolder1_imgCycleTimeRodTitle" src="{{ asset('i/client/EcRequire/CycleTimeRodTitle.png') }}">

					<div id="entry-box">

						<div id="dvRoundTrip">
							<div id="dvRoundTripDescription">
								<img id="ContentPlaceHolder1_imgCycletimeRodContent1" src="{{ asset('i/client/EcRequire/CycleTimeContent1.png') }}">
							</div>
							<div id="dvCycleTimeImg">
								<img id="ContentPlaceHolder1_imgCycleTimeRod" src="{{ asset('i/client/EcRequire/CycleTimeRodImage1.png') }}">
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
				<script src="{{ asset('js/client/ECRequirementCycleTimeRod.js') }}"></script>
				<script type="text/javascript">
					window.onload = function() {
						var elm = window.parent.document.getElementById("ifr");
						elm.style.height = ($('#form1').height() + 30) + "px";
					};
				</script>

			</div>
		</form>

	</body>

</html>