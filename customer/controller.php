<! Programmer Khaja Anwar Ali siddiqui >
<! SOFTWARE ENGINEERING,NIU, Spring 2016>
<?php
	include('../commonFiles/quoteStore.php');
	include('../commonFiles/customerGateway.php');
class Customer{
	public function getCustomer($cust_id){
		$cust_info=new CustomerGateway();
		return $cust_info->getCustomer($cust_id);
	}
	public function getQuote($quote_id){
		$quoteStore=new QuoteStore();
		return $quoteStore->getQuote($quote_id, Constants::GET_QUOTE_BY_CID);
	}
}
?>
