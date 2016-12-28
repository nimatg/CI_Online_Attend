<!DOCTYPE html>
<html>
<head>
	<title>Attendance Record</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
	</head>
<body>
	  
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Employee ID</th>
			<th>Attendance Date</th>
			<th>Entrance Time</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach ($records as $record) 
{
	?>
		<tr>
			<td><?php echo $record->emp_id;?></td>
			<td><?php echo $record->date;?></td>
			<td><?php echo $record->ent_time;?></td>
			<td><?php 
			$att=$record->status;
			if ($att==1) {
				echo "Present";
			}
			?></td>
		</tr>
		<?php } 
		?>
	</tbody>
		</table>
</body>
</html>