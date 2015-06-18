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

if(isset($_POST['submit']))
{
$isbn=$_POST['ISBN'];
$btitle= $_POST['title'];
$bedition=$_POST['edition'];
$bauthor=$_POST['author'];
$pid=$_POST['p_id'];
$cid=$_POST['c_id'];
$bprice=$_POST['price'];
$tcopies=$_POST['total_copies'];
$acopies=$_POST['available_copies'];
$img=$_FILES['b_img']['name'];
$temp_name=$_FILES['b_img']['tmp_name'];
move_uploaded_file($temp_name,"images/$img");

$sql= "UPDATE books SET title='$btitle',edition='$bedition',author='$bauthor',p_id='$pid',c_id='$cid',price='$bprice',total_copies='$tcopies',available_copies='$acopies',b_img='$img'
 where ISBN='$isbn'";

if(!mysql_query($sql, $con))
{
die('Error' . mysql_error());
}

echo "<script>alert('Book Updated Successfully!')</script>";
		echo "<script>window.open('lib_home.php','_self')</script>";
		
		
mysql_close($con);
}
?>
</body>
</html>
