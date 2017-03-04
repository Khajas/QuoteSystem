        <div class="header">
            <h2>Delete SalesAssociate </h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">Salesassociate Information</h2>
            <p>
		<?php include('header.html');?>
		<?php include('menu.php');?>
				<?php
				
				include("Admin.php");

               $_SESSION['controller']=new Admin1();
			   $sa=$_SESSION['controller']->getSA($sa_id);
               $row=$salist=$_SESSION['controller']->updateSAinfo($_POST['id']);

			   				print "<form method=POST action=deleteSA.php>";
					        print "<input type=hidden name='id' value='".$row['sa_id']."'>";
							print "<table>";
							print "<tr><td>Name: </td><td><input type=text name=name value='" . $row['name']. "'></td></tr>";
							print "<tr><td>Date of Birth: </td><td><input type=text name=dob value='" . $row['dob'] . "'></td></tr>";
							print "<tr><td>Address 1: </td><td><input type=text name=addr1 value='" . $row['addr1'] . "'></td></tr>";
							print "<tr><td>Address 2: </td><td><input type=text name=addr2 value='" . $row['addr2']. "'></td></tr>";
							print "<tr><td>Phone Number: </td><td><input type=text name=phone value='" . $row['phone'] . "'></td></tr>";
							print "<tr><td>Email: </td><td><input type=text name=email value='" . $row['email'] . "'></td></tr>";
							print "<tr><td>Password: </td><td><input type=text name=password value='" . $row['password']. "'></td></tr>";
							print "</table><p>";
					        print "<button>Confirm Delete</button>";
					        print "</p></form>";