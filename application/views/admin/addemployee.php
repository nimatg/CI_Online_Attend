<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/bootstrap.min.css">
</head>
<body>
<div class="col-md-6 col-md-offset-3">
      <span class="text-danger"><?php echo form_error ('firstname');?></span>
      <span class="text-danger"><?php echo form_error ('lastname');?></span>
      <span class="text-danger"><?php echo form_error ('username');?></span>
      <span class="text-danger"><?php echo form_error ('password');?></span>
      <span class="text-danger"><?php echo form_error ('gender');?></span>
      <span class="text-danger"><?php echo form_error ('phoneno');?></span>
      <span class="text-danger"><?php echo form_error ('email');?></span>
      <span class="text-danger"><?php echo form_error ('department');?></span>
      <span class="text-danger"><?php echo form_error ('position');?></span>

	<form id="addemp_form" class="form-horizontal" method="POST" action="<?php echo base_url();?>/index.php/admin/add_employee">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Employee Form</h4>
      </div>
  	  <div class="form-group">
		    <label for="firstname" class="col-sm-2 control-label">First Name</label>
		    <div class="col-sm-10">
		      <input type="text" name="firstname" class="form-control" placeholder="firstname">
		    </div>
	  </div>
	  <div class="form-group">
		    <label for="lastname" class="col-sm-2 control-label">Last Name</label>
		    <div class="col-sm-10">
		      <input type="text" name="lastname" class="form-control" placeholder="lastname">
		    </div>
	  </div>
	  <div class="form-group">
		    <label for="username" class="col-sm-2 control-label">Username</label>
		    <div class="col-sm-10">
		      <input type="text" name="username" class="form-control" placeholder="username">
		    </div>
	  </div>
     <div class="form-group">
		    <label for="password" class="col-sm-2 control-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" name="password" class="form-control" placeholder="password">
		    </div>
	 </div>
	 <div class="form-group">
		    <label for="gender" class="col-sm-2 control-label">Gender</label>
		    <div class="col-sm-10">
		      <input type="text" name="gender" class="form-control" placeholder="gender">
		    </div>
	  </div>
	  <div class="form-group">
		    <label for="phoneno" class="col-sm-2 control-label">Phone No.</label>
		    <div class="col-sm-10">
		      <input type="text" name="phoneno" class="form-control" placeholder="phoneno">
		    </div>
	  </div>
     <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" name ="email" id="inputEmail3" placeholder="Email">
		    </div>
     </div>
     <div class="form-group">
		    <label for="department" class="col-sm-2 control-label">Department</label>
		    <div class="col-sm-10">
		      <input type="text" name="department" class="form-control" placeholder="department">
		    </div>
	  </div>
	  <div class="form-group">
		    <label for="position" class="col-sm-2 control-label">Position</label>
		    <div class="col-sm-10">
		      <input type="text" name="position" class="form-control" placeholder="position">
		    </div>
	  </div>
     <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <input type="submit" name="btnaddemp" class="btn btn-primary" value="Add">
		    </div>
     </div>
</form>
</div>
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/sidenav.js"></script>
</html>