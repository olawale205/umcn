<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>News</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<link href="file:///C|/wamp64/www/umcn/css/style.css" rel="stylesheet" type="text/css" />
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
  <tr>
    <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="white_bg">
  <tr>
    <td><form id="form1" name="form1" method="post" action="newsProc.php">
      <span id="sprytext1">
      <div align="center"><br />
        Title: 
          <input name="ttle" type="text" class="news_cl" id="text2" size="20" />
          <span class="textfieldRequiredMsg">A value is required.</span></div>
      </span>
      <div align="center"><br />
        <br />
        <span id="sprytextfield2">
        </span></div>
      <span id="sprytext2">
      <div align="center">Name: 
        <input name="nme" type="text" class="sub_nme" id="nme" />
        <span class="textfieldRequiredMsg">A value is required.</span><br />
      </div>
      </span> 
      <div align="center"><br />
        <span id="sprytextfield3">
        <label for="itr">Intro:</label>
        <input type="text" name="itr" id="itr" />
        <span class="textfieldRequiredMsg">A value is required.</span></span><br />
        <br />
        <span id="sprytextarea1">
        </span></div>
      <span id="sprytext3">
      <div align="center">
        <textarea name="msg" cols="40" rows="6" class="table_cont" id="msg">Write Message
        </textarea>
        <span class="textareaRequiredMsg">A value is required.</span><br />
        <br />
        <input type="submit" name="Summit" id="Summit" value="Submit" />
        <br />
      </div>
      </span> 
      <div align="center"><br />
      </div>
    </form></td>
  </tr>
</table>
</td>
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
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytext1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytext2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytext3");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
</script>
</body>
</html>