<?php
	include("session.php");
	include("controller.php");
	$_SESSION['controller']=new Admin(); 
	$listAll=$_SESSION['controller']->listAll();
	foreach($listAll as $var){
                        echo "<br>Name: ".$var['name']."ID: ".$var['addr1']."</br>";
                }
	echo "after function call";
?>
