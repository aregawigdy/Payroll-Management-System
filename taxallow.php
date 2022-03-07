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
			$sql1="select TaxAllow from Faculty_staff where SSN='$ssnum'";
			$query1=mysql_query($sql1);
			if(!$query1)
				echo"Failed to search!!!";
			else
			{
				$scho="select TaxAllow from Faculty_staff where SSN='$ssnum'";
				$res1=mysql_query($scho);
				$nrows1=mysql_num_rows($res1);
				if($nrows1!=0)
				{
					while($rows1=mysql_fetch_assoc($res1))
					{
						$annallow=$rows1['TaxAllow'];
					}
			
				}
				echo"$annallow";
			}
		}
		}
?>