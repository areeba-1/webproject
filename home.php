<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}

$res=mysql_query("SELECT * FROM user WHERE user_id=".$_SESSION['user']);
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
<a href > <?php echo $userRow['username']; ?></a>&nbsp;&nbsp;&nbsp;<a href="logout.php?logout">Sign Out</a>
</div>
</div>
</div>

<div id="menu">
<ul>
	<li><a href="#" class="current"><span class="home"></span>Home</a></li>
    <li><a href="#"><span class="books"></span>Books</a></li>
	<li><a href="#"><span class="contact us"></span>Members</a></li>
    <li><a href="#"><span class="about us"></span>About Us</a></li>
    <li><a href="#"><span class="contact us"></span>Contact Us</a></li>
</ul> 
</div>

<br/><br/><br/><br/>

<div id = "para" >
<p> Welcome to the Online Library Management System. <br/>
	Library is the place where you can easily find, reserve, borrow and return your desired books.<br/>	
	Undoubtedly library is the best place to spend your spare time.</p><br/>
</div>

<br/><br/><br/><br/><br/>

<pre>
A library is like the best person you know- 
politely quiet but endlessly informative, amazingly 
knowledgeable but charmingly discreet, open to
everyone yet subject to your every whim, and , sadly,
flammable is one isn't careful. Be careful with yours.

                                             - Lemony Snicket 
</pre>


</body>
</html>
