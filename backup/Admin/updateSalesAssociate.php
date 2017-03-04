        <div class="header">
            <h2>Update SalesAssociate Data</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">SalesAssociate Information</h2>
            <p>
				<?php
					include("Admin.php");
                    include('header.html');
					include('menu.php');
            $_SESSION['controller']=new Admin1();
            $sa=$salist=$_SESSION['controller']->updateSA($_POST['id']);
			echo $sa;		

				?>
			</p>
			<?php include '../commonFiles/footer.html'; ?>
       </div>