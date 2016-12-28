<!DOCTYPE html>
<html>
    <head>
        <title>Employee Dashboard</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/screen.css">
<!--         <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
 -->
    </head>
    <body>
         <nav><h3>WELCOME TO EMPLOYEE DASHBOARD</h3></nav>

    <div class="container">
        <div class="employee-wrapper">
            <div class="col-md-6 col-sm-12 col-lg-3 col-xs-12">
                <div class="profile-sidebar">
                      <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                      <div class="profile-usertitle-name">
                        <?php echo $raw[0]['username'];?>
                       
                      </div>
                      <div class="profile-department">
                        Department: <?php echo $raw[0]['department'];?>                      
                      </div>
                      <div class="profile-usertitle-job">
                        Position: <?php echo $raw[0]['position'];?>                      
                      </div>
                    </div>
                    <div class="profile-usermenu">
                    	<!-- Starting of nav -->
                        <ul class="nav">
                            <li class="active">
                              <a href="<?php echo base_url();?>/index.php/login_emp/dashboard"> Home </a>
                            </li>
                            <li>    
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#znajomi">
                                      Attendance
                                    </a>
                                  </h4>
                                </div>
                                <div id="znajomi" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <a href="<?php echo base_url();?>/index.php/attend_emp/view_attendrecord/<?php echo $raw[0]['emp_id'];?>">View Attendace Record</a>
                                    </div>
                                    <div class="panel-body">
                                        <a href="<?php echo base_url();?>/index.php/login_emp/attendance">Add Attendance</a>
                                    </div>
                                </div>
                            </li>
                            <li>    
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#leave">
                                      Leave 
                                    </a>
                                  </h4>
                                </div>
                                <div id="leave" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <a href="<?php echo base_url();?>/index.php/attend_emp/view_leave/<?php echo $raw[0]['emp_id'];?>">View Leave record</a>
                                    </div>
                                    <div class="panel-body">
                                        <a href="<?php echo base_url();?>/index.php/login_emp/leave">Take a leave</a>
                                    </div>
                                </div>
                            </li>
                             <li>    
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#notice">
                                      Notice 
                                    </a>
                                  </h4>
                                </div>
                                <div id="notice" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <a href="<?php echo base_url();?>/index.php/attend_emp/view_notice">View Notice</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- End of nav -->
                    </div>
              </div>
            </div>
            <!-- STARTING OF ATTENDANCE FORM -->
            <div class="col-md-6 ">
			    <form id="addemp_form" class="form-horizontal" method="POST" action="<?php echo base_url();?>/index.php/attend_emp/attend_employee">
			       <span class="text-danger"><?php echo form_error ('date');?></span>
			       <span class="text-danger"><?php echo form_error ('time');?></span>
              <span class="text-danger"><?php echo form_error ('status');?></span>

			       <div class="modal-header">
			          <h4 class="modal-title" id="myModalLabel">Attendance Section</h4>
			       </div>
               <div class="form-group">
              <label for="id" class="col-sm-2 control-label">ID</label>
              <div class="col-sm-10">
                 <input type="text" name="id" class="form-control" value="<?php echo $raw[0]['emp_id'];?>" readonly>
              </div>
           </div>
           <div class="form-group">
              <label for="username" class="col-sm-2 control-label">Username</label>
              <div class="col-sm-10">
                 <input type="text" name="username" class="form-control" value="<?php echo $raw[0]['username'];?>" readonly>
              </div>
           </div>
            <div class="form-group">
              <label for="department" class="col-sm-2 control-label">Department</label>
              <div class="col-sm-10">
                 <input type="text" name="department" class="form-control" value="<?php echo $raw[0]['department'];?>" readonly>
              </div>
           </div>
            <div class="form-group">
              <label for="position" class="col-sm-2 control-label">Position</label>
              <div class="col-sm-10">
                 <input type="text" name="position" class="form-control" value="<?php echo $raw[0]['position'];?>" readonly>
              </div>
           </div>
           <div class="form-group">
              <label for="date" class="col-sm-2 control-label">Attendance Date</label>
              <div class="col-sm-10">
                 <input type="text" name="date" class="form-control" placeholder="2000/01/01">
              </div>
           </div>
            <div class="form-group">
              <label for="time" class="col-sm-2 control-label">Entrance Time</label>
              <div class="col-sm-10">
                 <input type="text" name="time" class="form-control" placeholder="time">
              </div>
           </div>

             <div class="form-group">
              <div class="col-sm-10">
                <input type="checkbox" name="status" value="1">Present<br>
              </div>
             </div>
              <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <input type="submit" name="btnattend" class="btn btn-primary" value="Submit">
        </div>
     </div>
              <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
			       <button class="btn btntn-primary" type="reset" value="Reset">Reset</button>
              </div>
              </div>
			    </form>
		</div>
		<!-- ENDING OF ATTENDANCE FORM -->
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url();?>js/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    </body>
</html>