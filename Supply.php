
<?php
header('Access-Control-Allow-Origin: *');
include("adb.php");

class Supply extends adb{
    
    function addSupplier($id,  $name, $quant, $cont){

    $query="INSERT into `inventory` set supplierID='$id', supplierName='$name', supplyQuant='$quant', contact='$cont'";      
    echo $query;
return $this->query($query);

    }

    function get_supply(){
		$str_query="select * from inventory";
		if(!$this->query($str_query)){
			return false;
		}	
		return $this->fetch();
		
}
function removeSupplier($id){

    $query="DELETE FROM  `inventory` where supplierID='$id'";      
    echo $query;
return $this->query($query);

    }
}


?>