<?php
use PHPUnit\Framework\TestCase;
class SetsTest extends TestCase
{
    private $CI;
    private $sets;
    private $accessories;
    
    public function setUp()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('Set');
        $this->CI->load->model('Accessories');
        $this->sets = $this->CI->Set->all();
        $this->accessories = $this->CI->Accessories->all();
    }
    
    // checks for whether each set has correct types and values
    function testSetsContainCorrectTypes()
    {
        foreach ($this->sets as $set)
        {
            // id is a number >= 0
            $this->assertTrue(is_numeric($set->id));
            $this->assertGreaterThanOrEqual(0, $set->id);
            // weapon is a number >= 0
            $this->assertTrue(is_numeric($set->weapon));
            $this->assertGreaterThanOrEqual(0, $set->weapon);
            // armor is a number >= 0
            $this->assertTrue(is_numeric($set->armor));
            $this->assertGreaterThanOrEqual(0, $set->armor);
            // helmet is a number >= 0
            $this->assertTrue(is_numeric($set->helmet));
            $this->assertGreaterThanOrEqual(0, $set->helmet);
            // boots is a number >= 0
            $this->assertTrue(is_numeric($set->boots));
            $this->assertGreaterThanOrEqual(0, $set->boots);
            // name is not empty
            $this->assertNotEmpty($set->name);;
        }
    }
    
    // checks for whether each set references existing accessories
    function testSetAccessoriesValidReferences()
    {
        foreach ($this->sets as $set)
        {
            $weaponValid = false;
            $armorValid = false;
            $helmetValid = false;
            $bootsValid = false;
            
            foreach ($this->accessories as $accessory)
            {
                if ($set->weapon == $accessory->id)
                    $weaponValid = true;
                
                if ($set->armor == $accessory->id)
                    $armorValid = true;
                
                if ($set->helmet == $accessory->id)
                    $helmetValid = true;
                
                if ($set->boots == $accessory->id)
                    $bootsValid = true;
            }
            
            $this->assertTrue($weaponValid);
            $this->assertTrue($armorValid);
            $this->assertTrue($helmetValid);
            $this->assertTrue($bootsValid);
        }
    }
}
