// 初期処理
// セッションの値を取得し、変数に格納する
var wkRoundTrip = 0;
var wkOperatingTime = 0;
var wkOperatingDay = 0;

if (sessionStorage.getItem(ssRoundTrip) != null) {
    wkRoundTrip = sessionStorage.getItem(ssRoundTrip);
}
if (sessionStorage.getItem(ssOperatingTime) != null) {
    wkOperatingTime = sessionStorage.getItem(ssOperatingTime);
}
if (sessionStorage.getItem(ssOperatingDay) != null) {
    wkOperatingDay = sessionStorage.getItem(ssOperatingDay);
}

if (wkRoundTrip > 0) {
    document.getElementById("ContentPlaceHolder1_numRoundTrip").value = wkRoundTrip
}
if (wkOperatingTime > 0) {
    document.getElementById("ContentPlaceHolder1_numOperatingTime").value = wkOperatingTime
}
if (wkOperatingDay > 0) {
    document.getElementById("ContentPlaceHolder1_numOperatingDay").value = wkOperatingDay
}
// テキスト変更イベント
function txtChange(own) {
    var retMessage = "";
    var parentWin = window.parent;
    var parentbtn = parentWin.document.getElementById("ContentPlaceHolder1_imgbtnDecision");

    with(document){
        var ctrRoundTrip = getElementById("ContentPlaceHolder1_numRoundTrip");
        var ctrOperatingTime = getElementById("ContentPlaceHolder1_numOperatingTime");
        var ctrOperatingDay = getElementById("ContentPlaceHolder1_numOperatingDay");
        var ctrlblRoundTripError= getElementById("ContentPlaceHolder1_lblRoundTripError");
        var ctrlblOperatingTimeError= getElementById("ContentPlaceHolder1_lblOperatingTimeError");
        var ctrlblOperatingDayError = getElementById("ContentPlaceHolder1_lblOperatingDayError");

        // 入力チェック
        retMessage = InputCheck(own)
            
        if (retMessage != true) {
            //親ウィンドウを取得
            parentbtn.disabled = true;
            own.focus();
            own.select();
            return false;
        } else if (ctrlblRoundTripError.innerHTML.length == 0 && ctrlblOperatingTimeError.innerHTML.length == 0 && ctrlblOperatingDayError.innerHTML.length == 0) {
            parentbtn.disabled = false;
        }

        if (own.id == ctrRoundTrip.id) {
            if (ctrRoundTrip.value != '' && ctrRoundTrip.value != '0') {
                sessionStorage.setItem(ssTemp + ssRoundTrip, ctrRoundTrip.value);
            }
        }
        if (own.id == ctrOperatingTime.id) {
            if (ctrOperatingTime.value != '' && ctrOperatingTime.value != '0') {
                sessionStorage.setItem(ssTemp + ssOperatingTime, ctrOperatingTime.value);
            }
        }
        if (own.id == ctrOperatingDay.id) {
            if (ctrOperatingDay.value != '' && ctrOperatingDay.value != '0') {
                sessionStorage.setItem(ssTemp + ssOperatingDay, ctrOperatingDay.value);
            }
        }
        return false;
    }
}

function InputCheck(own) {
    var ret = true;
    with (document) {
        var ctrRoundTrip = getElementById("ContentPlaceHolder1_numRoundTrip");
        var ctrOperatingTime = getElementById("ContentPlaceHolder1_numOperatingTime");
        var ctrOperatingDay = getElementById("ContentPlaceHolder1_numOperatingDay");


        if (own.id == ctrRoundTrip.id) {
            if (own.value.match(/[^0-9,.]+/i) != null) {
                alert('输入的往返次数有误，\n请重新输入。')
                own.value = '';
                own.focus();
            }
        }

        // 稼働時間
        if (own.id == ctrOperatingTime.id) {
            if (ctrOperatingTime.value != "" && (parseInt(ctrOperatingTime.value) <= 0 || parseInt(ctrOperatingTime.value) > 24)) {
                getElementById("ContentPlaceHolder1_lblOperatingTimeError").innerHTML = "设备运行时间在24小时以内";
                ret = false;
            }
            else {
                getElementById("ContentPlaceHolder1_lblOperatingTimeError").innerHTML = "";
            }

            if (own.value.match(/[^0-9]+/i) != null) {
                alert('输入的设备运行时间有误，\n请重新输入。')
                own.value = '';
                own.focus();
            }


        }

        // 稼働日数
        if (own.id == ctrOperatingDay.id) {
            if (ctrOperatingDay.value != '' && (parseInt(ctrOperatingDay.value) <= 0 || parseInt(ctrOperatingDay.value) > 365)) {
                getElementById("ContentPlaceHolder1_lblOperatingDayError").innerHTML = "设备运行天数在365天以内";
                ret = false;
            } else {
                getElementById("ContentPlaceHolder1_lblOperatingDayError").innerHTML = "";
            }
            if (own.value.match(/[^0-9]+/i) != null) {
                alert('输入的设备运行天数有误，\n请重新输入。')
                own.value = '';
                own.focus();
            }
        }
        return ret;
    }
}