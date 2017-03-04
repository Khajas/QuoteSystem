        <div class="header">
            <h2>ADD SalesAssociate Data</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">SalesAssociate Information</h2>
            <p>

<?php
include('header.html');
include('menu.php');
include("Admin.php");


$_SESSION['controller']=new Admin1();

$sa=$_SESSION['controller']->getSA($sa_id);
$sa1=$_SESSION['controller']->addSA($sa_id);
	
echo $sa1;


?>

			
<?php include '../commonFiles/footer.html'; ?>
       
	   
</p>
			</div>