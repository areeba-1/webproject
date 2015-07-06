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

$name= $_POST['p_name'];
$add=$_POST['address'];
$contact=$_POST['contact'];

$sql= "insert into publishers(p_name,address,contact)
values ('$name','$add','$contact')";

if(!mysql_query($sql, $con))
{
	die('Error' . mysql_error());
}

	echo "<script>alert('Publisher has been added!')</script>";
	echo "<script>window.open('lib_home.php','_self')</script>";
		
mysql_close($con);
?>

</body>
</html>
