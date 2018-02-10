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
        // get an array of all sets, to use their id and name
        $this->data['sets'] = $this->set->all();
        
        // for homepage get first available set
        $set = $this->set->first();
        // get image path for every accessory type
        $this->data['weapon'] = $this->accessories->get($set->weapon)->imagepath;
        $this->data['chestplate'] = $this->accessories->get($set->armor)->imagepath;
        $this->data['shoes'] = $this->accessories->get($set->boots)->imagepath;
        $this->data['helmet'] = $this->accessories->get($set->helmet)->imagepath;

		$this->data['pagebody'] = 'homepage';
		$this->render();
	}
    
    public function set($key)
    {
        // get an array of all sets, to user their id and name
        $this->data['sets'] = $this->set->all();
        
        // for set viewer get set matching key
        $set = $this->set->get($key);
        // get image path for every accessory type
        $this->data['weapon'] = $this->accessories->get($set->weapon)->imagepath;
        $this->data['chestplate'] = $this->accessories->get($set->armor)->imagepath;
        $this->data['shoes'] = $this->accessories->get($set->boots)->imagepath;
        $this->data['helmet'] = $this->accessories->get($set->helmet)->imagepath;
        
        $this->data['pagebody'] = 'homepage';
		$this->render();
    }
}
