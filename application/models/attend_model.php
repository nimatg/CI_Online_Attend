<?php
class attend_model extends CI_Model {
	public function __construct() {	
        parent::__construct();
        $this->load->database();
        
    }

    public function attend_employee($attenddata) 
    {
        $insert = $this->db->insert('attendance_db', $attenddata);
		return $insert;
    }
    public function getAllnote()
        {
            $query= "SELECT * FROM notice_db";
            $get  = $this->db->query($query);
            return $get->result();
        }
	public function getAllattendrecord($id)
	        {
	            $query= "SELECT * FROM attendance_db WHERE emp_id='$id'";
	            $get  = $this->db->query($query);
	            return $get->result();
	        }
    public function leave_employee($leavedata) 
        {
            $insert = $this->db->insert('leave_db', $leavedata);
            return $insert;
        }
    public function getAllleaverecord($id)
            {
                $query= "SELECT * FROM leave_db WHERE emp_id='$id'";
                $get  = $this->db->query($query);
                return $get->result();
            }
}