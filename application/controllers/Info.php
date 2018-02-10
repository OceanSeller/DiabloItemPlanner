<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends Application
{
	public function index()
	{
		echo("Scenario: Best Warrior");
	}

	public function category($key = null)
	{
		$categories = $this->categories->all();
		if($key != null)
		{
				foreach($categories as $category)
				{
					if(!strcasecmp($category->name, $key))
					{
						header("Content-type: application/json");
						echo json_encode($category);
					}
				}
			}
		 else {
			header("Content-type: application/json");
			echo json_encode($categories);
		}
	}

	public function catalog($key = null)
	{
		$accessories = $this->accessories->all();
		if($key != null)
		{
				foreach($accessories as $accessory)
				{
					if(!strcasecmp($accessory->name, $key))
					{
						header("Content-type: application/json");
						echo json_encode($accessory);
					}
				}
			}
		 else {
			header("Content-type: application/json");
			echo json_encode($accessories);
		}
	}

	public function bundle($key = null)
	{
		$set = $this->set->all();
		if($key != null)
		{
				foreach($set as $selectedset)
				{
					if(!strcasecmp($selectedset->name, $key))
					{
						header("Content-type: application/json");
						echo json_encode($selectedset);
					}
				}
			}
		 else {
			header("Content-type: application/json");
			echo json_encode($set);
		}
	}
}
