<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/bootstrap.min.css">
</head>
<body>
<div class="col-md-6 col-md-offset-3">
      <span class="text-danger"><?php echo form_error ('title');?></span>
      <span class="text-danger"><?php echo form_error ('description');?></span>
      <span class="text-danger"><?php echo form_error ('pub_date');?></span>

	<form id="addemp_form" class="form-horizontal" method="POST" action="<?php echo base_url();?>/index.php/admin/add_notice">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Notice Form</h4>
      </div>
  	  <div class="form-group">
		    <label for="title" class="col-sm-2 control-label">Title</label>
		    <div class="col-sm-10">
		      <input type="text" name="title" class="form-control" placeholder="title">
		    </div>
	  </div>
	  <div class="form-group">
		    <label for="description" class="col-sm-2 control-label">Description</label>
		    <div class="col-sm-10">
		      <textarea name="description" class="form-control">enter notice description</textarea>
		    </div>
	  </div>
	   <div class="form-group">
		    <label for="pub_date" class="col-sm-2 control-label">Published Date</label>
		    <div class="col-sm-10">
		      <input type="text" name="pub_date" class="form-control" placeholder="2016/01/01">
		    </div>
	  </div>
     <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <input type="submit" name="btnaddnote" class="btn btn-primary" value="Add">
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