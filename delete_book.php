<?php
include_once 'dbconnect.php';
if(isset($_GET['delete_book']))
{
	$delete_id=$_GET['delete_book'];
	$query="delete from books where ISBN='$delete_id'";
	$run_delete=mysql_query($query);
	
	if($run_delete)
	{
		echo "<script>alert('Book has been deleted!')</script>";
		echo "<script>window.open('lib_home.php','_self')</script>";
	}
}

?>
