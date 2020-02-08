<?php
require_once "dbconnect.php";
$sql_ins="insert into users_tbl(name) values('pqrnew')";
mysql_query($sql_ins);
echo mysql_insert_id();
?>
