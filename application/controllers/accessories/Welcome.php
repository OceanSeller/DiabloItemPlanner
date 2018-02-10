<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Accessory extends Application
{
	/**
	 * Index page.
	 */
  	public function index()
  	{
        $this->load->model('Accessories');
        $all_items = $this->accessories->all();
        $this->data['accessories'] = $accessories;
        // get all of the entrees
        $subset = $this->accessories->where('Accessories','imagePath');
        $this->render();
  	}
}
