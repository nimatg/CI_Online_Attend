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
			<th>Leave Date(From)</th>
			<th>Leave Date(To)</th>
			<th>Title</th>
			<th>Description</th>

		</tr>
	</thead>
	<tbody>
	<?php
	foreach ($leaves as $leave) 
{
	?>
		<tr>
			<td><?php echo $leave->emp_id;?></td>
			<td><?php echo $leave->leavestart_date;?></td>
			<td><?php echo $leave->leaveend_date;?></td>
			<td><?php echo $leave->leave_title;?></td>
			<td><?php echo $leave->leave_desc;?></td>

			
		</tr>
		<?php } 
		?>
	</tbody>
		</table>
</body>
</html>