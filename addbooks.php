<?php
$con = mysql_connect("localhost" ,"root" , "");
if(!$con)
{
die('could not connect'.mysql_error());
}
mysql_select_db("Web_LMS" , $con);

$c_query="select * from categories";
$c_result=mysql_query($c_query) or die("error".mysql_error());

$p_query="select * from publishers";
$p_result=mysql_query($p_query) or die("error".mysql_error());

?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Add Books</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script>
function myFunction(x) 
{
    x.style.background = "#F8F8FF";
}
</script>
</head>
<body>
<center>

<div id="addbook-form">
<h2> ADD BOOK <h2> 

<form method="post" action="insert_addbooks.php" enctype="multipart/form-data">

<table align="center" width="30%" border="0">

<tr>
<td><input type="text" onFocus="myFunction(this)" name="ISBN" placeholder="Enter ISBN" required /></td>
</tr>

<tr>
<td><input type="text" onFocus="myFunction(this)" name="title" placeholder="Enter Boook Title" required /></td>
</tr>

<tr>
<td><input type="text" onFocus="myFunction(this)" name="edition" placeholder="Enter Edition" required /></td>
</tr>

<tr>
<td><input type="text" onFocus="myFunction(this)" name="author" placeholder="Enter Author Name" required /></td>
</tr>

<tr>
<td><input type="number" onFocus="myFunction(this)" name="p_id" placeholder="Enter Publisher ID" required /></td>
</tr>

<tr>
<td><input type="number" onFocus="myFunction(this)" name="c_id" placeholder="Enter Category ID" required /></td>
</tr>

<tr>
<td><input type="text" onFocus="myFunction(this)" name="price" placeholder="Enter Price" required /></td>
</tr>

<tr>
<td><input type="number"onfocus="myFunction(this)" name="total_copies" placeholder="Enter Total No Of Copies" required /></td>
</tr>

<tr>
<td><input type="number" onFocus="myFunction(this)" name="available_copies" placeholder="Enter No Of Copies Available" required /></td>
</tr>
<tr>


<td><button type="submit" name="add">ADD BOOK</button></td>
</tr>

</table>
</form>
</div>
</center>
</body>
</html>
