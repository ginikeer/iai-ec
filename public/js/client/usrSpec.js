function DefaultDesign() {
    var objCycleTime = document.getElementById("ctlSpec_tblCalcCycleTime");
    var spanCycleTimeTitleRowidx = 3;                // サイクルタイム結合行番号

    // 計算サイクルタイム
    objCycleTime.rows[2].deleteCell(0);
    objCycleTime.rows[3].deleteCell(0);
    objCycleTime.rows[1].cells[0].rowSpan = spanCycleTimeTitleRowidx;
}

// 押付けの場合に以下デザインに変更
function PressingDesign() {
    var objCondition = document.getElementById("ctlSpec_tblSelectCondition");
    var objCycleTime = document.getElementById("ctlSpec_tblCalcCycleTime");
    var objCycleLife = document.getElementById("ctlSpec_tblTravelingLifeSpan");

    var spanConditioniColidx = 3;               // 選定条件結合列番号
    var spanConditionRowidx = 7;                // 選定条件結合行番号
    var delColConditionRowidxSt = 5;            // 選定条件削除列行番号開始
    var delColConditionRowidxEd = 10;           // 選定条件削除列行番号終了

    var spanCycleTimeColidx = 3;                // サイクルタイム結合列番号
    var spanCycleTimeRowidx = 4;                // サイクルタイム結合行番号
    var spanCycleTimeTitleRowidx = 3;           // サイクルタイム結合行番号
    var delColCycleTimeRowidxSt = 1;            // サイクルタイム削除列行番号開始
    var delColCycleTimeRowidxEd = 3;            // サイクルタイム削除列行番号終了

    var spanLifeColidx = 3;                     // 寿命計算結合列番号
    var spanLifeRowidx = 2;                     // 寿命計算結合行番号
    var delColLifeRowidxSt = 1;                 // 寿命計算削除列行番号開始
    var delColLifeRowidxEd = 1;                 // 寿命計算削除列行番号終了

    // 選定条件
    objCondition.rows[4].cells[1].colSpan = spanConditioniColidx;
    objCondition.rows[4].cells[1].rowSpan = spanConditionRowidx;
    objCondition.rows[4].cells[1].className = "spec-tbl-span-td"
    objCondition.rows[4].deleteCell(2);

    // 不要な列を削除
    for (i = delColConditionRowidxSt; i <= delColConditionRowidxEd; i++) {
        objCondition.rows[i].deleteCell(2);
        objCondition.rows[i].deleteCell(1);
    }


    // 計算サイクルタイム
    objCycleTime.rows[0].cells[1].colSpan = spanCycleTimeColidx;
    objCycleTime.rows[0].cells[1].rowSpan = spanCycleTimeRowidx;
    objCycleTime.rows[0].cells[1].className = "spec-tbl-span-td"
    objCycleTime.rows[0].deleteCell(2);

    // 不要な列を削除
    for (i = delColCycleTimeRowidxSt; i <= delColCycleTimeRowidxEd; i++) {
        objCycleTime.rows[i].deleteCell(2);
        objCycleTime.rows[i].deleteCell(1);
    }
    objCycleTime.rows[1].cells[0].rowSpan = spanCycleTimeTitleRowidx;
    objCycleTime.rows[2].deleteCell(0);
    objCycleTime.rows[3].deleteCell(0);
    objCycleTime.rows[1].cells[0].className = "spec-tbl-span-tr"


    // 計算走行寿命
    objCycleLife.rows[0].cells[1].colSpan = spanLifeColidx;
    objCycleLife.rows[0].cells[1].rowSpan = spanLifeRowidx;
    objCycleLife.rows[0].cells[1].className = "spec-tbl-span-td"
    objCycleLife.rows[0].deleteCell(2);

    // 不要な列を削除
    for (i = delColLifeRowidxSt; i <= delColLifeRowidxEd; i++) {
        objCycleLife.rows[i].deleteCell(2);
        objCycleLife.rows[i].deleteCell(1);
    }
}