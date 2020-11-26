<?php 
	header('Content-Type: application/json');
	require('lib/dbcon.php');
	$id = $_POST['id'];
	$query = mysqli_query(dbcon(), "select * from stdevice where dev_id = '".$id."'")or die(mysqli_error());
	$count = mysqli_num_rows($query);

	echo json_encode($count);

?>