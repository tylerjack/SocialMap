<?php 

	$conn = mysqli_connect("", "", "", "");

	if(!$conn){
		die("Conneciton failed: ".mysqli_connect_error());
	}
?>