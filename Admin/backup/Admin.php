<?php
include("../commonFiles/SalesAssociateStore.php");
class Admin1{
	public function getSA($sa_id){
		$saStore=new SalesAssociateStore();
		$full=$saStore->getSA($sa_id);
		return $full;
	}
	
	public function addSA($sa_id){
		$saStore=new SalesAssociateStore();
		$full=$saStore->addSA($sa_id);
		return $full;
	}
	
	public function findSA($name){
	$saStore=new SalesAssociateStore();
	$full=$saStore->findSA($name);
	return $full;
	}
	
	public function findallSA($name){
	$saStore=new SalesAssociateStore();
	$full=$saStore->findallSA($name);
	return $full;
	}
	
	public function updateSAinfo($sa_id){
	$saStore=new SalesAssociateStore();
	$full=$saStore->updateSAinfo($sa_id);
	return $full;
	}
	
	public function updateSA($sa_id){
	$saStore=new SalesAssociateStore();
	$full=$saStore->updateSA($sa_id);
	return $full;
	}
	
	public function deleteSA($sa_id){
	$saStore=new SalesAssociateStore();
	$full=$saStore->deleteSA($sa_id);
	return $full;
	}
	
}
?>
