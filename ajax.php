<?php
header('Access-Control-Allow-Origin: *');
$cmd=$_REQUEST['cmd'];
switch($cmd)
{
	case 1:
		include("addReading.php");
		$obj=new addReading();
		$meterID=$_GET['meter'];
	        $meterValue=$_GET['reading'];
	        //echo $_GET['meter']; 
		$row=$obj->add($meterID,$meterValue);
                echo '{"result":"1"}';
		//return a JSON string to browser when request comes to get description
				
		break;
	case 2:
		include("addReading.php");
		$obj=new addReading();

		
		if($row=$obj->getReadings()){
			$row=$obj->fetch();		
			echo '{"result":1,"message":[';
			while ( $row ){
				echo json_encode($row);
				$row = $obj->fetch (); 
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