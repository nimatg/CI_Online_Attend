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
			<th>Notice ID</th>
			<th>Notice Title</th>
			<th>Notice Description</th>
			<th>Published Date</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach ($notices as $notice) 
{
	?>
		<tr>
			<td><?php echo $notice->not_id;?></td>
			<td><?php echo $notice->not_title;?></td>
			<td><?php echo $notice->not_description;?></td>
			<td><?php echo $notice->not_date;?></td>
			<td>
				<a href="<?php echo base_url(); ?>index.php/admin/delete_notice/<?php echo $notice->not_id?>">Delete
				</a>
				<a href="<?php echo base_url(); ?>index.php/admin/update_notice/<?php echo $notice->not_id?>">Edit</a>
			</td>
		</tr>
		<?php } 
		?>
	</tbody>
		</table>
</body>
</html>