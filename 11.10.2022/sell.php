<?php
	ob_start();
	session_start();
	
	echo $_SESSION["name"]." - ".$_SESSION["Status"];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seller</title>
</head>

<body>
<br />
<form id="form1" name="form1" method="post" action="saveproduce.php">
  <label for="code">รหัสสินค้า :</label>
  <input type="text" name="code" id="code" />
  <br />
  <label for="pdName">ชื่อสินค้า :</label>
  <input type="text" name="pdName" id="pdName" />
  <br />
  <label for="pdAmount">จำนานสินค้าที่มี :</label>
  <input type="text" name="pdAmount" id="pdAmount" />
  <br />
  <input type="submit" name="submit" id="submit" value="บันทึก" />
</form>
</body>
</html>