<?php
extract($_POST);
require_once "dbconnect.php";
$userid=$_GET['uid'];
if(isset($update))
{
 $sql_update="update users_tbl set name='$name',
mobile='$mobile' where user_id=$userid";
$res=mysql_query($sql_update);	
if($res)
header('location:view_users.php');
else
echo "Not updated";
}

?>

<?php
$sql_read="select name,mobile from users_tbl
where user_id=$userid";
$rs=mysql_query($sql_read);
$row=mysql_fetch_assoc($rs);
?>
<form method="post" action="">
Name : <input type="text" name="name" value="<?php echo $row['name'];?>"/><br/><br/>
Mobile : <input type="text" name="mobile" value="<?php echo $row['mobile'];?>"/><br/><br/>
<input type="submit" name="update" value="Update"/>
</form>

