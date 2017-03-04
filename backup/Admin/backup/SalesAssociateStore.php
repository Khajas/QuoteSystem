<?php
//	include '../commonFiles/conn.php';
//	include '../commonFiles/conn1.php';
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

	/*public function getQuotes(){
		$conn_local=$this->connect();
		$sql='select * from quotes where status="finalized"';
		$result=$conn->query($sql);
		$listAll=$result->fetchAll();
		return $listAll;
	}*/
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
		   
		   
		/*$sql = "SELECT * FROM salesassociate WHERE name LIKE '%" . $name . "%';";
		//trace ( $sql );
		$result = $conn_local->query ( $sql );
		
		$salist = array ();
		
		if ($result->num_rows > 0) {
			while ( $row = $result->fetch_assoc () ) {
				$salist [$row ['id']] = new salesassociate ( $row );
			}
		} else {
			//trace ( "0 employee records found" );
		}
		return $salist;
		
		$conn_local=$this->connect();
		$sql="select * from salesassociate where name like '%".$name."%';";
		$result=$conn_local->query($sql);
		$salist=$result->fetchAll();
		return $salist;*/
		   		
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
					/*if(isset($_POST['id'])){
						echo "id is set";
						echo $_POST['id'];
					}*/
					$sql="select * from salesassociate where sa_id=".$_POST['id'];
					$stmt=$conn_local->query($sql) or die("Error:".implode(":",$conn->errorInfo()));;

					//$sql="select * from salesassociate where sa_id=?";
					//$stmt=$conn_local->prepare($sql);
					//$stmt->execute(array($sa_id));
					
					$salist=$stmt->fetchAll(PDO::FETCH_ASSOC);
					$row=$salist[0];
					return $row;
					//return $salist;
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
		  
		  
		  
		/* $sql = "UPDATE salesassociate SET name = '".$_POST['name']."',";
			        $sql .= "dob = '".$_POST['dob']."',";
			        $sql .= "addr1 = '".$_POST['addr1']."',";
			        $sql .= "addr2 = '".$_POST['addr2']."',";
			        $sql .= "phone = '".$_POST['phone']."',";
			        $sql .= "email = '".$_POST['email ']."',";
			        $sql .= "password = '".$_POST['password']."' WHERE sa_id =".$_POST['id '].";";*/
         

		// $sql="UPDATE salesassociate SET last_update=now(), last_monitor=last_update WHERE sa_id=".$_POST['id'];
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
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
	
	      		/*if($_SERVER['REQUEST_METHOD']=='POST')
				{
					$name=trim($_POST['id']);
					
					$sql1="UPDATE salesassociate SET last_update=now(), last_monitor=last_update WHERE sa_id=".POST['id'];
				   /* $sql = "UPDATE salesassociate SET name = '" . $name['name'] . "', ";
			        $sql .= "dob = '" . $name['dob'] . "', ";
			        $sql .= "addr1 = '" . $name['addr1'] . "', ";
			        $sql .= "addr2 = '" . $name['addr2'] . "', ";
			        $sql .= "phone = '" . $name['phone'] . "', ";
			        $sql .= "email = '" . $name['email ']. "', ";
			        $sql .= "password = '" . $name['password'] . "' WHERE id = " . $name['sa_id ']. ";";*/
		//}

		/*if ($conn_local->query ( $sql ) === TRUE) {
			return "SalesAssociate record updated successfully";
		} else {
			trace ( "Error updating record: " . $conn->error );
		}*/
					
					
					
					
					
					/*$sql="select * from salesassociate where name=?";
					$stmt=$conn_local->prepare($sql);
					$stmt->execute(array($name));
					$cnt=$stmt->rowCount();
					$salist=$stmt->fetchAll(PDO::FETCH_ASSOC);
					echo 'The Number of records for '.$name.' is';
					echo $cnt.'.<br>';
					return $salist;*/
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






			   
			   
			   
			  /* $name=trim($_POST['id']);
				$name1=$_POST['name'];
		  
		  		$sql="DELETE from salesassociate where sa_id=".$_POST['id'];
				$stmt = $conn_local->query($sql);

				
			/*	if ($conn_local->query ( $sql ) === TRUE) {
			   return "SalesAssociate record deleted successfully";
		      } else {
			   echo "Error updating record: " . $conn->error ;
		       }*/
				
				
				
				/*if($stmt->execute() === TRUE)
				{
					echo "Record deleted successfully";
					 return 'SalesAssociate '.$name1.' deleted successfully!';
				}
				else
				{
					echo "Couldn't delete record";
					echo 'Error!SalesAssociate '.$name1.' could not be deleted!';
				}*/
	
	   /*$sql="DELETE from salesassociate where sa_id=".$_POST['id'];
	    try
        {
			$stmt=$conn_local->query($sql) or die("Error:".implode(":",$conn->errorInfo()));;
	       return 'SalesAssociate '.$name.' deleted successfully!';
        }//end try
        catch (PDOException $e)
       {
          echo 'Error!SalesAssociate '.$name.' could not be deleted!';
	      echo 'The Error is'.$e->getMessage();	  
       }//end catch
      //end if*/
	
	
	
	
	
	
	
	
	
		}
	
}	
	//public function addSAS(){
		
		//handles when the user clicks the submit/insert button.
/* Then in the if ($_SERVER['REQUEST_METHOD'] =='POST') check the hidden input and handle the insertion */
/*if($_SERVER['REQUEST_METHOD']=='POST')
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
		

	}*/
//}

?>
