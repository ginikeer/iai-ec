// セッションの確認
var wkLoad = "";
var wkOffSetDistance = "";
var wkOverhangDistance = "";

if (sessionStorage.getItem(ssLoad) != null) {
        wkLoad = sessionStorage.getItem(ssLoad);
}

if (sessionStorage.getItem(ssOffSetDistance) != null) {
    wkOffSetDistance = sessionStorage.getItem(ssOffSetDistance);
}

if (sessionStorage.getItem(ssOverhangDistance) != null) {
    wkOverhangDistance = sessionStorage.getItem(ssOverhangDistance);
}

if (wkLoad.replace(/,/g, '') > 0) {
    document.getElementById("ContentPlaceHolder1_numLoadRod").value = wkLoad;
} else {
    document.getElementById("ContentPlaceHolder1_numLoadRod").value = ""
}

if (wkOffSetDistance.replace(/,/g, '') > 0) {
    document.getElementById("ContentPlaceHolder1_txtOffSetDistance").value = wkOffSetDistance;
} else {
    document.getElementById("ContentPlaceHolder1_txtOffSetDistance").value = ""
}

if (wkOverhangDistance.replace(/,/g, '') > 0) {
    document.getElementById("ContentPlaceHolder1_txtOverhangDistance").value = wkOverhangDistance;
} else {
    document.getElementById("ContentPlaceHolder1_txtOverhangDistance").value = ""
}

// テキスト変更イベント
function txtChange(own) {
    with (document) {
        var ctrLoadRod = getElementById("ContentPlaceHolder1_numLoadRod");
        var ctrOffSet = getElementById("ContentPlaceHolder1_txtOffSetDistance");
        var Overhang = getElementById("ContentPlaceHolder1_txtOverhangDistance");
    }
    var parentWin = window.parent;
    var parentbtn = parentWin.document.getElementById("ContentPlaceHolder1_imgbtnDecision");

    if (own.id == ctrLoadRod.id) {
        if (ctrLoadRod.value.match(/[^0-9,.]+/i) != null) {
            alert('荷重に不正な値が入力されました。\n再度入力して下さい。')
            ctrLoadRod.value = '';
            ctrLoadRod.focus();
        }

        // blurイベントを発火させ、小数点の桁数調整
        ctrLoadRod.onblur()

        if (ctrLoadRod.value != '' && ctrLoadRod.value != '0') {
            //sessionStorage.setItem(ssTemp + ssLoad, ctrLoadRod.value);
            SetItemCtrl(ctrLoadRod.value, ctrOffSet.value, Overhang.value);
        }

        return false;

    } else if (own.id == ctrOffSet.id) {
        if (ctrOffSet.value.match(/[^0-9,.]+/i) != null) {
            alert('オフセット距離に不正な値が入力されました。\n再度入力して下さい。')
            ctrOffSet.value = '';
            ctrOffSet.focus();
        }

        // blurイベントを発火させ、小数点の桁数調整
        ctrOffSet.onblur()

        if (ctrOffSet.value != '' && (parseInt(ctrOffSet.value.replace(/,/g, "")) < 0 || parseInt(ctrOffSet.value.replace(/,/g, "")) > 100)) {
           
            document.getElementById("ContentPlaceHolder1_lblOverhangDistanceError").innerHTML = "100mm以内にするか、ロッドタイプ＋外付けガイドで検討してください";
            parentbtn.disabled = true;
        } else {
            if (Overhang.value == '' || (parseInt(Overhang.value.replace(/,/g, "")) > 0 && parseInt(Overhang.value.replace(/,/g, "")) <= 100)) {
                document.getElementById("ContentPlaceHolder1_lblOverhangDistanceError").innerHTML = "";
                parentbtn.disabled = false;
            }
           
            if (ctrOffSet.value != '') { SetItemCtrl(ctrLoadRod.value, ctrOffSet.value, Overhang.value); }
        }

        return false;
    } else if (own.id == Overhang.id) {
        if (Overhang.value.match(/[^0-9,.]+/i) != null) {
            alert('張出し距離に不正な値が入力されました。\n再度入力して下さい。')
            Overhang.value = '';
            Overhang.focus();
        }

        // blurイベントを発火させ、小数点の桁数調整
        Overhang.onblur()

        if (Overhang.value != '' && (parseInt(Overhang.value.replace(/,/g, "")) < 0 || parseInt(Overhang.value.replace(/,/g, "")) > 100)) {
            document.getElementById("ContentPlaceHolder1_lblOverhangDistanceError").innerHTML = "100mm以内にするか、ロッドタイプ＋外付けガイドで検討してください";
            parentbtn.disabled = true;
        } else {
            if (ctrOffSet.value == '' || (parseInt(ctrOffSet.value.replace(/,/g, "")) > 0 && parseInt(ctrOffSet.value.replace(/,/g, "")) <= 100)) {
                document.getElementById("ContentPlaceHolder1_lblOverhangDistanceError").innerHTML = "";
                parentbtn.disabled = false;
            }

            if (Overhang.value != '') {
                SetItemCtrl(ctrLoadRod.value, ctrOffSet.value, Overhang.value);
            }
        }

        return false;
    }

    return false;

}

function SetItemCtrl(strLoad, strOffSet, strOverhang) {
    if (document.getElementById("ContentPlaceHolder1_lblOverhangDistanceError").innerText.length == 0) {

        //空の場合にゼロクリア
        if (strLoad == '') {
            strLoad = 0;
        };
        if (strOffSet == '') {
            strOffSet = 0;
        };
        if (strOverhang == '') {
            strOverhang = 0;
        };

        //荷重必須　張り出し距離　オフセット距離はどちらか
        if ((strLoad != '' && strLoad != '0') || (strOffSet != '' && strOffSet != '0') || (strOverhang != '' && strOverhang != '0')) {
            sessionStorage.setItem(ssTemp + ssLoad, strLoad);
            sessionStorage.setItem(ssTemp + ssOffSetDistance, strOffSet);
            sessionStorage.setItem(ssTemp + ssOverhangDistance, strOverhang);
        }

    }
}