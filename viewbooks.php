<table width ="745" align="center" bgcolor="#F5F5F5">
<tr align="center">
<td colspan="6"><h2>View All Books</h2></td>
</tr>


<tr align="center" bgcolor="lightgray">

<td>ID</td>
<td>ISBN</td>
<td>TITLE</td>
<td>AUTHOR</td>
<td>EDITION</td>
<td>IMAGE</td>
<td>DELETE</td>

</tr>
<?php

include_once 'dbconnect.php';
$query="select * from books";
$result= mysql_query($query);
$i=0;

while($row = mysql_fetch_array($result)){
	
	$ISBN=$row['ISBN'];
	$b_name=$row['title'];
	$b_author=$row['author'];
	$b_edition=$row['edition'];
	$b_image=$row['b_img'];
	
		$i++;


?>
<tr align="center">
<td><?php echo $i; ?></td>
<td><?php echo $ISBN; ?>
<td><?php echo $b_name; ?></td>
<td><?php echo $b_author; ?></td>
<td><?php echo $b_edition; ?></td>

</td>
<td><img src="bookimg/<?php echo $b_image;  ?>" width="60" height="60"/></td>

<td><a href ="delete_book.php?delete_book=<?php echo $ISBN;?>">Delete</a></td>


</tr>
<?php } ?>


</table>
