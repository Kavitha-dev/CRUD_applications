<ul type="none">
<?php
require_once "dbconnect.php";
$sql_qry="select user_id,name from users_tbl";
$users=mysql_query($sql_qry);
while($user=mysql_fetch_assoc($users))
{
?>
<li><?php echo $user['name'];?></li>
<?php
}
?>
</ul>


