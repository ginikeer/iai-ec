var strForm;

$(function () {
    //クリック時処理
    $('.modal-open').click(function () {
        $('body').append('<div class="modal-overlay"></div>');
        $('.modal-overlay').fadeIn('slow');

        $('#ifr')[0].src = strForm;

        if (strForm == "")
        {
            ssTempClear();
            document.getElementById("ContentPlaceHolder1_imgbtnDecision").disabled = false;

            $(modal).fadeOut('slow');
            $('.modal-overlay').fadeOut('slow', function () {
                $('.modal-overlay').remove();
            });
            document.getElementById("ContentPlaceHolder1_lblRod").innerHTML = "";
            return false;
        }

        // モーダルコンテンツのIDを取得
        var modal = '#dvContent';
        // モーダルコンテンツの表示位置を設定
        modalResize();
        // モーダルコンテンツフェードイン
        $(modal).fadeIn('slow');

        // 戻る処理（画面を閉じる）
        $('.modal-close').off().click(function () {

            // 子画面のセッションをクリア
            ssTempClear();

            document.getElementById("ContentPlaceHolder1_imgbtnDecision").disabled = false;

            $(modal).fadeOut('slow');
            $('.modal-overlay').fadeOut('slow', function () {
                $('.modal-overlay').remove();
            });

            return false
        });

        // 確定処理（画面を閉じる）
        $('.modal-decision').off().click(function () {

            //子画面のチェック処理
            if (strForm == gcECRequirementLoadSlider) {

                if (document.getElementById('ifr').contentWindow.procCheckLoadSlider(document.getElementById('ifr').contentWindow.WorkLoadingState) == false) {
                    return false;
                };                                               
            };


            //子画面のチェック処理
            if (strForm == gcECRequirementLoadRod) {

                if (document.getElementById('ifr').contentWindow.procCheckLoadRod() == false) {
                    return false;
                };
            };

            //子画面のチェック処理
            if (strForm == gcECRequirementLoadSmall) {

                if (document.getElementById('ifr').contentWindow.procCheckLoadSmall(document.getElementById('ifr').contentWindow.LinearGuideSmall) == false) {
                    return false;
                };
            };

            //子画面のチェック処理
            if (strForm == gcECRequirementLoadRodLinerGuide) {

                if (document.getElementById('ifr').contentWindow.procCheckLoadRadial() == false) {
                    return false;
                };
            };


            // 子画面の値を取得
            ssSetItems();
            
            $(modal).fadeOut('slow');
            $('.modal-overlay').fadeOut('slow', function () {
                $('.modal-overlay').remove();
            });

            //SelectModel("ContentPlaceHolder1_lblLoad")
            SelectModel(this)
            return false
        });

        // リサイズしたら表示位置を再取得
        $(window).on('resize', function () {
            modalResize();
        });

        // モーダルコンテンツの表示位置を設定する関数
        function modalResize() {
            // ウィンドウの横幅、高さを取得
            var w = $(window).width();
            var h = $(window).height();

            // モーダルコンテンツの表示位置を取得
            var x = (w - $(modal).outerWidth(true)) / 2;
            var y = (h - $(modal).outerHeight(true)) / 2;

            // モーダルコンテンツの表示位置を設定
            $(modal).css({ 'left': x + 'px', 'top': 0 + 'px' });
        }

    });
    return false;
});


function setFormName(str) {
    // 変数に保存
    strForm = str;

    return false;
}

// セッションクリア処理（子画面一時情報削除）
function ssTempClear() {
    if (strForm == gcECRequirementLoadSlider) {
        // 荷重（スライダ）
        sessionStorage.removeItem(ssTemp + ssWorkLoadingState);
        sessionStorage.removeItem(ssTemp + ssLoad);
        sessionStorage.removeItem(ssTemp + ssGrvCntrPosition);
    } else if (strForm == gcECRequirementLoadRod) {
        // 荷重（ロッド）
        sessionStorage.removeItem(ssTemp + ssLoad);

    } else if (strForm == gcECRequirementPressRod) {
        // 押付
        sessionStorage.removeItem(ssTemp + ssPress);
        sessionStorage.removeItem(ssTemp + ssPointOfAction);

    } else if (strForm == gcECRequirementPressingSmall) {
        // 押付（細小型）
        sessionStorage.removeItem(ssTemp + ssPressingForce);
        sessionStorage.removeItem(ssTemp + ssLinearGuideSmall);

    } else if (strForm == gcECRequirementCycleTimeSlider) {
        // サイクルタイム(スライダ)
        sessionStorage.removeItem(ssTemp + ssHopeCycleTime);

    } else if (strForm == gcECRequirementCycleTimeRod) {
        // サイクルタイム（ロッド）
        sessionStorage.removeItem(ssTemp + ssHopeCycleTime);

    } else if (strForm == gcECRequirementCycleTimeSmall) {
        // サイクルタイム（ロッド）
        sessionStorage.removeItem(ssTemp + ssHopeCycleTime);

    } else if (strForm == gcECRequirementRunningTime) {
        // 運転時間
        sessionStorage.removeItem(ssTemp + ssRoundTrip);
        sessionStorage.removeItem(ssTemp + ssOperatingTime);
        sessionStorage.removeItem(ssTemp +ssOperatingDay);
    } else if (strForm == gcECRequirementLinearGuideRod) {
        sessionStorage.removeItem(ssTemp + ssLinearGuideRod);
        SelectloadEntryType();
        if (sessionStorage.getItem(ssLinearGuideRod) != null) {
            if (sessionStorage.getItem(ssLinearGuideRod) == stateLG2) {
                var nowSrc = document.getElementById("ContentPlaceHolder1_imgStroke").src;
                var afterSrc;
                afterSrc = nowSrc.replace(/Rod/g, "Radial");
                document.getElementById("ContentPlaceHolder1_imgStroke").src = afterSrc;
            }
        } else {
            //var nowSrc = document.getElementById("ContentPlaceHolder1_imgStroke").src;
            //var afterSrc;
            //afterSrc = nowSrc.replace(/Rod/g, "Slider");
            //document.getElementById("ContentPlaceHolder1_imgStroke").src = afterSrc;
        }
    } else if (strForm == gcECRequirementLoadRodLinerGuide) {
        sessionStorage.removeItem(ssTemp + ssOffSetDistance);
        sessionStorage.removeItem(ssTemp + ssOverhangDistance);
    } else if (strForm == gcECRequirementLoadSmall) {
        sessionStorage.removeItem(ssTemp + ssLinearGuideSmall);
        sessionStorage.removeItem(ssTemp + ssWorkLoadingState);
        sessionStorage.removeItem(ssTemp + ssLoad);
        if (sessionStorage.getItem(ssTemp + ssGrvCntrXPosition) != null) { sessionStorage.removeItem(ssTemp + ssGrvCntrXPosition); }
        if (sessionStorage.getItem(ssTemp + ssGrvCntrYPosition) != null) { sessionStorage.removeItem(ssTemp + ssGrvCntrYPosition); }
        if (sessionStorage.getItem(ssTemp + ssGrvCntrZPosition) != null) { sessionStorage.removeItem(ssTemp + ssGrvCntrZPosition); }
    }
}

// セッションクリア処理（子画面情報削除）
function ssChildClear(childform) {
    if (childform == gcECRequirementLoadSlider) {
        // 荷重（スライダ）
        sessionStorage.removeItem(ssWorkLoadingState);
        sessionStorage.removeItem(ssLoad);
        sessionStorage.removeItem(ssGrvCntrPosition);
    } else if (childform == gcECRequirementLoadRod) {
        // 荷重（ロッド）
        sessionStorage.removeItem(ssLoad);
    }else if (childform == gcECRequirementRunningTime) {
        // 荷重（細小型）
        sessionStorage.removeItem(ssLinearGuideSmall);
        sessionStorage.removeItem(ssWorkLoadingState);
        sessionStorage.removeItem(ssLoad);
        if (sessionStorage.getItem(ssGrvCntrXPosition) != null) {
            sessionStorage.removeItem(ssGrvCntrXPosition);
        }
        if (sessionStorage.getItem(ssGrvCntrYPosition) != null) {
            sessionStorage.removeItem(ssGrvCntrYPosition);
        }
        if (sessionStorage.getItem(ssGrvCntrZPosition) != null) {
            sessionStorage.removeItem(ssGrvCntrZPosition);
        }

    } else if (childform == gcECRequirementPressRod) {
        // 押付
        sessionStorage.removeItem(ssPress);
        sessionStorage.removeItem(ssPointOfAction);

    } else if (strForm == gcECRequirementPressingSmall) {
        // 押付（細小型）
        sessionStorage.removeItem(ssTemp + ssPressingForce);
        sessionStorage.removeItem(ssTemp + ssLinearGuideSmall);

    } else if (childform == gcECRequirementCycleTimeSlider) {
        // サイクルタイム(スライダ)
        sessionStorage.removeItem(ssHopeCycleTime);

    } else if (childform == gcECRequirementCycleTimeRod) {
        // サイクルタイム（ロッド）
        sessionStorage.removeItem(ssHopeCycleTime);

    } else if (childform == gcECRequirementCycleTimeSmall) {
        // サイクルタイム（ロッド）
        sessionStorage.removeItem(ssHopeCycleTime);

    } else if (childform == gcECRequirementRunningTime) {
        // 運転時間
        sessionStorage.removeItem(ssRoundTrip);
        sessionStorage.removeItem(ssOperatingTime);
        sessionStorage.removeItem(ssOperatingDay);
    }
}


// 子画面用の一時セッションの値をセッションに設定
function SetSession(ss) {
    var tmpData;
    var ssTmpkey = ssTemp + ss;
    tmpData = sessionStorage.getItem(ssTmpkey);

    if(tmpData != null){
        // セッションへ設定
        sessionStorage.setItem(ss, tmpData);
        // セッションから削除
        sessionStorage.removeItem(ssTmpkey);
    }

}


// セッション値の反映処理
function ssSetItems() {
    if (strForm == gcECRequirementLoadSlider) {
        // 荷重（スライダ）
        SetSession(ssWorkLoadingState);
        SetSession(ssLoad);
        SetSession(ssGrvCntrPosition);

        document.getElementById("ContentPlaceHolder1_lblLoad").value = sessionStorage.getItem(ssLoad);
        document.getElementById("ContentPlaceHolder1_txtHdnWorkLoadState").value = sessionStorage.getItem(ssWorkLoadingState);
        document.getElementById("ContentPlaceHolder1_txtHdnGrvCntrPosition").value = sessionStorage.getItem(ssGrvCntrPosition);
    } else if (strForm == gcECRequirementLoadRod) {
        // 荷重（ロッド）
        SetSession(ssLoad);
        SetSession(ssLinearGuideRod);

        document.getElementById("ContentPlaceHolder1_txtLoad_LR").value = sessionStorage.getItem(ssLoad);

    } else if (strForm == gcECRequirementLoadSmall) {
        // 荷重（細小型）
        SetSession(ssLinearGuideSmall);
        SetSession(ssLoad);
        switch (Number(sessionStorage.getItem(ssLinearGuideSmall))) {
            case stateST_RP:
            case stateST_GS:
            case stateST_GD:
                if (sessionStorage.getItem(ssWorkLoadingState) != null) { sessionStorage.removeItem(ssWorkLoadingState); }
                if (sessionStorage.getItem(ssGrvCntrXPosition) != null) { sessionStorage.removeItem(ssGrvCntrXPosition); }
                if (sessionStorage.getItem(ssGrvCntrYPosition) != null) { sessionStorage.removeItem(ssGrvCntrYPosition); }
                if (sessionStorage.getItem(ssGrvCntrZPosition) != null) { sessionStorage.removeItem(ssGrvCntrZPosition); }
                break;
            default:
                SetSession(ssWorkLoadingState);
                SetSession(ssGrvCntrXPosition);
                SetSession(ssGrvCntrYPosition);
                SetSession(ssGrvCntrZPosition);
        }

        document.getElementById("ContentPlaceHolder1_txtLoad_LST").value = sessionStorage.getItem(ssLoad);

    } else if (strForm == gcECRequirementPressRod) {
        // 押付
        // セッションに値の設定
        SetSession(ssPress);
        SetSession(ssPointOfAction);
        SetSession(ssLinearGuideRod);

        document.getElementById("ContentPlaceHolder1_lblLoad").value = sessionStorage.getItem(ssPress);

    } else if (strForm == gcECRequirementPressingSmall) {
        // 押付（細小型）
        // セッションに値の設定
        SetSession(ssPressingForce);
        SetSession(ssLinearGuideSmall);

        document.getElementById("ContentPlaceHolder1_txtPressST").value = sessionStorage.getItem(ssPressingForce);

    } else if (strForm == gcECRequirementCycleTimeSlider) {
        // サイクルタイム(スライダ)
        SetSession(ssHopeCycleTime);

        if (sessionStorage.getItem(ssHopeCycleTime) != null){
            document.getElementById("ContentPlaceHolder1_txtCycleTime").value = sessionStorage.getItem(ssHopeCycleTime);
        } else {
            document.getElementById("ContentPlaceHolder1_txtCycleTime").value = sessionStorage.getItem(ssHopeCycleTime);            
        }
        document.getElementById("ContentPlaceHolder1_txtHdnCycleTimeHopeOrFastKbn").value = sessionStorage.getItem(ssCycleTimeHopeOrFastKbn);

    } else if (strForm == gcECRequirementCycleTimeRod) {
        // サイクルタイム（ロッド）
        SetSession(ssHopeCycleTime);
        SetSession(ssLinearGuideRod);

        if (sessionStorage.getItem(ssHopeCycleTime) != null) {
            document.getElementById("ContentPlaceHolder1_txtCycleTime").value = sessionStorage.getItem(ssHopeCycleTime);            
        }else{
            document.getElementById("ContentPlaceHolder1_txtCycleTime").value = sessionStorage.getItem(ssHopeCycleTime);            
        }
        document.getElementById("ContentPlaceHolder1_txtHdnCycleTimeHopeOrFastKbn").value = sessionStorage.getItem(ssCycleTimeHopeOrFastKbn);

    } else if (strForm == gcECRequirementCycleTimeSmall) {
        // サイクルタイム（ロッド）
        SetSession(ssHopeCycleTime);
        SetSession(ssLinearGuideRod);

        if (sessionStorage.getItem(ssHopeCycleTime) != null) {
            document.getElementById("ContentPlaceHolder1_txtCycleTime").value = sessionStorage.getItem(ssHopeCycleTime);
        } else {
            document.getElementById("ContentPlaceHolder1_txtCycleTime").value = sessionStorage.getItem(ssHopeCycleTime);
        }
        document.getElementById("ContentPlaceHolder1_txtHdnCycleTimeHopeOrFastKbn").value = sessionStorage.getItem(ssCycleTimeHopeOrFastKbn);

    } else if (strForm == gcECRequirementRunningTime) {
        // 運転時間
        SetSession(ssRoundTrip);
        SetSession(ssOperatingTime);
        SetSession(ssOperatingDay);
    } else if (strForm == gcECRequirementLinearGuideRod) {
        SetSession(ssLinearGuideRod);
        SelectloadEntryType();
        with (document) {
            var nowSrc = getElementById("ContentPlaceHolder1_imgStroke").src;
            var afterSrc;
            if (sessionStorage.getItem(ssLinearGuideRod) == null) {
                document.getElementById("ContentPlaceHolder1_lblRod").innerHTML = "";
            } else {
                switch (Number(sessionStorage.getItem(ssLinearGuideRod))) {
                    case Number(stateLG1):
                        document.getElementById("ContentPlaceHolder1_lblRod").innerHTML = stringLG1;
                        document.getElementById("ContentPlaceHolder1_txtHdnRod").value = 1;
                        sessionStorage.setItem(ssRod, 1);
                        ImageChange(getElementById("ContentPlaceHolder1_imgbtnRod"), "1");
                        SelectloadEntryType();
                        break;
                    case Number(stateLG2):
                        document.getElementById("ContentPlaceHolder1_lblRod").innerHTML = stringLG2;                        
                        afterSrc = nowSrc.replace(/Rod/g, "Radial");
                        document.getElementById("ContentPlaceHolder1_imgStroke").src = afterSrc;
                        document.getElementById("ContentPlaceHolder1_txtHdnRod").value = 1;
                        sessionStorage.setItem(ssRod, 1);
                        ImageChange(getElementById("ContentPlaceHolder1_imgbtnRod"), "1");
                        SelectloadEntryType();
                        break;
                    case Number(stateLG3):
                        document.getElementById("ContentPlaceHolder1_lblRod").innerHTML = stringLG3;
                        document.getElementById("ContentPlaceHolder1_txtHdnRod").value = 1;
                        sessionStorage.setItem(ssRod, 1);
                        ImageChange(getElementById("ContentPlaceHolder1_imgbtnRod"), "1");
                        SelectloadEntryType();
                        break;
                    default:
                        document.getElementById("ContentPlaceHolder1_lblRod").innerHTML = "";
                        break;
                }
            }
        }
        //RodImageChange("");

    } else if (strForm == gcECRequirementLoadRodLinerGuide) {
        SetSession(ssLoad);
        SetSession(ssOffSetDistance);
        SetSession(ssOverhangDistance);

        document.getElementById("ContentPlaceHolder1_txtPressR").value = sessionStorage.getItem(ssLoad);
    }
}

function setItems(own) {

    if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnTransport").id) {
        var ctrTransport = document.getElementById("ContentPlaceHolder1_txtHdnTransport");
        if (ctrTransport.value == '' || ctrTransport.value == '0') {
            ctrTransport.value = 1;
            //対する項目のセッション値をクリア
            sessionStorage.setItem(ssPressing, "");
        } else if (ctrTransport.value == 1) {
            ctrTransport.value = 0;
        }
        sessionStorage.setItem(ssTransport, ctrTransport.value);
    }else if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnPressing").id){
        var ctrPressing = document.getElementById("ContentPlaceHolder1_txtHdnPressing");
        if (ctrPressing.value == '' || ctrPressing.value == '0') {
            ctrPressing.value = 1;
            //対する項目のセッション値をクリア
            sessionStorage.setItem(ssTransport, "");
        } else if (ctrPressing.value == 1) {
            ctrPressing.value = 0;
        }
        sessionStorage.setItem(ssPressing, ctrPressing.value);
    } else if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnSlider").id) {
        var ctrSlider = document.getElementById("ContentPlaceHolder1_txtHdnSlider");
        if (ctrSlider.value == '' || ctrSlider.value == '0') {
            ctrSlider.value = 1;
            //対する項目のセッション値をクリア
            sessionStorage.setItem(ssRod, "");
            sessionStorage.setItem(ssSmallType, "");
            sessionStorage.removeItem(ssWorkLoadingState);
        } else if (ctrSlider.value == 1) {
            ctrSlider.value = 0;
            sessionStorage.removeItem(ssWorkLoadingState);
        }
        sessionStorage.setItem(ssSlider, ctrSlider.value);
    } else if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnRod").id) {
        var ctrRod = document.getElementById("ContentPlaceHolder1_txtHdnRod");
        if (ctrRod.value == '' || ctrRod.value == '0') {
            if (sessionStorage.getItem(ssLinearGuideRod) != null) {
                if (sessionStorage.getItem(ssLinearGuideRod) >= stateLG1 && sessionStorage.getItem(ssLinearGuideRod) <= stateLG3) {
                    ctrRod.value = 1;
                }
            }

            //対する項目のセッション値をクリア
            sessionStorage.setItem(ssSlider, "");
            sessionStorage.setItem(ssSmallType, "");
        } else if (ctrRod.value == 1) {
            //ctrRod.value = 0;
        }
        sessionStorage.setItem(ssRod, ctrRod.value);  
    } else if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnSmallType").id) {
        var ctrSmallType = document.getElementById("ContentPlaceHolder1_txtHdnSmallType");
        if (ctrSmallType.value == '' || ctrSmallType.value == '0') {
            ctrSmallType.value = 1;
            //対する項目のセッション値をクリア
            sessionStorage.setItem(ssSlider, "");
            sessionStorage.setItem(ssRod, "");
            sessionStorage.removeItem(ssWorkLoadingState);
        } else if (ctrSmallType.value == 1) {
            ctrSmallType.value = 0
            sessionStorage.removeItem(ssWorkLoadingState);
            sessionStorage.removeItem(ssGrvCntrXPosition);
            sessionStorage.removeItem(ssGrvCntrYPosition);
            sessionStorage.removeItem(ssGrvCntrZPosition);
        }
        sessionStorage.setItem(ssSmallType, ctrSmallType.value);
    } else if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnHorizontal").id) {
        var ctrHorizontal = document.getElementById("ContentPlaceHolder1_txtHdnHorizontal");
        if (ctrHorizontal.value == '' || ctrHorizontal.value == '0') {
            ctrHorizontal.value = 1;
            //対する項目のセッション値をクリア
            sessionStorage.setItem(ssVertical, "");
        } else if (ctrHorizontal.value == 1) {
            ctrHorizontal.value = 0;
        }
        sessionStorage.setItem(ssHorizontal, ctrHorizontal.value);
    } else if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnVertical").id) {
        var ctrVertical = document.getElementById("ContentPlaceHolder1_txtHdnVertical");
        if (ctrVertical.value == '' || ctrVertical.value == '0') {
            ctrVertical.value = 1;
            //対する項目のセッション値をクリア
            sessionStorage.setItem(ssHorizontal, "");
        } else if (ctrVertical.value == 1) {
            ctrVertical.value = 0;
        }
        sessionStorage.setItem(ssVertical, ctrVertical.value);
    }else if(own.id == document.getElementById("ContentPlaceHolder1_txtStroke").id){
        var ctrStroke = document.getElementById("ContentPlaceHolder1_txtStroke");
        if (ctrStroke.value == '' || ctrStroke.value == '0') {
            ctrStroke.value = 0;
        }
        sessionStorage.setItem(ssStroke, ctrStroke.value);
    } else if (own.id == document.getElementById("ContentPlaceHolder1_txtPress").id) {
        var ctrPress = document.getElementById("ContentPlaceHolder1_txtPress");
        if (ctrPress.value == '' || ctrPress.value == '0') {
            ctrPress.value = 0;
        }
        sessionStorage.setItem(ssPressingForce, ctrPress.value);
    } else if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnCycleTime").id) {
        var ctrCycleTime = document.getElementById("ContentPlaceHolder1_txtHdnCycleTimeHopeOrFastKbn");
        if (ctrCycleTime.value == '' || ctrCycleTime.value == '0') {
            ctrCycleTime.value = 1;
        } else if (ctrCycleTime.value != 1) {
            ctrCycleTime.value = 1
        }
        sessionStorage.setItem(ssCycleTimeHopeOrFastKbn, ctrCycleTime.value);
    } else if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnFastest").id) {
        var ctrFastest = document.getElementById("ContentPlaceHolder1_txtHdnCycleTimeHopeOrFastKbn");
        if (ctrFastest.value == '' || ctrFastest.value == '0') {
            ctrFastest.value = 2;
        }else if (ctrFastest.value != 2) {
            ctrFastest.value = 2
        }
        sessionStorage.setItem(ssCycleTimeHopeOrFastKbn, ctrFastest.value);
    }

    return false;
};
// 機種選定処理
function SelectionModels(blnFlag, intTransport, intPressing, intSlider, intRod, intSmall, intLinearGuideRod, intLinearGuideSmall,
                            intHorizontal, intVertical, intStroke, intLoad, intGrvCntrPosition, intGrvCntrZPosition, intGrvCntrYPosition, intGrvCntrZPosition, intWorkLoadingState, intOffSetDistance, intOverhangDistance,
                            intPressingForce,dblHopeCycleTime,intCycleTimeCalcKbn,dblUptime1,dblUptime2,dblUptime3) {
    
    $.ajax({
        type: "get",
        url: $('#url-ajax-select-model').val(),
		headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
		datatype: "json",
        data: {
            vTransport: intTransport,
            vPressing: intPressing,
            vSlider: intSlider,
            vRod: intRod,
            vSmall: intSmall,
            vLinearGuideRod: intLinearGuideRod,
            vLinearGuideSmall: intLinearGuideSmall,
            vHorizontal: intHorizontal,
            vVertical: intVertical,
            vStroke: intStroke,
            vLoad: intLoad,
            vGravityOfCenter: intGrvCntrPosition,
            vGravityOfCenterX: intGrvCntrXPosition,
            vGravityOfCenterY: intGrvCntrYPosition,
            vGravityOfCenterZ: intGrvCntrZPosition,
            vWorkLoadingState: intWorkLoadingState,
            vOffSetDistance: intOffSetDistance,
            vOverhangDistance: intOverhangDistance,
            vPressingForce: intPressingForce,
            vHopeCycleTime: dblHopeCycleTime,
            vCycleTimeCalcKbn: intCycleTimeCalcKbn,
            vUptime1: dblUptime1,
            vUptime2: dblUptime2,
            vUptime3: dblUptime3
        },

    }).done(function (res) {
		res = JSON.parse(res); 
        setModel(blnFlag, res);

    }).fail(function (data, textStatus, errorThrown) {
	    // エラー時   
	    alert("数据获取错误，请稍后重试！")
	});
}

function setModel(blnFlag, data) {
    var cnt;
    cnt = data.cnt;
    
    //必須項目の状態で処理を切り替える
    if (blnFlag || cnt == 0) {
        //divの表示有無設定

        document.getElementById("cnt-box").style.display = "block";
        document.getElementById("h-box").style.display = "none";
      
        //検索件数の表示
        document.getElementById("ContentPlaceHolder1_lblSearchRecords").innerHTML = "適合製品" + cnt + "件";

        // 件数が0件
        if(cnt == 0){
            document.getElementById("ContentPlaceHolder1_lblWarn1").innerHTML = "※";
            document.getElementById("ContentPlaceHolder1_lblWarn2").innerHTML = "お客様の条件に適合する製品<br>がございません<br>入力条件の見直しもしくは機種変更<br>のためお問い合わせください";
        } else {
            document.getElementById("ContentPlaceHolder1_lblWarn1").innerHTML = "";
            document.getElementById("ContentPlaceHolder1_lblWarn2").innerHTML = "";
        }

        // オプションケーブル長ボタン使用不可
        document.getElementById("ContentPlaceHolder1_imgbtnOptionCable").disabled = true;
    } else if (0 /* data.getElementsByTagName("ERROR_KBN")['0'].textContent == enmERROR_KBN_OVERHANG */) {
        // 張出し負荷長が限界を超えている場合、機種選定結果を表示しない

        document.getElementById("cnt-box").style.display = "block";
        document.getElementById("h-box").style.display = "none";

        //検索件数の表示
        document.getElementById("ContentPlaceHolder1_lblSearchRecords").innerHTML = "適合製品0件";

        document.getElementById("ContentPlaceHolder1_lblWarn1").innerHTML = "※";
        document.getElementById("ContentPlaceHolder1_lblWarn2").innerHTML = "張り出し負荷長過大、重心位置を<br>見直してください";

        //} else if (data.getElementsByTagName("CALC_DISTANCE")['0'].textContent <= gcDistanceLimit && document.getElementById("ContentPlaceHolder1_txtHdnSlider").value == "1") {
    } else if (0 /*data.getElementsByTagName("ERROR_KBN")['0'].textContent == enmERROR_KBN_DISTANCE */) {
        // 走行寿命距離が限界値以下の場合、機種選定結果を表示しない
        
        document.getElementById("cnt-box").style.display = "block";
        document.getElementById("h-box").style.display = "none";

        //検索件数の表示
        document.getElementById("ContentPlaceHolder1_lblSearchRecords").innerHTML = "適合製品0件";

        document.getElementById("ContentPlaceHolder1_lblWarn1").innerHTML = "※";
        document.getElementById("ContentPlaceHolder1_lblWarn2").innerHTML = "モーメント過大、荷重・重心を<br>見直してください";

        //モーメント
        document.getElementById("ContentPlaceHolder1_lblMoment").value = data.getElementsByTagName("CALC_MOMENT")['0'].textContent;
    } else {
        //divの表示有無設定
        document.getElementById("cnt-box").style.display = "none";
        document.getElementById("h-box").style.display = "block";

        //押付けが選択されている場合、サイクルタイム、寿命予測、走行寿命は非表示
        if (sessionStorage.getItem(ssPressing) == "1") {
            document.getElementById("h-box-cycle-head").style.visibility="hidden";
            document.getElementById("h-box-cycle").style.visibility = "hidden";
            document.getElementById("h-box-life-head").style.visibility = "hidden";
            document.getElementById("h-box-life").style.visibility = "hidden";
            document.getElementById("h-box-distance-head").style.visibility = "hidden";
            document.getElementById("h-box-distance").style.visibility = "hidden";
        } else {
            document.getElementById("h-box-cycle-head").style.visibility = "visible";
            document.getElementById("h-box-cycle").style.visibility = "visible";
            document.getElementById("h-box-life-head").style.visibility = "visible";
            document.getElementById("h-box-life").style.visibility = "visible";
            document.getElementById("h-box-distance-head").style.visibility = "visible";
            document.getElementById("h-box-distance").style.visibility = "visible";
        }

        //モーメント
        document.getElementById("ContentPlaceHolder1_lblMoment").value = data.getElementsByTagName("CALC_MOMENT")['0'].textContent;
        document.getElementById("ContentPlaceHolder1_lblMomentST").value = data.getElementsByTagName("CALC_MOMENT")['0'].textContent;
        //推奨機種
        document.getElementById("ContentPlaceHolder1_lblRecommendModelName").innerHTML = data.getElementsByTagName("FULL_NAME")['0'].textContent;
        //標準価格
        document.getElementById("ContentPlaceHolder1_lblRecommendPrice").innerHTML = "\\" + setComma(parseInt(data.getElementsByTagName("PRICE")['0'].textContent), true, false);
        //サイクルタイム
        document.getElementById("ContentPlaceHolder1_lblRecommendCycleTime").innerHTML = data.getElementsByTagName("CALC_CYCLE_TIME")['0'].textContent + " s";
        //寿命予測計算
        document.getElementById("ContentPlaceHolder1_lblRecommendLife").innerHTML = data.getElementsByTagName("CALC_LIFE")['0'].textContent;
        document.getElementById("ContentPlaceHolder1_txtLife").value = data.getElementsByTagName("CALC_LIFE")['0'].textContent;
        //走行距離寿命
        if (data.getElementsByTagName("CALC_DISTANCE")['0'].textContent != 0) { 
            document.getElementById("ContentPlaceHolder1_lblRecommendDistance").innerHTML = setComma(data.getElementsByTagName("CALC_DISTANCE")['0'].textContent, true, false) +  'km';
        } else {
            document.getElementById("ContentPlaceHolder1_lblRecommendDistance").innerHTML = "";
        }

        // 画像設定
        document.getElementById("ContentPlaceHolder1_imgRecommendModel").src = data.getElementsByTagName("IMG_NAME")['0'].textContent;



        //機種選定が行われたタイミングで取得値をセッションに設定
        //CALC～は実装されたら指定
        sessionStorage.setItem(ssSelectSeries, data.getElementsByTagName("SERIES")['0'].textContent);
        sessionStorage.setItem(ssSelectType, data.getElementsByTagName("TYPE")['0'].textContent);
        sessionStorage.setItem(ssSelectStroke, data.getElementsByTagName("STROKE")['0'].textContent);
        sessionStorage.setItem(ssCalcCycleTime, data.getElementsByTagName("CALC_CYCLE_TIME")['0'].textContent);
        sessionStorage.setItem(ssCalcLife, data.getElementsByTagName("CALC_LIFE")['0'].textContent);
        sessionStorage.setItem(ssCalcDistance, data.getElementsByTagName("CALC_DISTANCE")['0'].textContent);
        sessionStorage.setItem(ssCalcMoment, data.getElementsByTagName("CALC_MOMENT")['0'].textContent);
        sessionStorage.setItem(ssAcceleration, data.getElementsByTagName("ACCELERATION")['0'].textContent);
        sessionStorage.setItem(ssSpeed, data.getElementsByTagName("SPEED")['0'].textContent);

        sessionStorage.setItem(ssPrice, data.getElementsByTagName("PRICE")['0'].textContent);
        sessionStorage.setItem(ssImgName, data.getElementsByTagName("IMG_NAME")['0'].textContent);
        sessionStorage.setItem(ssFullName, data.getElementsByTagName("FULL_NAME")['0'].textContent);

        // オプションケーブル長ボタン解除
        document.getElementById("ContentPlaceHolder1_imgbtnOptionCable").disabled = false;
        
        //機種選定が行われたタイミングでワンサイズ下のデータをセッションに設定
//      sessionStorage.setItem(ssDownSeries, data.getElementsByTagName("DOWN_SERIES")['0'].textContent);
//      sessionStorage.setItem(ssDownType, data.getElementsByTagName("DOWN_TYPE")['0'].textContent);
//      sessionStorage.setItem(ssDownStroke, data.getElementsByTagName("DOWN_STROKE")['0'].textContent);
//      sessionStorage.setItem(ssDownPrice, data.getElementsByTagName("DOWN_PRICE")['0'].textContent);
//      sessionStorage.setItem(ssDownListOrder, data.getElementsByTagName("DOWN_LIST_ORDER")['0'].textContent);
//      sessionStorage.setItem(ssDownTypeName, data.getElementsByTagName("DOWN_TYPE_NAME")['0'].textContent);
//      sessionStorage.setItem(ssDownTypeForm, data.getElementsByTagName("DOWN_TYPE_FORM")['0'].textContent);
//      sessionStorage.setItem(ssDownTransport, data.getElementsByTagName("DOWN_TRANSPORT")['0'].textContent);
//      sessionStorage.setItem(ssDownPressing, data.getElementsByTagName("DOWN_PRESSING")['0'].textContent);
//      sessionStorage.setItem(ssDownHorizontal, data.getElementsByTagName("DOWN_HORIZONTAL")['0'].textContent);
//      sessionStorage.setItem(ssDownVertical, data.getElementsByTagName("DOWN_VERTICAL")['0'].textContent);
//      sessionStorage.setItem(ssDownStandardLife, data.getElementsByTagName("DOWN_STANDARD_LIFE")['0'].textContent);
//      sessionStorage.setItem(ssDownSpeed, data.getElementsByTagName("DOWN_SPEED")['0'].textContent);
//      sessionStorage.setItem(ssDownAcceleration, data.getElementsByTagName("DOWN_ACCELERATION")['0'].textContent);
//      sessionStorage.setItem(ssDownCalcCycleTime, data.getElementsByTagName("DOWN_CALC_CYCLE_TIME")['0'].textContent);
//      sessionStorage.setItem(ssDownImgName, data.getElementsByTagName("DOWN_IMG_NAME")['0'].textContent);
//      sessionStorage.setItem(ssDownFullName, data.getElementsByTagName("DOWN_FULL_NAME")['0'].textContent);
//      sessionStorage.setItem(ssDownCalcMoment, data.getElementsByTagName("DOWN_CALC_MOMENT")['0'].textContent);
//      sessionStorage.setItem(ssDownCalcDistance, data.getElementsByTagName("DOWN_CALC_DISTANCE")['0'].textContent);
//      sessionStorage.setItem(ssDownCalcLife, data.getElementsByTagName("DOWN_CALC_LIFE")['0'].textContent);

//      if (sessionStorage.getItem(ssDownSeries).trim() != "") {           
//          //ランクダウン使用可
//          document.getElementById("ContentPlaceHolder1_imgBtnRankDown").disabled = false;
//          document.getElementById("ContentPlaceHolder1_imgBtnRankDown").style.display = "inline-block";
//          document.getElementById("ContentPlaceHolder1_imgBtnRankUp").style.display = "none";
//      } else {
//          //ランクダウン使用不可
//          document.getElementById("ContentPlaceHolder1_imgBtnRankDown").disabled = true;
//          document.getElementById("ContentPlaceHolder1_imgBtnRankDown").style.display = "inline-block";
//          document.getElementById("ContentPlaceHolder1_imgBtnRankUp").style.display = "none";
//      };

        if (data.getElementsByTagName("ERROR_KBN")['0'].textContent == enmERROR_KBN_RRCHANGE) {
            document.getElementById("ContentPlaceHolder1_lblWarn3").innerHTML = "モーメント過大のため、ロッド<br>タイプに外付けガイド併用にて<br>検討をお願いします";
        } else {
            document.getElementById("ContentPlaceHolder1_lblWarn3").innerHTML = "";
        }
        return false;
    }
}


function SelectModel(own) {

    var blnFlag = false;

    var ctrTransport = document.getElementById("ContentPlaceHolder1_txtHdnTransport");
    var ctrPressing = document.getElementById("ContentPlaceHolder1_txtHdnPressing");
    var ctrSlider = document.getElementById("ContentPlaceHolder1_txtHdnSlider");
    var ctrRod = document.getElementById("ContentPlaceHolder1_txtHdnRod");
    var ctrSmall = document.getElementById("ContentPlaceHolder1_txtHdnSmallType");
    var ctrHorizontal = document.getElementById("ContentPlaceHolder1_txtHdnHorizontal");
    var ctrVertical = document.getElementById("ContentPlaceHolder1_txtHdnVertical");

    var ctrStroke = document.getElementById("ContentPlaceHolder1_txtStroke")
    var ctrLoad = document.getElementById("ContentPlaceHolder1_lblLoad")
    var ctrLoadLR = document.getElementById("ContentPlaceHolder1_txtLoad_LR")
    var ctrPressR = document.getElementById("ContentPlaceHolder1_txtPressR")
    var ctrLoad_LST = document.getElementById("ContentPlaceHolder1_txtLoad_LST")
    var ctrPressST =document.getElementById("ContentPlaceHolder1_txtPressST")
    var ctrPressingForce = document.getElementById("ContentPlaceHolder1_txtPress")
    var ctrCycleTimeCalcKbn = document.getElementById("ContentPlaceHolder1_txtHdnCycleTimeHopeOrFastKbn")

    var intTransport, intPressing, intSlider, intRod, intHorizontal, intVertical, intStroke, intLoad, intUpDown;
    var intWorkLoadingState, intPressingForce, dblHopeCycleTime, intCycleTimeCalcKbn, dblUptime1, dblUptime2, dblUptime3;
    var intSmall, intOffSetDistance, intOverhangDistance, intLinearGuideRod, intLinearGuideSmall;
    var fullType;

    //必須に値が入っているかチェック
    if ((ctrTransport.value == '0' || ctrTransport.value == '') && (ctrPressing.value == '0' || ctrPressing.value == '')) {
        blnFlag = true;

        // 未入力扱いの値を設定
        intTransport = -1;
        intPressing = -1;
    }
    else {
        intTransport = ChangeInteger(ctrTransport.value);
        intPressing = ChangeInteger(ctrPressing.value);
    }

    if ((ctrSlider.value == '0' || ctrSlider.value == '') && (ctrRod.value == '0' || ctrRod.value == '') && (ctrSmall.value == '0' || ctrSmall.value == '')) {
        blnFlag = true;

        // 未入力扱いの値を設定
        intSlider = -1;
        intRod = -1;
        intSmall = -1;
    } else {
        intSlider = ChangeInteger(ctrSlider.value);
        intRod = ChangeInteger(ctrRod.value);
        intSmall = ChangeInteger(ctrSmall.value);
    }

    intLinearGuideRod = -1;
    intLinearGuideSmall = -1;

    if ((ctrHorizontal.value == '0' || ctrHorizontal.value == '') && (ctrVertical.value == '0' || ctrVertical.value == '')) {
        blnFlag = true;

        // 未入力扱いの値を設定
        intHorizontal = -1;
        intVertical = -1;
    } else {
        intHorizontal = ChangeInteger(ctrHorizontal.value);
        intVertical = ChangeInteger(ctrVertical.value);
    }

    if (ctrStroke.value == '') {
        blnFlag = true;

        // 未入力扱いの値を設定
        intStroke = -1;
    }
    else {
        intStroke = ChangeInteger(ctrStroke.value);
    }
    var div_e_box_style;
    div_e_box_style = document.getElementById("e-box").currentStyle || document.defaultView.getComputedStyle(document.getElementById("e-box"), '')
    if (div_e_box_style.display != "none") {

        if(ctrLoad.value == '0' || ctrLoad.value == ''){
            blnFlag = true;
            // 未入力扱いの値を設定
            intLoad = -1;          
        } else {
            intLoad = ChangeFloat(ctrLoad.value.replace(',', ''));
        }
    }else{
        intLoad = -1;
    }

    var div_j_box_style;
    div_j_box_style = document.getElementById("j-box").currentStyle || document.defaultView.getComputedStyle(document.getElementById("j-box"), '')
    if (div_j_box_style.display != "none") {

        if(ctrPressingForce.value == '0' || ctrPressingForce.value == ''){
            blnFlag = true;
            // 未入力扱いの値を設定
            intPressingForce = -1;          
        } else {
            intPressingForce = ChangeInteger(ctrPressingForce.value);
        }

        if (sessionStorage.getItem(ssLinearGuideRod) != null) {
            intLinearGuideRod = ChangeInteger(sessionStorage.getItem(ssLinearGuideRod))
        }

    }else{
        intPressingForce = -1;
    }

    // ロッド荷重が表示されていた場合に指定
    var div_k_box_style;
    div_k_box_style = document.getElementById("k-box").currentStyle || document.defaultView.getComputedStyle(document.getElementById("k-box"), '')
    if (div_k_box_style.display != "none") {

        if (ctrLoadLR.value == '0' || ctrLoadLR.value == '') {
            blnFlag = true;
            // 未入力扱いの値を設定
            intLoad = -1;
        } else {
            intLoad = ChangeFloat(ctrLoadLR.value.replace(/,/g,''));
        }

        if (sessionStorage.getItem(ssLinearGuideRod) != null) {
            intLinearGuideRod = ChangeInteger(sessionStorage.getItem(ssLinearGuideRod))
        } 

    }

    // ロッド荷重が表示されていた場合に指定
    var div_l_box_style;
    div_l_box_style = document.getElementById("l-box").currentStyle || document.defaultView.getComputedStyle(document.getElementById("l-box"), '')
    if (div_l_box_style.display != "none") {

        if (ctrPressR.value == '0' || ctrPressR.value == '') {
            blnFlag = true;
            // 未入力扱いの値を設定
            intLoad = -1;
        } else {
            intLoad = ChangeFloat(ctrPressR.value.replace(/,/g, ''));
        }
        
        if (sessionStorage.getItem(ssLinearGuideRod) != null) {
            intLinearGuideRod = ChangeInteger(sessionStorage.getItem(ssLinearGuideRod))
        }

        if (sessionStorage.getItem(ssOffSetDistance) != null) {
            intOffSetDistance = ChangeFloat(sessionStorage.getItem(ssOffSetDistance))
        }

        if (sessionStorage.getItem(ssOverhangDistance) != null) {
            intOverhangDistance = ChangeFloat(sessionStorage.getItem(ssOverhangDistance))
        }
    }

    // 細小型押付け力が表示されていた場合に指定
    var div_n_box_style;
    div_n_box_style = document.getElementById("n-box").currentStyle || document.defaultView.getComputedStyle(document.getElementById("n-box"), '')
    if (div_n_box_style.display != "none") {

        if (ctrPressST.value == '0' || ctrPressST.value == '') {
            blnFlag = true;
            // 未入力扱いの値を設定
            intPressingForce = -1;
        } else {
            intPressingForce = ChangeFloat(ctrPressST.value.replace(/,/g, ''));
        }

        if (sessionStorage.getItem(ssLinearGuideSmall) != null) {
            intLinearGuideSmall = ChangeInteger(sessionStorage.getItem(ssLinearGuideSmall))
        }

    }

    // 細小型荷重が表示されていた場合に指定
    var div_m_box_style;
    div_m_box_style = document.getElementById("m-box").currentStyle || document.defaultView.getComputedStyle(document.getElementById("m-box"), '')
    if (div_m_box_style.display != "none") {
        
        if (ctrLoad_LST.value == '0' || ctrLoad_LST.value == '') {
            blnFlag = true;
            // 未入力扱いの値を設定
            intLoad = -1;
        } else {
            intLoad = ChangeFloat(ctrLoad_LST.value.replace(/,/g, ''));
        }

        if (sessionStorage.getItem(ssLinearGuideSmall) != null) {
            intLinearGuideSmall = ChangeInteger(sessionStorage.getItem(ssLinearGuideSmall))
        } 
    }

    if (ctrHorizontal.value == 1) {
        sessionStorage.setItem(ssDirection, 0);
    }

    if (ctrVertical.value == 1) {
        sessionStorage.setItem(ssDirection, 1);
    }

    //荷重・重心
    if (sessionStorage.getItem(ssWorkLoadingState) != null) {
        //子画面で設定した設置方向
        intWorkLoadingState = sessionStorage.getItem(ssWorkLoadingState);
    } else {
        //未設定
        intWorkLoadingState = -1;
    }
    if (sessionStorage.getItem(ssGrvCntrPosition) != null) {
        intGrvCntrPosition = sessionStorage.getItem(ssGrvCntrPosition);
    } else {
        intGrvCntrPosition = -1;
    }
    if (sessionStorage.getItem(ssGrvCntrXPosition) != null) {
        intGrvCntrXPosition = sessionStorage.getItem(ssGrvCntrXPosition);
    } else {
        intGrvCntrXPosition = -1;
    }
    if (sessionStorage.getItem(ssGrvCntrYPosition) != null) {
        intGrvCntrYPosition = sessionStorage.getItem(ssGrvCntrYPosition);
    } else {
        intGrvCntrYPosition = -1;
    }
    if(sessionStorage.getItem(ssGrvCntrZPosition) != null) {
        intGrvCntrZPosition = sessionStorage.getItem(ssGrvCntrZPosition);
    } else {
        intGrvCntrZPosition = -1;
    }

    // 1サイズアップ or ダウンの判定
    if (own.id == document.getElementById("ContentPlaceHolder1_imgBtnRankDown")) {
        // 1サイズダウン
        intUpDown = 1;
    } else if (own.id == document.getElementById("ContentPlaceHolder1_imgBtnRankUp")) {
        // 1サイズアップ
        intUpDown = 2;
    } else {
        // 未入力
        intUpDown = -1;
    }

    //希望サイクルタイム
    if (sessionStorage.getItem(ssHopeCycleTime) != null) {
        //子画面で設定した希望サイクルタイム
        dblHopeCycleTime = sessionStorage.getItem(ssHopeCycleTime).replace(/,/g,'');
    } else {
        //未設定
        dblHopeCycleTime = -1;
    }
    if (ctrCycleTimeCalcKbn.value != '') {
        intCycleTimeCalcKbn = ctrCycleTimeCalcKbn.value
    }

    //稼働時間
    if (sessionStorage.getItem(ssRoundTrip) != null) {
        //子画面で設定した設置方向
        dblUptime1 = sessionStorage.getItem(ssRoundTrip);
    } else {
        //未設定
        dblUptime1 = -1;
    }
    if (sessionStorage.getItem(ssOperatingTime) != null) {
        //子画面で設定した設置方向
        dblUptime2 = sessionStorage.getItem(ssOperatingTime);
    } else {
        //未設定
        dblUptime2 = -1;
    }
    if (sessionStorage.getItem(ssOperatingDay) != null) {
        //子画面で設定した設置方向
        dblUptime3 = sessionStorage.getItem(ssOperatingDay);
    } else {
        //未設定
        dblUptime3 = -1;
    }

    if (intSlider < 1 &&intLinearGuideRod < 1 && intLinearGuideSmall < 1) { blnFlag = true; }

    var blnCheckStroke,blnCheckPressing

    blnCheckStroke = errorCheckString(ctrStroke)

    if (blnCheckStroke == false) {
        alert('ストロークに不正な値が入力されています。\n半角数字で入力して下さい');
        ctrStroke.value = '';
        sessionStorage.setItem(ssStroke, '');
        ctrStroke.focus();

        document.getElementById("cnt-box").style.display = "block";
        document.getElementById("h-box").style.display = "none";
        
        // オプションケーブル長ボタン使用不可
        document.getElementById("ContentPlaceHolder1_imgbtnOptionCable").disabled = true;

        //ランクダウン使用不可
        document.getElementById("ContentPlaceHolder1_imgBtnRankDown").disabled = true;

        document.getElementById("ContentPlaceHolder1_lblSearchRecords").innerHTML = "適合製品0件";

        document.getElementById("ContentPlaceHolder1_lblWarn1").innerHTML = "※";
        document.getElementById("ContentPlaceHolder1_lblWarn2").innerHTML = "ストロークに不正な値が<br>　 入力されました<br>　 再入力を行って下さい";
        
        return false;
    }
    if (ctrStroke.value != '') {

        if (ctrStroke.value == 0) {

        alert('ストロークは0より大きい値を入力して下さい。')
        ctrStroke.value = '';
        sessionStorage.setItem(ssStroke, '');
        ctrStroke.focus();

        document.getElementById("cnt-box").style.display = "block";
        document.getElementById("h-box").style.display = "none";

            // オプションケーブル長ボタン使用不可
        document.getElementById("ContentPlaceHolder1_imgbtnOptionCable").disabled = true;

        //ランクダウン使用不可
        document.getElementById("ContentPlaceHolder1_imgBtnRankDown").disabled = true;

        document.getElementById("ContentPlaceHolder1_lblSearchRecords").innerHTML = "適合製品0件";

        document.getElementById("ContentPlaceHolder1_lblWarn1").innerHTML = "※";
        document.getElementById("ContentPlaceHolder1_lblWarn2").innerHTML = "ストロークの値に0が<br>　 入力されています<br>　 再入力を行って下さい";

        return false;
        }
    }

    blnCheckPressing = errorCheckString(ctrPressingForce)

    if (blnCheckPressing == false) {
        alert('押付け力に不正な値が入力されています。\n半角数字で入力して下さい');
        ctrPressingForce.value = '';
        sessionStorage.setItem(ssPressingForce, '');
        ctrPressingForce.focus();

        document.getElementById("cnt-box").style.display = "block";
        document.getElementById("h-box").style.display = "none";

        // オプションケーブル長ボタン使用不可
        document.getElementById("ContentPlaceHolder1_imgbtnOptionCable").disabled = true;

        //ランクダウン使用不可
        document.getElementById("ContentPlaceHolder1_imgBtnRankDown").disabled = true;

        document.getElementById("ContentPlaceHolder1_lblSearchRecords").innerHTML = "適合製品0件";

        document.getElementById("ContentPlaceHolder1_lblWarn1").innerHTML = "※";
        document.getElementById("ContentPlaceHolder1_lblWarn2").innerHTML = "押付け力に不正な値が<br>　 入力されました<br>　 再入力を行って下さい";

        return false;
    }



    // データ取得
    SelectionModels(blnFlag, intTransport, intPressing, intSlider, intRod, intSmall,  intLinearGuideRod, intLinearGuideSmall,
                    intHorizontal, intVertical, intStroke, intLoad, intGrvCntrPosition, intGrvCntrXPosition, intGrvCntrYPosition, intGrvCntrZPosition, intWorkLoadingState, intOffSetDistance, intOverhangDistance,
                    intPressingForce, dblHopeCycleTime, intCycleTimeCalcKbn,
                    dblUptime1, dblUptime2, dblUptime3)

    return false;
}

function onClickEvent(own){

    //隠し項目に値を格納
    setItems(own);
    //隠し項目の値より機種選定または候補件数の取得
    SelectModel(own);

    return false;

}

function ChangeInteger(vStr){

    var rtnInt
    var strTemp
    strTemp = vStr;
    
    //隠し項目のテキストが空の場合：0
    //隠し項目のテキストが数値の場合：文字→数値変換
    if(vStr == ''){
        rtnInt = 0
    }else{        
        rtnInt = parseInt(strTemp)
    }   
    return rtnInt
}

function ChangeFloat(vStr) {

    var rtnInt
    var strTemp
    strTemp = vStr;

    //隠し項目のテキストが空の場合：0
    //隠し項目のテキストが数値の場合：文字→数値変換
    if (vStr == '') {
        rtnInt = 0
    } else {
        rtnInt = parseFloat(strTemp)
    }
    return rtnInt
}

function ImageChange(ctr,onoff) {
    var nowSrc = document.getElementById(ctr.id).src;
    var afterSrc;

    with (document) {
        if(onoff == "1"){
            // OffをOnに切り替え
            // 画像を選択状態にする
            afterSrc = nowSrc.replace(/Off/g, "On");
            getElementById(ctr.id).src = afterSrc;
        } else if (onoff == "2") {
            // OnをOffに切り替え
            afterSrc = nowSrc.replace(/On/g, "Off");
            getElementById(ctr.id).src = afterSrc;
        } else {
            // OnとOffで画像を切り替える
            if (nowSrc.indexOf('_On') != -1) {
                afterSrc = nowSrc.replace(/On/g, "Off");
                getElementById(ctr.id).src = afterSrc;
                // 取付方向の値設定
            } else {
                // 画像を選択状態にする
                afterSrc = nowSrc.replace(/Off/g, "On");
                getElementById(ctr.id).src = afterSrc;
            }
        }
    }
}

// 項目の画面セット
function setFormItems() {
    var wkTransport;
    var wkPressing;
    var wkSlider;
    var wkRod;
    var wkSmallType;
    var wkLinearGuideRod;
    var wkLinearGuideSmall;
    var wkHorizontal;
    var wkVertical;
    var wkLoad;
    var wkPress;
    var wkOffSetDistance;
    var wkOverhangDistance;
    var wkPressingForce;
    var wkStroke;
    var wkHopeCycleTime;
    var wkCycleTimeHopeOrFastKbn;
    var wkHopeLife;
    var wkCalcMoment;

    // セッションの値が存在するか確認
    if (sessionStorage.getItem(ssTransport) != null) {
        wkTransport = sessionStorage.getItem(ssTransport);
    } else {
        wkTransport = "";
    }
    if (sessionStorage.getItem(ssPressing) != null) {
        wkPressing = sessionStorage.getItem(ssPressing);
    } else {
        wkPressing = "";
    }
    if (sessionStorage.getItem(ssSlider) != null) {
        wkSlider = sessionStorage.getItem(ssSlider);
    } else {
        wkSlider = "";
    }
    if (sessionStorage.getItem(ssRod) != null) {
        wkRod = sessionStorage.getItem(ssRod);
    } else {
        wkRod = "";
    }
    if (sessionStorage.getItem(ssSmallType) != null) {
        wkSmallType = sessionStorage.getItem(ssSmallType);
    } else {
        wkSmallType = "";
    }
    if (sessionStorage.getItem(ssLinearGuideRod) != null) {
        wkLinearGuideRod = sessionStorage.getItem(ssLinearGuideRod);
    } else {
        wkLinearGuideRod = "";
    }
    if (sessionStorage.getItem(ssLinearGuideSmall) != null) {
        wkLinearGuideSmall = sessionStorage.getItem(ssLinearGuideSmall);
    } else {
        wkLinearGuideSmall = "";
    }
    if (sessionStorage.getItem(ssHorizontal) != null) {
        wkHorizontal = sessionStorage.getItem(ssHorizontal);
    } else {
        wkHorizontal = "";
    }
    if (sessionStorage.getItem(ssVertical) != null) {
        wkVertical = sessionStorage.getItem(ssVertical);
    } else {
        wkVertical = "";
    }
    if (sessionStorage.getItem(ssLoad) != null) {
        wkLoad = sessionStorage.getItem(ssLoad);
    } else {
        wkLoad = "";
    }
    if (sessionStorage.getItem(ssStroke) != null) {
        wkStroke = sessionStorage.getItem(ssStroke);
    } else {
        wkStroke = "";
    }
    if (sessionStorage.getItem(ssHopeCycleTime) != null) {
        wkHopeCycleTime = sessionStorage.getItem(ssHopeCycleTime);
    } else {
        wkHopeCycleTime = "";
    }
    if (sessionStorage.getItem(ssPress) != null) {
        wkPress = sessionStorage.getItem(ssPress);
    } else {
        wkPress = "";
    }
    if (sessionStorage.getItem(ssOffSetDistance) != null) {
        wkOffSetDistance = sessionStorage.getItem(ssOffSetDistance);
    } else {
        wkOffSetDistance = "";
    }
    if (sessionStorage.getItem(ssOverhangDistance) != null) {
        wkOverhangDistance = sessionStorage.getItem(ssOverhangDistance);
    } else {
        wkOverhangDistance = "";
    }
    if (sessionStorage.getItem(ssPressingForce) != null) {
        wkPressingForce = sessionStorage.getItem(ssPressingForce);
    } else {
        wkPressingForce = "";
    }
    if (sessionStorage.getItem(ssCycleTimeHopeOrFastKbn) != null) {
        wkCycleTimeHopeOrFastKbn = sessionStorage.getItem(ssCycleTimeHopeOrFastKbn);
    } else {
        wkCycleTimeHopeOrFastKbn = "";
    }
    if (sessionStorage.getItem(ssCalcLife) != null) {
        wkHopeLife = sessionStorage.getItem(ssCalcLife);
    } else {
        wkHopeLife = "";
    }
    if (sessionStorage.getItem(ssCalcMoment) != null) {
        wkCalcMoment = sessionStorage.getItem(ssCalcMoment);
    } else {
        wkCalcMoment = "";
    }

    with (document) {
        // 隠し項目への設定
        getElementById("ContentPlaceHolder1_txtHdnTransport").value = wkTransport;
        getElementById("ContentPlaceHolder1_txtHdnPressing").value = wkPressing;
        getElementById("ContentPlaceHolder1_txtHdnSlider").value = wkSlider;
        getElementById("ContentPlaceHolder1_txtHdnRod").value = wkRod;
        getElementById("ContentPlaceHolder1_txtHdnSmallType").value = wkSmallType;
        getElementById("ContentPlaceHolder1_txtHdnHorizontal").value = wkHorizontal;
        getElementById("ContentPlaceHolder1_txtHdnVertical").value = wkVertical;
        getElementById("ContentPlaceHolder1_txtHdnLoad").value = wkLoad;
        getElementById("ContentPlaceHolder1_txtHdnRange").value = wkStroke;
        getElementById("ContentPlaceHolder1_txtHdnHopeCycleTime").value = wkHopeCycleTime;
        getElementById("ContentPlaceHolder1_txtHdnCycleTimeHopeOrFastKbn").value = wkCycleTimeHopeOrFastKbn;

        // 画面への反映
        getElementById("ContentPlaceHolder1_lblMoment").value = wkCalcMoment;
        getElementById("ContentPlaceHolder1_txtStroke").value = wkStroke;
        getElementById("ContentPlaceHolder1_txtPress").value = wkPressingForce;
        getElementById("ContentPlaceHolder1_txtPressST").value = wkPressingForce;
        getElementById("ContentPlaceHolder1_txtCycleTime").value = wkHopeCycleTime;
        getElementById("ContentPlaceHolder1_txtLife").value = wkHopeLife;
        getElementById("ContentPlaceHolder1_txtPressR").value = wkLoad;
        getElementById("ContentPlaceHolder1_txtLoad_LR").value = wkLoad;
        getElementById("ContentPlaceHolder1_txtLoad_LST").value = wkLoad;
        getElementById("ContentPlaceHolder1_lblLoad").value = wkLoad;

        // 画像のOnOff
        if (wkTransport == "1") {
            ImageChange(getElementById("ContentPlaceHolder1_imgbtnTransport"), "1");
        }
        if (wkPressing == "1") {
            ImageChange(getElementById("ContentPlaceHolder1_imgbtnPressing"), "1");
        }
        if (wkSlider == "1") {
            ImageChange(getElementById("ContentPlaceHolder1_imgbtnSlider"), "1");
        }
        if (wkRod == "1") {
            ImageChange(getElementById("ContentPlaceHolder1_imgbtnRod"), "1");
            //RodImageChange("");
            
            switch (Number(wkLinearGuideRod)) {
                case Number(stateLG1):
                    ImageChange(getElementById("ContentPlaceHolder1_imgbtnRod"), "1");
                    getElementById("ContentPlaceHolder1_lblRod").innerHTML = stringLG1;
                    break;
                case Number(stateLG2):
                    ImageChange(getElementById("ContentPlaceHolder1_imgbtnRod"), "1");
                    getElementById("ContentPlaceHolder1_lblRod").innerHTML = stringLG2;
                    break;
                case Number(stateLG3):
                    ImageChange(getElementById("ContentPlaceHolder1_imgbtnRod"), "1");
                    getElementById("ContentPlaceHolder1_lblRod").innerHTML = stringLG3;
                    break;
                default:
                    ImageChange(getElementById("ContentPlaceHolder1_imgbtnRod"), "2");
                    getElementById("ContentPlaceHolder1_lblRod").innerHTML = "";
                    break;
            }
        }
        if (wkSmallType == "1") {
            ImageChange(getElementById("ContentPlaceHolder1_imgbtnSmallType"), "1");
        }
        if (wkHorizontal == "1") {
            ImageChange(getElementById("ContentPlaceHolder1_imgbtnHorizontal"), "1");
        }
        if (wkVertical == "1") {
            ImageChange(getElementById("ContentPlaceHolder1_imgbtnVertical"), "1");
        }
        if (wkCycleTimeHopeOrFastKbn == "1") {
            //imgbtnCycleTime_onclick(getElementById("ContentPlaceHolder1_imgbtnCycleTime"));
            ImageChange(getElementById("ContentPlaceHolder1_imgbtnCycleTime",""));
        } else if (wkCycleTimeHopeOrFastKbn == "2" ) {
            //imgbtnFastest_onclick(getElementById("ContentPlaceHolder1_imgbtnFastest"));
            ImageChange(getElementById("ContentPlaceHolder1_imgbtnFastest",""));
        } else {

        }

        SelectloadEntryType();

        // 機種選定処理の呼び出し        
        if ((wkTransport != "" || wkPressing != "") && (wkSlider != "" || wkRod != "" || wkSmallType != "") && (wkHorizontal != "" || wkVertical != "") && (wkLoad != "" || wkPressingForce != "") && wkStroke != "") {
            // 1～5のセッションが存在する場合、機種選定済として再度処理を行う
            SelectModel(this);

            if (wkPressingForce != null) {                
                PressingChange(wkPressing)
            }
        }
    }


}

function SelectloadEntryType() {
    // 押付けがチェックされておらず、ロッドがチェックされていた場合、ロッド用の荷重入力を表示
    with (document) {
        if (getElementById("ContentPlaceHolder1_txtHdnPressing").value == 1 && getElementById("ContentPlaceHolder1_txtHdnSmallType").value == 1) {
            getElementById("e-box").style.display = "none";
            getElementById("j-box").style.display = "none";
            getElementById("n-box").style.display = "table";
            getElementById("k-box").style.display = "none";
            getElementById("l-box").style.display = "none";
            getElementById("m-box").style.display = "none";
        } else if (getElementById("ContentPlaceHolder1_txtHdnPressing").value == 1 && getElementById("ContentPlaceHolder1_txtHdnSmallType").value == 0) {
            getElementById("e-box").style.display = "none";
            getElementById("j-box").style.display = "table";
            getElementById("n-box").style.display = "none";
            getElementById("k-box").style.display = "none";
            getElementById("l-box").style.display = "none";
            getElementById("m-box").style.display = "none";
        } else if (getElementById("ContentPlaceHolder1_txtHdnPressing").value == 0 && getElementById("ContentPlaceHolder1_txtHdnSmallType").value == 1) {
            getElementById("e-box").style.display = "none";
            getElementById("j-box").style.display = "none";
            getElementById("n-box").style.display = "none";
            getElementById("k-box").style.display = "none";
            getElementById("l-box").style.display = "none";
            getElementById("m-box").style.display = "table";
        } else if (getElementById("ContentPlaceHolder1_txtHdnPressing").value == 0 && getElementById("ContentPlaceHolder1_txtHdnRod").value == 1) {
            getElementById("e-box").style.display = "none";
            getElementById("j-box").style.display = "none";
            getElementById("l-box").style.display = "none";
            getElementById("m-box").style.display = "none";
            if (sessionStorage.getItem(ssLinearGuideRod) == null) {
                getElementById("k-box").style.display = "table";
                getElementById("l-box").style.display = "none";
            } else if (sessionStorage.getItem(ssLinearGuideRod) == stateLG2) {
                getElementById("k-box").style.display = "none";
                getElementById("l-box").style.display = "table";
            } else {
                getElementById("k-box").style.display = "table";
                getElementById("l-box").style.display = "none";
            }
        } else {
            getElementById("e-box").style.display = "table";
            getElementById("j-box").style.display = "none";
            getElementById("n-box").style.display = "none";
            getElementById("k-box").style.display = "none";
            getElementById("l-box").style.display = "none";
            getElementById("m-box").style.display = "none";
        }
    }
}

function PressingChange(chk) {
    // チェックがついている場合
    if (chk == 1) {
        // スライダ、サイクルタイム、運転時間入力使用不可
        document.getElementById("ContentPlaceHolder1_imgbtnSlider").disabled = true;
        document.getElementById("ContentPlaceHolder1_imgbtnCycleTime").disabled = true;
        document.getElementById("ContentPlaceHolder1_imgbtnFastest").disabled = true;
        document.getElementById("ContentPlaceHolder1_imgbtnLife").disabled = true;

        document.getElementById("ContentPlaceHolder1_txtPressR").value = "";

        //荷重のセッションとコントロールの値をクリア
        //sessionStorage.setItem(ssLoad, "-1");
        sessionStorage.setItem(ssLoad, "");
        sessionStorage.setItem(ssOffSetDistance, "");
        sessionStorage.setItem(ssOverhangDistance, "");
        document.getElementById("ContentPlaceHolder1_lblLoad").value = "";
        document.getElementById("ContentPlaceHolder1_txtLoad_LST").value = "";

        //運転時間のセッションクリア
        if(sessionStorage.getItem(ssRoundTrip)!=null){
            sessionStorage.removeItem(ssRoundTrip);
        }
        if(sessionStorage.getItem(ssOperatingTime)!=null){
            sessionStorage.removeItem(ssOperatingTime);
        }
        if(sessionStorage.getItem(ssOperatingDay)!=null){
            sessionStorage.removeItem(ssOperatingDay);
        }
        if (sessionStorage.getItem(ssHopeCycleTime) != null) {
            sessionStorage.removeItem(ssHopeCycleTime);
        }

        //スライダチェック済みの場合：解除
        if (document.getElementById("ContentPlaceHolder1_txtHdnSlider").value == 1) {
            // チェック解除とする
            imgbtnSlider_onclick(document.getElementById("ContentPlaceHolder1_imgbtnSlider"));
        }

    } else {
        // スライダ、サイクルタイム、運転時間入力使用可能
        document.getElementById("ContentPlaceHolder1_imgbtnSlider").disabled = false;
        document.getElementById("ContentPlaceHolder1_imgbtnCycleTime").disabled = false;
        document.getElementById("ContentPlaceHolder1_imgbtnFastest").disabled = false;
        document.getElementById("ContentPlaceHolder1_imgbtnLife").disabled = false;

        // 荷重表示の設定
        //SelectloadEntryType();

        //押付け力のセッションとコントロールの値をクリア
        sessionStorage.setItem(ssPressingForce, "");
        document.getElementById("ContentPlaceHolder1_txtPress").value = "";
        document.getElementById("ContentPlaceHolder1_txtPressST").value = "";
    }
}

// ストローク画像の変更
function ImageStrokeChange(cntr,own) {
    var nowSrc = cntr.src;
    var afterSrc;

    if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnSlider").id) {
        //afterSrc = nowSrc.replace(/SmallType/g, "Slider");
        afterSrc = nowSrc.replace(/Rod/g, "Slider").replace(/SmallType/g, "Slider").replace(/Radial/g, "Slider");
    } else if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnRod").id) {
        //afterSrc = nowSrc.replace(/SmallType/g, "Rod");
        afterSrc = nowSrc.replace(/Slider/g, "Rod").replace(/SmallType/g, "Rod").replace(/Radial/g, "Rod");
    } else {
        //afterSrc = nowSrc.replace(/Slider/g, "SmallType");
        afterSrc = nowSrc.replace(/Rod/g, "SmallType").replace(/Slider/g, "SmallType").replace(/Radial/g, "SmallType");
        
    }

    cntr.src = afterSrc;
}


// 搬送押下処理
function imgbtnTransport_onclick(own) {
    var grpUse = 1;

    // 画像変更
    ImageChange(own, "");
    // グループ単位での画像変更
    ImageGroupChange(grpUse, own);

    var vTransport, vPressing, vSlider, vRod, vSmall
    vTransport = document.getElementById("ContentPlaceHolder1_txtHdnTransport").value;
    vPressing = document.getElementById("ContentPlaceHolder1_txtHdnPressing").value;
    vSlider = document.getElementById("ContentPlaceHolder1_txtHdnSlider").value;
    //vRod = document.getElementById("ContentPlaceHolder1_txtHdnHorizontal").value
    vRod = document.getElementById("ContentPlaceHolder1_txtHdnRod").value;
    vSmall = document.getElementById("ContentPlaceHolder1_txtHdnSmallType").value;

    //ReverseItemClear(1, vPressing, vSlider, vRod)
    ReverseItemClear(1, vPressing, vSlider, vRod, vSmall);

    // 共通クリック処理
    onClickEvent(own);

    // 荷重表示の設定
    SelectloadEntryType();

    return false;
}

// 押付押下処理
function imgbtnPressing_onclick(own) {
    var grpUse = 1;

    // 画像変更
    ImageChange(own,"");
    // グループ単位での画像変更
    ImageGroupChange(grpUse, own);

    var vTransport, vPressing, vSlider, vRod, vSmall
    vTransport = document.getElementById("ContentPlaceHolder1_txtHdnTransport").value;
    vPressing = document.getElementById("ContentPlaceHolder1_txtHdnPressing").value;
    vSlider = document.getElementById("ContentPlaceHolder1_txtHdnSlider").value;
    //vRod = document.getElementById("ContentPlaceHolder1_txtHdnHorizontal").value
    vRod = document.getElementById("ContentPlaceHolder1_txtHdnRod").value;
    vSmall = document.getElementById("ContentPlaceHolder1_txtHdnSmallType").value;

    //ReverseItemClear(vTransport, 1, vSlider, vRod)
    ReverseItemClear(vTransport, 1, vSlider, vRod, vSmall);

    // 共通クリック処理
    onClickEvent(own);

    // 荷重表示の設定
    SelectloadEntryType();

    // 押付チェック有無による処理
    PressingChange(document.getElementById("ContentPlaceHolder1_txtHdnPressing").value)

    return false;
}

// スライダ押下処理
function imgbtnSlider_onclick(own) {
    var grpForm = 2;

    // 画像変更
    ImageChange(own, "");
    // グループ単位での画像変更
    ImageGroupChange(grpForm, own);
    //ストローク画像の変更
    ImageStrokeChange(document.getElementById("ContentPlaceHolder1_imgStroke"), own);

    var vTransport, vPressing, vSlider, vRod, vSmall
    vTransport = document.getElementById("ContentPlaceHolder1_txtHdnTransport").value;
    vPressing = document.getElementById("ContentPlaceHolder1_txtHdnPressing").value;
    vSlider = document.getElementById("ContentPlaceHolder1_txtHdnSlider").value;
    //vRod = document.getElementById("ContentPlaceHolder1_txtHdnHorizontal").value
    vRod = document.getElementById("ContentPlaceHolder1_txtHdnRod").value;
    vSmall = document.getElementById("ContentPlaceHolder1_txtHdnSmallType").value;

    //ReverseItemClear(vTransport, vPressing, 1, vRod)
    ReverseItemClear(vTransport, vPressing, 1, vRod), vSmall;
    document.getElementById("ContentPlaceHolder1_lblRod").innerHTML = "";

    // 共通クリック処理
    onClickEvent(own);

    // 荷重表示の設定
    SelectloadEntryType();

    return false;
}
// ロッド押下処理
function imgbtnRod_onclick(own) {
    var grpForm = 2;

    // 画像変更
    //ImageChange(own, "");
    //ImageChange(own, "1");
    // グループ単位での画像変更
    ImageGroupChange(grpForm, own);
    //ストローク画像の変更
    ImageStrokeChange(document.getElementById("ContentPlaceHolder1_imgStroke"), own);

    var vTransport, vPressing, vSlider, vRod, vSmall
    vTransport = document.getElementById("ContentPlaceHolder1_txtHdnTransport").value;
    vPressing = document.getElementById("ContentPlaceHolder1_txtHdnPressing").value;
    vSlider = document.getElementById("ContentPlaceHolder1_txtHdnSlider").value;
    //vRod = document.getElementById("ContentPlaceHolder1_txtHdnHorizontal").value
    vRod = document.getElementById("ContentPlaceHolder1_txtHdnRod").value;
    vSmall = document.getElementById("ContentPlaceHolder1_txtHdnSmallType").value;

    //ReverseItemClear(vTransport, vPressing, vSlider, 1)
    ReverseItemClear(vTransport, vPressing, vSlider, 1, vSmall);

    // 共通クリック処理
    onClickEvent(own);

    // 荷重表示の設定
    //SelectloadEntryType();

    //var nowSrc = document.getElementById(own.id).src;
    //if (nowSrc.indexOf('_On') != -1) {
    //    setFormName("ECRequirementLinearGuideRod.aspx");
    //} else {
    //    setFormName("");
    //}
    setFormName(gcECRequirementLinearGuideRod);
    return false;
}

// 細小型押下処理
function imgbtnSmallType_onclick(own) {
    var grpForm = 2;

    // 画像変更
    ImageChange(own, "");
    // グループ単位での画像変更
    ImageGroupChange(grpForm, own);
    //ストローク画像の変更
    ImageStrokeChange(document.getElementById("ContentPlaceHolder1_imgStroke"), own);

    var vTransport, vPressing, vSlider, vRod, vSmall
    vTransport = document.getElementById("ContentPlaceHolder1_txtHdnTransport").value;
    vPressing = document.getElementById("ContentPlaceHolder1_txtHdnPressing").value;
    vSlider = document.getElementById("ContentPlaceHolder1_txtHdnSlider").value;
    vRod = document.getElementById("ContentPlaceHolder1_txtHdnRod").value;
    vSmall = document.getElementById("ContentPlaceHolder1_txtHdnSmallType").value;

    ReverseItemClear(vTransport, vPressing, vSlider, vRod, 1);
    document.getElementById("ContentPlaceHolder1_lblRod").innerHTML = "";

    // 共通クリック処理
    onClickEvent(own);

    // 荷重表示の設定
    SelectloadEntryType();

    return false;
}

// 水平押下処理
function imgbtnHorizontal_onclick(own) {
    var grpDirection = 3;

    // 搬送荷重入力(スライダ)が表示されている場合に値クリア
    var div_e_box_style;
    var div_m_box_style;
    div_e_box_style = document.getElementById("e-box").currentStyle || document.defaultView.getComputedStyle(document.getElementById("e-box"), '')
    div_m_box_style = document.getElementById("m-box").currentStyle || document.defaultView.getComputedStyle(document.getElementById("m-box"), '')
    if (div_e_box_style.display != "none") {
        // セッションのクリア
        ssChildClear(gcECRequirementLoadSlider);
        // 画面表示のクリア
        document.getElementById("ContentPlaceHolder1_lblLoad").value = "";
        document.getElementById("ContentPlaceHolder1_lblMoment").value = "";
    }
    if (div_m_box_style.display != "none") {
        // セッションのクリア
        ssChildClear(gcECRequirementRunningTime);
        // 画面表示のクリア
        document.getElementById("ContentPlaceHolder1_txtLoad_LST").value = "";
        document.getElementById("ContentPlaceHolder1_lblMomentST").value = "";
    }

    // 画像変更
    ImageChange(own, "");
    // グループ単位での画像変更
    ImageGroupChange(grpDirection, own);
    // 共通クリック処理
    onClickEvent(own);

    return false;
}

// 垂直押下処理
function imgbtnVertical_onclick(own) {
    var grpDirection = 3;

    // 搬送荷重入力(スライダ)が表示されている場合に値クリア
    var div_e_box_style;
    var div_m_box_style;
    div_e_box_style = document.getElementById("e-box").currentStyle || document.defaultView.getComputedStyle(document.getElementById("e-box"), '')
    div_m_box_style = document.getElementById("m-box").currentStyle || document.defaultView.getComputedStyle(document.getElementById("m-box"), '')
    if (div_e_box_style.display != "none") {
        // セッションのクリア
        ssChildClear(gcECRequirementLoadSlider);
        // 画面表示のクリア
        document.getElementById("ContentPlaceHolder1_lblLoad").value = "";
        document.getElementById("ContentPlaceHolder1_lblMoment").value = "";
    }
    if (div_m_box_style.display != "none") {
        // セッションのクリア
        ssChildClear(gcECRequirementRunningTime);
        // 画面表示のクリア
        document.getElementById("ContentPlaceHolder1_txtLoad_LST").value = "";
        document.getElementById("ContentPlaceHolder1_lblMomentST").value = "";
    }

    // 画像変更
    ImageChange(own, "");
    // グループ単位での画像変更
    ImageGroupChange(grpDirection, own);
    // 共通クリック処理
    onClickEvent(own);

    return false;
}

// ストローク変更処理
function txtStroke_onchange(own) {
        // 共通クリック処理   
        onClickEvent(own);
        //funCallBack(own, fncCheckStroke);
    return false;
}

function errorCheckString(own) {

    if (own.value.match(/[^0-9]+/i) != null) {
        return false;
    } else {
        return true;
    }
}

function checkStroke(own) {

    //var maxStroke, intTypeForm, intSlider, intRod,intStroke;
    var maxStroke, intTypeForm, intSlider, intRod, intSmallType, intGuide, intStroke;


    intSlider = document.getElementById("ContentPlaceHolder1_txtHdnSlider").value;
    intRod = document.getElementById("ContentPlaceHolder1_txtHdnRod").value;
    intSmallType = document.getElementById("ContentPlaceHolder1_txtHdnSmallType").value;
    if (sessionStorage.getItem(ssLinearGuideRod) != null) { intGuide = sessionStorage.getItem(ssLinearGuideRod); } else { intGuide = 0;}
    intStroke = own.value;
    //    intStroke = document.getElementById("ContentPlaceHolder1_txtStroke").value;

    //if (intSlider == 1 || intRod != 1) {
    //    intTypeForm = 1;
    //} else if (intSlider != 0 || intRod == 1) {
    //    intTypeForm = 2;
    //} else {
    //    intTypeForm = 0;
    //}
    if (intSlider == 1 ) {
        intTypeForm = 1;
    } else if ( intRod == 1) {
        if (intGuide == stateLG2) { intTypeForm = 4; } else { intTypeForm = 2; }
    } else if (intSmallType == 1) {
        intTypeForm = 3;
    }else{
        intTypeForm = 0;
    }
//  $.ajax({
//      type: "get",
//      datatype: "xml",
//      contentType: "text/xml; charset=utf-8",
//      url: ECMS_HOST_URL + "/WCF/srvECSelection.svc/SearchMaxStroke",
//      data: { vTypeForm: intTypeForm},
//  }).done(function (data) {
//
//      maxStroke = data.getElementsByTagName("STROKE")['0'].firstChild.nodeValue;
//
//      if (Number(intStroke) > Number(maxStroke)) {
//          document.getElementById("ContentPlaceHolder1_lblWarn1").innerHTML = "※";
//          document.getElementById("ContentPlaceHolder1_lblWarn2").innerHTML = "ストローク値が上限を超えています。"
//      } else if (document.getElementById("ContentPlaceHolder1_lblWarn2").innerHTML == "ストローク値が上限を超えています。") {
//          // ストロークのエラーが表示されていた場合のみクリア
//          document.getElementById("ContentPlaceHolder1_lblWarn1").innerHTML = "";
//          document.getElementById("ContentPlaceHolder1_lblWarn2").innerHTML = "";
//      }
//
//  }).fail(function (data, textStatus, errorThrown) {
//      // エラー時   
//      alert("Data cannot be retrieved. Please contact your system administrator.")
//  });
    return false;
}

// ストロークキーダウン時
function txtStroke_onkeydown(own) {
    var code = event.keyCode;

     if (code == 13) {

       // ENTERキーの場合
       //キー入力を無効にする
       event.returnValue = false;
       
             //次のボタン、またはテキストにフォーカス当てる
        if (document.getElementById("e-box").style.display != "none") {
            document.getElementById("ContentPlaceHolder1_imgbtnLoad").focus();
        }
        else {

            if (document.getElementById("j-box").style.display != "none") {
                document.getElementById("ContentPlaceHolder1_txtPress").focus();
            }
            else {
                document.getElementById("ContentPlaceHolder1_imgbtnLoad_LR").focus();
            }

       }
        return false;
       }

    event.returnValue = numOnly(own, own.value, false);
    return event.returnValue
    
}

function txtPress_onkeydown(own) {
        var code = event.keyCode;

        if (code == 13) {
            // ENTERキーの場合
            //キー入力を無効にする
            if (errorCheckString(own)) {
                onClickEvent(own);
            } else {
                event.returnValue = false;
                return false;
            }
        }
        event.returnValue = numOnly(own, own.value, false);
        return event.returnValue
}

// 荷重変更処理
function lblLoad_onchange(own) {
    // 共通クリック処理
    onClickEvent(own);
    return false;
}
// 押付変更処理
function txtPressingForce_onchange(own) {
    // 共通クリック処理

    onClickEvent(own);
    return false;
}

// ボタンコントロールでキー操作
function KeyDownButton(own) {
    var code = event.keyCode;
    if (code == 13) {
        // ENTERキーの場合
        //キー入力を無効にする
        event.returnValue = false;
        //クリックイベント発動
        //own.click();
        own.onclick();
        //document.getElementById(own.id).trigger("click");
        return false;
    }
}

// サイクルタイムコンボ選択
function imgbtnCycleTime_onchange(own) {

        // 画像変更
        ImageChange(own,"");

    return false;
}

// サイクルタイムコンボ選択
function imgbtnCycleTime_onclick(own) {

    var ctrlHopeOrFast
    ctrlHopeOrFast = document.getElementById("ContentPlaceHolder1_txtHdnCycleTimeHopeOrFastKbn")

    if (ctrlHopeOrFast.value != 1) {
        var grpForm = 4;

        // 画像変更 
        ImageChange(own, "");
        //　グループ単位での画像変更
        ImageGroupChange(grpForm, own);
    }
    // 共通クリック処理;
    onClickEvent(own);
    
    return false;
}

// 最速機種選択
function imgbtnFastest_onclick(own) {

    var ctrlHopeOrFast
    ctrlHopeOrFast = document.getElementById("ContentPlaceHolder1_txtHdnCycleTimeHopeOrFastKbn")


    if (ctrlHopeOrFast.value != 2) {
        var grpForm = 4;

        // 画像変更 
        ImageChange(own, "");
        //　グループ単位での画像変更
        ImageGroupChange(grpForm, own);
        ctrlHopeOrFast.value = 2;
        //希望サイクルタイム削除
        sessionStorage.removeItem(ssHopeCycleTime);
        document.getElementById("ContentPlaceHolder1_txtCycleTime").value = "";

    }
    // 共通クリック処理;
    onClickEvent(own);

    return false;
}

// ワンサイズダウン
function imgBtnRankDown_onclick(){

    //画面に値設定・セッションに値を受け渡し
    RankUpDown()

    //ランクダウン非表示
    document.getElementById("ContentPlaceHolder1_imgBtnRankDown").style.display = "none";

    //ランクアップ表示
    document.getElementById("ContentPlaceHolder1_imgBtnRankUp").style.display = "inline-block";

    return false;
}

// ワンサイズアップ
function imgBtnRankUp_onclick(){

    //画面に値設定・セッションに値を受け渡し
    RankUpDown()

    //ランクダウン非表示
    document.getElementById("ContentPlaceHolder1_imgBtnRankDown").style.display = "inline-block";

    //ランクアップ表示
    document.getElementById("ContentPlaceHolder1_imgBtnRankUp").style.display = "none";

    return false;
}

function RankUpDown() {

    var tmpCalcCycleTime, tmpCalcMoment, tmpCalcDistance, tmpCalcLife, tmpPrice, tmpSeries, tmpType, tmpImagName, tmpFullName

    //モーメント
    document.getElementById("ContentPlaceHolder1_lblMoment").value = sessionStorage.getItem(ssDownCalcMoment);
    //推奨機種
    document.getElementById("ContentPlaceHolder1_lblRecommendModelName").innerHTML = sessionStorage.getItem(ssDownFullName);
    //標準価格
    document.getElementById("ContentPlaceHolder1_lblRecommendPrice").innerHTML = "\\" + setComma(parseInt(sessionStorage.getItem(ssDownPrice)), true, false);
    //サイクルタイム
    document.getElementById("ContentPlaceHolder1_lblRecommendCycleTime").innerHTML = sessionStorage.getItem(ssDownCalcCycleTime) + " s";
    //寿命予測計算
    document.getElementById("ContentPlaceHolder1_lblRecommendLife").innerHTML = sessionStorage.getItem(ssDownCalcLife);
    document.getElementById("ContentPlaceHolder1_txtLife").value = sessionStorage.getItem(ssDownCalcLife);

    //走行距離寿命
    if (sessionStorage.getItem(ssDownCalcDistance) != 0) {
        document.getElementById("ContentPlaceHolder1_lblRecommendDistance").innerHTML = setComma(sessionStorage.getItem(ssDownCalcDistance), true, false) + 'km';
    } else {
        document.getElementById("ContentPlaceHolder1_lblRecommendDistance").innerHTML = "";
    }

    //document.getElementById("ContentPlaceHolder1_lblRecommendDistance").innerHTML = sessionStorage.getItem(ssDownCalcDistance);
    // 画像設定
    document.getElementById("ContentPlaceHolder1_imgRecommendModel").src = sessionStorage.getItem(ssDownImgName);

    //シリーズ
    tmpSeries = sessionStorage.getItem(ssSelectSeries);
    sessionStorage.setItem(ssSelectSeries, sessionStorage.getItem(ssDownSeries));
    sessionStorage.setItem(ssDownSeries, tmpSeries);

    //タイプ
    tmpType = sessionStorage.getItem(ssSelectType);
    sessionStorage.setItem(ssSelectType, sessionStorage.getItem(ssDownType));
    sessionStorage.setItem(ssDownType, tmpType);

    //金額
    tmpPrice = sessionStorage.getItem(ssPrice);
    sessionStorage.setItem(ssPrice, sessionStorage.getItem(ssDownPrice));
    sessionStorage.setItem(ssDownPrice, tmpPrice);

    //画像
    tmpImagName = sessionStorage.getItem(ssImgName);
    sessionStorage.setItem(ssImgName, sessionStorage.getItem(ssDownImgName));
    sessionStorage.setItem(ssDownImgName, tmpImagName);

    //機種名
    tmpFullName = sessionStorage.getItem(ssFullName);
    sessionStorage.setItem(ssFullName, sessionStorage.getItem(ssDownFullName));
    sessionStorage.setItem(ssDownFullName, tmpFullName);

    //サイクルタイム
    tmpCalcCycleTime = sessionStorage.getItem(ssCalcCycleTime);
    sessionStorage.setItem(ssCalcCycleTime, sessionStorage.getItem(ssDownCalcCycleTime));
    sessionStorage.setItem(ssDownCalcCycleTime, tmpCalcCycleTime);

    //モーメント
    tmpCalcMoment = sessionStorage.getItem(ssCalcMoment);
    sessionStorage.setItem(ssCalcMoment, sessionStorage.getItem(ssDownCalcMoment));
    sessionStorage.setItem(ssDownCalcMoment, tmpCalcMoment);

    //走行距離
    tmpCalcDistance = sessionStorage.getItem(ssCalcDistance);
    sessionStorage.setItem(ssCalcDistance, sessionStorage.getItem(ssDownCalcDistance));
    sessionStorage.setItem(ssDownCalcDistance, tmpCalcDistance);

    //寿命
    tmpCalcLife = sessionStorage.getItem(ssCalcLife);
    sessionStorage.setItem(ssCalcLife, sessionStorage.getItem(ssDownCalcLife));
    sessionStorage.setItem(ssDownCalcLife, tmpCalcLife);


}

function createParam() {
    var param;
    var t;
    var p;
    var sd;
    var rd;
    var sm;
    var hz;
    var vt;
    var l;
    var r;
    var w;
    var g;
    var hc;
    var cc;
    var hl;
    var cl;
    var cm;
    var cd;
    var rt;
    var ot;
    var od;
    var ss;
    var st;
    var ssk;
    var lg;
 
    if (sessionStorage.getItem(ssTransport) != null && $.trim(sessionStorage.getItem(ssTransport)) != '') {
        t = sessionStorage.getItem(ssTransport);
    } else {
        t = 0;
    }
    if (sessionStorage.getItem(ssPressing) != null && $.trim(sessionStorage.getItem(ssPressing)) != '') {
        p = sessionStorage.getItem(ssPressing);
    } else {
        p = 0;
    }
    if (sessionStorage.getItem(ssSlider) != null && $.trim(sessionStorage.getItem(ssSlider)) != '') {
        sd = sessionStorage.getItem(ssSlider);
    } else {
        sd = 0;
    }
    if (sessionStorage.getItem(ssRod) != null && $.trim(sessionStorage.getItem(ssRod)) != '') {
        rd = sessionStorage.getItem(ssRod);
    } else {
        rd = 0;
    }
    if (sessionStorage.getItem(ssSmallType) != null && $.trim(sessionStorage.getItem(ssSmallType)) != '') {
        sm = sessionStorage.getItem(ssSmallType);
    } else {
        sm = 0;
    }
    if (sessionStorage.getItem(ssHorizontal) != null && $.trim(sessionStorage.getItem(ssHorizontal)) != '') {
        hz = sessionStorage.getItem(ssHorizontal);
    } else {
        hz = 0;
    }
    if (sessionStorage.getItem(ssVertical) != null && $.trim(sessionStorage.getItem(ssVertical)) != '') {
        vt = sessionStorage.getItem(ssVertical);
    } else {
        vt = 0;
    }
    if (sessionStorage.getItem(ssLoad) != null && $.trim(sessionStorage.getItem(ssLoad)) != '') {
        l = sessionStorage.getItem(ssLoad);
    } else {
        l = 0;
    }
    if (sessionStorage.getItem(ssStroke) != null && $.trim(sessionStorage.getItem(ssStroke)) != '') {
        r = sessionStorage.getItem(ssStroke);
    } else {
        r = 0;
    }
    if (sessionStorage.getItem(ssWorkLoadingState) != null && $.trim(sessionStorage.getItem(ssWorkLoadingState)) != '') {
        w = sessionStorage.getItem(ssWorkLoadingState);
    } else {
        w = 0;
    }
    if (sessionStorage.getItem(ssGrvCntrPosition) != null && $.trim(sessionStorage.getItem(ssGrvCntrPosition)) != '') {
        g = sessionStorage.getItem(ssGrvCntrPosition);
    } else {
        g = 0;
    }
    if (sessionStorage.getItem(ssHopeCycleTime) != null && $.trim(sessionStorage.getItem(ssHopeCycleTime)) != '') {
        hc = sessionStorage.getItem(ssHopeCycleTime);
    } else {
        hc = 0;
    }
    if (sessionStorage.getItem(ssCalcCycleTime) != null && $.trim(sessionStorage.getItem(ssCalcCycleTime)) != '') {
        cc = sessionStorage.getItem(ssCalcCycleTime);
    } else {
        cc = 0;
    }
    if (sessionStorage.getItem(ssHopeLife) != null && $.trim(sessionStorage.getItem(ssHopeLife)) != '') {
        hl = sessionStorage.getItem(ssHopeLife);
    } else {
        hl = 0;
    }
    if (sessionStorage.getItem(ssCalcLife) != null && $.trim(sessionStorage.getItem(ssCalcLife)) != '') {
        cl = sessionStorage.getItem(ssCalcLife);
    } else {
        cl = "";
    }
    if (sessionStorage.getItem(ssCalcMoment) != null && $.trim(sessionStorage.getItem(ssCalcMoment)) != '') {
        cm = sessionStorage.getItem(ssCalcMoment);
    } else {
        cm = 0;
    }
    if (sessionStorage.getItem(ssCalcDistance) != null && $.trim(sessionStorage.getItem(ssCalcDistance)) != '') {
        cd = sessionStorage.getItem(ssCalcDistance);
    } else {
        cd = 0;
    }
    if (sessionStorage.getItem(ssRoundTrip) != null && $.trim(sessionStorage.getItem(ssRoundTrip)) != '') {
        rt = sessionStorage.getItem(ssRoundTrip);
    } else {
        rt = 0;
    }
    if (sessionStorage.getItem(ssOperatingTime) != null && $.trim(sessionStorage.getItem(ssOperatingTime)) != '') {
        ot = sessionStorage.getItem(ssOperatingTime);
    } else {
        ot = 0;
    }
    if (sessionStorage.getItem(ssOperatingDay) != null && $.trim(sessionStorage.getItem(ssOperatingDay)) != '') {
        od = sessionStorage.getItem(ssOperatingDay);
    } else {
        od = 0;
    }
    if (sessionStorage.getItem(ssSpeed) != null && $.trim(sessionStorage.getItem(ssSpeed)) != '') {
        sp = sessionStorage.getItem(ssSpeed);
    } else {
        sp = 0;
    }
    if (sessionStorage.getItem(ssAcceleration) != null && $.trim(sessionStorage.getItem(ssAcceleration)) != '') {
        ac = sessionStorage.getItem(ssAcceleration);
    } else {
        ac = 0;
    }
    if (sessionStorage.getItem(ssSelectSeries) != null) {
        ss = sessionStorage.getItem(ssSelectSeries);
    } else {
        ss = '';
    }
    if (sessionStorage.getItem(ssSelectType) != null) {
        st = sessionStorage.getItem(ssSelectType);
    } else {
        st = '';
    }
    if (sessionStorage.getItem(ssSelectStroke) != null) {
        ssk = sessionStorage.getItem(ssSelectStroke);
    } else {
        ssk = '';
    }

    //リニアガイドの選択状態を取得
    lg = GetLinearGuide();

    // 仕様書に受け渡す値をすべてパラメータに設定
    param = '?RS=1';
    param += '&F=' + gcECRequirementSelection;
    param += '&T=' + t;
    param += '&P=' + p;
    param += '&SD=' + sd;
    param += '&RD=' + rd;
    param += '&SM=' + sm;
    param += '&HZ=' + hz;
    param += '&VT=' + vt;
    param += '&L=' + l;
    param += '&R=' + r;
    param += '&W=' + w;
    param += '&G=' + g;
    param += '&HC=' + hc;
    param += '&CC=' + cc;
    param += '&HL=' + hl;
    param += '&CL=' + cl;
    param += '&CM=' + cm;
    param += '&CD=' + cd;
    param += '&RT=' + rt;
    param += '&OT=' + ot;
    param += '&OD=' + od;
    param += '&SP=' + sp;
    param += '&AC=' + ac;
    param += '&SS=' + ss;
    param += '&ST=' + st;
    param += '&SSK=' + ssk;
    param += '&LG=' + encodeURIComponent(lg);

    return param;
}

//リニアガイドの選択状態を渡す
function GetLinearGuide() {

    var vResult = '';

    //ロッドのリニアガイドを確認する
    if (sessionStorage.getItem(ssLinearGuideRod) == 1) {
        vResult = 'ロッド　標準タイプ'
    } else if (sessionStorage.getItem(ssLinearGuideRod) == 2) {
        vResult = 'ロッド　ラジアルシリンダー'
    } else if (sessionStorage.getItem(ssLinearGuideRod) == 3) {
        vResult = 'ロッド　防水型'
    };

    //細小型のリニアガイドを確認する
    if (sessionStorage.getItem(ssLinearGuideSmall) == 1) {
        vResult = 'ロッド　標準タイプ'
    } else if (sessionStorage.getItem(ssLinearGuideSmall) == 2) {
        vResult = 'ロッド　ボールプッシュシングルガイド'
    } else if (sessionStorage.getItem(ssLinearGuideSmall) == 3) {
        vResult = 'ロッド　ボールプッシュダブルガイド'
    } else if (sessionStorage.getItem(ssLinearGuideSmall) == 4) {
        vResult = 'TCテーブル　2列リニアガイド'
    } else if (sessionStorage.getItem(ssLinearGuideSmall) == 5) {
        vResult = 'TWテーブル　2列リニアガイド'
    };

    if (vResult == '') {
        vResult = 'なし'
    }

    return vResult

};


function imgbtnDetail_onclick() {
    var param;

    // パラメータ生成
    param = createParam();

    // 画面呼び出し
    window.open(gcECSpec + param, '_blank');

    return false;
}

// オプションケーブル長選択押下処理
function imgbtnOptionCable_onclick() {
    var param;

    // パラメータ生成
    param = createParam();

    // 画面呼び出し
    window.open(gcECTypeSelection + param,'_self');

    return false;

}

// グループでのOnOffを切り替える
function ImageGroupChange(Group, own) {
    var grpUse       = 1;
    var grpForm      = 2;
    var grpDirection = 3;
    var grpCycletime = 4;
    var off = 2;

    // 自身以外のチェックを外す
    switch (Group) {
        case grpUse:
            // 搬送
            if (own.id != document.getElementById("ContentPlaceHolder1_imgbtnTransport").id) {
                ImageChange(document.getElementById("ContentPlaceHolder1_imgbtnTransport"), off);

                // チェックがOnの場合のみ、隠し項目の値を変更
                if (document.getElementById("ContentPlaceHolder1_txtHdnTransport").value == "1") {
                    document.getElementById("ContentPlaceHolder1_txtHdnTransport").value = 0;
                }
            }
            // 押付
            if (own.id != document.getElementById("ContentPlaceHolder1_imgbtnPressing").id) {
                ImageChange(document.getElementById("ContentPlaceHolder1_imgbtnPressing"), off);

                // チェックがOnの場合のみ、隠し項目の値を変更
                if (document.getElementById("ContentPlaceHolder1_txtHdnPressing").value == "1") {
                    document.getElementById("ContentPlaceHolder1_txtHdnPressing").value = 0;
                    PressingChange(document.getElementById("ContentPlaceHolder1_txtHdnPressing").value);
                }
            }

            break;
        case grpForm:
            // スライダ
            if (own.id != document.getElementById("ContentPlaceHolder1_imgbtnSlider").id) {
                ImageChange(document.getElementById("ContentPlaceHolder1_imgbtnSlider"), off);

                // チェックがOnの場合のみ、隠し項目の値を変更
                if (document.getElementById("ContentPlaceHolder1_txtHdnSlider").value == "1") {
                    document.getElementById("ContentPlaceHolder1_txtHdnSlider").value = 0;
                }
            }
            // ロッド
            if (own.id != document.getElementById("ContentPlaceHolder1_imgbtnRod").id) {
                ImageChange(document.getElementById("ContentPlaceHolder1_imgbtnRod"), off);
                //RodImageChange(off);

                // チェックがOnの場合のみ、隠し項目の値を変更
                if (document.getElementById("ContentPlaceHolder1_txtHdnRod").value == "1") {
                    document.getElementById("ContentPlaceHolder1_txtHdnRod").value = 0;
                }
            }
            // 細小型
            if (own.id != document.getElementById("ContentPlaceHolder1_imgbtnSmallType").id) {
                ImageChange(document.getElementById("ContentPlaceHolder1_imgbtnSmallType"), off);

                // チェックがOnの場合のみ、隠し項目の値を変更
                if (document.getElementById("ContentPlaceHolder1_txtHdnSmallType").value == "1") {
                    document.getElementById("ContentPlaceHolder1_txtHdnSmallType").value = 0;
                }
            }

            break;
        case grpDirection:
            // 水平
            if (own.id != document.getElementById("ContentPlaceHolder1_imgbtnHorizontal").id) {
                ImageChange(document.getElementById("ContentPlaceHolder1_imgbtnHorizontal"), off);

                // チェックがOnの場合のみ、隠し項目の値を変更
                if (document.getElementById("ContentPlaceHolder1_txtHdnHorizontal").value == "1") {
                    document.getElementById("ContentPlaceHolder1_txtHdnHorizontal").value = 0;
                }
            }
            // 垂直
            if (own.id != document.getElementById("ContentPlaceHolder1_imgbtnVertical").id) {
                ImageChange(document.getElementById("ContentPlaceHolder1_imgbtnVertical"), off);

                // チェックがOnの場合のみ、隠し項目の値を変更
                if (document.getElementById("ContentPlaceHolder1_txtHdnVertical").value == "1") {
                    document.getElementById("ContentPlaceHolder1_txtHdnVertical").value = 0;
                }
            }

            break;
        case grpCycletime:
            // 希望
            if (own.id != document.getElementById("ContentPlaceHolder1_imgbtnCycleTime").id) {
                ImageChange(document.getElementById("ContentPlaceHolder1_imgbtnCycleTime"), off);

                // チェックがOnの場合のみ、隠し項目の値を変更
                if (document.getElementById("ContentPlaceHolder1_txtHdnCycleTimeHopeOrFastKbn").value == "1") {
                    document.getElementById("ContentPlaceHolder1_txtHdnCycleTimeHopeOrFastKbn").value = 0;
                }
            }
            // 最速
            if (own.id != document.getElementById("ContentPlaceHolder1_imgbtnFastest").id) {
                ImageChange(document.getElementById("ContentPlaceHolder1_imgbtnFastest"), off);

                // チェックがOnの場合のみ、隠し項目の値を変更
                if (document.getElementById("ContentPlaceHolder1_txtHdnCycleTimeHopeOrFastKbn").value == "2") {
                    document.getElementById("ContentPlaceHolder1_txtHdnCycleTimeHopeOrFastKbn").value = 0;
                }
            }
            break;
    }

}

//対になる項目セッションを削除
function ReverseItemClear(vTransport, vPressing, vSlider, vRod, vSmall) {

    //搬送の場合：
    if (sessionStorage.getItem(ssLoad) != null) { sessionStorage.removeItem(ssLoad); }
    document.getElementById("ContentPlaceHolder1_lblLoad").value = "";
    document.getElementById("ContentPlaceHolder1_txtLoad_LR").value = "";
    document.getElementById("ContentPlaceHolder1_txtLoad_LST").value = "";
    document.getElementById("ContentPlaceHolder1_txtPressR").value = "";


    if ( vPressing != 1) {
        if (sessionStorage.getItem(ssPressingForce) != null) { sessionStorage.removeItem(ssPressingForce); }

        //スライダーの場合：
        if (vSlider == 1 && vRod != 1 && vSmall != 1) {

            if (sessionStorage.getItem(ssLinearGuideRod) != null) { sessionStorage.removeItem(ssLinearGuideRod); }
            if (sessionStorage.getItem(ssOffSetDistance) != null) { sessionStorage.removeItem(ssOffSetDistance); }
            if (sessionStorage.getItem(ssOverhangDistance) != null) { sessionStorage.removeItem(ssOverhangDistance); }
            if (sessionStorage.getItem(ssLinearGuideSmall) != null) { sessionStorage.removeItem(ssLinearGuideSmall); }
            if (sessionStorage.getItem(ssGrvCntrXPosition) != null) {sessionStorage.removeItem(ssGrvCntrXPosition); }
            if (sessionStorage.getItem(ssGrvCntrYPosition) != null) {sessionStorage.removeItem(ssGrvCntrYPosition); }
            if (sessionStorage.getItem(ssGrvCntrZPosition) != null) {sessionStorage.removeItem(ssGrvCntrZPosition); }

            document.getElementById("ContentPlaceHolder1_txtLoad_LR").value = "";
            document.getElementById("ContentPlaceHolder1_txtLoad_LST").value = "";
            document.getElementById("ContentPlaceHolder1_lblMomentST").value = "";


        } else if (vSlider != 1 && vRod == 1 && vSmall != 1) {
            //ロッドの場合：

            if (sessionStorage.getItem(ssLinearGuideSmall) != null) { sessionStorage.removeItem(ssLinearGuideSmall); }
            if (sessionStorage.getItem(ssGrvCntrPosition) != null) { sessionStorage.removeItem(ssGrvCntrPosition); }
            if (sessionStorage.getItem(ssGrvCntrXPosition) != null) { sessionStorage.removeItem(ssGrvCntrXPosition); }
            if (sessionStorage.getItem(ssGrvCntrYPosition) != null) {sessionStorage.removeItem(ssGrvCntrYPosition); }
            if (sessionStorage.getItem(ssGrvCntrZPosition) != null) {sessionStorage.removeItem(ssGrvCntrZPosition); }
            if (sessionStorage.getItem(ssWorkLoadingState) != null) { sessionStorage.removeItem(ssWorkLoadingState); }

            document.getElementById("ContentPlaceHolder1_txtLoad_LST").value = "";
            document.getElementById("ContentPlaceHolder1_lblMomentST").value = "";
            document.getElementById("ContentPlaceHolder1_lblMoment").value = "";
            document.getElementById("ContentPlaceHolder1_lblLoad").value = "";

        } else if (vSlider != 1 && vRod != 1 && vSmall == 1) {
            //細小型の場合：

            if (sessionStorage.getItem(ssLinearGuideRod) != null) { sessionStorage.removeItem(ssLinearGuideRod); }
            if (sessionStorage.getItem(ssOffSetDistance) != null) { sessionStorage.removeItem(ssOffSetDistance); }
            if (sessionStorage.getItem(ssOverhangDistance) != null) { sessionStorage.removeItem(ssOverhangDistance); }
            if (sessionStorage.getItem(ssGrvCntrPosition) != null) {sessionStorage.removeItem(ssGrvCntrPosition); }

            document.getElementById("ContentPlaceHolder1_txtLoad_LR").value = "";
            document.getElementById("ContentPlaceHolder1_lblMoment").value = "";
            document.getElementById("ContentPlaceHolder1_lblLoad").value = "";

        }


    } else if (vTransport != 1 && vPressing == 1) {
        //押付けの場合：

        if (sessionStorage.getItem(ssGrvCntrPosition) != null) { sessionStorage.removeItem(ssGrvCntrPosition); }
        if (sessionStorage.getItem(ssGrvCntrXPosition) != null) {sessionStorage.removeItem(ssGrvCntrXPosition); }
        if (sessionStorage.getItem(ssGrvCntrYPosition) != null) {sessionStorage.removeItem(ssGrvCntrYPosition); }
        if (sessionStorage.getItem(ssGrvCntrZPosition) != null) { sessionStorage.removeItem(ssGrvCntrZPosition); }
        if (sessionStorage.getItem(ssWorkLoadingState) != null) { sessionStorage.removeItem(ssWorkLoadingState); }
        document.getElementById("ContentPlaceHolder1_txtLoad_LR").value = "";
        document.getElementById("ContentPlaceHolder1_txtCycleTime").value = "";
        document.getElementById("ContentPlaceHolder1_txtLife").value = "";
        document.getElementById("ContentPlaceHolder1_lblMoment").value = "";

        //ロッドの場合：
        if (vRod == 1 && vSmall != 1) {
            if (sessionStorage.getItem(ssLinearGuideSmall) != null) { sessionStorage.removeItem(ssLinearGuideSmall); }

        } else if (vRod != 1 && vSmall == 1) {
            //細小型の場合：
            if (sessionStorage.getItem(ssLinearGuideRod) != null) { sessionStorage.removeItem(ssLinearGuideRod); }
        }

    } else {

    }

}
