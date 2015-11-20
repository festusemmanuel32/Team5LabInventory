<?php
header('Access-Control-Allow-Origin: *');
$cmd=$_REQUEST['cmd'];
switch($cmd)
{
	case 1:
		include("equipment.php");
		$obj=new equipment();
		$id=$_GET['id'];
	    $name=$_GET['name'];
	    $price=$_GET['price'];
	    $supplier=$_GET['supplier'];
	    $location=$_GET['location'];
	    $status=$_GET['status'];
	     echo $_GET['id']; 
		if($row=$obj->add($id,$name,$price,$supplier,$location,$status))
                echo '{"result":"1"}';
                else
                echo "mysql_error";

		//return a JSON string to browser when request comes to get description				
		break;
	case 2:
		include("equipment.php");
		$obj=new equipment();		
		if($obj->view()){
			$row=$obj->fetch();					
			echo '{"result":1,"message":[';
			while ($row){				
				echo json_encode($row);				
				$row = $obj->fetch(); 
				if ($row){
					echo ',';
				}
			}
		echo ']}';
		}else{
			echo '{"result":0,"message": "Failed"}';
		}
		break;

	default:
}
?>