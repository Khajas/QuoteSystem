

<?php
//Lists Admin to add,edit,delete and view sales associate record
$page_title="SalesAssociate";
include('../commonFiles/header.html');
require ('../commonFiles/conn.php');
require ('../commonFiles/conn1.php');

echo'<html>
     <head>
	 <title>Admin Access</title>
	 </head>  
	 <body>


<div id="layout">
	
	    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <ul class="pure-menu-list">
                <li class="pure-menu-item pure-menu-selected"><a href="." class="pure-menu-link">Home</a></li>
                <li class="pure-menu-item"><a href="addSalesAssociate.php" class="pure-menu-link">Add SalesAssociate</a></li>
                <li class="pure-menu-item"><a href="editSearch.php" class="pure-menu-link">Edit SalesAssociate</a></li>
                <li class="pure-menu-item"><a href="deleteSearch.php" class="pure-menu-link">Delete SalesAssociate</a></li>
                <li class="pure-menu-item"><a href="viewSearch.php" class="pure-menu-link">View SalesAssociate</a></li>
            </ul>
        </div>
    </div>
</div>

</body>';
echo '</html>';
include('../commonFiles/footer.html');
?>