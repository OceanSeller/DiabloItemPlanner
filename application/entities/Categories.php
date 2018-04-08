<?php

class Categories extends Entity
{
  public $id;
	public $name;

  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }
}
