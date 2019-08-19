<?php
class Masteradmin extends CI_Controller{

	public function __construct(){
		parent::__construct();	
		$this->load->helper('form');
		$this->load->helper('user_validation');
		$this->load->library('form_validation');
		$this->load->model('masteradmin_model');
		check_user_credentials('masteradmin');
	}
	//dashbord of masteradmin	
	public function index(){
			
			$this->load->view('layouts/header');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/sidebar');
			$this->load->view('frontbord/masteradmin/dashbord');
			$this->load->view('layouts/footer');
		}
		//form for adding institute
		public function institute_form(){
			$this->load->view('layouts/header');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/sidebar');
			$this->load->view('frontbord/masteradmin/institute');
			$this->load->view('layouts/footer');
		}
		public function add_institute(){
			
			if($this->validate_institute_form()){
				if($this->masteradmin_model->add_institute()){
					$this->session->set_flashdata('message','InstituteCreated Sussessfully..!!');
					return redirect('masteradmin/institute');
				}
			}else{
				return $this->institute_form();
			}
		}
		private function validate_institute_form(){	
			
			$this->form_validation->set_rules('insname','Institute Name','required');
			$this->form_validation->set_rules('address','Address','required');
			$this->form_validation->set_rules('email','Email','required|valid_email');
			$this->form_validation->set_rules('landline','Landline','required|numeric');
			$this->form_validation->set_rules('fax','Fax','numeric');
			$this->form_validation->set_rules('mobile_no','MobailNo','required|numeric|min_length[10]|max_length[10]');
			
			if($this->form_validation->run()){
				return true;
			}else{
				return false;
			}
		}
		public function view_institute(){
			
				$pagedata['institute'] = $this->masteradmin_model->get_institute();
				$this->load->view('layouts/header');
				$this->load->view('layouts/navbar');
				$this->load->view('layouts/sidebar');
				$this->load->view('frontbord/masteradmin/viewinstitute',$pagedata);
				$this->load->view('layouts/footer');
		}
		public function add_user_form(){
			
				$pagedata['institute'] = $this->masteradmin_model->available_institute();
				$this->load->view('layouts/header');
				$this->load->view('layouts/navbar');
				$this->load->view('layouts/sidebar');
				$this->load->view('frontbord/masteradmin/adduser',$pagedata);
				$this->load->view('layouts/footer');
		}
		public function add_user(){
				if($this->validate_user_form()){
					if($this->masteradmin_model->add_user()){
						$this->session->set_flashdata('message','SubAdmin Added Sussessfully..!!');
						return redirect('masteradmin/adduser');
					}
				}else{
					$this->add_user_form();
				}
		}
		private function validate_user_form(){
			
			$this->form_validation->set_rules('SubAdminUserName','UserName','required');
			$this->form_validation->set_rules('SubAdminEmail','Email','required|valid_email');
			$this->form_validation->set_rules('SubAdminUserId','UserId','required');
			$this->form_validation->set_rules('SubAdminPassword','Password','required');
			$this->form_validation->set_rules('SubAdminMobileNo','MobailNo','required|numeric|min_length[10]|max_length[10]');
			$this->form_validation->set_rules('SubAdminIns','Institute','required|numeric');
			
			if($this->form_validation->run()){
				return true;
			}else{
				return false;
			}
		}
		public function view_user(){
				
				$pagedata['pagejs'] = array('datatables.min.js','masteradmin/viewuser.js');
				$pagecss['pagecss'] = array('datatables.min.css');
				$this->load->view('layouts/header',$pagecss);
				$this->load->view('layouts/navbar');
				$this->load->view('layouts/sidebar');
				$this->load->view('frontbord/masteradmin/viewuser',$pagedata);
				$this->load->view('layouts/footer');
		}
		public function ajaxuser($mode){
				$users['data'] = $this->masteradmin_model->get_users($mode);
				echo json_encode($users);
			}

}
?>
