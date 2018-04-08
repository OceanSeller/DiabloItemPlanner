<?php 

class Accessories extends Entity
{
  public $id;
	public $name;
	public $category;
	public $materials;
	public $weight;
	public $imagepath;
	public $damage;
	public $protection;

  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }

  public function setCategory($category)
  {
    $this->category = $category;
    return $this;
  }

  public function setMaterials($materials)
  {
    $this->materials = $materials;
    return $this;
  }

  public function setImagepath($imagepath)
  {
    $this->imagepath = $imagepath;
    return $this;
  }

  public function setDamage()
  {
    $this->damage = $damage;
    return $this;
  }

  public function setProtection()
  {
    $this->protection = $protection
    return $this;
  }
}
