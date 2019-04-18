<?php
class Member_model extends CI_Model {
	
	 public function __construct()
	{
		parent::__construct();
	}

	 
	 public function member_save($img_url){
		if($img_url == '') {
			$img_url = 'public/member_img/noimage.jpg';
		} 
		$data = array(
              'member_full_name' => $this->input->post('member_full_name'),
              'member_email' => $this->input->post('member_email'),
              'member_phone' => $this->input->post('member_phone'),
              'member_present_address' => $this->input->post('member_present_address'),
              'member_parmanent_address' => $this->input->post('member_parmanent_address'),
              'member_division' => $this->input->post('member_division'),
              'member_age' => $this->input->post('member_age'),
              'member_gender' => $this->input->post('member_gender'),
              'member_edu_qualification' => $this->input->post('member_edu_qualification'),
              'member_profession' => $this->input->post('member_profession'),
              'member_pass' => md5($this->input->post('member_pass')),
              'member_confirm_pass' => md5($this->input->post('member_confirm_pass')),
              'member_image' => $img_url
          );
		$this->db->insert('tbl_members', $data);
        return $this->db->insert_id();
	}
	
	public function login($email, $password){
        //$this->db->where(array('username' = >$username, 'password' => $password));
        $query = $this->db->get_where('tbl_members', array('member_email' => $email, 'member_pass' => md5($password)));   //status sholud be 1
        
        if($query->num_rows() == 1){
            
            $userArr = array();
            foreach($query->result() as $row){
                $userArr[0] = $row->member_id;
                $userArr[1] = $row->member_full_name;
                
            }
            $userData = array(
                'member_id' => $userArr[0],
                'member_full_name' => $userArr[1],
                'logged_in'=> TRUE
            );
            $this->session->set_userdata($userData);
            
            return $query->result();
        }else{
            return false;
        }
    }
	
	public function memberlogout()
	{
		$this->session->sess_destroy();

		redirect('Login');
	}
	
	public function is_logged_in()
	{
		return ($this->session->userdata('member_id') != FALSE);
	}
	
	function get($id)
    {
		$this->db->where('member_id', $id);
		$this->db->select('*');
		$result = $this->db->get('tbl_members');
        return $result->row_array();
    }
	
	function getRows($params = array()){
        $this->db->select('*');
        $this->db->from('tbl_members');
        
        //fetch data by conditions
        if(array_key_exists("conditions",$params)){
			foreach ($params['conditions'] as $key => $value) {
				$this->db->where($key,$value);
			}
		}
        
        if(array_key_exists("member_id",$params)){
            $this->db->where('member_id',$params['member_id']);
			$query = $this->db->get();
			$result = $query->row_array();
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            $query = $this->db->get();
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
				$result = $query->num_rows();
			}elseif(array_key_exists("returnType",$params) && $params['returnType'] == 'single'){
				$result = ($query->num_rows() > 0)?$query->row_array():FALSE;
			}else{
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }

        //return fetched data
        return $result;
    }
	
	function geteditRows($params = array()){
        $this->db->select('*');
        $this->db->from('tbl_members');
        
        //fetch data by conditions
        if(array_key_exists("conditions",$params)){
			foreach ($params['conditions'] as $key => $value) {
				$this->db->where($key,$value);
			}
		}
        
        if(array_key_exists("member_id",$params)){
            $this->db->where('member_id',$params['member_id']);
			$query = $this->db->get();
			$result = $query->row_array();
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            $query = $this->db->get();
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
				$result = $query->num_rows();
			}elseif(array_key_exists("returnType",$params) && $params['returnType'] == 'single'){
				$result = ($query->num_rows() > 0)?$query->row_array():FALSE;
			}else{
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }

        //return fetched data
        return $result;
    }

public function update($id,$imgUrl)
    {
		if($imgUrl == "") {
        $data = array(
				'member_full_name' => $this->input->post('member_full_name'),
				'member_phone' => $this->input->post('member_phone'),
				'member_present_address' => $this->input->post('member_present_address'),
				'member_age' => $this->input->post('member_age'),
				'member_edu_qualification' => $this->input->post('member_edu_qualification'),
              'member_profession' => $this->input->post('member_profession'),
              'member_height' => $this->input->post('member_height'),
			  'member_weight' => $this->input->post('member_weight'),
              'member_division' => $this->input->post('member_division'),
			  'member_marital_status' => $this->input->post('member_marital_status'),
			  'member_birth' => $this->input->post('member_birth'), 
			  'member_smoke' => $this->input->post('member_smoke'),
			  'member_diet' => $this->input->post('member_diet'),
			  'member_father_name' => $this->input->post('member_father_name'),
			  'member_father_occupation' => $this->input->post('member_father_occupation'),
			  ' member_father_name' => $this->input->post('member_mother_name'),
			   ' member_mother_occupation' => $this->input->post('member_mother_occupation'), 
			   ' memeber_sibling_details' => $this->input->post('memeber_sibling_details'),
			   'ssc_pass_year' => $this->input->post('ssc_pass_year'),
			   'ssc_cgpa' => $this->input->post('ssc_cgpa'),
			   'hsc_pass_year' => $this->input->post('hsc_pass_year'),
			   'hsc_cgpa' => $this->input->post('hsc_cgpa'),
			   'occupation' => $this->input->post('occupation'),
			  'working_industry' => $this->input->post('working_industry'),
			  'monthly_income' => $this->input->post('monthly_income'),
			  'office_address' => $this->input->post('office_address'),
			  'write_yourself' => $this->input->post('write_yourself'),
			
			  );
			  }else{
				  $data = array(
				'member_full_name' => $this->input->post('member_full_name'),
				'member_phone' => $this->input->post('member_phone'),
				'member_email' => $this->input->post('member_email'),
				'member_present_address' => $this->input->post('member_present_address'),
				'member_parmanent_address' => $this->input->post('member_parmanent_address'),
				
				'member_age' => $this->input->post('member_age'),
				'member_edu_qualification' => $this->input->post('member_edu_qualification'),
              'member_profession' => $this->input->post('member_profession'),
			  'member_division' => $this->input->post('member_division'),
			  'member_height' => $this->input->post('member_height'),
			   'member_weight' => $this->input->post('member_weight'), 
			   'member_marital_status' => $this->input->post('member_marital_status'),
			   'member_birth' => $this->input->post('member_birth'), 
			   'member_smoke' => $this->input->post('member_smoke'),
			   ' member_diet' => $this->input->post(' member_diet'),
			   ' member_father_name' => $this->input->post('member_father_name'),
			   ' member_father_occupation ' => $this->input->post(' member_father_occupation'),
			   ' member_mother_name' => $this->input->post('member_mother_name'),
			   ' member_mother_occupation' => $this->input->post(' member_mother_occupation'),
			  ' memeber_sibling_details ' => $this->input->post('memeber_sibling_details'),
			  'ssc_pass_year' => $this->input->post('ssc_pass_year'),
			  'ssc_cgpa' => $this->input->post('ssc_cgpa'),
			   'hsc_pass_year' => $this->input->post('hsc_pass_year'),
			   'hsc_cgpa' => $this->input->post('hsc_cgpa'),
			   'occupation' => $this->input->post('occupation'),
			   'working_industry' => $this->input->post('working_industry'),
			   'monthly_income' => $this->input->post('monthly_income'),
			   'office_address' => $this->input->post('office_address'),
			   'write_yourself' => $this->input->post('write_yourself'),
			    'member_image' => $imgUrl
			  );
			  }
				  
		$this->db->where('member_id', $id);
			return $this->db->update('tbl_members', $data);
	}

 public function getedit($id){
			
			
			$sql="SELECT * FROM tbl_members WHERE member_id ='$id'";
           $query=$this->db->query($sql);
            $result = $query->row_array();
            return $result;
		}
		
		public function getData() {
			
		
		
		$this->db->select('member_id,member_full_name,member_phone,member_division,member_age,member_image');
		$this->db->from('tbl_members');
	  
		$query = $this->db->get();
       	
		return $query->result_array();
	}
		
		public function search()

    {

 
		$member_division    =   $this->input->post('member_division');
		$member_age    =   $this->input->post('member_age');
        $member_gender    =   $this->input->post('member_gender');
        $member_profession     =   $this->input->post('member_profession');

	
	$sql='';
	$sql = "SELECT * 
	FROM tbl_members WHERE member_division LIKE '%$member_division%' " .$sql."";

                  if($member_age) {
                    $sql .= "AND member_age LIKE '%$member_age%' ";
                  }
				  
				  if($member_gender) {
                    $sql .= "AND member_gender LIKE '$member_gender' ";
					
                  }if($member_profession) {
                    $sql .= "AND member_profession LIKE '$member_profession' ";
                  }
				  

        $query=$this->db->query($sql);

        $result = $query->result_array();

        return $result;
		
		
    }
	
	function view_book_details($id) {
		$this->db->select('*');
		$this->db->from('tbl_members');
		
		$this->db->where('member_id',$id);

        $query = $this->db->get();
		$result = $query->row_array();
        return $result;
	}
	
	function view_all_list_memberhome() {

        $sql = "SELECT * FROM tbl_members ORDER BY member_id DESC LIMIT 6";

        $query=$this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

public function logout()
	{
		$this->session->sess_destroy();

		redirect('login');
	}		
	
	public function memberdelete_by_id($id)
    {
        $this->db->where('member_id', $id);
        $this->db->delete('tbl_members');
    }
	
	 
	 
}	  

?>