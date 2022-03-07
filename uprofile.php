<?php include("connection.php")
?>
<?php
$cssn=$_POST['cSSN'];
$fname=$_POST['fName'];
$lname=$_POST['lName'];
$uname=$_POST['uName'];
$password=$_POST['pwd'];
$sql="select * from SuppFac where SSN='$cssn' and Status=1";
$query=mysql_query($sql);
$numrows=mysql_num_rows($query);
if ( $numrows!=0){
	
			while($row =mysql_fetch_assoc($query))
			{
			
				$dbssn = $row['SSN'];
			
			
			}
	if($cssn==$dbssn) 
	{
	  $sql2="update SuppFac set FirstName='$fname' where Status=1";
		$query2=mysql_query($sql2);
	  $sql2="update SuppFac set LastName='$lname' where Status=1";
		$query2=mysql_query($sql2);
	  $sql2="update SuppFac set UName='$uname' where Status=1";
		$query2=mysql_query($sql2);
	  $sql2="update SuppFac set Password='$password' where Status=1";
		$query2=mysql_query($sql2);
	if($query2)
		echo "Profile Updated Successfully!";
	else
		echo "Error!";
		header('Refresh:5; URL=userHome.php');
	}	
}
else
echo "Incorrect Current User SSN";
header('Refresh:5; URL=userHome.php');
?>