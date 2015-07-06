<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Member</title>
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
<br/>
<h2> Add New Member </h2>

<form method="post" action="insert_addmembers.php" enctype="multipart/form-data">

<table align="center" width="30%" border="0">

<tr>
<td><input type="text" onFocus="myFunction(this)" name="m_name" placeholder="Your Name" required /></td>
</tr>

<tr>
<td><input type="text" onFocus="myFunction(this)" name="email" placeholder="Your Email" required /></td>
</tr>

<tr>
<td><input type="text" onFocus="myFunction(this)" name="password" placeholder="Your Password" required /></td>
</tr>

<tr>
<td><input type="number" onFocus="myFunction(this)" name="contact" placeholder="Your Contact No" required /></td>
</tr>

<tr>
<td><input type="date" onFocus="myFunction(this)" name="DOB" placeholder="Your DOB" required /></td>
</tr>

<tr>
<td><input type="text" onFocus="myFunction(this)" name="address" placeholder="Your Address" required /></td>
</tr>


<tr>
<td>Male:<input type="radio" name="gender" value= "male"/>
	Female:<input type="radio" name="gender" value = "female"/>
</tr>


<tr>
<td><button type="submit" name="addmem">Add Member</button></td>
</tr>

</table>
</form>
</div>
</center>
</body>
</html>
