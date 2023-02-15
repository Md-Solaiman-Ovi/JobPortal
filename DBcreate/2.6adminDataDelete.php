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

$username = $_POST['username'];
$email = $_POST['email'];


// sql to delete a record
$sql = "DELETE FROM adminEmployer WHERE Username='$username' && Email='$email' ";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
