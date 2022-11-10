<?php
		ob_start();
		session_start();

	$conn=mysqli_connect("localhost","root","11111111","guyssar");
	

	$strSQL = "SELECT * FROM `member` WHERE `mb_user`='".$_POST['uname']."' AND `mb_pass`='".$_POST['pword']."'";

	$objQuery = mysqli_query($conn,$strSQL);

	$objResult = mysqli_fetch_array($objQuery);

	if(!$objResult)
{ 
	echo "Username and Password Incorrect!";
}
else
{

	$_SESSION["user"] = $objResult["mb_user"];
	$_SESSION["Status"] = $objResult["mb_status"];
	$_SESSION["prefix"] = $objResult["prefix"];
	$_SESSION["name"] = $objResult["mb_name"];
	session_write_close();
	if($_SESSION["Status"] == "ADMIN")
	{ 
		header("location:admin.php");
	}
	elseif($_SESSION["Status"] == "SELL")
	{ 
		header("location:sell.php");
	}
	else
	{ 
		header("location:member.php");
	}
}


?>
