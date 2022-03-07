<?php include("connection.php")
?>
<?php
$ssn=$_POST['SSNum'];
$wday=$_POST['workDay'];
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
			$bsal="select BSalary from Support_staff where SSN='$ssn'";
			$query2=mysql_query($bsal);
			$numrows1=mysql_num_rows($query2);
			if ( $numrows1!=0)
			{
	
			while($row1=mysql_fetch_assoc($query2))
			{
			
				$bsalary= $row1['BSalary'];
				
			
			}
			}
			$gearn=$bsalary*($wday/30);
			$gov=((11/100)*$bsalary)*($wday/30);
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
			else if($bsalary>10900)
				$tax=(35/100)*$gearn-1500;
			$totded=$personal+$tax;
			$NPay=$gearn-$totded;
			$update="update Support_staff set BSalary='$bsalary' where SSN='$ssn'";
				$uquery=mysql_query($update);
				$update="update Support_staff set WorkDay='$wday' where SSN='$ssn'";
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