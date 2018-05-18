@section('title') 仕様書 @stop
@stop
@section('style')
<style type="text/css">
	.Align {
		vertical-align: top;
	}
	
	.margin10 {
		margin-left: 10px;
	}
	
	.margin20 {
		margin-left: 20px;
	}
	.option-title{
		color: #fff;
		background: #b8b8b8;
		text-align: center;
		line-height: 30px;
		padding: 10px 50px;
	}
</style>
@stop
@extends('master/client')
@section('content')
	<div class="header">
		<div class="container">
			<div class="header-title"><p>e电缸机种选定</p></div>
		</div>
	</div>
	<div class="container">
		<table>
			<tbody>
				<tr>
					<td class="Align">
						<h2 class="option-title">选项说明画面</h2>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<div class="container">
		<table width="900px">
			<tbody>
				<tr>
					<td class="Align">
						<img id="ContentPlaceHolder1_imgOption2" class="imgOption" src="{{ asset('i/client//Drawing/Option/B.png') }}">
					</td>
				</tr>
				<tr>
					<td class="Align">
						<img id="ContentPlaceHolder1_imgOption3" class="imgOption" src="{{ asset('i/client//Drawing/Option/FL.png') }}">
					</td>
				</tr>
				<tr>
					<td class="Align">
						<img id="ContentPlaceHolder1_imgOption4" class="imgOption" src="{{ asset('i/client//Drawing/Option/FT.png') }}">
					</td>
				</tr>
				<tr>
					<td class="Align">
						<img id="ContentPlaceHolder1_imgOption5" class="imgOption" src="{{ asset('i/client//Drawing/Option/NFA.png') }}">
					</td>
				</tr>
				<tr>
					<td class="Align">
						<img id="ContentPlaceHolder1_imgOption11" class="imgOption" src="{{ asset('i/client//Drawing/Option/NM.png') }}">
					</td>
				</tr>
				<tr>
					<td class="Align">
						<img id="ContentPlaceHolder1_imgOption12" class="imgOption" src="{{ asset('i/client//Drawing/Option/PN.png') }}">
					</td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection

@section('script')
@stop
			