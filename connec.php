<?
//เชื่อมต่อข้อมูลจากฐานข้อมูล จาก localhost,user:root,password:ตามที่ได้ตั้งไว้,ฐานข้อมูล  
$conn=mysqli_connect("localhost","root","00000000","test_data");

    //กำหนดให้ภาษาไทยไม่เป็นภาษาเอเลี่ยน
	mysqli_query($conn,"SET character_set_results=utf8");
    mysqli_query($conn,"SET character_set_client=utf8");
    mysqli_query($conn,"SET character_set_connection=utf8");
?>
