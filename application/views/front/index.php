<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
</head>
<body>
<div class="col-md-6 col-md-offset-3">
    <form action="<?php echo base_url();?>index.php/admin/admin" >
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" class="btn btn-primary" value="Admin login">
            </div>
          </div>
    </form>
    <form id="addemp_form" class="form-horizontal" method="POST" action="<?php echo base_url();?>/index.php/login_emp/login_user">
      <span class="text-danger"><?php echo form_error ('username');?></span>
      <span class="text-danger"><?php echo form_error ('password');?></span>
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Employee Login</h4>
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
    <button class="btn btn-primary" type="submit" name="submit">Login</button>
</form>
</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
</body>
</html>