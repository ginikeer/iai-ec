// セッションの受け取り
var wkStroke = 0;
var wkHopeCycleTime = 0;

if (sessionStorage.getItem(ssStroke) != null) {
    wkStroke = sessionStorage.getItem(ssStroke);
}
if (sessionStorage.getItem(ssHopeCycleTime) != null) {
    wkHopeCycleTime = sessionStorage.getItem(ssHopeCycleTime).replace(/,/g, '')
}

if (wkHopeCycleTime > 0) {
    document.getElementById("ContentPlaceHolder1_numHopeCycleTime").value = parseFloat(wkHopeCycleTime).toLocaleString();
}

document.getElementById("ContentPlaceHolder1_lblStroke").innerHTML = wkStroke;


// テキスト変更イベント
function txtChange(own) {
    with (document) {
        var ctrHopeCycleTime = getElementById("ContentPlaceHolder1_numHopeCycleTime");
    }

    if (ctrHopeCycleTime.value.match(/[^0-9,.]+/i) != null) {
        alert('サイクルタイムに不正な値が入力されました。\n再度入力して下さい。')
        ctrHopeCycleTime.value = '';
        ctrHopeCycleTime.focus();
    }

    // blurイベントを発火させ、小数点の桁数調整
    ctrHopeCycleTime.onblur();

    if (own.id == ctrHopeCycleTime.id) {
        if (ctrHopeCycleTime.value != '' && ctrHopeCycleTime.value != '0') {
            sessionStorage.setItem(ssTemp + ssHopeCycleTime, ctrHopeCycleTime.value);
        } else {
            if (ctrHopeCycleTime.value == '0') {
                sessionStorage.setItem(ssTemp + ssHopeCycleTime, ctrHopeCycleTime.value);
            } else if (ctrHopeCycleTime.value == '') {
                sessionStorage.removeItem(ssHopeCycleTime);
            }
        }
    }
    return false;
}