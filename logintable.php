<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nike";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "CREATE TABLE login (
id INT(255) AUTO_INCREMENT PRIMARY KEY,
Time TIMESTAMP,
mail VARCHAR(255) NOT NULL,
pswd VARCHAR(255) NOT NULL,
FOREIGN KEY(mail) REFERENCES register(mail)

)";
if (mysqli_query($conn, $sql)) {
  echo "Table Login created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>