@section('title') お客様情報 @stop
@section('style')
<style type="text/css">
	.auto-style2 { height: 20px; } 
	.auto-style3 { height: 22px; } 
	.auto-style5 { height: 2px; width: 252px; } 
	.auto-style7 { height: 2px; } 
	.auto-style8 { height: 18px; } 
	.auto-style9 { width: 100px; height: 20px; }
	input.text { border-color: #FFCC99; border-width: 2px; width: 400px; padding: 0 10px; box-sizing: border-box; height: 29px; line-height: 29px;} 
	input.number { border-color: #FFCC99; border-width: 2px; width: 400px; padding: 0 10px; box-sizing: border-box; } 
	.lblHyphen { font-size: 18px; } 
	.lblAtmark { font-size: 18px; } 
	.lblError { width: 230px !important; } 
	.ErrorFont { color: red; } 
	p { font-size: 20px; }
	.send-btn { width: 117px; margin-left: 13px; height: 25px; line-height: 25px; display: inline-block; border: 2px solid #FFCC99; text-align: center; font-size: 14px; cursor: pointer; background: #FFCC99; }
</style>
@stop

@extends('master/client')
@section('content')
		<!--<form method="post" action="" id="form1" class="h-adr">-->
			<input type="hidden" name="_token" value="{{ csrf_token() }}" />
			<input type="hidden" id="url-ajax-send-code" value="{{ url('/EC/send-code') }}" />
			<input type="hidden" id="url-ajax-customerinfo-submit" value="{{ url('/EC/customerinfo-submit') }}" />
			
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
							<a href="{{ url('/') }}"><img src="{{ asset('i/client/home/btnHome.png') }}"></a>
							<a href="http://iai.eigyo.com.cn/public/index.php/contact"><img src="{{ asset('i/client/home/btnContact.png') }}"></a>
						</div>
					</div>
				</div>
				<div>
					<table id="tblBreadCrumbs">
						<tbody>
							<tr>
								<td>
									<img id="ContentPlaceHolder1_imgMenu1" class="imgMenu" src="{{ asset('i/client/EcRequire/menu1.png') }}">
								</td>
								<td>
									<img id="ContentPlaceHolder1_imgMenu2" class="imgMenu" src="{{ asset('i/client/EcRequire/menu2.png') }}">
								</td>
								<td>
									<img id="ContentPlaceHolder1_imgMenu3" class="imgMenu" src="{{ asset('i/client/EcRequire/menu3.png') }}">
								</td>
								<td>
									<img id="ContentPlaceHolder1_imgMenu4" class="imgMenu" src="{{ asset('i/client/EcRequire/menu4-select.png') }}">
								</td>
							</tr>
							<tr>
								<td colspan="4">
									<img id="ContentPlaceHolder1_imgBreadCrumbs1" class="imgBuyingFlow" src="{{ asset('i/client/EcRequire/breadcrumbs1.png') }}">
									<img id="ContentPlaceHolder1_imgBreadCrumbs5" class="imgBuyingFlow" src="{{ asset('i/client/EcRequire/breadcrumbs5.png') }}" style="display: none;">
								</td>
							</tr>
						</tbody>
					</table>
					<br>
					<table id="tblInfo" style="margin-left: 85px;">
						<tbody>
							<tr>
								<td>
									<span id="ContentPlaceHolder1_lblSentence13" class="paragraph">お客様情報をご入力ください。</span>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="Address" style="margin-left: 135px;">
						<tbody>
							<tr>
								<th>
									<span id="ContentPlaceHolder1_lblCompanyName" class="ctlLabel">公司名 </span></th>
								<td>
									<input name="company" type="text" id="company" class="text required-item"></td>
								<td class="lblError">
									<span id="" class="ErrorFont"></span></td>
							</tr>
							<tr>
								<th>
									<span id="" class="ctlLabel">地址</span></th>
								<td>
									<input name="address" type="text" id="address" class="text required-item">
								</td>
								<td class="lblError">
									<span id="" class="ErrorFont"></span></td>
							</tr>
							<tr>
								<th>
									<span id="ContentPlaceHolder1_lblNameKanji" class="ctlLabel">姓名</span></th>
								<td>
									<input name="name" type="text" id="name" class="text required-item"></td>
								<td class="lblError">
									<span id="" class="ErrorFont"></span></td>
							</tr>
							<tr>
								<th>
									<span id="ContentPlaceHolder1_lblTel" class="ctlLabel">公司电话</span></th>
								<td>
				                    <input name="tel1" type="text" maxlength="6" id="tel1" class="text" onkeypress="return CheckNum();" style="width:121px;">
				                    <span id="" class="lblHyphen"> - </span>
				                    <input name="tel2" type="text" maxlength="8" id="tel2" class="text required-item" onkeypress="return CheckNum();" style="width:121px;">
				                    <span id="" class="lblHyphen"> - </span>
				                    <input name="tel3" type="text" maxlength="6" id="tel3" class="text" onkeypress="return CheckNum();" style="width:121px;">
				                </td>
				                <td class="lblError">
									<span id="" class="ErrorFont"></span>
								</td>
							</tr>
							<tr>
								<th>
									<span id="ContentPlaceHolder1_lblTel" class="ctlLabel">手机</span></th>
								<td>
									<input name="mobile" type="text" id="mobile" class="text required-item" onkeypress="return CheckNum();" style="width: 260px;">
									<div class="send-btn">发送验证码</div>
								</td>
								<td class="lblError">
									<span id="MobileFormatError" class="ErrorFont"></span>
								</td>
							</tr>
							<tr>
								<th>
									<span id="ContentPlaceHolder1_lblTel" class="ctlLabel">验证码</span></th>
								<td>
									<input name="code" type="text" id="code" class="text required-item" onkeypress="return CheckNum();">
								</td>
								<td class="lblError">
								<span id="" class="ErrorFont"></span></td>
							</tr>
							<tr>
								<th>
									<span id="ContentPlaceHolder1_lblMail" class="ctlLabel">邮箱</span></th>
								<td>
									<input name="email" type="text" id="email" class="text required-item"></td>
								<td class="lblError">
									<span id="MailFormatError" class="ErrorFont"></span></td>
							</tr>
							<tr>
								<th>
									<span id="ContentPlaceHolder1_lblMailConfirm" class="ctlLabel">邮箱确认</span></th>
								<td>
									<input name="again" type="text" id="again" class="text required-item" style="ime-mode:disabled;">
								</td>
								<td class="lblError">
									<span id="MailConfirmError" class="ErrorFont"></span>
								</td>
							</tr>
							<tr>
								<td class="lblError" colspan="2">
									<span id="sendMessage" class="" style="font-size: 14px;"></span>
								</td>
							</tr>
						</tbody>
					</table>
					<br>
					<div class="imgButtonPosition">
						<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnBack" id="ContentPlaceHolder1_imgbtnBack" class="imgButton" src="{{ asset('i/client/EcRequire/btnBack.png') }}" onclick="javaScript:history.go(-1);">
						<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnNext" id="ContentPlaceHolder1_imgbtnNext" class="imgButton" src="{{ asset('i/client/EcRequire/btnNext.png') }}">
						
						<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnBack" id="ContentPlaceHolder1_imgbtnBack2" class="imgButton" src="{{ asset('i/client/EcRequire/btnBack.png') }}" style="display: none;">
						<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnNext" id="ContentPlaceHolder1_imgbtnNext2" class="imgButton" src="{{ asset('i/client/EcRequire/btnNext.png') }}" style="display: none;" data-href="{{ url('/EC/customerfinish') }}" >
					</div>
				</div>
			</div>

		<!--</form>-->
@endsection
@section('script')
	<script src="{{ asset('js/client/WebResource.js') }}"></script>
	<script src="{{ asset('js/client/WebResource2.js') }}"></script>
	<script src="{{ asset('js/client/customerInfo.js') }}"></script>
	<script type="text/javascript">
		window.onload = function() {
//			if(typeof contentPageLoad == 'function') contentPageLoad();
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
		
		function contentPageLoad() {
			$(this).YubinBango_Init();
		}
		WebForm_AutoFocus('ContentPlaceHolder1_txtAtena'); 
	</script>
@stop
