<?php

class QuoteStore{
	
	function connect(){
		$host = 'courses';
		$user = 'z1778291';
		$password='1991Dec11';
		$db = 'z1778291';
		$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
		$conn_local = new PDO("mysql:host=$host;dbname=$db",$user,$password);
		try{
        		$conn_local->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        	$conn_local->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		}
		catch(PDOException $e){
			echo 'ERROR: ' . $e->getMessage();
		}
		return $conn_local;
	}
	public function getQuotes(){
		$conn=$this->connect();
		$sql='select * from quotes where status="finalized"';
		$result=$conn->query($sql);
		$listAll=$result->fetchAll();
		return $listAll;
	}
	public function getQuote($quote_id){
		$conn=$this->connect();
		$sql='select * from quotes where quote_id='.$quote_id;
		$result=$conn->query($sql);
		$listAll=$result->fetchAll();
		return $listAll;
	}
}
?>