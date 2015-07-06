<?php
session_start();
if(isset($_SESSION['librarians'])!="")
{
	header("Location: lib_home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['signup']))
{
	$lname = mysql_real_escape_string($_POST['l_name']);
	$lemail = mysql_real_escape_string($_POST['email']);
	$lpass = mysql_real_escape_string($_POST['password']);
	$laddress = mysql_real_escape_string($_POST['address']);
	$lcontact = mysql_real_escape_string($_POST['contact']);
	
	
	if(mysql_query("INSERT INTO librarians(l_name, email, password, address, contact) VALUES('$lname','$lemail','$lpass', '$laddress', '$lcontact')"))
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
<h2> Librarian Sign Up Form </h2> <br/>
<form method="post">

<table align="center" width="30%" border="0">

<tr>
<td><input type="text" onFocus="myFunction(this)" name="l_name" placeholder="Your Name" required /></td>
</tr>

<tr>
<td><input type="text" onFocus="myFunction(this)" name="email" placeholder="Your Email" required /></td>
</tr>

<tr>
<td><input type="text" onFocus="myFunction(this)" name="password" placeholder="Your Password" required /></td>
</tr>

<tr>
<td><input type="number" onFocus="myFunction(this)" name="contact" placeholder="Your Contact No" required /></td>
</tr>

<tr>
<td><input type="date" onFocus="myFunction(this)" name="DOB" placeholder="Your DOB" required /></td>
</tr>

<tr>
<td><input type="text" onFocus="myFunction(this)" name="address" placeholder="Your Address" required /></td>
</tr>


<tr>
<td>Male:<input type="radio" name="gender" value= "male"/>
	Female:<input type="radio" name="gender" value = "female"/>
</tr>

<tr>
<td><button type="submit" name="signup">Sign Me Up</button></td>
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
