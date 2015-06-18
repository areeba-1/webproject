<!DOCTYPE html>
<html>
<body>

<?php
$con = mysql_connect("localhost" ,"root" , "");
if(!$con)
{
	die('could not connect'.mysql_error());
}

mysql_select_db("Web_LMS" , $con);

$isbn= $_POST['ISBN'];
$lid=$_POST['l_id'];
$mid=$_POST['m_id'];
$i_date=$_POST['issue_date'];
$r_date=$_POST['return_date'];

$sql= "UPDATE borrowed_by SET return_date='$r_date'
 where ISBN='$isbn' AND l_id='$lid' AND m_id='$mid' And issue_date='$i_date'";

if(!mysql_query($sql, $con))
{
die('Error' . mysql_error());
}

$sql2= "UPDATE members 
SET fine='$fine'
  where m_id='$mid' ";

if(!mysql_query($sql2, $con))
{
die('Error' . mysql_error());
}

	echo "<script>alert('BOOK RETURNED')</script>";
	echo "<script>window.open('lib_home.php','_self')</script>";
		
		

mysql_close($con);

?>
</body>
</html>
