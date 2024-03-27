<html>
<body>
	<form action="delbook.php" method="post">
	<table border="1" style="width: 300px;">
          <tbody>
          	<h3>Enter Book ID for Delete</h3>
            <tr>
              <td align="center" style="width: 100px;">BookID</td>
              <td><input type="text" name="del_book"></td>                         
            </tr>

          </tbody>
        </table>
        <br>
        <input type="submit" name="Submit" value="Delete" style="width: 130px;height: 20px;">
    </form>
    <form action="admin_showbook.php" method="post">
    	<input type="submit" name="Submit" value="Back to show book" style="width: 130px;height:20px;">
    </form>
    
</body>
</html>