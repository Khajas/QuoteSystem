<! Test Legacy Database>
<html>
<head>
<title>Legacy Database</title>
</head>

<body>
<?php
include("commonFiles/conn.php");
?>
<h1><center>Test Legacy Database</center></h1>
<fieldset>
<legend>Customer Details</legend>
<form method='post' action="">
<p>Customer ID: <input type="text" name="CID" size="20" />
<p>
<input type = "submit" value = "Test" />
<input type = "reset" value = "Reset" />
</p>
</form>
</fieldset>

<! /////////////////Fetch the fields once the Login button is clicked >
<! prepare a query >
<?php
if(isset($_POST['CID']) & $pdo!=null){
	$CID = htmlspecialchars($_POST['CID']);
# Defining $sql as the query you'd like to run; here's one from classicmodels
	$sql = "select * from customers where id='$CID'";
#	echo $sql;
# Run the query - the results are stored into the $result object on success
	$result = $pdo->query($sql);
	$allrows = $result->fetchAll();
	$name=$allrows[0]['name'];
	if(isset($name)) echo "Customer Name: $name";
	else echo "CID: $CID Not Found!";
}
?>
</body>


</html>
