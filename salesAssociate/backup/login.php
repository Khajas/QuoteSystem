<?php
include('controller.php');
if(isset($_POST['saoc_id'])){
        $sa_id = htmlspecialchars($_POST['saoc_id']);
        $password = htmlspecialchars($_POST['saPassWd']);
//        echo $id;
        $controller=new QuoteController();
        $assoc_details=$controller->checkCredentials($sa_id, $password);
# Run the query - the results are stored into the $result object on success
        if($assoc_detials != -1){
                $name=$assoc_details[0]['name'];
                $id=$assoc_details[0]['sa_id'];
//                echo $name;
        }
 //       if($id!=null){
                header("Location: http://students.cs.niu.edu/~z1778291/salesAssociate/createQuote.php?san=$name&id=$sa_id");
                exit();
   //     }
     //   header("Location: login.html");
}
?>
<html>
<head>
<title>Sales Associate Login</title>
</head>
<body>
<h1><center>Employee Login</center></h1>
<fieldset>
<legend>Your credentials</legend>
<form method='post' action="">
<p> Login ID: <input type="text" name="saoc_id" size="6" />
<p> Password: <input type="password" name="saPassWd" size="8" />
<p>
<input type = "submit" value = "Login" />
<input type = "reset" value = "Reset" />
</p>
</form>
</fieldset>
</body>
</html>
