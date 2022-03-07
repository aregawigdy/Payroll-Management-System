<?php include("connection.php")
?>
<?php
	$sql="select SSN from SuppFac where Status=1 and SSN LIKE 'F%'";
	$query=mysql_query($sql);
	if(!$query)
		echo"Failed to search!!!";
	else
	{
		$ssn="select SSN from SuppFac where Status=1 and SSN like 'F%'";
		$res11=mysql_query($ssn);
		$nrows11=mysql_num_rows($res11);
		if($nrows11!=0)
		{
			while($rows11=mysql_fetch_assoc($res11))
			{
				$ssnum=$rows11['SSN'];
			}
			$sql1="select WorkDay from Faculty_staff where SSN='$ssnum'";
			$query1=mysql_query($sql1);
			if(!$query1)
				echo"Failed to search!!!";
			else
			{
				$bsal1="select WorkDay from Faculty_staff where SSN='$ssnum'";
				$res1=mysql_query($bsal1);
				$nrows1=mysql_num_rows($res1);
				if($nrows1!=0)
				{
					while($rows1=mysql_fetch_assoc($res1))
					{
						$workday=$rows1['WorkDay'];
					}
			
				}
				echo"$workday";
			}
		}
		else
		{
		$ssn2="select SSN from SuppFac where Status=1 and SSN like 'S%'";
		$res2=mysql_query($ssn2);
		$nrows2=mysql_num_rows($res2);
		if($nrows2!=0)
		{
			while($rows2=mysql_fetch_assoc($res2))
			{
				$ssnum2=$rows2['SSN'];
			}
			$sql2="select WorkDay from Support_staff where SSN='$ssnum2'";
			$query2=mysql_query($sql2);
			if(!$query2)
				echo"Failed to search!!!";
			else
			{
				$bsal2="select WorkDay from Support_staff where SSN='$ssnum2'";
				$res3=mysql_query($bsal2);
				$nrows3=mysql_num_rows($res3);
				if($nrows3!=0)
				{
					while($rows3=mysql_fetch_assoc($res3))
					{
						$workday2=$rows3['WorkDay'];
					}
			
				}
				echo"$workday2";
			}
		}
		}
		
	}
?>							