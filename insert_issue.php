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
 
while ($row = mysql_fetch_array($result))
{
	$borrow=$row[borrow_attempts];
	$fine=$row[fine];
}

if($borrow>0 && $fine==0)
{
	$sql1="insert into borrowed_by (l_id, m_id, ISBN, issue_date, return_date) values ('$lid',' $mid', '$isbn', '$i_date','$r_date')";
	
	$sql2="UPDATE members 
	
	SET borrow_attempts=borrow_attempts-1
	where m_id='$mid'";
		
	if(!mysql_query($sql1, $con))
	{
		die('Error' . mysql_error());
	}

	if(!mysql_query($sql2, $con))
	{
		die('Error' . mysql_error());
	}
	
	echo "<script>alert('Borrow has been Added!')</script>";
	echo "<script>window.open('lib_home.php','_self')</script>";
	}
	
	else 
	
	{
	if ($borrow==0 && $fine>0)
	{
		echo "<script>alert('You have no more borrow attempts left ANd You have pendig fine. RESOLVE THESE ISSUES BEFORE ATTEMPTING TO ISSUE BOOK')</script>";
		echo "<script>window.open('lib_home.php','_self')</script>";
	}
	
	else 
	
	{
	if ($borrow==0)
	{
		echo "<script>alert('You have no more borrow attempts left! Return previous books')</script>";
		echo "<script>window.open('lib_home.php','_self')</script>";
	}
	
	else if ($fine>0)
	{
		echo "<script>alert('You have Pending fine! Pay Fine before attempting to issue any more books')</script>";
		echo "<script>window.open('lib_home.php','_self')</script>";
	}
	
	}
}

mysql_close($con);
?>

</body>
</html>
