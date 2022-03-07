<?php include("connection.php")
?>
<?php
$uname=$_POST['cUserName'];
$nuname=$_POST['nUserName'];
$sql="select * from Admin where UName='$uname'";
$query=mysql_query($sql);
$numrows=mysql_num_rows($query);
if ( $numrows!=0){
	
			while($row =mysql_fetch_assoc($query))
			{
			
				$dbuname = $row['UName'];
			
			
			}
	if($uname==$dbuname) 
	{
      $sql2="update Admin set UName='$nuname'";
		$query2=mysql_query($sql2);
	if($query2)
	echo "User Name Changed!";
	else
	echo "Error!";
	header('Refresh:5; URL=home.php');
	}	
}
else
	echo "Current Username you entered is incorrect!";
	header('Refresh:5; URL=home.php');
?>