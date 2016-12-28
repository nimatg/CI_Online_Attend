<!DOCTYPE html>
<html>
<head>
	<title>note list</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
	</head>
<body>
	  
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Note ID</th>
			<th>Note Title</th>
			<th>Note Description</th>
			<th>Published Date</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach ($notes as $note) 
{
	?>
		<tr>
			<td><?php echo $note->not_id;?></td>
			<td><?php echo $note->not_title;?></td>
			<td><?php echo $note->not_description;?></td>
			<td><?php echo $note->not_date;?></td>
		</tr>
		<?php } 
		?>
	</tbody>
		</table>
</body>
</html>