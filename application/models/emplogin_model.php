<?php

class emplogin_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

	function login($input) {
        $username = $input['username'];
        $password = $input['password'];

        $query = $this->db->query("SELECT * FROM employee_db WHERE username='$username' AND password='$password'");
        $data = $query->row();
        if (count($data) > 0) {
            return $data;
        } else {
            return false;
        }
    }

    public function getSingleEmployee($id){
       $this->db->select('*')->from('employee_db')->where('emp_id=',$id);
       $query = $this->db->get();
      
       
        return $query->result_array();
    }
}