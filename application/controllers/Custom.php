<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom extends Application
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
    $categories = $this->categories->all();
	  $accessories = $this->accessories->all();

		//$helmets = $this->accessories->
		//inject model into controller
    $this->data['categories'] = $categories;
		$this->data['accessories'] = $accessories;
		$this->data['pagebody'] = 'custom';
		$this->data['pagetitle'] = 'Custom Gear';

		$this->render();
	}
}
