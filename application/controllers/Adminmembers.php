<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmembers extends CI_Controller {

	/*public function __construct()
	{
		
		parent::__construct();
		$admin_id=$this->session->userdata('admin_id');
		if($admin_id==NULL){
			redirect('Adminlogin','refresh');
		}
	}*/
	
	
	public function index()
	{
		
		$data['view_all_list_member']    =   $this->Adminlogin_model->getData();
		$this->load->view('admin/memberslist',$data);
	}
	
	public function member_delete($id)
  {
      $this->Adminlogin_model->memberdelete_by_id($id);
      redirect('Adminmembers');
  }
	
	
	
	
}
