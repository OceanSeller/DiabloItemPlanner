<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->data['sets'] = $this->set->all();
        $set = $this->set->first();
        
        $this->data['weapon'] = $this->accessories->get($set->weapon)->imagepath;
        $this->data['chestplate'] = $this->accessories->get($set->armor)->imagepath;
        $this->data['shoes'] = $this->accessories->get($set->boots)->imagepath;
        $this->data['helmet'] = $this->accessories->get($set->helmet)->imagepath;
        
		$this->data['pagebody'] = 'homepage';
		$this->render();
	}
    
    public function set($key)
    {
        $this->data['sets'] = $this->set->all();
        $set = $this->set->get($key);
        
        $this->data['weapon'] = $this->accessories->get($set->weapon)->imagepath;
        $this->data['chestplate'] = $this->accessories->get($set->armor)->imagepath;
        $this->data['shoes'] = $this->accessories->get($set->boots)->imagepath;
        $this->data['helmet'] = $this->accessories->get($set->helmet)->imagepath;
        
        $this->data['pagebody'] = 'homepage';
		$this->render();
    }
}
