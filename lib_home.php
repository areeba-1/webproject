<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['librarian']))
{
	header("Location: lib_index.php");
}

$res=mysql_query("SELECT * FROM librarian WHERE lib_id=".$_SESSION['librarian']);
$userRow=mysql_fetch_array($res);
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LMS</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<div id="header">
<div id="left">
<label>Online Library Management System</label>
</div>

<div id="right">
<div id="content">
<a href > <?php echo $userRow['lib_name']; ?></a>&nbsp;&nbsp;&nbsp;<a href="lib_logout.php?logout">Sign Out</a>
</div>
</div>
</div>

<div id="menu">
<ul>
    <li><a href="#" class="current"><span class="home"></span>Home</a></li>
    <li><a href="#"><span class="books"></span>Books</a></li>
    <li><a href="#"><span class="about us"></span>About Us</a></li>
    <li><a href="#"><span class="contact us"></span>Contact Us</a></li>
</ul> 
</div>
</body>
</html>
