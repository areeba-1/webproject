<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$uname = mysql_real_escape_string($_POST['uname']);
	$email = mysql_real_escape_string($_POST['email']);
	$upass = mysql_real_escape_string($_POST['pass']);
	
	if(mysql_query("INSERT INTO user(username,email,password) VALUES('$uname','$email','$upass')"))
	{
		?>
        <script>alert('Successfully Registered ');</script>
        <?php
	}
	else
	{
		?>
        <script>alert('Invalid Data Entry or You Are Already Registered');</script>
        <?php
	}
}
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LogIn</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="login-form">
<h2> User Log In Form </h2> <br/>
<form method="post">

<table align="center" width="30%" border="0">

<tr>
<td><input type="text" name="uname" placeholder="User Name" required /></td>
</tr>

<tr>
<td><input type="email" name="email" placeholder="Your Email" required /></td>
</tr>

<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>

<tr>
<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
</tr>

<tr>
<td><a href="index.php">Sign In Here</a></td>
</tr>

</table>
</form>
</div>
</center>
</body>
</html>
