<?php
error_reporting(0);
require_once('Connections/umcn_conn.php');

$Title		=	$_POST['ttle'];
$Name		=	$_POST['nme'];
$Message	=	$_POST['msg'];
$today		=	date('Y-m-d');
$intro		=	$_POST['itr'];


mysql_select_db($database_umcndatabase, $conn_db);
mysql_query("INSERT INTO news(Title, Name,intro, Message,ddate)VALUES('$Title', '$Name', '$intro','$Message','$today')");
header("location: mssg_rprt.php");

?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>