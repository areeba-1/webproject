<div id=view>
<table width ="1000" align="center" bgcolor="#F5F5F5">
<tr align="center">
<td colspan="6"><h2>View Members</h2></td>
</tr>

<tr align="center" bgcolor="lightgray">

<td>ID</td>
<td>NAME</td>
<td>GENDER</td>
<td>EMAIL</td>
<td>NUMBER</td>
<td>DOB</td>
<td>ADDRESS</td>
<td>DELETE</td>
<td>EDIT</td>

</tr>
<?php

include_once 'dbconnect.php';
$get_mem="select * from members";
$query="select * from members";
$result= mysql_query($query);
$i=0;

while($row_mem = mysql_fetch_array($result))
{
	$m_id=$row_mem['m_id'];
	$m_name=$row_mem['m_name'];
	$gen=$row_mem['gender'];
	$m_email=$row_mem['email'];
	$m_con=$row_mem['contact'];
	$m_dob=$row_mem['DOB'];
	$m_add=$row_mem['address'];
		//$i++;
?>

<tr align="center">

<td><?php echo $m_id; ?></td>
<td><?php echo $m_name; ?></td>
<td><?php echo $gen;  ?></td>
<td><?php echo $m_email;  ?></td>
<td><?php echo $m_con; ?></td>
<td><?php echo $m_dob;  ?></td>
<td><?php echo $m_add;  ?></td>

<td><a href ="delete_mem.php?delete_mem=<?php echo $m_id;?>">Delete</a></td>
<td><a href ="editmem.php?editmems=<?php echo $m_id;?>">Edit</a></td>
</tr>

<?php } ?>

</table>
