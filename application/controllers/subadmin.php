<?php
class Subadmin extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('user_validation');
		$this->load->library('form_validation');
		$this->load->model('subadmin_model');
		check_user_credentials('subadmin');
	}
	public function index(){
		
			$this->load->view('layouts/header');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/sidebar');
			$this->load->view('frontbord/subadmin/dashbord');
			$this->load->view('layouts/footer');
	}
	public function add_user_form(){
		
			$pagedata['institute'] = $this->subadmin_model->get_institute();
			$this->load->view('layouts/header');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/sidebar');
			$this->load->view('frontbord/subadmin/adduser',$pagedata);
			$this->load->view('layouts/footer');
	}
	public function add_user(){
		if($this->validate_user_form()){
			if($this->subadmin_model->add_user()){
					$this->session->set_flashdata('message','User Created Successfully ..!');
					return redirect('subadmin/adduser');
			}	
		}else{
			return $this->add_user_form();
		}	
	}
	private function validate_user_form(){
			
			$this->form_validation->set_rules('username','User Name','required');
			$this->form_validation->set_rules('email','Email Address','required|valid_email');
			$this->form_validation->set_rules('userid','UserID','required');
			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_rules('usertype','UserType','required');
			$this->form_validation->set_rules('insid','Institute','required');
			$this->form_validation->set_rules('mobileno','Mobile No','required|numeric|min_length[10]|max_length[10]');
			
			if($this->form_validation->run()){
				return true;
			}else{
				return false;
			}
	}
	public function view_user(){
			
				$pagedata['pagejs'] = array('datatables.min.js','subadmin/viewuser.js');
				$pagecss['pagecss'] = array('datatables.min.css');
				$this->load->view('layouts/header',$pagecss);
				$this->load->view('layouts/navbar');
				$this->load->view('layouts/sidebar');
				$this->load->view('frontbord/subadmin/viewuser',$pagedata);
				$this->load->view('layouts/footer');
	}
	public function ajaxuser($mode){
		$users['data'] = $this->subadmin_model->get_users($mode);
		echo json_encode($users);
	}
	private function ajax_form_validate(){
		
		$this->form_validation->set_rules('username','User Name','required');
		$this->form_validation->set_rules('email','Email Address','required|valid_email');
		$this->form_validation->set_rules('userid','UserID','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('mobileno','Mobile No','required|numeric|min_length[10]|max_length[10]');
		
		if($this->form_validation->run()){
			return true;
		}else{
			return false;
		}
	}
	public function ajax_update_user(){
		
		if($this->ajax_form_validate()){
			$this->subadmin_model->update_user();
			$this->session->set_flashdata('message','User Updated Successfully ..!');
			$json['success'] = true;
		}else{
			$json['error'] = array(
                'username' => form_error('username', '<p class="mt-3 text-danger">', '</p>'),
                'email' => form_error('email', '<p class="mt-3 text-danger">', '</p>'),
                'password' => form_error('password', '<p class="mt-3 text-danger">', '</p>'),
                'userid' => form_error('userid', '<p class="mt-3 text-danger">', '</p>'),
                'mobileno' => form_error('mobileno', '<p class="mt-3 text-danger">', '</p>')
            );
		}
		echo json_encode($json);
	}
}

?>
