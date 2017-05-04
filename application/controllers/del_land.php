<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class del_land extends CI_Controller {

	public function del()
	{
		$this->load->view('top');
		$this->load->view('dele');
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
