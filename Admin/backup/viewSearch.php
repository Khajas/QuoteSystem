        <div class="header">
            <h2>View SalesAssociate Data</h2>
        </div>
        <?php include('header.html');?>
		<?php include('menu.php');?>
        <div class="content">
            <h2 class="content-subhead">Enter Search Criteria</h2>
            
				<form method=POST action="viewList.php" class="pure-form">
					<input type=text name=search width=10>
					<button>Find Matching SalesAssociate</button>
				</form>
              
			<?php include '../commonFiles/footer.html'; ?>

       </div>