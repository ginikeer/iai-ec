@section('title') e电缸机种选定 @stop

@extends('master/client')
@section('content')
	<div class="header">
		<div class="container">
			<div class="header-title"><p>e电缸机种选定</p></div>
			<div class="header-btn">
				<a href="http://iai.eigyo.com.cn/public/index.php"><img src="{{ asset('i/client/home/btnHome.png') }}"></a>
				<a href="http://iai.eigyo.com.cn/public/index.php/contact"><img src="{{ asset('i/client/home/btnContact.png') }}"></a>
			</div>
		</div>
	</div>
	<div class="content home-content">
		<div class="container">
			<h2 class="home-title">请选择e电缸机种</h2>
			<div class="ec-type">
				<a href="{{url('/ECRequire')}}"><img src="{{ asset('i/client/home/home.png') }}" /></a>
				<a href="{{url('/ECRequire')}}"><img src="{{ asset('i/client/home/ResembleSelection.png') }}" /></a>
			</div>
		</div>
	</div>
@endsection
