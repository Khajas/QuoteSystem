<?php
include("controller.php");
$from_field=$_POST['c_id'];
echo"$from_field";
$ctrlObj1=new ViewQuote();
$list=$result1=$ctrlObj1->getquotesc($from_field);
foreach($list as $row)
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

