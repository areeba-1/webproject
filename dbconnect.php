<?php
if(!mysql_connect("sql313.base.pk","basep_16339368","base123"))
{
	die('could not connect'.mysql_error());
}

if(!mysql_select_db("basep_16339368_db"))
{
	die('could not connect'.mysql_error());
}

?>
