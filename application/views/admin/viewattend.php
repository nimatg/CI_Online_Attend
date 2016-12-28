<!DOCTYPE html>
<html>
<head>
	<title>Leave Record</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
	</head>
<body>
	  
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Employee ID</th>
			<th>Employee Name</th>
			<th>Gender</th>
			<th>Department</th>
			<th>Position</th>
			<th>Total Present Days</th>
			<th>Action</th>

		</tr>
	</thead>
	<tbody>
	<?php
	foreach ($attends as $attend) 
{
	?>
		<tr>
			<td><?php echo $attend->emp_id;?></td>
			<td><a href="<?php echo base_url();?>/index.php/admin/employee_attend/<?php echo $attend->emp_id;?>"><?php echo $attend->username;?></a></td>
			<td><?php echo $attend->gender;?></td>
			<td><?php echo $attend->department;?></td>
			<td><?php echo $attend->position;?></td>
			<td></td>
			<td>
				<a href="<?php echo base_url(); ?>index.php/admin/delete_attend/<?php echo $attend->emp_id?>">Delete
				</a>
			</td>

			
		</tr>
		<?php } 
		?>
	</tbody>
		</table>
</body>
</html>