
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

$sql = "INSERT INTO Job (Jobname, Vacancy, Experience) 
       VALUES ('$_POST[jobname]','$_POST[vacancy]','$_POST[exp]')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>