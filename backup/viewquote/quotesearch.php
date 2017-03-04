<?php
        class quotesearch
	{
                function connect()
		{
                        $host = 'courses';
                        $user = 'z1778291';
                        $password='1991Dec11';
                        $db = 'z1778291';
                        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
                        $conn_remote = new PDO("mysql:host=$host;dbname=$db",$user,$password);
                        try
			{
                                $conn_remote->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $conn_remote->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                        }
                        catch(PDOException $e)
			{
                                echo "Connection to database failed: ";
                                echo $e->getMessage();
                                exit();
                        }
                        return $conn_remote;
                }
                public function getdateRange($from,$to)
		{             
			$conn=$this->connect();
			$sql="select * from quotes where date between '$from' and '$to'";
			//echo $sql;
			$result=$conn->query($sql);
			$listAll=$result->fetchAll();
			return $listAll;
	        }
		
		public function getquotesf($finalized)
		{
                    $conn=$this->connect();
                    $sql='select * from quotes where status="finalized"';
                    $result=$conn->query($sql);
                    $listAll=$result->fetchAll();
                    return $listAll;
                }
		
		public function getquoteso($ordered)
		{
                    $conn=$this->connect();
                    $sql='select * from quotes where status="ordered"';
                    $result=$conn->query($sql);
                    $listAll=$result->fetchAll();
                    return $listAll;
        	}

		public function getquotess($sanctioned)
		{		
                  $conn=$this->connect();
                  $sql='select * from quotes where status="sanctioned"';
                  $result=$conn->query($sql);
                  $listAll=$result->fetchAll();
                  return $listAll;
                }		
		
		public function getquotesc($c_id)
		{		
              	   $conn=$this->connect();
              	   $sql="select * from quotes where c_id='.$c_id';";
                   $result=$conn->query($sql);
                   $listAll=$result->fetchAll();
                   return $listAll;
        	}
		
		public function getquotessa($sassoc_id)
                {
                   $conn=$this->connect();
                   $sql="select * from quotes where sassoc_id='.$sassoc_id';";
                   $result=$conn->query($sql);
                   $listAll=$result->fetchAll();
                   return $listAll;
                }

	}
?>

