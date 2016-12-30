<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style.css">
</head>
<body>
  <div class="container">
    <div class="row">
<div class="col-md-12">
  <div class="login-page">
      <span class="text-danger"><?php echo form_error ('username');?></span>
      <span class="text-danger"><?php echo form_error ('password');?></span>
    <form id="addemp_form" class="form-horizontal" method="POST" action="<?php echo base_url();?>/index.php/admin/admin_login">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Admin Sign In</h4>
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
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" name="btnsignin" class="btn btn-primary" value="Sign In">
    </div>
  </div>
  </div>
</div>
    </div>
  </div>
</form>
</form>
</div>
</div>
</body>
</html>