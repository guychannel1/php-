
<?php 
	ob_start();
	session_start();

	$conn=mysqli_connect("localhost","root","11111111","guyssar");

	$checkSQL="SELECT `pd_code`FROM `product` WHERE `pd_code`='".$_POST["code"]."'";
	$objQuery = mysqli_query($conn,$checkSQL);
	$objResult = mysqli_fetch_array($conn,$objQuery);

	#เช็คว่ามีข้อมูลในระบบไหม
	if(!$objResult)
	{	

	}
	else
	{
			echo "มีข้อมูลนี้อยู่ในระบบแล้ว";
			exit();
	}

	#เช็คว่าช่อง code ว่างไหม
	if($_POST["code"] == "")
	{	
		echo "โปรดกรอก code";
		exit();
	}
	else
	{
			echo $_POST["code"]." / ";
	}

	#เช็คว่าช่อง Name ว่างไหม
	if($_POST["pdName"] == "")
	{	
		echo "โปรดกรอก ชื่อสินค้า";
		exit();
	}
	else
	{
			echo $_POST["pdName"]." / ";
	}

		#เช็คว่าช่อง Amount ว่างไหม
		if($_POST["pdAmount"] == "")
		{	
			echo "โปรดกรอก Amount";
			exit();
		}
		else
		{
				echo $_POST["pdAmount"]." / ";
		}

	#เพิ่มข้อมูลไปยัง phpMyAdmin
	$strSQL = "INSERT INTO `product`( `pd_code`, `pd_name`, `pd_amount`) 
				VALUES (
					'".$_POST["code"]."',
					'".$_POST["pdName"]."',
					'".$_POST["pdAmount"]."'
				)";

	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($conn,$objQuery);

	echo "บันทึกข้อมูลเรียบร้อย!!";
?>