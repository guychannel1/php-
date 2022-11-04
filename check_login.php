<?
		//ต้องมีหากทำระบบ login
		ob_start();
		session_start();
		
	//กำหนดให้ภาษาไทยไม่เป็นภาษาเอเลี่ยน
	echo "<meta content='text/html; charset=utf8' http-equiv='Content-Type'>";
	
	//title
	echo "<title>webpage title</title>";

	//นำเข้าข้อมูลจาก connec.php
	include("connec.php");

	//ดึงข้อมูลจาก user ทั้งหมด ที่เป็น user password
	$strSQL = "SELECT * FROM `user` WHERE `user`='".$_POST['user']."' AND `password`='".$_POST['pass']."'";

	//ดึงข้อมูล conn และข้อมูลจาก strSQL
	$objQuery = mysqli_query($conn,$strSQL);

	//ดึงข้อมูลข้อมูลจาก objQuery
	$objResult = mysqli_fetch_array($objQuery);

	if(!$objResult)
	{		//หาก !$objResult (ไม่มีข้อมูลใน $objResult) แสดงข้อมูลว่า login ไม่สำเร็จ และเปิดหน้า login ใหม่
			echo "<script type=\"text/javascript\">
			alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง')
			;window.location=\"index.php\";</script>";
	}
	else
	{			
			//หากมี ให้เก็บข้อมูลจาก user name lastname
			$_SESSION["UserID"] = $objResult["user"];
			$_SESSION["Name"] = $objResult["Fname"];
			$_SESSION["Surname"] = $objResult["Lname"];
			session_write_close();		

			//แสดงข้อมูลว่า login สำเร็จ และเปิดหน้า main.php
			echo "<script type=\"text/javascript\">
					alert('ยินดีต้อนรับ".$_SESSION["Name"]." ".$_SESSION["Surname"]."');
					window.location=\"main.php\";</script>";
	}


?>
