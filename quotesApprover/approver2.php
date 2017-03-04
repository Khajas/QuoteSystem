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

<!below is a form that displays the details such as quote_id, sales associate if, customer id and the status of the quote>
<?php
include('QAController.php');
$quote_id=$_GET['quoteid'];
echo $quote_id;
//echo "inside approver2";
$quotefind=new quoteApprover();
$allRows=$quotefind->getQuote($quote_id, Constants::GET_QUOTE_BY_QID);
//echo "sise"; echo sizeof($allRows);
$var=$allRows[0];
echo'<table>';	
//echo "start of table";
echo'<h3>Below are the Quote Details:</h3>';	
	
 echo'<tr><td>Quote ID:</td><td>'.$var['quote_id'].'</td></tr>';
 echo'<tr><td>Sales Assisciate ID:</td><td>'.$var['saoc_id'].'</td></tr>';
 echo'<tr><td>Customer ID:</td><td>'.$var['c_id'].'</td></tr>';
 //echo'<tr><td>Customer Name:</td><td>'.$var[]
 echo'<tr><td>Status:</td><td>'.$var['status'].'</td></tr>';

echo'</table>';
//echo'<form action="approver3.php"> </form>';


	//echo $var['quote_id'];
    echo'<a href="../addDiscount.php/?quote='.$var['quote_id'].'">Click to add additional discount</a>';  //hyperlink to choose to add additional discount
    echo'<br>';
    echo'<a href="../convert.php/?quote='.$var['quote_id'].'">convert quote to purchase order</a>';    //hyperlink to chose to convert the quote to a purchase order
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
     

