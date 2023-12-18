<?php

	session_start();

	$host = "localhost";
	$user = "u784684099_cronicle";
	$password = "Croniclespace123";
	$database = "u784684099_users";
	
	$db = mysqli_connect($host, $user, $password, $database);

	$table = $_SESSION["email"];
	$taskId = $_GET['rn'];

	$sqldelete = "DELETE FROM `$table` WHERE `id` = $taskId";

	$querydelete = mysqli_query($db, $sqldelete);

	header("location: https://cronicle.space/dashboard/notes/");

?>