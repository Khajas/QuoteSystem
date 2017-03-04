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
		
            <h2>Add New Sales Associate</h2>
        </div>
        <div id="layout">
	
	
        <div class="content">
            <h3 class="content-subhead">Sales Associate Information</h3>
		


            <p>
				<?php
				$page_title="Add a New SalesAssociate";
				 
				 include ('header.html');
                 include ('../commonFiles/header.html');
				 //require ('../commonFiles/conn1.php');
				 
					echo '<form method="POST" action="updateSAinfo.php">';
					echo '<input type=hidden name="id" value="-1">';
					echo '<table>';
					echo '<tr><td><label for="name">Name:</label></td><td><input type="text"  name="name" id="name" value=""></td></tr>';
					echo '<tr><td><label for="dob">Date Of Birth:</label> </td><td><input type="date" name="dob" id="dob" value=""></td></tr>';
					echo '<tr><td><label for="addr1">Address 1:</label></td><td><input type="text"  name="addr1" id="addr1" value=""></td></tr>';
					echo '<tr><td><label for="addr2">Address 2:</label></td><td><input type="text"  name="addr2" id=addr2 value="""></td></tr>';
					echo '<tr><td><label for="phone">Phone Number:</label></td><td><input type="number"  name="phone" id="phone" min="1" max="9999999999""></td></tr>';
					echo '<tr><td><label for="email">Email:</label></td><td><input type="email"  name="email" id="email" value=""></td></tr>';
					echo '<tr><td><label for="password">Password:</label> </td><td><input type="password"  name="password" id="password" value=""></td></tr>';
				
                          
					echo '</table><p>';					
					echo '<input type = "submit" value = "ADD" />';
                    echo '<input type = "reset" value = "Reset" />';
					
					//echo '<button>Update</button>';
					echo '</p></form>';
				?>
			</p>
			<?php include ('../commonFiles/footer.html'); ?>
       </div>
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
     
