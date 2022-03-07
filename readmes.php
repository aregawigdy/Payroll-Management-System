<?php include("connection.php")
?>
<?php
	$sql="select SSN from adminMessages";
	$query=mysql_query($sql);
	if(!$query)
		echo "failed!!!";
	else 
	{
			$ssn="select SSN from adminMessages";
			$res11=mysql_query($ssn);
			$nrows11=mysql_num_rows($res11);
			if($nrows11!=0)
			{
			while($rows11=mysql_fetch_assoc($res11))
			{
				$ssnum=$rows11['SSN'];
			
			$sql1="select Message from adminMessages where SSN='$ssnum'";
			$query1=mysql_query($sql1);
			if(!$query1)
			echo "failed!!!";
			else 
			{
				$ssn1="select Message from adminMessages where SSN='$ssnum'";
				$res1=mysql_query($ssn1);
				$nrows1=mysql_num_rows($res1);
				if($nrows1!=0)
				{
				while($rows1=mysql_fetch_assoc($res1))
				{
					$comment=$rows1['Message'];
					echo"<em><br/><br/><img src=";echo"images/right.jpg>&nbsp;SSN:&nbsp;$ssnum&nbsp;=>$comment<br/></em>";
				}
				}
			}
			}
			}
			else
				echo"<br/>No messages are sent by users yet!!!";
	}
?>