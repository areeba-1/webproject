<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['members'])!="")
{
	header("Location: home.php");
}

	$email = mysql_real_escape_string($_POST['email']);
	$mpass = mysql_real_escape_string($_POST['password']);
	$res=mysql_query("SELECT * FROM members WHERE email='$email'");
	$row=mysql_fetch_array($res);
	
	if($row['password']==($mpass))
	{
		$_SESSION['members'] = $row['m_id'];
		$_SESSION['start']=time();
		$_SESSION['expire']=$_SESSION['start']+(24*60*60);
		
		echo "Invalid Email or Password";
	}

	else
	{
		echo "Successfully Logged In";
	}
?>
