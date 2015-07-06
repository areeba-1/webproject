<?php
session_start();

if(!isset($_SESSION['librarians']))
{
	header("Location: lib_index.php");
}

else if(isset($_SESSION['librarians'])!="")
{
	header("Location: lib_home.php");
}

if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['librarians']);
	header("Location: homepage.php");
}
?>
