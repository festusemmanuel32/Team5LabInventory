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

case 3:
	include("Supply.php");
	$obj=new Supply();
	// $id=$_REQUEST['id'];
	$supplierID=$_GET['id'];
	$row=$obj->removeSupplier($supplierID);


	case 2:
	include("Supply.php");
	$obj=new Supply();
	if($row=$obj->get_supply()){		
		echo '{"result":1,"message":[';
		while ($row){
			echo json_encode($row);
			$row=$obj->fetch();
			if ($row) {
				echo ",";
			}
		}
		echo "]}";
	}
	else{
		echo '{"result":0,"message": "reading not removed."}';
	}
	break;	



}
?>