<!DOCTYPE html>
<html>
<head>
	<title>Employee list</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
	</head>
<body>
	  
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Employee ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Username</th>
			<th>Password</th>
			<th>Gender</th>
			<th>Phone No.</th>
			<th>Email</th>
			<th>Department</th>
			<th>Position</th>
			<th>Action</th>

		</tr>
	</thead>
	<tbody>
			<?php
	foreach ($employees as $employee) 
{
	?>
		<tr>
			<td><?php echo $employee->emp_id;?></td>
			<td><?php echo $employee->firstname;?></td>
			<td><?php echo $employee->lastname;?></td>
			<td><?php echo $employee->username;?></td>
			<td><?php echo $employee->password;?></td>
			<td><?php echo $employee->gender;?></td>
			<td><?php echo $employee->phoneno;?></td>
			<td><?php echo $employee->email;?></td>
			<td><?php echo $employee->department;?></td>
			<td><?php echo $employee->position;?></td>
			<td>
				<a href="<?php echo base_url(); ?>index.php/admin/delete_employee/<?php echo $employee->emp_id?>">Delete
				</a>
				<a href="<?php echo base_url(); ?>index.php/admin/update_employee/<?php echo $employee->emp_id?>">Edit</a>
			</td>
		</tr>
		<?php } 
		?>
	</tbody>
		</table>
</body>
</html>