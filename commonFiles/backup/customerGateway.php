<?php
	class CustomerGateway{
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
                }// +getCustomer()
		 public function getCustomer($cust_id){
//                      echo "Customer id passed: "; echo $cust_id;
                        $sql_st="select * from customers where id=$cust_id;";
                        $conn_remote=$this->connect_remote();
                        $result_remote=$conn_remote->query($sql_st);
                        if($result_remote)
                        $listDet=$result_remote->fetchAll();
        //              echo "Number of values retunred: ";
        //              echo sizeof($listAll);
                        return $listDet;
                }
		public function getCustomers(){
//                      echo "Customer id passed: "; echo $cust_id;
                        $sql_st="select name from customers;";
                        $conn_remote=$this->connect_remote();
                        $result_remote=$conn_remote->query($sql_st);
                        if($result_remote)
                        $listDet=$result_remote->fetchAll();
                    //  echo "Number of customers retunred: ";
                   //   echo sizeof($listAll);
                        return $listDet;
                }
		// +selectCustomer($info)
		public function selectCustomer($name){
			$sql_st="select id from customers WHERE name LIKE '%$name%';";
                        $conn_remote=$this->connect_remote();
                        $result_remote=$conn_remote->query($sql_st);
                        if($result_remote)
                        $listDet=$result_remote->fetchAll();
                      	echo "Number of id's: ";
                      	echo sizeof($listAll);
                        return $listDet;
		}
	}
?>
