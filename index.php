<?php include_once("connection.php");?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</head>
<body>
	<div class="desk">
		<div class="desk-heading">
			<h1 style="text-align: center;"> Attendance Management System</h1>
		</div>
	</div>
<div class="desk-body">
	<a href="#" class="btn btn-primary">View</a>
	<a href="#" class="btn btn-primary pull-right">Add</a>

	<table class="table">
		<thead>
			<tr>
				<td>stident_name</td>
				<td>DOB</td>
				<td>GEnder</td>
				<td>Email</td>
				<td>Phone</td>
				<td>Address</td>
				<td>Session</td>
				<td>Program</td>
				<td>Semester</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>
					Update<input type="radio" name="action[]" value="Update">
					Delete<input type="radio" name="action[]" value="Delete">
				</td>
			</tr>
		</tbody>
	</table>
	
</div>
</body>
</html>