<?php
/**
 * @author: Lydia Kemuma Kinyari
 * description: A class that references the adb class. It contains all the functions and the SQL statements that alter the database
 * code was documented using the zend documentat
 */
include("adb.php");

class equipment extends adb
{
	/**
	*The function add the equipment to the database
	*@param string $id this is the unique equipment ID number
	*@param string $name this is the name of the equipment
	*@param double $price the price of the equipment
	*@param string $supplier the supplier of the equipment
	*@param string $location the current location of the equipment 
	*@param string $status the status of the equipment either available,borrowed or damaged
	*@return object array returns the resilt from running the query
	*/
	function add($id,$name,$price,$supplier,$location,$status)
	{
		$str_query="insert into eqpt set id = '$id', name = '$name', price = $price, supplier = '$supplier', location = '$location', status = '$status'";
		return $this->query($str_query);
	}
	/**
	*This function displays all the equipment in the repsitory
	*@return object array returns the resilt from running the query
	*/
	function view()
	{
		$str_query="select * from eqpt";
		$this->query($str_query);
		return $this->fetch();
	}
	/**
	*This function searches for a equipment given the equipment id
	*@param string $id this is the unique equipment ID number
	*@return object array returns the resilt from running the query
	*/	
	function search($id)
	{
		$str_query="select * from eqpt where  id = '$id'";
		$this->query($str_query);
		return $this->fetch();
	}
		/**
	*The function updates the equipment currently in the database the database
	*@param string $id this is the unique equipment ID number
	*@param string $name this is the name of the equipment
	*@param double $price the price of the equipment
	*@param string $supplier the supplier of the equipment
	*@param string $location the current location of the equipment 
	*@param string $status the status of the equipment either available,borrowed or damaged
	*@return object array returns the resilt from running the query
	*/
	function update($id,$name,$price,$supplier,$location,$status)
	{
		$str_query="update eqpt set name = '$name', price = $price, supplier = '$supplier', location = '$location', status = '$status' where  id = '$id'";
		return $this->query($str_query);
	}

	/**
	*This function deletes a given the equipment id
	*@param $id string $id this is the unique equipment ID number
	*@return object array returns the resilt from running the query
	*/
	function delete($id)
	{
		$str_query="delete from eqpt where id='$id'";
		return $this->query($str_query);
	}
}
?>