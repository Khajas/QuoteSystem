<?php
include("Admin.php");
$from_field=$_POST['from'];
$to_field=$_POST['to'];
$ctrlObj=new Admin1();
$result=$ctrlObj->getdateRange($from_field, $to_field);
//foreach($result as $row)

/*	echo ' Quote_id  : ' .$row['quote_id'];
	echo'&nbsp';echo'&nbsp';
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

*/

echo"<html>";
echo"<head>";
echo"<style>";
echo"table,tr,th,td
{
border: 1px solid black;
}";
echo "</style>";
echo "</head>";



echo '<table>';
echo '<tr>';
echo '<th>Quote Id</th>';
echo '<th>Date</th>';
echo '<th>Sales Associate_id</th>';
echo '<th>Customer_id</th>';
echo '<th>Notes</th>';
echo '<th>Email</th>';
echo '<th>Commission rate</th>';
echo '<th>Status</th>';
echo '<th>Postatus</th>';
echo '<th>Disc</th>';
echo '<th>Total</th>';


foreach($result as $row)
{
	echo '<tr>';
	echo '<td>'.$row['quote_id'].'</td>';
	echo '<td>'.$row['date'].'</td>';
	echo '<td>'.$row['saoc_id'].'</td>';
	echo '<td>'.$row['c_id'].'</td>';
	echo '<td>'.$row['notes'].'</td>';
	echo '<td>'.$row['email'].'</td>';
	echo '<td>'.$row['comm_rate'].'</td>';
	echo '<td>'.$row['status'].'</td>';
	echo '<td>'.$row['postatus'].'</td>';
	echo '<td>'.$row['disc'].'</td>';
	echo '<td>'.$row['total'].'</td>';




}

?>
