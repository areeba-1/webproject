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

$sql1="Select * from members where m_id='$mid'";
$result=mysql_query($sql1);


$sql= "UPDATE borrowed_by SET return_date='$reissue'
 where ISBN='$isbn' AND l_id='$lid' AND m_id='$mid' And issue_date='$issue'";

if(!mysql_query($sql, $con))
{
die('Error' . mysql_error());
}

	echo "<script>alert('BOOK RE-ISSUED')</script>";
	echo "<script>window.open('lib_home.php','_self')</script>";
		
mysql_close($con);
?>
</body>
</html>
