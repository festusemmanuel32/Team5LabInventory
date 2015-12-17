<?php
    /**
    *@author Festus Jartu
    *@version 2.0
    *Type:Zend Approach
    */
header('Access-Control-Allow-Origin: *');
include("adb.php");
    /**
    *Description:This class is responsible to handle all the interaction for the supplier
    */
class Supply extends adb
{
     /**
    *Description:Afunction to add supplier to the system
    *@param $id the unique identification of the supplier
    *@param $name this caters for the name of the supplier 
    *@param $quant this tells the quantity of item supplied 
    *@param $cont this tells the contant addresss of the aupplier
    *@return this function returns a boolean 
     */  
    function addSupplier($id,  $name, $quant, $cont)
    {

    $query="INSERT into `inventory` set supplierID='$id', supplierName='$name', supplyQuant='$quant',
    contact='$cont'";      
    echo $query;
    return $this->query($query);
    }
    /**
    *Description:A function to view all the suppliers in the system
    */  
     function get_supply()
     {
		$str_query="select * from inventory";
		if(!$this->query($str_query))
        {
			return false;
		}	
		return $this->fetch();
    }
     /**
     *Description: this function removes a supplier from active service 
     *@param $id this is used to identify the particular supplier to be disabled
     *@return this function returns an the element is an object  
    */  		
    function removeSupplier($id)
    {
    $query="DELETE FROM  `inventory` where supplierID='$id'";      
    echo $query;
    return $this->query($query);
    }
}
?>