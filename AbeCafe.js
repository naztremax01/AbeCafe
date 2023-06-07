var cupsmallprice = 5.00;
var cupmediumprice = 10.00;
var cuplargeprice = 15.00;
var sub = 0.0;


function cup_small(){
  var sub,qty;
  qty = document.frmAbeCafe.cupsmallquantity.value;
  sub = cupsmallprice * qty;
  document.frmAbeCafe.cupsmallsubtotal.value = sub.toFixed(2);
  total();
}

function cup_medium(){
  var sub,qty;
  qty = parseFloat(document.frmAbeCafe.cupmediumquantity.value);
  sub = cupmediumprice * qty;
  document.frmAbeCafe.cupmediumsubtotal.value = sub.toFixed(2);
  total();
}

function cup_large(){
  var sub,qty;
  qty = parseFloat(document.frmAbeCafe.cuplargequantity.value);
  sub = cuplargeprice * qty;
  document.frmAbeCafe.cuplargesubtotal.value = sub.toFixed(2);
  total();
}

function total(){
  var subsmall , submedium, sublarge, grandtotal, qsmall, qmedium, qlarge, quantitytotal;
  subsmall = parseFloat(document.frmAbeCafe.cupsmallsubtotal.value);
  submedium = parseFloat(document.frmAbeCafe.cupmediumsubtotal.value);
  sublarge = parseFloat(document.frmAbeCafe.cuplargesubtotal.value);
  grandtotal = subsmall + submedium + sublarge;
  qsmall = parseFloat(document.frmAbeCafe.cupsmallquantity.value);
  qmedium = parseFloat(document.frmAbeCafe.cupmediumquantity.value);
  qlarge = parseFloat(document.frmAbeCafe.cuplargequantity.value);
  quantitytotal = qsmall + qmedium + qlarge;
  document.frmAbeCafe.grandtotal.value = "RM" + grandtotal.toFixed(2);
  document.frmAbeCafe.quantitytotal.value = quantitytotal.toString();
}

function init(){
    document.frmAbeCafe.custname.value = "";
    document.frmAbeCafe.custemail.value = "";
    document.frmAbeCafe.custphone.value = "";
    document.frmAbeCafe.custaddress.value = "";
    document.frmAbeCafe.cupsmallquantity.value = "";
    document.frmAbeCafe.cupmediumquantity.value = "";
    document.frmAbeCafe.cuplargequantity.value = "";
    document.frmAbeCafe.cupsmallsubtotal.value = "";
    document.frmAbeCafe.cupmediumsubtotal.value = "";
    document.frmAbeCafe.cuplargesubtotal.value= "";
    document.frmAbeCafe.cupsmallflavour.value = "";
    document.frmAbeCafe.cupmediumflavour.value = "";
    document.frmAbeCafe.cuplargeflavour.value = "";
    document.frmAbeCafe.deliverytime.value = "";
    document.frmAbeCafe.quantitytotal.value = "";
    document.frmAbeCafe.grandtotal.value = "";
}

