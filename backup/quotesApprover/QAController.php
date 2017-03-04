<?php
include ("quotestore.php");
class quoteApprover
{
	var $quoteStore;//=new SAstore();
	var $list;
	public function getQuotes()
	{
		$quoteStore=new Quotestore();
		$list=$quoteStore->getQuotes();
		return $list;
	}
    public function getQuote($quote_id)
    {
	    $quoteStore=new Quotestore();
		$list=$quoteStore->getQuotes($quote_id);
		return $list;
    }
    public function addDiscount($disc)
    {
    	$$quoteStore=new Quotestore();
    	$list=$quoteStore->addDiscount($disc);
    	return $list;
    }
    public function updateQuote($disc,$quote)
    {
        echo "inside quotestore->updateQuote()";
        //echo $quote;
    	$quoteStore=new Quotestore();
    	$list=$quoteStore->updateQuote($disc,$quote);
    	return $list;
    }
    public function updateCommission($comm_rate)
     {
     	 $quoteStore=new Quotestore();
    	$quoteStore=$quoteStore->updateCommission($disc);
    	return $list;
     }
}
?>
