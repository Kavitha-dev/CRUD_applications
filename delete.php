<?php
session_start();
if(empty($_SESSION['user_id']))
{
	header('location:login.php');
}
?>
<?php
if(!empty($_GET['uid']))
{
	if(is_int((int)$_GET['uid']))
	{
		require_once "dbconnect.php";
		$userid=$_GET['uid'];
		$sql_delete="delete from users_tbl where user_id=$userid";
		$res=mysql_query($sql_delete);
		if($res)
		header('location:view_users.php');
		else
		echo "Not Deleted";
	}
	else
	{
			echo "Invalid user id";
	}
}
else
{
		echo "Something went wrong..!";
}

?>