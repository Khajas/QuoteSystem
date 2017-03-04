<?PHP
include("session.php");
include("controller2.php");
$_SESSION['controller']=new quoteReviewer(); 
echo'<html>';
echo'<head>';
echo'</head>';
echo'<body>';
echo'<table>';
echo'<h3>Enter Quote ID or select one of the Quotes below</h3>';
echo'<form name="reviewer" id="reviewer" action="reviewer2.php">';
echo'<tr><td>Enter Quote ID to Track:</td><td><input type="text" name="quoteid" id="quoteid"></td></tr>';
echo'<tr><td><input type="submit" value="Extract"></td><td><input type="reset" value="clear"></td></tr>';
echo'</table></br>';
$quotes=$_SESSION['controller']->getQuotes();
echo'<h3>Select from any one of the Quotes</h3>';
foreach($quotes as $var)
{
	echo '<a href="reviewer2.php/?quoteid='.$var['quote_id'].'">'. $var['quote_id'].'</a>'.'status is'.$var['status'].',</br>';
}
?>
