<?php
include("adb.php");

class equipment extends adb{
	function add($id,$name,$price,$supplier,$location,$status){
		$str_query="insert into eqpt set id = '$id', name = '$name', price = $price, supplier = '$supplier', location = '$location', status = '$status'";
		return $this->query($str_query);
	}

	function view(){
		$str_query="select * from eqpt";
		$this->query($str_query);
		return $this->fetch();
	}
	
	function search($id){
		$str_query="select * from eqpt where  id = '$id'";
		return $this->query($str_query);
	}
}
?>