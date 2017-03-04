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
//			echo "Inside persistance";
  //      		echo $id;
    //    		echo $password;
      //  		echo "outside persistance";
				$sql = "select name from salesassociate where sa_id=$id AND password='$password'";
				$conn_local=$this->connect_local();
				$result=$conn_local->query($sql);
				if($result){
					return $result->fetchAll();
				}
				else return -1;
		}
		// +selectCustomer(info)
		public function selectCustomer($info){

                }
		// + getCustomers()
		public function getCustomers(){

                }
		
		// +getQuoteStatus($var), where $var=finalized or sanctioned or ordered
		public function getQuoteStatus($var){

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
        //              echo "Number of values retunred: ";
        //              echo sizeof($listAll);
                        return $listAll;
                }
		// +addDiscount($var), where $var=discount
		public function addDiscount($disc){
		
                }
		public function sendEmail(){

                }
	public function getQuotes(){
                $conn=$this->connect_local();
                $sql='select * from quotes where status="finalized"';
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
