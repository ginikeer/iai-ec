/// <reference path="ECRequirementLoadSmall.js" />
// 初期処理
var WorkLoadingState;
var LinearGuideSmall;

// セッションの値を取得し、変数に格納する
var wkStdLife = 0;
var wkSpeed = 0;
var wkStroke = 0;
var wkLoad = 0;
var wkGrvCntrXPosition = 0;
var wkGrvCntrYPosition = 0;
var wkGrvCntrZPosition = 0;
var wkDirection = 0;
var offFlg = false;

if(sessionStorage.getItem(ssStdLife) != null){
    wkStdLife       = sessionStorage.getItem(ssStdLife);
}
if(sessionStorage.getItem(ssSpeed) != null){
    wkSpeed         = sessionStorage.getItem(ssSpeed);
}
if (sessionStorage.getItem(ssStroke) != null) {
    wkStroke = sessionStorage.getItem(ssStroke);
}
if (sessionStorage.getItem(ssLoad) != null) {
    wkLoad = sessionStorage.getItem(ssLoad);
}
if (sessionStorage.getItem(ssGrvCntrXPosition) != null) {
    wkGrvCntrXPosition = sessionStorage.getItem(ssGrvCntrXPosition);
}
if (sessionStorage.getItem(ssGrvCntrYPosition) != null) {
    wkGrvCntrYPosition = sessionStorage.getItem(ssGrvCntrYPosition);
    }
if (sessionStorage.getItem(ssGrvCntrZPosition) != null) {
    wkGrvCntrZPosition = sessionStorage.getItem(ssGrvCntrZPosition);
    }
if (sessionStorage.getItem(ssDirection) != null) {
    wkDirection = sessionStorage.getItem(ssDirection);
}
if (sessionStorage.getItem(ssLinearGuideSmall) != null) {
    LinearGuideSmall = sessionStorage.getItem(ssLinearGuideSmall)
    offFlg = false;

    switch (Number(LinearGuideSmall)) {
        case stateST_RP:
            ImageChangeGuide(document.getElementById("ContentPlaceHolder1_imgSmallTypeRP"), stateST_RP);
            break;
        case stateST_GS:
            ImageChangeGuide(document.getElementById("ContentPlaceHolder1_imgSmallTypeGS"), stateST_GS);
            break;
        case stateST_GD:
            ImageChangeGuide(document.getElementById("ContentPlaceHolder1_imgSmallTypeGD"), stateST_GD);
            break;
        case stateST_TC:
            ImageChangeGuide(document.getElementById("ContentPlaceHolder1_imgSmallTypeTC"), stateST_TC);
            break;
        case stateST_TW:
            ImageChangeGuide(document.getElementById("ContentPlaceHolder1_imgSmallTypeTW"), stateST_TW);
            break;
        default:
            offFlg = true;
            break;
    }
} else {
    offFlg = true;
}

if (sessionStorage.getItem(ssWorkLoadingState) != null){
    WorkLoadingState = sessionStorage.getItem(ssWorkLoadingState)

    switch(WorkLoadingState){
        case "1":
            ImageChange(document.getElementById("ContentPlaceHolder1_imgWorkLoadState1"), 1);
            break;
        case "2":
            ImageChange(document.getElementById("ContentPlaceHolder1_imgWorkLoadState2"), 2);
            break;
        case "3":
            ImageChange(document.getElementById("ContentPlaceHolder1_imgWorkLoadState3"), 3);
            break;
    } 

}

// コントロールの使用不可

if (wkDirection == 0) {
    document.getElementById("ContentPlaceHolder1_imgWorkLoadState2").disabled = true;    
}else if (wkDirection == 1){
    document.getElementById("ContentPlaceHolder1_imgWorkLoadState1").disabled = true;
    document.getElementById("ContentPlaceHolder1_imgWorkLoadState3").disabled = true;

}

if (typeof wkLoad.match !== "undefined") {

    if (wkLoad.match(/,/) != null) {
        wkLoad = wkLoad.replace(/,/g, '');
    }
}

CtrlEditChange(LinearGuideSmall, offFlg);

if (wkLoad > 0) {
    document.getElementById("ContentPlaceHolder1_numConditionLoad").value = parseFloat(wkLoad).toLocaleString();
}
if (wkGrvCntrXPosition > 0) {
    document.getElementById("ContentPlaceHolder1_numConditionGravityCenterXPosition").value = wkGrvCntrXPosition;
}
if (wkGrvCntrYPosition > 0) {
    document.getElementById("ContentPlaceHolder1_numConditionGravityCenterYPosition").value = wkGrvCntrYPosition;
}
if (wkGrvCntrZPosition > 0) {
    document.getElementById("ContentPlaceHolder1_numConditionGravityCenterZPosition").value = wkGrvCntrZPosition;
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
        //own.onclick();
        //document.getElementById(own.id).trigger("click");
        return false;
    }
}

function dummyFunc() {
    return false;
}

// 画像の変更
function ImageChangeGuide(own, state) {
    var nowSrc = document.getElementById(own.id).src;
    var afterSrc;

    var offSrc1;
    var offSrc2;
    var offSrc3;
    var offSrc4;
    var offSrc5;

    with (document) {

        // OnとOffで画像を切り替える
        if (nowSrc.indexOf('_On') != -1) {
            afterSrc = nowSrc.replace(/On/g, "Off");
            getElementById(own.id).src = afterSrc;
            offFlg = true;
            // 取付方向の値設定
        } else {
            // すべての選択状態を一旦解除
            offSrc1 = (getElementById("ContentPlaceHolder1_imgSmallTypeRP").src).replace(/On/g, "Off");
            offSrc2 = (getElementById("ContentPlaceHolder1_imgSmallTypeGS").src).replace(/On/g, "Off");
            offSrc3 = (getElementById("ContentPlaceHolder1_imgSmallTypeGD").src).replace(/On/g, "Off");
            offSrc4 = (getElementById("ContentPlaceHolder1_imgSmallTypeTC").src).replace(/On/g, "Off");
            offSrc5 = (getElementById("ContentPlaceHolder1_imgSmallTypeTW").src).replace(/On/g, "Off");

            getElementById("ContentPlaceHolder1_imgSmallTypeRP").src = offSrc1
            getElementById("ContentPlaceHolder1_imgSmallTypeGS").src = offSrc2
            getElementById("ContentPlaceHolder1_imgSmallTypeGD").src = offSrc3
            getElementById("ContentPlaceHolder1_imgSmallTypeTC").src = offSrc4
            getElementById("ContentPlaceHolder1_imgSmallTypeTW").src = offSrc5

            // 画像を選択状態にする
            afterSrc = nowSrc.replace(/Off/g, "On");
            getElementById(own.id).src = afterSrc;
            // 取付方向の値設定

            offFlg = false;
        }
    }
    CtrlEditChange(state, offFlg);
    LinearGuideSmall = state;

    // 再計算
    calc();

    return false;
}

// コントロールの使用設定
function CtrlEditChange(state, offFlg) {
    with (document) {
        //ガイド方式をOFFにした場合、2列リニアガードを選択した場合はコントロールを使用可能にする
        if (offFlg || state == stateST_TC || state == stateST_TW) {
            document.getElementById("ContentPlaceHolder1_numConditionGravityCenterXPosition").disabled = false;
            document.getElementById("ContentPlaceHolder1_numConditionGravityCenterYPosition").disabled = false;
            document.getElementById("ContentPlaceHolder1_numConditionGravityCenterZPosition").disabled = false;
            if (wkDirection == 0) {
                document.getElementById("ContentPlaceHolder1_imgWorkLoadState1").disabled = false;
                document.getElementById("ContentPlaceHolder1_imgWorkLoadState3").disabled = false;
            } else if (wkDirection == 1) {

                document.getElementById("ContentPlaceHolder1_imgWorkLoadState2").disabled = false;
                if (sessionStorage.getItem(ssWorkLoadingState) != null) {
                } else {
                    if (state == 4 || state == 5) {
                        if (WorkLoadingState != 2) {
                            //選択済みとする
                            ImageChange(document.getElementById("ContentPlaceHolder1_imgWorkLoadState2"), 2);
                        }
                    }
                }
            }
        } else {
            // ガイド方式がONで2列リニアガード以外を選択した場合はコントロールを使用不可にする
            offSrc1 = (getElementById("ContentPlaceHolder1_imgWorkLoadState1").src).replace(/On/g, "Off");
            offSrc2 = (getElementById("ContentPlaceHolder1_imgWorkLoadState2").src).replace(/On/g, "Off");
            offSrc3 = (getElementById("ContentPlaceHolder1_imgWorkLoadState3").src).replace(/On/g, "Off");          

            getElementById("ContentPlaceHolder1_imgWorkLoadState1").src = offSrc1;
            getElementById("ContentPlaceHolder1_imgWorkLoadState2").src = offSrc2;
            getElementById("ContentPlaceHolder1_imgWorkLoadState3").src = offSrc3;
            
            document.getElementById("ContentPlaceHolder1_imgWorkLoadState1").disabled = true;
            document.getElementById("ContentPlaceHolder1_imgWorkLoadState2").disabled = true;
            document.getElementById("ContentPlaceHolder1_imgWorkLoadState3").disabled = true;            
            document.getElementById("ContentPlaceHolder1_numConditionGravityCenterXPosition").value = "";
            document.getElementById("ContentPlaceHolder1_numConditionGravityCenterXPosition").disabled = true;
            document.getElementById("ContentPlaceHolder1_numConditionGravityCenterYPosition").value = "";
            document.getElementById("ContentPlaceHolder1_numConditionGravityCenterYPosition").disabled = true;
            document.getElementById("ContentPlaceHolder1_numConditionGravityCenterZPosition").value = "";
            document.getElementById("ContentPlaceHolder1_numConditionGravityCenterZPosition").disabled = true;
            WorkLoadingState = 0;
        }

    }
}


// 画像の変更
function ImageChange(own,state) {
    var nowSrc = document.getElementById(own.id).src;
    var afterSrc;

    var offSrc1;
    var offSrc2;
    var offSrc3;

    with(document){

        // OnとOffで画像を切り替える
        if (nowSrc.indexOf('_On') != -1) {
            afterSrc = nowSrc.replace(/On/g, "Off");
            getElementById(own.id).src = afterSrc;
            // 取付方向の値設定
        } else {
            // すべての選択状態を一旦解除
            offSrc1 = (getElementById("ContentPlaceHolder1_imgWorkLoadState1").src).replace(/On/g, "Off");
            offSrc2 = (getElementById("ContentPlaceHolder1_imgWorkLoadState2").src).replace(/On/g, "Off");
            offSrc3 = (getElementById("ContentPlaceHolder1_imgWorkLoadState3").src).replace(/On/g, "Off");

            getElementById("ContentPlaceHolder1_imgWorkLoadState1").src = offSrc1
            getElementById("ContentPlaceHolder1_imgWorkLoadState2").src = offSrc2
            getElementById("ContentPlaceHolder1_imgWorkLoadState3").src = offSrc3

            // 画像を選択状態にする
            afterSrc = nowSrc.replace(/Off/g, "On");
            getElementById(own.id).src = afterSrc;
            // 取付方向の値設定
        }
    }

    WorkLoadingState = state;

    // 再計算
    calc();

    return false;
}

// モーメント計算
function calc() {
    var Load = 0;
    var GrvCntrXPosition = 0;
    var GrvCntrYPosition = 0;
    var GrvCntrZPosition = 0;

    var calcResult = 0;

    with (document) {
        var ctrLoad = getElementById("ContentPlaceHolder1_numConditionLoad");
        var ctrGrvCntrXPosition = getElementById("ContentPlaceHolder1_numConditionGravityCenterXPosition");
        var ctrGrvCntrYPosition = getElementById("ContentPlaceHolder1_numConditionGravityCenterYPosition");
        var ctrGrvCntrZPosition = getElementById("ContentPlaceHolder1_numConditionGravityCenterZPosition");
    }
    var parentWin = window.parent;
    var parentbtn = parentWin.document.getElementById("ContentPlaceHolder1_imgbtnDecision");
    var ctlError = document.getElementById("ContentPlaceHolder1_lblError")

    Load = ctrLoad.value;
    GrvCntrXPosition = ctrGrvCntrXPosition.value;
    GrvCntrYPosition = ctrGrvCntrYPosition.value;
    GrvCntrZPosition = ctrGrvCntrZPosition.value;

    if (Load.match(/[^0-9,.]+/i) != null) {
        alert('输入的负载有误，\n请重新输入')
        ctrLoad.value = '';
        ctrLoad.focus();
    }

    //XYZ重心位置
    if (ctrGrvCntrXPosition.value != '' && (parseInt(ctrGrvCntrXPosition.value.replace(/,/g, "")) < 0 || parseInt(ctrGrvCntrXPosition.value.replace(/,/g, "")) > 100)) {
        ctlError.innerHTML = "100mm以下";
        parentbtn.disabled = true;
    } else {
        if (parseInt(ctrGrvCntrXPosition.value.replace(/,/g, "")) <= 100 && parseInt(ctrGrvCntrYPosition.value.replace(/,/g, "")) <= 100 && parseInt(ctrGrvCntrZPosition.value.replace(/,/g, "")) <= 100) {
            ctlError.innerHTML = "";
            parentbtn.disabled = false;
        }
    }
   

    if (ctrGrvCntrYPosition.value != '' && (parseInt(ctrGrvCntrYPosition.value.replace(/,/g, "")) < 0 || parseInt(ctrGrvCntrYPosition.value.replace(/,/g, "")) > 100)) {
        ctlError.innerHTML = "100mm以下";
        parentbtn.disabled = true;
    } else {
        if (parseInt(ctrGrvCntrXPosition.value.replace(/,/g, "")) <= 100 && parseInt(ctrGrvCntrYPosition.value.replace(/,/g, "")) <= 100 && parseInt(ctrGrvCntrZPosition.value.replace(/,/g, "")) <= 100) {
            ctlError.innerHTML = "";
            parentbtn.disabled = false;
        }
    }

    if (ctrGrvCntrZPosition.value != '' && (parseInt(ctrGrvCntrZPosition.value.replace(/,/g, "")) < 0 || parseInt(ctrGrvCntrZPosition.value.replace(/,/g, "")) > 100)) {
        document.getElementById("ContentPlaceHolder1_lblError").innerHTML = "100mm以下";
        parentbtn.disabled = true;       
    } else {
        if (parseInt(ctrGrvCntrXPosition.value.replace(/,/g, "")) <= 100 && parseInt(ctrGrvCntrYPosition.value.replace(/,/g, "")) <= 100 && parseInt(ctrGrvCntrZPosition.value.replace(/,/g, "")) <= 100) {
            ctlError.innerHTML = "";
            parentbtn.disabled = false;
        }
    }

    // 重心位置のチェックは2列リニアガードの場合のみ行う
    if (LinearGuideSmall == stateST_TC || LinearGuideSmall == stateST_TW) {
        if (GrvCntrXPosition.match(/[^0-9]+/i) != null) {
            alert('请按整数值输入重心位置。\n请再次输入。')
            ctrGrvCntrXPosition.value = '';
            ctrGrvCntrXPosition.focus();
        } else if (GrvCntrYPosition.match(/[^0-9]+/i) != null) {
            alert('请按整数值输入重心位置。\n请再次输入。')
            ctrGrvCntrYPosition.value = '';
            ctrGrvCntrYPosition.focus();
        } else if (GrvCntrZPosition.match(/[^0-9]+/i) != null) {
            alert('请按整数值输入重心位置。\n请再次输入。')
            ctrGrvCntrZPosition.value = '';
            ctrGrvCntrZPosition.focus();
        }
    }

    // blurイベントを発火させ、小数点の桁数調整
    ctrLoad.onblur();

    if (LinearGuideSmall == stateST_TC || LinearGuideSmall == stateST_TW) {
        // ガイド方式が2列リニアガードの場合、セッション登録の条件に重心位置を含める
        if (WorkLoadingState > 0 && ctrLoad.value.length > 0 && (GrvCntrXPosition.length > 0 || GrvCntrYPosition.length > 0 || GrvCntrZPosition.length > 0)) {

            // セッションに値の設定
            //sessionStorage.setItem(calcResult, calcResult);
            sessionStorage.setItem(ssTemp + ssLinearGuideSmall, LinearGuideSmall);
            sessionStorage.setItem(ssTemp + ssWorkLoadingState, WorkLoadingState);
            sessionStorage.setItem(ssTemp + ssLoad, ctrLoad.value);

            //空の場合にゼロクリア
            if (GrvCntrXPosition == '') {
                GrvCntrXPosition = 0;
            };
            if (GrvCntrYPosition == '') {
                GrvCntrYPosition = 0;
            };
            if (GrvCntrZPosition == '') {
                GrvCntrZPosition = 0;
            };

            sessionStorage.setItem(ssTemp + ssGrvCntrXPosition, GrvCntrXPosition);
            sessionStorage.setItem(ssTemp + ssGrvCntrYPosition, GrvCntrYPosition);
            sessionStorage.setItem(ssTemp + ssGrvCntrZPosition, GrvCntrZPosition);
        }
    } else if (LinearGuideSmall == stateST_RP || LinearGuideSmall == stateST_GS || LinearGuideSmall == stateST_GD) {
        // ガイド方式が2列リニアガード以外の場合、セッション登録の条件に重心位置を除く
        if (ctrLoad.value.length > 0) {

            // セッションに値の設定
            sessionStorage.setItem(ssTemp + ssLinearGuideSmall, LinearGuideSmall);
            if (sessionStorage.getItem(ssTemp + ssWorkLoadingState) != null) {
                sessionStorage.removeItem(ssTemp + ssWorkLoadingState)
            }
            sessionStorage.setItem(ssTemp + ssWorkLoadingState, WorkLoadingState);
            sessionStorage.setItem(ssTemp + ssLoad, ctrLoad.value);
            if (sessionStorage.getItem(ssTemp + ssGrvCntrXPosition) != null) {
                sessionStorage.removeItem(ssTemp + ssGrvCntrXPosition);
            }
            if (sessionStorage.getItem(ssTemp + ssGrvCntrYPosition) != null) {
                sessionStorage.removeItem(ssTemp + ssGrvCntrYPosition);
            }
            if (sessionStorage.getItem(ssTemp + ssGrvCntrZPosition) != null) {
                sessionStorage.removeItem(ssTemp + ssGrvCntrZPosition);
            }

        }

    }
}
