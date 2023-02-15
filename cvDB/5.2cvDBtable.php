<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cvDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE cvInfo
(
Candidatename varchar(20) not null,
Jobname varchar(20) not null,
Phone int(20) not null,
File varchar(20) not null

)";
if (mysqli_query($conn, $sql)) {
    echo "Table user created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
