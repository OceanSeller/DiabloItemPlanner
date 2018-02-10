<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
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


        // $accessories = $this->accessories->all();
        //
        // $categories = $this->categories->all();
        //
        // $this->data['accessories'] = $accessories;
        // $this->data['categories'] = $categories;
				// $this->data['categories'] = $this->load->model('Categories');
        // $this->data['pagebody'] = 'catalog';
		//$this->data['pagetitle'] = 'OceanSeller'; /* May need to change later. */
			$this->load->model('categories');
			$this->data['pagebody'] = 'catalog';
			//print_r($this->categories->all());
		  $this->render();
	}
}
