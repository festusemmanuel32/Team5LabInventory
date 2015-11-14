<?php

$cmd=$_REQUEST['cmd'];
switch($cmd)
{
	case 1:
	include("Supply.php");
	$obj=new Supply();
	// $id=$_REQUEST['id'];
	$supplierID=$_GET['id'];
	$supplierName=$_GET['name'];
	$supplyQuant=$_GET['quant'];
	$contact=$_GET['cont'];
	$row=$obj->addSupplier($supplierID, $contact, $supplyQuant, $supplierName);
		//return a JSON string to browser when request comes to get description

break;

}
?>