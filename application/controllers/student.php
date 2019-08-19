<?php
class Student extends CI_Controller{

		public function index(){
			if($this->session->userdata('student_login')==1){
			$this->load->view('layouts/header');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/sidebar');
			$this->load->view('frontbord/student/dashbord');
			$this->load->view('layouts/footer');
			}else{
				redirect(base_url().'login');
			}
		}
}
?>
