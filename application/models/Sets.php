<?php

class Sets extends CSV_Model
{
      //pk
	    public $id;
      //fk
	    public $weaponAccessories;
      //fk
	    public $helmetAccessories;
      public $bootsAccessories;
      public $armorAccessories;

	public function __construct()
	{
		parent::__construct("../data/Set.csv", "setID");

	}
}
