<?php	
include('QAController.php');
include('../commonFiles/customerGateway.php');
$url = 'http://blitz.cs.niu.edu/PurchaseOrder/';
$quote= $_GET['quote'];
echo $quote;
$name=$_GET['name'];
$total=$_GET['total'];
$data = array('order' => $order, 'name' => $name, 'amount' => $total);
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);

$send= new quoteApprover();
$sendStatus=$send->sendMail($)
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
echo($result);
?>