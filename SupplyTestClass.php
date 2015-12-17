<?php
    /**
    *@author Festus Jartu
    *@version 1.0
    *Type:Zend Approach
    */
header('Access-Control-Allow-Origin: *');
include("Supply.php");
    /**
    *Description:This class is responsible to handle the test case for the supply class
    */
class TestSupply extends PHPUnit_Framework_TestCase
  
    /**
     * Description This function is responsible for testing the addsupplier function in the class
     *@param no parameter
     *@return boolean
     **/
    public function testAddSupplier()
    {
	    $sup = new Supply();
        $id="56652016"; 
        $name="Osman Jallow"; 
        $cont="Serekunda"; 
        $quant="200"; 
	    $this->assertEquals(true, $sup->addSupplier($id, $name, $cont, $quant));
    }
      /**
     * Description:responsible to test the get_supply function in the supply class
     * @param no parameter
     * @return boolean
     */
    public function testGetSupply()
    {
	 $sup= new Supply();
	 $this->assertNotEquals(false, $sup->get_supply());
    }
	/**
     * Description:responsible to test the removesupplier function in the supply class
     * @param no parameter
     * @return boolean
     */
    public function testRemoveSupplier()
    {
        $sup = new Supply();
        $id="56652016"; 
        $this->assertEquals(true, $sup->removeSupplier($id));
    }
   
} 
?>
