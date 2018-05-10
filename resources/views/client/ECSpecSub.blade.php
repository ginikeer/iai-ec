<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	<body>
		<script type="text/javascript">
			// 読み込みが完了してから処理を行う
			window.onload = function() {
				var arg = new Object;
				var pair = location.search.substring(1).split('&');
				for(var i = 0; pair[i]; i++) {
					var kv = pair[i].split('=');
					arg[kv[0]] = kv[1];
				}

				// 親画面のiframe要素
				var elm = window.parent.document.getElementById("ContentPlaceHolder1_ifDraw_" + arg.idx);
				// 子要素のコンテンツサイズに合わせて調整
				elm.style.height = (document.body.scrollHeight + 100) + "px";
			};
		</script>
		<form method="post" action="" id="form1">
			<div class="aspNetHidden">
				<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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">
			</div>
			<div>
				<table id="tblMain" style="width:100%">
					<tbody>
						<tr>
							<td>
								<style type="text/css">
									.alignRight {
										text-align: right;
										border-right: none;
									}
									.alignLeft {
										border-left: none;
									}
									#tblImage {
										width: 100%;
									}
									
									#tblImage td {
										width: 50%;
									}
									
									.spec-tbl-td1 {
										background-color: rgb(184, 204, 228);
										width: 280px;
									}
									
									.spec-tbl-td2 {
										background-color: rgb(184, 204, 228);
										width: 560px;
									}
									
									.spec-tbl-td2-nclr {
										text-align: right;
										width: 560px;
									}
									
									.spec-tbl-td3 {
										background-color: rgb(184, 204, 228);
										width: 80px;
									}
									
									.spec-tbl-td3-nclr {
										width: 80px;
									}
									
									.ImageAppearance {
										width: 300px;
									}
									
									.ImageLoadCapaLedger {
										width: 300px;
									}
									
									.imgMark {
										max-width: 80px;
										max-height: 80px
									}
									
									.spec-tbl-span-tr {
										background-color: rgb(184, 204, 228);
										height: 60px;
									}
									
									.spec-tbl-span-td {
										width: 640px;
										text-align: left;
									}
								</style>

								<table id="ctlSpec_tblSpec" style="width: 100%">
									<tbody>
										<tr>
											<td>
												<img id="ctlSpec_imgSpecMark" class="imgMark" src="{{ asset('i/client/EcRequire/SpecMark.png') }}">
											</td>
										</tr>
										<tr>
											<td style="color: rgb(0,112,192)">
												<span id="ctlSpec_lblSelectProductTitle" class="ctlLabel">選択製品</span>
											</td>
										</tr>
										<tr>
											<td>
												<hr>
											</td>
										</tr>
										<tr>
											<td>
												<table id="ctlSpec_tblSelectProduct" border="1" rules="all">
													<tbody>
														<tr>
															<td class="spec-tbl-td1">
																<span id="ctlSpec_lblBunruiTitle" class="ctlLabel">分類</span>
															</td>
															<td class="spec-tbl-td2">
																<span id="ctlSpec_lblTypeTitle" class="ctlLabel">型式</span>
															</td>
															<td class="spec-tbl-td3">
																<span id="ctlSpec_lblNumTitle" class="ctlLabel">数量</span>
															</td>
														</tr>
														<tr>
															<td style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblBunruiName" class="ctlLabel">エレシリンダー</span>
															</td>
															<td style="border-right:none">
																<span id="ctlSpec_lblType" class="ctlLabel">EC-R6M-50-0</span>
															</td>
															<td style="text-align: right;border-left:none">
																<span id="ctlSpec_lblNum" class="ctlLabel">1</span>
															</td>
														</tr>
													</tbody>
												</table>

											</td>
										</tr>
										<tr>
											<td>　</td>
										</tr>
										<tr>
											<td>
												<table id="tblImage">
													<tbody>
														<tr style="color: rgb(0,112,192)">
															<td>
																<span id="ctlSpec_lblAppearanceTitle" class="ctlLabel">外観</span>
															</td>
															<td>
																<span id="ctlSpec_lblLoadCapaLedgerTitle" class="ctlLabel">速度・加速度別可搬質量表</span>
															</td>
														</tr>
														<tr>
															<td>
																<hr>
															</td>
															<td>
																<hr>
															</td>
														</tr>
														<tr>
															<td>
																<img id="ctlSpec_imgAppearance" class="ImageAppearance" src="{{ asset('i/client/EcRequire/EC-R6M.png') }}">
																<br>
																<span id="ctlSpec_lblCation" class="ctlLabel"></span>
															</td>

															<td>
																<img id="ctlSpec_imgLoadCapaLedger" class="ImageLoadCapaLedger" src="{{ asset('i/client/EcRequire/EC-R6M_SOKUDO-KAHAN.png') }}">
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
										<tr>
											<td>　</td>
										</tr>
										<tr>
											<td style="color: rgb(0,112,192)">
												<span id="ctlSpec_lblCmnSpecTitle" class="ctlLabel">共通仕様</span>
											</td>
										</tr>
										<tr>
											<td>
												<hr>
											</td>
										</tr>
										<tr>
											<td>
												<table id="ctlSpec_tblCmnSpec" border="1" rules="all">
													<tbody>
														<tr>
															<td colspan="2" class="spec-tbl-td1">
																<span id="ctlSpec_lblShapeTitle" class="ctlLabel">形状</span>
															</td>
															<td class="spec-tbl-td2-nclr" style="border-right:none">
																<span id="ctlSpec_lblShape" class="ctlLabel">ロッド</span>
															</td>
															<td class="spec-tbl-td3-nclr" style="border-left:none"></td>
														</tr>
														<tr>
															<td colspan="2" style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblStrokeTitle" class="ctlLabel">ストローク</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblStroke" class="ctlLabel">50</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblStrokeUnit" class="ctlLabel">mm</span>
															</td>
														</tr>
														<tr>
															<td colspan="2" style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblLeadTitle" class="ctlLabel">リード</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblLead" class="ctlLabel">6</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblLeadUnit" class="ctlLabel">mm</span>
															</td>
														</tr>
														<tr>
															<td rowspan="2" style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblMaxTransportWeightTitle" class="ctlLabel">最大搬送重量</span>
															</td>
															<td style="background-color: rgb(184,204,228);width:50px">
																<span id="ctlSpec_lblMaxTransportWeightTitle_Horizon" class="ctlLabel">水平</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblMaxTransportWeight_Horizon" class="ctlLabel">40</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblMaxTransportWeight_HorizonUnit" class="ctlLabel">kg</span>
															</td>
														</tr>
														<tr>
															<td style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblMaxTransportWeightTitle_Vertical" class="ctlLabel">垂直</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblMaxTransportWeight_Vertical" class="ctlLabel">10</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblMaxTransportWeitht_VerticalUnit" class="ctlLabel">kg</span>
															</td>
														</tr>
														<tr>
															<td rowspan="2" style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblMaxSpeedTitle" class="ctlLabel">最大速度</span>
															</td>
															<td style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblMaxSpeedTitle_Horizon" class="ctlLabel">水平</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblMaxSpeed_Horizon" class="ctlLabel">450</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblMaxSpeet_HorizonUnit" class="ctlLabel">mm/s</span>
															</td>
														</tr>
														<tr>
															<td style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblMaxSpeedTitle_Vertical" class="ctlLabel">垂直</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblMaxSpeed_Vertical" class="ctlLabel">450</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblMaxSpeed_VerticalUnit" class="ctlLabel">mm/s</span>
															</td>
														</tr>
														<tr>
															<td rowspan="2" style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblMaxAccelerationTitle" class="ctlLabel">最大加減速度</span>
															</td>
															<td style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblMaxAccelerationTitle_Horizon" class="ctlLabel">水平</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblMaxAcceleration_Horizon" class="ctlLabel">1</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblMaxAcceleration_HorizonUnit" class="ctlLabel">Ｇ</span>
															</td>
														</tr>
														<tr>
															<td style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblMaxAccelerationTitle_Vertical" class="ctlLabel">垂直</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblMaxAcceleration_Vertical" class="ctlLabel">0.5</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblMaxAcceleration_VerticalUnit" class="ctlLabel">Ｇ</span>
															</td>
														</tr>
														<tr>
															<td colspan="2" style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblRepetPositionAccuracyTitle" class="ctlLabel">繰り返し位置決め精度</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblRepetPositionAccuracy" class="ctlLabel">±0.05</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblRepetPositionAccuracyUnit" class="ctlLabel">mm</span>
															</td>
														</tr>
														<tr>
															<td colspan="2" style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblStaticEquivalentLoadTitle" class="ctlLabel">静的許容等価荷重</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblStaticEquivalentLoad" class="ctlLabel">0</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblStaticEquivalentLoad_Unit" class="ctlLabel">Ｎ</span>
															</td>
														</tr>
														<tr>
															<td rowspan="3" style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblStatToleranceMomentTitle" class="ctlLabel">静的許容モーメント</span>
															</td>
															<td style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblStatToleranceMomentTitle_A" class="ctlLabel">Ma</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblStatToleranceMoment_A" class="ctlLabel">0</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblStatToleranceMoment_AUnit" class="ctlLabel">Ｎ・ｍ</span>
															</td>
														</tr>
														<tr>
															<td style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblStatToleranceMomentTitle_B" class="ctlLabel">Mb</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblStatToleranceMoment_B" class="ctlLabel">0</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblStatToleranceMoment_BUnit" class="ctlLabel">Ｎ・ｍ</span>
															</td>
														</tr>
														<tr>
															<td style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblStatToleranceMomentTitle_C" class="ctlLabel">Mc</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblStatToleranceMoment_C" class="ctlLabel">0</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblStatToleranceMoment_CUnit" class="ctlLabel">Ｎ・ｍ</span>
															</td>
														</tr>
														<tr>
															<td colspan="2" style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblDynamicEquivalentLoadTitle" class="ctlLabel">動的許容等価荷重</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblDynamicEquivalentLoad" class="ctlLabel">0</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblDynamicEquivalentLoad_Unit" class="ctlLabel">Ｎ</span>
															</td>
														</tr>
														<tr>
															<td rowspan="3" style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblDynaToleranceMomentTitle" class="ctlLabel">動的許容モーメント</span>
															</td>
															<td style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblDynaToleranceMomentTitle_A" class="ctlLabel">Ma</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblDynaToleranceMoment_A" class="ctlLabel">0</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblDynaToleranceMoment_AUnit" class="ctlLabel">Ｎ・ｍ</span>
															</td>
														</tr>
														<tr>
															<td style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblDynaToleranceMomentTitle_B" class="ctlLabel">Mb</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblDynaToleranceMoment_B" class="ctlLabel">0</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblDynaToleranceMoment_BUnit" class="ctlLabel">Ｎ・ｍ</span>
															</td>
														</tr>
														<tr>
															<td style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblDynaToleranceMomentTitle_C" class="ctlLabel">Mc</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblDynaToleranceMoment_C" class="ctlLabel">0</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblDynaToleranceMoment_CUnit" class="ctlLabel">Ｎ・ｍ</span>
															</td>
														</tr>
														<tr>
															<td colspan="2" style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblMaOverhangAboveTitle" class="ctlLabel">Ma上面方向張出し負荷長</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblMaOverhangAbove" class="ctlLabel">0</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblMaOverhangAbove_Unit" class="ctlLabel">mm</span>
															</td>
														</tr>
														<tr>
															<td colspan="2" style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblMaOverhangTopTitle" class="ctlLabel">Ma先端方向張出し負荷長</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblMaOverhangTop" class="ctlLabel">0</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblMaOverhangTop_Unit" class="ctlLabel">mm</span>
															</td>
														</tr>
														<tr>
															<td colspan="2" style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblMbMcOverhangTitle" class="ctlLabel">Mb,Mc張出し負荷長</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblMbMcOverhang" class="ctlLabel">0</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblMbMcOverhang_Unit" class="ctlLabel">mm</span>
															</td>
														</tr>
														<tr>
															<td colspan="2" style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblUseSurroundTempHumidTitle" class="ctlLabel">使用周囲温度・湿度</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblUseSurroundTempHumid" class="ctlLabel">0～40℃、85%RH以下（結露なきこと）</span>
															</td>
															<td class="alignLeft"></td>
														</tr>
														<tr>
															<td colspan="2" style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblEncodeKindTitle" class="ctlLabel">エンコーダ種別</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblEncodeKind" class="ctlLabel">インクリメンタルエンコーダ</span>
															</td>
															<td class="alignLeft"></td>
														</tr>
														<tr>
															<td colspan="2" style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblCableLenTitle" class="ctlLabel">電源・ＩＯケーブル長さ</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblCableLen" class="ctlLabel">0</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblCableLenUnit" class="ctlLabel">ｍ</span>
															</td>
														</tr>
														<tr>
															<td colspan="2" style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblSelectOptionTitle" class="ctlLabel">選択オプション</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblSelectOption" class="ctlLabel"></span>
															</td>
															<td class="alignLeft"></td>
														</tr>
														<tr>
															<td colspan="2" style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblPowerVoltTitle" class="ctlLabel">電源電圧</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblPowerVolt" class="ctlLabel">DC24V±10％</span>
															</td>
															<td class="alignLeft"></td>
														</tr>
														<tr>
															<td colspan="2" style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblPowerCapaTitle" class="ctlLabel">電源容量</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblPowerCapa" class="ctlLabel">最大4.2A</span>
															</td>
															<td class="alignLeft"></td>
														</tr>
														<tr>
															<td colspan="2" style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblInOutSignalFormTitle" class="ctlLabel">入出力信号形態</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblInOutSignalForm" class="ctlLabel">NPN仕様</span>
															</td>
															<td class="alignLeft"></td>
														</tr>
													</tbody>
												</table>

											</td>
										</tr>
										<tr>
											<td>　</td>
										</tr>
										<tr>
											<td>　</td>
										</tr>
										<tr>
											<td style="color: rgb(0,112,192)">
												<span id="ctlSpec_lblSelectionConditionTitle" class="ctlLabel">選定条件</span>
											</td>
										</tr>
										<tr>
											<td>
												<hr>
											</td>
										</tr>
										<tr>
											<td>
												<table id="ctlSpec_tblSelectCondition" border="1" rules="all">
													<tbody>
														<tr>
															<td class="spec-tbl-td1">
																<span id="ctlSpec_lblConditionUseTitle" class="ctlLabel">用途</span>
															</td>
															<td class="spec-tbl-td2-nclr" style="border-right:none">
																<span id="ctlSpec_lblConditionUse" class="ctlLabel">搬送位置決め</span>
															</td>
															<td class="spec-tbl-td3-nclr" style="border-left:none"></td>
														</tr>
														<tr>
															<td style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblConditionShapeTitle" class="ctlLabel">形状</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblConditionShape" class="ctlLabel">希望条件 ： ロッド　ラジアルシリンダー<br>検索結果 ： ロッド　標準タイプ</span>
															</td>
															<td class="alignLeft"></td>
														</tr>
														<tr>
															<td style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblConditionInstallDirectionTitle" class="ctlLabel">設置方向</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblConditionInstallDirection" class="ctlLabel">水平設置</span>
															</td>
															<td class="alignLeft"></td>
														</tr>
														<tr>
															<td style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblConditionBehaviorRangeTitle" class="ctlLabel">動作範囲</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblConditionBehaviorRange" class="ctlLabel">23</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblConditionBehaviorRangeUnit" class="ctlLabel">mm</span>
															</td>
														</tr>
														<tr>
															<td style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblConditionLoadTitle" class="ctlLabel">荷重</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblConditionLoad" class="ctlLabel">23</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblConditionLoadUnit" class="ctlLabel">kg</span>
															</td>
														</tr>
														<tr>
															<td style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblConditionWorkLoadingStateTitle" class="ctlLabel">　ワーク積載状態</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblConditionWorkLoadingState" class="ctlLabel">0</span>
															</td>
															<td class="alignLeft"></td>
														</tr>
														<tr>
															<td style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblConditionGravityCenterPositionTitle" class="ctlLabel">　重心位置 L1</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblConditionGravityCenterPosition" class="ctlLabel">0</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblConditionGravityCenterPositionUnit" class="ctlLabel">mm</span>
															</td>
														</tr>
														<tr>
															<td style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblConditionDemandCycleTimeTitle" class="ctlLabel">要求サイクルタイム</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblConditionDemandCycleTime" class="ctlLabel">2</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblConditionDemandCycleTimeUnit" class="ctlLabel">s</span>
															</td>
														</tr>
														<tr>
															<td style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblConditionRoundTimesTitle" class="ctlLabel">往復回数</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblConditionRoundTimes" class="ctlLabel">2</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblConditionRoundTimesUnit" class="ctlLabel">回/分</span>
															</td>
														</tr>
														<tr>
															<td style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblConditionOperatingTimeTitle" class="ctlLabel">稼働時間</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblConditionOperatingTime" class="ctlLabel">2</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblConditionOperatingTimeUnit" class="ctlLabel">時間/日</span>
															</td>
														</tr>
														<tr>
															<td style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblConditionOperatingDaysTitle" class="ctlLabel">稼働日数</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblConditionOperatingDays" class="ctlLabel">342</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblConditionOperatingDaysUnit" class="ctlLabel">日/年</span>
															</td>
														</tr>
													</tbody>
												</table>

											</td>
										</tr>
										<tr>
											<td>　</td>
										</tr>
										<tr>
											<td style="color: rgb(0,112,192)">
												<span id="ctlSpec_lblTitleCalcCycleTime" class="ctlLabel">計算サイクルタイム</span>
											</td>
										</tr>
										<tr>
											<td>
												<hr>
											</td>
										</tr>
										<tr>
											<td>
												<table id="ctlSpec_tblCalcCycleTime" border="1" rules="all">
													<tbody>
														<tr>
															<td class="spec-tbl-td1">
																<span id="ctlSpec_lblCalcCycleTimeTitle" class="ctlLabel">計算サイクルタイム</span>
															</td>
															<td class="spec-tbl-td2-nclr" style="border-right:none">
																<span id="ctlSpec_lblCalcCycleTime" class="ctlLabel">0.217</span>
															</td>
															<td class="spec-tbl-td3-nclr" style="border-left:none">
																<span id="ctlSpec_lblCalcCycleTimeUnit" class="ctlLabel">s</span>
															</td>
														</tr>
														<tr>
															<td class="spec-tbl-td1" rowspan="3">
																<span id="ctlSpec_lblCalcDecisionTitle" class="ctlLabel">計算条件（AVD）</span>
															</td>
															<td class="spec-tbl-td2-nclr" style="border-right:none">
																<span id="ctlSpec_lblAcceleration" class="ctlLabel">加速度（A）0.7</span>
															</td>
															<td class="spec-tbl-td3-nclr" style="border-left:none">
																<span id="ctlSpec_lblAccelerationUnit" class="ctlLabel">G</span>
															</td>
														</tr>
														<tr>

															<td class="spec-tbl-td2-nclr" style="border-right:none">
																<span id="ctlSpec_lblSpeed" class="ctlLabel">速度（V）240</span>
															</td>
															<td class="spec-tbl-td3-nclr" style="border-left:none">
																<span id="ctlSpec_lblSpeedUnit" class="ctlLabel">mm/s</span>
															</td>
														</tr>
														<tr>

															<td class="spec-tbl-td2-nclr" style="border-right:none">
																<span id="ctlSpec_lblDeceleration" class="ctlLabel">減速度（D）0.7</span>
															</td>
															<td class="spec-tbl-td3-nclr" style="border-left:none">
																<span id="ctlSpec_lblDecelerationUnit" class="ctlLabel">G</span>
															</td>
														</tr>
													</tbody>
												</table>

											</td>
										</tr>
										<tr>
											<td>　</td>
										</tr>
										<tr>
											<td style="color: rgb(0,112,192)">
												<span id="ctlSpec_lblTitleCalcTravelingLifeSpan" class="ctlLabel">計算走行寿命</span>
											</td>
										</tr>
										<tr>
											<td>
												<hr>
											</td>
										</tr>
										<tr>
											<td>
												<table id="ctlSpec_tblTravelingLifeSpan" border="1" rules="all">
													<tbody>
														<tr>
															<td class="spec-tbl-td1">
																<span id="ctlSpec_lblTravelingLifeDistanceTitle" class="ctlLabel">走行寿命計算</span>
															</td>
															<td class="spec-tbl-td2-nclr" style="border-right:none">
																<span id="ctlSpec_lblTravelingLifeDistance" class="ctlLabel">0</span>
															</td>
															<td class="spec-tbl-td3-nclr" style="border-left:none">
																<span id="ctlSpec_lblTravelingLifeDistanceUnit" class="ctlLabel">km</span>
															</td>
														</tr>
														<tr>
															<td style="background-color: rgb(184,204,228)">
																<span id="ctlSpec_lblTravelingLifeSpanTitle" class="ctlLabel">寿命予測</span>
															</td>
															<td class="alignRight">
																<span id="ctlSpec_lblTravelingLifeSpan" class="ctlLabel">0年0ヵ月</span>
															</td>
															<td class="alignLeft">
																<span id="ctlSpec_lblTravelingLifeSpanUnit" class="ctlLabel"></span>
															</td>
														</tr>
													</tbody>
												</table>

											</td>
										</tr>
									</tbody>
								</table>

							</td>
						</tr>
						<tr>
							<td style="font-size:30px">
								<img id="imgDrawingTitle" class="imgMark" src="{{ asset('i/client/EcRequire/DrawingMark.png') }}">
							</td>
						</tr>
						<tr>
							<td>

								<img id="imDrawing" src="{{ asset('i/client/EcRequire/EC-R6M_ZU.png') }}" style="width:960px;">
								<img id="imDrawingStroke" onerror="this.style.display='none'" src="{{ asset('i/client/EcRequire/EC-R6M_STROKE-0050.png') }}" style="width:960px;">
							</td>
						</tr>
					</tbody>
				</table>

			</div>
			<script src="{{ asset('js/client/usrSpec.js') }}"></script>
			<script type="text/javascript">
				DefaultDesign();
			</script>
		</form>

	</body>

</html>