<?php
	ob_start();
	session_start();
	
	echo $_SESSION["name"]." - ".$_SESSION["Status"];
	
	$conn=mysqli_connect("localhost","root","11111111","guyssar");
	

	$strSQL = "SELECT * FROM `product`";
	$objQuery = mysqli_query($conn,$strSQL);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>member</title>
</head>

<body>
<div align="center">
  <table width="80%" border="1">
  <!--Header-->
    <tr>
      <th width="16%" scope="col">รหัสสินค้า</th>
      <th width="48%" scope="col">ชื่อสินค้า</th>
      <th width="17%" scope="col">จำนวน</th>
      <th width="19%" scope="col">เพิ่มลงตระกร้า</th>
    </tr>
    
    <?php
    	while($row=mysqli_fetch_array($objQuery))
		{
	?>
    
    <tr>
      <td align="center">&nbsp; <?=$row["pd_code"]?></td>
      <td align="left">&nbsp; <?=$row["pd_name"]?></td>
      <td align="center">&nbsp; <?=$row["pd_amount"]?></td>
      <td align="center">
      
      <form id="form1" name="form1" method="post" action="cart.php">
        <div align="center">
          <input name="code" type="hidden" id="code" value=<?=$row["pd_code"]?> />
          <input name="Amount" type="text" id="Amount" />
<input type="submit" name="btnAdd" id="btnAdd" value="เพิ่มลงตระกร้า" />
          <label for="Amount"></label>
        </div>
      </form></td>
    </tr>
    
    <?php
			}
	?>
    
  </table>
</div>
</body>
</html>