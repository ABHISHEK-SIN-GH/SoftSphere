<?php
$conn = mysqli_connect("localhost","root","","softsphere") or die("Connection Failed");
$sql = "SELECT * FROM banners";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
$row = mysqli_fetch_assoc($result);
if(isset($_POST['submit'])){
    echo $_POST['title1']."<br>";
    echo $_POST['title2']."<br>";
    echo $_POST['description']."<br>";
    print_r($_FILES['banner']);
}
?>
<!DOCTYPE html>
<html>
<body>
<form action="" method="post" enctype="multipart/form-data">
  <input type="text" name="title1"><br>
  <input type="text" name="title2"><br>
  <input type="text" name="description"><br>
  <input type="file" name="banner" accept="image/*"><br>
  <input type="submit" value="Upload Image" name="submit">
</form>
</body>
</html>