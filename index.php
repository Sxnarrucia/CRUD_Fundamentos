<?php
$servername = "localhost";
$username = "sxnarrucia";
$password = "Fundamentos1!";
$dbname = "CRUD_Sistemas";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM Usuarios";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["ID"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>