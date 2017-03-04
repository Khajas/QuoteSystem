<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>View Quotes</title>
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
        <li><a href="#">Home</a></li>
        <li><a href="#">News</a></li>
        <li><a href="mailto:z1778291@students.niu.edu?Subject=Login%20Issues">Contact Admin</a></li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- Slider -->
   <!-- <section id="slider"><a href="#"><img src="images/main.jpg" alt=""></a></section>->
    <!-- main content -->
    <div id="homepage">
      <!-- Services -->
      <section id="services" class="clear">
        <article class="one_third">
   		<h2>Search by Date</h2>
		<! Please add the code for form 1 here >
<!-----------------------searching from dates--------------------------------------------------------------------------------->
<form method="POST" action="result.php">
<table width="400" border="0">
<tr>
<td><FONT COLOR='grey'>From</FONT></td><br />
<script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker3.min.css">
<script>
$( document ).ready(function() {
    $("#from-datepicker").datepicker({
        format: 'yyyy-mm-dd'
    });
    $("#from-datepicker").on("change", function () {
        var fromdate = $(this).val();
        alert(fromdate);
    });
});
</script>
<td><input type="text" name="from" id="from-datepicker"/></td>
</tr>
<tr><td>&nbsp</td></tr>
<tr>
<td><font color='grey'>To</font></td>
<script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker3.min.css">
<script>
$( document ).ready(function() {
    $("#to-datepicker").datepicker({
        format: 'yyyy-mm-dd'
    });
    $("#to-datepicker").on("change", function () {
        var fromdate = $(this).val();
        alert(fromdate);
    });
});
</script>

<td><input type="text" name="to" id="to-datepicker"/></td>
</tr>
<tr><td>&nbsp</td></tr>
<tr>
<td>&nbsp</td>
<td><input type="submit" value="search" name="search"></td>
</tr>
</table>
</form>

<!----------------------------------------------------------------end of form for searching through dates---------------------------------------->
	
              <h2>Search by status</h2>
		<! Please add the code for form 2 here >
<!-----------------------------------------------------search via status of the quotes------------------------------------------------------------>

<form method="POST" action="result2.php">
<table width="400" border="0">
<tr>
<td><font color="grey">finalized</font>
<input type ="radio" name="status" value="finalized">
</td>
<td><font color="grey">sanctioned</font>
<input type ="radio" name="status" value="sanctioned">
</td>
<td><font color="grey">ordered</font>
<input type ="radio" name="status" value="ordered">
</td>
</tr>
<tr>
<td>
<input type="submit" value="search" name="search">
</td>
</tr>
</table>
</form>

              <h2>Search by id's</h2>
      		<! Please add the code for form 3 here >

<form method="POST" action="result.php">
<table width="400" border="0">
<tr>
<td><font color="grey">Customer_id</font>
<input type= "text" name ="c_id" id="c_id">
</td></tr>
<tr>
<td><input type="submit" name="search" value="search">
</td>
</tr>
<tr>
<td>&nbsp</td>
</tr>
<tr>
<td><font color="grey">Sales associate_id</font>
<input type="text" name="sassoc_id" id="sassoc_id">
</td></tr>
<tr>
<td><input type="submit" name="search" value="search">
</td>
</tr>
</table>
</form>
<!--------------------------------------------------------------------------------------------------------------------------------->


            
              	<! Please add the code for form 4 here >
        </article>
      </section>
      <!--- / Introduction --->
    </div>
    <!-- / content body -->
  </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
  <div id="footer" class="clear">
    <!-- Section One -->
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
