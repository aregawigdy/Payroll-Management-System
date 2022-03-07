<?php include("connection.php")
?>
<?php
$pwd=$_POST['cpassword'];
$npwd=$_POST['npassword'];
$sql="select * from SuppFac where Password='$pwd' and Status=1";
$query=mysql_query($sql);
$numrows=mysql_num_rows($query);
if ( $numrows!=0){
	
			while($row =mysql_fetch_assoc($query))
			{
			
				$dbpwd= $row['Password'];
			
			
			}
	if($pwd==$dbpwd) 
	{
      $sql2="update SuppFac set Password='$npwd' where Status=1";
		$query2=mysql_query($sql2);
	if($query2)
	echo "Password Changed!";
	else
	echo "Error!";
	header('Refresh:5; URL=userHome.php');
	}	
}
else
	echo "Current Password you entred is incorrect!";
	header('Refresh:5; URL=userHome.php');
?>