<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['librarians'])!="")
{
	header("Location: lib_home.php");
}

if(isset($_POST['login']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$lpass = mysql_real_escape_string($_POST['password']);
	$res=mysql_query("SELECT * FROM librarians WHERE email='$email'");
	$row=mysql_fetch_array($res);
	
	if($row['password']==($lpass))
	{
		$_SESSION['librarians'] = $row['l_id'];
		$_SESSION['start']=time();
		$_SESSION['expire']=$_SESSION['start']+(24*60*60);
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

<script>
function myFunction(x) 
{
    x.style.background = "#F8F8FF";
}
</script>

</head>
<body>
<center>

<div id="login-form">
<h2> Librarian Log In Form </h2><br/>
<form method="post">

<table align="center" width="30%" border="0">

<tr>
<td><input type="text" onFocus="myFunction(this)" name="email" placeholder="Your Email" required /></td>
</tr>

<tr>
<td><input type="password" onFocus="myFunction(this)" name="password" placeholder="Your Password" required /></td>
</tr>

<tr>
<td><button type="submit" name="login">Sign In</button></td>
</tr>

<tr>
<td><a href="lib_register.php">Don't have an account? Sign Up Here</a></td>
</tr>

</table>
</form>
</div>
</center>
</body>
</html>
