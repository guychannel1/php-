<!DOCTYPE html>
<html>
<body>

<h2>Forms Login</h2>
<!--ดึงข้อมูลจาก-->
<form action="check_login.php" method='get'>
  <!--กรอก user-->
  <label for="user">User:</label><br>
  <input type="text" id="user" name="user" ><br>
  <!--กรอก password-->
  <label for="pass">Password:</label><br>
  <input type="password" id="pass" name="pass" ><br><br>

  <input type="submit" value="login">   
</form> 

</body>
</html>

