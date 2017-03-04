 <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Quote Approver </title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="../styles/layout.css" type="text/css">
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
		

<!below is the function to update the total price of the quote after the dicount is added. and sending an email id>
<?php
include("QAController.php");
include("../commonFiles/customerGateway.php");
        $quote=$_POST['quote_id'];
        $disc=$_POST['disc'];
        $email=$_POST['email'];
        $a= new quoteApprover();
        $b=new CustomerGateway();
        $customerID=$a->getQuote($quote, Constants::GET_QUOTE_BY_QID);
        $c_id=$customerID[0]['c_id'];
        $cust_details=$b->getCustomer($c_id);
        $name=$cust_details[0]['name'];
        $cx_email=$customerID[0]['email']; 
        $temp=$a->updateQuote($disc,$quote, Constants::UPDATE_QUOTE_SANCTIONED_PO);
        echo "Total price updated!";
	$sendStatus=$a->sendMail($email, $quote, $name);
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
      <h2 class="title">Send Mail Confirmation</h2>

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
     

