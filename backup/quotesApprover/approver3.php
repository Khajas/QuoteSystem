<?php
include('QAController.php');
$quote_id=$_GET['quote'];
$_SESSION['controller']=new quoteApprover();

$quote=$_SESSION['controller']->addDiscount($disc);
//$line=$_SESSION['controller']->listItems($quote_id);

//echo'<form action="approver4.php">';
echo'<form name="addD" id="disc">';
echo'<table>';
//foreach($quote as $var)
//{
//echo'<tr><td>Quote ID:</td><td>'.$var['quote_id'].'</td></tr>';
//echo'<tr><td>Sales Assisciate ID:</td><td>'.$var['saoc_id'].'</td></tr>';
//echo'<tr><td>Date:</td><td>'.$var['date'].'</td></tr>';
//echo'<tr><td>Email: </td><td>'.$var['email'].'</td></tr>';
//}
//echo'</table>';
echo'<tr><td>Discount</td><td><input type=text name="disc" value="'.$var['disc'].'"></td></tr>';
echo'</table>';
echo'<input type="submit" value="Add">';
echo'</form>';
?>