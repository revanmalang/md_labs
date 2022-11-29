<?php 


// PLEASE DONT REMOVE THIS 

// Code By : Justakazh 
// Github  : https://github.com/justakazh

// RESPECT FOR CODER :)


include "../config.php";

if (isset($_POST['submit'])) {
	$comment = $_POST["comment"];
	$q = mysqli_query($conn, "INSERT INTO `comment` (`id`, `comment_text`) VALUES (NULL, '$comment')");
	if ($q) {
		echo "<script>alert('your comment has been saved!')</script>";
		header("Location: index.php");
	}
	else{
		echo "<script>alert('Error to save your comment!')</script>";
	}

}

if (isset($_POST['reset'])) {
	$q = mysqli_query($conn, "DELETE FROM `comment` ");
	header("Location: index.php");
	
}




 ?>