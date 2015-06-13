<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['librarian'])!="")
{
	header("Location: lib_home.php");
}

if(isset($_POST['login']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$lpass = mysql_real_escape_string($_POST['pass']);
	$res=mysql_query("SELECT * FROM librarian WHERE email='$email'");
	$row=mysql_fetch_array($res);
	
	if($row['password']==($lpass))
	{
		$_SESSION['librarian'] = $row['lib_id'];
		header("Location: lib_home.php");
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
<h2> Librarian Log In Form </h2><br/>
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
<td><a href="lib_register.php">Sign Up Here</a></td>
</tr>

</table>
</form>
</div>
</center>
</body>
</html>
