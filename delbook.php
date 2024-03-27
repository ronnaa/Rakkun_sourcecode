<html>
<body>
<?php include('connect.php');

$del_id = $_POST['del_book'];

$sql = "DELETE FROM book_store WHERE book_id=$del_id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

?>
    <form action="admin_showbook.php" method="post">
      <input type="submit" value="Show Book">
    </form>
    
</body>
</html>