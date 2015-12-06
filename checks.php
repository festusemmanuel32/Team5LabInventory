	<?php
	/**
		*@Author:    Margaret Morenike Ayodele
		*@Date:      4th December, 2015
		*@Assignment:Software Engineering Implementation Assignment
		*@category   Inventory Management
		*@package    Checks
		*@version    2.2
		*@param      declares $equip_id, $stud_id, $status & $date and $equip_location
		*            as variables of Checks class 
	**/

	header('Access-Control-Allow-Origin: *');
	/* side effect: load a file*/ 
	include("adb.php");

	/* The name of the class*/
	class Checks extends adb
	{
	  
	  /**
	    *@method boolean checkOut($equip_id,$stud_id,$equip_location,$status,$date) allows users to check out
	    *equipment given their the equipment id and loaction 
	    *@param integer $equip_id// The assigned id for an equipment
		*@param integer $stud_id// The assigned id for a student
		*@param varchar $equip_location// The assigned location of an equipment
		*@param char $status// The currnet status of the equipment
		*@param date $date// The date for checking out the equipment
	    *@param $str_query// this ia a variable that holds the query. 
	    *It updates the database to get the information on the equipment if any 
		*@return $this->fetch()//this returns the value of the query if there is any in the database. 
	**/
	   function checkOut($equip_id, $stud_id, $status, $date, $equip_loaction)
	   {
	    $query="update labs set equipID='$equip_id', studentID='$stud_id', equipStatus='$status', equipLocation='$equip_location',
	      dateIn ='$date ";    

	   echo $query;
	return $this->query($query);
	 }

	   /**
	    *@method boolean checkIn($equip_id,$stud_id,$equip_location,$date) allows users to check in
	    *equipment given their the equipment id and loaction 
	    *@param integer $equip_id// The assigned id for an equipment
		*@param integer $stud_id// The assigned id for a student
		*@param varchar $equip_location// The assigned location of an equipment
		*@param date $date// The date for checking out the equipment
	    *@param $str_query// this ia a variable that holds the query. 
	    *It inserts into the database the information on the equipment if any 
		*@return $this->fetch()//this returns the value of the query if there is any in the database. 
	**/
	function checkIn($equip_id, $stud_id,$equip_loaction,$date)
	{
	    $query="INSERT into labs set equipID='$equip_id', studentID='$stud_id', dateOut='$date', equipLocation='$equip_location'";      
	   echo $query;
	   
	return $this->query($query);
	   }

	}
	?> 