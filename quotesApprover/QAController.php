<?php
include ("../commonFiles/quoteStore.php");
class quoteApprover
{
	var $quoteStore;//=new SAstore();
	var $list;
	//this function is used to get the quote using its status as a parameter
        public function getQuotes($status,$att_type)
	{
		$quoteStore=new QuoteStore();
		$list=$quoteStore->getQuotes($status, $att_type);
		return $list;
	}
         //this function is used to get the quote by using its quote id
        public function getQuote($quote_id, $att_type)
    { // echo " ingetquote";
	    $quoteStore=new QuoteStore();
//	echo $quote_id;
		$list=$quoteStore->getQuote($quote_id, $att_type);
	 //  echo sizeof($list);	
             return $list;
    }
      //this function is used to add a discount to the quote
      public function addDiscount($disc)
    {
    	$$quoteStore=new QuoteStore();
    	$list=$quoteStore->addDiscount($disc);
    	return $list;
    }
       //this function is used to update the quote after the final discount has been added
       public function updateQuote($disc,$quote, $att_type)
    {
        //echo "inside quotestore->updateQuote()";
        //echo $quote;
    	$quoteStore=new QuoteStore();
    	$list=$quoteStore->updateQuote($quote,$disc, $att_type);
    	return $list;
    }
      //this function is used to update the commission of the sales associate who has handeled the quote
      public function updateCommision($quote, $comm_rate)
     {
     	$quoteStore=new QuoteStore();
    	$quoteStore->updateCommision($quote, $comm_rate);
     }
       // this function is used to send a mail to the customer after the quote has been concerted into a purchase order
      public function sendMail($email, $quote_id, $name)
      {
        $quoteStore=new QuoteStore();
        return $quoteStore->sendMail($email,$quote_id, $name);
      }
}
?>
