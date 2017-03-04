<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Review Quote</title>
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
        <li><a href="../index.html">Home</a></li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">

<?PHP
//include("session.php");
include("QAController.php");
$var=new quoteApprover();
echo'<html>';
echo'<head>';
echo'</head>';
echo'<body>';
echo'<table>';
echo'<h3>Enter Quote ID or select one of the Quotes below</h3>';
echo'<form name="approver" id="approver" action="approver2.php">';
echo'<tr><td>Enter Quote ID to Track:</td><td><input type="text" name="quoteid" id="quoteid"></td></tr>';
echo'<tr><td><input type="submit" value="Extract"></td><td><input type="reset" value="clear"></td></tr>';
echo'</table></br>';
$quotes=$var->getQuotes("sanctioned",Constants::GET_QUOTE_BY_SANCTIONED_PO);
echo'<h3>Select from any one of the Quotes</h3>';
foreach($quotes as $var)
{
        echo '<a href="approver2.php/?quoteid='.$var['quote_id'].'">'. $var['quote_id'].'</a>'.':status is '.$var['status'];
         echo'<br>';
}
?>
   
<!-- Copyright -->

<div class="wrapper row4">
  <footer id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Grad Group 3</a></p>
  </footer>
</div>
</body>
</html>
