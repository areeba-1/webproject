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

$name= $_POST['name'];

$sql= "insert into categories(c_name) values ('$name')";
if(!mysql_query($sql, $con))
{
	die('Error' . mysql_error());
}

	echo "<script>alert(Category has been added!')</script>";
	echo "<script>window.open('lib_home.php','_self')</script>";
		
mysql_close($con);
?>

</body>
</html>
