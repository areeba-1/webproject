
<?php
session_start();
if(isset($_SESSION['librarian'])!="")
{
	header("Location: lib_home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$lname = mysql_real_escape_string($_POST['lname']);
	$email = mysql_real_escape_string($_POST['email']);
	$lpass = mysql_real_escape_string($_POST['pass']);
	
	if(mysql_query("INSERT INTO librarian(lib_name,email,password) VALUES('$lname','$email','$lpass')"))
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
<h2> Librarian Log In Form </h2> <br/>
<form method="post">

<table align="center" width="30%" border="0">

<tr>
<td><input type="text" name="lname" placeholder="User Name" required /></td>
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
<td><a href="lib_index.php">Sign In Here</a></td>

</tr>
</table>
</form>
</div>
</center>
</body>
</html>
