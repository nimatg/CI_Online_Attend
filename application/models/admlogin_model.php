<?php

class admlogin_model extends CI_Model {
	function login($input) {
        $username = $input['username'];
        $password = $input['password'];

        $query = $this->db->query("SELECT * FROM admin_db WHERE username='$username' AND password='$password'");
        $data = $query->row();
        if (count($data) > 0) {
            return $data;
        } else {
            return false;
        }
    }

    public function employee_add($data)
        {
            $insert =$this->db->insert('employee_db', $data);
            return $insert;
        }

    public function getAllemployee()
    {
        $query= "SELECT * FROM employee_db";
        $get  = $this->db->query($query);
        return $get->result();
    }
    public function deleteEmployee($id)
    {
        $query= "DELETE FROM employee_db WHERE emp_id='$id'";
        $delete = $this->db->query($query);
        return $delete;
    }
    public function getEmployee($id)
    {
        $query= "SELECT * FROM employee_db WHERE emp_id='$id'";
        $getemployee  =$this->db->query($query);
        return $getemployee->result();
    }
    public function getUemployee($id, $firstname, $lastname, $username, $password, $gender, $phoneno, $email, $department, $position)
    {
        $query= "UPDATE employee_db SET firstname='$firstname', lastname='$lastname', username='$username', password='$password', gender='$gender', phoneno='$phoneno', email='$email', department='$department', position='$position'
        WHERE emp_id='$id'";
        $update= $this->db->query($query);
        return $update;
    }
    public function notice_add($noticedata)
        {
            $insert =$this->db->insert('notice_db', $noticedata);
            return $insert;
        }
    public function getAllnotice()
        {
            $query= "SELECT * FROM notice_db";
            $get  = $this->db->query($query);
            return $get->result();
        }
    public function deleteNotice($id)
        {
            $query= "DELETE FROM notice_db WHERE not_id='$id'";
            $delete = $this->db->query($query);
            return $delete;
        }
    public function getNotice($id)
        {
            $query= "SELECT * FROM notice_db WHERE not_id='$id'";
            $getemployee  =$this->db->query($query);
            return $getemployee->result();
        }
    public function getUnotice($id, $title, $description, $pub_date)
    {
        $query= "UPDATE notice_db SET not_title='$title', not_description='$description', not_date='$pub_date'
        WHERE not_id='$id'";
        $update= $this->db->query($query);
        return $update;
    }
    public function getAllleave()
            {
                $query= "SELECT * FROM leave_db";
                $get  = $this->db->query($query);
                return $get->result();
            }
    public function deleteLeave($id)
        {
            $query= "DELETE FROM leave_db WHERE leave_id='$id'";
            $delete = $this->db->query($query);
            return $delete;
        }
    public function getLeave($id)
        {
            $query= "SELECT * FROM leave_db WHERE emp_id='$id'";
            $getemployee  =$this->db->query($query);
            return $getemployee->result();
        }
    public function getULeave($id, $fromdate, $todate, $title, $description)
        {
            $query= "UPDATE leave_db SET leavestart_date='$fromdate', leaveend_date='$todate', leave_title='$title', leave_desc='$description'
            WHERE emp_id='$id'";
            $update= $this->db->query($query);
            return $update;
        }
    public function getAllattend()
            {
                // $query= "SELECT * FROM employee_db";
                $query= "SELECT e.emp_id, e.username, e.gender, e.department, e.position, a.date, a.ent_time, a.status FROM employee_db e, attendance_db a WHERE e.emp_id=a.emp_id";
                $get  = $this->db->query($query);
                return $get->result();
                print_r(result());
            }
    public function deleteAttend($id)
        {
            $query= "DELETE FROM attendance_db WHERE emp_id='$id'";
            $delete = $this->db->query($query);
            return $delete;
        }
    public function getAllemploys($id)
        {
            $query= "SELECT * FROM attendance_db WHERE emp_id='$id'";
            $get  = $this->db->query($query);
            return $get->result();
        }
    public function deleteempattend($id)
        {
            $query= "DELETE FROM attendance_db WHERE at_id='$id'";
            $delete = $this->db->query($query);
            return $delete;
        }
}