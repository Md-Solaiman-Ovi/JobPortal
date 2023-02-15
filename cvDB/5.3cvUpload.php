
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

$sql = "INSERT INTO cvInfo (Candidatename, Jobname, Phone, File ) 
       VALUES ('$_POST[name]','$_POST[job]','$_POST[phone]','$_POST[file]')";

if (mysqli_query($conn, $sql)) {
    echo "Aplication Submitted successfully ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>