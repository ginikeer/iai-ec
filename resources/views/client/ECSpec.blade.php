@section('title') 规格书 @stop
@stop

@extends('master/client')
@section('content')
<form method="post" action=" " onkeypress="javascript:return WebForm_FireDefaultButton(event, 'DummySubmitButton')" id="form1" class="h-adr">
	<div class="aspNetHidden">
		<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
		<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
		<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="+ZY1cQDoaNUuXUOokcElXRUrPNi+8EbaqXibErOcP7Ofz7ihglGi1Hj27djqqbRkbafltvDf2rASSuWhaLGxmH4pySNXU8aFzLk+lrWz9DaVAs8NJymL1Jx/1iMgY7Ni12a9FiatnZ5worPvN0AJJx7tZ56ADRGf/z7geHB1cUGHbEpMquzmYgMYnwXnp1ADH88Fl/+l/fHawIxfKpmXMHcMuYbqiQANRHaM8HWRmLJDl98sfaHMTyhLQK603fmW2x7y3TWbI9nKWKIngMQjKoCqAvbYnV6fqFvEMsXro9k5yyR+4FikYZSXOxfl/6vMgmwxJeu5lr4xBvtSUPngNKUpX3VDdtXvfGc4l9L5rW2Yp0uK5g7to33PC5MTMNpoO0rpUnqj6JUtDkMwCzLib03zO6fqH5zHnt9OknhAHSKpFZ68KOxVsdKl2v2RlKqD2xPdrcEFM1DDLVi45eWkZnMny2RB92IRsWiAzw9a1HAjiWw67wXhd7k48V/9Jhby+oVporMwS6YF3qfJFykilnf0HUtFzjdjaFkAm9kg455hWhzRvUQ52q0HjnY+KWkksFVmGbYAD2jo4pskxbG76fAz8SRufFi3Z/j+1XJGgS3rrbX+rAW/8hYXHKnhEJ09Aesy0KnGpdw3j4KNvTS7Gg/9AwfCq3cwFMzZI+6BzM7hTZb74a1/hoy8Z+S4ga+qcucQPPFbMZHRTEGeKHFQGwdehTU5gIcyGWBmR/9xY+ceNZz0v2g0Xq8x7NAosrptbX9UFT/pKU6Ef+thOZqtyHjGcOAxMO4gH3p+b1x5V6j9ylwlcbMc9Z8N/cSt6TMVL/49ecyQFZ+hsOSTu1PeaAndrwVG/OIqRcB5RSHgn1ek9VA+jeRB9ANIWnmbzZusNJNHgBRSCMO3Kp43aZVhWQ==">
	</div>

	<script type="text/javascript">
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
	</script>
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
		<div id="btnArea">

		</div>
		<div>
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
				</tbody>
			</table>
		</div>
		
		<br>

		<table id="ContentPlaceHolder1_tblMain" width="100%">
			<tbody>
				<tr>
					<td><iframe src="{{ url('EC/specsub?idx=' . $idx . '&direction=' . $direction . '&load=' . $load . '&page=' . $page) }}" id="ContentPlaceHolder1_ifDraw_{{ $idx }}" style="height: 3072px; width: 100%;" frameborder="0" scrolling="no"></iframe></td>
				</tr>
			</tbody>
		</table>
	</div>
</form>
@endsection

@section('script')
	<script type="text/javascript">
		window.onload = function() {
			if(typeof contentPageLoad == 'function') contentPageLoad();
		}
		//WebForm_AutoFocus('DummySubmitButton'); 
	</script>
@stop
			