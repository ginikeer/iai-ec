<html>
	<head>
		<title>e电缸机种选定</title>
		<link rel="stylesheet" href="{{ asset('css/client/style.css') }}"/>
		<script src="{{ asset('js/client/jquery-1.11.2.min.js') }}"></script>
		<script src="{{ asset('js/client/common.js') }}"></script>
		<script src="{{ asset('js/client/ECRequirementSelection.js') }}"></script>
	</head>
	<body>
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
						<h3 class="title-tips red">请在以下“输入条件”栏内选择相应条件，<br>在右侧 “选定结果”栏内显示推荐机种。</h3>
						<h3 class="title-choose">请按<img src="{{ asset('i/client/EcRequire/No1.png') }}" />~<img src="{{ asset('i/client/EcRequire/No7.png') }}" />的顺序选择条件</h3>
						<div class="require-box">
							<hr />
							<div class="a-box" id="a-box">
								<img class="imgNum" id="ContentPlaceHolder1_imgNo1" src="{{ asset('i/client/EcRequire/No1.png') }}" />
								<img class="imgHead1" id="ContentPlaceHolder1_imgHead1" src="{{ asset('i/client/EcRequire/Head1.png') }}" />
								<input class="imgbtnChk" type="image" name="ctl00$ContentPlaceHolder1$imgbtnTransport" id="ContentPlaceHolder1_imgbtnTransport" src="{{ asset('i/client/EcRequire/imgBtnTransport_Off.png') }}" onclick="return imgbtnTransport_onclick(this);" />
								<img class="imgIcon" src="{{ asset('i/client/EcRequire/imgTransport.png') }}" />
								<input class="imgbtnChk" type="image" name="ctl00$ContentPlaceHolder1$imgbtnPressing" id="ContentPlaceHolder1_imgbtnPressing" src="{{ asset('i/client/EcRequire/imgBtnPressing_Off.png') }}" onclick="return imgbtnPressing_onclick(this);" />
								<img class="imgIcon" src="{{ asset('i/client/EcRequire/imgPressing.png') }}" />
							</div>
							<hr />
							<div class="a-box" id="b-box">
								<div id="b-box-Slider" style="float:left">
									<img class="imgNum" id="ContentPlaceHolder1_imgNo2" src="{{ asset('i/client/EcRequire/No2.png') }}" />
									<img class="imgHead1" id="ContentPlaceHolder1_imgHead2" src="{{ asset('i/client/EcRequire/Head2.png') }}" />
									<input class="imgbtnChk" type="image" name="ctl00$ContentPlaceHolder1$imgbtnSlider" id="ContentPlaceHolder1_imgbtnSlider" src="{{ asset('i/client/EcRequire/imgBtnSlider_Off.png') }}" onclick="return imgbtnSlider_onclick(this);" />
									<img class="imgIcon" src="{{ asset('i/client/EcRequire/imgSlider.png') }}" />
								</div>
								<div id="b-box-Rod" style="float:left">
									<input class="imgbtnChk modal-open" type="image" name="ctl00$ContentPlaceHolder1$imgbtnRod" id="ContentPlaceHolder1_imgbtnRod" src="{{ asset('i/client/EcRequire/imgBtnRod_Off.png') }}" onclick="return imgbtnRod_onclick(this);">
									<img class="imgIcon" src="{{ asset('i/client/EcRequire/imgRod.png') }}" />
									<br />
									<span id="ContentPlaceHolder1_lblRod" class="ctlLabel"></span>
								</div>
								<br />
								<div id="b-box-Small" style="float:left">
									<img class="imgNum" src="{{ asset('i/client/EcRequire/NoDummy.png') }}" />
									<img class="imgHead1" src="{{ asset('i/client/EcRequire/HeadDummy.png') }}" />
									<input class="imgbtnChk" type="image" name="ctl00$ContentPlaceHolder1$imgbtnSmallType" id="ContentPlaceHolder1_imgbtnSmallType" src="{{ asset('i/client/EcRequire/SmallType_Off.png') }}" onclick="return imgbtnSmallType_onclick(this);" />
									<img class="imgIcon" src="{{ asset('i/client/EcRequire/imgSmallType.png') }}" />
								</div>
							</div>
							<hr />
							<div class="a-box"  id="c-box">
								<img class="imgNum" id="ContentPlaceHolder1_imgNo3" src="{{ asset('i/client/EcRequire/No3.png') }}" />
								<img class="imgHead1" id="ContentPlaceHolder1_imgHead3" src="{{ asset('i/client/EcRequire/Head3.png') }}" />
								<input class="imgbtnChk" type="image" name="ctl00$ContentPlaceHolder1$imgbtnHorizontal" id="ContentPlaceHolder1_imgbtnHorizontal" class="imgbtnChk" src="{{ asset('i/client/EcRequire/imgBtnHorizontal_Off.png') }}" onclick="return imgbtnHorizontal_onclick(this);" />
								<img class="imgIcon" src="{{ asset('i/client/EcRequire/imgHorizontal.png') }}" />
								<input class="imgbtnChk" type="image" name="ctl00$ContentPlaceHolder1$imgbtnVertical" id="ContentPlaceHolder1_imgbtnVertical" class="imgbtnChk" src="{{ asset('i/client/EcRequire/imgBtnVertical_Off.png') }}" onclick="return imgbtnVertical_onclick(this);" />
								<img class="imgIcon" src="{{ asset('i/client/EcRequire/imgPressing.png') }}" />
							</div>
							<hr />
							<div class="a-box d-box" id="d-box">
								<div class="d-box-head">
									<img id="ContentPlaceHolder1_imgNo4" class="imgNum" src="{{ asset('i/client/EcRequire/No4.png') }}">
			                    	<img id="ContentPlaceHolder1_imgHead4" class="imgHead1" src="{{ asset('i/client/EcRequire/Head4.png') }}">
								</div>          
			                    <div class="d-box-load">
			                    	<img id="ContentPlaceHolder1_imgStroke" class="imgStroke" src="{{ asset('i/client/EcRequire/imgScale_Slider.png') }}" />
				                </div>
				                <div class="d-box-input">
				                	<input name="ctl00$ContentPlaceHolder1$txtStroke" type="text" maxlength="3" id="ContentPlaceHolder1_txtStroke" class="text" onchange="return txtStroke_onchange(this)" onkeydown="return txtStroke_onkeydown(this)" onkeyup="return checkStroke(this)" style="ime-mode:disabled;">
			                    	<span id="ContentPlaceHolder1_lblUnit1" class="ctlLabel">mm</span>
				                </div>
				            </div>
				            <hr />
				            <div class="a-box e-box" id="e-box" >
				            	<div id="e-box-head" class="e-box-head" style="float: left;">
				            		<img id="ContentPlaceHolder1_imgNo5" class="imgNum" src="{{ asset('i/client/EcRequire/No5.png') }}">
				            		<img id="ContentPlaceHolder1_imgHead5" class="imgHead1" src="{{ asset('i/client/EcRequire/Head5.png') }}">
				            		<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnLoad" id="ContentPlaceHolder1_imgbtnLoad" class="imgbtnConditions modal-open" onkeydown="return KeyDownButton(this)" src="{{ asset('i/client/EcRequire/btnConditionsEntry.png') }}" onclick="return setFormName(&quot;ECRequirementLoadSlider.aspx&quot;);">
				            	</div>
				            	<div id="e-box-load" class="e-box-load">
				            		<p>
				            			<img id="ContentPlaceHolder1_imglblLoad" class="imgbtnConditions" src="{{ asset('i/client/EcRequire/imgLabelLoad.png') }}">
				            			<input name="ctl00$ContentPlaceHolder1$lblLoad" type="text" maxlength="3" id="ContentPlaceHolder1_lblLoad" class="text" onkeydown="return numOnly(this,this.value,false)" onchange="return onClickEvent(this)" readonly="" style="border: none;">
				            			<img id="ContentPlaceHolder1_imglblLoadUnit" src="{{ asset('i/client/EcRequire/imgLabelLoadUnit.png') }}">
				            		</p>
				            	</div>
				            	<div id="e-box-moment" class="e-box-moment">
				            		<img id="ContentPlaceHolder1_imglblMoment" class="imgbtnConditions" src="{{ asset('i/client/EcRequire/imgLabelMoment.png') }}">
				            		<input name="ctl00$ContentPlaceHolder1$lblMoment" type="text" id="ContentPlaceHolder1_lblMoment" class="text" readonly="" style="border: none;">
				            		<img id="ContentPlaceHolder1_imglblMomentUnit" src="{{ asset('i/client/EcRequire/imgLabelMomentUnit.png') }}">
				            	</div>
				            </div>
				            
				            <div class="a-box j-box" id="j-box" style="display: none;">
				            	<div class="j-box-head" id="j-box-head">
				            		<img id="ContentPlaceHolder1_imgNo5_P" class="imgNum" src="{{ asset('i/client/EcRequire/No5.png') }}">
				            		<img id="ContentPlaceHolder1_imgHead5_P" class="imgHead1" src="{{ asset('i/client/EcRequire/Head5_P.png') }}">
				            		<img id="ContentPlaceHolder1_imglblPress" class="imgStroke" src="{{ asset('i/client/EcRequire/imgPressingSlider.png') }}">
				            	</div>
				            	<div class="j-box-load" id="j-box-load">
				            		<input name="ctl00$ContentPlaceHolder1$txtPress" type="text" maxlength="4" id="ContentPlaceHolder1_txtPress" class="text" onchange="return onClickEvent(this)" onkeydown="return txtPress_onkeydown(this)" style="ime-mode:disabled;">
				            		<span id="ContentPlaceHolder1_lblPressUnit" class="ctlLabel">N</span>
				            	</div>
				            </div>
				            
				            <div class="a-box n-box" id="n-box" style="display: none;">
				            	<div class="n-box-head" id="n-box-head">
				            		<img id="ContentPlaceHolder1_imgNo5_PST" class="imgNum" src="{{ asset('i/client/EcRequire/No5.png') }}">
				            		<img id="ContentPlaceHolder1_imgHead5_PST" class="imgHead1" src="{{ asset('i/client/EcRequire/Head5_P.png') }}">
				            		<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnPressST" id="ContentPlaceHolder1_imgbtnPressST" class="imgbtnConditions modal-open" onkeydown="return KeyDownButton(this)" src="{{ asset('i/client/EcRequire/btnConditionsEntry.png') }}" onclick="return setFormName(&quot;ECRequirementPressingSmall.aspx&quot;);">
				            	</div>
				            	<div class="n-box-load" id="n-box-load">
				            		<input name="ctl00$ContentPlaceHolder1$txtPressST" type="text" maxlength="4" id="ContentPlaceHolder1_txtPressST" class="text" style="border: none;" readonly="">
				            		<span id="ContentPlaceHolder1_lblPressUnitST" class="ctlLabel">N</span>
				            	</div>
				            </div>
				            
				            <div class="a-box k-box" id="k-box" style="display: none;">
				            	<div class="k-box-head" id="k-box-head">
				            		<img id="ContentPlaceHolder1_imgNo5_LR" class="imgNum" src="{{ asset('i/client/EcRequire/No5.png') }}">
				            		<img id="ContentPlaceHolder1_imgHead_LR" class="imgHead1" src="{{ asset('i/client/EcRequire/Head5_LR.png') }}">
				            		<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnLoad_LR" id="ContentPlaceHolder1_imgbtnLoad_LR" class="imgbtnConditions modal-open" onkeydown="return KeyDownButton(this)" src="{{ asset('i/client/EcRequire/btnConditionsEntry.png') }}" onclick="return setFormName(&quot;ECRequirementLoadRod.aspx&quot;);">
				            	</div>
				            	<div class="k-box-load" id="k-box-load">
				            		<img id="ContentPlaceHolder1_Image1" class="imgbtnConditions">
				            		<input name="ctl00$ContentPlaceHolder1$txtLoad_LR" type="text" maxlength="3" id="ContentPlaceHolder1_txtLoad_LR" class="text" onkeydown="return numOnly(this,this.value,false)" onchange="return onClickEvent(this)" readonly="" style="border: none;">
				            		<span id="ContentPlaceHolder1_lblLoadUnit_LR" class="ctlLabel">kg</span>
				            	</div>
				            </div>
				            
				            <div class="a-box l-box" id="l-box" style="display: none;">
				            	<div class="l-box-head" id="l-box-head">
				            		<img id="ContentPlaceHolder1_imgNo5_LRL" class="imgNum" src="{{ asset('i/client/EcRequire/No5.png') }}">
				            		<img id="ContentPlaceHolder1_imgHead_LRL" class="imgHead1" src="{{ asset('i/client/EcRequire/Head5_LR.png') }}">
				            		<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnLoad_LRL" id="ContentPlaceHolder1_imgbtnLoad_LRL" class="imgbtnConditions modal-open" onkeydown="return KeyDownButton(this)" src="{{ asset('i/client/EcRequire/btnConditionsEntry.png') }}" onclick="return setFormName(&quot;ECRequirementLoadRodLinerGuide.aspx&quot;);">
				            	</div>
				            	<div class="l-box-load" id="l-box-load">
				            		<img id="ContentPlaceHolder1_Image2" class="imgbtnConditions">
				            		<input name="ctl00$ContentPlaceHolder1$txtPressR" type="text" maxlength="3" id="ContentPlaceHolder1_txtPressR" class="text" onkeydown="return numOnly(this,this.value,false)" readonly="" style="border: none;">
				            		<span id="ContentPlaceHolder1_lblPressUnitR" class="ctlLabel">kg</span>
				            	</div>
				            </div>
				            
				            <div class="a-box m-box" id="m-box" style="display: none;">
				            	<div class="m-box-head" id="m-box-head">
				            		<img id="ContentPlaceHolder1_imgNo5_LST" class="imgNum" src="{{ asset('i/client/EcRequire/No5.png') }}">
				            		<img id="ContentPlaceHolder1_imgHead_LST" class="imgHead1" src="{{ asset('i/client/EcRequire/Head5_LR.png') }}">
				            		<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnLoad_LST" id="ContentPlaceHolder1_imgbtnLoad_LST" class="imgbtnConditions modal-open" onkeydown="return KeyDownButton(this)" src="{{ asset('i/client/EcRequire/btnConditionsEntry.png') }}" onclick="return setFormName(&quot;ECRequirementLoadSmall.aspx&quot;);">
				            	</div>
				            	<div class="m-box-load" id="m-box-load">
				            		<img id="ContentPlaceHolder1_imglblLoadST" class="imgbtnConditions" src="{{ asset('i/client/EcRequire/imgLabelLoad.png') }}" style="text-align:right; vertical-align:top; margin-top:15px; margin-right:10px;">
				            		<input name="ctl00$ContentPlaceHolder1$txtLoad_LST" type="text" maxlength="3" id="ContentPlaceHolder1_txtLoad_LST" class="text" onkeydown="return numOnly(this,this.value,false)" style="text-align: right; vertical-align: top; margin-top: 15px; margin-right: 10px; border: none;" readonly="">
				            		<img id="ContentPlaceHolder1_imglblLoadUnit_LST" src="{{ asset('i/client/EcRequire/imgLabelLoadUnit.png') }}" style="text-align:right; vertical-align:top; margin-top:15px; margin-right:10px;">
				            	</div>
				            	<div class="m-box-moment" id="m-box-moment">
				            		<img id="ContentPlaceHolder1_imglblMomentST" class="imgbtnConditions" src="{{ asset('i/client/EcRequire/imgLabelMoment.png') }}" style="display: none">
				            		<input name="ctl00$ContentPlaceHolder1$lblMomentST" type="text" id="ContentPlaceHolder1_lblMomentST" class="text" style="display: none; border: none;" readonly="">
				            		<img id="ContentPlaceHolder1_imglblMomentUnitST" src="{{ asset('i/client/EcRequire/imgLabelMomentUnit.png') }}" style="display: none">
				            	</div>
				            </div>
				            
				            <hr />
				            <div class="a-box e-box" id="f-box">
				            	<div class="e-box-head" id="f-box-head">
				            		<img id="ContentPlaceHolder1_imgNo6" class="imgNum" src="{{ asset('i/client/EcRequire/No6.png') }}">
				            		<img id="ContentPlaceHolder1_imgHead6" class="imgHead1" src="{{ asset('i/client/EcRequire/Head6.png') }}">
				            	</div>
				            	<div class="f-box-select" id="f-box-select">
				            		<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnCycleTime" id="ContentPlaceHolder1_imgbtnCycleTime" class="modal-open" src="{{ asset('i/client/EcRequire/imgbtnHopeTime_Off.png') }}" onclick="if(document.getElementById(&quot;ContentPlaceHolder1_txtHdnSlider&quot;).value == &quot;1&quot;){setFormName(&quot;ECRequirementCycleTimeSlider.aspx&quot;);}else if(document.getElementById(&quot;ContentPlaceHolder1_txtHdnRod&quot;).value == &quot;1&quot;){setFormName(&quot;ECRequirementCycleTimeRod.aspx&quot;);}else if(document.getElementById(&quot;ContentPlaceHolder1_txtHdnSmallType&quot;).value == &quot;1&quot;){setFormName(&quot;ECRequirementCycleTimeSmall.aspx&quot;);}else{setFormName(&quot;ECRequirementCycleTimeSlider.aspx&quot;);}imgbtnCycleTime_onclick(this);return false;">
				            		<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnFastest" id="ContentPlaceHolder1_imgbtnFastest" src="{{ asset('i/client/EcRequire/imgbtnFastest_Off.png') }}" onclick="return imgbtnFastest_onclick(this);">
				            	</div>
				            	<div class="f-box-input" id="f-box-input">
				            		<input name="ctl00$ContentPlaceHolder1$txtCycleTime" type="text" id="ContentPlaceHolder1_txtCycleTime" class="text" readonly="" style="border: none;">
				            		<img id="ContentPlaceHolder1_imgbtnlblCycleTimeUnit" src="{{ asset('i/client/EcRequire/imgLabelCycleTimeUnit.png') }}">
				            	</div>
				            </div>
				            
				            <hr />
				            <div class="a-box g-box" id="g-box">
				            	<div class="g-box-head" id="g-box-head">
				            		<img id="ContentPlaceHolder1_imgNo7" class="imgNum" src="{{ asset('i/client/EcRequire/No7.png') }}">
				            		<img id="ContentPlaceHolder1_imgHead7" class="imgHead1" src="{{ asset('i/client/EcRequire/Head7.png') }}">
				            	</div>
				            	<div class="g-box-load" id="g-box-load">
				            		<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnLife" id="ContentPlaceHolder1_imgbtnLife" class="imgbtnConditions modal-open" src="{{ asset('i/client/EcRequire/btnConditionsEntry.png') }}" onclick="return setFormName(&quot;ECRequirementRunningTime.aspx&quot;);">
				            	</div>
				            	<div class="g-box-input" id="g-box-input">
				            		<img id="ContentPlaceHolder1_imglblLife" class="imgbtnConditions" src="{{ asset('i/client/EcRequire/imgLabelHopeLife.png') }}">
				            		<input name="ctl00$ContentPlaceHolder1$txtLife" type="text" id="ContentPlaceHolder1_txtLife" class="text" readonly="" style="border: none;">
				            		<span id="ContentPlaceHolder1_lblUnit4" class="ctlLabel"></span>
				            	</div>
				            </div>
            
						</div>
					</div>
					<div class="require-right">
						<h3 class="require-result">结果选定</h3>
						<div class="result-content">
							<p class="red">请在左侧1~5项输入产品信息</p>
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
	
				</div>
			</div>
		</div>
	</body>
</html>