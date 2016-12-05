        <div class="header">
            <h2>Edit SalesAssociate Data</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">Select SalesAssociate to Edit</h2>
            <p>
				<?php
				     
                //Select SalesAssociate to Edit
                $page_title="Select SalesAssociate to Edit";
                include ('../commonFiles/header.html');
                require ('../commonFiles/conn.php');
                require ('../commonFiles/conn1.php');
				if($_SERVER['REQUEST_METHOD']=='POST')
				{
					$name=trim($_POST['search']);
					/*echo '<br>';*/
					$sql="select * from salesassociate where name=?";
					$stmt=$conn_local->prepare($sql);
					$stmt->execute(array($name));
					$cnt=$stmt->rowCount();
					$rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
					echo 'The Number of records for '.$name.' is';
					echo $cnt.'.<br>';
					foreach($rows as $row)
					{
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
                    $sql2='select * from salesassociate';
					
					/*$sql = mysql_query("SELECT * FROM salesassociate WHERE name LIKE '%search%'") or die(mysql_error());

     while ($row = mysql_fetch_array($sql)){
    echo 'Primary key: ' .$row['PRIMARYKEY'];
    echo '<br /> Name: ' .$row['name'];
    echo '<br /> Date of Birth: '.$row['dob'];
    echo '<br /> Address 1: '.$row['addr1'];
    echo '<br /> Address 2: '.$row['addr2'];
	echo '<br /> Phone Number : '.$row['phone'];
	echo '<br /> Email: '.$row['email']; 
	echo '<br /> Password: '.$row['password']; 
  }
*/
				   echo 'The Other SalesAssociate Records are:';
                   echo '<table><tr><th>select&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Address 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Address 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Phone Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th></tr>';
                   
                    foreach($conn_local->query($sql2) as $row)
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

	   