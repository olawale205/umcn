<?php
error_reporting(0);
require_once('Connections/umcn_conn.php');
mysql_select_db ($database_umcndatabase, $conn_db);
$sql = mysql_query ("SELECT * FROM news LIMIT 5");
$row_sql = mysql_fetch_assoc($sql); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UMCN</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	margin-top: 0px;
	margin-left: 0px;
	margin-right: 0px;
	background-color: #CCC;
}
</style>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
a:link {
	text-decoration: none;
	color: #333;
}
a:visited {
	text-decoration: none;
	color: #000;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>
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
          <td align="center" class="color_ep"><img name="" src="images/facebook.jpg" width="34" height="29" alt="" /></td>
          <td align="center" class="color_ep"><img src="images/twitter.png" width="48" height="39" alt="" /></td>
          <td align="center" class="color_ep"><img src="images/youtube.jpg" width="93" height="29" alt="" /></td>
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
        <li><a href="#" class="MenuBarItemSubmenu">About</a>
          <ul>
            <li><a href="bishop.php">Bishop</a></li>
            <li><a href="church_htry.php">Church History</a></li>
            <li><a href="vision_mssion.php">Vision and Mission</a></li>
          </ul>
        </li>
        <li><a href="Sermon.php" title="Today sermon">Devotion</a></li>
        <li><a href="#" class="MenuBarItemSubmenu">Conferences</a>
          <ul>
            <li><a href="central_c.php">Central Conference</a></li>
            <li><a href="northern_c.php">Northern Conference</a></li>
            <li><a href="north_east_conf.php">North East Conference</a></li>
            <li><a href="southern_c.php">Southern Conference</a></li>
          </ul>
        </li>
        <li><a href="#" class="MenuBarItemSubmenu">Ministries</a>
          <ul>
            <li><a href="untd_mdist_womn.php">United Methodist Women</a></li>
            <li><a href="untd_mdst_men.php">United Methodist Men</a></li>
            <li><a href="youth_mntry.php">Youth and Young Adult Ministry</a></li>
            <li><a href="chdren_mntry.php">Children Ministry</a></li>
            <li><a href="agri_prgrm.php">Agricultural Program</a></li>
            <li><a href="rural_prgrm.php">Rural Health Program</a></li>
            <li><a href="orphanage.php">Orphanage </a></li>
            <li><a href="edu_mnty.php">Educational Ministry</a></li>
            <li><a href="partnership.php">Partnerships</a></li>
            <li><a href="evangelism.php">Evangelism</a></li>
          </ul>
        </li>
<li><a href="Contact us.php">Contact Us</a></li>
<li><a href="Donate.php">Donate </a></li>
      </ul></td>
    </tr>
    <tr>
      <td><div id="container">
		<img  class="slider"  src="images/1.jpg"/>
        <img class="slider" src="images/2.jpg"/>
        <img class="slider" src="images/3.jpg"/>
        <button class="btn"onclick="plusIndex(-1)" id="btn1"> &#10094;</button>
        <button class="btn"onclick="plusIndex(1)" id="btn2"> &#10095;</button>
        
        
        
	</div></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="sub_bg_color">
        <tr>
          <td height="36" colspan="2" class="banner_color"><strong>Welcome to  The United Methodist Church Nigeria Episcopal Area of the United Methodist Church, where we believe in making and nurturing disciples of Jesus Christ for the transformation of the world.</strong></td>
        </tr>
        <tr>
          <td width="46%">&nbsp;</td>
          <td width="54%">&nbsp;</td>
        </tr>
        <tr>
          <td height="35" class="news_cl">Recent News</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" class="news_cl"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <?php
		  	do{
		  ?>
            <tr>
              <td width="13%">&nbsp;</td>
              <td width="87%"> <a href="news_events.php?id=<?php echo $row_sql['ID']?>"> <?php echo $row_sql['Title']?></a><br />
                <span class="sub_nme"><?php echo $row_sql['Name']."   ".$row_sql['ddate']?></span><br />
                <span class="table_cont"><?php echo $row_sql['intro']?> </span><br /></td>
              </tr>
            <?php
			}while($row_sql = mysql_fetch_assoc($sql)); 

			?>
          </table></td>
        </tr>
        
      </table></td>
    </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr class="Colorblack">
    <td height="159" align="center" class="Color_black">      Theme:- &quot;Therefore go&quot;.<br />
      <br />
      Mathew 28:19
<br /></td>
  </tr>
</table>
<table width="890" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" bgcolor="#999999" class="bg_footer_white">Copyright (c) Nigeria Episcopal Area UMC<br />
    <br />
    umcsouthernnigeria@gmail.com<br />
    <br />
    +2349094581823</td>
  </tr>
</table>


<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>
</body>
<script>
var index = 1;

function plusIndex(n){
index = index + 1;
showImage(index);
}

showImage(1);

function showImage(n){
var i;
var x = document.getElementsByClassName("slider");
if(n > x.length){ index = 1};
if(n < 1){ index = x.length};
for(i=0;i<x.length;i++)
{
x[i].style.display = "none";
}
x[index-1].style.display = "block";
}
autoSlide();
function autoSlide(){
var i;
var x = document.getElementsByClassName("slider");
for(i=0;i<x.length;i++){
x[i].style.display = "none";
}
index++;
if(index > x.length){index = 1}
x[index-1].style.display = "block";
setTimeout(autoSlide,3000);
}
</script>
</html>
