<html>
<body>
<?php

include_once 'dbconnect.php';

$query=("SELECT * FROM members WHERE m_name=$_SESSION['name']");

$result=mysql_query($query);
while($row = mysql_fetch_array($result))
{
	$name=$_POST['m_name'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$DOB=$_POST['DOB'];
	$address=$_POST['address'];
	$borrow=$_POST['borrow_attempts'];

?>

<table align="center" width="30%" border="0">

<tr>
<td><h1><php $username ?> Profile Information</h1></td>
</tr>

<tr>
<td align="right">Name:</td>
<td><?php echo $name; ?> </td>
</tr>

<tr>
<td align="right">Gender:</td>
<td><?php echo $gender; ?></td>
</tr>

<tr>
<td align="right">Email:</td>
<td><?php echo $email; ?> </td>
</tr>

<tr>
<td align="right">Contact_no:</td>
<td> <?php echo $contact; ?></td>
</tr>

<tr>
<td align="right">DOB:</td>
<td> <?php echo $DOB; ?></td>
</tr>

<tr>
<td align="right">Address:</td>
<td><?php echo $address; ?> </td>
</tr>

</table>
<?php  }  ?>

</body>
</html>
