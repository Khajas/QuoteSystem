 <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Quote Approver </title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="../../styles/layout.css" type="text/css">
</head>
<body>
<div id="layout">

<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#">Approving the Quotes</a></h1>
       <h2><pre>          ...by Quote Approver</pre></h2>
    </div>
    <nav>
      <ul>
        <li><a href="http://students.cs.niu.edu/~z1778291/index.html">Home</a></li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- Slider -->
  
    <!-- main content -->
    <div id="homepage">
      <!-- Services -->
      <section id="services" class="clear">       
		
<! below is the function to convert the quote to a purchase order and displaying the commision rate and update it for the sales associate>

<?php	
include('../commonFiles/customerGateway.php');
//include('../commonFiles/globalConstants.php');
include('QAController.php');

$url = 'http://blitz.cs.niu.edu/PurchaseOrder/';
$quote= $_GET['quote'];
//echo $quote;
// Get the CID first
$quoteInfo=new quoteApprover();
$quote_details=$quoteInfo->getQuote($quote, Constants::GET_QUOTE_BY_QID);
$c_id=$quote_details[0]['c_id'];
// Get the name of customer
$custInfo = new CustomerGateway();
$cust_details=$custInfo->getCustomer($c_id);
$name=$cust_details[0]['name'];
// Get total
$total=$quote_details[0]['total'];
echo "C_ID:";
echo $c_id;
echo'<br>';
echo "Name:";
echo $name;
echo '<br>';
echo "Total price:";
echo $total;
echo '<br>';

$data = array('order' => $quote, 'name' => $name, 'amount' => $total);
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
//echo ' end of function';
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
echo $result;
//echo substr($result,strlen($result)-3,2);
if(substr_compare($result, "Error",0,5)==0){
	echo "<br>Commission already updated!!!";
}
else{
	$commRate=substr($result,strlen($result)-3,2);
	echo '<br>';
	//echo $commRate;
	$quoteInfo->updateCommision($quote, $commRate);
}
?>

</div>  
  </section>
      <!-- / Introduction -->
    </div>
    <!-- / content body -->
  </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
  <div id="footer" class="clear">
    <!-- Section One -->
    <section class="one_quarter">
      <h2 class="title">Testimonial</h2>
      <nav>
        <ul>
          <li><a href="#">Thank you for all the </a></li>
          <li><a href="#">support to return this </a></li>
          <li><a href="#">unit back to service</a></li>
          <li><a href="#">ahead of schedule.</a></li>
          <li class="last"><a href="#"><pre>	-Anwar Siddiqui.</pre></a></li>
        </ul>
      </nav>
    </section>
    <!-- Section Two -->
    <section class="one_quarter">
      <h2 class="title">Testimonial</h2>
      <nav>
        <ul>
          <li><a href="#">We got our plant repaired with</a></li>
          <li><a href="#">we call a "Wow! service"</a></li>
          <li><a href="#">Keep up the good work,</a></li>
          <li><a href="#">Keep wowing customers!</a></li>		  
          <li class="last"><a href="#"><pre>	-Kiran & Pradeep.</pre></a></li>
        </ul>
      </nav>
    </section>
    <!-- Section Three -->
  <section class="one_quarter">
      <h2 class="title">Testimonial</h2>
      <nav>
        <ul>
         <li><a href="#">One of the best Sales force</a></li>
         <li><a href="#">I have ever encountered</a></li>
          <li><a href="#">Got my service in</a></li>
		  <li><a href="#">exactly 2 days.WoW!!</a></li>
          <li class="last"><a href="#"><pre>     -Yaswanth Reddy.</pre></a></li> 
        </ul>
      </nav>
    </section>
    <!-- Section Four -->
    <section class="one_quarter lastbox">
      <h2 class="title">Testimonial</h2>
      <nav>
        <ul>
          <li><a href="#">I loved your response</a></li>
          <li><a href="#">for my queries and emails</a></li>
          <li><a href="#">They have the best workforce</a></li>
          <li><a href="#">Keep up the good work</a></li>
          <li class="last"><a href="#"><pre>    -Pranav Naga Sai</pre></a></li>
        </ul>
      </nav>
    </section>
    <!-- / Section -->
  </div>
</div>
<!-- Copyright -->
<div class="wrapper row4">
  <footer id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Grad Group 3</a></p>
  </footer>
</div>
</div>
</body>
</html>
     




