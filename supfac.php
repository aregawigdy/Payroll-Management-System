<?php include("connection.php")
?>
<?php
		$sql2="select SSN,FName,LName from Support_staff ";
	$query2=mysql_query($sql2);
	if (!$query2)
	{
		echo"Failed!!!";
	}
	else
	{
			$result2="select SSN,FName,LName from Support_staff ";
			$res112=mysql_query($result2);
			$nrows112=mysql_num_rows($res112);
			if($nrows112!=0)
			{
			while($rows112=mysql_fetch_assoc($res112))
			{
				$success=$rows112['SSN'];
				$success2=$rows112['FName'];
				$success3=$rows112['LName'];
				$uname=$success;
				$password=$success;
				$status=0;
				$sqls2="insert into SuppFac values('$success','$success2','$success3','$uname','$password','$status')";
				$querys1=mysql_query($sqls2);
			}
			}
			
    }

	$sql="select SSN,FName,LName from Faculty_staff ";
	$query=mysql_query($sql);
	if (!$query)
	{
		echo"Failed!!!";
	}
	else
	{
			$result="select SSN,FName,LName from Faculty_staff ";
			$res11=mysql_query($result);
			$nrows11=mysql_num_rows($res11);
			if($nrows11!=0)
			{
			while($rows11=mysql_fetch_assoc($res11))
			{
				$success=$rows11['SSN'];
				$success2=$rows11['FName'];
				$success3=$rows11['LName'];
				$uname=$success;
				$password=$success;
				$status=0;
				$sqls1="insert into SuppFac values('$success','$success2','$success3','$uname','$password','$status')";
				$querys1=mysql_query($sqls1);
			}
			}
			
	}
	

?>