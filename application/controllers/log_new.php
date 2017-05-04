<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class log_new extends CI_Controller 
{

	public function loginnew()
	{
		$this->load->model("mymodel","obj");
		
		 $uname=$_POST['username'];
		 $pass=$_POST['password'];
		 $u="select username from login where username='$uname'";
		 $val=$this->obj->getquery($u);
		 if(count($val)>0)
		 {
		 
		 
		 $temp=$val[0]['username'];
		 if($temp==NULL)
		 {
		 echo " <script>alert('wrong username');</script>";
		$this->load->view('header');
		 }
		 $qry="select password from login where username='$uname'";
		$p=$this->obj->getquery($qry);
	 $psw=$p[0]['password'];
		if($psw==$pass)
		{
		$this->session->set_userdata('uname',$uname);
		echo " <script>alert('logging in');location.href='../del_land/del';</script>";
		}
		else
		{
		echo " <script>alert('wrong password');location.href='../index/index';</script>";
		//$this->load->view('header');
		}
		}
		else
		{
		echo " <script>alert('invalid user');location.href='../index/index';</script>";
		
		}
	}
	
	public function visitor()
	{
		$this->load->model("mymodel","obj");
		$q=$_POST['srch'];
		$qry="select * from land where address like '%$q%' or landmark like '%$q%'";
		$result['result1']=$this->obj->getquery($qry);
		$this->load->view('search',$result);
	}
}
?>
