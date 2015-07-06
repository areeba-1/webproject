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

	$name= $_POST['m_name'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$pas=$_POST['password'];
	$contact=$_POST['contact'];
	$dob=$_POST['DOB'];
	$add=$_POST['address'];
	
	$sql = "insert into members(m_name,gender,email,password,contact,DOB,address) 
	values ('$name','$gender','$email','$pas','$contact','$dob','$add')";

if(!mysql_query($sql, $con))
{
	die('Error' . mysql_error());
}
	echo "<script>alert('Member has been added!')</script>";
	echo "<script>window.open('lib_home.php','_self')</script>";
		
mysql_close($con);
?>

</body>
</html>
