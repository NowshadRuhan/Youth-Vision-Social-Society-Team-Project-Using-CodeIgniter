<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class After_login_home extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('After_login_Model', 'ac_m');
	}

	public function index(){

		if($this->session->userdata('welcome_name')!=NULL){

			$all_notices = $this->ac_m->all_notices_for_all();

			$all_recent_programs = $this->ac_m->recent_program();

			$data  = array(
				'all_notices' => $all_notices, 
				'all_recent_programs' => $all_recent_programs,
			);

			$this->load->view('Header/a_login_header');
			$this->load->view('AfterLogin/after_login_home', $data);
			$this->load->view('Footer/footer');
		}else{
			redirect('Account/login');
		}
		
	}

	public function after_login_about(){

		
		if($this->session->userdata('welcome_name')!=NULL){

			$this->load->view('Header/a_login_header');
			$this->load->view('AfterLogin/about_after_login');
			$this->load->view('Footer/footer');
		}else{
			redirect('Account/login');
		}
	}

	public function after_login_contact(){

		
		if($this->session->userdata('welcome_name')!=NULL){

			//$this->load->view('Header/a_login_header');
			$this->load->view('AfterLogin/contact_after_login');
			$this->load->view('Footer/footer');
		}else{
			redirect('Account/login');
		}
	}

	public function after_login_event(){

		
		if($this->session->userdata('welcome_name')!=NULL){

			$upcomming_events = $this->ac_m->upcomming_event();

			$all_recent_events = $this->ac_m->recent_event();

			$data  = array(
				'upcomming_events' => $upcomming_events, 
				'all_recent_events' => $all_recent_events,
			);

			//$this->load->view('Header/a_login_header');
			$this->load->view('AfterLogin/event_after',$data);
			$this->load->view('Footer/footer');
		}else{
			redirect('Account/login');
		}
	}

	// public function after_login_see_event(){

		
	// 	if($this->session->userdata('welcome_name')!=NULL){

	// 		//$this->load->view('Header/a_login_header');
	// 		$this->load->view('AfterLogin/see_event');
	// 		$this->load->view('Footer/footer');
	// 	}else{
	// 		redirect('Account/login');
	// 	}
	// }

	public function our_program(){

		
		if($this->session->userdata('welcome_name')!=NULL){

			$all_our_programs = $this->ac_m->all_our_programs();

			$data  = array(
				'all_our_programs' => $all_our_programs, 
				
			);


			$this->load->view('Header/a_login_header');
			$this->load->view('AfterLogin/our_program',$data );
			$this->load->view('Footer/footer');
		}else{
			redirect('Account/login');
		}
	}
}	
