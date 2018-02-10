<?php

/*
	This is a RESTish service controller which is useful for testing.
	The user receives the model data in JSON format on deman
	Ex. the URL /info/category will return all data inside the category model.
*/
class Info extends Application
{

	//Echos the name of the scenario in question
	public function index()
	{
		echo("Scenario: Best Warrior");
	}

	//Return the designated category; however, if none is specified than all  category data will be returned
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

	//Return the designated catalog; however, if none is specified than all catalog data will be returned
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

	//Return the designated set; however, if none is specified than all set data will be returned
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
