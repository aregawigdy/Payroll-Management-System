<?php include("connection.php")
?>
<?php
$ssn=$_POST['SSNum'];
$deptCode=$_POST['Dept'];
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
			
			$bsal="select BSalary from Faculty_staff where SSN='$ssn'";
			$res2=mysql_query($bsal);
			$nrows2=mysql_num_rows($res2);
			if($nrows2!=0)
			{
			while($rows2=mysql_fetch_assoc($res2))
			{
				$bsalary=$rows2['BSalary'];
			}
			}

		if($deptCode=="Dean"||$deptCode=="Head Department")
			$anallow=((10/100)*$bsalary)*($workday/30);
		else
			$anallow=0;
		if($deptCode=="Dean")
		{
			$pos=1500*($workday/30);
			$house=1000*($workday/30);
		}
		else if($deptCode=="Head Department")
		{
			$pos=1000*($workday/30);
			$house=800*($workday/30);
		}
		else if($deptCode=="Lecturer"||"Assistant Lecturer"||"Lab Assistant"||"Lab Technician")
		{
			$pos=0;
			$house=800*($workday/30);
		}
		else
		{
			$pos=0;
			$house=0;
		}
		$taxAllow=$anallow+$pos+$house;
		
		$gearn=$bsalary*($workday/30)+$taxAllow;
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
			$update="update Faculty_staff set DeptCode='$deptCode' where SSN='$ssn'";
				$uquery=mysql_query($update);
			$update="update Faculty_staff set AnnAllow='$anallow' where SSN='$ssn'";
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
else
		echo "SSN not exist in the Faculty_staff table";
		header('Refresh:5; URL=home.php');

	?>