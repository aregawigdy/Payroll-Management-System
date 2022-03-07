<?php include("connection.php")
?>
<?php
$ssn=$_POST['SSNum'];
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
	echo "<a href="index.php/#checker">"
	}
	else
		echo "SSN not exist";
}
?>