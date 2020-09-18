<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_Model extends CI_Model{


	private function hash_password($password){ // for hash password
  		 $encryptedPass =  password_hash($password, PASSWORD_BCRYPT);
  		 return $encryptedPass;
	}

	public function reg_submit($full_name, $user_email, $user_pass, $user_re_pass, $user_city, $user_phone,$user_code){

		$user_status = 0;
		$confirm_to_member = 0;
		$type = "member";

		$field = array(
			'full_name' => $full_name,
			'user_email' => $user_email,
			'user_pass' => $this->hash_password($user_pass),
			'user_city' =>  $user_city,
			'user_phone' =>	$user_phone,
			'user_code' =>	$user_code,
			'user_status' => $user_status,
			'confirm_to_member' => $confirm_to_member,
			'type' => $type



			);
		$this->db->insert('tbl_user_reg', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}




	public function send_validation_email($full_name, $user_email){
	    
	    $sql = "SELECT user_id, user_code FROM tbl_user_reg WHERE user_email = '" .$user_email ."' LIMIT 1";
	    $result = $this->db->query($sql);
	    $row = $result->row();

	    $user_code = $row->user_code;


	    $this->load->library('email');
        
        // Mail config
        $to = $user_email;
        $from = 'ruhanchowdhury1996@gmail.com';
        $fromName = 'TeamTraveller';
        $mailSubject = 'Active Form TeamTraveler';


	     $config['mailtype'] = 'html';
	    

	     $mailContent = '
            
            <p><b>Hello </b>'.$full_name.'</p>
            <p> confim mail sharpaly <a href="' . base_url().'account/verify/'.$user_email.'/'.$user_code.'">click here</a></p>
            <p><b>Thank You</b></p>
        ';
	    

        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->to($to);
        $this->email->from($from, $fromName);
        $this->email->subject($mailSubject);
        $this->email->message($mailContent);
        
        // Send email & return status
        return $this->email->send()?true:false;

	}


	function verifyEmail($email_address, $email_code) {

	    $data = array('user_status' => 1);
	    $this->db->where('user_email', $email_address);
	    $this->db->where('user_code', $email_code);
	    return $this->db->update('tbl_user_reg', $data);
	}


	public function login($user_email_login, $user_pass_login){ //for login varification

		$this->load->library('session');
		$this->db->where('user_email', $user_email_login);
		$account = $this->db->get('tbl_user_reg')->row();

		
		if($account != NULL){

			if($account->user_status == 1){

					if($account->confirm_to_member == 1){
					//echo $Upassword;
						if(hash_equals($account->user_pass, crypt($user_pass_login, $account->user_pass))){
							
							$this->session->set_userdata('u_id', $account->user_id);
							$this->session->set_userdata('welcome_name', $account->full_name);

							if($account->type == 'admin'){

								return 79;
							}else{
								return 1;
							}
							

						}else{
							$password_wrong = 12;
							return $password_wrong;
						}
					}else{
						$password_wrong = 11;
						return $password_wrong;
					}
				
			}else{
				$account_not_active = 13;
				return $account_not_active;
			}
			
		}else{
			$account_not_email = 14;
			return $account_not_email;
		}
	}



	public function all_notices_for_all()
	{
		$this->db->order_by("notice_id ", "DESC");
		$this->db->where('notice_activation', "1");
		$this->db->limit(4);
        $result = $this->db->get('tbl_notice');

        // echo "<pre>";
        // print_r($result->result());
        return $result->result(); 
	}
	

	public function recent_program()
	{
		$date_today = date('Y-m-d');
		$this->db->order_by("program_id ", "DESC");
		$this->db->where('program_date < ', $date_today);
		$this->db->limit(3);
        $result = $this->db->get('tbl_program');

          // echo "<pre>";
          // print_r($result->result());
        return $result->result(); 
	}


	public function recent_event()
	{
		$date_today = date('Y-m-d');
		$this->db->order_by("event_id ", "DESC");
		$this->db->where('event_date <= ', $date_today);
		$this->db->limit(3);
        $result = $this->db->get('tbl_event');

          // echo "<pre>";
          // print_r($result->result());
        return $result->result(); 
	}


	public function upcomming_event()
	{
		$date_today = date('Y-m-d');
		$this->db->order_by("event_id ", "DESC");
		$this->db->where('event_date >', $date_today);
		$this->db->limit(4);
        $result = $this->db->get('tbl_event');

          // echo "<pre>";
          // print_r($result->result());
        return $result->result(); 
	}

	public function all_our_programs()
	{
		$this->db->order_by("program_id ", "DESC");
		$this->db->limit(5);
        $result = $this->db->get('tbl_program');

          // echo "<pre>";
          // print_r($result->result());
        return $result->result(); 
	}
}
