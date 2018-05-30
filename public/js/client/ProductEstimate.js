var intRowTax;
var intRowTotal;
var taxrate;

function calc(own) {
    var idSplit = own.id.split("_");
    var rowNum = Number(idSplit[3]) + 1;    // 自身のidから行数を取得
    var GridView1 = document.getElementById('ContentPlaceHolder1_grdView');
    var classifitaion;                      // 分類
    var svTaxRowNo = 0;                     // 消費税行番号
    var svTotalRowNo = 0;                   // 合計行番号
    var taxTotal = 0;                       // 消費税合計
    var priceTotal = 0;                     // 金額合計
    var tax = 0;                            // 消費税
       
        
    // 金額計算
    if (GridView1.rows[rowNum].cells[3].children[0].value != "") {
        // 単価 * 数量
        var unitprice = setComma(GridView1.rows[rowNum].cells[2].children[0].value,false,false);
        var num = GridView1.rows[rowNum].cells[3].children[0].value;

        if (num.match(/[^0-9]+/i) != null) {
            alert('“数量”中请输入半角整数值\n请再次输入数量。')
            GridView1.rows[rowNum].cells[3].children[0].value = '';
            GridView1.rows[rowNum].cells[4].children[0].value = '';
            GridView1.rows[rowNum].cells[3].children[0].focus();
            return false;
        }

        var total = unitprice * num;
        GridView1.rows[rowNum].cells[4].children[0].value = setComma(total,true,false);

        // 消費税、合計の計算を行う
        for (i = 1; i < intRowTax ; i++) {
            tax = Math.floor(Number(setComma(GridView1.rows[i].cells[4].children[0].value, false, false)) * taxrate);
            taxTotal += tax;
            priceTotal += Math.floor(Number(setComma(GridView1.rows[i].cells[4].children[0].value,false,false)) + tax);
        }

        //グリッドにセット
        GridView1.rows[intRowTax].cells[4].children[0].value = setComma(taxTotal,true,false);
        //GridView1.rows[intRowTotal].cells[4].children[0].value = setComma(priceTotal, true, false);
        GridView1.rows[intRowTotal].cells[1].children[0].value = setComma(priceTotal, true, false);

    }
}