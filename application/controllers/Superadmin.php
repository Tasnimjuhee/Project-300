<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Superadmin extends CI_Controller {
	 
	 /* public function __construct()
	{
		parent::__construct();
		$admin_id=$this->session->userdata('admin_id');
		if($admin_id==NULL){
			redirect('Adminlogin','refresh');
		}
	}*/
	  
	  public function index()
	  {
		  $this->load->view('admin/admin_master');
	  }
	  
	  public function logout()
	{

		$this->session->unset_userdata('admin_id');
		redirect('Adminlogin');
	}

}	  