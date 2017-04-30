<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class reg_new extends CI_Controller {

	public function regis()
	{
		$this->load->model("mymodel","obj");
		
		$name=$_POST['name'];
		$address=$_POST['address'];
		$uname=$_POST['username'];
		$pass=$_POST['password'];
		$cpass=$_POST['cpassword'];
		if($pass != $cpass)
		{
		echo"<script>alert('verify password');location.href='../index/index';</script>";
		
		}
		$u="select username from login where username='$uname'";
		 $val=$this->obj->getquery($u);
		 
		 if(count($val)>0)
		 {
		 echo"<script>alert('username not unique');location.href='../index/index';</script>";
		 }
		 else
		 {
		 
		$data1["username"]=$uname;
		$data1["password"]=$pass;
		$data1["usertype"]="user";
		$regis=$this->obj->insert("login",$data1);
		
		$data["uname"]=$uname;
		$data["name"]=$name;
		$data["address"]=$address;
		$log=$this->obj->insert("registration",$data);
		if(($regis=="success" )&& ($log=="success"))
		{
		echo "<script>alert('account created');</script>";
		$this->load->view('header');
		}
		else
		{
		echo"<script>alert('failed');</script>";
		$this->load->view('header');
		
		}
		
		
		}
		
		
	}
}


?>


