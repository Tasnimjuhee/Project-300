<?php
class Adminlogin_model extends CI_Model {
	
	 public function checklogin_info($admin_email_address,$admin_password)
	 {
		 
		 /*$sql="select * FROM tbl_admin where admin_email_address='$admin_email_address'
		 
		 AND admin_password=$'admin_password'";*/
		 $this->db->select('*');
		 $this->db->from('tbl_admin');
		 $this->db->where('admin_email_address',$admin_email_address);
		 $this->db->where('admin_password',md5($admin_password));
		 $query_result=$this->db->get();
		 $result=$query_result->row();
		 return $result;
		 
	 }
	 
	 public function is_logged_in()
	{
		return ($this->session->userdata('admin_id') != FALSE);
	}
	
	public function getData() {
			
		
		
		$this->db->select('member_id,member_full_name,member_phone,member_profession,member_age,member_email');
		$this->db->from('tbl_members');
	  
		$query = $this->db->get();
       	
		return $query->result();
	}
	
	public function memberdelete_by_id($id)
    {
        $this->db->where('member_id', $id);
        $this->db->delete('tbl_members');
    }
	
	public function logout()
	{
		$this->session->sess_destroy();

		redirect('Adminlogin');
	}
	 
	 
}	  

?>