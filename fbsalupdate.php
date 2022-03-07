<?php include("connection.php")
?>
<?php
$ssn=$_POST['SSNum'];
$bsalary=$_POST['bSalary'];
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
			$res11=mysql_query($scho);
			$nrows11=mysql_num_rows($res11);
			if($nrows11!=0)
			{
			while($rows11=mysql_fetch_assoc($res11))
			{
				$scholar=$rows11['Scholar'];
			}
			}
if($scholar=="Yes"||$scholar=="yes"||$scholar=="YES")
{
		$ScholarPay=(1/2)*$bsalary;
		$gearn=$ScholarPay;
		$workday=30;
		$anallow=0;
		$pos=0;
		$house=0;
		$gov=(11/100)*$bsalary;
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

			$update="update Faculty_staff set BSalary='$bsalary' where SSN='$ssn'";
				$uquery=mysql_query($update);
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
			$update="update Faculty_staff set ScholarPay='$ScholarPay' where SSN='$ssn'";
				$uquery=mysql_query($update);
}
	else
{
			$ScholarPay=0;
			$work="select WorkDay from Faculty_staff where SSN='$ssn'";
			$query1=mysql_query($work);
			$numrows1=mysql_num_rows($query1);
			if($numrows1!=0)
			{
				while($row1=mysql_fetch_assoc($query1))
				{
					$workday=$row1['WorkDay'];
				}
			}
			$postion="select Position from Faculty_staff where SSN='$ssn'";
			$res3=mysql_query($postion);
			$nrows3=mysql_num_rows($res3);
			if($nrows3!=0)
			{
			while($rows3=mysql_fetch_assoc($res3))
			{
				$pos=$rows3['Position'];
			}
			}
			
			$home="select Housing from Faculty_staff where SSN='$ssn'";
			$res5=mysql_query($home);
			$nrows5=mysql_num_rows($res5);
			if($nrows5!=0)
			{
			while($rows5=mysql_fetch_assoc($res5))
			{
				$house=$rows5['Housing'];
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

			$update="update Faculty_staff set BSalary='$bsalary' where SSN='$ssn'";
				$uquery=mysql_query($update);
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
			$update="update Faculty_staff set ScholarPay='$ScholarPay' where SSN='$ssn'";
				$uquery=mysql_query($update);
}
		if(!$uquery)
			echo "Error Updation";
		else
			echo "Successfully Updated!!!";
			header('Refresh:5; URL=home.php');
	}
		
	}
else
		echo "SSN not exist in the Faculty_staff table";
		header('Refresh:5; URL=home.php');
?>