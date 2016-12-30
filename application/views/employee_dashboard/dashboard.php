<!DOCTYPE html>
<html>
    <head>
        <title>Employee Dashboard</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">

    </head>
    <body>
<div class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <h3 class="page-title">WELCOME TO EMPLOYEE DASHBOARD</h3>
        </div>
      </div>
    </div>
</div>


    <div class="container-fluid">
        <div class="row profile">
            <div class="col-md-3 col-sm-12 col-lg-3 col-xs-12">
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
                    <!-- END SIDEBAR USER TITLE -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active">
                              <a href="#"> Home </a>
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
                    </div>
              </div>
            </div>
              <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="profile-content">
                        <h4>Employee Details</h4><br>
                        <strong>
                        ID : <?php echo $raw[0]['emp_id'];?><br><br>
                        First Name :<?php echo $raw[0]['firstname'];?><br><br>
                        Last Name :<?php echo $raw[0]['lastname'];?><br><br>
                        Gender :<?php echo $raw[0]['gender'];?><br><br>
                        Phone number :<?php echo $raw[0]['phoneno'];?><br><br>
                        Email :<?php echo $raw[0]['email'];?><br>
                        </strong>
                    </div>
              </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url();?>employee/js/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url();?>employee/js/bootstrap.min.js"></script>
    </body>
</html>