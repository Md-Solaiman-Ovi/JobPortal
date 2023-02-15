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

$sql = "SELECT * FROM cvInfo";
$result = mysqli_query($conn, $sql);

echo "<table border='1' >";
echo "<tr>";
echo "<th >Candidatename</th><th>Jobname</th><th>Phone</th><th>File</th>";
echo "</tr>";


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
			echo "<td>" . $row['Candidatename'] . "</td>";
			echo "<td>" . $row['Jobname'] . "</td>";
			echo "<td>" . $row['Phone'] . "</td>";
			echo "<td>" . $row['File'] . "</td>";
			
			echo "</tr>";

    }
} else {
    echo "0 results";
}

echo "</table>";
mysqli_close($conn);
?>
