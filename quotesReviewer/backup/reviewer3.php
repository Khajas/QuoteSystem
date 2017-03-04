<?php
include("controller2.php");
$quote_id=$_GET['quote'];
$_SESSION['controller']=new quoteReviewer();

$quote=$_SESSION['controller']->getQuote($quote_id);
$line=$_SESSION['controller']->listItems($quote_id);

echo'<form action="../reviewer4.php" method="post">';
foreach($quote as $var)
{
	echo'<input type="hidden" name="quoteid" value="'.$var['quote_id'].'">';
	echo'loop';
}
echo'<table>';
foreach($quote as $var)
{
echo'<tr><td>Quote ID:</td><td>'.$var['quote_id'].'</td></tr>';
echo'<tr><td>Sales Assisciate ID:</td><td>'.$var['saoc_id'].'</td></tr>';
echo'<tr><td>Date:</td><td>'.$var['date'].'</td></tr>';
echo'<tr><td>Email: </td><td>'.$var['email'].'</td></tr>';
}
echo'</table>';
echo'<table>';
?>
<SCRIPT LANGUAGE="JavaScript">
function addRowToTable(count){
        count++;
  var tbl = document.getElementById('tblSample');
  var lastRow = tbl.rows.length;
  // if there's no header row in the table, then iteration = lastRow + 1
  var iteration = lastRow;
  var row = tbl.insertRow(lastRow);
  
   var cellLeft = row.insertCell(0);
  var textNode = document.createTextNode(iteration);
  cellLeft.appendChild(textNode);

  // right cell
  var cellRight = row.insertCell(1);
  var el = document.createElement('input');
  el.type = 'text';
  el.name = 'itemDesc' + iteration;
  el.id = 'itemDesc' + iteration;
  el.size = 40;

  el.onkeypress = keyPressTest;
  cellRight.appendChild(el);

  var cellPrice = row.insertCell(2);
  var ell = document.createElement('input');
  ell.type = 'text';
  ell.name = 'itemPrice' + iteration;
  ell.id = 'itemPrice' + iteration;
  ell.size = 5;

  ell.onkeypress = keyPressTest;
  cellPrice.appendChild(ell);

}

function keyPressTest(e, obj){
  var validateChkb = document.getElementById('chkValidateOnKeyPress');
  if (validateChkb.checked) {
    var displayObj = document.getElementById('spanOutput');
    var key;
    if(window.event) {
      key = window.event.keyCode;
    }
    else if(e.which) {
      key = e.which;
    }
    var objId;
    if (obj != null) {
      objId = obj.id;
    } else {
      objId = this.id;
    }
    displayObj.innerHTML = objId + ' : ' + String.fromCharCode(key);
  }
}
function removeRowFromTable(){
  var tbl = document.getElementById('tblSample');
  var lastRow = tbl.rows.length;
  if (lastRow > 2) tbl.deleteRow(lastRow - 1);
}

function openInNewWindow(frm){
  // open a blank window
  var aWindow = window.open('', 'TableAddRowNewWindow',
   'scrollbars=yes,menubar=yes,resizable=yes,toolbar=no,width=400,height=400');

  // set the target to the blank window
  frm.target = 'TableAddRowNewWindow';

  // submit
  frm.submit();
}

function validateRow(frm){
  var chkb = document.getElementById('chkValidate');
  if (chkb.checked) {
    var tbl = document.getElementById('tblSample');
    var lastRow = tbl.rows.length - 1;
    var i;
    for (i=1; i<=lastRow; i++) {
      var aRow = document.getElementById('txtRow' + i);
      if (aRow.value.length <= 0) {
        alert('Row ' + i + ' is empty');
        return;
      }
    }
  }
  openInNewWindow(frm);
}
</SCRIPT>
<?php
echo'</table>';
$snum=1;

echo'<!-----------------     Line Items should be added here-------------------------------->
 <table border="1" id="tblSample">
    <tr><th>S.no</th>
                <th>Line Item Description</th>
                              <th>Price($)</th>
    </tr>';
	foreach($line as $car)
{
 	echo'<tr><td>'.$snum.'</td><td><input type=text name="line'.$snum.'" size=40 value="'.$car['descrptn'].'"></td><td><input type=text name="price'.$snum.'" size=5 value="'.$car['price'].'"></td></tr>';
	$snum++;
}
	
   echo' <tr><td>'.$snum++.'</td>
                <td><input type="text" name="itemDesc1" id="item1" size="40" onkeypress="keyPressTest(event, this);" /></td>
                <td><input type="text" name="itemPrice1" id="price1" size="5"/></td>
                </tr>
  </table>
<p><i>Item Count:</i>: <input type="text" name="itemCount" size="3" /></p>
<input name="button2" type="button" onClick="addRowToTable();" value="Add" />
<input name="button" type="button" onClick="removeRowFromTable();" value="Remove" />';
echo'<table>';

foreach($quote as $var)
{
	echo'<tr><td>Secret Notes:</td><td><input type=text name=notes value="'.$var['notes'].'"></td></tr>';
}
echo'<tr><td>Discount</td><td><input type=text name="disc" value="'.$var['disc'].'"></td></tr>';
echo'</table>';
echo'<input type="submit" value="Insert">';

echo'</form>';
?>