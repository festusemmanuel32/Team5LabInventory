<?php
header('Access-Control-Allow-Origin: *');
$cmd=$_REQUEST['cmd'];
switch($cmd)
{
	case 1:
	addborrower();
				
		break;
	case 2:
		include("Borrower_Class.php");
		$obj=new borrower();		
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
	case 3:
		break;
	case 4:
		break;

	default:
}

function addborrower(){
		include("Borrower_Class.php");

		$obj=new borrower();
		$id=$_GET['id'];
		$name=$_GET['name'];
	    $address=$_GET['ca'];
	    $supplier=$_GET['mj'];

	     echo $_GET['id']; 
		if($row=$obj->add($id,$name,$address,$major)
		{

                echo "Error adding".mysql_error();
}
else
{
echo " $borrower_name has successfully being added to the database";
}
}
?>