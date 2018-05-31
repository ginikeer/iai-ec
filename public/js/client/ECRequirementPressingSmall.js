/// <reference path="ECRequirementPressingSmall.js" />
// 初期処理
var LinearGuideSmall;

// セッションの値を取得し、変数に格納する
var wkPress = 0;

if (sessionStorage.getItem(ssPressingForce) != null) {
    wkPress = sessionStorage.getItem(ssPressingForce);
}
if (sessionStorage.getItem(ssLinearGuideSmall) != null) {
    LinearGuideSmall = sessionStorage.getItem(ssLinearGuideSmall)

    switch (Number(LinearGuideSmall)) {
        case stateST_RP:
            ImageChange(document.getElementById("ContentPlaceHolder1_imgSmallTypeRP"), stateST_RP);
            break;
        case stateST_GS:
            ImageChange(document.getElementById("ContentPlaceHolder1_imgSmallTypeGS"), stateST_GS);
            break;
        case stateST_GD:
            ImageChange(document.getElementById("ContentPlaceHolder1_imgSmallTypeGD"), stateST_GD);
            break;
        case stateST_TC:
            ImageChange(document.getElementById("ContentPlaceHolder1_imgSmallTypeTC"), stateST_TC);
            break;
        case stateST_TW:
            ImageChange(document.getElementById("ContentPlaceHolder1_imgSmallTypeTW"), stateST_TW);
            break;
        default:
            offFlg = true;
            break;
    }
}

if (wkPress > 0) {
    document.getElementById("ContentPlaceHolder1_txtPressing").value = wkPress;
}

function dummyFunc() {
    return false;
}

// 画像の変更
function ImageChange(own, state) {
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
    LinearGuideSmall = state;

    // 再計算
    calc();

    return false;
}

// モーメント計算
function calc() {
    var Press = 0;
    var parentWin = window.parent;
    var parentbtn = parentWin.document.getElementById("ContentPlaceHolder1_imgbtnDecision");

    with (document) {
        var ctrPress = getElementById("ContentPlaceHolder1_txtPressing");
    }

    Press = ctrPress.value;

    if (Press.match(/[^0-9,.]+/i) != null) {
        alert('推压力输入有误，\n请输入半角数字')
        ctrPress.value = '';
        ctrPress.focus();
    } else if (Press != "" && ( Press < 15 || Press > 90) ){
        document.getElementById("ContentPlaceHolder1_lblPressingError").innerHTML = "押付け力は15以上、90以下の値を入力してください";
        parentbtn.disabled = true;
    } else {
        document.getElementById("ContentPlaceHolder1_lblPressingError").innerHTML = " ";
        parentbtn.disabled = false;
    }

    // blurイベントを発火させ、小数点の桁数調整
    ctrPress.onblur();

    if (LinearGuideSmall > 0 && Press.length > 0) {

        // セッションに値の設定
        sessionStorage.setItem(ssTemp + ssLinearGuideSmall, LinearGuideSmall);
        sessionStorage.setItem(ssTemp + ssPressingForce, Press);
    }
}
