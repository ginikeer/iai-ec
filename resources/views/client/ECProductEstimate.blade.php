@section('title') 数量入力 @stop
@section('style')
<style type="text/css">
	.Align {
		text-align: left;
	}
	.ReadOnlyDecimal {
		text-align: right;
		background-color: transparent;
		font-family: Meiryo;
		font-size: 18px;
		width: 150px
	}
	.ErrorFont {
		color: red;
	}
</style>
@stop

@extends('master/client')
@section('content')
		<!--<form method="post" action="" id="form1" class="h-adr">
			<input type="hidden" name="_token" value="{{ csrf_token() }}" />-->
			<div class="aspNetHidden">
				<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="">
				<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
				<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
				<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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">
			</div>

			<span class="p-country-name" style="display:none;">Japan</span>
			<div id="d_header">
				<input type="submit" name="ctl00$DummySubmitButton" value="Button" onclick="return false;" id="DummySubmitButton" style="display:none">
			</div>

			<div class="container">
				<div class="header">
					<div>
						<div class="header-title"><p>e电缸在线选型</p></div>
						<div class="header-btn">
							<a href="http://iai.eigyo.com.cn/public/index.php"><img src="{{ asset('i/client/home/btnHome.png') }}"></a>
							<a href="http://iai.eigyo.com.cn/public/index.php/contact"><img src="{{ asset('i/client/home/btnContact.png') }}"></a>
						</div>
					</div>
				</div>
				<table>
					<tbody>
						<tr>
							<td>
								<img id="ContentPlaceHolder1_imgMenu1" class="imgMenu" src="{{ asset('i/client/EcRequire/menu1.png') }}">
							</td>
							<td>
								<img id="ContentPlaceHolder1_imgMenu2" class="imgMenu" src="{{ asset('i/client/EcRequire/menu2.png') }}">
							</td>
							<td>
								<img id="ContentPlaceHolder1_imgMenu3" class="imgMenu" src="{{ asset('i/client/EcRequire/menu3-select.png') }}">
							</td>
							<td>
								<img id="ContentPlaceHolder1_imgMenu4" class="imgMenu" src="{{ asset('i/client/EcRequire/menu4.png') }}">
							</td>
						</tr>
					</tbody>
				</table>
				<div class="divCenter">
					<table id="ContentPlaceHolder1_tblpan">
						<tbody>
							<tr>
								<td>
									<span id="ContentPlaceHolder1_lblWord" class="ctlLabel">選択された型式の必要数量を入力してください。</span>
								</td>
							</tr>
						</tbody>
					</table>

					<br>
					<div>
						<table class="Grid" cellspacing="0" rules="all" border="1" id="ContentPlaceHolder1_grdView" style="width:100%;border-collapse:collapse;">
							<tbody>
								<tr>
									<th scope="col" style="width:50px;">NO</th>
									<th scope="col">商品名</th>
									<th align="right" scope="col" style="width:150px;">単価(円)</th>
									<th align="right" scope="col" style="width:100px;">数量</th>
									<!--<th align="right" scope="col" style="width:150px;">金額(円)</th>-->
								</tr>
								<tr>
									<td style="width:50px;">
										<span id="ContentPlaceHolder1_grdView_lblNo_0" class="ctlLabel">1</span>
									</td>
									<td>
										<span id="ContentPlaceHolder1_grdView_lblProductName_0" class="ctlLabel">EC-S7LH-250-0</span>
									</td>
									<td align="right" style="width:150px;">
										<!-- <span id="ContentPlaceHolder1_grdView_lblUnitPrice_0" class="ctlLabel"></span>-->
										<input name="ctl00$ContentPlaceHolder1$grdView$ctl02$numUnitPrice" type="text" value="60,800" id="ContentPlaceHolder1_grdView_numUnitPrice_0" tabindex="-1" class="ReadOnlyDecimal" readonly="true" onkeydown="javascript:return numOnly(document.getElementById('ContentPlaceHolder1_grdView_numUnitPrice_0'),0,false);return true;" onblur="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_grdView_numUnitPrice_0'),12,true,9,0);return true;" onfocus="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_grdView_numUnitPrice_0'),9,false,9,0);return true;" style="border-style:None;ime-mode:disabled;">
									</td>
									<td align="right" style="width:100px;">
										<input name="ctl00$ContentPlaceHolder1$grdView$ctl02$numSuryo" type="text" value="1" maxlength="4" id="ContentPlaceHolder1_grdView_numSuryo_0" class="number" onchange="calc(this)" onkeydown="javascript:return numOnly(document.getElementById('ContentPlaceHolder1_grdView_numSuryo_0'),0,false);return true;" onblur="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_grdView_numSuryo_0'),4,true,3,0);return true;" onfocus="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_grdView_numSuryo_0'),3,false,3,0);return true;" style="ime-mode:disabled;">
									</td>
									<!--<td align="right" style="width:150px;">
										<input name="ctl00$ContentPlaceHolder1$grdView$ctl02$numPriceTotal" type="text" value="60,800" id="ContentPlaceHolder1_grdView_numPriceTotal_0" tabindex="-1" class="ReadOnlyDecimal" readonly="true" onkeydown="javascript:return numOnly(document.getElementById('ContentPlaceHolder1_grdView_numPriceTotal_0'),0,false);return true;" onblur="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_grdView_numPriceTotal_0'),12,true,9,0);return true;" onfocus="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_grdView_numPriceTotal_0'),9,false,9,0);return true;" style="border-style:None;ime-mode:disabled;">
									</td>-->
								</tr>
								<!--<tr>
									<td style="width:50px;">
										<span id="ContentPlaceHolder1_grdView_lblNo_1" class="ctlLabel">2</span>
									</td>
									<td>
										<span id="ContentPlaceHolder1_grdView_lblProductName_1" class="ctlLabel">消費税(8%)</span>
									</td>
									<td align="right" style="width:150px;">

									</td>
									<td align="right" style="width:100px;">

									</td>
									<td align="right" style="width:150px;">
										<input name="ctl00$ContentPlaceHolder1$grdView$ctl03$numPriceTotal" type="text" value="4,864" id="ContentPlaceHolder1_grdView_numPriceTotal_1" tabindex="-1" class="ReadOnlyDecimal" readonly="true" onkeydown="javascript:return numOnly(document.getElementById('ContentPlaceHolder1_grdView_numPriceTotal_1'),0,false);return true;" onblur="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_grdView_numPriceTotal_1'),12,true,9,0);return true;" onfocus="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_grdView_numPriceTotal_1'),9,false,9,0);return true;" style="border-style:None;ime-mode:disabled;">
									</td>
								</tr>-->
								<!--<tr>
									<td colspan="4" style="width:50px;text-indent:100px;border-top:double 2px #FFAA56;">
										<span id="ContentPlaceHolder1_grdView_lblNo_2" class="ctlLabel">合計</span>
									</td>
									<td align="right" style="width:150px;border-top:double 2px #FFAA56;">
										<input name="ctl00$ContentPlaceHolder1$grdView$ctl04$numPriceTotal" type="text" value="65,664" id="ContentPlaceHolder1_grdView_numPriceTotal_2" tabindex="-1" class="ReadOnlyDecimal" readonly="true" onkeydown="javascript:return numOnly(document.getElementById('ContentPlaceHolder1_grdView_numPriceTotal_2'),0,false);return true;" onblur="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_grdView_numPriceTotal_2'),12,true,9,0);return true;" onfocus="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_grdView_numPriceTotal_2'),9,false,9,0);return true;" style="border-style:None;ime-mode:disabled;">
									</td>
								</tr>-->
							</tbody>
						</table>
					</div>
					<span id="ContentPlaceHolder1_lblGridError" class="ErrorFont"></span>
					<br><br>
					<p>
						<span id="ContentPlaceHolder1_lblWord2" class="ctlLabel">仕様書・図面・見積書をご確認ください。</span>
					</p>
					<p>
						<span id="ContentPlaceHolder1_lblWord3" class="ctlLabel">ご購入手続きへ進む場合は、「次へ」をクリックしてください。</span>
					</p>
				</div>

				<div class="imgButtonPosition">
					<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnBack" id="ContentPlaceHolder1_imgbtnBack" class="imgButton" src="{{ asset('i/client/EcRequire/btnBack.png') }}" onclick="javaScript:history.go(-1);">
					<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnSpec" id="ContentPlaceHolder1_imgbtnSpec" class="imgButton" src="{{ asset('i/client/EcRequire/btnSpec.png') }}" onclick="javascript:window.location.href= '{{url("EC/spec")}}' ">
					<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnEstimate" id="ContentPlaceHolder1_imgbtnEstimate" class="imgButton" src="{{ asset('i/client/EcRequire/btnEstimate.png') }}" onclick="javascript:window.location.href= '{{url("EC/estimate")}}' ">
					<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnNext" id="ContentPlaceHolder1_imgbtnNext" class="imgButton" src="{{ asset('i/client/EcRequire/btnNext.png') }}" onclick="javascript:window.location.href= '{{url("EC/estimate")}}' ">
				</div>
			</div>

		<!--</form>-->
@section('script')
	<script src="{{ asset('js/client/WebResource.js') }}"></script>
	<script src="{{ asset('js/client/WebResource2.js') }}"></script>
	<script src="{{ asset('js/client/ProductEstimate.js') }}"></script>
	<script type="text/javascript">
//		window.onload = function() {
//			if(typeof contentPageLoad == 'function') contentPageLoad();
//		}
//		
//		intRowTax = 2;
//		intRowTotal = 3;
//		taxrate = 0.080;
//		
//		var theForm = document.forms['form1'];
//		if(!theForm) {
//			theForm = document.form1;
//		}
//
//		function __doPostBack(eventTarget, eventArgument) {
//			if(!theForm.onsubmit || (theForm.onsubmit() != false)) {
//				theForm.__EVENTTARGET.value = eventTarget;
//				theForm.__EVENTARGUMENT.value = eventArgument;
//				theForm.submit();
//			}
//		}
//		
//		WebForm_AutoFocus('ContentPlaceHolder1_grdView_numSuryo_0'); 
		
	</script>
@stop
