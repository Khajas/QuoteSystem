<! Author: Anwar Siddiqui >
<! CSCI 567 Project >
<! On behalf of Kiran, Pradeep > 
<! The following html code is to add a sales associate>

<html>

<head>
<title>Create Sales Associate</title>
</head>

<body>
<?php
try { // if something goes wrong, an exception is thrown
	$username="web";
	$password="password";
	$dsn = "mysql:host=localhost; dbname=onlineorders";
	$pdo = new PDO($dsn, $username, $password);
}
catch(PDOexception $e) { // handle that exception
	echo "Connection to database failed: " . $e->getMessage();
}
?>

<h1><center>New Employee Details</center></h1>
<fieldset>
<legend>Please fill in the following information</legend>

<form method="post" action="">
<p>Name:<input type = "text" name = "name" size = "16" /></p>
<p>Date of Birth:<input type = "text" name = "dob" size = "10" /></p>
<p>Address Line1:<input type = "text" name = "addr1" size = "30" /></p>
<p>Address Line2:<input type = "text" name = "addr2" size = "30" /></p>
<p>Phone:<input type = "text" name = "phone" size = "10" /></p>
<p>Email:<input type = "text" name = "email" size = "25" /></p>
<p>New Password:<input type = "password" name = "password" size = "8" /></p>
<p>Confirm Password:<input type = "password" name = "confirmPassWd" size = "8" /></p>

<p>
<input type = "submit" value = "Submit Associate information" />
<input type = "reset" value = "Clear Fields" />
</p>

</fieldset>

</form>

<! /////////////////Fetch the fields once the submit button is clicked >
<! prepare a query >
<?php
if(isset($_POST['name'])){
	$name = htmlspecialchars($_POST['name']);
  $dob = htmlspecialchars($_POST['dob']);
	$addr1 = htmlspecialchars($_POST['addr1']);
	$addr2 = htmlspecialchars($_POST['addr2']);
	$phone = htmlspecialchars($_POST['phone']);
	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']);
	$confirmPassWd = htmlspecialchars($_POST['confirmPassWd']);
	if($password==$confirmPassWd){
# Defining $sql as the query you'd like to run; here's one from classicmodels
		$sql = "insert into salesassociate(name, dob, addr1, addr2, phone, email, password) values('name','dob','$addr1', '$addr2',$phone, '$email', '$password')";
# Run the query - the results are stored into the $result object on success
		$result = $pdo->query($sql);
		if($result)
			echo "Success! $name has been added as a Sales Associate!";
		else echo "Failed to add the Sales Associate";
	}
	else{
		echo "Passwords doesn't match";
		echo "// Here passwords field should be cleared and rest of the things should remain same ";
	}
}
?>

</body>
</html>
