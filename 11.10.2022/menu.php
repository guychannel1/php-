<!DOCTYPE html>
<html>
<body>

<h2>Forms Login</h2>
<!--ดึงข้อมูลจาก-->
<form action="check_connect.php" method='post'>
  <!--กรอก user-->
  <label for="uname">User:</label><br>
  <input type="text" id="uname" name="uname" ><br>
  <!--กรอก password-->
  <label for="pword">Password:</label><br>
  <input type="password" id="pword" name="pword" ><br><br>
  <input type="submit" value="login">
</form> 
</body>
</html>