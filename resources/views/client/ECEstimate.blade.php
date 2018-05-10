@section('title') 見積書 @stop
@section('style')
<style type="text/css">
	.auto-style2 { height: 20px; } 
	.auto-style3 { height: 22px; } 
	.auto-style5 { height: 2px; width: 252px; } 
	.auto-style7 { height: 2px; } 
	.auto-style8 { height: 18px; } 
	.auto-style9 { width: 100px; height: 20px; }
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
				<table id="ContentPlaceHolder1_tblpan">
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
						<tr>
							<td colspan="4" class="tdRowMagin"></td>
						</tr>
						<tr>
							<td colspan="4">
								<span id="ContentPlaceHolder1_lblDescription1" class="ctlLabel">御見積書をご確認の上、下方のボタンからご購入手続きへお進みください。</span>
							</td>
						</tr>
						<tr>
							<td colspan="4">
								<span id="ContentPlaceHolder1_lblDescription2" class="ctlLabel">宛先、備考欄へご記入の上、見積書をPDFへ出力することも可能です。</span>
							</td>
						</tr>
					</tbody>
				</table>

				<br>
				<div style="border:solid;border-width:thin">
					<table id="ContentPlaceHolder1_tblMain" width="100%">
						<tbody>
							<tr>
								<td colspan="7" align="right">
								</td>
								<td align="right" colspan="2">
									<table id="tblOutput" style="border-bottom-style: solid; border-width: thin">
										<tbody>
											<tr>
												<td align="left" style="width:120px">
													<span id="ContentPlaceHolder1_lblCreateDateTitle" class="ctlLabel">作成日：</span>
												</td>
												<td>
													<span id="ContentPlaceHolder1_lblCreateDate" class="ctlLabel">2018年05月10日</span>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
								<td></td>
							</tr>
							<tr>
								<td colspan="7" align="right" class="auto-style8">
								</td>
								<td align="right" colspan="2" class="auto-style8">
									<table id="tblEstNo" style="border-bottom-style: solid; border-width: thin">
										<tbody>
											<tr>
												<td style="width:120px" align="left">
													<span id="ContentPlaceHolder1_lblEstNo" class="ctlLabel">見積Ｎｏ．：</span>
												</td>
												<td>
													<input name="ctl00$ContentPlaceHolder1$numEstNo" type="text" value="EC_180510-001" id="ContentPlaceHolder1_numEstNo" disabled="disabled" class="aspNetDisabled number" onkeypress="return CheckNum();" style="background-color:White;border-style:None;height:25px;width:150px;ime-mode:disabled;">
												</td>
											</tr>
										</tbody>
									</table>
								</td>
								<td class="auto-style8"></td>
							</tr>
							<tr align="center">
								<td colspan="9">
									<span id="ContentPlaceHolder1_lblTitle" class="ctlLabel" style="font-size:XX-Large;text-decoration:underline;">御見積書</span>
								</td>
							</tr>
							<tr>
								<td class="auto-style7"></td>
								<td class="auto-style7"></td>
								<td class="auto-style7"></td>
								<td class="auto-style7"></td>
								<td class="auto-style7"></td>
								<td class="auto-style7"></td>
								<td class="auto-style7"></td>
								<td class="auto-style5"></td>
								<td class="auto-style7"></td>
							</tr>
							<tr>
								<td colspan="4">
									<table id="tblAtena" style="border-bottom-style: inset; border-width: thin">
										<tbody>
											<tr>
												<td>
													<input name="ctl00$ContentPlaceHolder1$txtAtena" type="text" id="ContentPlaceHolder1_txtAtena" class="text" style="width:362px">
												</td>
												<td>
													<span id="ContentPlaceHolder1_lblAtena" class="ctlLabel">様</span>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
								<td colspan="3"></td>
								<td colspan="2" rowspan="5">
									<img id="ContentPlaceHolder1_imgIAILogo" class="imgLogo" src="{{ asset('i/client/EcRequire/logo.png') }}" align="right">
								</td>
							</tr>
							<tr>
								<td colspan="7" class="auto-style2"></td>
							</tr>
							<tr>
								<td colspan="4">
									<table id="tblDeliveryDate" style="border-bottom-style: inset; border-width: thin">
										<tbody>
											<tr>
												<td style="width:190px">
													<span id="ContentPlaceHolder1_lblShippingDateTitle" class="ctlLabel">納期</span>
												</td>
												<td style="width:190px">
													<span id="ContentPlaceHolder1_lblShippingDate" class="ctlLabel">ご入金確認後、1週間以上</span>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
								<td colspan="3" class="auto-style3"></td>
							</tr>
							<tr>
								<td colspan="7"></td>
							</tr>
							<tr>
								<td colspan="4">
									<table id="tblEstimateTerm" style="border-bottom-style: inset; border-width: thin">
										<tbody>
											<tr>
												<td style="width:190px">
													<span id="ContentPlaceHolder1_lblLimitTitle" class="ctlLabel">見積有効期限</span>
												</td>
												<td style="width:190px">
													<span id="ContentPlaceHolder1_lblLimit" class="ctlLabel">30日</span>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
								<td colspan="3"></td>
							</tr>
							<tr>
								<td colspan="9">　</td>
							</tr>
							<tr>
								<td colspan="9">
									<span id="ContentPlaceHolder1_lblWord" class="ctlLabel">下記の通り、御見積り申し上げます。</span>
								</td>
							</tr>
							<tr>
								<td colspan="9" class="auto-style2"></td>
							</tr>
							<tr>
								<td colspan="5" rowspan="2">
									<!--<table id="tblEstimateTotal" style="border-style: solid; border-width: thin">
										<tbody>
											<tr>
												<td style="width:180px">
													<span id="ContentPlaceHolder1_lblPriceTitle" class="ctlLabel" style="font-size:X-Large;">見積合計(税別)</span>
												</td>
												<td style="width:200px" align="right">
													<span id="ContentPlaceHolder1_lblPrice" class="ctlLabel" style="font-size:X-Large;">¥60,800.00</span>
												</td>
											</tr>
										</tbody>
									</table>-->
								</td>
								<td>
								</td>
								<td rowspan="2"></td>
								<td>
								</td>
								<td colspan="1" align="right">
									<!--<table id="tblPriceInTax" style="border-style: none none solid none; border-width: thin">
										<tbody>
											<tr>
												<td style="width:142px" align="left">
													<span id="ContentPlaceHolder1_lblTaxIncludeTitle" class="ctlLabel">(税込合計)</span>
												</td>
												<td>
													<span id="ContentPlaceHolder1_lblTaxInclude" class="ctlLabel">¥65,664.00</span>
												</td>
											</tr>
										</tbody>
									</table>-->
								</td>
							</tr>
							<tr>
								<td>
								</td>
								<td colspan="2" align="right">
									<!--<table id="tblTax" style="border-left-style: none; border-bottom-style: solid; border-width: thin">
										<tbody>
											<tr>
												<td style="width:150px" align="left">
													<span id="ContentPlaceHolder1_lblTaxTitle" class="ctlLabel">(消費税(8%))</span>
												</td>
												<td>
													<span id="ContentPlaceHolder1_lblTax" class="ctlLabel">¥4,864.00</span>
												</td>
											</tr>
										</tbody>
									</table>-->
								</td>
							</tr>
							<tr>
								<td colspan="9" class="auto-style3"></td>
							</tr>
							<tr>
								<td colspan="9">
									<div>
										<table cellspacing="0" rules="all" border="1" id="ContentPlaceHolder1_grdView" style="border-style:Solid;width:100%;border-collapse:collapse;">
											<tbody>
												<tr>
													<th align="center" scope="col">品名</th>
													<th align="center" scope="col">型式</th>
													<!--<th align="center" scope="col">単価</th>-->
													<th align="center" scope="col">数量</th>
													<!--<th align="center" scope="col">価格</th>-->
												</tr>
												<tr>
													<td align="left">
														<span id="ContentPlaceHolder1_grdView_lblLstProdName_0" class="ctlLabel">エレシリンダー</span>
													</td>
													<td align="left">
														<span id="ContentPlaceHolder1_grdView_lblLstName_0" class="ctlLabel">EC-S7LH-250-0</span>
													</td>
													<!--<td align="right">
														<span id="ContentPlaceHolder1_grdView_lblLstUnitPrice_0" class="ctlLabel">¥60,800.00</span>
													</td>-->
													<td align="right">
														<span id="ContentPlaceHolder1_grdView_lblLstSuryo_0" class="ctlLabel">1</span>
													</td>
													<!--<td align="right">
														<span id="ContentPlaceHolder1_grdView_lblLstPrice_0" class="ctlLabel">¥60,800.00</span>
													</td>-->
												</tr>
												<!--<tr>
													<td align="left" colspan="4">
														<span id="ContentPlaceHolder1_grdView_lblLstProdName_1" class="ctlLabel">合計(税別)</span>
													</td>
													<td align="right">
														<span id="ContentPlaceHolder1_grdView_lblLstPrice_1" class="ctlLabel">¥60,800.00</span>
													</td>
												</tr>-->
											</tbody>
										</table>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="9"></td>
							</tr>
							<tr>
								<td colspan="9">
									<span id="ContentPlaceHolder1_lblBikoTitle" class="ctlLabel">備考</span>
								</td>
							</tr>
							<tr>
								<td colspan="9">
									<textarea name="ctl00$ContentPlaceHolder1$txtBiko" rows="15" cols="20" id="ContentPlaceHolder1_txtBiko" class="ctlText60" style="width:99%;ime-mode:active;"></textarea>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div id="dvAttention">
					<p>
						<span id="ContentPlaceHolder1_lblAttentionMsg" class="AttentionMsg">※送料は無料です。</span>
					</p>
				</div>
				<br>
				<div class="imgButtonPosition">
					<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnBack" id="ContentPlaceHolder1_imgbtnBack" class="imgButton" src="{{ asset('i/client/EcRequire/btnBack.png') }}" onclick="javaScript:history.go(-1);">
					<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnPDF" id="ContentPlaceHolder1_imgbtnPDF" class="imgButton" src="{{ asset('i/client/EcRequire/btnPDF.png') }}" onclick="">
					<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnSpec" id="ContentPlaceHolder1_imgbtnSpec" class="imgButton" src="{{ asset('i/client/EcRequire/btnSpec.png') }}" onclick="javascript:window.location.href= '{{url("EC/spec")}}' ">
					<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnOrder" id="ContentPlaceHolder1_imgbtnOrder" class="imgButton" src="{{ asset('i/client/EcRequire/btnOrder.png') }}" onclick="javascript:window.location.href= '{{url("EC/productestimateconfirm")}}' ">
				</div>
			</div>
		<!--</form>-->
@section('script')
	<script src="{{ asset('js/client/WebResource.js') }}"></script>
	<script src="{{ asset('js/client/WebResource2.js') }}"></script>
	<script type="text/javascript">
		window.onload = function() {
			if(typeof contentPageLoad == 'function') contentPageLoad();
		}
	
		var theForm = document.forms['form1'];
		if(!theForm) {
			theForm = document.form1;
		}

		function __doPostBack(eventTarget, eventArgument) {
			if(!theForm.onsubmit || (theForm.onsubmit() != false)) {
				theForm.__EVENTTARGET.value = eventTarget;
				theForm.__EVENTARGUMENT.value = eventArgument;
				theForm.submit();
			}
		}
				
		WebForm_AutoFocus('ContentPlaceHolder1_txtAtena'); 
	</script>
@stop
