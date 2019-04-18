<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    public function __construct()
	{
		
		parent::__construct();
		$this->load->model('member_model');
	}

	
	public function index()
	{
		$data['title'] = 'Sign up';
		$this->load->view('signup',$data);
	}
	
	public function member_register()
	{
		$data['title'] = 'Sign up';
		$this->form_validation->set_rules('member_full_name', "Full Name", 'required');
		$this->form_validation->set_rules('member_phone', "Contact Number", 'required');
		$this->form_validation->set_rules('member_pass', "Password", 'required');$this->form_validation->set_rules('member_confirm_pass', "Confirm Password", 'required|matches[member_pass]');
		$this->form_validation->set_rules('member_email', "Email",'required|valid_email|is_unique[tbl_members.member_email]');
	  if($this->form_validation->run() === FALSE){
				$this->load->view('signup',$data);
			}
		else {
		$imgUrl = $this->uploadImage();	
	$this->member_model->member_save($imgUrl);
      $this->session->set_flashdata('mitem', array('message' => 'Member Registration successfully'));
			redirect('Signup');
	  
  } 
	}
	
	public function uploadImage() 
	{
		$type = explode('.', $_FILES['member_image']['name']);$type = $type[count($type)-1];		
		$url = 'public/member_img/'.uniqid(rand()).'.'.$type;
		if(in_array($type, array('gif', 'jpg', 'jpeg', 'png', 'JPG', 'GIF', 'JPEG', 'PNG'))) {
			if(is_uploaded_file($_FILES['member_image']['tmp_name'])) {			
				if(move_uploaded_file($_FILES['member_image']['tmp_name'], $url)) {
					return $url;
				}	else {
					return false;
				}			
			}
		} 
	}
	
	public function profile(){
		$data['title'] = 'Log in';
		
	}
}

