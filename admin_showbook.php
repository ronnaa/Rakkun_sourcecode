<html>
<body>
<h1>Rakkun.com Admin</h1>
<h2>Show Book</h2>
    <h3>General Book</h3>
      <?php include('connect.php');
      $sql = "SELECT book_id, book_name, book_type, book_detail, link_book, price_book, local_pic_book FROM book_store WHERE book_type = 'normal'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc()) { ?>

        <table border="1">
          <tbody>

            <tr>
              <td align="center" style="width: 100px;">BookID</td>
              <td align="center" style="width: 100px;">Bookname</td>
              <td align="center" style="width: 100px;">Book Type</td>
              <td align="center" style="width: 100px;">Detail</td>
              <td align="center" style="width: 200px;">Link</td>   
              <td align="center" style="width: 100px;">Price</td>
              <td align="center" style="width: 300px;">Location</td>                          
            </tr>

            <tr>
              <td align="center"><?php echo $row['book_id'];?></td>
              <td align="center"><?php echo $row['book_name'];?></td>
              <td align="center"><?php echo $row['book_type'];?></td>
              <td ><?php echo $row['book_detail'];?></td>
              <td ><?php echo $row['link_book'];?></td>   
              <td align="center"><?php echo $row['price_book'];?></td>
              <td ><?php echo $row['local_pic_book'];?></td> 
            </tr>

          </tbody>
        </table>
        <?php } ?>

<h3>General Book</h3>
      <?php include('connect.php');
      $sql = "SELECT book_id, book_name, book_type, book_detail, link_book, price_book, local_pic_book FROM book_store WHERE book_type = 'lightnovel'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc()) { ?>

        <table border="1">
          <tbody>

            <tr>
              <td align="center" style="width: 100px;">BookID</td>
              <td align="center" style="width: 100px;">Bookname</td>
              <td align="center" style="width: 100px;">Book Type</td>
              <td align="center" style="width: 100px;">Detail</td>
              <td align="center" style="width: 200px;">Link</td>   
              <td align="center" style="width: 100px;">Price</td>
              <td align="center" style="width: 300px;">Location</td>                          
            </tr>

            <tr>
              <td align="center"><?php echo $row['book_id'];?></td>
              <td align="center"><?php echo $row['book_name'];?></td>
              <td align="center"><?php echo $row['book_type'];?></td>
              <td ><?php echo $row['book_detail'];?></td>
              <td ><?php echo $row['link_book'];?></td>   
              <td align="center"><?php echo $row['price_book'];?></td>
              <td ><?php echo $row['local_pic_book'];?></td> 
            </tr>

          </tbody>
        </table>
        <?php } ?>

<h3>Documentary Book</h3>
      <?php include('connect.php');
      $sql = "SELECT book_id, book_name, book_type, book_detail, link_book, price_book, local_pic_book FROM book_store WHERE book_type = 'documentary'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc()) { ?>

        <table border="1">
          <tbody>

            <tr>
              <td align="center" style="width: 100px;">BookID</td>
              <td align="center" style="width: 100px;">Bookname</td>
              <td align="center" style="width: 100px;">Book Type</td>
              <td align="center" style="width: 100px;">Detail</td>
              <td align="center" style="width: 200px;">Link</td>   
              <td align="center" style="width: 100px;">Price</td>
              <td align="center" style="width: 300px;">Location</td>                          
            </tr>

            <tr>
              <td align="center"><?php echo $row['book_id'];?></td>
              <td align="center"><?php echo $row['book_name'];?></td>
              <td align="center"><?php echo $row['book_type'];?></td>
              <td ><?php echo $row['book_detail'];?></td>
              <td ><?php echo $row['link_book'];?></td>   
              <td align="center"><?php echo $row['price_book'];?></td>
              <td ><?php echo $row['local_pic_book'];?></td> 
            </tr>

          </tbody>
        </table>
        <?php } ?>

<h3>Cartoon</h3>
      <?php include('connect.php');
      $sql = "SELECT book_id, book_name, book_type, book_detail, link_book, price_book, local_pic_book FROM book_store WHERE book_type = 'cartoon'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc()) { ?>

        <table border="1">
          <tbody>

            <tr>
              <td align="center" style="width: 100px;">BookID</td>
              <td align="center" style="width: 100px;">Bookname</td>
              <td align="center" style="width: 100px;">Book Type</td>
              <td align="center" style="width: 100px;">Detail</td>
              <td align="center" style="width: 200px;">Link</td>   
              <td align="center" style="width: 100px;">Price</td>
              <td align="center" style="width: 300px;">Location</td>                          
            </tr>

            <tr>
              <td align="center"><?php echo $row['book_id'];?></td>
              <td align="center"><?php echo $row['book_name'];?></td>
              <td align="center"><?php echo $row['book_type'];?></td>
              <td ><?php echo $row['book_detail'];?></td>
              <td ><?php echo $row['link_book'];?></td>   
              <td align="center"><?php echo $row['price_book'];?></td>
              <td ><?php echo $row['local_pic_book'];?></td> 
            </tr>

          </tbody>
        </table>
        <?php } ?>
    <form method="POST" action="addbook.php">
        <br>
        <input type="submit" value="Add Book" style="width: 100px;height: 20px;">
    </form>
        <form method="POST" action="admin_delbook.php">
        <input type="submit" value="Delete Book" style="width: 100px;height: 20px;">
    </form>
        <form method="POST" action="index.php">
        <input type="submit" value="Home" style="width: 100px;height: 20px;">
    </form>
</body>
</html>