<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EDIT BOOK</title>
</head>
<body>

<?php
$con = mysql_connect("localhost" ,"root" , "");
if(!$con)
{
die('could not connect'.mysql_error());
}
mysql_select_db("Web_LMS" , $con);

$query="select * from books";
$result=mysql_query($query) or die("error".mysql_error());

?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Update Books</title>
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
<h2> EDIT BOOK <h2> <br/>

<form method="post" action="insert_editbooks.php" enctype="multipart/form-data">

<table align="center" width="30%" border="0">

<tr>
<td><input type="text" onFocus="myFunction(this)"  name="ISBN" placeholder="Enter ISBN" required /></td>
</tr>

<tr>
<td><input type="text" onFocus="myFunction(this)"  name="title" placeholder="Enter Boook Title" required /></td>
</tr>

<tr>
<td><input type="text" onFocus="myFunction(this)"  name="edition" placeholder="Enter Edition" required /></td>
</tr>

<tr>
<td><input type="text" onFocus="myFunction(this)"  name="author" placeholder="Enter Author Name" required /></td>
</tr>

<tr>
<td><input type="number" onFocus="myFunction(this)"  name="p_id" placeholder="Enter Publisher ID" required /></td>
</tr>

<tr>
<td><input type="number" onFocus="myFunction(this)"  name="c_id" placeholder="Enter Category ID" required /></td>
</tr>

<tr>
<td><input type="text" onFocus="myFunction(this)"  name="price" placeholder="Enter Price" required /></td>
</tr>

<tr>
<td><input type="number" onFocus="myFunction(this)" name="total_copies" placeholder="Enter Total No Of Copies" required /></td>
</tr>

<tr>
<td><input type="number"  onfocus="myFunction(this)" name="available_copies" placeholder="Enter No Of Copies Available" required /></td>
</tr>
<tr>


<td><button type="submit" name="add">EDIT BOOK</button></td>
</tr>

</table>
</form>
</div>
</center>
</body>
</html>
