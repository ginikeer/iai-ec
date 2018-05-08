<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>6.输入周期时间</title>
		<link rel="stylesheet" href="{{ asset('css/client/style.css') }}"/>
	</head>
	<body class="child-body" style="">
		<form method="post" action="" id="form1">
			<div class="aspNetHidden">
				<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="UjPkIMA/KN/82R7yp2j/sVo9BaPJgyCjk3brbVoDG+VW3SNL0sJY6LpuangahNm63jBvsMzcpPuxt9LNPd7+MJRx/TMzjx4iPek2QcGcDjUMNPIjasdffjfnbnBMfTRX9qDLpg8v8CFwswYzccAw7ICqnUXaLQqdNZfqrCCLR2ntAD8i2Y8oa33qqYn0LfYQ+ccuT1LuUaNiehrMLscgs0zEHavRSKPPKmAtTz8xtN8hoXM5buyD22GKvVbUJ5zfTGUh62Yal5+PnY0JyehBZIvEZFN3XPcDRyxp4DXv62xIC7s1w4iiiijX2ci+VnCV+ySWHZRT6y0MZJgkeY4BfO9NrTRtCbUMAHAOD7YMIYMUEjnOMRpIDWqAaNNT3Mys2xHbWGOW7mv14LHtuAax/yxye4y/i1fbVb8CVstx2c3AC9oxGgQ1NsBVjbgXWJ41VH5S7J21kEtQpp0ieDRgZXF2ZLInyjsEEaVMJdR9mfwp+WwMCj5Waa5QLtxMoe9O+ZMbQVxVsao7W4GRm+zqnhmOVAWq0uvF5lYNT/wgTkDELzdcpgZm/E4DyZywapTkx0VbfS+IYlpx4xFIVwwDhmcooiNdvnqDaJHho7fk1++ps4ITOVIT10oWpjeCnPhgCG2QE+qpCHftomKNP3kizxteV8JoXfcYXJzivoXJo/kuWxLCw797sXgpTyPsRs+S1ptqvA2aywdaXDSYiAp1ao0oJmp8dAVJXUjFIwZeLAe7k0mesdAyB1c2+NcpWvjgXS7iQhOQzKaP8d/TU2n6wPhDf9f5+jnbV0OP8c9nLCVUv/NaboAO0YhwlB7yOwvVUE0bkMMY04+6NX88a0NIgAUQAFxTmwjXq2OgvgjHBdGnAt5kmMOu+Km004Tn18e0KgY0pQTTLgEt1l7gmb8GbpoAyMmL+77QsdKUHRQfeV+RIYSyikdWNsg/vuT+hW3Bs0RuPS2zK4P6akXVjI9UhWd37JFOxI8t+Xrckyoweos1eueQA+nTh7YIJ2/kn4+G">
			</div>

			<div>

				<div id="child-site-box">
					<img id="ContentPlaceHolder1_imgCycleTimeSmallTitle" src="{{ asset('i/client/EcRequire/CycleTimeSmallTypeTitle.png') }}">

					<div id="entry-box">

						<div id="dvRoundTrip">
							<div id="dvRoundTripDescription">
								<img id="ContentPlaceHolder1_imgCycletimeSmallContent1" src="{{ asset('i/client/EcRequire/CycleTimeTypeContent1.png') }}">
							</div>
							<div id="dvCycleTimeImg">
								<img id="ContentPlaceHolder1_imgCycleTimeSmall" src="{{ asset('i/client/EcRequire/CycleTimeSmallTypeImage1.png') }}">
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
				<script src="{{ asset('js/client/ECRequirementCycleTimeSmall.js') }}"></script>
				<script type="text/javascript">
					window.onload = function() {
						var elm = window.parent.document.getElementById("ifr");
						// 子要素のコンテンツサイズに合わせて調整
						elm.style.height = ($('#form1').height() + 30) + "px";
					};
				</script>

			</div>
		</form>

	</body>

</html>