<?php
	class QuoteStore{
		function connect_local(){
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
                        	echo "Connection to database failed: ";
                                echo $e->getMessage();
                                exit();
                	}
                	return $conn_local;
		}
		function connect_remote(){
			$host = 'blitz.cs.niu.edu';
                        $user = 'student';
                        $password='student';
                        $db = 'csci467';
                        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
                        $conn_remote = new PDO("mysql:host=$host;dbname=$db",$user,$password);
                        try{
                                $conn_remote->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $conn_remote->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                        }
                        catch(PDOException $e){
                                echo "Connection to database failed: ";
                                echo $e->getMessage();
                                exit();
                        }
                        return $conn_remote;
		}
		public function getCustomer($cust_id){
//			echo "Customer id passed: "; echo $cust_id;
			$sql_st="select * from customers where id=$cust_id;";
			$conn_remote=$this->connect_remote();
	                $result_remote=$conn_remote->query($sql_st);
	                if($result_remote)
			$listDet=$result_remote->fetchAll();
	//              echo "Number of values retunred: ";
	//              echo sizeof($listAll);
	                return $listDet;
		}
		public function getQuote($quote_id){
			$sql="select * from quotes where quote_id=".$quote_id.";";
	                $conn_local=$this->connect_local();
        	        $result=$conn_local->query($sql);
                	$listAll=$result->fetchAll();
	//      	echo "Number of values retunred: ";
	//              echo sizeof($listAll);
        	        return $listAll;
		}		
	}
?>
