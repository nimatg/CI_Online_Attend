<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_emp extends CI_controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('emplogin_model');
	}

	public function index()
	{
		$this->load->view('front/index');	
	}

	function login_user(){
    if($_POST){
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('front/index');
            } else {
                $input = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password'),
                );
                $res = $this->emplogin_model->login($input);
              
                  if ($res) {
                      $sess_data = array(
                          'username' => $res->username,
                          'id' => $res->emp_id,
                          'loggedIn' => 1
                      );
                      $this->session->set_userdata('userdata', $sess_data);
                      redirect('login_emp/dashboard');
                      // $this->load->view('employee_dashboard/dashboard');
                  } else {

                      echo "Login Unsuccessfull";
                 }
        }
    }else{
        
       $this->load->view('front/index');
    }
}

  public function dashboard(){
    $client_sess=$this->session->userdata('userdata');
    $id=$client_sess['id'];
    
    $data['raw'] = $this->emplogin_model->getSingleEmployee($id);
    $data['title']="Employee Dashboard";
  
    $this->load->view('employee_dashboard/dashboard', $data); 
  }

  public function attendance(){
    $client_sess=$this->session->userdata('userdata');
    $id=$client_sess['id'];
   
    $data['raw'] = $this->emplogin_model->getSingleEmployee($id);
    $data['title']="Attendance Dashboard";
    
    $this->load->view('employee_dashboard/attendance', $data);
} 
  public function leave(){
    $client_sess=$this->session->userdata('userdata');
    $id=$client_sess['id'];
   
    $data['leave'] = $this->emplogin_model->getSingleEmployee($id);
    $data['title']="Leave Dashboard";
    
    $this->load->view('employee_dashboard/leave', $data);
}


}