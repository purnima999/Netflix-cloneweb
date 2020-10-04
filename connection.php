<?php
$con= mysqli_connect('localhost','root','root','dbattendance')
if (mysqli_connect_errno()) {
	echo "failed to connect database" . mysqli_connect_error();

	# code...
}
?>