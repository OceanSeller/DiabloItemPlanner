<?php

class Categories extends CSV_Model
{
			//pk
	    public $id;

	    public $name;

	    public $description;

	public function __construct()
	{
		parent::__construct(APPPATH."/model/data/categories.csv", "ID", "category");

	}
}
