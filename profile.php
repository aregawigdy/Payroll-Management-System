<?php include("connection.php")
?>
<?php
$cssn=$_POST['cSSN'];
$fname=$_POST['fName'];
$lname=$_POST['lName'];
$uname=$_POST['uName'];
$password=$_POST['pwd'];
$sql="select * from Admin where admin_id='$cssn'";
$query=mysql_query($sql);
$numrows=mysql_num_rows($query);
if ( $numrows!=0){
	
			while($row =mysql_fetch_assoc($query))
			{
			
				$dbssn = $row['admin_id'];
			
			
			}
	if($cssn==$dbssn) 
	{
	  $sql2="update Admin set FirstName='$fname'";
		$query2=mysql_query($sql2);
	  $sql2="update Admin set LastName='$lname'";
		$query2=mysql_query($sql2);
	  $sql2="update Admin set UName='$uname'";
		$query2=mysql_query($sql2);
	  $sql2="update Admin set Password='$password'";
		$query2=mysql_query($sql2);
	if($query2)
		echo "Profile Updated Successfully!";
	else
		echo "Error!";
		header('Refresh:5; URL=home.php');
	}	
}
else
echo "Incorrect Current admin SSN";
header('Refresh:5; URL=home.php');
?>