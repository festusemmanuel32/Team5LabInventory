<?php
/**
*@author Lydia Kinyari
*@version 
*Test class for equipment class
*/
include "equipment.php";
class equipmentTest extends PHPUnit_Framework_TestCase
{
	/**
     * This method tests the add($id,$name,$price,$supplier,$location,$status) fuction in Equipment class  
     * @param no parameter  
     * @return bool
     */
    public function testAddEquipment()
   {
   	$equipment = new equipment();
   	$id = "123456"
   	$name = "testEquipment"
   	$price = "123"
   	$supplier = "testSupplier"
   	$location = "testLocation"
   	$status = "testStatus"
    $this->assertEquals(true, $equipment->add($id,$name,$price,$supplier,$location,$status));
    }

    /**
     * This method tests the view() function in Equipment class
     * @param no parameter
     * @return bool
     */
    public function testViewEquipment()
    {
        $equipment = new equipment();
        $this->assertNotEquals(false, $equipmet->view());
    }

     /**
     * This method tests the search($id) function in the Equipment class
     * @param no parameter
     * @return bool
     */
   public function testSearchEquipment()
    {

        $equipment = new equipment();
        $searchItem="123456";
       $this->assertEmpty(false, $equipment->search($searchItem));
    }
  
	/**
	* This method tests the update($id,$name,$price,$supplier,$location,$status) fuction of the Equipment class
	* @param no parameter
	* @return bool
	*/
    public function testUpdateEquipment()
    {
		$equipment = new equipment();
		$id = "123456"
		$name = "updateEquipment"
		$price = "456"
		$supplier = "updateSupplier"
		$location = "updateLocation"
		$status = "updateStatus"
        $this->assertEquals(true, $equipment->update($id,$name,$price,$supplier,$location,$status));
	} 

     /**
     * This method  tests the delete($id) fuction of the Inventory class
     * @param no parameter
     * @return bool
     */
    public function testDeleteInventory()
    {

        $equipment = new equipment();
        $id="123456";
        $this->assertEquals(true, $equipment->delete($id));
    }
} 
