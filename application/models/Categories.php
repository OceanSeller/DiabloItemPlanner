<?php

class Categories extends CSV_Model
{
	public function __construct()
	{
		parent::__construct("../data/Categories.csv", 'id');
	}
}
