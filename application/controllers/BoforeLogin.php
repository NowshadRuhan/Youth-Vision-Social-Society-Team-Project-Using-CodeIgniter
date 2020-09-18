<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BoforeLogin extends CI_Controller {

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

			$all_notices = $this->ac_m->all_notices_for_all();

			$all_recent_programs = $this->ac_m->recent_program();

			$data  = array(
				'all_notices' => $all_notices, 
				'all_recent_programs' => $all_recent_programs,
			);


			$this->load->view('Header/b_login_header');
			$this->load->view('BeforeLogin/b_home', $data);
			$this->load->view('Footer/footer');
		}
	}

	public function about_b(){

		$this->load->library('session');
		$this->session->sess_destroy();
		$this->session->unset_userdata('welcome_name');
		
		if($this->session->userdata('welcome_name')==NULL){
			$this->load->view('Header/b_login_header');
			$this->load->view('BeforeLogin/b_about');
			$this->load->view('Footer/footer');
		}
	}
	public function event_before_login(){

		$this->load->library('session');
		$this->session->sess_destroy();
		$this->session->unset_userdata('welcome_name');
		
		if($this->session->userdata('welcome_name')==NULL){

			$upcomming_events = $this->ac_m->upcomming_event();

			$all_recent_events = $this->ac_m->recent_event();

			$data  = array(
				'upcomming_events' => $upcomming_events, 
				'all_recent_events' => $all_recent_events,
			);

			$this->load->view('BeforeLogin/event', $data);
			$this->load->view('Footer/footer');
		}
	}	
	public function contact_before_login(){

		$this->load->library('session');
		$this->session->sess_destroy();
		$this->session->unset_userdata('welcome_name');
		
		if($this->session->userdata('welcome_name')==NULL){
			//$this->load->view('Header/b_login_header');
			$this->load->view('BeforeLogin/contact');
			$this->load->view('Footer/footer');
		}
	}

	public function our_program_b(){

		$this->load->library('session');
		$this->session->sess_destroy();
		$this->session->unset_userdata('welcome_name');
		
		if($this->session->userdata('welcome_name')==NULL){

			$all_our_programs = $this->ac_m->all_our_programs();

			$data  = array(
				'all_our_programs' => $all_our_programs, 
				
			);

			$this->load->view('Header/b_login_header');
			$this->load->view('BeforeLogin/our_program_b_login', $data);
			$this->load->view('Footer/footer');
		}
	}

}
