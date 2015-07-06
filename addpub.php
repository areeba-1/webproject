<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Publisher</title>
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
<h2> Add New Publisher </h2><br/>
</head>
<body>

<form method="post" action="insert_addpub.php" enctype="multipart/form-data">

<table align="center" width="30%" border="0">

<tr>
<td><input type="text" onFocus="myFunction(this)" name="p_name" placeholder="Publisher Name" required /></td>
</tr>

<tr>
<td><input type="text" onFocus="myFunction(this)" name="address" placeholder="Publisher Address" required /></td>
</tr>

<tr>
<td><input type="text" onFocus="myFunction(this)" name="contact" placeholder="Publisher Contact No" required /></td>
</tr>


<tr>
<td><button type="submit" name="addpub">Add Publisher</button></td>
</tr>

</table>
</form>
</div>
</center>
</body>
</html>

