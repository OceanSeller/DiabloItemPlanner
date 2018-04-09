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
            $this->assertTrue(!empty($set->id));
            $this->assertTrue(is_numeric($set->id));
            $this->assertTrue($set->id >= 0);
            // weapon is a number >= 0
            $this->assertTrue(!empty($set->weapon));
            $this->assertTrue(is_numeric($set->weapon));
            $this->assertTrue($set->weapon >= 0);
            // armor is a number >= 0
            $this->assertTrue(!empty($set->armor));
            $this->assertTrue(is_numeric($set->armor));
            $this->assertTrue($set->armor >= 0);
            // helmet is a number >= 0
            $this->assertTrue(!empty($set->helmet));
            $this->assertTrue(is_numeric($set->helmet));
            $this->assertTrue($set->helmet >= 0);
            // boots is a number >= 0
            $this->assertTrue(!empty($set->boots));
            $this->assertTrue(is_numeric($set->boots));
            $this->assertTrue($set->boots >= 0);
            // name is a string
            $this->assertTrue(!empty($set->name));
            $this->assertTrue(is_string($set->id));
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
