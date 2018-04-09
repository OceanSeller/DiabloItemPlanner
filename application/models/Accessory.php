<?php
class Accessory extends Entity
{
    private $id;
    private $name;
    private $category;
    private $materials;
    private $weight;
    private $imagepath;
    private $damage;
    private $protection;
    
    // magic getter, enforces no rules
    public function __get($key)
    {
        return $this->$key;
    }
    
    // magic setter methods for each variable
    
    public function setId($value)
    {        
        if (!is_int($value))
        {
            throw new InvalidArgumentException('id must be an integer');
        }
        
        if ($value < 0)
        {
            throw new InvalidArgumentException('id must be at least 0');
        }
        
        $this->id = $value;
    }
    
    public function setName($value)
    {       
        if (!is_string($value))
        {
            throw new InvalidArgumentException('name must be a string');
        }
        
        $this->name = $value;
    }
    
    public function setCategory($value)
    {
        if (!is_int($value))
        {
            throw new InvalidArgumentException('category must be an integer');
        }
        
        if ($value < 0)
        {
            throw new InvalidArgumentException('value must be at least 0');
        }
        
        $this->category = $value;
    }
    
    public function setMaterials($value)
    {
        if (!is_string($value))
        {
            throw new InvalidArgumentException('materials must be a string');
        }
        
        $this->materials = $value;
    }
    
    public function setWeight($value)
    {
        if (!is_int($value))
        {
            throw new InvalidArgumentException('weight must be an integer');
        }
        
        if ($value < 0)
        {
            throw new InvalidArgumentException('weight must be at least 0');
        }
        
        $this->weight = $value;
    }
    
    public function setImagepath($value)
    {
        if (!is_string($value))
        {
            throw new InvalidArgumentException('imagepath must be a string');
        }
        
        if (strpos($value, "/assets/images/") === false)
        {
            throw new InvalidArgumentException('imagepath must be in the /assets/images/ directory');
        }
        
        if (strpos($value, ".png") === false)
        {
            throw new InvalidArgumentException('imagepath must have a .png extension');
        }
        
        $this->imagepath = $value;
    }
    
    public function setDamage($value)
    {
        if (!is_int($value))
        {
            throw new InvalidArgumentException('damage must be an integer');
        }
        
        if ($value < 0)
        {
            throw new InvalidArgumentException('damage must be at least 0');
        }
        
        $this->damage = $value;
    }
    
    public function setProtection($value)
    {
        if (!is_int($value))
        {
            throw new InvalidArgumentException('protection must be an integer');
        }
        
        if ($value < 0)
        {
            throw new InvalidArgumentException('protection must be at least 0');
        }
        
        $this->protection = $value;
    }
}
