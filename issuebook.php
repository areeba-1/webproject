<?php
$con = mysql_connect("localhost" ,"root" , "");
if(!$con)
{
	die('could not connect'.mysql_error());
}
mysql_select_db("Web_LMS" , $con);

$bquery="select * from books";
$bresult=mysql_query($bquery) or die("error".mysql_error());

$lquery="select * from librarians";
$lresult=mysql_query($bquery) or die("error".mysql_error());

$mquery="select * from members";
$mresult=mysql_query($bquery) or die("error".mysql_error());

?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Issue Books</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="issuebook-form">
<h2> ISSUE BOOK <h2> <br/>

<form method="post" action="insert_issue.php" enctype="multipart/form-data">

<table align="center" width="30%" border="0">

<tr>
<td><input type="text" name="ISBN" placeholder="Enter ISBN" required /></td>
</tr>

<tr>
<td><input type="text" name="m_id" placeholder="Enter Member ID" required /></td>
</tr>

<tr>
<td><input type="text" name="l_id" placeholder="Enter Librarian ID" required /></td>
</tr>

<tr>
<td><input type="date" name="issue_date" placeholder="Enter Issue Date" required /></td>
</tr>

<tr>
<td><input type="date" name="return_date" placeholder="Enter Return Date" required /></td>
</tr>

<tr>
<td><button type="submit" name="issue">ISSUE BOOK</button></td>
</tr>

<tr>
<td><a href="returnbook.php">RETURN BOOK HERE</a></td>
</tr>


</table>
</form>
</div>
</center>
</body>
</html>
