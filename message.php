<?php include("connection.php")
?>
<?php
	$sql="select SSN from SuppFac where Status=1";
	$query=mysql_query($sql);
	if(!$query)
		echo "failed!!!";
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
			$sql1="select SSN from singleuMessages";
			$query1=mysql_query($sql1);
			if(!$query1)
			echo "failed!!!";
			else 
			{
				$ssn1="select SSN from singleuMessages";
				$res1=mysql_query($ssn1);
				$nrows1=mysql_num_rows($res1);
				if($nrows1!=0)
				{
				while($rows1=mysql_fetch_assoc($res1))
				{
					$ssnum1=$rows1['SSN'];
				}
				}
			}
			if($ssnum==$ssnum1)
			{
				$sql2="select Message from singleuMessages where SSN='$ssnum1'";
				$query2=mysql_query($sql2);
				if(!$query2)
				echo "failed!!!";
			else 
			{
				$mess="select Message from singleuMessages where SSN='$ssnum1'";
				$res2=mysql_query($mess);
				$nrows2=mysql_num_rows($res2);
				if($nrows2!=0)
				{
				while($rows2=mysql_fetch_assoc($res2))
				{
					$message=$rows2['Message'];
					echo"<em><br/><img src=";echo"images/right.jpg>&nbsp;$message<br/></em>";
				}
				}
				
			}
			}
			
			}
	}
	$sql3="select Message from alluMessages ";
	$query3=mysql_query($sql3);
	if(!$query3)
		echo "failed!!!";
	else 
	{
			$ssn3="select Message from alluMessages";
			$res13=mysql_query($ssn3);
			$nrows13=mysql_num_rows($res13);
			if($nrows13!=0)
			{
			while($rows13=mysql_fetch_assoc($res13))
			{
				$message3=$rows13['Message'];
				echo"<em><br/><img src=";echo"images/right.jpg>&nbsp;$message3<br/></em>";
			}
			}
	}
?>