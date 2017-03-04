        <div class="header">
            <h2>Add New SalesAssociate</h2>
        </div>
        <div id="layout">
	
	<?php include 'menu.php'; ?>
        <div class="content">
            <h3 class="content-subhead">SalesAssociate Information</h3>
		


            <p>
				<?php
				$page_title="Add a New SalesAssociate";
				 include ('header.html');
				 include ('menu.php');
                 include ('../commonFiles/header.html');
                 require ('../commonFiles/conn.php');
				 require ('../commonFiles/conn1.php');
				 
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
