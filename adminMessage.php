<?php include("connection.php")
?>
<?php
	
	$comment=$_POST['Comment'];
	$ssn="select SSN from SuppFac where Status=1";
	$query1=mysql_query($ssn);
	if($query1)
	{
		//$ssn1="select SSN from SuppFac where Status=1";
		//$query2=mysql_query($ssn1);
		$nrows11=mysql_num_rows($query1);
			if($nrows11!=0)
			{
			while($rows11=mysql_fetch_assoc($query1))
			{
				$ssnum=$rows11['SSN'];
			}
			$sql="insert into AdminMessages values('$ssnum','$comment')";
			$query=mysql_query($sql);
			if(!$query)
				echo"Failed to send!!! ".mysql_error();
				
			else
				
			echo"Message Succesfully sent!!!";
			header('Refresh:5; URL=userHome.php');
			}
	}
	else
		echo"Failed to Send";
		header('Refresh:5; URL=userHome.php');
		?>
		
		