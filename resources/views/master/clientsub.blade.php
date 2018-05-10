<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-cn">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>@section('title') @show</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="_token" content="{{ csrf_token() }}"/>
		<link href="{{ asset('favicon.ico') }}" rel="SHORTCUT ICON">
		
		<link rel="stylesheet" href="{{ asset('css/client/style.css') }}"/>
	@section('style')
    @show
</head>
<body class="child-body" style="">
	<form method="post" action="" id="form1">
		<div class="aspNetHidden">
			<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="UjPkIMA/KN/82R7yp2j/sVo9BaPJgyCjk3brbVoDG+VW3SNL0sJY6LpuangahNm63jBvsMzcpPuxt9LNPd7+MJRx/TMzjx4iPek2QcGcDjUMNPIjasdffjfnbnBMfTRX9qDLpg8v8CFwswYzccAw7ICqnUXaLQqdNZfqrCCLR2ntAD8i2Y8oa33qqYn0LfYQ+ccuT1LuUaNiehrMLscgs0zEHavRSKPPKmAtTz8xtN8hoXM5buyD22GKvVbUJ5zfTGUh62Yal5+PnY0JyehBZIvEZFN3XPcDRyxp4DXv62xIC7s1w4iiiijX2ci+VnCV+ySWHZRT6y0MZJgkeY4BfO9NrTRtCbUMAHAOD7YMIYMUEjnOMRpIDWqAaNNT3Mys2xHbWGOW7mv14LHtuAax/yxye4y/i1fbVb8CVstx2c3AC9oxGgQ1NsBVjbgXWJ41VH5S7J21kEtQpp0ieDRgZXF2ZLInyjsEEaVMJdR9mfwp+WwMCj5Waa5QLtxMoe9O+ZMbQVxVsao7W4GRm+zqnhmOVAWq0uvF5lYNT/wgTkDELzdcpgZm/E4DyZywapTkx0VbfS+IYlpx4xFIVwwDhmcooiNdvnqDaJHho7fk1++ps4ITOVIT10oWpjeCnPhgCG2QE+qpCHftomKNP3kizxteV8JoXfcYXJzivoXJo/kuWxLCw797sXgpTyPsRs+S1ptqvA2aywdaXDSYiAp1ao0oJmp8dAVJXUjFIwZeLAe7k0mesdAyB1c2+NcpWvjgXS7iQhOQzKaP8d/TU2n6wPhDf9f5+jnbV0OP8c9nLCVUv/NaboAO0YhwlB7yOwvVUE0bkMMY04+6NX88a0NIgAUQAFxTmwjXq2OgvgjHBdGnAt5kmMOu+Km004Tn18e0KgY0pQTTLgEt1l7gmb8GbpoAyMmL+77QsdKUHRQfeV+RIYSyikdWNsg/vuT+hW3Bs0RuPS2zK4P6akXVjI9UhWd37JFOxI8t+Xrckyoweos1eueQA+nTh7YIJ2/kn4+G">
		</div>
		<div>
	
	@yield('content')
		</div>
	</form>
	<script src="{{ asset('js/client/jquery-1.11.2.min.js') }}"></script>
	<script src="{{ asset('js/client/common.js') }}"></script>
	<script src="{{ asset('js/client/ECRequirementSelection.js') }}"></script>
	<script type="text/javascript">
		window.onload = function() {
			var elm = window.parent.document.getElementById("ifr");
			elm.style.height = ($('#form1').height() + 30) + "px";
		};
	</script>
	@section('script')
    @show
   
</body>
</html>