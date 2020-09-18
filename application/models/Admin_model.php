<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

	public function total_users()
	{
		$type = "member";
        $this->db->where(['type' => $type]);  
        $query = $this->db->get('tbl_user_reg');
        if($query->num_rows() > 0)  
        {  
            $re = $query->num_rows();
              // echo "<pre>";
              // print_r($query->num_rows());
            return  $re;
        }  
        else  
        {  
            return false;  
        } 
	}

	public function users_lists()
    {
        $result=null;
        $this->db->order_by("user_id", "DESC");
        $type = "member";
        $this->db->where(['type' => $type]);
        $result = $this->db->get('tbl_user_reg');

        // echo "<pre>";
        // print_r($result->result());
        return $result->result(); 
    }


    // //active status member
    public function change_st_active($id)
    {
    	$user_status = 1;
    	$data = array(
    		'user_status' => $user_status 
    	);

    	$this->db->where('user_id',$id);
        $this->db->update('tbl_user_reg',$data);
        if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
    }

    //un active status member
    public function change_st_not_active($id)
    {
    	$user_status = 0;
    	$data = array(
    		'user_status' => $user_status 
    	);

    	$this->db->where('user_id',$id);
        $this->db->update('tbl_user_reg',$data);
        if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
    }


    //active  membership status
    public function change_mumbership_active($id)
    {
    	$confirm_to_member = 1;
    	$data = array(
    		'confirm_to_member' => $confirm_to_member 
    	);

    	$this->db->where('user_id',$id);
        $this->db->update('tbl_user_reg',$data);
        if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
    }


    //not active  membership status
    public function change_mumbership_not_active($id)
    {
    	$confirm_to_member = 0;
    	$data = array(
    		'confirm_to_member' => $confirm_to_member 
    	);

    	$this->db->where('user_id',$id);
        $this->db->update('tbl_user_reg',$data);
        if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
    }


    // add new notice

    public function add_notice_model($id, $notice_titel, $notice_description, $notice_start_date, $notice_end_date)
    {
        $notice_activation = 0;

        $data = array(
            'admin_id' => $id,
            'notice_titel' => $notice_titel,
            'notice_discription' => $notice_description,
            'start_time' => $notice_start_date,
            'end_time' => $notice_end_date ,
            'notice_activation' =>  $notice_activation

            );

        $this->db->insert('tbl_notice', $data);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function notice_list()
    {
        $result=null;
        $this->db->order_by("notice_id", "DESC");
        
        $result = $this->db->get('tbl_notice');

        // echo "<pre>";
        // print_r($result->result());
        return $result->result(); 
    }

    public function total_notice()
    {
        
        
        $query = $this->db->get('tbl_notice');
        if($query->num_rows() > 0)  
        {  
            $re = $query->num_rows();
              // echo "<pre>";
              // print_r($query->num_rows());
            return  $re;
        }  
        else  
        {  
            return false;  
        } 
    }

    public function change_notice_active($id)
    {
        $notice_activation = 1;
        $data = array(
            'notice_activation' => $notice_activation 
        );

        $this->db->where('notice_id',$id);
        $this->db->update('tbl_notice',$data);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function change_notice_inactive($id)
    {
        $notice_activation = 0;
        $data = array(
            'notice_activation' => $notice_activation 
        );

        $this->db->where('notice_id',$id);
        $this->db->update('tbl_notice',$data);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }


    public function change_notice_delete($id)
    {
        $this -> db -> where('notice_id', $id);
        $this -> db -> delete('tbl_notice');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }


    //admin profile

    public function getAdmin()
    {
        
        $id = $this->session->userdata('u_id');
        $this->db->where(['user_id' => $id]);  
        $query = $this->db->get('tbl_user_reg');
        if($query->num_rows() > 0)  
        {  
            //$re = $query->num_rows();
              // echo "<pre>";
              // print_r($query->num_rows());
            return  $query->result();
        }  
        else  
        {  
            return false;  
        } 

    }

    //charts

    public function active_mamber()
    {
        
        
        $this->db->where('type', 'member');
        $this->db->where('user_status', 1);
        $this->db->where('confirm_to_member', 1);
        $query = $this->db->get('tbl_user_reg');
        if($query->num_rows() > 0)  
        {  
            $re = $query->num_rows();
               // echo "<pre>";
               // print_r($query->num_rows());
            return  $re;
        }  
        else  
        {  
            return false;  
        } 
    }

    public function not_active_mamber()
    {
        
        
        $this->db->where('type', 'member');
        $this->db->where('user_status', 0);
        $this->db->where('confirm_to_member', 1);
        $query = $this->db->get('tbl_user_reg');
        if($query->num_rows() > 0)  
        {  
            $re = $query->num_rows();
               // echo "<pre>";
               // print_r($query->num_rows());
            return  $re;
        }  
        else  
        {  
            return false;  
        } 
    }

    public function active_not_active_not_mamber()
    {
        
        
        $this->db->where('type', 'member');    
        $this->db->where('confirm_to_member', 0);
        $query = $this->db->get('tbl_user_reg');
        if($query->num_rows() > 0)  
        {  
            $re = $query->num_rows();
               // echo "<pre>";
               // print_r($query->num_rows());
            return  $re;
        }  
        else  
        {  
            return false;  
        } 
    }

    public function add_event_model($id ,$event_date, $event_photo, $event_titel, $event_place, $event_Chief_Guest, $event_description)
    {


        $data = array(
            'user_id' => $id,
            'event_date' => $event_date,
            'event_photo' => $event_photo,
            'event_titel' => $event_titel,
            'event_place' => $event_place ,
            'event_Chief_Guest' =>  $event_Chief_Guest,
            'event_description' =>  $event_description

            );

        $this->db->insert('tbl_event', $data);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }


    public function get_allEvent()
    {
        $result=null;
        $this->db->order_by("event_id", "DESC");
        
        $result = $this->db->get('tbl_event');

        // echo "<pre>";
        // print_r($result->result());
        return $result->result(); 
    }

    public function update_event_img($image_path, $id)
    {
        $update_img  = array(
            'event_photo' => $image_path
        );

        $this->db->where('event_id', $id);
        $this->db->update('tbl_event', $update_img);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function change_event_delete($event_id)
    {
        $this -> db -> where('event_id', $event_id);
        $this -> db -> delete('tbl_event');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function total_event()
    {
        
        
        $query = $this->db->get('tbl_event');
        if($query->num_rows() > 0)  
        {  
            $re = $query->num_rows();
              // echo "<pre>";
              // print_r($query->num_rows());
            return  $re;
        }  
        else  
        {  
            return false;  
        } 
    }

    public function add_Program_model($id ,$program_date, $Program_titel, $Program_description, $Program_photo )
    {
        $data = array(
            'user_id' => $id,
            'program_date' => $program_date,
            'program_photo' => $Program_photo,
            'program_title' => $Program_titel,
            'program_description' => $Program_description 

            );

        $this->db->insert('tbl_program', $data);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function get_allProgram()
    {
        $result=null;
        $this->db->order_by("program_id", "DESC");
        
        $result = $this->db->get('tbl_program');

        // echo "<pre>";
        // print_r($result->result());
        return $result->result(); 
    }

    public function update_program_img($image_path, $id)
    {
        $update_img  = array(
            'program_photo' => $image_path
        );

        $this->db->where('program_id', $id);
        $this->db->update('tbl_program', $update_img);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function total_programs()
    {
        $query = $this->db->get('tbl_program');
        if($query->num_rows() > 0)  
        {  
            $re = $query->num_rows();
              // echo "<pre>";
              // print_r($query->num_rows());
            return  $re;
        }  
        else  
        {  
            return false;  
        } 
    }

    public function change_Program_delete($program_id)
    {
        $this -> db -> where('program_id', $program_id);
        $this -> db -> delete('tbl_program');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    } 


    public function edit_profile_model($id ,$admin_full_name, $admin_email, $admin_city, $admin_phone )
    {
        $data  = array(
            'full_name' => $admin_full_name,
            'user_email' => $admin_email,
            'user_city' => $admin_city,
            'user_phone' => $admin_phone

        );

        $this->db->where('user_id', $id);
        $this->db->update('tbl_user_reg', $data);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
}