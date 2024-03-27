<html>
<body>
<?php include('connect.php');

$book_name = $_POST['name'];
$book_type = $_POST['type_book'];
$book_detail = $_POST['detial_book'];
$link_book = $_POST['link_book'];
$price_book = $_POST['price_book'];
$local_book = $_POST['local_book'];

$sql = "INSERT INTO book_store (book_name, book_type, book_detail, link_book, price_book, local_pic_book)
VALUES ('$book_name','$book_type','$book_detail','$link_book',$price_book,'$local_book')";

if ($conn->query($sql) === TRUE) {
  echo " Add NewBook  successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>  
    <br>
    <form action="admin_showbook.php" method="post">
      <input type="submit" value="Show Book">
    </form>
</body>
</html>