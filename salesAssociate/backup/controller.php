<?php
include('../commonFiles/quoteStore.php');
include('../commonFiles/customerGateway.php');
class QuoteController{
	public function checkCredentials($id, $password){
		$quoteStore=new QuoteStore();
		return $quoteStore->checkCredentials($id, $password);
	}

	public function getCustomers(){
		$quoteStore=new CustomerGateway();
		return $quoteStore->getCustomers();
	}
	public function selectCustomer($name){
		$quoteStore=new CustomerGateway();
		return $quoteStore->selectCustomer($name);
	}

	public function updateQuote($quote_id, $itemDesc, $price){
		$quoteStore=new QuoteStore();
		$quoteStore->updateQuote($quote_id, $itemDesc, $price);
	}
	public function createQuote($dateNow, $saoc_id, $c_id, $notes, $email){
		$quoteStore=new QuoteStore();
                return $quoteStore->createQuote($dateNow,$saoc_id, $c_id, $notes, $email);
	}
	public function addLineItems($quote_id, $itemDesc, $price){
		$quoteStore=new QuoteStore();
		$quoteStore->addLineItems($quote_id, $itemDesc, $price);
	}
	public function updateTotal($quote_id, $total){
		$quoteStore=new QuoteStore();
		 $quoteStore->updateTotal($quote_id, $total);
	}
}
?>
