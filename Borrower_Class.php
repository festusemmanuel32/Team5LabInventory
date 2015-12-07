<?php
include("adb.php");

class Borrower extends adb{

function get_id($borrower_id){
		$str_query="select * from borrower where borrower_id=$borrower_id";
		if(!$this->query($str_query)){
			return false;
		}	
		return $this->fetch();
	}
function search_by_name($borrower_name){
		$str_query="select * from borrower 
				where borrower_name like '%$borrower_name%'";
		
		return $this->query($str_query);
	
	}
function addborrower($borrower_id, $borrower_name,$address,$major){
		$str_query="insert into Borrower set
                     borrower_id='$borrower_id', borrower_name='$borrower_name',
                     address = '$address',major='$major'";

                      return $this->query($str_query);
	}

function delete_borrower($borrower_name){
			$str_query="delete from borrower where borrower_name='$person_name'";	

			 return $this->query($str_query);	 
		}

function view_one_person(){
		if(isset($_GET['person_id'])){
			$person_id = $_GET['person_id'];
			$str_query="select * from persons where person_id = '$person_id'";
			if(!$this->query($str_query))
				return false;
		    return $this->fetch();
		}
	}
?>