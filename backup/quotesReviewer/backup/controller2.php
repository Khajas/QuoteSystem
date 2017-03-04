<?php
include("quotestore.php");
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
		$full=$quoteStore->getQuote($quote_id);
		return $full;
	}
	public function listItems($quote_id){
		$quoteStore=new QuoteStore();
		$full=$quoteStore->listAllItems($quote_id);
		return $full;
	}
	public function updateQuote($var1, $var2, $att_type){
		$quoteStore=new QuoteStore();
		$full=$quoteStore->updateQuote($var1, $var2, $att_type);
		return $full;
	}
}
?>
