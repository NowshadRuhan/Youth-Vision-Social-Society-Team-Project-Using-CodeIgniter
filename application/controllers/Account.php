<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('Account_Model', 'ac_m');
	}

	public function index()
	{
		$this->load->library('session');
		$this->session->sess_destroy();
		$this->session->unset_userdata('welcome_name');

		if($this->session->userdata('welcome_name')==NULL){
			$this->load->view('Header/b_login_header');
			$this->load->view('Account/registration');
			$this->load->view('Footer/footer');
		}
	}

	public function login()
	{
		$this->load->library('session');
		$this->session->sess_destroy();
		$this->session->unset_userdata('welcome_name');
		
		if($this->session->userdata('welcome_name')==NULL){
			
			$this->load->view('Header/b_login_header');
			$this->load->view('Account/login');
			$this->load->view('Footer/footer');
		}
	}

	public function reg_account(){

		$this->load->library('session');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('full_name', 'Name', 'required|is_unique[tbl_user_reg.full_name]');
		$this->form_validation->set_rules('user_email', 'Email', 'required|valid_email|is_unique[tbl_user_reg.user_email]');
		
		$this->form_validation->set_rules('user_re_pass', 'Password', 'required');
		$this->form_validation->set_rules('user_city', 'City', 'required');
		$this->form_validation->set_rules('user_phone', 'Phone', 'required');

		if($this->form_validation->run()){

			$this->form_validation->set_rules('user_pass', 'Password', 'required|exact_length[8]');

			if($this->form_validation->run()==false){

				$this->session->set_flashdata('error_in_validation', 'Enter 8 char password!!');
				redirect('Account/index');
			}else{

				$full_name = $this->input->post('full_name');
				$user_email = $this->input->post('user_email');
				$user_pass = $this->input->post('user_pass');
				$user_re_pass = $this->input->post('user_re_pass');
				$user_city = $this->input->post('user_city');
				$user_phone = $this->input->post('user_phone');

				if($user_pass == $user_re_pass){

					$digit = 6;
					$user_code = rand(pow(10, $digit-1), pow(10, $digit)-1);


					$result_submit_reg = $this->ac_m->reg_submit($full_name, $user_email, $user_pass, $user_re_pass, $user_city, $user_phone, $user_code);
					if($result_submit_reg){

						$result_send_email = $this->ac_m->send_validation_email($full_name, $user_email);

						if($result_send_email){
							$this->session->set_flashdata('check_email', 'Check Your email And Verified your account!!');
							redirect('Account/login');
						}else{
							$this->session->set_flashdata('error_in_pass', 'Email Not Sent !!');
							redirect('Account/index');
						}
					}else{
						$this->session->set_flashdata('error_in_pass', 'Your Password are Not Match!!');
					redirect('Account/index');
					}

				}else{
					$this->session->set_flashdata('error_in_pass', 'Your Password are Not Match!!');
					redirect('Account/index');
				}

			}


		}else if($this->form_validation->run() == false){
			$this->session->set_flashdata('error_in_validation', 'This email or name is registrated!! <br> Or enter 8 char password!!');
			redirect('Account/index');
		}
	}







	public function verify($email_address, $email_code) {
	    if($this->ac_m->verifyEmail($email_address, $email_code)){
		   redirect('Account/login');
	    } else {
	        echo 'error';    
	    }
	}


	public function loginVerification(){

		$this->load->library('session');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('user_email_login', 'Username', 'required');
		$this->form_validation->set_rules('user_pass_login', 'Password', 'required');

		if($this->form_validation->run()){
			$user_email_login = $this->input->post('user_email_login');
			$user_pass_login = $this->input->post('user_pass_login');

			$login_result = $this->ac_m->login($user_email_login, $user_pass_login);

			if($login_result == 79){
				
				$this->session->set_flashdata('welcome_admin', "Admin you Successful login!");
				redirect('Admin/Admin_controller/index');
			}
			else if($login_result == 1){


				redirect('After_login_home/index');

			}else if($login_result == 11){

				$this->session->set_flashdata('error_login_wrong_pass', "Wait Admin will confirm your membership!");
				
				redirect('Account/login');

			}
			else if($login_result == 12){

				$this->session->set_flashdata('error_login_wrong_pass', "Password is Wrong!");
				
				redirect('Account/login');

			}else if ($login_result == 13) {

				$this->session->set_flashdata('error_login_account_not_valid', "Your account are not Varifiad!");
				
				redirect('Account/login');
			}else{
				
				$this->session->set_flashdata('error_login_wrong_email', "Email are not valid!");
				redirect('Account/login');
			}

		}else{
			
			$this->session->set_flashdata('error_login', 'Username or Password are Invalid!!');	
			redirect('Account/login');
		}
	}



}
