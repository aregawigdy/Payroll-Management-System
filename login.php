<?php
include('connection.php');

if (isset($_POST['submit'])) 
{
$UserName=$_POST['UserName'];
$Password=$_POST['Password'];
$result=mysql_query("select * from Admin where UName='$UserName' and Password='$Password'")or die (mysql_error());
		
$count=mysql_num_rows($result);
$row=mysql_fetch_array($result);
		
		if ($count > 0)
		{
		session_start();
		$_SESSION['admin_id']=$row['admin_id'];
		header('location:home.php');
		
		}
		else
		{
			echo"Either your username or password is incorrect!";
			header('Refresh:5; URL=index.php');
		}
}
?>

