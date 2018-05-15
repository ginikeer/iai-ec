// セッション管理用のキーを定義
var ssDirection     = "Direction"         // 設置方向
var ssCycleTime     = "CycleTime";        // サイクルタイム
var ssStroke        = "Stroke";           // ストローク
var ssLoad          = "Load";             // 荷重
var ssPress         = "Press";            // 押付け力
var ssLife          = "Life";             // 寿命
var ssSA6Ma         = "SA6MaMomment";     // SA6Maモーメント
var ssSA6Mb         = "SA6MbMomment";     // SA6Mbモーメント
var ssSA6Mc         = "SA6McMomment";     // SA6Mcモーメント
var ssSA6MaMc       = "SA6MaMcMomment";   // SA6Mcモーメント
var ssSA6OverHang   = "SA6OverHang";      // SA6張出負荷長
var ssSA7Ma         = "SA7MaMomment";     // SA7Maモーメント
var ssSA7Mb         = "SA7MbMomment";     // SA7Mbモーメント
var ssSA7Mc         = "SA7McMomment";     // SA7Mcモーメント
var ssSA7MaMc       = "SA7MaMcMomment";   // SA7Mcモーメント
var ssSA7OverHang   = "SA7OverHang";      // SA7張出負荷長
var ssStdLife       = "StandardLife";     // 基準寿命
var ssSpeed = "Speed";                    // 速度
var ssAcceleration = "Acceleration";                    // 加速度
var ssGrvCntrPosition = "GrvCntrPosition";     // 重心位置
var ssGrvCntrXPosition = "GrvCntrXPosition";     // X方向重心位置
var ssGrvCntrYPosition = "GrvCntrYPosition";     // Y方向重心位置
var ssGrvCntrZPosition = "GrvCntrZPosition";     // Z方向重心位置
var ssWorkLoadingState = "WorkLoadingState";    // ワーク積載状態
var ssPointOfAction = "PointOfAction";          // 作用点までの距離
var ssRoundTrip     = "RoundTrip"               // 往復回数 
var ssOperatingTime = "OperatingTime"           // 稼働時間
var ssOperatingDay  = "OperatingDay"            // 稼働日数
var ssCalcResult    = "CalcResult";             // 計算結果
var ssHopeCycleTime = "HopeCycleTime"       // 要求サイクルタイム
var ssHopeLife      = "HopeLife"            // 希望寿命
var ssCycleTimeHopeOrFastKbn = "CycleTimeHopeOrFastKbn"            // サイクルタイム選択区分
var ssLinearGuideRod = "LinearGuideRod"     //ガイド方式選択
var ssOffSetDistance = "OffSetDistance";    //オフセット距離
var ssOverhangDistance = "OverhangDistance";    //張り出し距離
var ssLinearGuideSmall = "LinearGuideSmall";    //細小型ガイド方式選択

var ssPrice         = "Price"     //金額
var ssImgName       = "ImgName"　 //画像名
var ssFullName      = "FullName"  //機種名


var ssTransport = "Transport";
var ssPressing = "Presssing";
var ssSlider = "Slider";
var ssRod = "Rod";
var ssSmallType = "SmallType";
var ssHorizontal = "Horizontal";
var ssVertical = "Vertical";
var ssPressingForce = "PressingForce"

var ssSelectSeries = "SelectSeries";        // シリーズ
var ssSelectType = "SelectType";            // 型式
var ssSelectStroke = "SelectStroke";        // ストローク
var ssCalcCycleTime = "CalcCycleTime";       // サイクルタイム
var ssCalcLife = "CalcLife";            // 寿命予測計算
var ssCalcDistance= "CalcDistance";        // 走行寿命計算
var ssCalcMoment = "CalcMoment";        // モーメント

var ssDownSeries = "DownSeries"
var ssDownType = "DownType"
var ssDownStroke =  "DownStroke"
var ssDownPrice = "DownPrice"
var ssDownListOrder = "DownListOrder"
var ssDownTypeName = "DownTypeName"
var ssDownTypeForm = "DownTypeForm"
var ssDownTransport = "DownTransport"
var ssDownPressing = "DownPressing"
var ssDownHorizontal = "DownHorizontal"
var ssDownVertical = "DownVertical"
var ssDownStandardLife = "DownStandardLife"
var ssDownSpeed = "DownSpeed"
var ssDownAcceleration = "DownAcceleration"
var ssDownCalcCycleTime = "DownCalcCycleTime"
var ssDownImgName = "DownImgName"
var ssDownFullName = "DownFullName"
var ssDownCalcMoment = "DownCalcMoment"
var ssDownCalcDistance = "DownCalcDistance"
var ssDownCalcLife = "DownCalcLife"

var ssResemble_Bore1 = "Resemble_Bore1";
var ssResemble_Bore2 = "Resemble_Bore2";
var ssResemble_Bore3 = "Resemble_Bore3";
var ssResemble_Bore4 = "Resemble_Bore4";
var ssResemble_Bore5 = "Resemble_Bore5";
var ssResemble_Bore6 = "Resemble_Bore6";
var ssResemble_Bore7 = "Resemble_Bore7";
var ssResemble_Bore8 = "Resemble_Bore8";
var ssResemble_Air1 = "Resemble_Air1";
var ssResemble_Air2 = "Resemble_Air2";
var ssResemble_Rodless = "Resemble_Rodless";
var ssResemble_Rod = "Resemble_Rod";
var ssResemble_Horizontal = "Resemble_Horizontal";
var ssResemble_Vertical = "Resemble_Vertical";
var ssResemble_Stroke = "Resemble_Stroke"

var ssTemp = "Temp";

// ifream请求页面
//2.形状 
var gcECRequirementLinearGuideRod       = baseurl + "/ECRequire/rod";
//5.输入负载 
var gcECRequirementLoadSlider           = baseurl + "/ECRequire/slider";
var gcECRequirementLoadRod              = baseurl + "/ECRequire/loadrod";
var gcECRequirementPressRod             = "ECRequirementPressRod.aspx";
//6.输入周期时间 
var gcECRequirementCycleTimeSlider      = baseurl + "/ECRequire/time";
var gcECRequirementCycleTimeRod         = baseurl + "/ECRequire/cycletimerod";
var gcECRequirementCycleTimeSmall       = baseurl + "/ECRequire/cycletimesmall";
//7.输入设备运行时间
var gcECRequirementRunningTime          = baseurl + "/ECRequire/life";
//详细页
var gcECSpec                            = baseurl + "/EC/spec";
//e电缸在线选型
var gcECTypeSelection                   = baseurl + "/EC/type";
var gcECResembleSelection               = "ECResembleSelection.aspx";
var gcECRequirementSelection            = baseurl + "/ECRequire";
var gcECRequirementLoadRodLinerGuide    = baseurl + "/ECRequire/loadrodlinerguide";
//5.输入负载 
var gcECRequirementLoadSmall            = baseurl + "/ECRequire/loadsmall";
//5.输入负载 
var gcECRequirementPressingSmall        = baseurl + "/ECRequire/pressingsmall";

// 計算区分
var clcMoment = "Moment";
var clcLife = "Life";

// 走行寿命限界
var gcDistanceLimit = 2500;

// エラー区分（Enumとして保持しているが、JavaScript側でも管理）
var enmERROR_KBN_OVERHANG = 1;
var enmERROR_KBN_DISTANCE = 2;
var enmERROR_KBN_RRCHANGE = 3;

ECMS_HOST_URL = window.location.href.slice(0, window.location.href.indexOf('/Page'));

// ワーク積載状態
var stateH1 = 1;
var stateH2 = 2;
var stateH3 = 3;
var stateH4 = 4;
var stateH5 = 5;
var stateH6 = 6;
var stateV7 = 7;
var stateV8 = 8;
var stateV9 = 9;

// ガイド方式区分名称
var stateLGNon = -1;   //選択無し								
var stateLG1   = 1;    //ロッド								
var stateLG2   = 2;    //ラジアルシリンダー								
var stateLG3   = 3;    //防塵防滴		
var stringLG1  = "標準型を選択中";          //ロッド								
var stringLG2 = "ラジアルシリンダーを選択中";    //ラジアルシリンダー								
var stringLG3 = "防水型を選択中";              //防塵防滴		


// ガイド方式区分名称
var stateSTNon = -1;   //選択無し								
var stateST_RP = 1;    //RP
var stateST_GS = 2;    //GS
var stateST_GD = 3;    //GD
var stateST_TC = 4;    //TC
var stateST_TW = 5;    //TW

// 走行寿命下限値
var gcLifeLowLimit = "2500";

// 最大桁数の変更
function setKeta(obj, keta) {
    obj.setAttribute("maxLength", keta, false);
};

function numOnly(obj, numDecimalPoint, blnMinusFlag) {
    var code = event.keyCode;
    var shift = event.shiftKey;
    if ((code >= 96 && code <= 105) ||  // テンキー0～9チェック
        ((code >= 48 && code <= 57) && shift == false) ||   // メインキー0～9チェック（SHIFTが押されていない場合のみ）       
        (code >= 35 && code <= 40) ||
        code == 13 ||                   // ENTERキーチェック
        code == 8 ||                    // BACKSPACEチェック
        code == 9 ||                    // TABチェック
        code == 46 ||                   // Delete
        (
            obj.value.indexOf(".") == -1 &&                  // 「.」
            ((numDecimalPoint > 0 && code == 110) ||
            (numDecimalPoint > 0 && code == 190))
        ) ||
        (
            obj.value.indexOf("-") == -1 &&                 //  「-」
            ((blnMinusFlag == true && code == 109) ||
            (blnMinusFlag == true && code == 189))
        )
      ) {
      
        return true;

    } else {
        return false;
    }

}

// 3桁区切の設定
function serKetaKugiri(obj, keta, bln) {

    // 桁数を設定する
    setKeta(obj, keta);

    var num = new String(obj.value).replace(/,/g, "");
    var str = "";
    if (num == "") {
        // 数値でない場合、空にする
        obj.value = str;
    } else if (isNaN(num)) {
        // 数値でない場合、空にする
        obj.value = str;
    } else if (Math.abs(num) > 999999999) {
        // 最大桁数を超えている場合、空にする
        obj.value = str;
        //    } else if (num > 999999999) {
        //        // 最大桁数を超えている場合、空にする
        //        obj.value = str;
        //    } else if (num < 0) {
        //        // 0より小さい場合、空にする
        //        obj.value = str;
    } else {
        // 数値の場合は処理する
        if (bln) {
            // 少数第４位で四捨五入する
            num = num * 1000;
            num = Math.round(num);
            num = num / 1000;
            obj.value = num;

            // ３桁編集を行う
            str = new String(obj.value).replace(/,/g, "");
            while (str != (str = str.replace(/^(-?\d+)(\d{3})/, "$1,$2")));
        } else {
            // ３桁編集を解除する
            str = new String(obj.value).replace(/,/g, "");
        }

        obj.value = str;

        if (bln) {
        } else {
            obj.select();
        }
    }
};

// 改行コードを空欄に変換
function KaigyoSpace(obj) {
    obj.value = new String(obj.value).replace("/n", "");
};


// 3桁区切の設定(一覧にてUpdatePanelと併用する場合に使用)
function serKetaKugiriList(obj, keta, blniscomma, blnisfocus) {

    // 桁数を設定する
    setKeta(obj, keta);

    var num = new String(obj.value).replace(/,/g, "");
    var str = "";
    if (isNaN(num)) {
        // 数値でない場合、空にする
        obj.value = str;
    } else if (num > 999999999) {
        // 最大桁数を超えている場合、空にする
        obj.value = str;
    } else if (num < 0) {
        // 0より小さい場合、空にする
        obj.value = str;
    } else {
        // 数値の場合は処理する
        if (blniscomma) {
            // ３桁編集を行う
            str = new String(obj.value).replace(/,/g, "");
            while (str != (str = str.replace(/^(-?\d+)(\d{3})/, "$1,$2")));
        } else {
            // ３桁編集を解除する
            str = new String(obj.value).replace(/,/g, "");
        }

        obj.value = str;

        if (blnisfocus) {
            obj.select();
        }
    }
};

// 3桁区切の設定 ※コントロールに依存せずに取得したい場合
function setComma(val, blnisset, blnischeckctl) {

    var str = "";

    // 3桁区切の設定を行う場合
    if (blnisset) {

        // 数値チェック
        if (isNaN(val) == false) {

            // serKetaKugiriListと同じチェックを行う場合
            if (blnischeckctl) {

                // マイナスもしくは最大値を超えている場合にはゼロ扱いにする
                if (Number(val) < 0 || Number(val) > 999999999) {
                    str = "0";
                }

            }

            // ３桁編集を行う
            str = new String(val).replace(/,/g, "");
            while (str != (str = str.replace(/^(-?\d+)(\d{3})/, "$1,$2")));

        }
        else {

            // serKetaKugiriListと同じチェックを行う場合
            if (blnischeckctl) {
                // ゼロにする
                str = "0";
            }

        }

    } else {

        // ３桁編集を解除する
        str = new String(val).replace(/,/g, "");

        // 数値チェック
        if (isNaN(str) == false) {

            // serKetaKugiriListと同じチェックを行う場合
            if (blnischeckctl) {

                // マイナスもしくは最大値を超えている場合にはゼロ扱いにする
                if (Number(str) < 0 || Number(str) > 999999999) {
                    str = "0";
                }

            }

        }
        else {

            // serKetaKugiriListと同じチェックを行う場合
            if (blnischeckctl) {
                // ゼロにする
                str = "0";
            }

        }

    }

    return str;

};

// 3桁区切の設定
function serKetaKugiri(obj, keta, bln, numPoint, numDecimalPoint) {

    // 桁数を設定する
    setKeta(obj, keta);

    var num = new String(obj.value).replace(/,/g, "");
    var str = "";
    var intLen = 0
    var blnMinusFlag = new Boolean

    //処理の為にマイナスを取る
    if (obj.value.indexOf("-") == -1) {
        blnMinusFlag = false
    } else {
        blnMinusFlag = true
        obj.value = obj.value.replace(/-/, "");
        num = num.replace(/-/, "");
    }

    if (num == "") {
        // 数値でない場合、空にする
        obj.value = str;
    } else if (isNaN(num)) {
        // 数値でない場合、空にする
        obj.value = str;
    } else if (num < 0) {
        // 0より小さい場合、空にする
        obj.value = str;
    } else {
        // 数値の場合は処理する
        if (bln) {

            // 端数処理：小数部
            obj.value = FractionProc(num, cstHasuType_Sute, numDecimalPoint)

            //端数処理：整数部
            if (Math.abs(obj.value) > NumMax(numPoint, numDecimalPoint)) {

                intLen = 0

                //1桁目の位置を取得
                if (obj.value.indexOf(".") == -1) {
                    intLen = obj.value.length;

                } else {
                    intLen = obj.value.indexOf(".");

                }

                //取得
                //obj.value = obj.value.substr(intLen - numPoint);

            }

            // ３桁編集を行う
            str = new String(obj.value).replace(/,/g, "");
            while (str != (str = str.replace(/^(-?\d+)(\d{3})/, "$1,$2")));

            //小数点以下ゼロ埋め
            if (setNumber(str) != "" && setNumber(numDecimalPoint) != "" && numDecimalPoint != 0) {

                intLen = 0

                //小数点以下が入力されているか
                if (str.indexOf(".") > -1) {
                    //入力されている場合、入力されている桁数を取得
                    intLen = str.substr(str.indexOf(".") + 1).length + 1;

                } else {
                    ////入力されていない場合、「カンマ」追加
                    //str = str + ".";
                    //intLen = 1

                }

                ////少数部の桁数分だけ、「0」を追加
                //for (var i = intLen; i <= numDecimalPoint; i++) {

                //    str = str + "0";

                //}

            }

        } else {
            // ３桁編集を解除する
            str = new String(obj.value).replace(/,/g, "");
        }

        //マイナスフラグがTrueの場合にマイナスを頭に付ける
        if (blnMinusFlag == false) {

        } else {
            str = "-" + str;

        }

        obj.value = str;

        if (bln) {
        } else {
            obj.select();
        }
    }
};

// 3桁区切の設定
function setKetaKugiri(obj, keta, bln, numPoint, numDecimalPoint) {

    // 桁数を設定する
    setKeta(obj, keta);

    var num = new String(obj.value).replace(/,/g, "");
    var str = "";
    var intLen = 0
    var blnMinusFlag = new Boolean

    //処理の為にマイナスを取る
    if (obj.value.indexOf("-") == -1) {
        blnMinusFlag = false
    } else {
        blnMinusFlag = true
        obj.value = obj.value.replace(/-/, "");
        num = num.replace(/-/, "");
    }

    if (num == "") {
        // 数値でない場合、空にする
        obj.value = str;
    } else if (isNaN(num)) {
        // 数値でない場合、空にする
        obj.value = str;
    } else if (num < 0) {
        // 0より小さい場合、空にする
        obj.value = str;
    } else {
        // 数値の場合は処理する
        if (bln) {

            // 端数処理：小数部
            obj.value = FractionProc(num, cstHasuType_S4A5, numDecimalPoint)

            //端数処理：整数部
            if (Math.abs(obj.value) > NumMax(numPoint, numDecimalPoint)) {

                intLen = 0

                //1桁目の位置を取得
                if (obj.value.indexOf(".") == -1) {
                    intLen = obj.value.length;

                } else {
                    intLen = obj.value.indexOf(".");

                }

                //取得
                obj.value = obj.value.substr(intLen - numPoint);

            }

            // ３桁編集を行う
            str = new String(obj.value).replace(/,/g, "");
            while (str != (str = str.replace(/^(-?\d+)(\d{3})/, "$1,$2")));

            //小数点以下ゼロ埋め
            if (setNumber(str) != "" && setNumber(numDecimalPoint) != "" && numDecimalPoint != 0) {

                intLen = 0

                //小数点以下が入力されているか
                if (str.indexOf(".") > -1) {
                    //入力されている場合、入力されている桁数を取得
                    intLen = str.substr(str.indexOf(".") + 1).length + 1;

                //} else {
                //    //入力されていない場合、「カンマ」追加
                //    str = str + ".";
                //    intLen = 1

                //}

                //少数部の桁数分だけ、「0」を追加
                //for (var i = intLen; i <= numDecimalPoint; i++) {

                //    str = str + "0";

                }

            }

        } else {
            // ３桁編集を解除する
            str = new String(obj.value).replace(/,/g, "");
        }

        //マイナスフラグがTrueの場合にマイナスを頭に付ける
        if (blnMinusFlag == false) {

        } else {
            str = "-" + str;

        }

        obj.value = str;

        if (bln) {
        } else {
            obj.select();
        }
    }
};

// 桁数を元に、最大値を返却
function NumMax(keta, numDecimalPoint) {
    if (setNumber(keta) == "" || setNumber(numDecimalPoint) == "") {
        // 数値でない場合は、[]を戻す
        return 0;
    } else {

        var strNumber = "";

        if (keta == 0) {
            strNumber = "0"

        } else {

            for (var i = 0; i < keta; i++) {

                strNumber = strNumber + "9";

            }

        }

        if (numDecimalPoint != 0) {

            strNumber = strNumber + ".";

            for (var i = 0; i < numDecimalPoint; i++) {

                strNumber = strNumber + "9";

            }

        }

        return (strNumber - 0);

    }
};


// 数値の設定
function setNumber(obj) {
    if (isNaN(obj.value)) {
        // 数値でない場合は、[]を戻す
        obj.value = "";
    }
};

// 端数タイプ
var cstHasuType_Age = 0;            //切り上げ
var cstHasuType_Sute = 1;           //切り捨て
var cstHasuType_S4A5 = 2;           //四捨五入

// 端数処理
function FractionProc(numNumber, numHasuType, numDecimalPlaces) {

    var numShift = Math.pow(10, numDecimalPlaces);
    var numWork = (numNumber * numShift);

    //javascriptの浮動小数点に関するバグ回避のため
    numWork = Math.floor(numWork * 100) / 100

    switch (numHasuType) {
        case cstHasuType_Age:
            numWork = Math.ceil(numWork);
            break;
        case cstHasuType_Sute:
            numWork = Math.floor(numWork);
            break;
        case cstHasuType_S4A5:
            numWork = Math.round(numWork);
            break;
    }
    var numWork = numWork / numShift;
    return numWork;
}

// ポップアップ画面への遷移
function winOpen(url, name) {

    l = 60; // 表示するx座標
    t = 30; // 表示するy座標
    w = 1024; // 横幅
    h = 768;  // 縦幅

    x = (screen.width - w) / 2;
    y = (screen.height - h) / 2;
    window.open(url, name,
        "screenX=" + x + ",screenY=" + y + ",left=" + x + ",top=" + y + ",width=" + w + ",height=" + h +
        ",scrollbars=yes,status=yes,resizable=yes");

}
// ポップアップ画面への遷移（画面サイズ指定）
function winOpenWH(url, name, w, h) {

    x = (screen.width - w) / 2;
    y = (screen.height - h) / 2;
    window.open(url, name,
        "screenX=" + x + ",screenY=" + y + ",left=" + x + ",top=" + y + ",width=" + w + ",height=" + h +
        ",scrollbars=yes,status=yes,resizable=yes,location=no,menubar=no");

}

// ダイアログ画面への遷移
function goDialog(url, arg) {

    var retrunValue = showModalDialog(url, arg, 'center:true;status:true;dialogWidth:1024px;dialogHeight:768px');

};

// ダイアログ画面への遷移（画面サイズ指定）
function goDialogWH(url, arg, w, h) {

    var retrunValue = showModalDialog(url, arg, 'center:true;status:true;dialogWidth:' + w + ';dialogHeight:' + h);

};

// 選択行の保持
function SelectedRow(rowNum, objHidden) {

    objHidden.value = rowNum;

};

// 要素内のキャレット位置を設定する関数
function setCaretPositionIE(elem, caret_position) {
    var range = elem.createRange();
    range.collapse();

    // rangeの幅を新規設定
    range.moveEnd("character", caret_position); // endを先に
    range.moveStart("character", caret_position);
    range.select();
}


// 日付変換（yyyymm→yyyy/mm）
function chgDate(obj) {
    if (typeof (obj.value) != "string") return false;
    var word = obj.value;
    if (word.length == 6 && word.match(/^\d+$/)) {
        obj.value = word.substring(0, 4) + '/' + word.substring(4, 6);
    }
}

// 日付変換（yyyymmdd→yyyy/mm/dd）
function chgDateYMD(obj) {
    if (typeof (obj.value) != "string") return false;
    var word = obj.value;
    if (word.length == 8 && word.match(/^\d+$/)) {
        obj.value = word.substring(0, 4) + '/' + word.substring(4, 6) + '/' + word.substring(6, 8);
    }
}


// 数値入力制御
function CheckNum() {
    if (((event.keyCode < 48) || (event.keyCode > 57))) {
        return false;
    }
}

// 和暦変換（８桁Or１０桁）
function chgDateWareki(obj) {
    if (typeof (obj.value) != "string") return false;
    var word = obj.value;
    if (word.length == 8 && word.match(/^\d+$/)) {
        obj.value = toWareki(word.substring(0, 4), word.substring(4, 6), word.substring(6, 8));
    }
    if (word.length == 10) {
        obj.value = toWareki(word.substring(0, 4), word.substring(5, 7), word.substring(8, 10));
    }
}

// 日本語指定文字数切り(maxLength未使用版)
function CheckLenJP(obj, numLen) {

    var str = obj.value;

    //文字数指定かつ指定文字数を超えている場合
    if (numLen == 0 || str.length >= numLen) {	
        str = str.substring(0, numLen);         //指定文字数で切り捨て
        obj.value = str;	
    }
}

//寿命計算
function CalcLife(calcKbn           // 計算区分
                  , i1              // 積載質量
                  , i2              // 重心位置
                  , i3              // 取付方向
                  , i4              // 加減速度
                  , i5              // SA6 Maモーメント
                  , i6              // SA6 Mbモーメント
                  , i7              // SA6 Mcモーメント
                  , i8              // SA6 MaMcモーメント計算位置
                  , i9              // SA6 張出負荷長
                  , i10             // SA7 Maモーメント
                  , i11             // SA7 Mbモーメント
                  , i12             // SA7 Mcモーメント
                  , i13             // SA7 MaMcモーメント計算位置
                  , i14             // SA7 張出負荷長
                  , i15             // 基準寿命
                  , i16             // 稼働時間（往復/分）
                  , i17             // 稼働時間（時間/日）
                  , i18             // 稼働時間（日/年）
                  , i19             // ストローク
                  ) {
    var oLife;                         // 走行寿命
    var oMmt;                          // モーメント
    var o10;
    var o101;
    var wkL1;
    var wkL2;
    var wkL3;
    var wkL4;
    var wkM1;
    var wkM2;
    var wkM3;
    var wkM4;
    var wkYear;
    var wkMonth;
    var SelSA;
    var cnstSA6 = "SA6";
    var cnstSA7 = "SA7";
    var rtn;

    if (i2 <= i9 * 1.5) {
        // SA6 選択
        SelSA = cnstSA6;

    } else if (i9 * 2 < i2 && i2 <= i14 * 1.5) {
        // SA7 選択
        SelSA = cnstSA7;
    } else if (i2 > i14 * 1.5) {
        // 選定機種なし
        return 0;
    }

    // SA判定によるモーメントの計算
    if (SelSA = cnstSA6) {

        switch (i3) {
            case stateH1:
                wkL1 = ((i7 / (i1 * i2 * 9.8)) ^ 3) * i15;
                wkL2 = ((i6 / (i1 * i2 * 9.8 * i4)) ^ 3) * i15;

                wkM1 = i1 * i2 * 9.8;
                wkM2 = i1 * i2 * 9.8 * i4;

                // 小さい方を設定する
                if (wkM1 < wkM2) {
                    oMmt = wkM1;
                } else {
                    oMmt = wkM2;
                }

                if (wkL1 < wkL2) {
                    oLife = wkL1;
                } else {
                    oLife = wkL2;
                }
                break;
            case stateH2:
                oLife = ((i5 / (i1 * i2 * 9.8)) ^ 3) * i15;
                break;
            case stateH3:
                oLife = ((i5 / (i1 * (i2 + i8) * 9.8 * i4)) ^ 3) * i15;
                break;
            case stateH4:
                oLife = ((i6 / (i1 * i2 * 9.8 * i4)) ^ 3) * i15;
                break;
            case stateH5:
                oLife = ((i5 / ((i1 * i4 * 9.8 * i4))) ^ 3) * i15;
                break;
            case stateH6:
                oLife = ((i5 / (i1 * (i2 + i8) * 9.8 * (1 + i3))) ^ 3) * i15;
                break;
            case stateV7:
                wkL3 = ((i6 / (i1 * i2 * 9.8 * i4)) ^ 3) * i15;
                wkL4 = ((i7 / (i1 * (i2 + i8) * 9.8)) ^ 3) * i15;

                wkM3 = i1 * i2 * 9.8 * i4;
                wkM4 = i1 * (i2 + i8) * 9.8;

                // 小さい方を設定する
                if (wkM3 < wkM4) {
                    oMmt = wkM3;
                } else {
                    oMmt = wkM4;
                }

                // 小さい方を設定する
                if (wkL3 < wkL4) {
                    oLife = wkL3;
                } else {
                    oLife = wkL4;
                }
                break;
            case stateV8:
                oLife = ((i6 / (i1 * i2 * 9.8 * (1 + i4))) ^ 3) * i15;
                break;
            case stateV9:
                oLife = ((i7 / (i1 * (i2 + i8) * 9.8)) ^ 3) * i15;
                break;
        }
    } else if (SelSA = cnstSA7) {
        switch (i3) {
            case stateH1:
                wkL1 = ((i12 / (i1 * i2 * 9.8)) ^ 3) * i15;
                wkL2 = ((i11 / (i1 * i2 * 9.8 * i4)) ^ 3) * i15;

                wkM1 = i1 * i2 * 9.8;
                wkM2 = i1 * i2 * 9.8 * i4;

                // 小さい方を設定する
                if (wkM1 < wkM2) {
                    oMmt = wkM1;
                } else {
                    oMmt = wkM2;
                }

                // 小さい方を設定する
                if (wkL1 < wkL2) {
                    oLife = wkL1;
                } else {
                    oLife = wkL2;
                }
                break;
            case stateH2:
                oLife = ((i10 / (i1 * i2 * 9.8)) ^ 3) * i15;
                break;
            case stateH3:
                oLife = ((i10 / (i1 * (i2 + i13) * 9.8 * i4)) ^ 3) * i15;
                break;
            case stateH4:
                oLife = ((i11 / (i1 * i2 * 9.8 * i4)) ^ 3) * i15;
                break;
            case stateH5:
                oLife = ((i10 / ((i1 * i4 * 9.8 * i4))) ^ 3) * i15;
                break;
            case stateH6:
                oLife = ((i10 / (i1 * (i2 + i13) * 9.8 * (1 + i3))) ^ 3) * i15;
                break;
            case stateV7:
                wkL3 = ((i11 / (i1 * i2 * 9.8 * i4)) ^ 3) * i15;
                wkL4 = ((i12 / (i1 * (i2 + i13) * 9.8)) ^ 3) * i15

                wkM3 = i1 * i2 * 9.8 * i4;
                wkM4 = i1 * (i2 + i13) * 9.8;

                // 小さい方を設定する
                if (wkM3 < wkM4) {
                    oMmt = wkM3;
                } else {
                    oMmt = wkM4;
                }

                // 小さい方を設定する
                if (wkL3 < wkL4) {
                    oLife = wkL3;
                } else {
                    oLife = wkL4;
                }
                break;
            case stateV8:
                oLife = ((i11 / (i1 * i2 * 9.8 * (1 + i4))) ^ 3) * i15;
                break;
            case stateV9:
                oLife = ((i12 / (i1 * (i2 + i8) * 9.8)) ^ 3) * i15;
                break;
        }
    }

    // 運転時間の入力が行われているか判定
    if (i16.length > 0 && i17.length > 0 && i18.length > 0) {
        // 走行寿命と下限値の比較
        if (oLife > gcLifeLowLimit) {
            o10 = (oLife) * 1000000 / i19 / 2 / i17 / 60 / i16;
            wkYear = o10 / i18;                             // 年
            wkMonth = (o10 % i8) / 30                       // 月
            o101 = wkYear + "年" + wkMonth + "ヵ月";

            rtn = o101;
        } else {
            // 寿命計算における戻り値0は該当機種なしと同様
            rtn = "0";
        }

    } else {
        if(calcKbn == clcMoment){
            rtn = oMmt;
        }else{
            rtn = "0";
        }
    }

   return rtn;
}

// セッションクリア
function SessionClear() {
    // すべて消去
    sessionStorage.clear();
}

//判断所有必选项是否都填写
function checkNullAll() {
	$(".ErrorFont").hide();
	var flag = true;
	
	$(".required-item").each(function() {
	 	if( $(this).val() == "" ) {
	 		$(this).parents('td').siblings('.lblError').find('.ErrorFont').show().text('此项目为必填项');
	 		flag = false;
	 	}
	});
	
	return flag;
}

