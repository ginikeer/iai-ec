@section('title') e电缸机种选定 @stop

@section('style')
<style type="text/css">
	.imgSize { width: auto; height: auto; max-height: 70px; }
</style>
@stop

@extends('master/clientsub')
@section('content')
<div id="child-site-box">
	<img id="ContentPlaceHolder1_imgLinearGuideRodTitle" class="imgSize" src="{{ asset('i/client/EcRequire/LinearGuideRodTitle.png') }}">

	<div id="entry-box">

		<div id="dvWorkLoadingState">
			<div id="dvWorkLoadingStateDescription" style="float:left">
				<img id="ContentPlaceHolder1_imgLinearGuideRodContent1" class="imgSize" src="{{ asset('i/client/EcRequire/LinearGuideRodContent1.png') }}">
			</div>
			<div id="dvWorkLoadingStateEntry">
				<div style="float:left;">
					<div id="dvWorkLoadingStateEntryH1Image">
						<img id="ContentPlaceHolder1_imgRodHeaderRod" class="imgSize" src="{{ asset('i/client/EcRequire/RodHeaderRod.png') }}">
					</div>
					<div>
						<input type="image" name="ctl00$ContentPlaceHolder1$imgLinearGuide1" id="ContentPlaceHolder1_imgLinearGuide1" class="ImgLinearGuide" src="{{ asset('i/client/EcRequire/LinearGuideRod_Off.png') }}" onclick="return ImageChange(this,1);">
					</div>
				</div>
				<div style="float:left;">
					<div id="dvWorkLoadingStateEntryH2Image">
						<img id="ContentPlaceHolder1_imgRodHeaderRR" class="imgSize" src="{{ asset('i/client/EcRequire/RodHeaderRR.png') }}">
					</div>
					<div>
						<input type="image" name="ctl00$ContentPlaceHolder1$imgLinearGuide2" id="ContentPlaceHolder1_imgLinearGuide2" class="ImgLinearGuide" src="{{ asset('i/client/EcRequire/LinearGuideRR_Off.png') }}" onclick="return ImageChange(this,2);">
					</div>
				</div>
				<div style="float:left;">
					<div id="dvWorkLoadingStateEntryH3Image">
						<img id="ContentPlaceHolder1_imgRodHeaderBojinBoteki" class="imgSize" src="{{ asset('i/client/EcRequire/RodHeaderBojinBoteki.png') }}">
					</div>
					<div>
						<input type="image" name="ctl00$ContentPlaceHolder1$imgLinearGuide3" id="ContentPlaceHolder1_imgLinearGuide3" class="ImgLinearGuide" src="{{ asset('i/client/EcRequire/LinearGuideBojinBoteki_Off.png') }}" onclick="return ImageChange(this,3);">
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
@endsection

@section('script')
	<script src="{{ asset('js/client/ECRequirementLinearGuideRod.js') }}"></script>
@stop