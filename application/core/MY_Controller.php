<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 * @author		JLP
 * @copyright           2010-2016, James L. Parry
 * ------------------------------------------------------------------------
 */
class Application extends CI_Controller
{

	/**
	 * Constructor.
	 * Establish view parameters & load common helpers
	 */

	function __construct()
	{
		parent::__construct();

		//  Set basic view parameters
		$this->data = array ();
		$this->data['pagetitle'] = 'CodeIgniter3.1 Starter 4';
		$this->data['ci_version'] = (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>'.CI_VERSION.'</strong>' : '';
	}

	/**
	 * Render this page
	 */
	function render($template = 'template')
	{
        $this->load->library('session');
        if (isset($_POST["userRole"])) {
            $this->session->set_userdata("userRole", $_POST["userRole"]);
            $this->data['userRole'] = $_POST["userRole"];
        } else if (isset($_SESSION["userRole"])) {
            $this->data['userRole'] = $this->session->userdata("userRole");
        } else {
            $this->data['userRole'] = "Guest";
        }
		$this->data['menubar'] = $this->parser->parse('_menubar', $this->config->item('menu_choices'), true);
		$this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
		$this->parser->parse('template', $this->data);
	}

}
