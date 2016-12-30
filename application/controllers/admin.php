<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model('admlogin_model');
    $this->load->library('session');
        
	}

	public function index()
	{
		$this->load->view('front/index');
	}

	public function admin()
	{
		$this->load->view('admin/adminsignin');
	}

		function admin_login(){
    if($_POST){
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/adminsignin');
            } else {
                $input = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password'),
                );
                $res = $this->admlogin_model->login($input);
              
                  if ($res) {
                      redirect('admin/dashboard');
                      // $this->load->view('employee_dashboard/dashboard');
                  } else {

                      echo "Login Unsuccessfull";
                 }
        }
    }else{
        
       $this->load->view('login_emp/dashboard');
    }
}
function checkLogin() {
        if ($this->session->userdata('loggedin') != true) {
            redirect('admin/admin');
        }
    }
  function logout(){
        // session_start();
        session_destroy();
        $this->session->set_flashdata('error','Logged out');
        echo"Sussfully Logged out";
    }
	public function dashboard()
	{
    $this->checkLogin();
		$this->load->view('admin/dashboard');
	}

  public function employee()
  {
    $this->load->view('admin/addemployee');
  }

  public function add_employee()
  {
  if($_POST){
    $this->form_validation->set_rules('firstname', 'firstname', 'required');
    $this->form_validation->set_rules('lastname', 'lastname', 'required');
    $this->form_validation->set_rules('username', 'username', 'required');
    $this->form_validation->set_rules('password', 'password', 'required');
    $this->form_validation->set_rules('gender', 'gender', 'required');
    $this->form_validation->set_rules('phoneno', 'phoneno', 'required');
    $this->form_validation->set_rules('email', 'email', 'required');
    $this->form_validation->set_rules('department', 'department', 'required');
    $this->form_validation->set_rules('position', 'position', 'required');

    if($this->input->post('btnaddemp'))
    {
      if($this->form_validation->run()==false)
        {
        $this->load->view('admin/addemployee');
    
        }
        else
        {
          $data = array(
          'firstname' =>$this->input-> post('firstname'),
          'lastname' =>$this->input-> post('lastname'),
          'username' =>$this->input-> post('username'),
          'password' =>$this->input-> post('password'),
          'gender' =>$this->input-> post('gender'),
          'phoneno' =>$this->input-> post('phoneno'),
          'email' =>$this->input-> post('email'),
          'department' =>$this->input-> post('department'),
          'position' =>$this->input-> post('position'),
      );
    $insert = $this->admlogin_model->employee_add($data);
    if ($insert)
      {
        redirect('admin/employee_list');
      }
        else{
          echo "Employee is not added";
          } 
        }
    }

  }
  else{
       $this->load->view('admin/employee');
    }
}
  public function employee_list(){
      $data['employees']=$this->admlogin_model->getAllemployee();
      $this->load->view('admin/viewemployee', $data);
  }
  public function delete_employee($id)
  {
    $delete =$this->admlogin_model->deleteEmployee($id);
    if($delete)
    {
      redirect ('admin/employee_list');
    }
    else
    {
      echo "Delete unsuccessful";
    }
  }
  public function update_employee($id)
  {
    $data['workers'] =$this->admlogin_model->getEmployee($id);
    $this->load->view('admin/updateemployee', $data);
  }
  public function edit_employee()
  {
    // if($_POST){
    // $this->form_validation->set_rules('firstname', 'firstname', 'required');
    // $this->form_validation->set_rules('lastname', 'lastname', 'required');
    // $this->form_validation->set_rules('username', 'username', 'required');
    // $this->form_validation->set_rules('password', 'password', 'required');
    // $this->form_validation->set_rules('gender', 'gender', 'required');
    // $this->form_validation->set_rules('phoneno', 'phoneno', 'required');
    // $this->form_validation->set_rules('email', 'email', 'required');
    // $this->form_validation->set_rules('department', 'department', 'required');
    // $this->form_validation->set_rules('position', 'position', 'required');

    $id         = $this->input-> post('id');
    $firstname  = $this->input-> post('firstname');
    $lastname   = $this->input-> post('lastname');
    $username   = $this->input-> post('username');
    $password   = $this->input-> post('password');
    $gender     = $this->input-> post('gender');
    $phoneno    = $this->input-> post('phoneno');
    $email      = $this->input-> post('email');
    $department = $this->input-> post('department');
    $position   = $this->input-> post('position');

    $update= $this->admlogin_model->getUemployee($id, $firstname, $lastname, $username, $password, $gender, $phoneno, $email, $department, $position);
    if($update)
    {
      redirect('admin/employee_list');
    }
    else{
      echo "Update unsuccessful";
    }
  }
  public function notice()
  {
    $this->load->view('admin/notice');
  }
  public function add_notice()  
  {
  if($_POST){
    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('description', 'Description', 'required');
    $this->form_validation->set_rules('pub_date', 'Date', 'required');

    if($this->input->post('btnaddnote'))
    {
      if($this->form_validation->run()==false)
        {
        $this->load->view('admin/notice');
    
        }
        else
        {
          $noticedata = array(
          'not_title' =>$this->input-> post('title'),
          'not_description' =>$this->input-> post('description'),
          'not_date' =>$this->input-> post('pub_date'),
      );
    $insert = $this->admlogin_model->notice_add($noticedata);
    if ($insert)
      {
        redirect ('admin/notice_view');
      }
        else{
          echo "Employee is not added";
          } 
        }
    }

  }
  else{
       $this->load->view('admin/notice');
    }
}
  public function notice_view(){
      $noticedata['notices']=$this->admlogin_model->getAllnotice();
      $this->load->view('admin/viewnotice', $noticedata);
  }
   public function delete_notice($id)
  {
    $delete =$this->admlogin_model->deleteNotice($id);
    if($delete)
    {
      redirect ('admin/notice_view');
    }
    else
    {
      echo "Delete unsuccessful";
    }
  } 
  public function update_notice($id)
  {
    $noticedata['infos'] =$this->admlogin_model->getNotice($id);
    $this->load->view('admin/updatenotice', $noticedata);
  }
  public function edit_notice()
  {
    // if($_POST){
    // $this->form_validation->set_rules('firstname', 'firstname', 'required');
    // $this->form_validation->set_rules('lastname', 'lastname', 'required');
    // $this->form_validation->set_rules('username', 'username', 'required');
    // $this->form_validation->set_rules('password', 'password', 'required');
    // $this->form_validation->set_rules('gender', 'gender', 'required');
    // $this->form_validation->set_rules('phoneno', 'phoneno', 'required');
    // $this->form_validation->set_rules('email', 'email', 'required');
    // $this->form_validation->set_rules('department', 'department', 'required');
    // $this->form_validation->set_rules('position', 'position', 'required');

    $id         = $this->input-> post('id');
    $title  = $this->input-> post('title');
    $description   = $this->input-> post('description');
    $pub_date   = $this->input-> post('pub_date');
  
    $update= $this->admlogin_model->getUnotice($id, $title, $description, $pub_date);
    if($update)
    {
      redirect('admin/notice_view');
    }
    else{
      echo "Update unsuccessful";
    }
  }
  public function list_leave(){
      $dataleave['notices']=$this->admlogin_model->getAllleave();
      $this->load->view('admin/viewleave', $dataleave);
  }
  public function delete_leave($id)
  {
    $delete =$this->admlogin_model->deleteLeave($id);
    if($delete)
    {
      redirect ('admin/list_leave');
    }
    else
    {
      echo "Delete unsuccessful";
    }
  } 
  public function update_leave($id)
  {
    $leaveinfo['informations'] =$this->admlogin_model->getLeave($id);
    $this->load->view('admin/updateleave', $leaveinfo);
  }
  public function edit_leave()
  {
    // if($_POST){
    // $this->form_validation->set_rules('firstname', 'firstname', 'required');
    // $this->form_validation->set_rules('lastname', 'lastname', 'required');
    // $this->form_validation->set_rules('username', 'username', 'required');
    // $this->form_validation->set_rules('password', 'password', 'required');
    // $this->form_validation->set_rules('gender', 'gender', 'required');
    // $this->form_validation->set_rules('phoneno', 'phoneno', 'required');
    // $this->form_validation->set_rules('email', 'email', 'required');
    // $this->form_validation->set_rules('department', 'department', 'required');
    // $this->form_validation->set_rules('position', 'position', 'required');

    $id         = $this->input-> post('emp_id');
    $fromdate  = $this->input-> post('fromdate');
    $todate   = $this->input-> post('todate');
    $title   = $this->input-> post('title');
    $description   = $this->input-> post('description');

    $update= $this->admlogin_model->getULeave($id, $fromdate, $todate, $title, $description);
    if($update)
    {
      redirect('admin/list_leave');
    }
    else{
      echo "Update unsuccessful";
    }
  }
public function attendance_list(){
      $dataattendances['attends']=$this->admlogin_model->getAllattend();
      $this->load->view('admin/viewattend', $dataattendances);
  }

 public function delete_attend($id)
  {
    $delete =$this->admlogin_model->deleteAttend($id);
    if($delete)
    {
      redirect ('admin/attendance_list');
    }
    else
    {
      echo "Delete unsuccessful";
    }
  } 
  public function employee_attend($id){
      $attendemp['employs']=$this->admlogin_model->getAllemploys($id);
      $this->load->view('admin/detailemployee', $attendemp);
  }
  public function delete_empattend($id)
  {
    $delete =$this->admlogin_model->deleteempattend($id);
    if($delete)
    {
      redirect ('admin/attendance_list');
    }
    else
    {
      echo "Delete unsuccessful";
    }
  }  
  public function employee_status($id){
    $status['presents']=$this->admlogin_model->getStatus($id);
      $this->load->view('admin/detailemployee', $attendemp);
  }
  public function insert_gps(){
  If($_POST){
    $data = array(
          'latti' =>$this->input-> post('gp1'),
          'long' =>$this->input-> post('gp2'),
          );
     $insert = $this->admlogin_model->gps_add($data);
     echo "database updated";
  }
// public function gps_show(){
//     $gps['show']=$this->admlogin_model->get_gps();
//       // $this->load->view('admin/dashboard');
//   }
}
}