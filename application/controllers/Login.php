<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Member_model');
	}
	
	
	
	public function index()
	{
		$data['title'] = 'Log in';
		if($this->Member_model->is_logged_in())
		{
			redirect('memberdashboard');
		}
		else
		{
			$this->form_validation->set_rules('member_email', 'Email', 'callback_login_check');
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('login',$data);
			}
			else
			{
				
				redirect('memberdashboard');
			}
		}
	}
	
	public function login_check($email)
	{
		$password = $this->input->post('member_pass');

		if($this->_security_check($email, $password))
		{
			$this->form_validation->set_message('login_check', 'Security check failure');

			return FALSE;
		}

		if(!$this->Member_model->login($email, $password))
		{
			$this->form_validation->set_message('login_check', 'Invalid email/password');

			return FALSE;
		}

		return TRUE;		
	}
	
	private function _security_check($email, $password)
	{
		
	}
	public function memberlogout()
	{

		$this->Member_model->memberlogout();
	}
	
	public function see_profile(){
  
      $data =array();
      $data['member_email'] = $this->input->post('member_email',true);
      // print_r($data['member_email']);
       
        $this->db->SELECT('*');
        $this->db->FROM('tbl_members');
        $this->db->WHERE('member_email',$data['member_email']);
        $query = $this->db->get();
        $records = $query->result();
    
       $this->load->view('user_profile',['records'=>$records]);
        
          }


     
}
