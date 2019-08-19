<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('check_user_credentials'))
{
	function check_user_credentials($user){
		$CI = & get_instance(); 
		switch ($user) {
				
			case 'masteradmin':
				if($CI->session->userdata('master_admin_login')==1)
					 return true;
					 else
					 redirect(base_url().'login');
				break;
				case 'subadmin':
				if($CI->session->userdata('sub_admin_login')==1)
					 return true;
					 else
					 redirect(base_url().'login');
				break;
				case 'admin':
				if($CI->session->userdata('admin_login')==1)
					 return true;
					 else
					 redirect(base_url().'login');
				break;
				case 'professor':
				if($CI->session->userdata('professor_login')==1)
					 return true;
					 else
					 redirect(base_url().'login');
				break;
				case 'librarian':
				if($CI->session->userdata('librarian_login')==1)
					 return true;
					 else
					 redirect(base_url().'login');
				break;
				case 'account':
				if($CI->session->userdata('account_login')==1)
					 return true;
					 else
					 redirect(base_url().'login');
				break;
				case 'warden':
				if($CI->session->userdata('warden_login')==1)
					 return true;
					 else
					 redirect(base_url().'login');
				break;
				case 'student':
				if($CI->session->userdata('student_login')==1)
					 return true;
					 else
					 redirect(base_url().'login');
				break;
		}
	}
}
