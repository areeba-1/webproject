<?php
include_once 'dbconnect.php';
if(isset($_GET['delete_mem']))
{	
	$delete_id=$_GET['delete_mem'];
	$query="delete from members where m_id='$delete_id'";
	$run_delete=mysql_query($query);
	
	if($run_delete)
	{
		echo "<script>alert('Member has been deleted!')</script>";
		echo "<script>window.open('lib_home.php?view_members','_self')</script>";
	}
}

?>
