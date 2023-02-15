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


// sql to delete a record
$sql = "DELETE FROM Job WHERE Jobname='$jobname' && Vacancy='$vacancy'  ";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
