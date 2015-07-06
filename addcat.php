<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Category</title>
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
<br/><br/><br/>
<h2>Add New Category</h2><br/>
</head>
<body>

<form method="post" action="insert_cat.php" enctype="multipart/form-data">

<table align="center" width="30%" border="0">

<tr>
<td><input type="text" onFocus="myFunction(this)" name="name" placeholder="Enter Category Name" required /></td>
</tr>

<tr>
<td><button type="submit" name="AddCat">Add Category</button></td>
</tr>

</table>
</form>
</div>
</center>
</body>
</html>
