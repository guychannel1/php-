<?php 
	ob_start();
	session_start();

	$conn=mysqli_connect("localhost","root","11111111","guyssar");

	$checkSQL="SELECT * FROM `member` WHERE `mb_user`='".$_POST["uname"]."'";
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

	#เช็คว่าช่อง user ว่างไหม
	if($_POST["uname"] == "")
	{	
		echo "โปรดกรอก user";
		exit();
	}
	else
	{
			echo "คำนำหน้า / ";
	}
	#เช็คว่ารหัสตรงกันไหม
	if($_POST["pword1"] != $_POST["pword2"])
	{	
		echo "รหัสผ่านไม่ตรง";
		exit();
	}
	else
	{
			echo "รหัสผ่าน / ";
	}
	
	#เช็คว่าช่อง คำนำหน้า ว่างไหม
	if($_POST["prefix"] == "")
	{	
		echo "โปรดเลือกคำนำหน้าชื่อ";
		exit();
	}
	else
	{
			echo "คำนำหน้า / ";
	}
	
	#เช็คว่าช่อง ชื่อ ว่างไหม
	if($_POST["fnamelname"] == "")
	{	
		echo "โปรดกรอกชื่อ-สกุล";
		exit();
	}
	else
	{
			echo "ชื่อ-สกุล / ";
	}

	#เช็คว่าช่อง เบอร์ ว่างไหม
	if($_POST["tel"] == "")
	{	
		echo "โปรดกรอกเบอร์โทร";
		exit();
	}
	else
	{
			echo "เบอรื / ";
	}

	#เช็คว่าช่อง เพศ ว่างไหม
	if($_POST["sex"] == "")
	{	
		echo "โปรดเลือกเพศ";
		exit();
	}
	else
	{
			echo "เพศ / ";
	}

	#เช็คว่าช่อง ที่อยู่ ว่างไหม
	if($_POST["address"] == "")
	{	
		echo "โปรดกรอกทีอยู่";
		exit();
	}
	else
	{
			echo "ที่อยู่ /";
	}


	#เพิ่มข้อมูลไปยัง phpMyAdmin
	$strSQL = "INSERT INTO `member`(`mb_user`, `mb_pass`, `mb_status`, `prefix`, `mb_name`, `mb_tel`, `mb_sex`, `mb_address`) 
					VALUES (
					'".$_POST["uname"]."',
					'".$_POST["pword1"]."',
					'USER',
					'".$_POST["prefix"]."',
					'".$_POST["fnamelname"]."',
					'".$_POST["tel"]."',
					'".$_POST["sex"]."',
					'".$_POST["address"]."'
					)";

	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($conn,$objQuery);

	echo "บันทึกข้อมูลเรียบร้อย!!";
?>