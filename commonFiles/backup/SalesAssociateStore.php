<?php
class SalesAssociateStore{
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

	public function getSA($sa_id){
		$conn_local=$this->connect();
		$sql='select * from salesassociate';
		$result=$conn_local->query($sql);
		$listAll=$result->fetchAll();
		return $listAll;
	}
	
	public function addSA($sa_id){
		$conn_local=$this->connect();
  
       if($_SERVER['REQUEST_METHOD']=='POST')
      {
          $name=$_POST['name'];
          $dob=$_POST['dob'];
          $addr1=$_POST['addr1'];
          $addr2=$_POST['addr2'];
          $phone=$_POST['phone'];
          $email=$_POST['email'];
          $password=$_POST['password'];
         $sql="insert into salesassociate(name,dob,addr1,addr2,phone,email,password)values(?,?,?,?,?,?,?);";
         try
        {
            $stmt=$conn_local->prepare($sql);
	        $ok=$stmt->execute(array($name,$dob,$addr1,$addr2,$phone,$email,$password));
	       return 'SalesAssociate '.$name.' added successfully!';
        }//end try
        catch (PDOException $e)
       {
          echo 'Error!SalesAssociate '.$name.' could not be added!';
	      echo 'The Error is'.$e->getMessage();	  
       }//end catch
      }//end if
		
    }


	public function findSA($name){
	       $conn_local=$this->connect();
		   		
				if($_SERVER['REQUEST_METHOD']=='POST')
				{
					$name=trim($_POST['search']);
					/*echo '<br>';*/
					$sql="select * from salesassociate where name=?";
					$stmt=$conn_local->prepare($sql);
					$stmt->execute(array($name));
					$cnt=$stmt->rowCount();
					$salist=$stmt->fetchAll(PDO::FETCH_ASSOC);
					echo 'The Number of records for '.$name.' is';
					echo $cnt.'.<br>';
					return $salist;
		        }
 
	}


	public function findallSA($name){
	         $conn_local=$this->connect();
		     $sql2='select * from salesassociate';
		     $result=$conn_local->query($sql2);
		     $listAll=$result->fetchAll();
		     return $listAll; 

	}
	
	
	
	
	public function updateSAinfo($sa_id){
		    $conn_local=$this->connect();
		   
		
	       		if($_SERVER['REQUEST_METHOD']=='POST')
				{
					$name=trim($_POST['id']);
					$sql="select * from salesassociate where sa_id=".$_POST['id'];
					$stmt=$conn_local->query($sql) or die("Error:".implode(":",$conn->errorInfo()));
					$salist=$stmt->fetchAll(PDO::FETCH_ASSOC);
					$row=$salist[0];
					return $row;
	            }
	}


    public function updateSA($sa_id){
          $conn_local=$this->connect();
		  
		  
	   if($_SERVER['REQUEST_METHOD']=='POST')
      {
		  
          $name=$_POST['name'];
          $dob=$_POST['dob'];
          $addr1=$_POST['addr1'];
          $addr2=$_POST['addr2'];
          $phone=$_POST['phone'];
          $email=$_POST['email'];
          $password=$_POST['password'];

		$sql="UPDATE salesassociate SET name='$name',dob='$dob',addr1='$addr1',addr2='$addr2',phone='$phone',email='$email',password='$password' where sa_id=".$_POST['id'];
          try
         {
             $stmt=$conn_local->prepare($sql);
	         $ok=$stmt->execute(array($name,$dob,$addr1,$addr2,$phone,$email,$password));
	        return 'SalesAssociate '.$name.' updated successfully!';
         }//end try
        catch (PDOException $e)
       {
          echo 'Error!SalesAssociate '.$name.' could not be updated!';
	      echo 'The Error is'.$e->getMessage();	  
       }//end catch
     }//end if

 }
 
    public function deleteSA($sa_id){
          $conn_local=$this->connect();    

        if($_SERVER['REQUEST_METHOD']=='POST')
       {			
            $sa_id = $_POST['id'];
			 

            
               $sql="DELETE FROM salesassociate WHERE sa_id=?";
              try
             {
                     $stmt1=$conn_local->prepare($sql);
	                 $ok=$stmt1->execute(array($sa_id));        
		             echo 'SalesAssociate '.$sa_id.' deleted successfully!';
             }//end try
             catch (PDOException $e)
            {
                 echo 'Error!SalesAssociate '.$sa_id.'  could not be deleted!';
	             echo 'The Error is'.$e->getMessage();	  
            }//end catch
        }//end if

}

}	

?>
