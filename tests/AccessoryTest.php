<?php
use PHPUnit\Framework\TestCase;
class AccessoryTest extends TestCase
{
    private $CI;
    private $accessory;
    
    public function setUp()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('Accessory');
        $this->accessory = new Accessory();
    }
    
    function testInvalidIdType()
    {
        $this->expectException('InvalidArgumentException');
        $this->accessory->id = "bad";
    }
    
    function testInvalidNegativeId()
    {
        $this->expectException('InvalidArgumentException');
        $this->accessory->id = -1;
    }
    
    function testValidId()
    {
        $this->accessory->id = 0;
        $this->assertEquals($this->accessory->id, 0);
    }
    
    function testInvalidNameType()
    {
        $this->expectException('InvalidArgumentException');
        $this->accessory->name = 0;
    }
    
    function testValidName()
    {
        $this->accessory->name = "name";
        $this->assertEquals($this->accessory->name, "name");
    }
    
    function testInvalidCategoryType()
    {
        $this->expectException('InvalidArgumentException');
        $this->accessory->category = "bad";
    }
    
    function testInvalidNegativeCategory()
    {
        $this->expectException('InvalidArgumentException');
        $this->accessory->category = -1;
    }
    
    function testValidCategory()
    {
        $this->accessory->category = 0;
        $this->assertEquals($this->accessory->category, 0);
    }
    
    function testInvalidMaterialsType()
    {
        $this->expectException('InvalidArgumentException');
        $this->accessory->materials = 0;
    }
    
    function testValidMaterials()
    {
        $this->accessory->materials = "materials";
        $this->assertEquals($this->accessory->materials, "materials");
    }
    
    function testInvalidWeightType()
    {
        $this->expectException('InvalidArgumentException');
        $this->accessory->weight = "bad";
    }
    
    function testInvalidNegativeWeight()
    {
        $this->expectException('InvalidArgumentException');
        $this->accessory->weight = -1;
    }
    
    function testValidWeight()
    {
        $this->accessory->weight = 1;
        $this->assertEquals($this->accessory->weight, 1);
    }
    
    function testInvalidImagepathType()
    {
        $this->expectException('InvalidArgumentException');
        $this->accessory->imagepath = 0;
    }
    
    function testInvalidImagepathDirectory()
    {
        $this->expectException('InvalidArgumentException');
        $this->accessory->imagepath = "image.png";
    }
    
    function testInvalidImagepathExtension()
    {
        $this->expectException('InvalidArgumentException');
        $this->accessory->imagepath = "/assets/images/image";
    }
    
    function testValidImagepath()
    {
        $this->accessory->imagepath = "/assets/images/image.png";
        $this->assertEquals($this->accessory->imagepath, "/assets/images/image.png");
    }
    
    function testInvalidDamageType()
    {
        $this->expectException('InvalidArgumentException');
        $this->accessory->damage = "bad";
    }
    
    function testInvalidNegativeDamage()
    {
        $this->expectException('InvalidArgumentException');
        $this->accessory->damage = -1;
    }
    
    function testValidDamage()
    {
        $this->accessory->damage = 1;
        $this->assertEquals($this->accessory->damage, 1);
    }
    
    function testInvalidProtectionType()
    {
        $this->expectException('InvalidArgumentException');
        $this->accessory->protection = "bad";
    }
    
    function testInvalidNegativeProtection()
    {
        $this->expectException('InvalidArgumentException');
        $this->accessory->protection = -1;
    }
    
    function testValidProtection()
    {
        $this->accessory->protection = 1;
        $this->assertEquals($this->accessory->protection, 1);
    }
}
