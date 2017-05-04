<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_home extends CI_Controller 
{

	public function home()
	{
		
		$this->load->view('top');
		$this->load->view('user');
		$this->load->view('footer');
		
	}
	
	public function logout()
	{
		
		$this->session->set_userdata('uname','');
		echo " <script>alert('logging out'); location.href='../index/index'; </script>";
	
		
	}
	public function logo()
	{
		
		$this->session->set_userdata('uname','');
		$this->load->view('header');
		
	}
	public function chpass()
	{
	$this->load->view('top');
	$this->load->view('changep');
	$this->load->view('footer');
	}
	
	
}
?>
