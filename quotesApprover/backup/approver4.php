<?php
include("QAController.php");
include("../commonFiles/customerGateway.php");
//include("../commonFiles/globalConstants.php");
        $quote=$_POST['quote_id'];
        //echo $quote;
        $disc=$_POST['disc'];
        $email=$_POST['email'];
        $a= new quoteApprover();
        $b=new CustomerGateway();
        $customerID=$a->getQuote($quote, Constants::GET_QUOTE_BY_QID);
        $c_id=$customerID[0]['c_id'];
   //	echo" this is C_id:";
  //      echo $c_id;
        $cust_details=$b->getCustomer($c_id);
        $name=$cust_details[0]['name'];
        $cx_email=$customerID[0]['email']; 
        $temp=$a->updateQuote($disc,$quote, Constants::UPDATE_QUOTE_SANCTIONED_PO);
        echo "total price updated!";
   //     echo $email;
  //	echo $cx_email;
	$sendStatus=$a->sendMail($email, $quote, $name);
        if($sendStatus) echo "Confirmation Sent to $email";
        else echo "Can't sent email, you may prefer calling the customer";
        
?>
