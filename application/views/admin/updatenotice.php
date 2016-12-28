<!DOCTYPE html>
<html>
<head>
	<title>Update Notice</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/bootstrap.min.css">
</head>
<body>

<div class="col-md-6 col-md-offset-3">
      <!-- <span class="text-danger"><?php echo form_error ('firstname');?></span>
      <span class="text-danger"><?php echo form_error ('lastname');?></span>
      <span class="text-danger"><?php echo form_error ('username');?></span>
      <span class="text-danger"><?php echo form_error ('password');?></span>
      <span class="text-danger"><?php echo form_error ('gender');?></span>
      <span class="text-danger"><?php echo form_error ('phoneno');?></span>
      <span class="text-danger"><?php echo form_error ('email');?></span>
      <span class="text-danger"><?php echo form_error ('department');?></span>
      <span class="text-danger"><?php echo form_error ('position');?></span> -->
<?php
          foreach ($infos as $info)
          {
          ?>
	<form id="addemp_form" class="form-horizontal" method="POST" action="<?php echo base_url();?>/index.php/admin/edit_notice">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Update Notice</h4>
      </div>
       <div class="form-group">
	      <label for="ID" class="col-sm-2 control-label">ID</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control" name="id" value="<?php echo $info->not_id;?>" readonly>
	      </div>
  		</div>
  	  <div class="form-group">
		    <label for="title" class="col-sm-2 control-label">Title</label>
		    <div class="col-sm-10">
		      <input type="text" name="title" class="form-control" value="<?php echo $info->not_title;?>">
		    </div>
	  </div>
	  <div class="form-group">
		    <label for="description" class="col-sm-2 control-label">Description</label>
		    <div class="col-sm-10">
		      <textarea name="description" class="form-control"><?php echo $info->not_description;?></textarea>
		    </div>
	  </div>
	   <div class="form-group">
		    <label for="pub_date" class="col-sm-2 control-label">Published Date</label>
		    <div class="col-sm-10">
		      <input type="text" name="pub_date" class="form-control" value="<?php echo $info->not_date;?>">
		    </div>
	  </div>
     <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <input type="submit" name="btneditnote" class="btn btn-primary" value="Update">
		    </div>
     </div>
</form>
<?php
}
?>

</div>
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/sidenav.js"></script>
</html>