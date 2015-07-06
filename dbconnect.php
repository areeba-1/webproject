<?php
if(!mysql_connect("localhost","root",""))
{
	die('could not connect'.mysql_error());
}

if(!mysql_select_db("Web_LMS"))
{
	die('could not connect'.mysql_error());
}

?>
