<?php include("connection.php")
?>
<?php
	$ssno=$_POST['SSNum'];
	$sql="select * from Support_staff where SSN='$ssno'";
	$query=mysql_query($sql);
	$numrows=mysql_num_rows($query);
if ( $numrows!=0){
	
			while($row =mysql_fetch_assoc($query))
			{
				$dbssn = $row['SSN'];
			}
	if($ssno==$dbssn) 
	{
	$del="delete from Support_staff where SSN='$ssno'";
	$query1=mysql_query($del);
	if($query1)
		echo"deleted successfully!";
	else
		echo "Error";
		header('Refresh:5; URL=home.php');
	}
	
	}
	
	else
		echo"couldn't find SSN!!";
		header('Refresh:5; URL=home.php');
?>