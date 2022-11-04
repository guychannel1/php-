<?
		ob_start();
		session_start();
		
		echo $_SESSION["UserID"].">".$_SESSION["Name"]." ".$_SESSION["Surname"];
?>