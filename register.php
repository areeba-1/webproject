<?php
session_start();
if(isset($_SESSION['members'])!="")
{
	header("Location: home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['signup']))
{
	$mname = mysql_real_escape_string($_POST['m_name']);
	$gen = mysql_real_escape_string($_POST['gender']);
	$memail = mysql_real_escape_string($_POST['email']);
	$mpass = mysql_real_escape_string($_POST['password']);
	$mcontact = mysql_real_escape_string($_POST['contact']);
	$mDOB = mysql_real_escape_string($_POST['DOB']);
	$maddress = mysql_real_escape_string($_POST['address']);
	
	
	if(mysql_query("INSERT INTO members(m_name, gender, email, password, contact, DOB, address) VALUES('$mname', '$gen','$memail','$mpass','$mcontact','$mDOB','$maddress')"))
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
<title>SignUp</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="login-form">
<h2> Member Sign Up Form </h2> <br/>
<form method="post">

<table align="center" width="30%" border="0">

<tr>
<td><input type="text" name="m_name" placeholder="Your Name" required /></td>
</tr>

<tr>
<td><input type="text" name="email" placeholder="Your Email" required /></td>
</tr>

<tr>
<td><input type="text" name="password" placeholder="Your Password" required /></td>
</tr>

<tr>
<td><input type="number" name="contact" placeholder="Your Contact No" required /></td>
</tr>

<tr>
<td><input type="date" name="DOB" placeholder="Your DOB" required /></td>
</tr>

<tr>
<td><input type="text" name="address" placeholder="Your Address" required /></td>
</tr>


<tr>
<td>Male:<input type="radio" name="gender" value= "male"/>
	Female:<input type="radio" name="gender" value = "female"/>
</tr>


<tr>
<td><button type="submit" name="signup">Sign Me Up</button></td>
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
