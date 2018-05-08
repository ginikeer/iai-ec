<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	    <title>運転時間</title>
	    <link rel="stylesheet" href="{{ asset('css/client/style.css') }}"/>
	</head>
	<body class="child-body" style="">
	    <form method="post" action="./ECRequirementRunningTime.aspx" id="form1">
			<div class="aspNetHidden">
				<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="o69n6PZxu95qlfK+oZW434IBf2DRmutYe4ax5TSH2E9xdb44ITQiZ2mMJbGhzAsv8tHlRSVIRyLiXqdC0WKIDhVryXcgVaUUBhNShTPaNuaRDLkSlkRUHaGQB1b9Ryll0qDN7YATTokRKQyNduTU/UZfLfYT1yplXQxpmRSW5oNHmfsbDa4LS6wI2eyp7uW68WlcgKxSfnk++mWer7z6Mo76i9Iclx8BYQ1A799HSmSdkQHfW5soldlPsLWLHfvG69FwZ5cl8K4SvLnBUfdGbEZoLQudsNfYavA3BmWr6uRp0/ByuklvjNBMHMCxfdUkDG49jxRsKAoLIIdA9UZJUOJQLXuWVF5TU6yIYQhjX6DZoj41MOp0LW5lz/DVZYlMIbs1sC/eLnziWquPmTpe309kLNkQ+NgsU4pOLAcWnWr8hpYS4veRWbqzFtVr5BLSgooM+ce1jlEeiEfTBOFEMB+9lRH11ZSs1u/UggLiGWRFhesJ1K5aKivUJSx52mvdDTVzU4b7zYJiRmU672oMxRzlwXgJsk2/uKYHvIAbK6mCRjw0eEER8IOhbbAuSAVz3eSxF5F+jsun+AYpL3X5qpLITZzv34+3JZbTjS++8ofE60Oj0GBnZ3ZW/cESn2TSyr5PdT7PEnKXMul800bSJI/JqwYoNS7k9RseiLMk8WMS0e5qI2I2eXTrwqxKTdJ9YOMfxjv/LHwDa53js2S7BR9K1578W8ZXWxyzfxUPxtr0Kc+E06abMLoo+vU0pRvaL92fEjR2ZvKsDC1DZ5gTi2TGIRs/t2nzBo43vpboWJ+j2/eQxGjXArWR8xYnHwWwVWm+hAvpD3n93E+lGFU/DIhyEIZsrE4uYH+KARZpRAzeqdAuhF95tTrQL3HhtmEMjJlxM7MT+5eZ6Gt2MXAsxpMxk6u9JpY2I2iEHC/J2MrAGLzdYIvQeHhg+x8Bb2w4l0Ejcl8Nea3+BMtDdrDO8Lr9MyB//eow1+Bb5kz0ejcDWXGRip8/+dib4MllXIgALPTAIishWr0wGoNA2ieawJITzxuCwFVW2KYFAkTmD6c5OCXK6/VSEPgyVNJ7z1yc8pGvAgEkRI2AcRCHHRix2dD8zKyhEKG4LihYbTP7nsXPLu1Z8Atrlxg6bqwuKUH4RvwoLph4NIWJxT/jjoS4NoVgF89+vzvlYM+moDmig3TCfVQFLfQ0gzz/J/j4WO08Q6OoWa9Y7GkN1Gatr12xQT2fLTTYRXT7dImSyRfGPHSTvR8gGeILg8D+jdj/6gSgILI+iKEXzo8zLdfkTZuqu+PYx/CaFByomR6IBNnnQoWmkDNQKzPBFzyAY8QyFJ71nbJywzUPTruH+49i6Nrfs+GYsOWWRH6cGN3EFZn3e6s7zZ/pgHlD59cnGwFQ7Pn8jOdfpnDHzsxA+KSmvNGK6w==">
			</div>
		    <div>
			    <div id="child-site-box">
			        <img id="ContentPlaceHolder1_imgRequirementRunnintTimeTitle" src="{{ asset('i/client/EcRequire/ECRequirementRunningTimeTitle.png') }}">
		            <div id="dvRoundTrip">
		                <img id="ContentPlaceHolder1_imgNo1Title" src="{{ asset('i/client/EcRequire/RunnningTime-content1.png') }}">
		                <div id="dvRoundTripEntry">
		                <img id="ContentPlaceHolder1_imgNo1ContentTitle" src="{{ asset('i/client/EcRequire/RunnningTime-RoundTripItem.png') }}">
		                    <input name="ctl00$ContentPlaceHolder1$numRoundTrip" type="text" id="ContentPlaceHolder1_numRoundTrip" class="number" onchange="txtChange(this)" onkeydown="javascript:return numOnly(document.getElementById('ContentPlaceHolder1_numRoundTrip'),1,false);return true;" onblur="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_numRoundTrip'),6,true,4,1);return true;" onfocus="javascript:serKetaKugiri(document.getElementById('ContentPlaceHolder1_numRoundTrip'),6,false,4,1);return true;" style="ime-mode:disabled;">
		                    <img id="ContentPlaceHolder1_imgNo1ContentUnit" src="{{ asset('i/client/EcRequire/RunnningTime-RoundTripUnit.png') }}">
		                </div>
		                <div id="dvRoundTripError">
		                    <span id="ContentPlaceHolder1_lblRoundTripError" class="AttentionMsg"></span>
		                </div>
		            </div>
			        <div id="dvOperatingTime">
			            <img id="ContentPlaceHolder1_imgNo2Title" src="{{ asset('i/client/EcRequire/RunnningTime-content2.png') }}">
			            <div id="dvOperatingTimeEntry">
			                <img id="ContentPlaceHolder1_imgNo2ContentTitle" src="{{ asset('i/client/EcRequire/RunnningTime-OperatingTimeItem.png') }}">
			                <input name="ctl00$ContentPlaceHolder1$numOperatingTime" type="text" maxlength="2" id="ContentPlaceHolder1_numOperatingTime" class="number" onchange="txtChange(this)" onkeypress="return CheckNum();" style="ime-mode:disabled;">
			                <img id="ContentPlaceHolder1_imgNo2ContentUnit" src="{{ asset('i/client/EcRequire/RunnningTime-OperatingTimeUnit.png') }}">
			            </div>
			            <div id="dvOperatingTimeError">
			                <span id="ContentPlaceHolder1_lblOperatingTimeError" class="AttentionMsg"></span>
			            </div>
			        </div>
			        <div id="dvOperatingDay">
			            <img id="ContentPlaceHolder1_imgNo3Title" src="{{ asset('i/client/EcRequire/RunnningTime-content3.png') }}">
			            <div id="dvOperatingDayEntry">
			                <img id="ContentPlaceHolder1_imgNo3ContentTitle" src="{{ asset('i/client/EcRequire/RunnningTime-OperatingDaysItem.png') }}">
			                <input name="ctl00$ContentPlaceHolder1$numOperatingDay" type="text" maxlength="3" id="ContentPlaceHolder1_numOperatingDay" class="number" onchange="txtChange(this)" onkeypress="return CheckNum();" style="ime-mode:disabled;">
			            	<img id="ContentPlaceHolder1_imgNo3ContentUnit" src="{{ asset('i/client/EcRequire/RunnningTime-OperatingDaysUnit.png') }}">
			            </div>
			            <div id="dvOperatingDayError">
			                <span id="ContentPlaceHolder1_lblOperatingDayError" class="AttentionMsg"></span>
			            </div>
			        </div>
			    </div>
			    <script src="{{ asset('js/client/jquery-1.11.2.min.js') }}"></script>
				<script src="{{ asset('js/client/common.js') }}"></script>
				<script src="{{ asset('js/client/ECRequirementSelection.js') }}"></script>
				<script src="{{ asset('js/client/ECRequirementRunningTime.js') }}"></script>
		        <script type="text/javascript">
			        window.onload = function () {
			            var elm = window.parent.document.getElementById("ifr");
			            elm.style.height = ($('#form1').height() + 30) + "px";
			        };
			    </script>
			    <style type="text/css">
			        input{
			            vertical-align:top;
			        }
			        img{
			            vertical-align:-10%
			        }
			    </style>
		    </div>
    	</form>
	</body>
</html>