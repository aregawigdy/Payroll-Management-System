<?php include("connection.php")
?>
<?php
	
	$sql="select SSN from SuppFac where Status=1";
	$query=mysql_query($sql);
	if(!$query)
		echo"Failed to search!!!";
	else
	{
			$ssn="select SSN from SuppFac where Status=1";
			$res11=mysql_query($ssn);
			$nrows11=mysql_num_rows($res11);
			if($nrows11!=0)
			{
			while($rows11=mysql_fetch_assoc($res11))
			{
				$ssnum=$rows11['SSN'];
			}
			}
		echo"$ssnum";
	}
	
?>