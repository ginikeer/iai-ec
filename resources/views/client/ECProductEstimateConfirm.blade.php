@section('title') 製品見積額確認 @stop

@extends('master/client')
@section('content')

		<!--<form method="post" action="" id="form1" class="h-adr">
			<input type="hidden" name="_token" value="{{ csrf_token() }}" />-->
			<div class="aspNetHidden">
				<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
				<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
				<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="Wi06FaMCNpr8alt1nJj+Xpbja1v5SPw/EY2iguAQVXHuIrFlToxlrBWGtqkjptkdAIWD52NfgAtTcApc3Sf1tbdJyKEzFAD8vwtp8DH7OZV8o46hObNbPSyxdqMRzJPbGVl2zeKvCHpfTtAjHGtXHDdVfh4RCOLadzjVKi3ifI/FjXZZruYdxxyUt7YUa2wL9tGZLMMapJJNCy7lVMDEaNCAX4It2N81/zoqe27XBZg3BWNpkwXqdW8JKvmn5hBrg6KXLzZs7lbwksoihG2ZG9xs+rzA+R5QmnnDMcab/kykJq3KFHmYwUCJ/M9ZJ20cCtAF5rvQWYRdNs6BAP91WllmcD5svfeln8Wx+PujZUZKaKxphNgJFkvpS8F9jtgDsKUNxr7dm6p087I0wrNWEpQxK/iiwC7xxwXHLUqC3M3K7d13Kp8JOEgHWFd1LKrIX+VnuJJtrbl7pFnn1riPot+Wa3TpyU2bYNmTYePcFu/Qws3UUl/08x0H2REluHviV0m0CgmUqwHUpSnIyMA2hUmCrTr88UUbqbfjQHHqCbOORcGDy8AARSliOCD32OXX6tvUgL9NnElUdZEWfM/3qupCySRQJUzLSkAkEveF03nZTS6Wj/FKojNVhXH792P67I2pFj9VkenPP0dxvcfHPuS9bPiPc+DGu+0R+yGwLPj5GzDKr5KQE/Y1iXZO9OyJ5nUhfwN7y4eNieYupX7AhWOCM1mj1TmVHmRtJ9dRvp7R0a3nWeZDj5mjWRTkF3J1+CCtEJPhy09riVacN2UBfEjts+XRgyG8iytGh4rVX7OUXjZaSFcjXtEiU3qv3olFa7SX3p5dh6imzZv21lyKlArYkB95b1LU4ddepXq+vW+wT/ZjtYB/wZ770tmrsZPAwYt/EdCQLijib0SyxqAAPH2Jqgw9erwc4W+FEyfywM3kji76LMuvaAE3u1YIFFJ5X1dYobx7/wXyFBH238q0m5Xi+H6ZqwyuWMtomfC1EXModZqkF+/aNSzImwe8FQ2oOWik9fEYtrlzgZ7gNzdxVzFN9SQf1/rZk3Y4VO9Xz2zJThq72rZ755Y7pQSEZahJv7Egk3j0/WdjhXXkQKrCUIMk77Tzb0mHOraO/zPCG/mb3nDBpfy8LjCBtwYs/+tqiNLtbwp1P6wefY42YzhFtCVQmpiRO4u6ow0FcsOWUXVa+JF9wUtnCf7c6rTWUa5vRcmtebHSrgeqKYigdRNqvOBjjIQJOBZrWNEZa5tZGovxH3K+gM6D3aDry0rOyruqQxl+deIiCb0xi+80SB0lMcUCAA/Yx4mt/hMbtABoheTw+ezvdu9LA+p5MCfxKLrHr+cFEKhk0+7dH5otG4goBH6ZnhP3iDewu1Lzvx6QXq+m0T+mgjYvCt9/hO0J2QIyzgRGnsU+J2mccmisec0ok75eqM935xSYIW+Lowlhtkbhnn5gBDzgVedPHQLLFwe8z7JGfc+d/KsckcVNeTwp6/0XYP6jzsFC1e2/0fJm3VywZKtjnmOS741SIdMTLJC71y4Z8y0jQ5QKCXlWrxIoZAFDcwZYdlERL9ReyXE7paWfZbqNyoeh0Uu346dfJCZeAxcYDu0jjfPE4nob+ojOoW+bbt537DGCRWkbc8+QJ6PLfJaOm9QwGs8NVP04aFPYCX+hDkJFw1c/YrGZSwe46Wtz6DxBnFoh/wJVLe/Kxz2KjokjwdlIUBczYUznkN25NxyIAxwiO4PtcUhoQEDnPbOp514lNQhAbMyiGp5bbWAben0yk1Q+bFQyXRaXcoygjAQJyNxyuClgNGL+yj62IVXn1foPq8AL82oO10N6BtAv0PvK2hb+z3ozugvVuIjIpW+Kou+AYR8PyfAPAMQ9pH2NoImRmlimqR02Z9osWmY=">
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
								<img id="ContentPlaceHolder1_imgMenu3" class="imgMenu" src="{{ asset('i/client/EcRequire/menu3.png') }}">
							</td>
							<td>
								<img id="ContentPlaceHolder1_imgMenu4" class="imgMenu" src="{{ asset('i/client/EcRequire/menu4-select.png') }}">
							</td>
						</tr>
					</tbody>
				</table>
				<div class="divCenter">
					<table id="ContentPlaceHolder1_tblpan">
						<tbody>
							<tr>
								<td>
									<span id="ContentPlaceHolder1_lblWord" class="ctlLabel">購入型式・数量をご確認ください。</span>
								</td>
							</tr>
						</tbody>
					</table>

					<br>
					<div>
						<table class="Grid" cellspacing="0" rules="all" border="1" id="ContentPlaceHolder1_grdView" style="width:100%;border-collapse:collapse;">
							<tbody>
								<tr>
									<th scope="col" style="width:100px;">ＮＯ</th>
									<th scope="col">型式</th>
									<th align="right" scope="col" style="width:150px;">数量</th>
								</tr>
								<tr>
									<td>
										<span id="ContentPlaceHolder1_grdView_lblNo_0" class="ctlLabel">1</span>
									</td>
									<td>
										<span id="ContentPlaceHolder1_grdView_lblProductName_0" class="ctlLabel">EC-S7LH-250-0</span>
									</td>
									<td align="right">
										<span id="ContentPlaceHolder1_grdView_lblSuryo_0" class="ctlLabel">1</span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="imgButtonPosition">
					<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnBack" id="ContentPlaceHolder1_imgbtnBack" class="imgButton" src="{{ asset('i/client/EcRequire/btnBack.png') }}" onclick="javaScript:history.go(-1);">
					<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnOrder" id="ContentPlaceHolder1_imgbtnOrder" class="imgButton" src="{{ asset('i/client/EcRequire/btnNext.png') }}" onclick="javascript:window.location.href= '{{url("EC/customerinfo")}}';">
				</div>

				<div id="divCaution" style="display:none; color:#af2d40; margin-left:200px;">
					<p>
						利用規約に同意いただけない場合は、申し訳ございませんが購入することはできません。<br> ご同意いただける場合はチェックボックスにチェックをお願いいたします。
					</p>
				</div>

			</div>
		<!--</form>-->

@endsection
@section('script')
	<script src="{{ asset('js/client/WebResource.js') }}"></script>
	<script src="{{ asset('js/client/WebResource2.js') }}"></script>
	<script src="{{ asset('js/client/ProductEstimate.js') }}"></script>
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
		
		function CheckConsent(url) {

			var chk = document.getElementById('chkConsent');
			var ret
			if(chk.checked == true) {
				document.getElementById('divCaution').style.display = "none";
				ret = true;
			} else {
				document.getElementById('divCaution').style.display = "";
				ret = false;
			}
			
			window.location.href = url;

			return ret
		};
		
		WebForm_AutoFocus('DummySubmitButton'); 
	</script>
@stop
