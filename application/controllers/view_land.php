<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class view_land extends CI_Controller {

	public function viewl()
	{
		$this->load->view('top');
		$x=$this->session->all_userdata('uname');
		$uname=$x['uname'];
		$this->load->model("mymodel","obj");
		$qry="select * from land where uname='$uname'";
		$result['result1']=$this->obj->getquery($qry);
		$this->load->view('userland',$result);
		$this->load->view('footer');
	}
	public function editl()
	{
		$this->load->view('top');
		$this->load->view('editl');
		$x=$this->session->all_userdata('uname');
		$uname=$x['uname'];
		$this->load->model("mymodel","obj");
		$qry="select * from land where uname='$uname'";
		$result['result1']=$this->obj->getquery($qry);
		$this->load->view('userland',$result);
		$this->load->view('footer');
	}
	
}


?>
