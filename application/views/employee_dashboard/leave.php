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
            <!-- STARTING OF LEAVE FORM -->
            <div class="col-md-6 ">
			    <form id="addemp_form" class="form-horizontal" method="POST" action="<?php echo base_url();?>/index.php/attend_emp/take_leave">
			       <span class="text-danger"><?php echo form_error ('fromdate');?></span>
			       <span class="text-danger"><?php echo form_error ('todate');?></span>
              <span class="text-danger"><?php echo form_error ('title');?></span>
              <span class="text-danger"><?php echo form_error ('description');?></span>

			       <div class="modal-header">
			          <h4 class="modal-title" id="myModalLabel">Leave Section</h4>
			       </div>
               <div class="form-group">
              <label for="id" class="col-sm-2 control-label">ID</label>
              <div class="col-sm-10">
                 <input type="text" name="id" class="form-control" value="<?php echo $leave[0]['emp_id'];?>" readonly>
              </div>
           </div>
           <div class="form-group">
              <label for="fromdate" class="col-sm-2 control-label">Leave Date(From)</label>
              <div class="col-sm-10">
                 <input type="text" name="fromdate" class="form-control">
              </div>
           </div>
            <div class="form-group">
              <label for="todate" class="col-sm-2 control-label">Leave Date(To)</label>
              <div class="col-sm-10">
                 <input type="text" name="todate" class="form-control">
              </div>
           </div>
            <div class="form-group">
              <label for="title" class="col-sm-2 control-label">Title for leave</label>
              <div class="col-sm-10">
                 <input type="text" name="title" class="form-control">
              </div>
           </div>
           <div class="form-group">
        <label for="description" class="col-sm-2 control-label">Description</label>
        <div class="col-sm-10">
          <textarea name="description" class="form-control">enter leave description</textarea>
        </div>
          </div>
              <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <input type="submit" name="btnleave" class="btn btn-primary" value="Submit">
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