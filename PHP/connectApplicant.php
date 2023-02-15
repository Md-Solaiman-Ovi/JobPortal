<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobSeekersDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST['email'];
$pass = $_POST['pwd'];


$sql = "SELECT * FROM JobSeekers where Email = '$email' && Password = '$pass' ";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if($num == 1){
	
	header('location:../apply.html');
}else{
	echo " login failed";
	//header('location:LOGIN.html');
}




mysqli_close($conn);
?>
