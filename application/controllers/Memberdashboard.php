<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memberdashboard extends CI_Controller {
    
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Member_model');
		
	}
	
	
	
	public function index()
	{
		$data = array();
		$data['title']	= 'view' ;
        if($this->Member_model->is_logged_in()){
            $data['members'] = $this->Member_model->getRows(array('member_id'=>$this->session->userdata('member_id')));
            //load the view
            $this->load->view('user_profile', $data);
        }else{
            redirect('login');
        }
	}
	
	/*public function update_profile(){

             $id = $this->input->post('member_id',true);
             $data = array();
              $data['member_full_name'] = $this->input->post('member_full_name',true);
             $data['member_email'] = $this->input->post('member_email',true);
             $this->db->WHERE('member_id',$id);
             $this->db->update('tbl_members',$data);
              $this->load->view('user_profile');
              redirect('Memberdashboard');

       }*/
	   
	   public function update_profile($id){

             $imgUrl = $this->updateImage();
			 $this->Member_model->update($id,$imgUrl);
              redirect('Memberdashboard');

       }
      public function edit_user($id){
       
      $data = array();
		$data['title']	= 'Edit' ;
            $data['members'] = $this->Member_model->getedit($id);
            //load the view
            $this->load->view('edit_user_profile', $data);
        
           

     }
	 
	 public function updateImage() 
	{
		//if(!empty($_FILES['student_image']['name'])){
		$type = explode('.', $_FILES['member_image']['name']);				
		$type = $type[count($type)-1];		
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
	//}
	}
	 
	 public function logout()
	{

		$this->Member_model->logout();
	}
	
	public function member_delete($id)
  {
      $this->Adminlogin_model->memberdelete_by_id($id);
      redirect('signup');
  }
	
}
