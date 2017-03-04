<?php
include ('store.php');
class Admin{
	var $saStore;//=new SAstore();
	var $list;
	public function listAll(){
		$saStore=new SAstore();
		$list=$saStore->listallSA();
		return $list;
	}
}
echo "After the controller class";
?>
