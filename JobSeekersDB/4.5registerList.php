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

$sql = "SELECT * FROM JobSeekers";
$result = mysqli_query($conn, $sql);

echo "<table border='1' >";
echo "<tr>";
echo "<th >Firstname</th><th>Lastname</th><th>Email</th><th>Password</th><th>Address</th><th>DateOfBirth</th><th>Gender</th>";
echo "</tr>";


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
			echo "<td>" . $row['Firstname'] . "</td>";
			echo "<td>" . $row['Lastname'] . "</td>";
			echo "<td>" . $row['Email'] . "</td>";
			echo "<td>" . $row['Password'] . "</td>";
			echo "<td>" . $row['Address'] . "</td>";
			echo "<td>" . $row['DateOfBirth'] . "</td>";
			echo "<td>" . $row['Gender'] . "</td>";
			echo "</tr>";

    }
} else {
    echo "0 results";
}

echo "</table>";
mysqli_close($conn);
?>
