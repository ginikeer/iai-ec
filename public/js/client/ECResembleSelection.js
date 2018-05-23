var strForm;

$(function () {
    //クリック時処理
    $('.modal-open').click(function () {
        $('body').append('<div class="modal-overlay"></div>');
        $('.modal-overlay').fadeIn('slow');

        $('#ifr')[0].src = strForm;

        // モーダルコンテンツのIDを取得
        var modal = '#dvContent';
        // モーダルコンテンツの表示位置を設定
        modalResize();
        // モーダルコンテンツフェードイン
        $(modal).fadeIn('slow');

        // 戻る処理（画面を閉じる）
        $('.modal-close').off().click(function () {
            // 子画面のセッションをクリア
            ssClear();

            $(modal).fadeOut('slow');
            $('.modal-overlay').fadeOut('slow', function () {
                $('.modal-overlay').remove();
            });

            return false
        });

        // 確定処理（画面を閉じる）
        $('.modal-decision').off().click(function () {
            // 子画面の値を取得
            ssSetItems();

            $(modal).fadeOut('slow');
            $('.modal-overlay').fadeOut('slow', function () {
                $('.modal-overlay').remove();
            });

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

// セッションクリア処理
function ssClear() {
   
}

// セッション値の反映処理
function ssSetItems() {
   
}

function setItems(own) {

    if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnBore1").id) {
        var ctrBore1 = document.getElementById("ContentPlaceHolder1_txtHdnBore1");
        if (ctrBore1.value == '' || ctrBore1.value == '0') {
            ctrBore1.value = 1;

            //対する項目のセッション値をクリア
            sessionStorage.setItem(ssResemble_Bore2, "")
            sessionStorage.setItem(ssResemble_Bore3, "")
            sessionStorage.setItem(ssResemble_Bore4, "")
            sessionStorage.setItem(ssResemble_Bore5, "")
            sessionStorage.setItem(ssResemble_Bore6, "")
            sessionStorage.setItem(ssResemble_Bore7, "")
            sessionStorage.setItem(ssResemble_Bore8, "")

        } else if (ctrBore1.value == 1) {
            ctrBore1.value = 0;
        }
        sessionStorage.setItem(ssResemble_Bore1, ctrBore1.value);
    } else if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnBore2").id) {
        var ctrBore2 = document.getElementById("ContentPlaceHolder1_txtHdnBore2");
        if (ctrBore2.value == '' || ctrBore2.value == '0') {
            ctrBore2.value = 1;

            //対する項目のセッション値をクリア
            sessionStorage.setItem(ssResemble_Bore1, "")
            sessionStorage.setItem(ssResemble_Bore3, "")
            sessionStorage.setItem(ssResemble_Bore4, "")
            sessionStorage.setItem(ssResemble_Bore5, "")
            sessionStorage.setItem(ssResemble_Bore6, "")
            sessionStorage.setItem(ssResemble_Bore7, "")
            sessionStorage.setItem(ssResemble_Bore8, "")


        } else if (ctrBore2.value == 1) {
            ctrBore2.value = 0;
        }
        sessionStorage.setItem(ssResemble_Bore2, ctrBore2.value);
    } else if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnBore3").id) {
        var ctrBore3 = document.getElementById("ContentPlaceHolder1_txtHdnBore3");
        if (ctrBore3.value == '' || ctrBore3.value == '0') {
            ctrBore3.value = 1;

            //対する項目のセッション値をクリア
            sessionStorage.setItem(ssResemble_Bore1, "")
            sessionStorage.setItem(ssResemble_Bore2, "")
            sessionStorage.setItem(ssResemble_Bore4, "")
            sessionStorage.setItem(ssResemble_Bore5, "")
            sessionStorage.setItem(ssResemble_Bore6, "")
            sessionStorage.setItem(ssResemble_Bore7, "")
            sessionStorage.setItem(ssResemble_Bore8, "")

        } else if (ctrBore3.value == 1) {
            ctrBore3.value = 0;
        }
        sessionStorage.setItem(ssResemble_Bore3, ctrBore3.value);
    } else if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnBore4").id) {
        var ctrBore4 = document.getElementById("ContentPlaceHolder1_txtHdnBore4");
        if (ctrBore4.value == '' || ctrBore4.value == '0') {
            ctrBore4.value = 1;

            //対する項目のセッション値をクリア
            sessionStorage.setItem(ssResemble_Bore1, "")
            sessionStorage.setItem(ssResemble_Bore2, "")
            sessionStorage.setItem(ssResemble_Bore3, "")
            sessionStorage.setItem(ssResemble_Bore5, "")
            sessionStorage.setItem(ssResemble_Bore6, "")
            sessionStorage.setItem(ssResemble_Bore7, "")
            sessionStorage.setItem(ssResemble_Bore8, "")

        } else if (ctrBore4.value == 1) {
            ctrBore4.value = 0;
        }
        sessionStorage.setItem(ssResemble_Bore4, ctrBore4.value);
    } else if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnBore5").id) {
        var ctrBore5 = document.getElementById("ContentPlaceHolder1_txtHdnBore5");
        if (ctrBore5.value == '' || ctrBore5.value == '0') {
            ctrBore5.value = 1;

            //対する項目のセッション値をクリア
            sessionStorage.setItem(ssResemble_Bore1, "")
            sessionStorage.setItem(ssResemble_Bore2, "")
            sessionStorage.setItem(ssResemble_Bore3, "")
            sessionStorage.setItem(ssResemble_Bore4, "")
            sessionStorage.setItem(ssResemble_Bore6, "")
            sessionStorage.setItem(ssResemble_Bore7, "")
            sessionStorage.setItem(ssResemble_Bore8, "")

        } else if (ctrBore5.value == 1) {
            ctrBore5.value = 0;
        }
        sessionStorage.setItem(ssResemble_Bore5, ctrBore5.value);
    } else if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnBore6").id) {
        var ctrBore6 = document.getElementById("ContentPlaceHolder1_txtHdnBore6");
        if (ctrBore6.value == '' || ctrBore6.value == '0') {
            ctrBore6.value = 1;

            //対する項目のセッション値をクリア
            sessionStorage.setItem(ssResemble_Bore1, "")
            sessionStorage.setItem(ssResemble_Bore2, "")
            sessionStorage.setItem(ssResemble_Bore3, "")
            sessionStorage.setItem(ssResemble_Bore4, "")
            sessionStorage.setItem(ssResemble_Bore5, "")
            sessionStorage.setItem(ssResemble_Bore7, "")
            sessionStorage.setItem(ssResemble_Bore8, "")

        } else if (ctrBore6.value == 1) {
            ctrBore6.value = 0;
        }
        sessionStorage.setItem(ssResemble_Bore6, ctrBore6.value);
    } else if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnBore7").id) {
        var ctrBore7 = document.getElementById("ContentPlaceHolder1_txtHdnBore7");
        if (ctrBore7.value == '' || ctrBore7.value == '0') {
            ctrBore7.value = 1;

            //対する項目のセッション値をクリア
            sessionStorage.setItem(ssResemble_Bore1, "")
            sessionStorage.setItem(ssResemble_Bore2, "")
            sessionStorage.setItem(ssResemble_Bore3, "")
            sessionStorage.setItem(ssResemble_Bore4, "")
            sessionStorage.setItem(ssResemble_Bore5, "")
            sessionStorage.setItem(ssResemble_Bore6, "")
            sessionStorage.setItem(ssResemble_Bore8, "")

        } else if (ctrBore7.value == 1) {
            ctrBore7.value = 0;
        }
        sessionStorage.setItem(ssResemble_Bore7, ctrBore7.value);
    } else if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnBore8").id) {
        var ctrBore8 = document.getElementById("ContentPlaceHolder1_txtHdnBore8");
        if (ctrBore8.value == '' || ctrBore8.value == '0') {
            ctrBore8.value = 1;

            //対する項目のセッション値をクリア
            sessionStorage.setItem(ssResemble_Bore1, "")
            sessionStorage.setItem(ssResemble_Bore2, "")
            sessionStorage.setItem(ssResemble_Bore3, "")
            sessionStorage.setItem(ssResemble_Bore4, "")
            sessionStorage.setItem(ssResemble_Bore5, "")
            sessionStorage.setItem(ssResemble_Bore6, "")
            sessionStorage.setItem(ssResemble_Bore7, "")

        } else if (ctrBore8.value == 1) {
            ctrBore8.value = 0;
        }
        sessionStorage.setItem(ssResemble_Bore8, ctrBore8.value);
    } else if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnAirPressure1").id) {
        var ctrAir1 = document.getElementById("ContentPlaceHolder1_txtHdnAirPressure1");
        if (ctrAir1.value == '' || ctrAir1.value == '0') {
            ctrAir1.value = 1;

            //対する項目のセッション値をクリア
            sessionStorage.setItem(ssResemble_Air2, "")

        } else if (ctrAir1.value == 1) {
            ctrAir1.value = 0;
        }
        sessionStorage.setItem(ssResemble_Air1, ctrAir1.value);
    } else if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnAirPressure2").id) {
        var ctrAir2 = document.getElementById("ContentPlaceHolder1_txtHdnAirPressure2");
        if (ctrAir2.value == '' || ctrAir2.value == '0') {
            ctrAir2.value = 1;

            //対する項目のセッション値をクリア
            sessionStorage.setItem(ssResemble_Air1, "")

        } else if (ctrAir2.value == 1) {
            ctrAir2.value = 0;
        }
        sessionStorage.setItem(ssResemble_Air2, ctrAir2.value);
    } else if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnRodLess").id) {
        var ctrRodless = document.getElementById("ContentPlaceHolder1_txtHdnRodless");
        if (ctrRodless.value == '' || ctrRodless.value == '0') {
            ctrRodless.value = 1;

            //対する項目のセッション値をクリア
            sessionStorage.setItem(ssResemble_Rod, "")

        } else if (ctrRodless.value == 1) {
            ctrRodless.value = 0;
        }
        sessionStorage.setItem(ssResemble_Rodless, ctrRodless.value);
    } else if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnRod").id) {
        var ctrRod = document.getElementById("ContentPlaceHolder1_txtHdnRod");
        if (ctrRod.value == '' || ctrRod.value == '0') {
            ctrRod.value = 1;

            //対する項目のセッション値をクリア
            sessionStorage.setItem(ssResemble_Rodless, "")

        } else if (ctrRod.value == 1) {
            ctrRod.value = 0;
        }
        sessionStorage.setItem(ssResemble_Rod, ctrRod.value);
    } else if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnHorizontal").id) {
        var ctrHorizontal = document.getElementById("ContentPlaceHolder1_txtHdnHorizontal");
        if (ctrHorizontal.value == '' || ctrHorizontal.value == '0') {
            ctrHorizontal.value = 1;

            //対する項目のセッション値をクリア
            sessionStorage.setItem(ssResemble_Vertical, "")

        } else if (ctrHorizontal.value == 1) {
            ctrHorizontal.value = 0;
        }
        sessionStorage.setItem(ssResemble_Horizontal, ctrHorizontal.value);
    } else if (own.id == document.getElementById("ContentPlaceHolder1_imgbtnVertical").id) {
        var ctrVertical = document.getElementById("ContentPlaceHolder1_txtHdnVertical");
        if (ctrVertical.value == '' || ctrVertical.value == '0') {
            ctrVertical.value = 1;

            //対する項目のセッション値をクリア
            sessionStorage.setItem(ssResemble_Horizontal, "")

        } else if (ctrVertical.value == 1) {
            ctrVertical.value = 0;
        }
        sessionStorage.setItem(ssResemble_Vertical, ctrVertical.value);
    } else if (own.id == document.getElementById("ContentPlaceHolder1_txtStroke").id) {
        var ctrStroke = document.getElementById("ContentPlaceHolder1_txtStroke");
        if (ctrStroke.value == '' || ctrStroke.value == '0') {
            ctrStroke.value = 0;
        }
        sessionStorage.setItem(ssResemble_Stroke, ctrStroke.value);
    }
    return false;
};

// 機種選定処理
function SelectionModels(blnFlag,
                         intBore1, intBore2, intBore3, intBore4, intBore5, intBore6,intBore7,intBore8,
                         intAir1, intAir2,
                         intRodless, intRod,
                         intHorizontal, intVertical,
                         intStroke) {

    $.ajax({
        type: "get",
        url: $('#url-ajax-select-model').val(),
		headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
		datatype: "json",
        data: {
            vBore1: intBore1,
            vBore2: intBore2,
            vBore3: intBore3,
            vBore4: intBore4,
            vBore5: intBore5,
            vBore6: intBore6,
            vBore7: intBore7,
            vBore8: intBore8,
            vAir1: intAir1,
            vAir2: intAir2,
            vRodless: intRodless,
            vRod: intRod,
            vHorizontal: intHorizontal,
            vVertical: intVertical,
            vStroke: intStroke
        },

    }).done(function (data) {
        data = JSON.parse(data); 
    	var cnt = data.cnt;
    	
        //必須項目の状態で処理を切り替える
        if (blnFlag || cnt == 0) {
            //divの表示有無設定
            document.getElementById("cnt-box").style.display = "block";
            document.getElementById("h-box").style.display = "none";

            //検索件数の表示
            document.getElementById("ContentPlaceHolder1_lblSearchRecords").innerHTML = "适合产品" + cnt + "件";

            // 件数が0件
            if (cnt == 0) {
                document.getElementById("ContentPlaceHolder1_lblWarn1").innerHTML = "※";
                document.getElementById("ContentPlaceHolder1_lblWarn2").innerHTML = "お客様の条件に適合する製品<br>がございません<br>入力条件の見直しもしくは機種変更<br>のためお問い合わせください";
            } else {
                document.getElementById("ContentPlaceHolder1_lblWarn1").innerHTML = "";
                document.getElementById("ContentPlaceHolder1_lblWarn2").innerHTML = "";
            }

            // オプションケーブル長ボタン使用不可
            document.getElementById("ContentPlaceHolder1_imgbtnOptionCable").disabled = true;

        } else {
            //divの表示有無設定
            document.getElementById("cnt-box").style.display = "none";
            document.getElementById("h-box").style.display = "block";

            //推奨機種
            document.getElementById("ContentPlaceHolder1_lblRecommendModelName").innerHTML = data.data.FULL_NAME;
            // 画像設定
            document.getElementById("ContentPlaceHolder1_imgRecommendModel").src = data.data.IMG_NAME;

            //機種選定が行われたタイミングで取得値をセッションに設定
            //CALC～は実装されたら指定
            sessionStorage.setItem(ssIdx, data.data.ID);
            sessionStorage.setItem(ssSelectSeries, data.data.SERIES);
            sessionStorage.setItem(ssSelectType, data.data.TYPE);
            sessionStorage.setItem(ssSelectStroke, data.data.STROKE);
            sessionStorage.setItem(ssFullName, data.data.FULL_NAME);
            // オプションケーブル長ボタン解除
            document.getElementById("ContentPlaceHolder1_imgbtnOptionCable").disabled = false;
        }


    }).fail(function (data, textStatus, errorThrown) {
        // エラー時   
        alert("false")
    });

}

function SelectModel(own) {

    var blnFlag_Input;
    var blnFlag_NotNeed;

    var ctrBore1 = document.getElementById("ContentPlaceHolder1_txtHdnBore1");
    var ctrBore2 = document.getElementById("ContentPlaceHolder1_txtHdnBore2");
    var ctrBore3 = document.getElementById("ContentPlaceHolder1_txtHdnBore3");
    var ctrBore4 = document.getElementById("ContentPlaceHolder1_txtHdnBore4");
    var ctrBore5 = document.getElementById("ContentPlaceHolder1_txtHdnBore5");
    var ctrBore6 = document.getElementById("ContentPlaceHolder1_txtHdnBore6");
    var ctrBore7 = document.getElementById("ContentPlaceHolder1_txtHdnBore7");
    var ctrBore8 = document.getElementById("ContentPlaceHolder1_txtHdnBore8");

    var ctrAir1 = document.getElementById("ContentPlaceHolder1_txtHdnAirPressure1");
    var ctrAir2 = document.getElementById("ContentPlaceHolder1_txtHdnAirPressure2");

    var ctrRodless = document.getElementById("ContentPlaceHolder1_txtHdnRodless");
    var ctrRod = document.getElementById("ContentPlaceHolder1_txtHdnRod");

    var ctrHorizontal = document.getElementById("ContentPlaceHolder1_txtHdnHorizontal");
    var ctrVertical = document.getElementById("ContentPlaceHolder1_txtHdnVertical");

    var ctrStroke = document.getElementById("ContentPlaceHolder1_txtStroke")

    //var intBore1, intBore2, intBore3, intBore4, intBore5, intBore6;
    var intBore1, intBore2, intBore3, intBore4, intBore5, intBore6, intBore7, intBore8;
    var intAir1, intAir2;
    var intRodless, intRod;
    var intHorizontal, intVertical;
    var intStroke;
    var intUpDown;
    var fullType;

    intBore1 = -1;
    intBore2 = -1;
    intBore3 = -1;
    intBore4 = -1;
    intBore5 = -1;
    intBore6 = -1;
    intBore7 = -1;
    intBore8 = -1;

    intAir1 = -1;
    intAir2 = -1;

    intRodless = -1;
    intRod = -1;

    intHorizontal = -1;
    intVertical = -1;

    intStroke = -1;

    intUpDown = -1;

    blnFlag_NotNeed = false;

    //必須に値が入っているかチェック
    // ボア径

    blnFlag_Input = false;

    if (ctrBore1.value == '0' || ctrBore1.value == '') {
        // 未入力
    }
    else {
        // 入力済み
        intBore1 = ChangeInteger(ctrBore1.value);
        blnFlag_Input = true;
    }

    if (ctrBore2.value == '0' || ctrBore2.value == '') {
        // 未入力
    }
    else {
        // 入力済み
        intBore2 = ChangeInteger(ctrBore2.value);
        blnFlag_Input = true;
    }

    if (ctrBore3.value == '0' || ctrBore3.value == '') {
        // 未入力
    }
    else {
        // 入力済み
        intBore3 = ChangeInteger(ctrBore3.value);
        blnFlag_Input = true;
    }

    if (ctrBore4.value == '0' || ctrBore4.value == '') {
        // 未入力
    }
    else {
        // 入力済み
        intBore4 = ChangeInteger(ctrBore4.value);
        blnFlag_Input = true;
    }

    if (ctrBore5.value == '0' || ctrBore5.value == '') {
        // 未入力
    }
    else {
        // 入力済み
        intBore5 = ChangeInteger(ctrBore5.value);
        blnFlag_Input = true;
    }

    if (ctrBore6.value == '0' || ctrBore6.value == '') {
        // 未入力
    }
    else {
        // 入力済み
        intBore6 = ChangeInteger(ctrBore6.value);
        blnFlag_Input = true;
    }

    if (ctrBore7.value == '0' || ctrBore7.value == '') {
        // 未入力
    }
    else {
        // 入力済み
        intBore7 = ChangeInteger(ctrBore7.value);
        blnFlag_Input = true;
    }

    if (ctrBore8.value == '0' || ctrBore8.value == '') {
        // 未入力
    }
    else {
        // 入力済み
        intBore8 = ChangeInteger(ctrBore8.value);
        blnFlag_Input = true;
    }

    // 必須が揃っていない
    if (blnFlag_Input == false) {
        blnFlag_NotNeed = true;
    }

    // エア供給圧力
    blnFlag_Input = false;

    if (ctrAir1.value == '0' || ctrAir1.value == '') {
        // 未入力
    }
    else {
        // 入力済み
        intAir1 = ChangeInteger(ctrAir1.value);
        blnFlag_Input = true;
    }

    if (ctrAir2.value == '0' || ctrAir2.value == '') {
        // 未入力
    }
    else {
        // 入力済み
        intAir2 = ChangeInteger(ctrAir2.value);
        blnFlag_Input = true;
    }

    // 必須が揃っていない
    if (blnFlag_Input == false) {
        blnFlag_NotNeed = true;
    }

    // 形状
    blnFlag_Input = false;

    if (ctrRodless.value == '0' || ctrRodless.value == '') {
        // 未入力
    }
    else {
        // 入力済み
        intRodless = ChangeInteger(ctrRodless.value);
        blnFlag_Input = true;
    }

    if (ctrRod.value == '0' || ctrRod.value == '') {
        // 未入力
    }
    else {
        // 入力済み
        intRod = ChangeInteger(ctrRod.value);
        blnFlag_Input = true;
    }
    // 必須が揃っていない
    if (blnFlag_Input == false) {
        blnFlag_NotNeed = true;
    }

    // 取付姿勢
    blnFlag_Input = false;
    if (ctrHorizontal.value == '0' || ctrHorizontal.value == '') {
        // 未入力
    }
    else {
        // 入力済み
        intHorizontal = ChangeInteger(ctrHorizontal.value);
        blnFlag_Input = true;
    }

    if (ctrVertical.value == '0' || ctrVertical.value == '') {
        // 未入力
    }
    else {
        // 入力済み
        intVertical = ChangeInteger(ctrVertical.value);
        blnFlag_Input = true;
    }
    // 必須が揃っていない
    if (blnFlag_Input == false) {
        blnFlag_NotNeed = true;
    }


    // ストローク
    blnFlag_Input = false;
    if (ctrStroke.value == '') {
        // 未入力
    }
    else {
        // 入力済み
        intStroke = ChangeInteger(ctrStroke.value);
        blnFlag_Input = true;
    }
    // 必須が揃っていない
    if (blnFlag_Input == false) {
        blnFlag_NotNeed = true;
    }


    //// 1サイズアップ or ダウンの判定
    //if (own.id == document.getElementById("ContentPlaceHolder1_imgBtnRankDown")) {
    //    // 1サイズダウン
    //    intUpDown = 1;
    //} else if (own.id == document.getElementById("ContentPlaceHolder1_imgBtnRankUp")) {
    //    // 1サイズアップ
    //    intUpDown = 2;
    //} else {
    //    // 未入力
    //    intUpDown = -1;
    //}
    var blnCheckStroke, blnCheckPressing

    blnCheckStroke = errorCheckString(ctrStroke)

    if (blnCheckStroke == false) {
        alert('ストロークに不正な値が入力されています。\n半角数字で入力して下さい');
        ctrStroke.value = '';
        sessionStorage.setItem(ssResemble_Stroke, '');
        ctrStroke.focus();

        //divの表示有無設定
        document.getElementById("cnt-box").style.display = "block";
        document.getElementById("h-box").style.display = "none";

        //検索件数の表示
        document.getElementById("ContentPlaceHolder1_lblSearchRecords").innerHTML = "适合产品" + 0 + "件";

        document.getElementById("ContentPlaceHolder1_lblWarn1").innerHTML = "※";
        document.getElementById("ContentPlaceHolder1_lblWarn2").innerHTML = "ストロークに不正な値が<br>　 入力されました<br>　 再入力を行って下さい";

        // オプションケーブル長ボタン使用不可
        document.getElementById("ContentPlaceHolder1_imgbtnOptionCable").disabled = true;

        return false;
    }
    if (ctrStroke.value != '') {

        if (ctrStroke.value == 0) {

            alert('ストロークは0より大きい値を入力して下さい。')
            ctrStroke.value = '';
            sessionStorage.setItem(ssResemble_Stroke, '');
            ctrStroke.focus();

            //divの表示有無設定
            document.getElementById("cnt-box").style.display = "block";
            document.getElementById("h-box").style.display = "none";

            //検索件数の表示
            document.getElementById("ContentPlaceHolder1_lblSearchRecords").innerHTML = "适合产品" + 0 + "件";

            document.getElementById("ContentPlaceHolder1_lblWarn1").innerHTML = "※";
            document.getElementById("ContentPlaceHolder1_lblWarn2").innerHTML = "ストロークに不正な値が<br>　 入力されました<br>　 再入力を行って下さい";

            // オプションケーブル長ボタン使用不可
            document.getElementById("ContentPlaceHolder1_imgbtnOptionCable").disabled = true;

            return false;
        }
    }

    // データ取得
    //SelectionModels(blnFlag_NotNeed,
    //                intBore1, intBore2, intBore3, intBore4, intBore5, intBore6,
    //                intAir1, intAir2,
    //                intRodless, intRod,
    //                intHorizontal, intVertical,
    //                intStroke)
    SelectionModels(blnFlag_NotNeed,
                    intBore1, intBore2, intBore3, intBore4, intBore5, intBore6,intBore7,intBore8,
                    intAir1, intAir2,
                    intRodless, intRod,
                    intHorizontal, intVertical,
                    intStroke)

}

function onClickEvent(own) {

    //隠し項目に値を格納
    setItems(own);

    //隠し項目の値より機種選定または候補件数の取得
    SelectModel(own);

    return false;

}

function ChangeInteger(vStr) {

    var rtnInt
    var strTemp
    strTemp = vStr;

    //隠し項目のテキストが空の場合：0
    //隠し項目のテキストが数値の場合：文字→数値変換
    if (vStr == '') {
        rtnInt = 0
    } else {
        rtnInt = parseInt(strTemp)
    }
    return rtnInt
}


function GetConfValue() {
    return "<%=ConfValue%>";
}

function ImageChange(ctr, onoff) {
    var nowSrc = document.getElementById(ctr.id).src;
    var afterSrc;

    with (document) {
        if (onoff == "1") {
            // OffをOnに切り替え
            // 画像を選択状態にする
            afterSrc = nowSrc.replace(/Off/g, "On");
            getElementById(ctr.id).src = afterSrc;
        } else if (onoff == "2") {
            // OffをOnに切り替え
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

    var wkBore1;
    var wkBore2;
    var wkBore3;
    var wkBore4;
    var wkBore5;
    var wkBore6;
    var wkBore7;
    var wkBore8;
    var wkAir1;
    var wkAir2;
    var wkRodless
    var wkRod;
    var wkHorizontal;
    var wkVertical;
    var wkStroke;

    // セッションの値が存在するか確認
    if (sessionStorage.getItem(ssResemble_Bore1) != null) {
        wkBore1 = sessionStorage.getItem(ssResemble_Bore1);
    } else {
        wkBore1 = "";
    }
    if (sessionStorage.getItem(ssResemble_Bore2) != null) {
        wkBore2 = sessionStorage.getItem(ssResemble_Bore2);
    } else {
        wkBore2 = "";
    }
    if (sessionStorage.getItem(ssResemble_Bore3) != null) {
        wkBore3 = sessionStorage.getItem(ssResemble_Bore3);
    } else {
        wkBore3 = "";
    }
    if (sessionStorage.getItem(ssResemble_Bore4) != null) {
        wkBore4 = sessionStorage.getItem(ssResemble_Bore4);
    } else {
        wkBore4 = "";
    }
    if (sessionStorage.getItem(ssResemble_Bore5) != null) {
        wkBore5 = sessionStorage.getItem(ssResemble_Bore5);
    } else {
        wkBore5 = "";
    }
    if (sessionStorage.getItem(ssResemble_Bore6) != null) {
        wkBore6 = sessionStorage.getItem(ssResemble_Bore6);
    } else {
        wkBore6 = "";
    }
    if (sessionStorage.getItem(ssResemble_Bore7) != null) {
        wkBore7 = sessionStorage.getItem(ssResemble_Bore7);
    } else {
        wkBore7 = "";
    }
    if (sessionStorage.getItem(ssResemble_Bore8) != null) {
        wkBore8 = sessionStorage.getItem(ssResemble_Bore8);
    } else {
        wkBore8 = "";
    }
    if (sessionStorage.getItem(ssResemble_Air1) != null) {
        wkAir1 = sessionStorage.getItem(ssResemble_Air1);
    } else {
        wkAir1 = "";
    }
    if (sessionStorage.getItem(ssResemble_Air2) != null) {
        wkAir2 = sessionStorage.getItem(ssResemble_Air2);
    } else {
        wkAir2 = "";
    }
    if (sessionStorage.getItem(ssResemble_Rodless) != null) {
        wkRodless = sessionStorage.getItem(ssResemble_Rodless);
    } else {
        wkRodless = "";
    }
    if (sessionStorage.getItem(ssResemble_Rod) != null) {
        wkRod = sessionStorage.getItem(ssResemble_Rod);
    } else {
        wkRod = "";
    }
    if (sessionStorage.getItem(ssResemble_Horizontal) != null) {
        wkHorizontal = sessionStorage.getItem(ssResemble_Horizontal);
    } else {
        wkHorizontal = "";
    }
    if (sessionStorage.getItem(ssResemble_Vertical) != null) {
        wkVertical = sessionStorage.getItem(ssResemble_Vertical);
    } else {
        wkVertical = "";
    }
    if (sessionStorage.getItem(ssResemble_Stroke) != null) {
        wkStroke = sessionStorage.getItem(ssResemble_Stroke);
    } else {
        wkStroke = "";
    }

    with (document) {
        // 隠し項目への設定
        getElementById("ContentPlaceHolder1_txtHdnBore1").value = wkBore1;
        getElementById("ContentPlaceHolder1_txtHdnBore2").value = wkBore2;
        getElementById("ContentPlaceHolder1_txtHdnBore3").value = wkBore3;
        getElementById("ContentPlaceHolder1_txtHdnBore4").value = wkBore4;
        getElementById("ContentPlaceHolder1_txtHdnBore5").value = wkBore5;
        getElementById("ContentPlaceHolder1_txtHdnBore6").value = wkBore6;
        getElementById("ContentPlaceHolder1_txtHdnBore7").value = wkBore7;
        getElementById("ContentPlaceHolder1_txtHdnBore8").value = wkBore8;
        getElementById("ContentPlaceHolder1_txtHdnAirPressure1").value = wkAir1;
        getElementById("ContentPlaceHolder1_txtHdnAirPressure2").value = wkAir2;
        getElementById("ContentPlaceHolder1_txtHdnRodless").value = wkRodless;
        getElementById("ContentPlaceHolder1_txtHdnRod").value = wkRod;
        getElementById("ContentPlaceHolder1_txtHdnHorizontal").value = wkHorizontal;
        getElementById("ContentPlaceHolder1_txtHdnVertical").value = wkVertical;

        // 画面への反映
        getElementById("ContentPlaceHolder1_txtStroke").value = wkStroke;

        // 画像のOnOff
        if (wkBore1 == "1") {
            ImageChange(getElementById("ContentPlaceHolder1_imgbtnBore1"), "1");
        }
        if (wkBore2 == "1") {
            ImageChange(getElementById("ContentPlaceHolder1_imgbtnBore2"), "1");
        }
        if (wkBore3 == "1") {
            ImageChange(getElementById("ContentPlaceHolder1_imgbtnBore3"), "1");
        }
        if (wkBore4 == "1") {
            ImageChange(getElementById("ContentPlaceHolder1_imgbtnBore4"), "1");
        }
        if (wkBore5 == "1") {
            ImageChange(getElementById("ContentPlaceHolder1_imgbtnBore5"), "1");
        }
        if (wkBore6 == "1") {
            ImageChange(getElementById("ContentPlaceHolder1_imgbtnBore6"), "1");
        }
        if (wkBore7 == "1") {
            ImageChange(getElementById("ContentPlaceHolder1_imgbtnBore7"), "1");
        }
        if (wkBore8 == "1") {
            ImageChange(getElementById("ContentPlaceHolder1_imgbtnBore8"), "1");
        }
        if (wkAir1 == "1") {
            ImageChange(getElementById("ContentPlaceHolder1_imgbtnAirPressure1"), "1");
        }
        if (wkAir2 == "1") {
            ImageChange(getElementById("ContentPlaceHolder1_imgbtnAirPressure2"), "1");
        }
        if (wkRodless == "1") {
            ImageChange(getElementById("ContentPlaceHolder1_imgbtnRodLess"), "1");
        }
        if (wkRod == "1") {
            ImageChange(getElementById("ContentPlaceHolder1_imgbtnRod"), "1");
        }
        if (wkHorizontal == "1") {
            ImageChange(getElementById("ContentPlaceHolder1_imgbtnHorizontal"), "1");
        }
        if (wkVertical == "1") {
            ImageChange(getElementById("ContentPlaceHolder1_imgbtnVertical"), "1");
        }

        // 機種選定処理の呼び出し
        //if ((wkBore1 != "" || wkBore2 != "" || wkBore3 != "" || wkBore4 != "" || wkBore5 != "" || wkBore6 != "") &&
        //    (wkAir1 != "" || wkAir2 != "") &&
        //    (wkRodless != "" || wkRod != "") &&
        //    (wkHorizontal != "" || wkVertical != "") &&
        //    wkStroke != "") {
        //    // 1～5のセッションが存在する場合、機種選定済として再度処理を行う
        //    SelectModel(this);
        //}
        if ((wkBore1 != "" || wkBore2 != "" || wkBore3 != "" || wkBore4 != "" || wkBore5 != "" || wkBore6 != "" || wkBore7 != "" || wkBore8 != "") &&
            (wkAir1 != "" || wkAir2 != "") &&
            (wkRodless != "" || wkRod != "") &&
            (wkHorizontal != "" || wkVertical != "") &&
            wkStroke != "") {
            // 1～5のセッションが存在する場合、機種選定済として再度処理を行う
            SelectModel(this);
        }
    }


}

// ボア径押下処理
function imgbtnBore_onclick(own) {
    var grpBore = 1;

    // 画像変更
    ImageChange(own, "");
    // グループ単位での画像変更
    ImageGroupChange(grpBore, own);
    // 共通クリック処理
    onClickEvent(own);

    return false;
}

function imgbtnAirPressure_onclick(own) {
    var grpAirPressure = 2;

    // 画像変更
    ImageChange(own, "");
    // グループ単位での画像変更
    ImageGroupChange(grpAirPressure, own);
    // 共通クリック処理
    onClickEvent(own);

    return false;
}

function imgbtnKeijo_onclick(own) {
    var grpForm = 3;

    // 画像変更
    ImageChange(own, "");
    // グループ単位での画像変更
    ImageGroupChange(grpForm, own);
    // 共通クリック処理
    onClickEvent(own);

    return false;
}

function imgbtnToritsuke_onclick(own) {
    var grpDirection = 4;

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
    return false;
}

function errorCheckString(own) {

    if (own.value.match(/[^0-9]+/i) != null) {
        return false;
    } else {
        return true;
    }
}

function createParam() {

    var param;
    var idx;
    var t;
    var p;
    var sd;
    var rd;
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
    var rt;
    var ot;
    var od;
    var ss;
    var st;
    var ssk;

    t = 0;
    p = 0;
    sd = 0;
    rd = 0;
    hz = 0;
    vt = 0;
    l = 0;
    r = 0;
    w = 0;
    g = 0;
    hc = 0;
    cc = 0;
    hl = 0;
    cl = "";
    cm = 0;
    rt = 0;
    ot = 0;
    od = 0;
    sp = 0;
    ac = 0;
    
    if (sessionStorage.getItem(ssIdx) != null && $.trim(sessionStorage.getItem(ssIdx)) != '') {
        idx = sessionStorage.getItem(ssIdx);
    } else {
        idx = 0;
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

    // 仕様書に受け渡す値をすべてパラメータに設定
    param = '?RS=1';
    param += '&PAGE=resemble';
    param += '&IDX=' + idx;
    param += '&F=' + gcECResembleSelection;
    param += '&T=' + t;
    param += '&P=' + p;
    param += '&SD=' + sd;
    param += '&RD=' + rd;
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
    param += '&RT=' + rt;
    param += '&OT=' + ot;
    param += '&OD=' + od;
    param += '&SP=' + sp;
    param += '&AC=' + ac;
    param += '&SS=' + ss;
    param += '&ST=' + st;
    param += '&SSK=' + ssk;

    return param;
}

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
    window.open(gcECTypeSelection + param, '_self');

    return false;
}

// グループでのOnOffを切り替える
function ImageGroupChange(Group, own) {
    var grpBore = 1;
    var grpAirPressure = 2;
    var grpForm = 3;
    var grpDirection = 4;
    var off = 2;

    // 自身以外のチェックを外す
    switch (Group) {
        case grpBore:
            // ボア1
            if (own.id != document.getElementById("ContentPlaceHolder1_imgbtnBore1").id) {
                ImageChange(document.getElementById("ContentPlaceHolder1_imgbtnBore1"), off);

                // チェックがOnの場合のみ、隠し項目の値を変更
                if (document.getElementById("ContentPlaceHolder1_txtHdnBore1").value == "1") {
                    document.getElementById("ContentPlaceHolder1_txtHdnBore1").value = 0;
                }
            }
            // ボア2
            if (own.id != document.getElementById("ContentPlaceHolder1_imgbtnBore2").id) {
                ImageChange(document.getElementById("ContentPlaceHolder1_imgbtnBore2"), off);

                // チェックがOnの場合のみ、隠し項目の値を変更
                if (document.getElementById("ContentPlaceHolder1_txtHdnBore2").value == "1") {
                    document.getElementById("ContentPlaceHolder1_txtHdnBore2").value = 0;
                }
            }
            // ボア3
            if (own.id != document.getElementById("ContentPlaceHolder1_imgbtnBore3").id) {
                ImageChange(document.getElementById("ContentPlaceHolder1_imgbtnBore3"), off);

                // チェックがOnの場合のみ、隠し項目の値を変更
                if (document.getElementById("ContentPlaceHolder1_txtHdnBore3").value == "1") {
                    document.getElementById("ContentPlaceHolder1_txtHdnBore3").value = 0;
                }
            }
            // ボア4
            if (own.id != document.getElementById("ContentPlaceHolder1_imgbtnBore4").id) {
                ImageChange(document.getElementById("ContentPlaceHolder1_imgbtnBore4"), off);

                // チェックがOnの場合のみ、隠し項目の値を変更
                if (document.getElementById("ContentPlaceHolder1_txtHdnBore4").value == "1") {
                    document.getElementById("ContentPlaceHolder1_txtHdnBore4").value = 0;
                }
            }
            // ボア5
            if (own.id != document.getElementById("ContentPlaceHolder1_imgbtnBore5").id) {
                ImageChange(document.getElementById("ContentPlaceHolder1_imgbtnBore5"), off);

                // チェックがOnの場合のみ、隠し項目の値を変更
                if (document.getElementById("ContentPlaceHolder1_txtHdnBore5").value == "1") {
                    document.getElementById("ContentPlaceHolder1_txtHdnBore5").value = 0;
                }
            }
            // ボア6
            if (own.id != document.getElementById("ContentPlaceHolder1_imgbtnBore6").id) {
                ImageChange(document.getElementById("ContentPlaceHolder1_imgbtnBore6"), off);

                // チェックがOnの場合のみ、隠し項目の値を変更
                if (document.getElementById("ContentPlaceHolder1_txtHdnBore6").value == "1") {
                    document.getElementById("ContentPlaceHolder1_txtHdnBore6").value = 0;
                }
            }
            // ボア7
            if (own.id != document.getElementById("ContentPlaceHolder1_imgbtnBore7").id) {
                ImageChange(document.getElementById("ContentPlaceHolder1_imgbtnBore7"), off);

                // チェックがOnの場合のみ、隠し項目の値を変更
                if (document.getElementById("ContentPlaceHolder1_txtHdnBore7").value == "1") {
                    document.getElementById("ContentPlaceHolder1_txtHdnBore7").value = 0;
                }
            }
            // ボア8
            if (own.id != document.getElementById("ContentPlaceHolder1_imgbtnBore8").id) {
                ImageChange(document.getElementById("ContentPlaceHolder1_imgbtnBore8"), off);

                // チェックがOnの場合のみ、隠し項目の値を変更
                if (document.getElementById("ContentPlaceHolder1_txtHdnBore8").value == "1") {
                    document.getElementById("ContentPlaceHolder1_txtHdnBore8").value = 0;
                }
            }

            break;
        case grpAirPressure:
            // エア供給圧力1
            if (own.id != document.getElementById("ContentPlaceHolder1_imgbtnAirPressure1").id) {
                ImageChange(document.getElementById("ContentPlaceHolder1_imgbtnAirPressure1"), off);

                // チェックがOnの場合のみ、隠し項目の値を変更
                if (document.getElementById("ContentPlaceHolder1_txtHdnAirPressure1").value == "1") {
                    document.getElementById("ContentPlaceHolder1_txtHdnAirPressure1").value = 0;
                }
            }
            // エア供給圧力2
            if (own.id != document.getElementById("ContentPlaceHolder1_imgbtnAirPressure2").id) {
                ImageChange(document.getElementById("ContentPlaceHolder1_imgbtnAirPressure2"), off);

                // チェックがOnの場合のみ、隠し項目の値を変更
                if (document.getElementById("ContentPlaceHolder1_txtHdnAirPressure2").value == "1") {
                    document.getElementById("ContentPlaceHolder1_txtHdnAirPressure2").value = 0;
                }
            }

            break;
        case grpForm:
            // ロッドレス
            if (own.id != document.getElementById("ContentPlaceHolder1_imgbtnRodLess").id) {
                ImageChange(document.getElementById("ContentPlaceHolder1_imgbtnRodLess"), off);

                // チェックがOnの場合のみ、隠し項目の値を変更
                if (document.getElementById("ContentPlaceHolder1_txtHdnRodless").value == "1") {
                    document.getElementById("ContentPlaceHolder1_txtHdnRodless").value = 0;
                }
            }
            // ロッド
            if (own.id != document.getElementById("ContentPlaceHolder1_imgbtnRod").id) {
                ImageChange(document.getElementById("ContentPlaceHolder1_imgbtnRod"), off);

                // チェックがOnの場合のみ、隠し項目の値を変更
                if (document.getElementById("ContentPlaceHolder1_txtHdnRod").value == "1") {
                    document.getElementById("ContentPlaceHolder1_txtHdnRod").value = 0;
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
        }

}
