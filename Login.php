<?php
error_reporting(0);
require_once('Connections/umcn_conn.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['text1'])) {
  $loginUsername=$_POST['text1'];
  $password=$_POST['text2'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "Admin.php";
  $MM_redirectLoginFailed = "Login.php";
  $MM_redirecttoReferrer = true;
  mysql_select_db($database_umcndatabase, $conn_db);
  
  $LoginRS__query=sprintf("SELECT UserName, Password FROM account WHERE UserName=%s AND Password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $conn_db) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && true) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Password</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #666;
}
</style>
</head>

<body>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<table width="317" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#9CAEC9">
    <td width="880" bgcolor="#FFFFFF"><div align="center">
      <p><img src="images/login_01.jpg" alt="" width="143" height="118" /><br />
        <br />
      </p>
    </div>      
      <table width="84%" border="0" align="center">
        <tr bgcolor="#80FFFF">
          <td bgcolor="#FFFFFF"><form id="form1" name="form1" method="POST" action="<?php echo $loginFormAction; ?>">
            <span id="sprytextfield1">
              <label for="text1">
              <div align="center"></div>
              </label>
              <div align="center"><strong> UserName:</strong>
                <input type="text" name="text1" id="text1" />
              <span class="textfieldRequiredMsg">A value is required.</span></div>
              </span>
            <div align="center"><br />
              <br />
              </div>
            <span id="sprytextfield2">
              <label for="text2">
              <div align="center"></div>
              </label>
              <div align="center">
                <strong>Password:</strong>
                <input type="password" name="text2" id="text2" />
              <span class="textfieldRequiredMsg">A value is required.</span></div>
              </span>
            <div align="center"><br />
              <br />
<input type="submit" name="Login1" id="Login1" value="Login" />
              <br />
              </div>
          </form></td>
        </tr>
    </table></td>
  </tr>
</table>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
</script>
</body>
</html>