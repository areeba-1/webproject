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

$isbn=$_POST['ISBN'];
$btitle= $_POST['title'];
$bedition=$_POST['edition'];
$bauthor=$_POST['author'];
$pid=$_POST['p_id'];
$cid=$_POST['c_id'];
$bprice=$_POST['price'];
$tcopies=$_POST['total_copies'];
$acopies=$_POST['available_copies'];	

$sql= "insert into books(ISBN, title, edition, author, p_id, c_id, price, total_copies, available_copies) 
Values ('$isbn','$btitle','$bedition','$bauthor','$pid','$cid','$bprice','$tcopies','$acopies')";
if(!mysql_query($sql, $con))
{
die('Error' . mysql_error());
}
echo "<script>alert('Book Added Successfully!')</script>";
		echo "<script>window.open('lib_home.php','_self')</script>";
	
		
mysql_close($con);
?>


</body>
</html>
