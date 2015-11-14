	<?php	
    /**
			
	*This is test Class for One Functional Requirement
			 
	* @author Sheriff Ayew 
			 
	* @version 1.0
	
	* @copyright 2014-2015 Software Engineering Group 5
			 
	*/
			 
			   
	include("adb.php");
			
			
	class searchTest extends adb{
	/**
	
	* @method serarchByName($person_name)
	
	* @param $person_name , searches by using the name of the person
			
	* special variables declaration blocks
			   
	* function for searchong the name of a student
			   
	*/
			 
	function search($ID)
	
	{
		
	$str_query="select * from Students
	
	where ID like '%$ID%'";
					
	return $this->query($str_query);
				
	}
	
	
?>




