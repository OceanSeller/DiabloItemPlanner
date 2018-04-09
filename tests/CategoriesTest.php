<?php
use PHPUnit\Framework\TestCase;
class CategoriesTest extends TestCase
{
    private $CI;
    private $categories;
    
    public function setUp()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('Categories');
        $this->categories = $this->CI->Categories->all();
    }
    
    // checks for whether each category has correct types and values
    function testCategoriesContainCorrectTypes()
    {
        foreach ($this->categories as $category)
        {
            // id is a number >= 0
            $this->assertTrue(is_numeric($category->id));
            $this->assertGreaterThanOrEqual(0, $category->id);
            // name is not empty
            $this->assertNotEmpty($category->name);
        }
    }
}
