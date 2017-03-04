<?php
include("controller.php");
//echo $_POST['from'];
$from_field=$_POST['from'];
//echo $_POST['to'];
$to_field=$_POST['to'];
$ctrlObj=new ViewQuote();
$result=$ctrlObj->getdateRange($from_field, $to_field);
//echo sizeof($result);
//foreach($result as $eachResult)
//{	
//	echo $eachResult['quote_id'];
//}
//$rows=$result->fetchAll();
foreach($result as $row)
{
echo "quote id :".$row["quote_id"]."date :".$row["date"]."Sales associate id :".$row["saoc_id"]."customer id:".$row["c_id"]."notes :".$row["notes"]."email:".$row["email"]."comm_rate :".$row["comm_rate"]."status :".$row["status"]."postatus :".$row["postatus"]."disc :".$row["disc"]."total :".$row["total"]. "<br>";

}

//echo $_POST['finalized'];
//$finalized_field=$_POST['finalized'];



?>
