<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sermon</title>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #999;
}
</style>
</head>

<body>
<table width="890" border="0" align="center">
  <tr>
    <td><img src="images/BANNER_ADMIN1.fw.png" width="1000" height="230" /></td>
  </tr>
  <tr>
    <td><a href="Admin.php">Home</a></td>
  </tr>
  <tr class="white_bg">
    <td><div align="center">
      <form id="form1" name="form1" method="post" action="mssgProc.php">
        <span id="sprytextarea1">
          <label for="title"><br />
          Message Title:</label>
          <input name="title" type="text" class="news_cl" id="title" value="" size="20" />
          <span class="textareaRequiredMsg">A value is required.</span></span><br />
          <br />
          <span id="sprytextfield1">
          <label for="name">Pastor Name</label>
          :
          <input name="name" type="text" class="sub_nme" id="name" />
          <span class="textfieldRequiredMsg">A value is required.</span></span><br />
        <br />
        <span id="sprytextarea2">
        <textarea name="mssg" cols="40" rows="6" class="table_cont" id="mssg">Write Message
        </textarea>
        <span class="textareaRequiredMsg">A value is required.</span></span> <br />
        <br />
        <input type="submit" name="button" id="button" value="Submit" />
        <br />
        <br />
      </form>
    </div></td>
  </tr>
  <tr>
    <td align="center" class="bg_footer_white"><span class="banner_color">Copyright (c) Nigeria Episcopal Area UMC<br />
        <br />
umcsouthernnigeria@gmail.com<br />
<br />
+2349094581823</span></td>
  </tr>
</table>
<script type="text/javascript">
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>
</body>
</html>
