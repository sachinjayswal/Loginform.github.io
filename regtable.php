<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nike";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "CREATE TABLE register (
fname VARCHAR(255) NOT NULL,
lname VARCHAR(255) NOT NULL,
mail VARCHAR(255) PRIMARY KEY,
pswd VARCHAR(255) NOT NULL,
cpswd VARCHAR(255) NOT NULL

)";
if (mysqli_query($conn, $sql)) {
  echo "Table register created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>