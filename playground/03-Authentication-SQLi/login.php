<?php 

// PLEASE DONT REMOVE THIS 

// Code By : Justakazh 
// Github  : https://github.com/justakazh

// RESPECT FOR CODER :)


session_start();
include '../config.php';

if (isset($_POST['login'])) {
	$user = $_POST['username'];
	$pass = $_POST['password'];

	$q = mysqli_query($conn, "SELECT * FROM `admin` WHERE username = '$user' AND password = '$pass' ");
	$row = mysqli_num_rows($q);
	if ($row) {
		$_SESSION['is_login'] = True;
		header("Location: admin.php");
	}
	else{
		echo "<center><img src='wrong.png'></center><script></script>";
	}


}








 ?>