<?php

class Categories extends CSV_Model
{
			//pk
	    public $id;

	    public $name;


	public function __construct()
	{
		parent::__construct(APPPATH. '/models/data/categories.csv', 'id', 'category');
	}

	//returns all data
	public function all()
	{
		return $this->data;
	}

}
