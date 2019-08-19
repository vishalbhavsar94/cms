<?php
class Login_model extends CI_Model
{
	public function check_password($row,$user_id,$password){
		$result = null;
		switch ($row->type) {
			case 'MasterAdmin':
				$result = $this->db->select('*')
				->from('master_admin')
				->where('user_id',$user_id)
				->where('password',$password)
				->get();
				break;
			case 'SubAdmin':
				$result = $this->db->select('*')
				->from('sub_admin')
				->where('user_id',$user_id)
				->where('password',$password)
				->get();
				break;
			case 'Account':
				$result = $this->db->select('*')
				->from('account')
				->where('user_id',$user_id)
				->where('password',$password)
				->get();
				break;
			case 'Admin':
				$result = $this->db->select('*')
				->from('admin')
				->where('user_id',$user_id)
				->where('password',$password)
				->get();
				break;
			case 'Professor':
				$result = $this->db->select('*')
				->from('professor')
				->where('user_id',$user_id)
				->where('password',$password)
				->get();
				break;
			case 'Librarian':
				$result = $this->db->select('*')
				->from('librarian')
				->where('user_id',$user_id)
				->where('password',$password)
				->get();
				break;
			case 'Warden':
				$result = $this->db->select('*')
				->from('warden')
				->where('user_id',$user_id)
				->where('password',$password)
				->get();
				break;
			case 'Student':
				$result = $this->db->select('*')
				->from('student')
				->where('user_id',$user_id)
				->where('password',$password)
				->get();
				break;
							
			}
		return $result;
	}
}
?>
