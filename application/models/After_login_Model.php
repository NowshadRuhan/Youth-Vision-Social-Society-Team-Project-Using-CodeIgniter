<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class After_login_Model extends CI_Model{


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




