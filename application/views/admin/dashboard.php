<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/bootstrap.min.css ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style.css?>">

</head>
<body>

            <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="<?php echo base_url();?>index.php/admin/logout">&nbsp &nbsp &nbsp logout</a>
                </li>
                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-plus"></i> Employee <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url();?>/index.php/admin/employee_list">Employee List</a></li>
                    <li><a href="<?php echo base_url();?>/index.php/admin/employee">Add Employee</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-plus"></i> Attendance <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url();?>/index.php/admin/attendance_list">Attendance Record</a></li>
                  </ul>
                </li>
                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-plus"></i> Leave <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url();?>/index.php/admin/list_leave">Leave Record</a></li>
                  </ul>
                </li>
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-plus"></i> Notice <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url();?>/index.php/admin/notice_view">View Notice</a></li>
                    <li><a href="<?php echo base_url();?>/index.php/admin/notice">Add Notice</a></li>

                  </ul>
                </li>
                
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

       
    <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                      <div class="nav">
                        <div class="link-button1">
                            <h4><a href="#">Add/Edit Employee</a></h4>
                        </div>
                        <div class="link-button1">
                            <h4><a href="#">View/Edit Attendance</a></h4>
                        </div>
                        <div class="link-button1">
                            <h4><a href="#">View/Edit Leave Record</a></h4>
                        </div>
                          <div class="link-button1">
                            <h4><a href="#">View/Edit Notice</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>

    <!-- /#wrapper -->
    <hr>
    <div class="">
    <h3>Gps Setting</h3>
     <form id="gps_form" class="form-horizontal" method="POST" action="<?php echo base_url();?>/index.php/admin/insert_gps">
    <div class="form-group col-md-6">
         <label for="patientaddress">Click the inpu field below to set the office gps location</label>
         <input type="text" class="form-control" name="gp1" placeholder="Click here" onfocus="getLocation()" id="lattitude"> <br>
         <input type="text" class="form-control" name="gp2" placeholder="longitude" onfocus="getLocation()" id="longitude">
    </div>    
<script>
var x = document.getElementById("lattitude");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {
    var latt=position.coords.latitude;
    var long= position.coords.longitude;
    document.getElementById('lattitude').value = latt;
    document.getElementById('longitude').value = long;
}
</script>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/sidenav.js"></script>

</html>