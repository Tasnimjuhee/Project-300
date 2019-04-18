<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Member_model');
	}
	
	
	public function index()
	{
		$data['title'] = 'Members';
		$data['view_all_list_member']    =   $this->Member_model->getData();
		$this->load->view('member_list',$data);
	}
	
	public function search()

	{

		$data = array();
		$data['title'] = 'Members';
        $data['view_member']    =   $this->Member_model->search();
	$this->load->view('member_list', $data);

	}
	
	public function details()

	{
		
        
		$id = $this->uri->segment(3);
		$data['title'] = 'Member Details';
        $data['result'] = $this->Member_model->view_book_details($id);
        $this->load->view('member_details',$data);
 
	}
}
