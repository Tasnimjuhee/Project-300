<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	
	public function index()
	{
		$data['title'] = 'Contact';
		$data['flash'] = $this->session->flashdata('success');
		$this->load->view('contact',$data);
	}
	
	public function sendmail(){
		//$this->load->library('email');

		$this->email->from($this->input->post('email'), $this->input->post('name'),$this->input->post('phone'),$this->input->post('subject'));
		$this->email->to('tasnim@gmail.com');
		$this->email->subject('Email Test');
		$this->email->message($this->input->post('message'));

		if( $this->email->send()){
			$this->session->set_flashdata('success', 'Thanks for the email query');
			redirect('contact');
		} else {
			echo $this->email->print_debugger();
		}
		
	}
}
