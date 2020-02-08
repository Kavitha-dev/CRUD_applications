
<p>
Welcome to <?php echo ucfirst($_SESSION['name']);?>
&nbsp;&nbsp;<a href="logout.php">Logout</a>
</p>
<table border="1">
<tr><th>Sl.No</th><th>Name</th><th>Email</th><th>Mobile</th><th>Action</th></tr>
<?php
require_once "dbconnect.php";
$sql_qry="select * from users_tbl where user_id=$_SESSION[user_id]";
$users=mysql_query($sql_qry);
$i=1;
while($user=mysql_fetch_assoc($users))
{
?>
<tr><td><?php echo $i;?></td><td><?php echo $user['name'];?></td><td><?php echo $user['email'];?></td><td><?php echo $user['mobile'];?></td>
<td>
<a href="update.php?uid=<?php echo $user['user_id'];?>">Update</a>
<a href="delete.php?uid=<?php echo $user['user_id'];?>">Delete</a>
</td>
</tr>
<?php		
    $i++;
}
?>
</table>

