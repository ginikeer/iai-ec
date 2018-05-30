// セッションの確認
var wkLoad = "";

if (sessionStorage.getItem(ssLoad) != null) {
        wkLoad = sessionStorage.getItem(ssLoad);
}

if (wkLoad.replace(/,/g, '') > 0) {
    document.getElementById("ContentPlaceHolder1_numLoadRod").value = wkLoad;
} else {
    document.getElementById("ContentPlaceHolder1_numLoadRod").value = ""
}


// テキスト変更イベント
function txtChange(own) {
    with (document) {
        var ctrLoadRod = getElementById("ContentPlaceHolder1_numLoadRod");
    }

    if (ctrLoadRod.value.match(/[^0-9,.]+/i) != null) {
        alert('输入的负载有误，\n请重新输入')
        ctrLoadRod.value = '';
        ctrLoadRod.focus();
    }

    // blurイベントを発火させ、小数点の桁数調整
    ctrLoadRod.onblur()

    if (own.id == ctrLoadRod.id) {
        if (ctrLoadRod.value != '' && ctrLoadRod.value != '0') {
            sessionStorage.setItem(ssTemp + ssLoad, ctrLoadRod.value);
        }
    }
    return false;
}