<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{
	var $data = new CSV_Model('Category.csv', 'id', 'main_data');
  //var $arr = array();
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['pagebody'] = 'category';

		$data->
		$this->render();
	}

}
