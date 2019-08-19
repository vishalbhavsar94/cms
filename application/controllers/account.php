<?php
class Account extends CI_Controller
{
	public function index(){
		if($this->session->userdata('account_login')==1){
			$this->load->view('layouts/header');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/sidebar');
			$this->load->view('frontbord/accounts/dashbord');
			$this->load->view('layouts/footer');
			}else{
				redirect(base_url().'login');
			}
	}
}

?>
