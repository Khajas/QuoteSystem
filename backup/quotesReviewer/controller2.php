<?php
include("../commonFiles/quoteStore.php");
class quoteReviewer{
	var $quoteStore;
	var $full;
	public function getQuotes(){
		$quoteStore=new QuoteStore();
		$full=$quoteStore->getQuotes();
		return $full;
	}
	public function getQuote($quote_id){
		$quoteStore=new QuoteStore();
		$full=$quoteStore->getQuote($quote_id,Constants::GET_QUOTE_BY_QID);
		return $full;
	}
	public function listItems($quote_id){
		$quoteStore=new QuoteStore();
		$full=$quoteStore->listAllItems($quote_id);
		return $full;
	}
	public function updateQuote($cname,$value,$quote_id){
		$quoteStore=new QuoteStore();
		$full=$quoteStore->updateQuote($cname,$value,$quote_id);
		return $full;
	}
}
?>
