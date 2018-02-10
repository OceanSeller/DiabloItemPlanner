<?php

class Accesories extends CSV_Model
{
      //pk
	    public $id;

	    public $name;
      //fk
	    public $category;

      public $material;

      public $weight;

	public function __construct()
	{
			parent::__construct("../data/Accessories.csv", "id", "accessories");

	}

	public function all()
	{

	}
}
