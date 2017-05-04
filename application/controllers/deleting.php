<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class deleting extends CI_Controller {

	public function gone()
	{
		$id=$_POST['del'];
		$x=$this->session->all_userdata('uname');
		$uname=$x['uname'];
		$this->load->model("mymodel","obj");
		$del['lid']=$id;
		$del['uname']=$uname;
		 $u="select lid from land where uname='$uname' and lid='$id'";
		 $val=$this->obj->getquery($u);
		 if(count($val)>0)
		 {
		$r=$this->obj->delete('land',$del);
		if($r)
		{
		echo " <script>alert('deleted');location.href='../del_land/del';</script>";
		}
		else
		{
		echo " <script>alert('delete failed');</script>";
		$this->load->view('top');
		$this->load->view('user');
		$this->load->view('footer');

		}
		}
		else
		{
		echo " <script>alert('car id invalid');</script>";
		$this->load->view('top');
		$this->load->view('user');
		$this->load->view('footer');
		}


	}
	public function cp()
	{
	$this->load->model("mymodel","obj");
	$oldp=$_POST['oldp'];
	$newp=$_POST['newp'];
	$cp=$_POST['cpa'];
	if($newp != $cp)
		{
		echo"<script>alert('password not matching');location.href='../user_home/chpass';</script>";

		}
		else
		{
	$x=$this->session->all_userdata('uname');
	$uname=$x['uname'];
	$u="select password from login where username='$uname'";
	$val=$this->obj->getquery($u);
	 $temp=$val[0]['password'];
		 if($temp != $oldp)
		 {
		echo"<script>alert('wrong password');location.href='../user_home/chpass';</script>";
		 }
		 else
		 {
		 $data2["username"]=$uname;
		 $data1["password"]=$newp;
		 $ad=$this->obj->update("login",$data1,$data2);
		 if($ad=="success")
		{
		echo "<script>alert('password updated');</script>";
		$this->session->set_userdata('uname','');
		echo " <script>alert('logging out'); location.href='../index/index'; </script>";
		}
		else
		{
		echo"<script>alert('updation failed');</script>";
		$this->load->view('top');
		$this->load->view('user');
		$this->load->view('footer');
		}

		 }
		}
	}
	public function editing()
	{
	$this->load->model("mymodel","obj");
	$landid=$_POST['edi'];
	$x=$this->session->all_userdata('uname');
	$uname=$x["uname"];
	$u="select lid from land where uname='$uname' and lid='$landid'";
		 $val=$this->obj->getquery($u);
		 if(count($val)>0)
		 {
				$this->session->set_userdata('lid',$landid);
				$this->load->view('top');
				$this->load->view('et');
				$this->load->view('footer');
		}
		else
		{
		 echo"<script>alert('car id invalid');location.href='../view_land/editl';</script>";
		}
	}
}
?>
