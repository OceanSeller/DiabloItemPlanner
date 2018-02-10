<?php

class Accessories extends CSV_Model
{
	public function __construct()
	{
		parent::__construct("..\data\Accessory.csv", 'id');
	}
}
