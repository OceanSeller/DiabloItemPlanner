<?php namespace application\entities;

use CodeIgniter\Entity;

class Set extends Entity
{
  //pk
	public $id;
	//fk
	public $weaponAccessories;
	//fk
	public $helmetAccessories;
	public $bootsAccessories;
	public $armorAccessories;

  public function setWeaponAccessories($name)
  {
    $this->weaponAccessories = $weaponAccessories;
    return $this;
  }

  public function setHelmetAccessories($name)
  {
    $this->helmetAccessories = $helmetAccessories;
    return $this;
  }

  public function setBootsAccessories($name)
  {
    $this->bootsAccessories = $bootsAccessories;
    return $this;
  }

  public function setArmorAccessories($name)
  {
    $this->armorAccessories = $armorAccessories;
    return $this;
  }
}
