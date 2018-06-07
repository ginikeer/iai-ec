@section('title') お客様情報 @stop
@section('style')
<style type="text/css">
	.auto-style2 { height: 20px; } 
	.auto-style3 { height: 22px; } 
	.auto-style5 { height: 2px; width: 252px; } 
	.auto-style7 { height: 2px; } 
	.auto-style8 { height: 18px; } 
	.auto-style9 { width: 100px; height: 20px; }
	input.text { border-color: #FFCC99; border-width: 2px; width: 400px; } 
	input.number { border-color: #FFCC99; border-width: 2px; width: 400px; } 
	.lblHyphen { font-size: 18px; } 
	.lblAtmark { font-size: 18px; } 
	.lblError { width: 230px !important; } 
	.ErrorFont { color: red; } 
	p { font-size: 20px; }
</style>
@stop

@extends('master/client')
@section('content')
		<!--<form method="post" action="" id="form1" class="h-adr">
			<input type="hidden" name="_token" value="{{ csrf_token() }}" />-->
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
									<img id="ContentPlaceHolder1_imgBreadCrumbs1" class="imgBuyingFlow" src="{{ asset('i/client/EcRequire/breadcrumbs3.png') }}">
								</td>
							</tr>
						</tbody>
					</table>
					<br>
					<table id="tblInfo" style="margin-left: 85px;">
						<tbody>
							<tr>
								<td>
									<span id="ContentPlaceHolder1_lblSentence13" class="paragraph">邮件发送成功。</span>
								</td>
							</tr>
						</tbody>
					</table>
					<br>
					<div class="imgButtonPosition">
						<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnBack" id="ContentPlaceHolder1_imgbtnBack" class="imgButton" src="{{ asset('i/client/EcRequire/btnBack.png') }}" onclick="javascript:window.location.href= '{{url("/")}}'">
					</div>
				</div>

			</div>

		<!--</form>-->
@endsection
@section('script')
	<script src="{{ asset('js/client/WebResource.js') }}"></script>
	<script src="{{ asset('js/client/WebResource2.js') }}"></script>
@stop
