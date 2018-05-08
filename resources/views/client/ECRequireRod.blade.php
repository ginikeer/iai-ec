<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>エレシリンダー機種選定</title>
		<link rel="stylesheet" href="{{ asset('css/client/style.css') }}"/>
	</head>

	<body class="child-body" style="">
		<form method="post" action=" " id="form1">
			<div class="aspNetHidden">
				<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="OCyUgRPkmE7Cr3MUdcG5PVwdalqCi6a5STRAbyts8wUmuaBpo3L0MdvnwHiED8I0aFStY9nUfKDw+tokepBdek57ZC+aU46I5u2xQ4RXZjNwsSi+PcJS4dtcwRbqzMZUap6XYmM6lz6w5njsVWad1ygSugXXlonnTa/ljBzGGdceTX534kHqoUTzigsU2jgwKSevda/YLPGG9F2i6Cw7h0lWi700rWgrU/t7wQcl8zdiGuD1tdQA7yH5eikqbADz9Tqa0KNuXnq8rSu5mCrq2sQRE/ilyxfLvN986oaaPzxLTibA0QPRjibLOzdvAXBku2z901Atl/aGSk34HQVUJ1wCJB6RFX7GKJbmCnQd/XNmOxcRvWmrB68jKlhDBEZGQu/PN6bUgN0j13+iUzbqlnGOG19qZOJialo7DyWmdBwP/bpulvQAEbsqlh5fftmQQZq41BfW0pCGwY7PIpsu7AfEkBGA4wD97gqYzP1Xzf6xqLG9+vjfQZ/38KNcBxQLHtxirpxhOJWBqQnsbbFoklqtJrfDBCWjwLT5V1Cu9WHe0HSCI2szwNYdkZ5JGwTrG1XG6BMJN7A4OO9oI9GKBHx+jNPemxKnCg7J51bP5KKWNqOork72+Dppk7uH/wQsBHf4adF1RFhH7z61hZZME0LqXvAH2vEltbF4Qx8ZZZV/ywITD6VQECTFfu+8mm7GgjDFZhg32rFnTqy+iLck6wb96/xyhSlvK9OIvdkaHW+OEEjg/kQPZ/m/ergUfuNs6enF3toagPsZhngB7cPkcZvha53cTMuwGJbHr23fSLgmgx0rg1iBOXusIDiGfKcJ7eapCTeMDD1eE+FbvHnnoCmtvg2l6qM6/1/zsJDto3ZDhk03L0eoIDAtTxU0VAH45twrSF+xS5zMlK6so5mbX9D/r3tQ/k0DLGZ3Ms+blW2l8AVJ3CV+9qh+soC/KrGyVPQk2zQoph5Huiey2yEqqflSzMd+Rfl3R4XgxzYV+L0vrpxrtrIkAMFM45ee5tAc9t9iYI6f9RWHEZgXly+zeCOO3mNytdb8tTINwUsJlTn+5Jx8crbcj+puguPDXpWnKprvoQjeArErwSapO31DOTPHOX8qGegWeMmdf78S7HkRsXpjsQHRXXQADwqRcqpmVdAofdoHfn8bC3P6boW/jw==">
			</div>

			<div>

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
				<script src="{{ asset('js/client/jquery-1.11.2.min.js') }}"></script>
				<script src="{{ asset('js/client/common.js') }}"></script>
				<script src="{{ asset('js/client/ECRequirementSelection.js') }}"></script>
				<script src="{{ asset('js/client/ECRequirementLinearGuideRod.js') }}"></script>
				<script type="text/javascript">
					window.onload = function() {
						var elm = window.parent.document.getElementById("ifr");
//						elm.style.height = (document.body.scrollHeight + 30) + "px";
						elm.style.height = ($('#form1').height() + 30) + "px";
					};
				</script>

				<style type="text/css">
					.imgSize {
						width: auto;
						height: auto;
						max-height: 70px;
					}
				</style>

			</div>
		</form>

	</body>

</html>