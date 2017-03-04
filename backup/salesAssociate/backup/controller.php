<?php
include('../commonFiles/quoteStore.php');
class QuoteController{
	public function checkCredentials($id, $password){
		$quoteStore=new QuoteStore();
//		echo "Inside controller";
//	        echo $id;
  //      	echo $password;
//	        echo "outside controller";
		return $quoteStore->checkCredentials($id, $password);
	}

	public function getCustomers(){

	}
	public function selectCustomer(){

	}

	public function updateQuote($info){

	}
}
?>
