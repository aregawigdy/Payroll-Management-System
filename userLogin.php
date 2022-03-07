<?php
include('connection.php');
?>
<?php
if (isset($_POST['esubmit'])) 
{
$Username=$_POST['eUserName'];
$Password=$_POST['ePassword'];
$result=mysql_query("select * from SuppFac where UName='$Username' and Password='$Password'")or die (mysql_error());
		
$count=mysql_num_rows($result);
$row=mysql_fetch_array($result);
		
		if ($count > 0)
		{
		session_start();
		$_SESSION['SSN']=$row['SSN'];
		header('location:userHome.php');
		$sql="update SuppFac set Status=1 where UName='$Username'";
		$uquery=mysql_query($sql);
		}
		else
		{
			echo"Either your username or password is incorrect!";
			header('Refresh:5; URL=index.php');
		}
}
?>

				
