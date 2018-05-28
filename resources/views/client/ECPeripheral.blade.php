@section('title') 周边设备的选择 @stop
@section('style')
<style type="text/css">
	.Align {
		text-align: left;
	}
	input[type="checkbox"] {
	    vertical-align: middle;
	    width: 16px;
    	height: 16px;
	}
</style>
@stop

@extends('master/client')
@section('content')
		<!--<form method="post" id="form1" class="h-adr">
			<input type="hidden" name="_token" value="{{ csrf_token() }}" />-->
			<div class="aspNetHidden">
				<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
				<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
				<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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">
			</div>

			<span class="p-country-name" style="display:none;">Japan</span>
			<div id="d_header">

				<input type="submit" name="ctl00$DummySubmitButton" value="Button" onclick="return false;" id="DummySubmitButton" style="display:none">
			</div>

			<!-- 中身 -->
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
				<table id="ContentPlaceHolder1_tblpan">
					<tbody>
						<tr>
							<td>
								<img id="ContentPlaceHolder1_imgMenu1" class="imgMenu" src="{{ asset('i/client/EcRequire/menu1.png') }}">
							</td>
							<td>
								<img id="ContentPlaceHolder1_imgMenu2" class="imgMenu" src="{{ asset('i/client/EcRequire/menu2-select.png') }}">
							</td>
							<td>
								<img id="ContentPlaceHolder1_imgMenu3" class="imgMenu" src="{{ asset('i/client/EcRequire/menu3.png') }}">
							</td>
							<td>
								<img id="ContentPlaceHolder1_imgMenu4" class="imgMenu" src="{{ asset('i/client/EcRequire/menu4.png') }}">
							</td>
						</tr>
					</tbody>
				</table>

				<div class="divCenter">
					<br>
					<span id="ContentPlaceHolder1_lblSelectType" class="ctlLabel">选择的型号</span>
					<div>
						<table class="Grid" cellspacing="0" rules="all" border="1" id="ContentPlaceHolder1_grdType" style="width:100%;border-collapse:collapse;">
							<tbody>
								<tr>
									<th scope="col" style="width:100px;">NO</th>
									<th scope="col">型式</th>
									<!--<th align="right" scope="col" style="width:150px;">単価（円）</th>-->
								</tr>
								<tr>
									<td>
										<span id="ContentPlaceHolder1_grdType_lblNo_0" class="ctlLabel">1</span>
									</td>
									<td valign="top">
										<span id="ContentPlaceHolder1_grdType_lblType_0" class="ctlLabel">EC-RR6M-65-0-FFA-FL</span>
									</td>
									<!--<td align="right" valign="top">
										<span id="ContentPlaceHolder1_grdType_lblUnitPrice_0" class="ctlLabel">53,500</span>
									</td>-->
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="divCenter">
					<br>
					<span id="ContentPlaceHolder1_lblSelect" class="ctlLabel">请选择所需的周边机器。</span>

					<table class="Peripheral">
						<tbody>
							<tr>
								<th>
									<span id="ContentPlaceHolder1_lblNameHd" class="ctlLabel">名称</span></th>
								<td style=" width:970px;">
									<span id="ContentPlaceHolder1_lblNameDt1" class="ctlLabel">タッチパネルティーチングボックス/<br>データ設定器</span></td>
								<td style=" width:590px;">
									<span id="ContentPlaceHolder1_lblNameDt2" class="ctlLabel">パソコン対応ソフト</span></td>
								<td style=" width:730px;">
									<span id="ContentPlaceHolder1_lblNameDt3" class="ctlLabel">DC24V電源</span></td>
							</tr>
							<tr>
								<th>
									<span id="ContentPlaceHolder1_lblAppearanceHd" class="ctlLabel">外観</span></th>
								<td class="Align">
									<img id="ContentPlaceHolder1_imgAppearanceDt1" class="imgPeripheral" src="{{ asset('i/client/EcRequire/TB-03-C.png') }}"></td>
								<td class="Align">
									<img id="ContentPlaceHolder1_imgAppearanceDt2" class="imgPeripheral" src="{{ asset('i/client/EcRequire/RCM-101-MW.png') }}"></td>
								<td class="Align">
									<img id="ContentPlaceHolder1_imgAppearanceDt3" class="imgPeripheral" src="{{ asset('i/client/EcRequire/PS-241.png') }}"></td>
							</tr>
							<tr>
								<th>
									<span id="ContentPlaceHolder1_lblTypeHd" class="ctlLabel">型式</span></th>
								<td style="text-align: left;">
									<input id="ContentPlaceHolder1_chkTypeDt1" type="checkbox" name="ctl00$ContentPlaceHolder1$chkTypeDt1"><label for="ContentPlaceHolder1_chkTypeDt1">TB-02-C(有線通信対応のみ)</label>
									<br>
									<input id="ContentPlaceHolder1_chkTypeDt2" type="checkbox" name="ctl00$ContentPlaceHolder1$chkTypeDt2"><label for="ContentPlaceHolder1_chkTypeDt2">TB-03-C(無線通信/有線通信対応版)</label>
								</td>
								<td style="text-align: left;">
									<input id="ContentPlaceHolder1_chkTypeDt3" type="checkbox" name="ctl00$ContentPlaceHolder1$chkTypeDt3"><label for="ContentPlaceHolder1_chkTypeDt3">RCM-101-MW(RS232接続版)</label>
									<br>
									<input id="ContentPlaceHolder1_chkTypeDt4" type="checkbox" name="ctl00$ContentPlaceHolder1$chkTypeDt4"><label for="ContentPlaceHolder1_chkTypeDt4">RCM-101-USB(USB接続版)</label>

								</td>
								<td>
									<input id="ContentPlaceHolder1_chkTypeDt5" type="checkbox" name="ctl00$ContentPlaceHolder1$chkTypeDt5"><label for="ContentPlaceHolder1_chkTypeDt5">PS-241(100V入力)</label>
									<br>
									<input id="ContentPlaceHolder1_chkTypeDt6" type="checkbox" name="ctl00$ContentPlaceHolder1$chkTypeDt6"><label for="ContentPlaceHolder1_chkTypeDt6">PS-242(200V入力)</label>
								</td>
							</tr>
							<tr>
								<th>
									<span id="ContentPlaceHolder1_lblNoteHd" class="ctlLabel">概要</span></th>
								<td style="text-align: left;">
									<span id="ContentPlaceHolder1_lblNoteDt1" class="Align">TB-02-C<br> 始点、終点、AVDの入力、試運転、<br> モニタ等の機能を備えた表示装置です。<br>TB-03-C<br> 無線通信に対応したデータ設定器です。<br> 始点、終点、AVDの入力が無線通信で<br> 可能です。</span></td>
								<td style="text-align: left;">
									<span id="ContentPlaceHolder1_lblNoteDt2" class="Align"> PCから始点、終点、AVDの<br> 入力、試運転、モニタ等を<br> 行う事ができるソフトです。<br> PC側の接続がRS232C版と<br> USB版の両方を準備しています。</span></td>
								<td style="text-align: left;">
									<span id="ContentPlaceHolder1_lblNoteDt3" class="Align"> 瞬間最大17Aに出力可能な<br> DC24V電源です。<br> 入力電圧AC200V仕様と、<br> AC100V仕様があります。</span></td>
							</tr>

						</tbody>
					</table>

				</div>
				<br>
				<div class="imgButtonPosition">
					<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnBack" id="ContentPlaceHolder1_imgbtnBack" class="imgButton" src="{{ asset('i/client/EcRequire/btnBack.png') }}" onclick="javaScript:history.go(-1);">
					<input type="image" name="ctl00$ContentPlaceHolder1$imgbtnNext" id="ContentPlaceHolder1_imgbtnNext" class="imgButton" src="{{ asset('i/client/EcRequire/btnNext.png') }}" />
					<input type="hidden" id="next-link" value="{{url("EC/productestimate")}}" />
				</div>

			</div>

			
		<!--</form>-->
@endsection
@section('script')
	<script src="{{ asset('js/client/WebResource.js') }}"></script>
	<script src="{{ asset('js/client/WebResource2.js') }}"></script>
	<script type="text/javascript">
		window.onload = function() {
			if(typeof contentPageLoad == 'function') contentPageLoad();
		}
		
		$(function(){
			
			//显示全名
			var FullName = sessionStorage.getItem('FullName');
			var ddlCable = sessionStorage.getItem('ddlCable');
			var boxOption = sessionStorage.getItem('boxOption').split(",");
			var productName = FullName + '-' + ddlCable;
			if(boxOption != ''){
				for(i=0; i<boxOption.length; i++){
					productName += '-' + boxOption[i];
				}
			}
			$('#ContentPlaceHolder1_grdType_lblType_0').text(productName);
			
			//点击下一步
			$('#ContentPlaceHolder1_imgbtnNext').click(function(){
				var options =  $('input[type="checkbox"]');
				var ContentPlaceHolder1_chkTypeDt1 = [];
				for(i=0;i < options.length;i++){
			        if(options[i].checked){
			            var id = options[i].id;
		                nice_name = $('label[for="'+ id +'"]').text().split('(')[0];
			            ContentPlaceHolder1_chkTypeDt1.push(nice_name);
			        }
			    }
				
				sessionStorage.setItem('chkTypeDt', ContentPlaceHolder1_chkTypeDt1);
				
				window.location.href = $('#next-link').val();
			});
			
		});
	
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
		
		function ClearCheckBox() {

			var cnt
			cnt = document.getElementById('ContentPlaceHolder1_grdView').cells.length;
			cnt = (cnt - 5) / 5

			for(i = 0; i <= cnt - 1; i++) {
				var obj = document.getElementById("ContentPlaceHolder1_grdView_chkSelect_" + i)
				obj.checked = false;
			}
		}
				
		WebForm_AutoFocus('DummySubmitButton'); 
	</script>
@stop
