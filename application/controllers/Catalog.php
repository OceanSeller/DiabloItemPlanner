<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends Application
{
	/**
	 * Index page.
	 */
	 function __construct()
	 {
		 parent::__construct();
	 }
	public function index()
	{
		$accessories = $this->accessories->all();
		$categories = $this->categories->all();
		$this->data['accessories'] = $accessories;
		$this->data['categories'] = $categories;
		$this->data['pagebody'] = 'catalog';
		$this->data['pagetitle'] = 'Catalog Page';

		//print_r($accessories = $this->accessories->all());

		$this->render();
	}
}
