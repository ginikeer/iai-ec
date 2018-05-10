@section('title') e电缸机种选定 @stop

@extends('master/client')
@section('content')
	<div class="header">
		<div class="container">
			<div class="header-title"><p>e电缸机种选定[请选择使用条件]</p></div>
			<div class="header-btn">
				<a href="http://iai.eigyo.com.cn/public/index.php"><img src="{{ asset('i/client/home/btnHome.png') }}"></a>
				<a href="http://iai.eigyo.com.cn/public/index.php/contact"><img src="{{ asset('i/client/home/btnContact.png') }}"></a>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="container">
			<div class="size-box">
				<div class="require-left">
					<div id="resemble-box">
						<p><img id="ContentPlaceHolder1_imgResembleDescription1" src="{{ asset('i/client/resemble/imgResembleDescription1.png') }}"></p>
						<br>
						<hr>
					
						<div id="a-box" class="a-box">
							<div id="a-box-head" class="a-box-head">
								<img id="ContentPlaceHolder1_imgNo1" class="imgNum" src="{{ asset('i/client/resemble/No1.png') }}">
								<img id="ContentPlaceHolder1_imgHead1" class="imgHead1" src="{{ asset('i/client/resemble/ReHead1.png') }}">
							</div>
							<div id="a-box-select">
								<p>
									<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnBore1" id="ContentPlaceHolder1_imgbtnBore1" class="imgbtnChk" src="{{ asset('i/client/resemble/imgbtnBore_10_Off.png') }}" onclick="return imgbtnBore_onclick(this);">
									<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnBore2" id="ContentPlaceHolder1_imgbtnBore2" class="imgbtnChk" src="{{ asset('i/client/resemble/imgbtnBore_16_Off.png') }}" onclick="return imgbtnBore_onclick(this);">
								</p>
								<p>
									<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnBore3" id="ContentPlaceHolder1_imgbtnBore3" class="imgbtnChk" src="{{ asset('i/client/resemble/imgbtnBore_20_Off.png') }}" onclick="return imgbtnBore_onclick(this);">
									<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnBore4" id="ContentPlaceHolder1_imgbtnBore4" class="imgbtnChk" src="{{ asset('i/client/resemble/imgbtnBore_25_Off.png') }}" onclick="return imgbtnBore_onclick(this);">
								</p>
								<p>
									<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnBore5" id="ContentPlaceHolder1_imgbtnBore5" class="imgbtnChk" src="{{ asset('i/client/resemble/imgbtnBore_32_Off.png') }}" onclick="return imgbtnBore_onclick(this);">
									<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnBore6" id="ContentPlaceHolder1_imgbtnBore6" class="imgbtnChk" src="{{ asset('i/client/resemble/imgbtnBore_40_Off.png') }}" onclick="return imgbtnBore_onclick(this);">
								</p>
								<p>
									<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnBore7" id="ContentPlaceHolder1_imgbtnBore7" class="imgbtnChk" src="{{ asset('i/client/resemble/imgbtnBore_50_Off.png') }}" onclick="return imgbtnBore_onclick(this);">
									<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnBore8" id="ContentPlaceHolder1_imgbtnBore8" class="imgbtnChk" src="{{ asset('i/client/resemble/imgbtnBore_50_Off.png') }}" style="display: none">
								</p>
							</div>
						</div>
					
						<hr>
					
						<div id="b-box" class="a-box">
							<div id="b-box-head" class="e-box-head" >
								<img id="ContentPlaceHolder1_imgNo2" class="imgNum" src="{{ asset('i/client/resemble/No2.png') }}">
								<img id="ContentPlaceHolder1_imgHead2" class="imgHead1" src="{{ asset('i/client/resemble/ReHead2.png') }}">
							</div>
							<div id="b-box-select">
								<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnAirPressure1" id="ContentPlaceHolder1_imgbtnAirPressure1" class="imgbtnChk" src="{{ asset('i/client/resemble/imgbtnAirePressure_0.4_Off.png') }}" onclick="return imgbtnAirPressure_onclick(this);">
								<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnAirPressure2" id="ContentPlaceHolder1_imgbtnAirPressure2" class="imgbtnChk" src="{{ asset('i/client/resemble/imgbtnAirePressure_0.5_Off.png') }}" onclick="return imgbtnAirPressure_onclick(this);">
							</div>
						</div>
					
						<hr>
					
						<div id="c-box" class="a-box">
							<div id="c-box-head">
								<img id="ContentPlaceHolder1_imgNo3" class="imgNum" src="{{ asset('i/client/resemble/No3.png') }}">
								<img id="ContentPlaceHolder1_imgHead3" class="imgHead1" src="{{ asset('i/client/resemble/ReHead3.png') }}">
							</div>
							<div id="c-box-select">
								<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnRodLess" id="ContentPlaceHolder1_imgbtnRodLess" class="imgbtnForm" src="{{ asset('i/client/resemble/imgbtnReRodless_Off.png') }}" onclick="return imgbtnKeijo_onclick(this);">
								<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnRod" id="ContentPlaceHolder1_imgbtnRod" class="imgbtnForm" src="{{ asset('i/client/resemble/imgbtnReRod_Off.png') }}" onclick="return imgbtnKeijo_onclick(this);">
							</div>
						</div>
					
						<hr>
					
						<div id="d-box">
							<div id="d-box-head">
								<img id="ContentPlaceHolder1_imgNo4" class="imgNum" src="{{ asset('i/client/resemble/No4.png') }}">
								<img id="ContentPlaceHolder1_imgHead4" class="imgHead1" src="{{ asset('i/client/resemble/ReHead4.png') }}">
							</div>
							<div id="d-box-select">
								<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnHorizontal" id="ContentPlaceHolder1_imgbtnHorizontal" class="imgbtnChk" src="{{ asset('i/client/resemble/imgBtnHorizontal2_Off.png') }}" onclick="return imgbtnToritsuke_onclick(this);">
								<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnVertical" id="ContentPlaceHolder1_imgbtnVertical" class="imgbtnChk" src="{{ asset('i/client/resemble/imgBtnVertical2_Off.png') }}" onclick="return imgbtnToritsuke_onclick(this);">
							</div>
						</div>
					
						<hr>
					
						<div id="e-box">
							<div id="e-box-head">
								<img id="ContentPlaceHolder1_imgNo5" class="imgNum" src="{{ asset('i/client/resemble/No5.png') }}">
								<img id="ContentPlaceHolder1_imgHead5" class="imgHead1" src="{{ asset('i/client/resemble/ReHead5.png') }}">
								<img id="ContentPlaceHolder1_imgStroke" class="imgStroke" src="{{ asset('i/client/resemble/imgSliderScale.png') }}">
							</div>
							<div id="e-box-input">
								<input name="ctl00$ContentPlaceHolder1$txtStroke" type="text" maxlength="3" id="ContentPlaceHolder1_txtStroke" class="text" onkeydown="return numOnly(this,this.value,false)" onchange="return onClickEvent(this)">
								<span id="ContentPlaceHolder1_lblUnit1" class="ctlLabel">mm</span>
							</div>
						</div>
					
					</div>
				</div>
				<div class="require-right">
					<h3 class="require-result">结果选定</h3>
					<div class="result-content">
						<div id="cnt-box" style="display: none;">
							<br>
							<span id="ContentPlaceHolder1_lblDescription" class="ctlLabel">请在左侧1~5项输入产品信息</span>
							<br>
							<p>
								<span id="ContentPlaceHolder1_lblSearchRecords" class="ctlLabel">机种3件</span>
							</p>
							<br>
							<p>
								<span id="ContentPlaceHolder1_lblWarn1" class="WarnMsg"></span>
								<span id="ContentPlaceHolder1_lblWarn2" class="WarnMsg"></span>
							</p>
						</div>
						<div id="h-box" style="display: block;">
							<div>
								<span id="ContentPlaceHolder1_lblRecommendModel" class="ctlLabel">推荐机种</span>
								<span id="ContentPlaceHolder1_lblRecommendModelName" class="ctlLabel">EC-RR6M-65</span>
								<img id="ContentPlaceHolder1_imgRecommendModel" class="imgRecommendModel" src="{{ asset('i/client/EcRequire/EC-RR6M.png') }}">
							</div>
							<div id="h-box-cycle-head">
								<span id="ContentPlaceHolder1_lblRecommendCycleTimeHead" class="ctlLabel">周期时间计算</span>
							</div>
							<div id="h-box-cycle">
								<span id="ContentPlaceHolder1_lblRecommendCycleTime" class="ctlLabel">0 s</span>
							</div>
							<div id="h-box-life-head">
								<span id="ContentPlaceHolder1_lblRecommendLifeHead" class="ctlLabel">预测寿命</span>
							</div>
							<div id="h-box-life">
								<span id="ContentPlaceHolder1_lblRecommendLife" class="ctlLabel">20年以上</span>
							</div>
							<div id="h-box-distance-head">
								<span id="ContentPlaceHolder1_lblRecommendDistanceHead" class="ctlLabel">计算运行寿命</span>
							</div>
							<div id="h-box-distance">
								<span id="ContentPlaceHolder1_lblRecommendDistance" class="ctlLabel">50,000km</span>
							</div>
							<div id="h-box-errMsg">
								<span id="ContentPlaceHolder1_lblWarn3" class="WarnMsg"></span>
							</div>
							<div id="h-box-btn-area">
								<input type="image" name="ctl00$ContentPlaceHolder1$imgBtnDetail" id="ContentPlaceHolder1_imgBtnDetail" class="imgbtnConditions2" src="{{ asset('i/client/EcRequire/imgBtnDetail.png') }}" onclick="return imgbtnDetail_onclick();">
								<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnOptionCable" id="ContentPlaceHolder1_imgbtnOptionCable" class="imgMaxWidth" src="{{ asset('i/client/EcRequire/imgbtnOptionCable.png') }}" onclick="return imgbtnOptionCable_onclick();">
							</div>
						</div>
					</div>
				</div>
				
				
				<div id="dvContent" class="modal-content">
					<div id="dvIfrArea">
						<iframe id="ifr" class="modal-area-if" frameborder="0"></iframe>
					</div>
					<div id="dvChildBtnArea">
						<span id="ContentPlaceHolder1_lblCalcResult" class="ctlLabel"></span>
						<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnBack" id="ContentPlaceHolder1_imgbtnBack" class="modal-close" src="{{ asset('i/client/EcRequire/btnRequirementBack.png') }}" style="width:auto; height:auto; max-width:150px; max-height:100px;">
						<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnDecision" id="ContentPlaceHolder1_imgbtnDecision" class="modal-decision" src="{{ asset('i/client/EcRequire/btnRequirementDecision.png') }}" style="width:auto; height:auto; max-width:150px; max-height:100px;">
					</div>
				</div>
			
				<input name="ctl00$ContentPlaceHolder1$txtHdnTransport" type="text" id="ContentPlaceHolder1_txtHdnTransport" style="display: none">
				<input name="ctl00$ContentPlaceHolder1$txtHdnPressing" type="text" id="ContentPlaceHolder1_txtHdnPressing" style="display: none">
				<input name="ctl00$ContentPlaceHolder1$txtHdnSlider" type="text" id="ContentPlaceHolder1_txtHdnSlider" style="display: none">
				<input name="ctl00$ContentPlaceHolder1$txtHdnRod" type="text" id="ContentPlaceHolder1_txtHdnRod" style="display: none">
				<input name="ctl00$ContentPlaceHolder1$txtHdnSmallType" type="text" id="ContentPlaceHolder1_txtHdnSmallType" style="display: none">
				<input name="ctl00$ContentPlaceHolder1$txtHdnHorizontal" type="text" id="ContentPlaceHolder1_txtHdnHorizontal" style="display: none">
				<input name="ctl00$ContentPlaceHolder1$txtHdnVertical" type="text" id="ContentPlaceHolder1_txtHdnVertical" style="display: none">
				<input name="ctl00$ContentPlaceHolder1$txtHdnLoad" type="text" value="0" id="ContentPlaceHolder1_txtHdnLoad" style="display: none">
				<input name="ctl00$ContentPlaceHolder1$txtHdnRange" type="text" value="0" id="ContentPlaceHolder1_txtHdnRange" style="display: none">
				<input name="ctl00$ContentPlaceHolder1$txtHdnWorkLoadState" type="text" value="0" id="ContentPlaceHolder1_txtHdnWorkLoadState" style="display: none">
				<input name="ctl00$ContentPlaceHolder1$txtHdnGrvCntrPosition" type="text" value="0" id="ContentPlaceHolder1_txtHdnGrvCntrPosition" style="display: none">
				<input name="ctl00$ContentPlaceHolder1$txtGrvCntrPosition" type="text" id="ContentPlaceHolder1_txtGrvCntrPosition" style="display: none">
				<input name="ctl00$ContentPlaceHolder1$txtHdnHopeCycleTime" type="text" value="0" id="ContentPlaceHolder1_txtHdnHopeCycleTime" style="display: none">
				<input name="ctl00$ContentPlaceHolder1$txtHdnCycleTimeHopeOrFastKbn" type="text" value="0" id="ContentPlaceHolder1_txtHdnCycleTimeHopeOrFastKbn" style="display: none">
				<input name="ctl00$ContentPlaceHolder1$txtHdnCalcCycleTime" type="text" value="0" id="ContentPlaceHolder1_txtHdnCalcCycleTime" style="display: none">
				<input name="ctl00$ContentPlaceHolder1$txtHdnHopeLife" type="text" value="0" id="ContentPlaceHolder1_txtHdnHopeLife" style="display: none">
				<input name="ctl00$ContentPlaceHolder1$txtHdnCalcLife" type="text" value="0" id="ContentPlaceHolder1_txtHdnCalcLife" style="display: none">
				<input name="ctl00$ContentPlaceHolder1$txtHdnCalcMoment" type="text" value="0" id="ContentPlaceHolder1_txtHdnCalcMoment" style="display: none">
				<input name="ctl00$ContentPlaceHolder1$txtHdnRoundTrip" type="text" value="0" id="ContentPlaceHolder1_txtHdnRoundTrip" style="display: none">
				<input name="ctl00$ContentPlaceHolder1$txtHdnOperatingTime" type="text" value="0" id="ContentPlaceHolder1_txtHdnOperatingTime" style="display: none">
				<input name="ctl00$ContentPlaceHolder1$txtHdnOperatingDay" type="text" value="0" id="ContentPlaceHolder1_txtHdnOperatingDay" style="display: none">
				<input name="ctl00$ContentPlaceHolder1$txtHdnSelectSeries" type="text" id="ContentPlaceHolder1_txtHdnSelectSeries" style="display: none">
				<input name="ctl00$ContentPlaceHolder1$txtHdnSelectType" type="text" id="ContentPlaceHolder1_txtHdnSelectType" style="display: none">
				<input name="ctl00$ContentPlaceHolder1$txtHdnSelectStroke" type="text" id="ContentPlaceHolder1_txtHdnSelectStroke" style="display: none">
			</div>
		</div>
	</div>
	@endsection
	@section('script')
		<script src="{{ asset('js/client/ECResembleSelection.js') }}"></script>
		<script type="text/javascript">
			window.onload = function() {
				document.getElementById("ContentPlaceHolder1_txtCycleTime").readOnly = true;
				document.getElementById("ContentPlaceHolder1_txtLife").readOnly = true;
				document.getElementById("ContentPlaceHolder1_lblLoad").readOnly = true;
				document.getElementById("ContentPlaceHolder1_lblMoment").readOnly = true;
				document.getElementById("ContentPlaceHolder1_txtLoad_LR").readOnly = true;
				document.getElementById("ContentPlaceHolder1_txtPressR").readOnly = true;
				document.getElementById("ContentPlaceHolder1_txtPressST").readOnly = true;
				document.getElementById("ContentPlaceHolder1_txtLoad_LST").readOnly = true;
				document.getElementById("ContentPlaceHolder1_lblMomentST").readOnly = true;
	
				document.getElementById("ContentPlaceHolder1_txtCycleTime").style.border = "none";
				document.getElementById("ContentPlaceHolder1_txtLife").style.border = "none";
				document.getElementById("ContentPlaceHolder1_lblLoad").style.border = "none";
				document.getElementById("ContentPlaceHolder1_txtLoad_LR").style.border = "none";
				document.getElementById("ContentPlaceHolder1_txtPressR").style.border = "none";
				document.getElementById("ContentPlaceHolder1_txtPressST").style.border = "none";
				document.getElementById("ContentPlaceHolder1_lblMoment").style.border = "none";
				document.getElementById("ContentPlaceHolder1_txtLoad_LST").style.border = "none";
				document.getElementById("ContentPlaceHolder1_lblMomentST").style.border = "none";
	
				setFormItems();
			};
		</script>
		
	@stop