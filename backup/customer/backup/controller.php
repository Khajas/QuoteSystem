<?php
	include('../commonFiles/quoteStore.php');
	include('../commonFiles/customerGateway.php');
//	include('../commonFiles/globalConstants.php');
class Customer{
	public function getCustomer($cust_id){
		$cust_info=new CustomerGateway();
//		if($cust_id > 0){
			return $cust_info->getCustomer($cust_id);
//		}
//		else return -1;
	}
	public function getQuote($quote_id){
		$quoteStore=new QuoteStore();
//		if($quote_id > 99999){
//			echo "Constant: ";
//			echo Constants::GET_QUOTE_BY_CID;
			return $quoteStore->getQuote($quote_id, Constants::GET_QUOTE_BY_CID);
//		}
//		else return -1;
	}
}
?>
