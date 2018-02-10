<?php

class Accessories extends CSV_Model
{

	public $id;
	public $name;
	public $category;
	public $materials;
	public $weight;
	public $imagepath;
	public $damage;
	public $protection;

	public function __construct()
	{
		parent::__construct("..\data\Accessory.csv", 'id');
	}
}
