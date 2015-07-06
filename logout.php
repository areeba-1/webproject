<?php
session_start();

if(!isset($_SESSION['members']))
{
	header("Location: index.php");
}

else if(isset($_SESSION['members'])!="")
{
	header("Location: home.php");
}

if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['members']);
	header("Location: homepage.php");
}
?>
