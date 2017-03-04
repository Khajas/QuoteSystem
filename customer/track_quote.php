<!DOCTYPE html>
<! Programmer Khaja Anwar Ali siddiqui >
<! SOFTWARE ENGINEERING,NIU, Spring 2016>

<html lang="en" dir="ltr">
<head>
<title>Track Quotes</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="../styles/layout.css" type="text/css">
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#">Quote System</a></h1>
      <h2><pre>          Track Your Order Online</pre></h2>
    </div>
    <nav>
      <ul>
        <li><a href="mailto:z1778291@students.niu.edu?Subject=Order%20Query">Contact Us</a></li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
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
                        <b>Hello! $name,</b></h2></i>;
                        Your purchase order details.
                             Order ID: <b>$quote_id</b>
                             Order Status: <i>$status</i>
                             Order Total: <b>$$total</b>
                        <b><u>Service Address:</u></b>
                             $name,
                             $street,
                             $city,
                             $contact</p></pre>";
?>
  <div id="container" class="clear">
    <!-- main content -->
    <div id="homepage">
      <!-- Services -->
      <section id="services" class="clear">
	<h2>What's Next?</h2>
        <article class="one_third">
          <figure><img src="../images/appointment.jpg" width="290" height="180" alt="">
            <figcaption>
              <h2>Set Appointment</h2>
              <p>You'll receive a call from our service partner or agent to fix an appointment.</p>
            </figcaption>
          </figure>
        </article>
        <article class="one_third">
          <figure><img src="../images/service.jpg" width="290" height="180" alt="">
            <figcaption>
              <h2>Service at your door step</h2>
              <p>Our service partner or agent will perform the repairs at your site/house/plant, on the date of appointment.</p>
            </figcaption>
          </figure>
        </article>
        <article class="one_third lastbox">
          <figure><img src="../images/pay.jpg" width="290" height="180" alt="">
            <figcaption>
              <h2>Your satisfaction is our priority!</h2>
              <p>You'll only be charged, if you're satisfied with our services.</p>
            </figcaption>
          </figure>
        </article>
      </section>
      <!-- / Testimonials -->
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
      <!-- Introduction -->
      <section id="intro" class="last clear">
        <article>
          <figure><img src="../images/call.jpg" width="450" height="250" alt="">
            <figcaption>
              <h2>Not as expected?</h2>
              <p>If you'd like to make any changes, please call us at <b>1800-234-5678</b>.</p>
<?php
  	echo "<footer class=\"more\"><a href=\"mailto:z1778291@students.niu.edu?Subject=Order%20ID:%20$quote_id\">Email &raquo;</a></footer>";
?>
            </figcaption>
          </figure>
        </article>
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
          <li><a href="#">Lorem ipsum dolor sit</a></li>
          <li><a href="#">Amet consectetur</a></li>
          <li><a href="#">Praesent vel sem id</a></li>
          <li><a href="#">Curabitur hendrerit est</a></li>
          <li class="last"><a href="#">Sed a nulla urna</a></li>
        </ul>
      </nav>
    </section>
    <!-- Section Four -->
    <section class="one_quarter lastbox">
      <h2 class="title">Link Block</h2>
      <nav>
        <ul>
          <li><a href="#">Lorem ipsum dolor sit</a></li>
          <li><a href="#">Amet consectetur</a></li>
          <li><a href="#">Praesent vel sem id</a></li>
          <li><a href="#">Curabitur hendrerit est</a></li>
          <li class="last"><a href="#">Sed a nulla urna</a></li>
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
</body>
</html>
