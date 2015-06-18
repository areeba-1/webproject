<?php

include_once 'dbconnect.php';

if(isset($_GET['deletebook']))
{
	$delete_id=$_GET['deletebook'];
	$query="delete from books where ISBN='$delete_id'";
	$run_delete=mysql_query($query);
	
	
	if($run_delete)
	{
		?>
        <script>alert('Book Deleted Successfully ');</script>
        <?php
	}
	
	else
	{
		?>
        <script>alert('Something Went Wrong');</script>
        <?php
	}
}
?>


<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Delete Books</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="delete-form">
<h2> DELETE BOOK <h2> <br/>
<form method="post">

<table align="center" width="30%" border="0">

<tr>
<td><input type="text" name="ISBN" placeholder="Enter ISBN" required /></td>
</tr>

<tr>
<td><input type="text" name="b_name" placeholder="Enter Book Name" required /></td>
</tr>

<tr>
<td><input type="text" name="author_name" placeholder="Enter Author Name " required /></td>
</tr>

<tr>
<td><input type="number" name="edition" placeholder="Enter Edition" required /></td>
</tr>

<tr>
<td><button type="submit" name="add">DELETE BOOK</button></td>
</tr>

</table>
</form>
</div>
</center>
</body>
</html>
