@section('title') 利用規約 @stop

@extends('master/client')
@section('content')
		<form method="post" action="./ECTerms.aspx" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'DummySubmitButton')" id="form1" class="h-adr">
			<div class="aspNetHidden">
				<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
				<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
				<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="rg0ISTE7vuU2j3QaF/0UV8uwTYOBEIplieEupUuRj7/lUst5q18shOt2B1IhiJYlqUn2IsWZgwTQnmYLPWdX3hzjbycytSCelo6eNd8ZSogonGV+3Uc5n5EFCldNsizBAg7RncURDExeDpyt+adpvRgAT8MVkUqH5+hAbT3jeQNykUBolV1XNEtRNC0gjqvSKPm8CNsaUMquNjdSWr7OE0S4vN4wBC2Y2kgqba+TLmk3NLXwHuUDhVuI/+M8uBiWvEiTsaDtS/AqokSkGS8Q4Hm8P07cAm6jXFfJSw7g6/BNWOJ8aFgP8JDcOWGFLaMFwAQYBY/oTP4lpzuHV9sHlM8OB/qRLzh0qY5dJQQ9/Xe0yKN09Fsy/n0DMKjuFf8F">
			</div>

			<span class="p-country-name" style="display:none;">Japan</span>
			<div id="d_header">

				<input type="submit" name="ctl00$DummySubmitButton" value="Button" onclick="return false;" id="DummySubmitButton" style="display:none">
			</div>

			<div class="container">
				<div class="header">
					<div>
						<div class="header-title"><p>e电缸在线选型</p></div>
					</div>
				</div>
				<div class="divCenter" style="text-align:center;">
					<img id="ContentPlaceHolder1_imgTerms1" class="imgTerms" src="{{ asset('i/client/EcRequire/Terms1.png') }}">
					<img id="ContentPlaceHolder1_imgTerms2" class="imgTerms" src="{{ asset('i/client/EcRequire/Terms2.png') }}">
					<img id="ContentPlaceHolder1_imgTerms3" class="imgTerms" src="{{ asset('i/client/EcRequire/Terms3.png') }}">
					<img id="ContentPlaceHolder1_imgTerms4" class="imgTerms" src="{{ asset('i/client/EcRequire/Terms4.png') }}">
					<img id="ContentPlaceHolder1_imgTerms5" class="imgTerms" src="{{ asset('i/client/EcRequire/Terms5.png') }}">
					<img id="ContentPlaceHolder1_imgTerms6" class="imgTerms" src="{{ asset('i/client/EcRequire/Terms6.png') }}">
				</div>
			</div>
		</form>
@endsection

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
				
		WebForm_AutoFocus('DummySubmitButton'); 
	</script>
@stop
