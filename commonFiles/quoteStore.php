<?php
	include('globalConstants.php');
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
		// +checkCredentials()
		public function checkCredentials($id, $password){
				$sql = "select name from salesassociate where sa_id=$id AND password='$password'";
				$conn_local=$this->connect_local();
				$result=$conn_local->query($sql);
				if($result){
					return $result->fetchAll();
				}
				else return -1;
		}
		// +getQuote($var), where $var=SA or CID or ID or status or ID
		public function getQuote($var, $att_type){
			if($att_type == Constants::GET_QUOTE_BY_CID){
				$sql="select * from quotes where quote_id=$var;";
			}
			if($att_type == Constants::GET_QUOTE_BY_QID){
				$sql="select * from quotes where quote_id=$var;";			
			}
                       	$conn_local=$this->connect_local();
                        $result=$conn_local->query($sql);
                        $listAll=$result->fetchAll();
			return $listAll;
                }
		public function getQuotes($status, $att_type){
                	$conn=$this->connect_local();
			if($att_type == Constants::GET_QUOTE_BY_STATUS){
	                	$sql="select * from quotes where status='$status';";
			}
			else if($att_type == Constants::GET_QUOTE_BY_SANCTIONED_PO){
			 	$sql="select * from quotes where status='$status' and postatus!=1;";
			}
			else return;
                	$result=$conn->query($sql);
			$listAll=$result->fetchAll();
                	return $listAll;
           	 }
      		public function listAllItems($quote_id){
                	$conn=$this->connect_local();
	                $sql='select * from quotesItems where q_id='.$quote_id;
	                $result=$conn->query($sql);
	                $listAll=$result->fetchAll();
	                return $listAll;
        	}
		// Also adds the discount
	        public function updateQuote($var1, $var2, $att_type){
	                $conn=$this->connect_local();
	                if($att_type === Constants::UPDATE_DISCOUNT){
		                $sql1="update quotes set disc=$var2 where quote_id=$var1;";
                		$conn->query($sql1);
		                $sql2='update quotes set status="sanctioned" where quote_id='.$var1;
		                $conn->query($sql2);
                		$sql="update quotes set total=total-$var2 where quote_id=$var1;";
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
			if($att_type===Constants::UPDATE_QUOTE_SANCTIONED_PO){
        		         $sql2="update quotes set disc=$var2 where quote_id=$var1;";
	                 $conn->query($sql2);
	                 $conn=$this->connect_local();
	                 $sql="update quotes set total=total-$var2 where quote_id=$var1;";
                 	 $conn->query($sql);
	                 $sql1="update quotes set postatus=1 where quote_id=$var1";
	                 $conn->query($sql1);
			}
                	$result=$conn->query($sql);
                	return temp;
             	}
		public function createQuote($dateNow, $saoc_id, $c_id, $notes, $email){
			$conn=$this->connect_local();
	                $sql="insert into quotes(date, saoc_id, c_id, notes, email, status, postatus) values('$dateNow', $saoc_id, $c_id, '$notes', '$email','finalized',0);";
			$result=$conn->query($sql);
			$id=$conn->lastInsertId();
			return $id;
		}
		public function addLineItems($quote_id, $itemDesc, $price){
			$conn=$this->connect_local();
			$sql="insert into quotesItems(q_id, descrptn, price) values($quote_id, '$itemDesc', $price);";	
			$result=$conn->query($sql);
		}
		public function updateTotal($quote_id, $total){
			$conn=$this->connect_local();
			$sql="update quotes set total=$total where quote_id=$quote_id;";
			$result=$conn->query($sql);
		}
		 public function getdateRange($from,$to)
                {
                        $conn_local=$this->connect_local();
                        $sql="select * from quotes where date between '$from' and '$to'";
                        $result=$conn_local->query($sql);
                        $listAll=$result->fetchAll();
                        return $listAll;
                }

                public function getquotesf($finalized)
                {
                    $conn_local=$this->connect_local();
                    $sql='select * from quotes where status="finalized"';
                    $result=$conn_local->query($sql);
                    $listAll=$result->fetchAll();
                    return $listAll;
                }

                public function getquoteso($ordered)
                {
                    $conn_local=$this->connect_local();
                    $sql='select * from quotes where status="ordered"';
                    $result=$conn_local->query($sql);
                    $listAll=$result->fetchAll();
                    return $listAll;
                }

                public function getquotess($sanctioned)
                {
                  $conn_local=$this->connect_local();
                  $sql='select * from quotes where status="sanctioned"';
                  $result=$conn_local->query($sql);
                  $listAll=$result->fetchAll();
                  return $listAll;
                }

                public function getquotesc($c_id)
                {
                   $conn_local=$this->connect_local();
                   $sql="select * from quotes where c_id='$c_id'";
                   $result=$conn_local->query($sql);
                   $listAll=$result->fetchAll();
		    return $listAll;
                }

                public function getquotessa($sassoc_id)
                {
                   $conn_local=$this->connect_local();
                   $sql="select * from quotes where saoc_id='$sassoc_id'";
                   $result=$conn_local->query($sql);
                   $listAll=$result->fetchAll();
                   return $listAll;
                }

		public function sendMail($email, $quote_id, $name){
    			$subject="Quote Confirmation: $quote_id";
			$message="Hello $name,
%0D%0A
%0D%0AYour quote has been converted to a purchase order.
%0D%0A
%0D%0APlease visit the following to track your order.
%0D%0A
%0D%0Ahttp://students.cs.niu.edu/~z1778291/customer/track_quote.php?quote_id=$quote_id
%0D%0A
%0D%0ARegards,
%0D%0AGrad Group 3";
			echo "<a href=\"mailto:$email?subject=$subject&amp;body=$message&amp;/>";
    		}
        	public function updateCommision($quote, $comm_rate){
                	$conn=$this->connect_local();
	                $sql2="update quotes set comm_rate=$comm_rate where quote_id=$quote;";
	                $conn->query($sql2);
        	}
	}
?>
