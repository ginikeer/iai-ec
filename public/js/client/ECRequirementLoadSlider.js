/// <reference path="ECRequirementCycleTimeSlider.js" />
// 初期処理
var WorkLoadingState;

// セッションの値を取得し、変数に格納する
var wkStdLife = 0;
var wkSpeed = 0;
var wkStroke = 0;
var wkLoad = 0;
var wkGrvCntrPosition = 0;
var wkDirection = 0;

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
if (sessionStorage.getItem(ssGrvCntrPosition) != null) {
    wkGrvCntrPosition = sessionStorage.getItem(ssGrvCntrPosition);
}
if (sessionStorage.getItem(ssDirection) != null) {
    wkDirection = sessionStorage.getItem(ssDirection);
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
        case "4":
            ImageChange(document.getElementById("ContentPlaceHolder1_imgWorkLoadState4"), 4);
            break;
        case "5":
            ImageChange(document.getElementById("ContentPlaceHolder1_imgWorkLoadState5"), 5);
            break;
        case "6":
            ImageChange(document.getElementById("ContentPlaceHolder1_imgWorkLoadState6"), 6);
            break;
        case "7":
            ImageChange(document.getElementById("ContentPlaceHolder1_imgWorkLoadState7"), 7);
            break;
        case "8":
            ImageChange(document.getElementById("ContentPlaceHolder1_imgWorkLoadState8"), 8);
            break;
        case "9":
            ImageChange(document.getElementById("ContentPlaceHolder1_imgWorkLoadState9"), 9);
            break;
    } 

}

// コントロールの使用不可

if (wkDirection == 0) {
    document.getElementById("ContentPlaceHolder1_imgWorkLoadState7").disabled = true;
    document.getElementById("ContentPlaceHolder1_imgWorkLoadState8").disabled = true;
    document.getElementById("ContentPlaceHolder1_imgWorkLoadState9").disabled = true;
}else if (wkDirection == 1){
    document.getElementById("ContentPlaceHolder1_imgWorkLoadState1").disabled = true;
    document.getElementById("ContentPlaceHolder1_imgWorkLoadState2").disabled = true;
    document.getElementById("ContentPlaceHolder1_imgWorkLoadState3").disabled = true;
    document.getElementById("ContentPlaceHolder1_imgWorkLoadState4").disabled = true;
    document.getElementById("ContentPlaceHolder1_imgWorkLoadState5").disabled = true;
    document.getElementById("ContentPlaceHolder1_imgWorkLoadState6").disabled = true;
}

if (typeof wkLoad.match !== "undefined") {

    if (wkLoad.match(/,/) != null) {
        wkLoad = wkLoad.replace(/,/g, '');
    }
}


if (WorkLoadingState > 0 && wkLoad > 0 && wkGrvCntrPosition > 0) {
    document.getElementById("ContentPlaceHolder1_numConditionLoad").value = parseFloat(wkLoad).toLocaleString();
    document.getElementById("ContentPlaceHolder1_numConditionGravityCenterPosition").value = wkGrvCntrPosition;
}

// 画像の変更
function ImageChange(own,state) {
    var nowSrc = document.getElementById(own.id).src;
    var afterSrc;

    var offSrc1;
    var offSrc2;
    var offSrc3;
    var offSrc4;
    var offSrc5;
    var offSrc6;
    var offSrc7;
    var offSrc8;
    var offSrc9;

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
            offSrc4 = (getElementById("ContentPlaceHolder1_imgWorkLoadState4").src).replace(/On/g, "Off");
            offSrc5 = (getElementById("ContentPlaceHolder1_imgWorkLoadState5").src).replace(/On/g, "Off");
            offSrc6 = (getElementById("ContentPlaceHolder1_imgWorkLoadState6").src).replace(/On/g, "Off");
            offSrc7 = (getElementById("ContentPlaceHolder1_imgWorkLoadState7").src).replace(/On/g, "Off");
            offSrc8 = (getElementById("ContentPlaceHolder1_imgWorkLoadState8").src).replace(/On/g, "Off");
            offSrc9 = (getElementById("ContentPlaceHolder1_imgWorkLoadState9").src).replace(/On/g, "Off");

            getElementById("ContentPlaceHolder1_imgWorkLoadState1").src = offSrc1
            getElementById("ContentPlaceHolder1_imgWorkLoadState2").src = offSrc2
            getElementById("ContentPlaceHolder1_imgWorkLoadState3").src = offSrc3
            getElementById("ContentPlaceHolder1_imgWorkLoadState4").src = offSrc4
            getElementById("ContentPlaceHolder1_imgWorkLoadState5").src = offSrc5
            getElementById("ContentPlaceHolder1_imgWorkLoadState6").src = offSrc6
            getElementById("ContentPlaceHolder1_imgWorkLoadState7").src = offSrc7
            getElementById("ContentPlaceHolder1_imgWorkLoadState8").src = offSrc8
            getElementById("ContentPlaceHolder1_imgWorkLoadState9").src = offSrc9

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
    var GrvCntrPosition = 0;

    var calcResult = 0;

    with (document) {
        var ctrLoad = getElementById("ContentPlaceHolder1_numConditionLoad");
        var ctrGrvCntrPosition = getElementById("ContentPlaceHolder1_numConditionGravityCenterPosition");
    }

    Load = ctrLoad.value;
    GrvCntrPosition = ctrGrvCntrPosition.value;

    if (Load.match(/[^0-9,.]+/i) != null) {
        alert('荷重に不正な値が入力されました。\n再度入力して下さい。')
        ctrLoad.value = '';
        ctrLoad.focus();
    }

    if (GrvCntrPosition.match(/[^0-9]+/i) != null) {
        alert('重心位置は整数値で入力して下さい。\n再度入力して下さい。')
        ctrGrvCntrPosition.value = '';
        ctrGrvCntrPosition.focus();
    }

    document.getElementById("ContentPlaceHolder1_lblError1").innerHTML = ""
    document.getElementById("ContentPlaceHolder1_lblError2").innerHTML = ""
    document.getElementById("ContentPlaceHolder1_lblError3").innerHTML = ""
    // blurイベントを発火させ、小数点の桁数調整
    ctrLoad.onblur();
    
    if (WorkLoadingState > 0 && ctrLoad.value.length > 0 && GrvCntrPosition.length > 0) {
    	
        // セッションに値の設定
//		sessionStorage.setItem(calcResult, calcResult);
        sessionStorage.setItem(ssTemp + ssWorkLoadingState, WorkLoadingState);
        sessionStorage.setItem(ssTemp + ssLoad, ctrLoad.value);
        sessionStorage.setItem(ssTemp + ssGrvCntrPosition, GrvCntrPosition);
        
        
    }
}

