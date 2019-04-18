<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
   
   public function __construct()
	{
		parent::__construct();
		$this->load->model('Member_model');
	}
	
	public function index()
	{
		$data['title'] = 'Home';
		$data['view_all_list_member'] = $this->Member_model->view_all_list_memberhome();
		$this->load->view('home',$data);
	}
}
