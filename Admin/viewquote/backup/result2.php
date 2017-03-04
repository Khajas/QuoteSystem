<?php
include("controller.php");
$field;
$ctrlObj=new ViewQuote();
$status=$_POST['status'];
if($status == "finalized")
{
	$field="finalized";
	$result=$ctrlObj->getquotesf($field);
}
else if($status == "sanctioned")
{
$field="sanctioned";
$result=$ctrlObj->getquotess($field);
}
else if($status =="ordered")
{
$field="ordered";
$result=$ctrlObj->getquoteso($field);
}

foreach($result as $row)
{

	echo '<br /> Quote_id  : ' .$row['quote_id'];echo'&nbsp';echo'&nbsp';
        echo ' Date : '.$row['date'];echo'&nbsp';echo'&nbsp';
        echo 'salesassociate_id:'.$row['saoc_id'];echo'&nbsp';echo'&nbsp';
        echo 'customer_id:'.$row['c_id'];echo'&nbsp';echo'&nbsp';
        echo 'notes :'.$row['notes'];echo'&nbsp';echo'&nbsp';
        echo 'email :'.$row['email'];echo'&nbsp';echo'&nbsp';
        echo 'commission_rate :'.$row['comm_rate'];echo'&nbsp';echo'&nbsp';
        echo 'status:'.$row['status'];echo'&nbsp';echo'&nbsp';
        echo 'postatus :'.$row['postatus'];echo'&nbsp';echo'&nbsp';
        echo 'disc :'.$row['disc'];echo'&nbsp';echo'&nbsp';
        echo 'total:'.$row['total'];echo'&nbsp';


}
?>

