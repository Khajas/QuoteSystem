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
	public function updateQuote($disc,$quote,Constants::UPDATE_QUOTE_SANCTIONED_PO)
	{
		echo '<br>';
		//echo $disc;
		//echo $price;
	     $conn=$this->connect();
		 $sql2="update quotes set disc=$disc where quote_id=$quote;";
		 $conn->query($sql2);
		 $conn=$this->connect();
		 $sql="update quotes set total=total-$disc where quote_id=$quote;";
		 //echo $sql;
		 $conn->query($sql);
		 $sql1="update quotes set postatus=1 where quote_id=$quote";
		 //echo $sql1;
		 $conn->query($sql1);
	}	 
    public function sendMail($email, $quote_id, $name)
    {
    	 $subject="Quote Confirmation: $quote_id";
    	 $message="Hello $name,
    	 		\nYour quote has been converted to a purchase order.
    	 		\nPlease visit the following to track your order.
    	 		\nhttp://students.cs.niu.edu/~z1778291/customer/track_quote=$quote_id
    	 		\nRegards,
    	 		\nGrad Group 3";
    	 return mail($email, $subject, $message);
    }
	/*public function listAllItems($quote_id){
		$conn=$this->connect();
		$sql='select * from quotesItems where q_id='.$quote_id;
		$result=$conn->query($sql);
		$listAll=$result->fetchAll();
		return $listAll;
	}*/
	public function updateCommision($quote, $comm_rate){
		$conn=$this->connect();
                $sql2="update quotes set comm_rate=$comm_rate where quote_id=$quote;";
                $conn->query($sql2);
	}
}
?>
