<?php
header('Access-Control-Allow-Origin: *');
include("adb.php");

class Supply extends adb{
    
    function addSupplier($id,  $name, $quant, $cont){

    $query="INSERT into `inventory` set supplierID='$id', supplierName='$name', supplyQuant='$quant', contact='$cont'";      
    echo $query;
return $this->query($query);

    
    }
}
?>