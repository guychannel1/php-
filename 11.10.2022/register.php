<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="save_member.php">
    <label for="uname">ผู้ใช้ :</label>
    <input type="text" name="uname" id="uname" />
    <br />
    <br />
    <label for="pword1">รหัสผ่าน :</label>
    <input type="password" name="pword1" id="pword1" />
    <br />
    <br />
    <label for="pword2">รหัสผ่าน (อีกครั้ง) :</label>
    <input type="password" name="pword2" id="pword2" />
    <br />
    <br />
    <input type="radio" name="prefix" id="prefix" value="1" />
    <label for="prefix">เด็กหญิง </label>
    <input type="radio" name="prefix" id="prefix" value="2" />
    <label for="prefix">เด็กชาย </label>
    <input type="radio" name="prefix" id="prefix" value="3" />
    <label for="prefix">นาย </label>
    <input type="radio" name="prefix" id="prefix" value="4" />
    <label for="prefix">นาง </label>
    <input type="radio" name="prefix" id="prefix" value="5" />
    <label for="prefix">นางสาว </label>
    <br />
    <br />
    
    <label for="fnamelname">ชื่อ-สกุล :</label>
    <input type="text" name="fnamelname" id="fnamelname" />
    <br />
    <br />
  <label for="tel">เบอร์ :</label>
  <input type="text" name="tel" id="tel" />
  <br />
  <br />
    <label>เพศ :
      <input type="radio" name="sex" value="1" id="sex_0" />
    ชาย</label>
    <label>
      <input type="radio" name="sex" value="2" id="sex_1" />
      หญิง</label>
    <br />
    <br />
  <label for="address">ที่อยู่ :</label>
  <textarea name="address" id="address" cols="45" rows="5"></textarea>
  <br />
  <br />
<input type="submit" name="btnregister" id="btnregister" value="Register" />
<input type="reset" name="reset" id="reset" value="Reset" />
</form>
</body>
</html>