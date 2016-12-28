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
			<th>Attendance ID</th>
			<th>Attendance Date</th>
			<th>Entrance Time</th>
			<th>Status</th>
			<th>Action</th>



		</tr>
	</thead>
	<tbody>
	<?php
	foreach ($employs as $employ) 
{
	?>
		<tr>
			<td><?php echo $employ->at_id;?></td>
			<td><?php echo $employ->date;?></td>
			<td><?php echo $employ->ent_time;?></td>
			<td><?php 
			$attendace=$employ->ent_time;
			if($attendace=1){
				echo "Present";
			}
			?></td>
			<td>

				<a href="<?php echo base_url();?>/index.php/admin/delete_empattend/<?php echo $employ->at_id;?>">Delete
				</a>
			</td>

			
		</tr>
		<?php } 
		?>
	</tbody>
		</table>
</body>
</html>