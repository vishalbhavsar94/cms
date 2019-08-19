<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller{

	var $error;
	function __construct(){
		parent::__construct();
		$this->$error = null;
	}
	public function index(){
		
		$dashbord = null;
		if($this->session->userdata('master_admin_login')==1){
				redirect(base_url().'masteradmin');
		}
		else if($this->session->userdata('sub_admin_login')==1){
				redirect(base_url().'subadmin');
		}
		else if($this->session->userdata('admin_login')==1){
				redirect(base_url().'admin');
		}
		else if($this->session->userdata('account_login')==1){
				redirect(base_url().'account');
		}
		else if($this->session->userdata('librarian_login')==1){
				redirect(base_url().'librarian');
		}
		else if($this->session->userdata('professor_login')==1){
				redirect(base_url().'professor');
		}
		else if($this->session->userdata('warden_login')==1){
				redirect(base_url().'warden');
		}
		else if($this->session->userdata('student_login')==1){
				redirect(base_url().'student');
		}
		
		$this->load->helper('form');
		$pagedata['title'] = "loginPage";
		$pagedata['error'] = $this->$error;
		$this->load->view('login',$pagedata);
	}
	//login control
	public function login(){

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$userid = $this->input->post('userid');
		$password = $this->input->post('password');
		
		$this->form_validation->set_rules('userid', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
		{	
				return $this->index();	
		}
		else
		{
			if($this->checkUser($userid,$password)){
				return $this->index();
			}			
		}
				return $this->index();
	}
	public function checkUser($userid='',$password=''){
			
			$query = $this->db->select('*')
			->from('login')
			->where('user_id',$userid)	
			->get();
			if($query->num_rows() > 0){
				 $query = $this->check_password($query);
					if($query->num_rows() > 0){
						$row = $query->row();
						if($row->status){
						switch ($row->type) {
							case 'MasterAdmin':
							$this->session->set_userdata('master_admin_login',1);
							$this->session->set_userdata('master_admin_id', $row->id);
							$this->session->set_userdata('login_user_id', $row->id);
							$this->session->set_userdata('name', $row->user_name);
							$this->session->set_userdata('email', $row->email);
							$this->session->set_userdata('login_type', 'masteradmin');
							$this->session->set_userdata('user_id',$row->user_id);		
							$this->session->set_userdata('ins_id',$row->ins_id);		
								break;
								case 'SubAdmin':
							$this->session->set_userdata('sub_admin_login', '1');
							$this->session->set_userdata('sub_admin_id', $row->id);
							$this->session->set_userdata('login_user_id', $row->id);
							$this->session->set_userdata('name', $row->user_name);
							$this->session->set_userdata('email', $row->email);
							$this->session->set_userdata('login_type',$row->type);
							$this->session->set_userdata('user_id',$row->user_id);		
							$this->session->set_userdata('ins_id',$row->ins_id);		
								break;
								case 'Account':
							$this->session->set_userdata('account_login', '1');
							$this->session->set_userdata('account_id', $row->id);
							$this->session->set_userdata('login_user_id', $row->id);
							$this->session->set_userdata('name', $row->user_name);
							$this->session->set_userdata('email', $row->email);
							$this->session->set_userdata('login_type',$row->type);
							$this->session->set_userdata('user_id',$row->user_id);		
							$this->session->set_userdata('ins_id',$row->ins_id);		
								break;
								case 'Admin':
							$this->session->set_userdata('admin_login', '1');
							$this->session->set_userdata('admin_id', $row->id);
							$this->session->set_userdata('login_user_id', $row->id);
							$this->session->set_userdata('name', $row->user_name);
							$this->session->set_userdata('email', $row->email);
							$this->session->set_userdata('login_type',$row->type);
							$this->session->set_userdata('user_id',$row->user_id);		
							$this->session->set_userdata('ins_id',$row->ins_id);		
								break;
								case 'Librarian':
							$this->session->set_userdata('librarian_login', '1');
							$this->session->set_userdata('librarian_id', $row->id);
							$this->session->set_userdata('login_user_id', $row->id);
							$this->session->set_userdata('name', $row->user_name);
							$this->session->set_userdata('email', $row->email);
							$this->session->set_userdata('login_type',$row->type);
							$this->session->set_userdata('user_id',$row->user_id);		
							$this->session->set_userdata('ins_id',$row->ins_id);		
								break;
								case 'Professor':
							$this->session->set_userdata('professor_login', '1');
							$this->session->set_userdata('professor_id', $row->id);
							$this->session->set_userdata('login_user_id', $row->id);
							$this->session->set_userdata('name', $row->user_name);
							$this->session->set_userdata('email', $row->email);
							$this->session->set_userdata('login_type',$row->type);
							$this->session->set_userdata('user_id',$row->user_id);		
							$this->session->set_userdata('ins_id',$row->ins_id);		
								break;
								case 'Student':
							$this->session->set_userdata('student_login', '1');
							$this->session->set_userdata('student_id', $row->id);
							$this->session->set_userdata('login_user_id', $row->id);
							$this->session->set_userdata('name', $row->user_name);
							$this->session->set_userdata('email', $row->email);
							$this->session->set_userdata('login_type',$row->type);
							$this->session->set_userdata('user_id',$row->user_id);		
							$this->session->set_userdata('ins_id',$row->ins_id);		
								break;
								case 'Warden':
							$this->session->set_userdata('warden_login', '1');
							$this->session->set_userdata('warden_id', $row->id);
							$this->session->set_userdata('login_user_id', $row->id);
							$this->session->set_userdata('name', $row->user_name);
							$this->session->set_userdata('email', $row->email);
							$this->session->set_userdata('login_type',$row->type);
							$this->session->set_userdata('user_id',$row->user_id);		
							$this->session->set_userdata('ins_id',$row->ins_id);		
								break;
							default:
								return false;
								break;
						}
								
					return true;
				 }
				 $this->$error = "Account Is Deactivated..!";
				 return false;
			}
				$this->$error = "Password Not Match..!";
		}	
			if($this->$error == null)
			$this->$error = "UserID Not Found..!!";
			return false;
	}
	private function check_password($query){
			$this->load->model('login_model');
			$user_id = $this->input->post('userid');
			$password = $this->input->post('password');
			$result = $this->login_model->check_password($row = $query->row(),$user_id,$password);
			return $result;
	}
	 public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	 }
	 public function cms_404(){
		 $this->load->view('errors/cms_error/cms_404');
	 }
}
?>
