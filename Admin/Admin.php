<?php
include("../commonFiles/SalesAssociateStore.php");
include("../commonFiles/quoteStore.php");
class Admin1{
	public function getSA($sa_id){
		$saStore=new SalesAssociateStore();
		$full=$saStore->getSA($sa_id);
		return $full;
	}
	
	public function addSA($sa_id){
		$saStore=new SalesAssociateStore();
		$full=$saStore->addSA($sa_id);
		return $full;
	}
	
	public function findSA($name){
	$saStore=new SalesAssociateStore();
	$full=$saStore->findSA($name);
	return $full;
	}
	
	public function findallSA($name){
	$saStore=new SalesAssociateStore();
	$full=$saStore->findallSA($name);
	return $full;
	}
	
	public function updateSAinfo($sa_id){
	$saStore=new SalesAssociateStore();
	$full=$saStore->updateSAinfo($sa_id);
	return $full;
	}
	
	public function updateSA($sa_id){
	$saStore=new SalesAssociateStore();
	$full=$saStore->updateSA($sa_id);
	return $full;
	}
	
	public function deleteSA($sa_id){
	$saStore=new SalesAssociateStore();
	$full=$saStore->deleteSA($sa_id);
	return $full;
	}
	
	

	public function getdateRange($from,$to)
	{
                $quotesearch=new QuoteStore();
                $full=$quotesearch->getdateRange($from,$to);
                return $full;
    }
     public function getquotesf($finalized)
	{
                $quotesearch=new QuoteStore();
                $full=$quotesearch->getquotesf($finalized);
                return $full;
    }
     public function getquoteso($ordered)
	{
                $quotesearch=new QuoteStore();
                $full=$quotesearch->getquoteso($ordered);
                return $full;
    }
     public function getquotess($sanctioned)
	{
                $quotesearch=new QuoteStore();
                $full=$quotesearch->getquotess($sanctioned);
                return $full;
    }

	public function getquotesc($c_id)
	{
		$quotesearch=new QuoteStore();
		$full=$quotesearch->getquotesc($c_id);
		return $full;
	}	
		
	public function getquotessa($sassoc_id)
	{
		$quotesearch=new QuoteStore();
                $full=$quotesearch->getquotessa($sassoc_id);
                return $full;
	
	}
	
}
?>
