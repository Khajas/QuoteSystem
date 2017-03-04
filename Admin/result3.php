<?php
include("Admin.php");
$from_field=$_POST['c_id'];
$ctrlObj1=new Admin1();
$result1=$ctrlObj1->getquotesc($from_field);
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


foreach($result1 as $row)
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

