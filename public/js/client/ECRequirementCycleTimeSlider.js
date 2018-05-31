// セッションの受け取り
var wkStroke = 0;
var wkHopeCycleTime = 0;

if(sessionStorage.getItem(ssStroke) != null) {
	wkStroke = sessionStorage.getItem(ssStroke);
}
if(sessionStorage.getItem(ssHopeCycleTime) != null) {
	wkHopeCycleTime = sessionStorage.getItem(ssHopeCycleTime).replace(/,/g, '');
}

if(wkHopeCycleTime > 0) {
	document.getElementById("ContentPlaceHolder1_numHopeCycleTime").value = parseFloat(wkHopeCycleTime).toLocaleString();
}

document.getElementById("ContentPlaceHolder1_lblStroke").textContent = wkStroke;

// テキスト変更イベント
function txtChange(own) {
	with(document) {
		var ctrHopeCycleTime = getElementById("ContentPlaceHolder1_numHopeCycleTime");
	}

	if(ctrHopeCycleTime.value.match(/[^0-9,.]+/i) != null) {
		alert('周期时间中输入了不正当的值，\n请再次输入。')
		ctrHopeCycleTime.value = '';
		ctrHopeCycleTime.focus();
	}

	// blurイベントを発火させ、小数点の桁数調整
	ctrHopeCycleTime.onblur();

	if(own.id == ctrHopeCycleTime.id) {
		if(ctrHopeCycleTime.value != '' && ctrHopeCycleTime.value != '0') {
			sessionStorage.setItem(ssTemp + ssHopeCycleTime, ctrHopeCycleTime.value);
		} else {

			if(ctrHopeCycleTime.value == '0') {
				sessionStorage.setItem(ssTemp + ssHopeCycleTime, ctrHopeCycleTime.value);
			} else if(ctrHopeCycleTime.value == '') {
				sessionStorage.removeItem(ssHopeCycleTime);
			}
		}
	}
	return false;
}