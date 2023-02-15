
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

$sql = "INSERT INTO JobSeekers (Firstname, Lastname, Email, Password, Address, DateOfBirth, Gender ) 
       VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[pwd]','$_POST[address]','$_POST[date]','$_POST[gender]')";

if (mysqli_query($conn, $sql)) {
    echo "Registration created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>