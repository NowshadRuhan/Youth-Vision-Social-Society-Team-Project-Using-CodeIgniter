<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('Admin_model', 'am');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->library('session');
		

		if($this->session->userdata('welcome_name')!=NULL){


			$total_users = $this->am->total_users();

			$total_notices = $this->am->total_notice();

			$total_events = $this->am->total_event();

			$total_programs = $this->am->total_programs();

			$total_active_members = $this->am->active_mamber();

			$not_active_mambers = $this->am->not_active_mamber();

			$active_not_active_not_mambers = $this->am->active_not_active_not_mamber();

			 $data =  array(
			 	'total_users' => $total_users, 
			 	'total_notices' => $total_notices,
			 	'total_events' => $total_events,
			 	'total_programs' => $total_programs,
			 	'total_active_members' => $total_active_members,
			 	'not_active_mambers' => $not_active_mambers,
			 	'active_not_active_not_mambers' => $active_not_active_not_mambers

			 );




			 $this->load->view('Admin/Header/admin_header');
			 $this->load->view('Admin/dashboard', $data);
			 $this->load->view('Admin/Footer/admin_footer');
		}else{

			redirect('Account/login');
		}
	}

	public function userlist()
	{
		$this->load->library('session');
		if($this->session->userdata('welcome_name')!=NULL){

			$users = $this->am->users_lists();
			

			$data =  array(
				'users' => $users, 
			);

			$this->load->view('Admin/Header/admin_header');
			$this->load->view('Admin/users_list', $data);
			$this->load->view('Admin/Footer/admin_footer');
		}else{

			redirect('Account/login');
		}
	}


	//active status member
	public function change_status_in_active($id = null)
	{

		$result_change = $this->am->change_st_active($id);

		if($result_change){

			redirect('Admin/Admin_controller/userlist');
		}else{
			redirect('Admin/Admin_controller/userlist');
		}

	}

	//un active status member
	public function change_status_in_not_active($id = null)
	{

		$result_change = $this->am->change_st_not_active($id);

		if($result_change){

			redirect('Admin/Admin_controller/userlist');
		}else{
			redirect('Admin/Admin_controller/userlist');
		}

	}

	//active  membership status
	public function change_membership_in_active($id = null)
	{

		$result_change = $this->am->change_mumbership_active($id);

		if($result_change){

			redirect('Admin/Admin_controller/userlist');
		}else{
			redirect('Admin/Admin_controller/userlist');
		}

	}

	//un active  membership status
	public function change_membership_in_not_active($id = null)
	{

		$result_change = $this->am->change_mumbership_not_active($id);

		if($result_change){

			redirect('Admin/Admin_controller/userlist');
		}else{
			redirect('Admin/Admin_controller/userlist');
		}

	}




	// add notice 

	public function add_notice()
	{
		$this->load->library('session');
		if($this->session->userdata('welcome_name')!=NULL){

			// $users = $this->am->users_lists();
			

			// $data =  array(
			// 	'users' => $users, 
			// );

			$this->load->view('Admin/Header/admin_header');
			$this->load->view('Admin/add_notice');
			$this->load->view('Admin/Footer/admin_footer');
		}else{

			redirect('Account/login');
		}
	} 

	public function add_new_notice()
	{
		$this->load->library('session');
		$this->load->library('form_validation');
		
		$id = $this->session->userdata('u_id');
	
		$notice_titel = $this->input->post('notice_titel');
		$notice_description = $this->input->post('notice_description');

		$notice_start_date = $this->input->post('notice_start_date');
		$notice_end_date = $this->input->post('notice_end_date');
		
		$result_add_new_notice = $this->am->add_notice_model($id, $notice_titel, $notice_description, $notice_start_date, $notice_end_date );

		if($result_add_new_notice){

			$this->session->set_flashdata('success_add', 'successfully add this notice!!');
			redirect('Admin/Admin_controller/add_notice');
		}else{
			$this->session->set_flashdata('error_add', 'Error to add this!!');
			redirect('Admin/Admin_controller/add_notice');
		}
			
	}

	public function all_notice()
	{
		$this->load->library('session');
		if($this->session->userdata('welcome_name')!=NULL){

			$notice_lists = $this->am->notice_list();
			

			$data =  array(
			 	'notice_lists' => $notice_lists, 
			);

			$this->load->view('Admin/Header/admin_header');
			$this->load->view('Admin/notice_list', $data);
			$this->load->view('Admin/Footer/admin_footer');
		}else{

			redirect('Account/login');
		}
	}

	public function active_notice($id)
	{

		$result_change_notice_active = $this->am->change_notice_active($id);

		if($result_change_notice_active){

			$this->session->set_flashdata('success_ch', 'successfully active this notice!!');

			redirect('Admin/Admin_controller/all_notice');
		}else{

			$this->session->set_flashdata('error_change', 'Error To Active!!');

			redirect('Admin/Admin_controller/all_notice');
		}
	}

	public function inactive_notice($id)
	{

		$result_change_notice_inactive = $this->am->change_notice_inactive($id);

		if($result_change_notice_inactive){

			$this->session->set_flashdata('success_ch', 'successfully in-active this notice!!');

			redirect('Admin/Admin_controller/all_notice');
		}else{

			$this->session->set_flashdata('error_change', 'Error To in-Active!!');

			redirect('Admin/Admin_controller/all_notice');
		}
	}

	public function notice_delete($id)
	{

		$change_notice_delete = $this->am->change_notice_delete($id);

		if($change_notice_delete){

			$this->session->set_flashdata('success_ch', 'successfully deleted this notice!!');

			redirect('Admin/Admin_controller/all_notice');
		}else{

			$this->session->set_flashdata('error_change', 'Error To delete!!');

			redirect('Admin/Admin_controller/all_notice');
		}
	}



	// admin profile

	public function admin_profile()
	{
		$this->load->library('session');
		
		if($this->session->userdata('welcome_name')!=NULL){

			$admins = $this->am->getAdmin(); 
			$data =  array(
				'admins' => $admins, 
			);

			$this->load->view('Admin/Header/admin_header');
			$this->load->view('Admin/admin_profile', $data);
			$this->load->view('Admin/Footer/admin_footer');
		}else{

			redirect('Account/login');
		}

	}


	public function event_add()
	{
		$this->load->library('session');
		

		if($this->session->userdata('welcome_name')!=NULL){

			

			$this->load->view('Admin/Header/admin_header');
			$this->load->view('Admin/add_event');
			$this->load->view('Admin/Footer/admin_footer');
		}else{

			redirect('Account/login');
		}
	}

	public function addEvent()
	{
		$this->load->library('session');
		$this->load->library('form_validation');
		
		$id = $this->session->userdata('u_id');
	
		$event_date = $this->input->post('event_date');
		$event_titel = $this->input->post('event_titel');
		$event_place = $this->input->post('event_place');
		$event_Chief_Guest = $this->input->post('event_Chief_Guest');
		$event_description = $this->input->post('event_description');

		$event_photo = "resource/event_all/images/g1.jpg";
		
		
		$result_add_new_event = $this->am->add_event_model($id ,$event_date, $event_photo, $event_titel, $event_place, $event_Chief_Guest, $event_description );

		if($result_add_new_event){

			$this->session->set_flashdata('success_add', 'successfully add this event!!');
			redirect('Admin/Admin_controller/event_add');
		}else{
			$this->session->set_flashdata('error_add', 'Error to add this!!');
			redirect('Admin/Admin_controller/event_add');
		}

	}

	public function allEvent()
	{
		$this->load->library('session');
		

		if($this->session->userdata('welcome_name')!=NULL){

			$events = $this->am->get_allEvent(); 
			$data =  array(
				'events' => $events, 
			);

			$this->load->view('Admin/Header/admin_header');
			$this->load->view('Admin/event_list', $data);
			$this->load->view('Admin/Footer/admin_footer');
		}else{

			redirect('Account/login');
		}
	}


	public function event_photo_Upload($id)
	{
		$config['upload_path']   = './uploads/'; 
        $config['allowed_types'] = 'gif|jpg|png';
        
        $config['max_width']  = 4640;
        $config['max_height'] = 4640;
           
         $this->load->library('upload', $config);
         
   

         if ( ! $this->upload->do_upload('event_pic'))
          {
                       $this->session->set_flashdata('error_add', 'Error to add this!!');
					redirect('Admin/Admin_controller/allEvent');
           }
           else
           {
                       
           

           $data['upload_data'] =  $this->upload->data();
           $data1 = $this->upload->data();
           $image_path = 'uploads/'.$data1['file_name'];

           // echo "<pre>";
           // print_r($image_path) ;





	         if($image_path!=NULL){
	        	
	            	$result_event_img = $this->am->update_event_img($image_path, $id);

	            	if($result_event_img){

	            		$this->session->set_flashdata('success_add', 'successfully Update this event!!');
				 		redirect('Admin/Admin_controller/allEvent');
	            	}else{
	            		$this->session->set_flashdata('error_add', 'Error to Update this!!');
				 		redirect('Admin/Admin_controller/allEvent');
	           		}
        		}else{
        			$this->session->set_flashdata('error_add', 'Error to Update this!!');
					redirect('Admin/Admin_controller/allEvent');
        		}

        } 
	}

	public function delete_event($event_id)
	{
		$change_event_delete = $this->am->change_event_delete($event_id);

		if($change_event_delete){

			$this->session->set_flashdata('success_add', 'successfully dalete this event!!');
			redirect('Admin/Admin_controller/allEvent');
		}else{

			$this->session->set_flashdata('error_add', 'Error to delete this!!');
			redirect('Admin/Admin_controller/allEvent');
		}
	}

	public function programs_add()
	{
		$this->load->library('session');
		

		if($this->session->userdata('welcome_name')!=NULL){

			$this->load->view('Admin/Header/admin_header');
			$this->load->view('Admin/programs');
			$this->load->view('Admin/Footer/admin_footer');
		}else{

			redirect('Account/login');
		}
	}


	public function addProgram()
	{
		$this->load->library('session');
		$this->load->library('form_validation');
		
		$id = $this->session->userdata('u_id');
	
		$program_date = $this->input->post('program_date');
		$Program_titel = $this->input->post('Program_titel');
		$Program_description = $this->input->post('Program_description');
		

		$Program_photo = "resource/program.png";
		
		
		$result_add_new_program = $this->am->add_Program_model($id ,$program_date, $Program_titel, $Program_description, $Program_photo );

		if($result_add_new_program){

			$this->session->set_flashdata('success_add', 'successfully add this event!!');
			redirect('Admin/Admin_controller/programs_add');
		}else{
			$this->session->set_flashdata('error_add', 'Error to add this!!');
			redirect('Admin/Admin_controller/programs_add');
		}

	}

	public function allProgram()
	{
		$this->load->library('session');
		

		if($this->session->userdata('welcome_name')!=NULL){

			$programs = $this->am->get_allProgram(); 
			$data =  array(
				'programs' => $programs, 
			);

			$this->load->view('Admin/Header/admin_header');
			$this->load->view('Admin/program_list', $data);
			$this->load->view('Admin/Footer/admin_footer');
		}else{

			redirect('Account/login');
		}
	}

	public function delete_Program($program_id)
	{
		$change_Program_delete = $this->am->change_Program_delete($program_id);

		if($change_Program_delete){

			$this->session->set_flashdata('success_add', 'successfully dalete this Program!!');
			redirect('Admin/Admin_controller/allProgram');
		}else{

			$this->session->set_flashdata('error_add', 'Error to delete this!!');
			redirect('Admin/Admin_controller/allProgram');
		}
	}


	public function program_photo_Upload($id)
	{
		$config['upload_path']   = './uploads/'; 
        $config['allowed_types'] = 'gif|jpg|png';
        
        $config['max_width']  = 4640;
        $config['max_height'] = 4640;
           
         $this->load->library('upload', $config);
         
   

          if ( ! $this->upload->do_upload('program_pic'))
          {
                    $this->session->set_flashdata('error_add', 'Error to add this!!');
					redirect('Admin/Admin_controller/allProgram');
           }
           else
           {
                       
           

	           $data['upload_data'] =  $this->upload->data();
	           $data1 = $this->upload->data();
	           $image_path = 'uploads/'.$data1['file_name'];

          
	         if($image_path!=NULL){
	        	
	            	$result_program_img = $this->am->update_program_img($image_path, $id);

	            	if($result_program_img){

	            		$this->session->set_flashdata('success_add', 'successfully Update this Program!!');
				 		redirect('Admin/Admin_controller/allProgram');
	            	}else{
	            		$this->session->set_flashdata('error_add', 'Error to Update this!!');
				 		redirect('Admin/Admin_controller/allProgram');
	           		}
        		}else{
        			$this->session->set_flashdata('error_add', 'Error to Update this!!');
					redirect('Admin/Admin_controller/allProgram');
        		}
        	}
	}

	public function search_option()
	{

		$this->load->library('session');
		$this->load->library('form_validation');
		
		$id = $this->session->userdata('u_id');
	
		$search = $this->input->post('search');

		if($search == 'Dashboard' or  $search == 'dashboard'){
			redirect('Admin/Admin_controller');

		}else if ($search == 'Users' or $search == 'Users List' or $search == 'users' or $search == 'users list') {

			redirect('Admin/Admin_controller/userlist');

		}else if ($search == 'Notices' or $search == 'Notices List' or $search == 'notices' or $search == 'notices list') {

			redirect('Admin/Admin_controller/all_notice');

		}else if ($search == 'Events' or $search == 'Events List' or $search == 'events' or $search == 'events list') {
			# code...
			redirect('Admin/Admin_controller/allEvent');

		}else if ($search == 'Programs' or $search == 'Programs List' or $search == 'programs' or $search == 'programs list') {

			# code...
			redirect('Admin/Admin_controller/allProgram');

		}else if ($search == 'Admin' or $search == 'Profile' or $search == 'admin' or $search == 'profile') {
			# code...

			redirect('Admin/Admin_controller/admin_profile');
		}else{
			redirect('Admin/Admin_controller');
		}
	}

	public function profile_admin_edit()
	{
		$this->load->library('session');
		

		if($this->session->userdata('welcome_name')!=NULL){

			$admins = $this->am->getAdmin(); 
			$data =  array(
				'admins' => $admins, 
			);

			$this->load->view('Admin/Header/admin_header');
			$this->load->view('Admin/edit_profile', $data);
			$this->load->view('Admin/Footer/admin_footer');
		}else{

			redirect('Account/login');
		}
	}

	public function edit_profile()
	{
		$this->load->library('session');
		$this->load->library('form_validation');
		
		$id = $this->session->userdata('u_id');
	
		$admin_full_name = $this->input->post('admin_full_name');
		$admin_email = $this->input->post('admin_email');
		$admin_city = $this->input->post('admin_city');
		$admin_phone = $this->input->post('admin_phone');
		
		
		
		
		$result_edit_profile = $this->am->edit_profile_model($id ,$admin_full_name, $admin_email, $admin_city, $admin_phone );
		
		if($result_edit_profile){

			$this->session->set_flashdata('success_add', 'successfully edit this profile!!');
			redirect('Admin/Admin_controller/admin_profile');
		}else{
			$this->session->set_flashdata('error_add', 'Error to edit this!!');
			redirect('Admin/Admin_controller/admin_profile');
		}

	}
}