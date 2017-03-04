        <div class="header">
            <h2>Delete SalesAssociate</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">SalesAssociate Information</h2>
            <p>
		<?php include('header.html');?>
		<?php include('menu.php');?>
				<?php
				     include("Admin.php");
					 
                     $_SESSION['controller']=new Admin1();
					
					$sa1=$_SESSION['controller']->deleteSA($_POST['id']);
					
				?>
			</p>
			<?php include '../commonFiles/footer.html'; ?>
       </div>       