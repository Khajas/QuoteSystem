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
$_SESSION['controller']=new quoteReviewer();
echo'<html>';
echo'<head>';
echo'</head>';
echo'<body>';
echo'<table>';
echo'<h3>Enter Quote ID or select one of the Quotes below</h3>';
echo'<form name="reviewer" id="reviewer" action="layoutreviewer2.php?src=1">';
echo'<tr><td>Enter Quote ID to Track:</td><td><input type="text" name="quoteid" id="quoteid"></td></tr>';
echo'<tr><td><input type="submit" value="Extract"></td><td><input type="reset" value="clear"></td></tr>';
echo'</table></br>';
$status="finalized";
$quotes=$_SESSION['controller']->getQuotes($status);
echo'<h3>Select from any one of the Quotes</h3>';
echo'<table>';
echo'<tr><td>Quote ID</td><td>STATUS</td></tr>';
foreach($quotes as $var)
{
        $quoteid=$var['quote_id'];
        $status=$var['status'];
        echo '<tr><td><a href="layoutreviewer2.php/?quoteid='.$quoteid.'&src=2">'. $quoteid.'</a></td><td>'.$status.'</td></tr>';
}
echo'</table>';
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
          <li class="last"><a href="#"><pre>    -Anwar Siddiqui.</pre></a></li>
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
          <li class="last"><a href="#"><pre>    -Kiran & Pradeep.</pre></a></li>
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


