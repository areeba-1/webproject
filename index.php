<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['members'])!="")
{
	header("Location: home.php");
}

if(isset($_POST['login']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$mpass = mysql_real_escape_string($_POST['password']);
	$res=mysql_query("SELECT * FROM members WHERE email='$email'");
	$row=mysql_fetch_array($res);
	
	if($row['password']==($mpass))
	{
		$_SESSION['members'] = $row['m_id'];
		$_SESSION['start']=time();
		$_SESSION['expire']=$_SESSION['start']+(5*60);
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
<h2> Member Log In Form </h2> <br/>
<form method="post">

<table align="center" width="30%" border="0">

<tr>
<td><input type="text" name="email" placeholder="Your Email" required /></td>
</tr>

<tr>
<td><input type="password" name="password"  placeholder="Your Password" required /></td>
</tr>

<tr>
<td>Remember Me:<input type="checkbox" name="rememberme" value= "1"/></td>
</tr>

<tr>
<td><button type="submit" name="login">Sign In</button></td>
</tr>

<tr>
<td><a href="register.php">Don't have an account? Sign Up Here</a></td>
</tr>

</table>
</form>
</div>
</center>
</body>
</html>
