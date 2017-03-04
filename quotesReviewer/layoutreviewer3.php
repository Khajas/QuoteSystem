<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Quotes System</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="../../styles/layout.css" type="text/css">
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
include("controller2.php");
$quote_id=$_GET['quote'];
$_SESSION['controller']=new quoteReviewer();

$quote=$_SESSION['controller']->getQuote($quote_id);
$line=$_SESSION['controller']->listItems($quote_id);

echo'<form action="../layoutreviewer4.php" method="post">';
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
