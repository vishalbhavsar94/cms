<?php
class Subadmin_model extends CI_Model
{
	public function get_institute(){
	return  $this->db->select('id,insname')
			->from('institute')
			->where('sub_id',$this->session->userdata('login_user_id'))
			->get()
			->result_array();
	}
	public function add_user(){
		$type = $this->input->post('usertype');
		$data;
		switch ($type) {
			case 'Admin':
			$data['user_name']= $this->input->post('username');
			$data['email']=$this->input->post('email');
			$data['user_id']=$this->input->post('userid');
			$data['password']=$this->input->post('password');
			$data['mobile_no']=$this->input->post('mobileno');
			$data['ins_id']=$this->input->post('insid');
			$data['type']='Admin';
			$data['status']=1;		
				break;
			case 'Account':
			$data['user_name']= $this->input->post('username');
			$data['email']=$this->input->post('email');
			$data['user_id']=$this->input->post('userid');
			$data['password']=$this->input->post('password');
			$data['mobile_no']=$this->input->post('mobileno');
			$data['ins_id']=$this->input->post('insid');
			$data['type']='Account';
			$data['status']=1;		
				break;
			case 'Professor':
			$data['user_name']= $this->input->post('username');
			$data['email']=$this->input->post('email');
			$data['user_id']=$this->input->post('userid');
			$data['password']=$this->input->post('password');
			$data['mobile_no']=$this->input->post('mobileno');
			$data['ins_id']=$this->input->post('insid');
			$data['type']='Professor';
			$data['status']=1;		
				break;
			case 'Liabrarian':
			$data['user_name']= $this->input->post('username');
			$data['email']=$this->input->post('email');
			$data['user_id']=$this->input->post('userid');
			$data['password']=$this->input->post('password');
			$data['mobile_no']=$this->input->post('mobileno');
			$data['ins_id']=$this->input->post('insid');
			$data['type']='Liabrarian';
			$data['status']=1;		
				break;
			case 'Warden':
			$data['user_name']= $this->input->post('username');
			$data['email']=$this->input->post('email');
			$data['user_id']=$this->input->post('userid');
			$data['password']=$this->input->post('password');
			$data['mobile_no']=$this->input->post('mobileno');
			$data['ins_id']=$this->input->post('insid');
			$data['type']='Warden';
			$data['status']=1;		
				break;
			case 'Student':
			$data['user_name']= $this->input->post('username');
			$data['email']=$this->input->post('email');
			$data['user_id']=$this->input->post('userid');
			$data['password']=$this->input->post('password');
			$data['mobile_no']=$this->input->post('mobileno');
			$data['ins_id']=$this->input->post('insid');
			$data['type']='Student';
			$data['status']=1;		
				break;
			
		}
		if($this->add_user_to_account($data,$type)){
			return true;
		}
		
	}
		private function add_user_to_account($data,$type){
			$this->db->insert($type,$data);
			unset($data);
			
			$data['user_id']=$this->input->post('userid');
			$data['type']=$type;
			$data['status']=1;
			$this->db->insert('login',$data);
			return true; 
		}
		public function get_users($mode){
			$ins_id = $this->session->userdata('ins_id');
			$data = null;
			switch ($mode) {
	
				case 'admin':
					$data =  $this->db->select('*')
					->from('admin')
					->where('ins_id',$ins_id)
					->get()
					->result_array();
				break;
				case 'account':
					$data =  $this->db->select('*')
					->from('account')
					->where('ins_id',$ins_id)
					->get()
					->result_array();		
				break;
				case 'professor':
					$data =  $this->db->select('*')
					->from('professor')
					->where('ins_id',$ins_id)
					->get()
					->result_array();		
				break;
				case 'librarian':
					$data =  $this->db->select('*')
					->from('librarian')
					->where('ins_id',$ins_id)
					->get()
					->result_array();		
				break;
				case 'warden':
					$data =  $this->db->select('*')
					->from('warden')
					->where('ins_id',$ins_id)
					->get()
					->result_array();		
				break;
			}
				return $data;
		}
		public function update_user(){

			
			$id =$this->post->input('id');
			$type =$this->post->input('type');
			$username =$this->post->input('username');
			$email =$this->post->input('email');
			$userid =$this->post->input('userid');
			$password =$this->post->input('password');
			$mobileno =$this->post->input('mobileno');
			$status =$this->post->input('status');
			
			switch ($type) {
				case 'Admin':
					$this->db->where('id',$id);
					$this->db->update('admin',array('user_name'=>$username,'email'=>$email,'user_id'=>$userid,'password'=>$password,'mobile_no'=>$mobileno,'status'=>$status));
					break;
					case 'Account':
					$this->db->where('id',$id);
					$this->db->update('Account',array('user_name'=>$username,'email'=>$email,'user_id'=>$userid,'password'=>$password,'mobile_no'=>$mobileno,'status'=>$status));
					break;
					case 'Professor':
					$this->db->where('id',$id);
					$this->db->update('Professor',array('user_name'=>$username,'email'=>$email,'user_id'=>$userid,'password'=>$password,'mobile_no'=>$mobileno,'status'=>$status));			
					break;
					case 'Librarian':
					$this->db->where('id',$id);
					$this->db->update('Librarian',array('user_name'=>$username,'email'=>$email,'user_id'=>$userid,'password'=>$password,'mobile_no'=>$mobileno,'status'=>$status));			
					break;
					case 'Warden':
					$this->db->where('id',$id);
					$this->db->update('Warden',array('user_name'=>$username,'email'=>$email,'user_id'=>$userid,'password'=>$password,'mobile_no'=>$mobileno,'status'=>$status));			
					break;
			}
			return true;
		}
}
?>
