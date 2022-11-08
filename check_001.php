หน้า check_login
<?php
session_start();
mysql_connect("localhost","root","1234");
mysql_select_db("computer");
$strSQL = "SELECT * FROM admin2 WHERE user_name =
'".mysql_real_escape_string($_POST['txtUsername'])."'
and user_pass = '".mysql_real_escape_string($_POST['txtPassword'])."'";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
if(!$objResult)
{ echo "Username and Password Incorrect!";
}
else
{

$_SESSION["id"] = $objResult["id"];
$_SESSION["Status"] = $objResult["Status"];
session_write_close();
if($objResult["Status"] == "ADMIN")
{ header("location:for-admin.php");
}
else
{ header("location:mander.php");
}

}
mysql_close();
?>

เว้นวรรค &nbsp
ปุ่ ม Cancel
<input name="btncancel" type="submit" id="btncancel" onclick="parent.location.href='Register.php'"
value="Cancel" />

การเปลี่ยนค่าในหน้า Register.php
<body>
<p align="center">สมัครสมาชิก</p>
<form action="<?php echo $editFormAction; ?>" method="post" onSubmit="return check()"
name="form1" id="form1">
<table align="center">
<tr valign="baseline">
<td nowrap="nowrap" align="right">User_name:</td>
<td><input type="text" name="user_name" onClick="return checkuser_name()" value="" size="32"
/></td>
</tr>
<tr valign="baseline">
<td nowrap="nowrap" align="right">User_pass:</td>
<td><input type="text" name="user_pass" value="" size="32" /></td>
</tr>
<tr valign="baseline">
<td nowrap="nowrap" align="right">Names:</td>
<td><input type="text" name="Names" value="" size="32" /></td>
</tr>
<tr valign="baseline">

<td nowrap="nowrap" align="right">Mail:</td>
<td><input type="text" name="mail" value="" size="32" /></td>
</tr>
<tr valign="baseline">
<td nowrap="nowrap" align="right">Call:</td>
<td><input type="text" name="call" value="" size="32" /></td>
</tr>
<tr valign="baseline">
<td nowrap="nowrap" align="right" valign="top">Address:</td>
<td><textarea name="address" cols="50" rows="5"></textarea></td>
</tr>
<tr valign="baseline">
<td nowrap="nowrap" align="right">&nbsp;</td>
<td><input type="submit" value="Insert record" /></td>
</tr>
</table>
<input type="hidden" name="MM_insert" value="form1" />
</form>
<p>&nbsp;</p>
</body>
</html>

ตรวจสอบและแจ้งเตือนในหน้า Register.php return check()
<script language="javascript">
function check(){
if(document.form1.user_name.value==""){
alert("!!! กรุณากรอกชื่อผู้ใช้เพื่อใช้ในการ Login ด้วยจ้า");
document.form1.user_name.focus();
return false;
}
else if((document.form1.user_pass.value=="")){
alert("!!! กรุณากรอกรหัสผู้ใช้ด้วยจ้า");
document.form1.user_pass.focus();
return false;
}
else if((document.form1.Names.value=="")){
alert("!!! กรุณากรอกชื่อ-นามสกุลด้วยจ้า");
document.form1.Names.focus();
return false;
}
else if((document.form1.Names.value=="")){
alert("!!! กรุณากรอก E-mail ด้วยจ้า");
document.form1.Names.focus();
return false;
}
else if((document.form1.call.value=="")){
alert("!!! กรุณากรอก เบอร์โทร ด้วยจ้า");
document.form1.call.focus();
return false;
}
else if((document.form1.call.value=="")){
alert("!!! กรุณากรอก ที่อยู่ปัจจุบัน ด้วยจ้า");
document.form1.call.focus();
return false;
}
else if(isNaN(document.form1.call.value)){
alert("!!! รหัสผ่าน กรุณากรอกเฉพาะตัวเลขครับ");
document.form1.call.focus();
return false;
}
else if(form1.mail.value.indexOf('@')==-1){
alert("!!! อีเมล์ของคุณไม่ถูกต้องครับ ตัวอย่างเช่น xxxxx@xxxxxx.xxx");
document.form1.mail.focus();
return false;
}
else

return true; ;mysql_select_db("jinamapp");
}
</script>

การ Upload
<?php
function Upload($file,$path="./products-img/"){
if(@copy($file['tmp_name'],$path.$file['name'])){
@chmod($path.$file,0777);
return $file['name'];
}else{
return false;
}
}
?>
