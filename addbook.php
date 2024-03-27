<!DOCTYPE html>
<html>
<body>
<h1>Rakkun.com Admin</h1>
<form action="insert_book.php" method="post" name="form2">
    <table border="1" style="width: 300PX">
      <tbody>

        <tr>
          <td>&nbsp;Book Name</td>
          <td>
            <input type="text" name="name">
          </td>
        </tr>

        <tr>
          <td>&nbsp;Book Type</td>
          <td>
            <select name="type_book" size="1" style="width: 170">
            	<option value="lightnovel" id="Light Novel">Light Novel</option>
            	<option value="normal" id="normal">ทั่วไป</option>
            	<option value="documentary" id="documentary">สารคดี</option>
            	<option value="cartoon" id="cartoon">การ์ตูน</option>
            </select>
          </td>
        </tr>

        <tr>
          <td>&nbsp;Book Detial</td>
          <td>
            <input type="text" name="detial_book">
          </td>
        </tr>

        <tr>
          <td>&nbsp;link</td>
          <td>
            <input type="link" name="link_book">
          </td>
        </tr>

        <tr>
          <td>&nbsp;Price</td>
          <td>
            <input type="text" name="price_book">
          </td>
        </tr>

        <tr>
          <td>&nbsp;Location</td>
          <td>
            <input type="text" name="local_book">
          </td>
        </tr>


      </tbody>
    </table>
    <br>
    <input type="submit" name="Submit" value="Add Book" style="width: 100px;height: 20px;">
</form>
  <form method="POST" action="admin_showbook.php">
    <br>
    <input type="submit" value="Show Book" style="width: 100px;height: 20px;">
  </form>
</body>
</html>
