<?php include("connection.php")
?>
<?php
$ssn=$_POST['SSNum'];
$workday=$_POST['work'];
$sql="select * from Faculty_staff where SSN='$ssn'";
$query=mysql_query($sql);
$numrows=mysql_num_rows($query);
if ( $numrows!=0){
	
			while($row =mysql_fetch_assoc($query))
			{
			
				$dbssn = $row['SSN'];
			
			
			}
	if($ssn==$dbssn) 
	{
        	$scho="select Scholar from Faculty_staff where SSN='$ssn'";
			$query99=mysql_query($scho);
			$numrows99=mysql_num_rows($query99);
			if($numrows99!=0)
			{
				while($row99=mysql_fetch_assoc($query99))
				{
					$scholar=$row99['Scholar'];
				}
			}
if($scholar=="yes"||$scholar=="Yes"||$scholar=="YES")
	{
			echo "Working date updation for scholar is not allowed!";
	}
else 
{
			$bsal="select BSalary from Faculty_staff where SSN='$ssn'";
			$query9=mysql_query($bsal);
			$numrows9=mysql_num_rows($query9);
			if($numrows9!=0)
			{
				while($row9=mysql_fetch_assoc($query9))
				{
					$bsalary=$row9['BSalary'];
				}
			}
			$postion="select Position from Faculty_staff where SSN='$ssn'";
			$res3=mysql_query($postion);
			$nrows3=mysql_num_rows($res3);
			if($nrows3!=0)
			{
			while($rows3=mysql_fetch_assoc($res3))
			{
				$pos=($rows3['Position'])*($workday/30);
			}
			}
			
			$home="select Housing from Faculty_staff where SSN='$ssn'";
			$res5=mysql_query($home);
			$nrows5=mysql_num_rows($res5);
			if($nrows5!=0)
			{
			while($rows5=mysql_fetch_assoc($res5))
			{
				$house=($rows5['Housing'])*($workday/30);
			}
			}
			if($pos!=0)
			{
				$anna="select AnnAllow from Faculty_staff where SSN='$ssn'";
			    $res7=mysql_query($anna);
			    $nrows7=mysql_num_rows($res7);
			    if($nrows7!=0)
			    {
					while($rows7=mysql_fetch_assoc($res7))
					{
						$anallow=((10/100)*$bsalary)*($workday/30);
					}
			    }
			}
			else 
			{
				$anallow=0;
			}
			$taxi=$house+$pos+$anallow;
			$gearn=$bsalary*($workday/30)+$taxi;
			$gov=((11/100)*$bsalary)*($workday/30);
			$personal=(7/100)*$bsalary;
			if($gearn<=600)
				$tax=0;
			else if($gearn>600 && $gearn<=1650)
				$tax=(10/100)*$gearn-60;
			else if($gearn>1650 && $gearn<=3200)
				$tax=(15/100)*$gearn-142.50;
			else if($gearn>3200 && $gearn<=5250)
				$tax=(20/100)*$gearn-302.50;
			else if($gearn>5250 && $gearn<=7800)
				$tax=(25/100)*$gearn-565;
			else if($gearn>7800 && $gearn<=10900)
				$tax=(30/100)*$gearn-955;
			else if($gearn>10900)
				$tax=(35/100)*$gearn-1500;
			$totded=$personal+$tax;
			$NPay=$gearn-$totded;
			
			$update="update Faculty_staff set GrSalary='$gearn' where SSN='$ssn'";
				$uquery=mysql_query($update);
			$update="update Faculty_staff set GovPen='$gov' where SSN='$ssn'";
				$uquery=mysql_query($update);
			$update="update Faculty_staff set PerPen='$personal' where SSN='$ssn'";
				$uquery=mysql_query($update);
			$update="update Faculty_staff set IncomeTax='$tax' where SSN='$ssn'";
				$uquery=mysql_query($update);
			$update="update Faculty_staff set TotDeduction='$totded' where SSN='$ssn'";
				$uquery=mysql_query($update);
			$update="update Faculty_staff set NetPay='$NPay' where SSN='$ssn'";
				$uquery=mysql_query($update);
			$update="update Faculty_staff set AnnAllow='$anallow' where SSN='$ssn'";
				$uquery=mysql_query($update);
			$update="update Faculty_staff set TaxAllow='$taxi' where SSN='$ssn'";
				$uquery=mysql_query($update);
			$update="update Faculty_staff set WorkDay='$workday' where SSN='$ssn'";
				$uquery=mysql_query($update);
			$update="update Faculty_staff set Position='$pos' where SSN='$ssn'";
				$uquery=mysql_query($update);
			$update="update Faculty_staff set Housing='$house' where SSN='$ssn'";
				$uquery=mysql_query($update);
		if(!$uquery)
			echo"Error Updation";
		else
			echo "Successfully Updated!!!";
			header('Refresh:5; URL=home.php');
}
			}
		
	}
else
		echo "SSN not exist in the Faculty_staff table";
		header('Refresh:5; URL=home.php');

	?>