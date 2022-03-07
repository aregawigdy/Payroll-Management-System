<?php include("connection.php")
?>
<?php
$ssn=$_POST['SSNum'];
$lname=$_POST['lName'];
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
		$update="update Support_staff set LName='$lname' where SSN='$ssn'";
	    $uquery=mysql_query($update);
		if(!$uquery)
			echo"Error Updation";
		else
			echo "Successfully Updated!!!";
			header('Refresh:5; URL=home.php');
	}
		
	}
else
		echo "SSN not exist in the Support_staff table";
		header('Refresh:5; URL=home.php');
	?>