<?php
echo "inside store";
//	include '../commonFiles/conn.php';
//	include '../commonFiles/conn1.php';
class Quotestore
{
	function connect()
	{
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
		catch(PDOException $e)
		{
			echo 'ERROR: ' . $e->getMessage();
		}
		return $conn_local;
	}	
	public function getQuotes()
	{
       $page_title="All Quotes";
		$sql="select quote_id,saoc_id,c_id from quotes";
		$conn_local=$this->connect();
		$result=$conn_local->query($sql);
		$listAll=$result->fetchAll();
//		echo "Number of values retunred: ";
//		echo sizeof($listAll);
		return $listAll;
	}
    public function getQuote($quote_id)
     {
        $sql="select * from quotes where = " . $id . ";";
        $result=$conn_local->query($sql);
        $conn_local=$this->connect();
		$result=$conn_local->query($sql);
		$listAll=$result->fetchAll();
//		echo "Number of values retunred: ";
//		echo sizeof($listAll);
		return $listAll;
     }
     public function addDiscount($disc)
     {
        $sql="select * from quotes where = " . $id . ";";
        $result=$conn_local->query($sql);
        $conn_local=$this->connect();
		$result=$conn_local->query($sql);
		$listAll=$result->fetchAll();
//		echo "Number of values retunred: ";
//		echo sizeof($listAll);
		return $listAll;
     }
     public function updateQuote($disc)
     {
        $sql="select * from quotes where = " . $id . ";";
        $result=$conn_local->query($sql);
        $conn_local=$this->connect();
		$result=$conn_local->query($sql);
		$listAll=$result->fetchAll();
//		echo "Number of values retunred: ";
//		echo sizeof($listAll);
		return $listAll;
     }
}

?>
	
	