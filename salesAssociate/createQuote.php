<! Programmer Khaja Anwar Ali siddiqui >
<! SOFTWARE ENGINEERING,NIU, Spring 2016>
<html lang="en" dir="ltr">
<head>
<title>Quotes System</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="../styles/layout.css" type="text/css">
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#">Quote System</a></h1>
      <h2><pre>          ...by Grad Group 3</pre></h2>
    </div>
    <nav>
      <ul>
        <li><a href="http://students.cs.niu.edu/~z1778291/index.html">Home</a></li>
        <li><a href="mailto:z1778291@students.niu.edu?Subject=Login%20Issues">Contact Admin</a></li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <div id="homepage">
      <!-- Services -->
      <section id="services" class="clear">

<?php
$sa_oc=$_GET['san'];
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
<select name="name">
  <option value="">Select...</option>
<?php
	include("controller.php");
	$cntrl=new QuoteController();
	$allCx=$cntrl->getCustomers();
	foreach($allCx as $cx){
		$name=$cx['name'];
  		echo "<option value=$name>$name</option>";
	}
?>
</select>
</p>
<!email, give a text area>
<p>Email ID<i>(updates will be sent to this address)</i>: <input type="text" name="email" size="25" />

<?php
echo "<input type=\"hidden\" name=\"sa_id\" value=$id />";
echo "<input type=\"hidden\" name=\"saoc_name\" value=$saoc_name />";
?>
<!notes, give a text area spanning for 5 lines>
<P>Notes<i>(for official use only):</i></p>
<textarea id="txtArea" name="notes" rows="5" cols="70"></textarea>
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
<p><i>Item Count:</i>: <input type="text" name="itemCount" size="3" /></p>
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
function addRowToTable(count){
	count++;
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
   </section>
      <!-- / Introduction -->
    </div>
    <!-- / content body -->
  </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
  <div id="footer" class="clear">
    <!-- Section One -->
    <section class="one_quarter">
      <h2 class="title">Testimonial</h2>
      <nav>
        <ul>
          <li><a href="#">Thank you for all the </a></li>
          <li><a href="#">support to return this </a></li>
          <li><a href="#">unit back to service</a></li>
          <li><a href="#">ahead of schedule.</a></li>
          <li class="last"><a href="#"><pre>	-Anwar Siddiqui.</pre></a></li>
        </ul>
      </nav>
    </section>
    <!-- Section Two -->
    <section class="one_quarter">
      <h2 class="title">Testimonial</h2>
      <nav>
        <ul>
          <li><a href="#">We got our plant repaired with</a></li>
          <li><a href="#">we call a "Wow! service"</a></li>
          <li><a href="#">Keep up the good work,</a></li>
          <li><a href="#">Keep wowing customers!</a></li>		  
          <li class="last"><a href="#"><pre>	-Kiran & Pradeep.</pre></a></li>
        </ul>
      </nav>
    </section>
    <!-- Section Three -->
     <section class="one_quarter">
      <h2 class="title">Testimonial</h2>
      <nav>
        <ul>
         <li><a href="#">One of the best Sales force</a></li>
         <li><a href="#">I have ever encountered</a></li>
          <li><a href="#">Got my service in</a></li>
		  <li><a href="#">exactly 2 days.WoW!!</a></li>
          <li class="last"><a href="#"><pre>     -Yaswanth Reddy.</pre></a></li> 
        </ul>
      </nav>
    </section>
    <!-- Section Four -->
    <section class="one_quarter lastbox">
      <h2 class="title">Testimonial</h2>
      <nav>
        <ul>
          <li><a href="#">I loved your response</a></li>
          <li><a href="#">for my queries and emails</a></li>
          <li><a href="#">They have the best workforce</a></li>
          <li><a href="#">Keep up the good work</a></li>
          <li class="last"><a href="#"><pre>    -Pranav Naga Sai</pre></a></li>
        </ul>
      </nav>
    </section>
    <!-- / Section -->
  </div>
</div>
<!-- Copyright -->
<div class="wrapper row4">
  <footer id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Grad Group 3</a></p>
  </footer>
</div>
</body>
</html>
