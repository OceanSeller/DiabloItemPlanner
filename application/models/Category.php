<?php
class Category extends Entity
{
    private $id;
    private $name;
    
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
}
