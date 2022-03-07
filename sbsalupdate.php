<?php include("connection.php")
?>
<?php
$ssn=$_POST['SSNum'];
$bsalary=$_POST['bSalary'];
$sql="select * from Support_staff where SSN='$ssn'";
$query=mysql_query($sql);
$numrows=mysql_num_rows($query);
if ( $numrows!=0){
	
			while($row =mysql_fetch_assoc($query))
			{
			
				$dbssn = $row['SSN'];
			
			
			}
	if($ssn==$dbssn) 
	{
			$work="select WorkDay from Support_staff where SSN='$ssn'";
			$query1=mysql_query($work);
			$numrows1=mysql_num_rows($query1);
			if($numrows1!=0)
			{
				while($row1=mysql_fetch_assoc($query1))
				{
					$workday=$row1['WorkDay'];
				}
			}
			
			$anallow=((10/100)*$bsalary)*($workday/30);
			$gearn=$bsalary*($workday/30);
			$gov=(11/100)*$bsalary;
			$personal=(7/100)*$bsalary;
			if($bsalary<=600)
				$tax=0;
			else if($bsalary>600 && $bsalary<=1650)
				$tax=(10/100)*$bsalary-60;
			else if($bsalary>1650 && $bsalary<=3200)
				$tax=(15/100)*$bsalary-142.50;
			else if($bsalary>3200 && $bsalary<=5250)
				$tax=(20/100)*$bsalary-302.50;
			else if($bsalary>5250 && $bsalary<=7800)
				$tax=(25/100)*$bsalary-565;
			else if($bsalary>7800 && $bsalary<=10900)
				$tax=(30/100)*$bsalary-955;
			else if($bsalary>10900)
				$tax=(35/100)*$bsalary-1500;
			$totded=$personal+$tax;
			$NPay=$gearn-$totded;
			$update="update Support_staff set BSalary='$bsalary' where SSN='$ssn'";
				$uquery=mysql_query($update);
			$update="update Support_staff set GrEarning='$gearn' where SSN='$ssn'";
				$uquery=mysql_query($update);
			$update="update Support_staff set GovPFund='$gov' where SSN='$ssn'";
				$uquery=mysql_query($update);
			$update="update Support_staff set PerPFund='$personal' where SSN='$ssn'";
				$uquery=mysql_query($update);
			$update="update Support_staff set InTax='$tax' where SSN='$ssn'";
				$uquery=mysql_query($update);
			$update="update Support_staff set TotDeduction='$totded' where SSN='$ssn'";
				$uquery=mysql_query($update);
			$update="update Support_staff set NetPay='$NPay' where SSN='$ssn'";
				$uquery=mysql_query($update);
		if(!$uquery)
			echo "Error Updation";
		else{
			echo "Successfully Updated!!!";
			header('Refresh:5; URL=home.php');
		}
	}
		
	}
else
		echo "SSN not exist in the Support_staff table";
		header('Refresh:5; URL=home.php');

?>