@section('title') e电缸机种选定 @stop
@section('style')
	<style type="text/css">
		.container-box {
			display: flex;
		}
		.box {
			border: 1px solid #fff;
			text-align: center;
		}
		
		.box-size {
			width: 155px;
			border: 1px solid #fff;
			text-align: center;
		}
		.box-size110 {
			width: 110px;
			border: 1px solid #fff;
			text-align: center;
		}
		
		.box-size50 {
			width: 50px;
			border: 1px solid #fff;
			text-align: center;
		}
		
		.container-button {
			padding: 5px 0 5px 0;
			text-align: right;
		}
		
		.Align {
			vertical-align: top;
			font-size: 24px;
		}
		
		.Series {
			width: 50px;
			font-size: 24px;
			border: none;
			text-align: center;
		}
		span {
			font-size: 16px;
		}
		
		.adjust {
			padding-left: 50px;
		}
		
		.OptionError {
			overflow-y: hidden
		}
	</style>
@stop

@extends('master/client')
@section('content')
	<div class="header">
		<div class="container">
			<div class="header-title"><p>e电缸在线选型</p></div>
			<div class="header-btn">
				<a href="{{ url('/') }}"><img src="{{ asset('i/client/home/btnHome.png') }}"></a>
				<a href="http://iai.eigyo.com.cn/public/index.php/contact"><img src="{{ asset('i/client/home/btnContact.png') }}"></a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="container-box">
			<div class="box">
				<img id="ContentPlaceHolder1_imgMenu1" class="imgMenu" src="{{ asset('i/client/EcRequire/menu1-select.png') }}">
			</div>
			<div class="box">
				<img id="ContentPlaceHolder1_imgMenu2" class="imgMenu" src="{{ asset('i/client/EcRequire/menu2.png') }}">
			</div>
			<div class="box">
				<img id="ContentPlaceHolder1_imgMenu3" class="imgMenu" src="{{ asset('i/client/EcRequire/menu3.png') }}">
			</div>
			<div class="box">
				<img id="ContentPlaceHolder1_imgMenu4" class="imgMenu" src="{{ asset('i/client/EcRequire/menu4.png') }}">
			</div>
		</div>
		
		<div id="site-box">
			<div class="container-button">
				<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnOption" id="ContentPlaceHolder1_imgbtnOption" tabindex="6" class="imgMenu" src="{{ asset('i/client/EcRequire/btnOption.png') }}" onclick="window.open(&quot; {{ url('ECRequire/optiondiscription')}} &quot; ,'_blank');return false;">
			</div>
			<div style="padding-left: 20px;">
				<span id="ContentPlaceHolder1_lblWord" class="ctlLabel">请选择使用的型号。</span>
			</div>
			<div class="container-box" style="margin-top: 20px; padding-left: 20px">
				<div class="box-size110">系列</div>
				<div class="box-size50"></div>
				<div class="box-size">类型</div>
				<div class="box-size50"></div>
				<div class="box-size">行程</div>
				<div class="box-size50"></div>
				<div class="box-size">电源·IO电缆长</div>
				<div class="box-size50"></div>
				<div class="box-size">选项</div>
			</div>
			<div class="container-box" style="width:920px; padding-left: 20px;">
				<div class="box-size110">
					<select name="ctl00$ContentPlaceHolder1$ddlSeries" id="ContentPlaceHolder1_ddlSeries" tabindex="1" onchange="setSelectIndex(this)" style="width:100px;display:none;">
						<option selected="selected" value="0">EC</option>
					</select>
					<span id="ContentPlaceHolder1_lblSeries" class="Series" style="display:inline-block;width:150px;display:inline;"></span>
					<input name="ctl00$ContentPlaceHolder1$txtSeries" type="text" value="EC" id="ContentPlaceHolder1_txtSeries" tabindex="-1" class="text" style="display: none">
				</div>
				<div class="box-size50">
					<input name="ctl00$ContentPlaceHolder1$TxtText1" type="text" value="－" readonly="readonly" id="ContentPlaceHolder1_TxtText1" tabindex="-1" class="Series" style="width:50px;">
				</div>
				<div class="box-size">
					<select name="ctl00$ContentPlaceHolder1$ddlType" id="ContentPlaceHolder1_ddlType" tabindex="1" onchange="setSelectIndex(this)" style="width:150px;display:none;">
						<option value="0">S6S</option>
						<option value="1">S6H</option>
						<option value="2">S6M</option>
						<option value="3">S6L</option>
						<option value="4">S6SH</option>
						<option value="5">S6MH</option>
						<option value="6">S6HH</option>
						<option value="7">S6LH</option>
						<option value="8">S7S</option>
						<option value="9">S7H</option>
						<option value="10">S7M</option>
						<option value="11">S7L</option>
						<option value="12">S7SH</option>
						<option value="13">S7HH</option>
						<option value="14">S7MH</option>
						<option value="15">S7LH</option>
						<option value="16">R6S</option>
						<option value="17">R6H</option>
						<option value="18">R6M</option>
						<option value="19">R6L</option>
						<option value="20">R7S</option>
						<option value="21">R7H</option>
						<option value="22">R7M</option>
						<option value="23">R7L</option>
						<option value="24">RR6S</option>
						<option value="25">RR6H</option>
						<option value="26">RR6M</option>
						<option value="27">RR6L</option>
						<option value="28">RR7S</option>
						<option value="29">RR7H</option>
						<option value="30">RR7M</option>
						<option value="31">RR7L</option>
						<option value="32">R6SW</option>
						<option value="33">R6HW</option>
						<option value="34">R6MW</option>
						<option value="35">R6LW</option>
						<option value="36">R7SW</option>
						<option value="37">R7HW</option>
						<option value="38">R7MW</option>
						<option value="39">R7LW</option>
						<option value="40">GD4H</option>
						<option value="41">GD4M</option>
						<option value="42">GD4L</option>
						<option value="43">GS4H</option>
						<option value="44">GS4M</option>
						<option value="45">GS4L</option>
						<option value="46">RP4H</option>
						<option value="47">RP4M</option>
						<option value="48">RP4L</option>
						<option value="49">TC4H</option>
						<option value="50">TC4M</option>
						<option value="51">TC4L</option>
						<option value="52">TW4H</option>
						<option value="53">TW4M</option>
						<option value="54">TW4L</option>
					</select>
					<span id="ContentPlaceHolder1_lblType" class="Series" style="display:inline-block;width:150px;display:inline;"></span>
					<input name="ctl00$ContentPlaceHolder1$txtIndexType" type="text" value="RR6M" id="ContentPlaceHolder1_txtIndexType" tabindex="-1" class="text" style="display: none">
					<div style="margin-top: 20px;">
						<img id="ContentPlaceHolder1_imgCableOption" src="" align="left">
					</div>
				</div>
				<div class="box-size50">
					<input name="ctl00$ContentPlaceHolder1$TxtText3" type="text" value="－" readonly="readonly" id="ContentPlaceHolder1_TxtText3" tabindex="-1" class="Series" style="width:50px;">
				</div>
				<div class="box-size">
					<select name="ctl00$ContentPlaceHolder1$ddlStroke" id="ContentPlaceHolder1_ddlStroke" tabindex="3" onchange="setSelectIndex(this)" style="width:150px;display:none;">
						<option value="0">65</option>
						<option value="1">115</option>
						<option value="2">165</option>
						<option value="3">215</option>
						<option value="4">265</option>
						<option value="5">315</option>
					</select>
					<span id="ContentPlaceHolder1_lblStroke" class="Series" style="display:inline-block;width:150px;display:inline;"></span>
					<input name="ctl00$ContentPlaceHolder1$txtIndexStroke" type="text" value="65" id="ContentPlaceHolder1_txtIndexStroke" tabindex="-1" class="text" style="display: none">
				</div>
				<div class="box-size50">
					<input name="ctl00$ContentPlaceHolder1$TxtText4" type="text" value="－" readonly="readonly" id="ContentPlaceHolder1_TxtText4" tabindex="-1" class="Series" style="width:50px;">
				</div>
				<div class="box-size">
					<select name="ctl00$ContentPlaceHolder1$ddlCable" id="ContentPlaceHolder1_ddlCable" tabindex="3" onchange="setSelectIndex(this)" style="width:150px;">
						<option selected="selected" value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
					<input name="ctl00$ContentPlaceHolder1$txtIndexCable" type="text" value="0" id="ContentPlaceHolder1_txtIndexCable" tabindex="-1" class="text" style="display: none">
				</div>
				<div class="box-size50">
					<input name="ctl00$ContentPlaceHolder1$TxtText5" type="text" value="－" readonly="readonly" id="ContentPlaceHolder1_TxtText5" tabindex="-1" class="Series" style="width:50px;">
				</div>
				<div class="box-size">
					<select size="4" name="ctl00$ContentPlaceHolder1$lstBoxOption" multiple="multiple" id="ContentPlaceHolder1_lstBoxOption" tabindex="4" onclick="ChangeOption(this)" style="height:170px;width:150px;">
						<option value="1">B</option>
						<option value="2">FFA</option>
						<option value="3">FL</option>
						<option value="4">FT</option>
						<option value="5">NFA</option>
						<option value="6">NJ</option>
						<option value="7">NJPB</option>
						<option value="8">NM</option>
						<option value="9">PN</option>
						<option value="10">QR</option>
						<option value="11">QRPB</option>
						<option value="12">WA</option>
						<option value="13">WL</option>
					</select>
					<input name="ctl00$ContentPlaceHolder1$txtIndexOption" type="text" id="ContentPlaceHolder1_txtIndexOption" tabindex="-1" class="text" style="display: none">
				</div>
			</div>
		</div>
		
		<div class="imgButtonPosition" style="width:100%">
			<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnBack" id="ContentPlaceHolder1_imgbtnBack" tabindex="5" class="imgButton" src="{{ asset('i/client/EcRequire/btnBack.png') }}" onclick="javaScript:history.go(-1);">
			<!--<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnNext" id="ContentPlaceHolder1_imgbtnNext" tabindex="5" class="imgButton" src="{{ asset('i/client/EcRequire/btnNext.png') }}" onclick="javascript:window.location.href= '{{url("EC/peripheral")}}' ">-->
			<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnNext" id="ContentPlaceHolder1_imgbtnNext" tabindex="5" class="imgButton" src="{{ asset('i/client/EcRequire/btnNext.png') }}" >
			<input type="hidden" id="next-link" value="{{url("EC/peripheral")}}" />
		</div>
		
		<div id="dvOptionError">
			<textarea name="ctl00$ContentPlaceHolder1$lblOptionError2" rows="3" cols="20" readonly="readonly" id="ContentPlaceHolder1_lblOptionError2" class="AttentionMsg OptionError" overflow-y="hidden" style="border-width:0px;width:950px;"></textarea>
		</div>
		
	</div>
	@endsection
	
	@section('script')
		<script src="{{ asset('js/client/jquery-1.11.2.min.js') }}"></script>
		<script src="{{ asset('js/client/common.js') }}"></script>
		<script src="{{ asset('js/client/ECRequirementSelection.js') }}"></script>
		<script type="text/javascript">
			setImgCableOption();
			
			function setSelectIndex(own) {
				// 選択した位置の退避
		
				var ctrDdlSeries
				var seriesIdx
				var seriesText
		
				ctrDdlSeries = document.getElementById("ContentPlaceHolder1_ddlSeries")
				seriesIdx = ctrDdlSeries.selectedIndex;
				seriesText = ctrDdlSeries.options[seriesIdx].text;
				document.getElementById("ContentPlaceHolder1_txtSeries").value = seriesText;
		
				var ctrDdlType
				var typeIdx
				var typeText
		
				ctrDdlType = document.getElementById("ContentPlaceHolder1_ddlType")
				typeIdx = ctrDdlType.selectedIndex;
				typeText = ctrDdlType.options[typeIdx].text;
				document.getElementById("ContentPlaceHolder1_txtIndexType").value = typeText;
		
				var ctrDdlStroke
				var strokeIdx
				var strokeText
		
				ctrDdlStroke = document.getElementById("ContentPlaceHolder1_ddlStroke")
				strokeIdx = ctrDdlStroke.selectedIndex;
				strokeText = ctrDdlStroke.options[strokeIdx].text;
				document.getElementById("ContentPlaceHolder1_txtIndexStroke").value = strokeText;
		
				var ctrDdlCable
				var cableIdx
				var cableText
		
				ctrDdlCable = document.getElementById("ContentPlaceHolder1_ddlCable")
				cableIdx = ctrDdlCable.selectedIndex;
				cableText = ctrDdlCable.options[cableIdx].text;
				document.getElementById("ContentPlaceHolder1_txtIndexCable").value = cableText;
		
			}
		
			function ChangeOption(own) {
		
				BSel(own)
		
				setSelectList(own)
			}
		
			function BSel(BCon) {
		
				var selLst = document.getElementById("ContentPlaceHolder1_txtIndexOption").value.split(",") // 選択済のオプション配列
		
				var optCnt = BCon.options.length - 1 // オプションカウント
				var selOpt = "" // 今回選択したオプション
				var empFlg = true;
		
				// 今回選択したオプションを取得する
				for(i = 0; i <= optCnt; i++) {
					if(BCon.options[i].selected) {
						selID = BCon.options[i].text;
						empFlg = false;
					}
				}
		
				if(empFlg) {
					return;
				}
				// 選択済オプションに今回選択したオプションを追加(削除)
				var remove = false;
				for(i = 0; i <= selLst.length - 1; i++) {
					if(selLst[i] == selID) {
						selLst.splice(i, 1);
						remove = true;
					}
				}
				if(remove == false) {
					selLst.push(selID);
				}
		
				// 選択状態をクリア
				for(i = 0; i <= optCnt; i++) {
					BCon.options[i].selected = false
				}
				// 結合した選択済オプションからチェック状態にする
				for(i = 0; i <= optCnt; i++) {
					for(j = 0; j <= selLst.length - 1; j++) {
						if(selLst[j] == BCon.options[i].text) {
							BCon.options[i].selected = true
						}
					}
		
				}
			}
		
			//リストの値を取得し格納
			function setSelectList(own) {
				var sel = document.getElementById(own.id);
				var cnt = 0;
				// クリア
				document.getElementById("ContentPlaceHolder1_txtIndexOption").value = ""
		
				for(var i = 0; i < sel.length; i++) {
					if(sel[i].selected) {
						if(cnt == 0) {
							// 初回処理
							document.getElementById("ContentPlaceHolder1_txtIndexOption").value = sel[i].text;
							cnt += 1;
						} else {
							// カンマ区切りで設定
							document.getElementById("ContentPlaceHolder1_txtIndexOption").value += "," + sel[i].text;
							cnt += 1;
						}
					}
		
				}
			}
		
			function GetConfValue() {
				return "http://localhost:53915/WCF/";
			}
		
			function setSeries() {
		
				ctrDdlSeries = document.getElementById("ContentPlaceHolder1_ddlSeries")
				SeriesIdx = ctrDdlSeries.selectedIndex;
				SeriesText = ctrDdlSeries.options[SeriesIdx].text;
				document.getElementById("ContentPlaceHolder1_txtSeries").value = SeriesText;
		
				//タイプセット
				setType();		
			}
		
			function setModel() {
		
				ctrDdlType = document.getElementById("ContentPlaceHolder1_ddlType")
				typeIdx = ctrDdlType.selectedIndex;
				typeText = ctrDdlType.options[typeIdx].text;
				document.getElementById("ContentPlaceHolder1_txtIndexType").value = typeText;
		
				//ストロークセット
				setStroke();
		
				//ケーブルセット
				setCable();
		
				//オプションセット
				setOption();
		
			}
			
			function setImgCableOption() {
				var imgCableOption = document.getElementById("ContentPlaceHolder1_imgCableOption");
				
				var path = "{{ asset('i/client/EcRequire/cableoption_') }}";
				var prefix = "";
				var suffix = "";
				var png = ".png";
				
				//前半部分
				if (sessionStorage.getItem(ssRod) == 1) {
					prefix = 'RD';
					//后半部分
					if (sessionStorage.getItem(ssLinearGuideRod) == 1) {
				        suffix = '_ST';
				    } else if (sessionStorage.getItem(ssLinearGuideRod) == 2) {
				        suffix = '_RR';
				    } else if (sessionStorage.getItem(ssLinearGuideRod) == 3) {
				        suffix = '_WP';
				    }
				} else if(sessionStorage.getItem(ssSlider) == 1) {
					prefix = 'SD';
					suffix = '_ST';
				} else if(sessionStorage.getItem(ssSmallType) == 1) {
					prefix = 'ST';
					if (sessionStorage.getItem(ssLinearGuideSmall) == 1) {
			       		suffix = '_RP';
				    } else if (sessionStorage.getItem(ssLinearGuideSmall) == 2) {
				        suffix = '_GS';
				    } else if (sessionStorage.getItem(ssLinearGuideSmall) == 3) {
				        suffix = '_GD';
				    } else if (sessionStorage.getItem(ssLinearGuideSmall) == 4) {
				        suffix = '_TC';
				    } else if (sessionStorage.getItem(ssLinearGuideSmall) == 5) {
				        suffix = '_TW';
				    }
				} else if(sessionStorage.getItem(ssResemble_Rod) == 1) {
					prefix = 'RD';
					suffix = '_ST';
				} else if(sessionStorage.getItem(ssResemble_Rodless) == 1) {
					prefix = 'SD';
					suffix = '_ST';
				}
				
				if(prefix == "") prefix = 'SD';
				if(suffix == "") prefix = '_ST';
				
				var _src = path + prefix + suffix + png;
				imgCableOption.src = _src;
			}
			
			
			function setType() {
		
				var ctrDdlSeries = document.getElementById("ContentPlaceHolder1_ddlSeries");
				var intSIndex = ctrDdlSeries.selectedIndex;
		
//				$.ajax({
//					type: "get",
//					datatype: "xml",
//					contentType: "text/xml; charset=utf-8",
//					url: ECMS_HOST_URL + "/WCF/srvECSelection.svc/GetTypeOfSeries",
//					data: {
//						ddlSeries: ctrDdlSeries[intSIndex].text
//					},
//				}).done(function(data) {
//		
//					var ndCol2 = data.getElementsByTagName("TYPE");
//		
//					//オプション要素をクリア
//					var ctrDdlType = document.getElementById("ContentPlaceHolder1_ddlType");
//		
//					if(ctrDdlType.hasChildNodes()) {
//						while(ctrDdlType.childNodes.length > 0) {
//							ctrDdlType.removeChild(ctrDdlType.firstChild)
//						}
//					}
//					for(r = 0; r < ndCol2.length; r++) {
//						//オプション要素の定義
//						var option = document.createElement('option');
//		
//						//Valueに対して値をセット
//						option.setAttribute('value', r)
//						//要素に入れる文字列をセット
//						option.innerHTML = ndCol2[r].firstChild.nodeValue
//						//コントロールに追加
//						ctrDdlType.appendChild(option)
//					}
//		
//					ctrDdlType = document.getElementById("ContentPlaceHolder1_ddlType")
//					typeIdx = ctrDdlType.selectedIndex;
//					typeText = ctrDdlType.options[typeIdx].text;
//					document.getElementById("ContentPlaceHolder1_txtIndexType").value = typeText;
//					setModel();
//		
//					return false;
//		
//				}).fail(function(data, textStatus, errorThrown) {
//					// エラー時   
//					alert("false")
//		
//				});
		
			}
		
			function setStroke() {
		
				var ctrDdlSeries = document.getElementById("ContentPlaceHolder1_ddlSeries");
				var intSIndex = ctrDdlSeries.selectedIndex;
				var ctrDdlType = document.getElementById("ContentPlaceHolder1_ddlType");
				var intIndex = ctrDdlType.selectedIndex;
		
//				$.ajax({
//					type: "get",
//					datatype: "xml",
//					//datatype: "json",
//					//contentType: "application/json; charset=utf-8",
//					contentType: "text/xml; charset=utf-8",
//					url: ECMS_HOST_URL + "/WCF/srvECSelection.svc/GetStroke",
//					//data: { ddlSelect: ctrDdlType[intIndex].text },
//					data: {
//						ddlSeries: ctrDdlSeries[intSIndex].text,
//						ddlType: ctrDdlType[intIndex].text
//					},
//				}).done(function(data) {
//		
//					//var ndCol1 = data.getElementsByTagName("PRICE");
//					var ndCol2 = data.getElementsByTagName("STROKE");
//		
//					//オプション要素をクリア
//					var ctrDdlStroke = document.getElementById("ContentPlaceHolder1_ddlStroke");
//		
//					if(ctrDdlStroke.hasChildNodes()) {
//						while(ctrDdlStroke.childNodes.length > 0) {
//							ctrDdlStroke.removeChild(ctrDdlStroke.firstChild)
//						}
//					}
//					for(r = 0; r < ndCol2.length; r++) {
//						//オプション要素の定義
//						var option = document.createElement('option');
//		
//						//Valueに対して値をセット
//						option.setAttribute('value', r)
//						//要素に入れる文字列をセット
//						option.innerHTML = ndCol2[r].firstChild.nodeValue
//						//コントロールに追加
//						ctrDdlStroke.appendChild(option)
//					}
//		
//					ctrDdlStroke = document.getElementById("ContentPlaceHolder1_ddlStroke")
//					strokeIdx = ctrDdlStroke.selectedIndex;
//					strokeText = ctrDdlStroke.options[strokeIdx].text;
//					document.getElementById("ContentPlaceHolder1_txtIndexStroke").value = strokeText;
//		
//					return false;
//		
//				}).fail(function(data, textStatus, errorThrown) {
//					// エラー時   
//					alert("false")
//		
//				});
			}
		
			function setCable() {
		
				var ctrDdlSeries = document.getElementById("ContentPlaceHolder1_ddlSeries");
				var intSIndex = ctrDdlSeries.selectedIndex;
				var ctrDdlType = document.getElementById("ContentPlaceHolder1_ddlType");
				var intIndex = ctrDdlType.selectedIndex;
		
//				$.ajax({
//					type: "get",
//					datatype: "xml",
//					//datatype: "json",
//					//contentType: "application/json; charset=utf-8",
//					contentType: "text/xml; charset=utf-8",
//					url: ECMS_HOST_URL + "/WCF/srvECSelection.svc/GetCable",
//					//data: { ddlSelect: ctrDdlType[intIndex].text },
//					data: {
//						ddlSeries: ctrDdlSeries[intSIndex].text,
//						ddlType: ctrDdlType[intIndex].text
//					},
//				}).done(function(data) {
//		
//					//var ndCol1 = data.getElementsByTagName("PRICE");
//					var ndCol2 = data.getElementsByTagName("CABLE");
//		
//					//オプション要素をクリア
//					var ctrDdlCable = document.getElementById("ContentPlaceHolder1_ddlCable");
//		
//					if(ctrDdlCable.hasChildNodes()) {
//						while(ctrDdlCable.childNodes.length > 0) {
//							ctrDdlCable.removeChild(ctrDdlCable.firstChild)
//						}
//					}
//					for(r = 0; r < ndCol2.length; r++) {
//						//オプション要素の定義
//						var option = document.createElement('option');
//		
//						//Valueに対して値をセット
//						option.setAttribute('value', r)
//						//要素に入れる文字列をセット
//						option.innerHTML = ndCol2[r].firstChild.nodeValue
//						//コントロールに追加
//						ctrDdlCable.appendChild(option)
//					}
//		
//					ctrDdlCable = document.getElementById("ContentPlaceHolder1_ddlCable")
//					cableIdx = ctrDdlCable.selectedIndex;
//					cableText = ctrDdlCable.options[cableIdx].text;
//					document.getElementById("ContentPlaceHolder1_txtIndexCable").value = cableText;
//		
//					return false;
//		
//				}).fail(function(data, textStatus, errorThrown) {
//					// エラー時   
//					alert("false")
//		
//				});
			}
		
			function setOption() {
		
				var ctrDdlSeries = document.getElementById("ContentPlaceHolder1_ddlSeries");
				var intSIndex = ctrDdlSeries.selectedIndex;
				var ctrDdlType = document.getElementById("ContentPlaceHolder1_ddlType");
				var intIndex = ctrDdlType.selectedIndex;
		
//				$.ajax({
//					type: "get",
//					datatype: "xml",
//					//datatype: "json",
//					//contentType: "application/json; charset=utf-8",
//					contentType: "text/xml; charset=utf-8",
//					url: ECMS_HOST_URL + "/WCF/srvECSelection.svc/GetOptionType",
//					//data: { ddlSelect: ctrDdlType[intIndex].text },
//					data: {
//						ddlSeries: ctrDdlSeries[intSIndex].text,
//						ddlType: ctrDdlType[intIndex].text
//					},
//				}).done(function(data) {
//		
//					//var ndCol1 = data.getElementsByTagName("PRICE");
//					var ndCol2 = data.getElementsByTagName("OPTION_TYPE");
//		
//					//オプション要素をクリア
//					var ctrDdlOption = document.getElementById("ContentPlaceHolder1_lstBoxOption");
//		
//					if(ctrDdlOption.hasChildNodes()) {
//						while(ctrDdlOption.childNodes.length > 0) {
//							ctrDdlOption.removeChild(ctrDdlOption.firstChild)
//						}
//					}
//		
//					//空白行追加
//					//var option_space = document.createElement('option')
//					//option_space.setAttribute('value', 0)
//					//option_space.innerHTML = ""
//					//ctrDdlOption.appendChild(option_space)
//		
//					for(r = 0; r < ndCol2.length; r++) {
//						//オプション要素の定義
//						var option = document.createElement('option');
//		
//						//Valueに対して値をセット
//						option.setAttribute('value', r + 1)
//						//要素に入れる文字列をセット
//						option.innerHTML = ndCol2[r].firstChild.nodeValue
//						//コントロールに追加
//						ctrDdlOption.appendChild(option)
//					}
//					//ctrDdlOption.Height = 28 * ndCol2.length;
//		
//					document.getElementById("ContentPlaceHolder1_txtIndexOption").value = "";
//		
//					return false;
//		
//				}).fail(function(data, textStatus, errorThrown) {
//					// エラー時   
//					alert("false")
//		
//				});
			}
			
			function CreateList() {
				$('input[id $= txtTest]').autocomplete({
					source: $('#lstTest > option').map(function() {
						return $(this).attr("value");
					}).get(),
					minLength: 0
				}).focus(function() {
					$(this).autocomplete("search");
				});
			}
		
			document.getElementById("ContentPlaceHolder1_ddlSeries").onchange = setSeries;
			document.getElementById("ContentPlaceHolder1_ddlType").onchange = setModel;
			
			$('#ContentPlaceHolder1_lblSeries').text(sessionStorage.getItem('SelectSeries'));
			$('#ContentPlaceHolder1_lblType').text(sessionStorage.getItem('SelectType'));
			$('#ContentPlaceHolder1_lblStroke').text(sessionStorage.getItem('SelectStroke'));
			
			$('#ContentPlaceHolder1_imgbtnNext').click(function(){
				var options =  $('#ContentPlaceHolder1_lstBoxOption option:selected');
				var ContentPlaceHolder1_lstBoxOption = [];
				for (var i=0 ; i< options.length ; i++) {
					ContentPlaceHolder1_lstBoxOption.push(options[i].innerHTML)
				}
				
				sessionStorage.setItem('ddlCable', $('#ContentPlaceHolder1_ddlCable').val());
				sessionStorage.setItem('boxOption', ContentPlaceHolder1_lstBoxOption);
				
				window.location.href = $('#next-link').val();
			});
		</script>
	@stop