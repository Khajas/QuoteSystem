<?php
include('globalConstants.php');
class QuoteStore{
	public function getQuotes(){
		$conn=$this->connect();
		$sql='select * from quotes where status="finalized"';
		$result=$conn->query($sql);
		$listAll=$result->fetchAll();
		return $listAll;
	}
	public function getQuote($quote_id){
		$conn=$this->connect();
		$sql="select * from quotes where quote_id=$quote_id;";
		$result=$conn->query($sql);
		$listAll=$result->fetchAll();
		return $listAll;
	}
	public function listAllItems($quote_id){
		$conn=$this->connect();
		$sql='select * from quotesItems where q_id='.$quote_id;
		$result=$conn->query($sql);
		$listAll=$result->fetchAll();
		return $listAll;
	}
	public function updateQuote($var1, $var2, $att_type){
		$conn=$this->connect();
		if($att_type === Constants::UPDATE_DISCOUNT){
		$sql="update quotes set disc=$var2 where quote_id=$var1;";
                 }
	        if($att_type===Constants::UPDATE_NOTES){
                $sql='update quotes set notes="'.$var2.'" where quote_id='.$var1;
                 }
                if($att_type===Constants::UPDATE_LINE_ITEMS){
                $sql='update quotesItems set descrptn="'.$var2.'" where l_id='.$var1;
                }
                if($att_type===Constants::UPDATE_PRICE){
                $sql="update quotesItems set price=$var2 where l_id=$var1;";
                }
		$result=$conn->query($sql);
		echo $temp;
		
		return temp;
             } 
	}


?>
