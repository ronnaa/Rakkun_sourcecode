<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rakkun_shop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE book_store (
book_id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
book_name VARCHAR(255) NOT NULL,
book_type VARCHAR(255) NOT NULL,
book_detail VARCHAR(255) NOT NULL,
link_book VARCHAR(300) NOT NULL,
price_book INT(3) NOT NULL,
local_pic_book VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>