
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

// sql to create table
$sql = "CREATE TABLE Job
(
Jobname varchar(30) not null,
Vacancy int(50) not null,
Experience int(50) not null



)";
if (mysqli_query($conn, $sql)) {
    echo "Table user created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
