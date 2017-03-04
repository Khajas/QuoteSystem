<?php
include('QAController.php');
$quote_id=$_GET['quote'];
$ctrl=new quoteApprover();
$quote=$ctrl->getQuote($quote_id);
echo'<table>';
foreach($quote as $var)
{
echo'<tr><td>Quote ID:</td><td>'.$var['quote_id'].'</td></tr>';
echo'<tr><td>Sales Assisciate ID:</td><td>'.$var['saoc_id'].'</td></tr>';
echo'<tr><td>Date:</td><td>'.$var['date'].'</td></tr>';
echo'<tr><td>Email: </td><td>'.$var['email'].'</td></tr>';
}
echo'</table>';
echo '<form method="post" action="../approver4.php">';
// pass the discount as hidden field
echo'<tr><td>Discount</td><td><input type=text name="disc" value="'.$var['disc'].'"></td></tr>';
echo "<input type=\"hidden\" name=\"quote_id\" value=$quote_id>";
echo'<br>';
echo'<br>';
//echo'<input type="button" id="disc" value="add">';
echo'<button onclick="updateQuote($disc,$quote)">Add Discount</button>';
//echo'<script>';
echo'</form>';
?>