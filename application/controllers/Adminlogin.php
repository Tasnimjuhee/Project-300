<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminlogin extends CI_Controller {
	/*
	function __construct()
	{		
		parent::__construct();
		$admin_id=$this->session->userdata('admin_id');
		if($admin_id!=NULL){
			redirect('superadmin','refresh');
		}
		
	}*/
	  public function index()
	  {
		  $this->load->view('admin/loginadmin');
	  }
 public function checklogin()
	  {
		 $admin_email_address=$this->input->post('admin_email_address',true);
		  $admin_password=$this->input->post('admin_password',true);
		  /*echo $admin_email_address.'...'.$admin_password;
		  exit();*/
		  
		 $result=$this->Adminlogin_model->checklogin_info($admin_email_address,$admin_password);
		 
		 
		 if($result){
			 redirect('superadmin');
		 }
		 else{
			 redirect('Adminlogin');
		 }
	  }
	  
	  

}	  