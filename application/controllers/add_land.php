<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class add_land extends CI_Controller {

	public function addl()
	{
		$this->load->view('top');
		$this->load->view('addland');
		$this->load->view('footer');
	}
}


?>
