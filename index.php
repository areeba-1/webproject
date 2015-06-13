<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}

if(isset($_POST['login']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$upass = mysql_real_escape_string($_POST['pass']);
	$res=mysql_query("SELECT * FROM user WHERE email='$email'");
	$row=mysql_fetch_array($res);
	
	if($row['password']==($upass))
	{
		$_SESSION['user'] = $row['user_id'];
		header("Location: home.php");
	}
	else
	{
		?>
        <script>alert('Invalid Email or Password');</script>
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
<td><input type="text" name="email" placeholder="Your Email" required /></td>
</tr>

<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>

<tr>
<td><button type="submit" name="login">Sign In</button></td>
</tr>

<tr>
<td><a href="register.php">Sign Up Here</a></td>
</tr>

</table>
</form>
</div>
</center>
</body>
</html>
