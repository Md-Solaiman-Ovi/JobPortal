<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adminDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST['email'];
$pass = $_POST['pwd'];


$sql = "SELECT * FROM adminEmployer where Email = 'admin@gmail.com' && Password = '$pass' ";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if($num == 1){
	header('location:../2.1adminPage.html');
}else{
	echo " login failed";
	//header('location:LOGIN.html');
}




mysqli_close($conn);
?>
