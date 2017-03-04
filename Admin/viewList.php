  <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Maintain Sales Associate Data </title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="../styles/layout.css" type="text/css">
</head>
<body>
<div id="layout">

<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#">Maintain Sales Associate Data</a></h1>
      <h2><pre>          ...by Admin</pre></h2>
    </div>
    <nav>
      <ul>
        <li><a href="http://students.cs.niu.edu/~z1778291/index.html">Home</a></li>
        <li><a href="index.html"> Admin</a></li>
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
		
		
		<div class="header">
            <h2>View Sales Associate Data</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">Sales Associate Information</h2>
            <p>
		<?php include('header.html');?>
				<?php
				include("Admin.php");

               $_SESSION['controller']=new Admin1();
               $sa=$_SESSION['controller']->getSA($sa_id);
               $salist1= $sa1ist=$_SESSION['controller']->findSA($_POST['search']);
			   $salist3= $sa1ist2=$_SESSION['controller']->findallSA($name);
			   
			   if (is_array($salist1)) {
			   foreach($salist1 as $row) {
						    echo '<br /> Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   : ' .$row['name'];
                            echo '<br /> Date of Birth &nbsp;&nbsp;   : '.$row['dob'];
                            echo '<br /> Address 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      : '.$row['addr1'];
                            echo '<br /> Address 2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      : '.$row['addr2'];
	                        echo '<br /> Phone Number     : '.$row['phone'];
	                        echo '<br /> Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : '.$row['email']; 
	                        echo '<br /> Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      : '.$row['password'];
							echo '<br /> </form>';
			   }
			   }
			  echo "</table>";
			  
			  	   echo 'The Other SalesAssociate Records are:';
                   echo '<table><tr><th>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Address 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Address 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Phone Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th></tr>';
                   
                    foreach($salist3 as $row)
                    {
						echo '<td>';
                        echo $row['name'];
						echo '</td>';
						echo '<td>';
                        echo $row['addr1'];
						echo '</td>';
						echo '<td>';
                        echo $row['addr2'];
						echo '</td>';
						echo '<td>';
                        echo $row['phone'];
						echo '</td>';
						echo '<td>';
                        echo $row['email'];
						echo '</td>';
						echo '<td>&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo $row['password'];
						echo '</td></tr>';
                    }   
				 
					echo "</table>";
				
				
			    ?>
			</p>
			<?php include '../commonFiles/footer.html'; ?>
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
     
