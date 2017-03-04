<?php
include ("../commonFiles/quoteStore.php");
class quoteApprover
{
	var $quoteStore;//=new SAstore();
	var $list;
	public function getQuotes($status,$att_type)
	{
		$quoteStore=new QuoteStore();
		$list=$quoteStore->getQuotes($status, $att_type);
		return $list;
	}
    public function getQuote($quote_id, $att_type)
    { // echo " ingetquote";
	    $quoteStore=new QuoteStore();
//	echo $quote_id;
		$list=$quoteStore->getQuote($quote_id, $att_type);
	 //  echo sizeof($list);	
             return $list;
    }
    public function addDiscount($disc)
    {
    	$$quoteStore=new QuoteStore();
    	$list=$quoteStore->addDiscount($disc);
    	return $list;
    }
    public function updateQuote($disc,$quote, $att_type)
    {
        //echo "inside quotestore->updateQuote()";
        //echo $quote;
    	$quoteStore=new QuoteStore();
    	$list=$quoteStore->updateQuote($quote,$disc, $att_type);
    	return $list;
    }
    public function updateCommision($quote, $comm_rate)
     {
     	$quoteStore=new QuoteStore();
    	$quoteStore->updateCommision($quote, $comm_rate);
     }
    public function sendMail($email, $quote_id, $name)
      {
        $quoteStore=new QuoteStore();
        return $quoteStore->sendMail($email,$quote_id, $name);
      }
}
?>
