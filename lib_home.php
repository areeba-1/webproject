<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['librarians']))
{
	header("Location: lib_index.php");
}

$res=mysql_query("SELECT * FROM librarians WHERE l_id=".$_SESSION['librarians']);
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
<a href > <?php echo $userRow['l_name']; ?></a>&nbsp;&nbsp;&nbsp;<a href="lib_logout.php?logout">Sign Out</a>
</div>
</div>
</div>

<div id="menu">
<ul>
	<li><a href="addbooks.php?addbooks">ADD BOOK</a></li>
	<li><a href="editbooks.php?editbooks">UPDATE BOOK</a></li>
	<li><a href="issuebook.php?issue">ISSUE BOOK</a></li>
	<li><a href="returnbook.php?return">RETURN BOOK</a></li>
	<li><a href="viewbooks.php?viewbooks">VIEW ALL BOOKS</a></li>
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
