<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adding extends CI_Controller {

	public function fun()
	{
		$this->load->model("mymodel","obj");

		$title=$_POST['title'];
		$desc=$_POST['desc'];
		$hectors=$_POST['hectors'];
		$acres=$_POST['acres'];
		$cents=$_POST['cents'];
		$landmark=$_POST['landmark'];
		$address=$_POST['address'];
		$x=$this->session->all_userdata('uname');
		$uname=$x["uname"];
		$data1["uname"]=$uname;
		$data1["title"]=$title;
		$data1["description"]=$desc;
		$data1["hectors"]=$hectors;
		$data1["acres"]=$acres;
		$data1["cents"]=$cents;
		$data1["landmark"]=$landmark;
		$data1["address"]=$address;
		$config= array(
		'upload_path' => "./images/",
		'allowed_types' => "gif|jpg|png|jpeg",
		'overwrite' => TRUE,
		'max_size' => "20480",
		'max_height' => "6000",
		'max_width' => "7680"
		);
		$this->load->library('upload',$config);
		$ad=NULL;
		if($this->upload->do_upload('image'))
		{
		$data12=array('upload_data' => $this->upload->data());
		$data1["imagename"]=$data12["upload_data"]["file_name"];
		$ad=$this->obj->insert("land",$data1);
		}
		else
		{
		$error =array('error'=> $this->upload->display_errors());
		echo "<script>alert('Failed to upload');</script>";
		}
		if($ad=="success")
		{
		echo "<script>alert('car details entered');</script>";

		}
		else
		{
		echo"<script>alert('failed');</script>";
		}

		$this->load->view('top');
		$this->load->view('user');
		$this->load->view('footer');


	}
	public function edits()
	{
		$this->load->model("mymodel","obj");
		$x=$this->session->all_userdata('lid');
		$landid=$x["lid"];
		$title=$_POST['title'];
		$desc=$_POST['desc'];
		$hectors=$_POST['hectors'];
		$acres=$_POST['acres'];
		$cents=$_POST['cents'];
		$landmark=$_POST['landmark'];
		$address=$_POST['address'];
		$x=$this->session->all_userdata('uname');
		$uname=$x["uname"];
		$data1["uname"]=$uname;
		$data1["title"]=$title;
		$data1["description"]=$desc;
		$data1["hectors"]=$hectors;
		$data1["acres"]=$acres;
		$data1["cents"]=$cents;
		$data1["landmark"]=$landmark;
		$data1["address"]=$address;
		$data2["lid"]=$landid;
		$ad=$this->obj->update("land",$data1,$data2);
		 if($ad=="success")
		{
		echo "<script>alert('car details updated');</script>";
		$this->load->view('top');
		$this->load->view('user');
		$this->load->view('footer');
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


?>
