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

<form action="insert_return.php" method="post"  enctype="multipart/form-data">

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Return Book</title>
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

<div id="return-form">
<h2> RETURN BOOK </h2> <br/>
<form method="post">

<table align="center" width="30%" border="0">

<tr>
<td><input type="text" onFocus="myFunction(this)"  name="ISBN" placeholder="Enter ISBN" required /></td>
</tr>

<tr>
<td><input type="text"  onfocus="myFunction(this)" name="l_id" placeholder="Enter Librarian ID" required /></td>
</tr>

<tr>
<td><input type="text"  onfocus="myFunction(this)" name="m_id" placeholder="Enter Member ID" required /></td>
</tr>

<tr>
<td><input type="date" onFocus="myFunction(this)"  name="issue_date" placeholder="Enter Issue Date" required /></td>
</tr>

<tr>
<td><input type="date" onFocus="myFunction(this)"  name="return_date" placeholder="Enter Return Date" required /></td>
</tr>

<tr>
<td><input type="number" onFocus="myFunction(this)"  name="fine" placeholder="Enter Fine (If Any)" required /></td>
</tr>

<tr>
<td><button type="submit" name="return">RETURN BOOK</button></td>
</tr>

</table>
</form>
</div>
</center>
</body>
</html>
