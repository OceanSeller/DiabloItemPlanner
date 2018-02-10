<?php

class Set extends CSV_Model
{
	public function __construct()
	{
		parent::__construct("..\data\Set.csv", 'id');
	}
}
