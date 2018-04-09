<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maintenance extends Application
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


		// $entity = application\entities\SetTest();
		// $set_entity->save($accessories);

		//get all accessories

	   $accessories = $this->accessories->all();
		//get all categories
		$categories = $this->categories->all();
		//inject model into controller
		$this->data['accessories'] = $accessories;
		//inject model into controller
		$this->data['categories'] = $categories;
		$this->data['pagebody'] = 'maintenance';
		$this->data['pagetitle'] = 'Maintenance';

		$this->render();
	}
    
    public function updateCategory($id)
	{
        foreach($_POST as $postedData) {
            if ((strpos($postedData, ",") !== false) || ($postedData == "")) {
                redirect("/maintenance");
            }
        }
        $i = 0;
        $newdata = array();
        $handle = fopen("../data/Categories.csv", "r");
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {      
            if ($data[0] == $id) {
                $newdata[$i][] = $data[0];   
                $newdata[$i][] = $_POST["name"];
                $i++;
                continue;
            }  
            $newdata[$i][] = $data[0];          
            $newdata[$i][] = $data[1];
            $i++;
        }
        $fp = fopen('../data/Categories.csv', 'w+');    
        foreach ($newdata as $rows) {
            fputcsv($fp, $rows);
        }
        fclose($fp);
        redirect("/maintenance");
	}
    
    public function updateAccessory($id)
	{
        foreach($_POST as $postedData) {
            if ((strpos($postedData, ",") !== false) || ($postedData == "")) {
                redirect("/maintenance");
            }
        }
        $i = 0;
        $newdata = array();
        $handle = fopen("../data/Accessory.csv", "r");
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {      
            if ($data[0] == $id) {
                $newdata[$i][] = $data[0];   
                $newdata[$i][] = $_POST["name"];   
                $newdata[$i][] = $data[2];
                $newdata[$i][] = ((is_numeric($_POST["naterials"])) ? $_POST["naterials"] : $data[3]);
                $newdata[$i][] = ((is_numeric($_POST["weight"])) ? $_POST["weight"] : $data[4]);
                $newdata[$i][] = $data[5];
                $newdata[$i][] = ((is_numeric($_POST["damage"])) ? $_POST["damage"] : $data[6]);
                $newdata[$i][] = ((is_numeric($_POST["protection"])) ? $_POST["protection"] : $data[7]);
                $i++;
                continue;
            }  
            $newdata[$i][] = $data[0];          
            $newdata[$i][] = $data[1];    
            $newdata[$i][] = $data[2];      
            $newdata[$i][] = $data[3];    
            $newdata[$i][] = $data[4];    
            $newdata[$i][] = $data[5];
            $newdata[$i][] = $data[6];    
            $newdata[$i][] = $data[7];
            $i++;
        }
        $fp = fopen('../data/Accessory.csv', 'w+');    
        foreach ($newdata as $rows) {
            fputcsv($fp, $rows);
        }    
        fclose($fp);
        redirect("/maintenance");
	}
}