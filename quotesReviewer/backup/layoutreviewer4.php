<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Quotes System</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="../styles/layout.css" type="text/css">
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#">Quote System</a></h1>
      <h2><pre>          ...by Grad Group 3</pre></h2>
    </div>
    <nav>
      <ul>
        <li><a href="http://students.cs.niu.edu/~z1778291/index.html">Home</a></li>
        <li><a href="mailto:z1778291@students.niu.edu?Subject=Login%20Issues">Contact Admin</a></li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <div id="homepage">
      <!-- Services -->
      <section id="services" class="clear">
<?PHP
include("controller2.php");

        $quote_id=$_POST['quoteid'];
        $_SESSION['controller']=new quoteReviewer();
        $temp=$_SESSION['controller']->listItems($quote_id);
        $snum=sizeof($temp);
        for($i=1,$j=0;$i<=$snum;$i++,$j++)
        {
                $var1="line$i";
                $var2="price$i";
                $line[$j]=$_POST[$var1];
                $price[$j]=$_POST[$var2];
				$total+=$price[$j];
        }
		
		 $items=$_POST['itemCount'];
		 echo $items;
		 $items-=$snum;
		 echo $items;
		 for($i=1;$i<=$items;$i++){
                $desc="itemDesc"."$i";
                $prc="itemPrice"."$i";
                $itemDesc=$_POST[$desc];
                $itemPrice=$_POST[$prc];
				$total+=$itemPrice;
				$_SESSION['controller']->addLineItems($quote_id, $itemDesc, $itemPrice);
		 }
		 $_SESSION['controller']->updateTotal($quote_id, $total);
		 
		 
        
        $k=0;
        foreach($temp as $var)
        {
         $lid=$var['l_id'];
         $c=$_SESSION['controller']->updateQuote($lid,$line[$k],Constants::UPDATE_LINE_ITEMS);
         $d=$_SESSION['controller']->updateQuote($lid,$price[$k],Constants::UPDATE_PRICE);
         if($k<sizeof($temp))
          {
           $k++;
          }
         }
		 $notes=$_POST['notes'];
        $disc=$_POST['disc'];
        $a=$_SESSION['controller']->updateQuote($quote_id, $disc,Constants::UPDATE_DISCOUNT);
        $b=$_SESSION['controller']->updateQuote($quote_id, $notes,Constants::UPDATE_NOTES);
echo'<h3>Quote '.$quote_id.'  is Updated</h3>';
echo'<h3><a href="layoutreviewer.php">Click here to see Finalized Quotes</a></h3>';
?>
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
</body>
</html>
