<html>
<head>
<title>Track Your Order</title>
</head>

<body>
<?php
	include('controller.php');
	$quote_id = htmlspecialchars($_GET[quote_id]);
	$customer=new Customer();
	$quote_details=$customer->getQuote($quote_id);
	$cust_details=$customer->getCustomer($quote_details[0]['c_id']);
	$total=(float)$quote_details[0]['total'];
	$status=$quote_details[0]['status'];
	$name=$cust_details[0]['name'];
	$street=$cust_details[0]['street'];
	$city=$cust_details[0]['city'];
	$contact=$cust_details[0]['contact'];
	echo "<pre><p><i><h2>
			Hello! $name,</h2></i><p>";
	echo "<p>
			Your purchase order details.
			     Order ID: <b>$quote_id</b>
			     Order Status: <i>$status</i>
			     Order Total: <b>$$total</b></p>";
	/*
				Line items you've requested:
				<table>
				<tr>
				<th>S.no</th><th>Description</th><th>Price</th>
				</tr>
				</table>";
	*/
	echo "<p>
			<b><u>Delivery Address:</u></b>
			     $name,
			     $street,
			     $city,
			     $contact
			
			If you'd like to update your delivery address, please call us at <b>1800-123-4567</b></p></pre>";
?>
<!-Get the name from legacy database;
 select name from customers where id=c_id;

Hello! Customer Name,
	Your Order Details:
	
	Order Id:
	echo $quote_id;
	Delivery Address: city, street, contact
	Line Items:
	get all the line items for a quote_id
	select l_id, name, description from quotesItems where quote_id=$quote_id;
	Order Total:
	select sum(price) as 'Total' from quotesItems where q_id=$quote_id;
	Thank you!
->
</body>
</html>
