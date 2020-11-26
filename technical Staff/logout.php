<?php
include('../admin/lib/dbcon.php');
dbcon(); 
include('session.php');

$oras = strtotime("now");
$ora = date("Y-m-d",$oras);										
mysqli_query(dbcon(), "update user_log set
logout_Date = '$ora'												
where client_id = '$session_id' ")or die(mysqli_error());

session_destroy();
header('location:../index.php'); 
?>