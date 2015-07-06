<div id=view>
<table width ="1000" align="center" bgcolor="#F5F5F5">
<tr align="center">
<td colspan="6"><h2>View Books</h2></td>
</tr>


<tr align="center" bgcolor="lightgray">

<td>ID</td>
<td>ISBN</td>
<td>TITLE</td>
<td>AUTHOR</td>
<td>EDITION</td>
<td>PRICE</td>
<td>TOTAL BOOKS</td>
<td>AVAILABLE BOOKS</td>
<td>DELETE</td>
<td>EDIT</td>

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
	$b_price=$row['price'];
	$t_copies=$row['total_copies'];
	$a_copies=$row['available_copies'];
	
		$i++;

?>

<tr align="center">

<td><?php echo $i; ?></td>
<td><?php echo $ISBN; ?></td>
<td><?php echo $b_name; ?></td>
<td><?php echo $b_author; ?></td>
<td><?php echo $b_edition; ?></td>
<td><?php echo $b_price; ?></td>
<td><?php echo $t_copies; ?></td>
<td><?php echo $a_copies; ?></td>


<td><a href ="delete_book.php?delete_book=<?php echo $ISBN;?>">Delete</a></td>
<td><a href ="editbooks.php?editbooks=<?php echo $ISBN;?>">Edit</a></td>


</tr>
<?php } ?>


</table>
</div>
