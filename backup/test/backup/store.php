<?php
echo "inside store";
//	include '../commonFiles/conn.php';
//	include '../commonFiles/conn1.php';
class SAstore{
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
	public function listallSA(){
		$sql="select * from salesassociate;";
		$conn_local=$this->connect();
		$result=$conn_local->query($sql);
		$listAll=$result->fetchAll();
//		echo "Number of values retunred: ";
//		echo sizeof($listAll);
		return $listAll;
	}
}
echo "end of store";
?>
