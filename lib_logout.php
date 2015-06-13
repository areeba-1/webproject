<?php
session_start();

if(!isset($_SESSION['librarian']))
{
	header("Location: lib_index.php");
}

else if(isset($_SESSION['librarian'])!="")
{
	header("Location: lib_home.php");
}

if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['librarian']);
	header("Location: lib_index.php");
}
?>
