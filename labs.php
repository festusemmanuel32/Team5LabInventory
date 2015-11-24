<?php
/**
	*@Author : Margaret Morenike Ayodele
	*@Date: 9th November, 2015
	*@Assignment: Software Engineering Implementation Assignment
	*@category   Inventory Management
	*@package    Laboratories
	*@version    2.0
	*@param      declares $lab_name, $lab_id, $lab_capacity & $lab_location
	*            as variables of Manufacturer class
**/

/* side effect: load a file*/
include("adb.php");

/* The name of the class*/
class Labs extends adb
{


/**
    *@method boolean search_lab($lab_name,$lab-id,$lab_location) allows users to search for labs
    *by their names, id and physical locations
    *@param String $lab_name// The name of a lab
	*@param integer $lab_id// The assigned id of a lab
	*@param varchar $lab_location// The assigned location of a lab
    *@param $str_query// this ia a variable that holds the query.
    *It searches through the database to get the lab information if any
	*@return $this->query()//this returns the value of the query if there is any in the database.
**/
	function search_lab($lab_name,$lab-id,$lab_location, $equip_id)
	{
		$str_query="select * from labs
			where lab_name= '$lab_name', lab_id = '$lab_id', lab_location ='$lab_location'
			$equip_id = equip-id'";

		return $this->query($str_query);

	}

/**
	*@method boolean add_lab($lab_name, $lab_id,$lab_location,$lab_capcaity)allows
	* the Administrator to add new labs given their names, id, location and capacity
	*@param String $lab_name// The name of a lab
	*@param integer $lab_id// The assigned id of a lab
	*@param varchar $lab_location// The assigned location of a lab
	*@param integer $lab_capacity// The equipment capcity of a lab
	*@param $str_query// this ia a variable that holds the query.
	*It searches through the database to get the lab information if any
	*@return $this->query()//this returns the value of the query if there is any in the database.
**/
	function add_lab($lab_name, $lab_id,$lab_location,$lab_capcaity,$equip_id, $supplierID)
	{
		$str_query="insert into labs set
            lab_name='$lab_name', lab_id='$lab_id' lab_location ='$lab_location',
                lab_capcaity='$lab_capcaity', 'equip_id = $equip_id', '$supplierID =supplier_id' ";

        return $this->query($str_query);
	}

/**
	*@method boolean delete_lab($lab_name, $lab_id,$lab_location,$lab_capcaity)allows
	* the Administrator to remove labs given their names, id, physical location and capacity
	*@param String $lab_name// The name of a lab
	*@param integer $lab_id// The assigned id of a lab
	*@param varchar $lab_location// The assigned location of a lab
	*@param integer $lab_capacity// The equipment capcity of a lab
	*@param $str_query// this ia a variable that holds the query.
	*It searches through the database to get the lab information if any
	*@return $this->query()//this returns the value of the query if there is any in the database.
**/
	function delete_lab($lab_name,$lab_id,$lab_location,$lab_capcaity,$equip_id,$supplierID)
	{
		$str_query="delete from labs where lab_name='$lab_name', lab_id='$lab_id'
			lab_location ='$lab_location',lab_capcaity='$lab_capcaity','equip_id = $equip_id', '$supplierID =supplier_id' ";

	    return $this->query($str_query);
	}

/**
	*@method boolean edit_lab($lab_name, $lab_id,$lab_location,$lab_capcaity)allows
	* the Administrator to modify labs given their names, id, physical location and capacity
	*@param String $lab_name// The name of a lab
	*@param integer $lab_id// The assigned id of a lab
	*@param varchar $lab_location// The assigned location of a lab
	*@param integer $lab_capacity// The equipment capcity of a lab
	*@param $str_query// this ia a variable that holds the query.
	*It searches through the database to get the llab information if any
	*@return $this->query()//this returns the value of the query if there is any in the database.
**/
	function edit_lab($lab_name,$lab_id,$lab_location, $lab_capcaity)
	{
		$str_query="update labs set lab_name='$lab_name', lab_id='$lab_id'
			lab_location ='$lab_location',lab_capcaity='$lab_capcaity'";

	    return $this->query($str_query);
	}
}
?>
