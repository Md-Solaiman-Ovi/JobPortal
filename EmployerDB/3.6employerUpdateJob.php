<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employerDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$jobname = $_POST['jobname'];
$vacancy = $_POST['vacancy'];




$sql =" UPDATE Job SET Vacancy = '$vacancy'
WHERE Jobname = '$jobname'"
;

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
