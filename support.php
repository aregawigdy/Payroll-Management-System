<?php include("connection.php")
?>
<?php
$ssn=$_POST['SSNum'];
$bank=$_POST['bankAcc'];
$fname=$_POST['fName'];
$lname=$_POST['lName'];
$pos=$_POST['pos'];
$bsalary=$_POST['bsal'];
$workDay=30;
$gearn=$bsalary*($workDay/30);
$gov=(11/100)*$bsalary;
$personal=(7/100)*$bsalary;

if($ssn==NULL||$bank==NULL||$fname==NULL||$lname==NULL||$pos==NULL||$bsalary==NULL)
{
	echo "Empty fields are not allowed!!!";
	header('Refresh:5; URL=home.php');
}
else
{
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
$sql="insert into Support_staff values('$ssn','$bank','$fname','$lname','$pos','$bsalary','$workDay','$gearn','$gov','$personal','$tax','$totded','$NPay')";
$query=mysql_query($sql);
if(!$query)
	echo"Failed to add!!! ".mysql_error();
else
	echo"Succesfully added an employee!";
	header('Refresh:5; URL=home.php');
}
?>