<!doctype html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>@section('title') @show</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="_token" content="{{ csrf_token() }}"/>
	<link href="{{ asset('favicon.ico') }}" rel="SHORTCUT ICON">
	
	<link rel="stylesheet" href="{{ asset('css/client/style.css') }}"/>
	
	@section('style')
    @show
</head>
<body>
	
	@yield('content')
	<script src="{{ asset('js/client/jquery-1.11.2.min.js') }}"></script>
	<script src="{{ asset('js/client/common.js') }}"></script>
	@section('script')
    @show
    
   
</body>
</html>