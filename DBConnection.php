<?php 

	$server="localhost";
	$user="root";
	$password="";
	$database="bao";
	// $server="sql6.freemysqlhosting.net:3306";
	// $user="sql6486454";
	// $password="";
	// $database="sql6486454";
	$conn = mysqli_connect($server,$user,$password,$database);
	mysqli_query($conn,'set names "utf8"');

?>