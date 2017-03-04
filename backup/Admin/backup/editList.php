        <div class="header">
            <h2>Edit SalesAssociate Data</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">Select SalesAssociate to Edit</h2>
            <p>
		<?php include('header.html');?>
		<?php include('menu.php');?>
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
						    echo '<br /><form method="POST" action="editSalesAssociate.php">';
						    echo "<button name='id' value='".$row['sa_id']."'>Edit</button></form>";   

			   }
			   }
			  echo "</table>";
			  
			  	   echo 'The Other SalesAssociate Records are:';
                   echo '<table><tr><th>select&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Address 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Address 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Phone Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th></tr>';
                   
                    foreach($salist3 as $row)
                    {
						echo '<tr><td><form method="POST" action="editSalesAssociate.php">';
						echo "<button name='id' value='".$row['sa_id']."'>Edit</button></form></td>";
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