<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rakkun_shop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn -> set_charset("utf8");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT book_id, book_name, book_type, book_detail, link_book, price_book, local_pic_book FROM book_store";
$result = $conn->query($sql);

?>