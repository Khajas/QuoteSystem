<?PHP
//include("session.php");
include("QAController.php");
$var=new quoteApprover();
echo'<html>';
echo'<head>';
echo'<title>Quote APPROVER</title>';
echo'<body>';
echo'<table>';
echo'<form name="getQuote" id="getQuote" action="getQuote.php">';
echo'<tr><td>Enter Quote ID to Track:</td><td><input type="text" name="quoteid" id="quoteid"></td></tr>';
echo'<br><tr><td><input type="submit" value="Retrieve"></td><td><input type="reset" value="clear"></td></tr>';
echo'</table></br>';
$quotes=$var->getQuotes();
echo'<i style="font-size:45px;">OR</i>';
echo'<h3>Select from any one of the Quotes</h3>';
foreach($quotes as $var)
{
        echo '<a href="QAgetQuotes.php/?quoteid='.$var['quote_id'].'"></a><br>'.'<br>status is'.$var['status'];
}
$quotes=$var->getQuotes();
echo'<h3>Select from any one of the Quotes</h3>';
foreach($quotes as $var)
{
        echo '<a href="QAgetQuotes.php/?quoteid='.$var['quote_id'].'"></a><br>'.'status is'.$var['status'];
}
echo'<br>';
echo'</body>';
echo'</html>';
?>
   
<!-- Copyright -->

<div class="wrapper row4">
  <footer id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Grad Group 3</a></p>
  </footer>
</div>
</html>
?>