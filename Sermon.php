<?php
error_reporting(0);
require_once('Connections/umcn_conn.php');
mysql_select_db ($database_umcndatabase, $conn_db);
$sql = mysql_query ("SELECT * FROM sermon LIMIT 5");
$row_sql = mysql_fetch_assoc($sql); 
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="eng">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="device-width=device" initial-scale=1/>
<title>UMCN</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	margin-top:0px;
	margin-left:0px;
	margin-right:0px;
	background-color: #CCC;
}
</style>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>

  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="30" align="right" class="banner_color"><table width="890" border="0" align="center">
        <tr>
          <td align="right">Find a Church| Church Services| Contact</td>
        </tr>
      </table></td>
    </tr>
    <tr class="Color_black">
      <td><table width="890" border="0" align="center">
        <tr>
          <td width="107" rowspan="3" align="center" class="Color_black"><img name="" src="images/umcn_cros.jpg" width="104" height="120" alt="" /></td>
          <td width="773" colspan="4" align="right">
            <form id="form2" name="form2" method="post" action="">
              <span id="sprytextfield1">
                <label for="Search..."></label>
                <input name="Search..." type="text" id="Search..." value="Search..." />
                <span class="textfieldRequiredMsg">A value is required.</span></span>
          </form></td>
        </tr>
        <tr>
          <td height="52" align="left" class="color_ep">NIGERIA Episcopal Area</td>
          <td align="left" class="color_ep"><img name="" src="images/facebook.jpg" width="34" height="29" alt="" /></td>
          <td align="left" class="color_ep"><img src="images/twitter.png" width="48" height="39" alt="" /></td>
          <td align="left" class="color_ep"><img src="images/youtube.jpg" width="93" height="29" alt="" /></td>
        </tr>
        <tr>
          <td colspan="4" class="color_ep2"><strong>The United Methodist Church</strong></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <table width="890" border="0" align="center">
    <tr>
      <td width="1026" align="center" bgcolor="#999999"><ul id="MenuBar1" class="MenuBarHorizontal">
        <li><a href="index.php">Home</a></li>
        <li><a href="#" class="MenuBarItemSubmenu">Our History</a>
          <ul>
            <li><a href="bishop.php">Bishop History</a></li>
            <li><a href="church_htry.php">Church History</a></li>
            <li><a href="vision_mssion.php">Vision and Mission</a></li>
          </ul>
        </li>
<li><a href="#" class="MenuBarItemSubmenu">Conferences</a>
          <ul>
            <li><a href="#">Central Conference</a></li>
            <li><a href="#">Northern Conference</a></li>
            <li><a href="#">North East Conference</a></li>
            <li><a href="#">Southern Conference</a></li>
          </ul>
        </li>
        <li><a href="Contact us.php">Contact Us</a></li>
<li><a href="Donate.php">Donate </a></li>
      </ul></td>
    </tr>
    <tr class="white_bg">
      <td><br />
        <table width="80%" border="0" align="center">
        <tr>
        <?php
        do{
		?>
          <td class="news_cl"><?php  echo $row_sql['MessageTitle']?></td>
        </tr>
        <tr>
          <td class="sub_nme"><?php echo $row_sql ['PastorName']."  ".$row_sql['ddate']?></td>
        </tr>
        <tr>
          <td class="table_cont"><?php echo $row_sql['Message']?></td>
          <?php
		}while($row_sql = mysql_fetch_assoc($sql));
		  ?>
        </tr>
        <tr>
          <td><div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div></td>
        </tr>
      </table>
      <br /></td>
    </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr class="Colorblack">
    <td height="159" align="center" class="Color_black">Theme:- &quot;Therefore go&quot;.<br />
      <br />
Mathew 28:19 <br /></td>
  </tr>
</table>
<table width="890" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" bgcolor="#999999" class="banner_color"><span class="bg_footer_white">Copyright (c) Nigeria Episcopal Area UMC<br />
        <br />
umcsouthernnigeria@gmail.com<br />
<br />
+2349094581823</span></td>
  </tr>
</table>


<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>
</body>
</html>
