<?php
include("controller.php");
//echo $_POST['from'];
//$from_field=$_POST['from'];
//echo $_POST['to'];
//$to_field=$_POST['to'];
$field;
//$sanctioned_field=$_POST['sanctioned'];
//$ordered_field=$_POST['ordered'];
$ctrlObj=new ViewQuote();
//$ctrlObj2=new ViewQuote();
//$ctrlObj3=new ViewQuote();
if($_POST==="finalized")
{
$field="finalized";
$result=$ctrlObj->getquotesf($field);
}
else if($_POST==="sanctioned")
{
$field="sanctioned";
$result=$ctrlObj->getquotess($field);
}
else if($_POST==="ordered")
{
$field="ordered";
$result=$ctrlObj->getquoteso($field);
}
/*else if($sanctioned_field)
{
$result=$ctrlObj->getquotess($sanctioned_field);
}
else if($ordered_field)
{
$result=$ctrlObj->getquoteso($ordered_field);
}*/


//$result=$ctrlObj->getquotesf($finalized);
//$result1=$ctrlObj->getquotess($sanctioned);
//$result2=$ctrlObj->getquoteso($ordered);
//echo sizeof($result);
//foreach($result as $eachResult)
//{
//      echo $eachResult['quote_id'];
//}
//$rows=$result->fetchAll();









foreach($result as $row)
{
echo "quote id :".$row["quote_id"]."date :".$row["date"]."Sales associate id :".$row["saoc_id"]."customer id:".$row["c_id"]."notes :".$row["notes"]."email:".$row["email"]."comm_rate :".$row["comm_rate"]."status :".$row["status"]."postatus :".$row["postatus"]."disc :".$row["disc"]."total :".$row["total"]. "<br>";

}
//foreach($result1 as $row)
//{
//echo "quote id :".$row["quote_id"]."date :".$row["date"]."Sales associate id :".$row["saoc_id"]."customer id:".$row["c_id"]."notes :".$row["notes"]."email:".$row["email"]."comm_rate :".$row["comm_rate"]."status :".$row["status"]."postatus :".$row["postatus"]."disc :".$row["disc"]."total :".$row["total"]. "<br>";

//}
//foreach($result2 as $row)
//{
//echo "quote id :".$row["quote_id"]."date :".$row["date"]."Sales associate id :".$row["saoc_id"]."customer id:".$row["c_id"]."notes :".$row["notes"]."email:".$row["email"]."comm_rate :".$row["comm_rate"]."status :".$row["status"]."postatus :".$row["postatus"]."disc :".$row["disc"]."total :".$row["total"]. "<br>";

//}






//echo $_POST['finalized'];
//$finalized_field=$_POST['finalized'];



?>

