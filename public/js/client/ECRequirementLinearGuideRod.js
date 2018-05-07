/// <reference path="ECRequirementLinearGuideRod.js" />
// 初期処理

// セッションの値を取得し、変数に格納する
var wkLinearGuideRod = 0;

if (sessionStorage.getItem(ssLinearGuideRod) != null) {
    wkLinearGuideRod = sessionStorage.getItem(ssLinearGuideRod);

    switch (Number(wkLinearGuideRod)) {
        case Number(stateLG1):
            ImageChange(document.getElementById("ContentPlaceHolder1_imgLinearGuide1"), stateLG1);
            break;
        case Number(stateLG2):
            ImageChange(document.getElementById("ContentPlaceHolder1_imgLinearGuide2"), stateLG2);
            break;
        case Number(stateLG3):
            ImageChange(document.getElementById("ContentPlaceHolder1_imgLinearGuide3"), stateLG3);
            break;
        default:
            ImageChange(document.getElementById("ContentPlaceHolder1_imgLinearGuide1"), stateLGNon);
            break;
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
            offSrc1 = (getElementById("ContentPlaceHolder1_imgLinearGuide1").src).replace(/On/g, "Off");
            offSrc2 = (getElementById("ContentPlaceHolder1_imgLinearGuide2").src).replace(/On/g, "Off");
            offSrc3 = (getElementById("ContentPlaceHolder1_imgLinearGuide3").src).replace(/On/g, "Off");

            getElementById("ContentPlaceHolder1_imgLinearGuide1").src = offSrc1
            getElementById("ContentPlaceHolder1_imgLinearGuide2").src = offSrc2
            getElementById("ContentPlaceHolder1_imgLinearGuide3").src = offSrc3

            // 画像を選択状態にする
            afterSrc = nowSrc.replace(/Off/g, "On");
            getElementById(own.id).src = afterSrc;
            // 取付方向の値設定
        }
    }

    wkLinearGuideRod = state;

    if (wkLinearGuideRod > 0 ) {

        // セッションに値の設定
        sessionStorage.setItem(ssTemp + ssLinearGuideRod, wkLinearGuideRod);
    }


    return false;
}
