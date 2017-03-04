<?php
include("../commonFiles/quoteStore.php");
class quoteReviewer{
	var $quoteStore;
	var $full;
	public function getQuotes($status){
                echo $status;
		$quoteStore=new QuoteStore();
		$full=$quoteStore->getQuotes($status,Constants::GET_QUOTE_BY_STATUS);
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
