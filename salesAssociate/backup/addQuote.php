<?php
	include('controller.php');
	
	$items=$_POST['itemCount'];

	$monthNow=date("m");
	$dayNow=date("d");
	$yearNow=date("Y");
	echo $monthNow;
	echo $dayNow;
	echo $yearNow;
	$dateNow="$yearNow-$monthNow-$dayNow";

	$ctrl=new QuoteController();
	$date=getDate();
	$email=$_POST['email'];
	$sa_id=$_POST['sa_id'];
	$notes=$_POST['notes'];
	echo $email;
	echo $sa_id;
	echo $notes;
	$cx_name=$_POST['name'];
	echo $cx_name;
	$c_idList=$ctrl->selectCustomer($cx_name);
	echo "Id detected: ";
	$c_id = $c_idList[0]['id'];
	echo $c_id;
	echo $dateNow;
	$quote_id=$ctrl->createQuote($dateNow,$sa_id, $c_id, $notes, $email);
	echo $quote_id;
	$total=0;
	for($i=1;$i<=$items;$i++){
                $desc="itemDesc"."$i";
		$prc="itemPrice"."$i";
                echo $_POST[$desc];
		echo $_POST[$prc];
		$itemDesc=$_POST[$desc];
		$itemPrice=$_POST[$prc];
		$total+=$itemPrice;
		$ctrl->addLineItems($quote_id, $itemDesc, $itemPrice);
        }
	$ctrl->updateTotal($quote_id, $total);

?>
