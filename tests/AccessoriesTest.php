<?php
use PHPUnit\Framework\TestCase;
class AccessoriesTest extends TestCase
{
    private $CI;
    private $accessories;
    private $categories;
    
    public function setUp()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('Accessories');
        $this->CI->load->model('Categories');
        $this->accessories = $this->CI->Accessories->all();
        $this->categories = $this->CI->Categories->all();
    }
    
    // checks for whether each accessory has correct types and values
    function testAccessoriesContainCorrectTypes()
    {
        foreach ($this->accessories as $accessory)
        {
            // id is a number >= 0
            $this->assertTrue(is_numeric($accessory->id));
            $this->assertGreaterThanOrEqual(0, $accessory->id);
            // name is not empty
            $this->assertNotEmpty($accessory->name);
            // category is a number >= 0
            $this->assertTrue(is_numeric($accessory->category));
            $this->assertGreaterThanOrEqual(0, $accessory->category);
            // materials is not empty
            $this->assertNotEmpty($accessory->materials);
            // weight is a number >= 0
            $this->assertTrue(is_numeric($accessory->weight));
            $this->assertGreaterThanOrEqual(0, $accessory->weight);
            // imagepath is not empty
            $this->assertNotEmpty($accessory->imagepath);
            // damage is a number >= 0
            $this->assertTrue(is_numeric($accessory->damage));
            $this->assertGreaterThanOrEqual(0, $accessory->damage);
            // protection is a number >= 0
            $this->assertTrue(is_numeric($accessory->protection));
            $this->assertGreaterThanOrEqual(0, $accessory->protection);
        }
    }
    
    // checks for whether each accessory references an existing category
    function testSetAccessoriesValidReferences()
    {
        foreach ($this->accessories as $accessory)
        {
            $categoryValid = false;
            
            foreach ($this->categories as $category)
            {
                if ($accessory->category == $category->id)
                    $categoryValid = true;
            }
            
            $this->assertTrue($categoryValid);
        }
    }
    
    function testValidImagePaths()
    {
        foreach($this->accessories as $accessory)
        {
            $this->assertStringStartsWith("/assets/images/", $accessory->imagepath);
            $this->assertStringEndsWith(".png", $accessory->imagepath);
        }
    }
}
