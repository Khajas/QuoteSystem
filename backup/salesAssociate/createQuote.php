<html>
<title>
Create Quote
</title>

<body>

<?php
$name=$_GET['name'];
$id=$_GET['id'];
?>

<p><h1>Create Quote</h1></p>
<!quote_id, it's auto increment so there is no need to fetch it>
<!date, get date while inserting the quote, may be done in presistance class>
<!saoc_id, get the id after the sales associate gets logged in>
<!c_id, have a drop down for selecting the customer>
<fieldset>
<form  name="lineItems" action="addQuote.php" method="POST">
<p>
New quote for Customer:
<select name="formGender">
  <option value="">Select...</option>
  <option value="M">Male</option>
  <option value="F">Female</option>
</select>
</p>
<!email, give a text area>
<p>Email ID<i>(updates will be sent to this address)</i>: <input type="text" name="email" size="25" />

<?php
echo "<input type=\"hidden\" name=\"quote_id\" value=$id />";
echo "<input type=\"hidden\" name=\"name\" value=$name />";
?>
<!notes, give a text area spanning for 5 lines>
<P>Notes<i>(for official use only):</i></p>
<textarea id="txtArea" rows="5" cols="70"></textarea>
<!-----------------	Line Items should be added here-------------------------------->
 <table border="1" id="tblSample">
    <tr> 
      <th>S.No</th>
	        <th>Line Item Description</th>
			      <th>Price($)</th>
    </tr>
    <tr> 
		<td> 1</td>
		<td><input type="text" name="itemDesc1" id="item1" size="40" onkeypress="keyPressTest(event, this);" /></td>
		<td><input type="text" name="itemPrice1" id="price1" size="5"/></td>
		</tr>
  </table>
<input name="button2" type="button" onClick="addRowToTable();" value="Add" />
<input name="button" type="button" onClick="removeRowFromTable();" value="Remove" />
<!-------------------------------------------------------------------------------->
<!comm_rate, keep it zero for now>
<!status, status should be finalized>
<!postatus, postatus should be 0>
<!disc, keep this zero for time being>
<!total, keep this as the sum of line items>
<p>
<input type = "submit" value = "Create Quote" />
<input type = "reset" value = "Clear All Fields" />
</p>
</form>
</fieldset>
</body>

</html>

<SCRIPT LANGUAGE="JavaScript">
function addRowToTable(){
  var tbl = document.getElementById('tblSample');
  var lastRow = tbl.rows.length;
  // if there's no header row in the table, then iteration = lastRow + 1
  var iteration = lastRow;
  var row = tbl.insertRow(lastRow);
 
  // left cell
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
