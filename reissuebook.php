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

<form action="insert_reissue.php" method="post"  enctype="multipart/form-data">

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LogIn</title>
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

<div id="reissue-form">
<h2> REISSUE BOOK </h2> <br/>
<form method="post">

<table align="center" width="30%" border="0">

<tr>
<td><input type="text"  onfocus="myFunction(this)" name="ISBN" placeholder="Enter ISBN" required /></td>
</tr>

<tr>
<td><input type="text"  onfocus="myFunction(this)" name="l_id" placeholder="Enter Librarian ID" required /></td>
</tr>

<tr>
<td><input type="text"  onfocus="myFunction(this)" name="m_id" placeholder="Enter Member ID" required /></td>
</tr>

<tr>
<td><input type="date"  onfocus="myFunction(this)" name="issue_date" placeholder="Enter Issue Date" required /></td>
</tr>

<tr>
<td><input type="date"  onfocus="myFunction(this)" name="return_date" placeholder="Enter New Return Date" required /></td>
</tr>

<tr>
<td><button type="submit" name="reissue">REISSUE BOOK</button></td>
</tr>


</table>
</form>
</div>
</center>
</body>
</html>
