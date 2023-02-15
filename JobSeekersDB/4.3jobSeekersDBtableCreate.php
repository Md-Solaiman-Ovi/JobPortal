
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

// sql to create table
$sql = "CREATE TABLE JobSeekers
(
Firstname varchar(30) not null,
Lastname varchar(30) not null,
Email varchar(30) not null,
Password varchar(30) not null,
Address varchar(30) not null,
DateOfBirth varchar(30) not null,
Gender varchar(30) not null




)";
if (mysqli_query($conn, $sql)) {
    echo "Table user created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
