<?php 
class Masteradmin_model extends CI_Model
{
	
	public function add_institute(){
		$data['insname'] = $this->input->post('insname');
		$data['address'] = $this->input->post('address');
		$data['email'] = $this->input->post('email');
		$data['landline'] = $this->input->post('landline');
		$data['fax'] = $this->input->post('fax');
		$data['mobileno'] = $this->input->post('mobile_no');
		
		$this->db->insert('institute',$data);
		return true;
	}
	public function get_institute(){
		return $institute = $this->db->select('*')
			->from('institute')
			->get()
			->result_array();
	}
	public function available_institute(){
		return $institute = $this->db->select('id,insname')
			->from('institute')
			->where('status',0)
			->get()
			->result_array();
	}
	public function add_user($type=null){
		//insert into subadmin table
		$data['user_name']=$this->input->post('SubAdminUserName');
		$data['email']=$this->input->post('SubAdminEmail');
		$data['user_id']=$this->input->post('SubAdminUserId');
		$data['password']=$this->input->post('SubAdminPassword');
		$data['mobile_no']=$this->input->post('SubAdminMobileNo');
		$data['ins_id']=$this->input->post('SubAdminIns');
		$data['type']='SubAdmin';
		$data['status']=1;
		
		//insert into login table 
		$this->db->insert('sub_admin',$data);
		//id of subadmin
		$sub_id = $this->db->insert_id();
		unset($data);
		$data['user_id']=$this->input->post('SubAdminUserId');
		$data['type']="SubAdmin";
		$data['status']=1;
		$this->db->insert('login',$data);
		
		//set institute to user
		$this->db->set('sub_id',$sub_id)
		->set('status',1)
		->where('id',$this->input->post('SubAdminIns'))
		->update('institute');
		
		$this->load->helper('email_templet');
		
		$from= $this->session->userdata('email');
		$to=$this->input->post('SubAdminEmail');
		$subject="User id and password ";
		$html = add_user_email_tmpl($this->input->post('SubAdminUserId'),$this->input->post('SubAdminPassword'));	
		if($this->send_mail($from,$to,$subject,$html))
			return true;
	}
	public function send_mail($from,$to,$subject,$msg){
		$this->load->library('email'); 
			
			$this->email->from($from,'vishal');
			$this->email->to($to,'testing');
			$this->email->subject($subject); 
			$this->email->message($msg); 				
			try{
			$this->email->send();
				return true;
			}catch(Exception $e){	
				echo $e->getMessage();
			}
	}
	public function get_users($mode){
		$data = null;
		switch ($mode) {
			case 'subadmin':
				$data =  $this->db->select('*')
				->from('sub_admin')
				->get()
				->result_array();		
			break;
			case 'admin':
				$data =  $this->db->select('*')
				->from('admin')
				->get()
				->result_array();		
			break;
			case 'account':
				$data =  $this->db->select('*')
				->from('account')
				->get()
				->result_array();		
			break;
			case 'professor':
				$data =  $this->db->select('*')
				->from('professor')
				->get()
				->result_array();		
			break;
			case 'librarian':
				$data =  $this->db->select('*')
				->from('librarian')
				->get()
				->result_array();		
			break;
			case 'warden':
				$data =  $this->db->select('*')
				->from('warden')
				->get()
				->result_array();		
			break;
		}
			return $data;
	}
	
}
?>
