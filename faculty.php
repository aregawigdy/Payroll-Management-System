<?php include("connection.php")
?>
<?php
$ssno=$_POST['SSNum'];
$bank=$_POST['bankAcc'];
$fName=$_POST['fName'];
$lName=$_POST['lName'];
$deptCode=$_POST['dcode'];
$bsalary=$_POST['bsal'];
$ans=$_POST['replay'];
$workDay=30;

if($ssno==NULL||$bank==NULL||$fName==NULL||$lName==NULL||$deptCode==NULL||$bsalary==NULL||$ans==NULL)
{
	echo "Empty fields are not allowed!!!";
	header('Refresh:5; URL=home.php');
}
else
{

	
if($deptCode=="Dean")
{
	$pos=1500;
	$house=1000;
	$anallow=(10/100)*$bsalary;
	$taxAllow=$anallow+$pos+$house;
}
else if($deptCode=="Head Department")
{
	$pos=1000;
	$house=800;
	$anallow=(10/100)*$bsalary;
	$taxAllow=$anallow+$pos+$house;
}
else if($deptCode=="Lecturer"||"Assistant Lecturer"||"Lab Assistant"||"Lab Technician")
{
	$pos=0;
	$house=800;
	$anallow=0;
	$taxAllow=$anallow+$pos+$house;
}
else
{
	$pos=0;
	$house=0;
	$anallow=0;
	$taxAllow=$anallow+$pos+$house;
}

if($ans=="Yes"||$ans=="yes"||$ans=="YES")
{
	$ScholarPay=(1/2)*$bsalary;
	$grSalary=$ScholarPay;
	$pos=0;
	$house=0;
	$anallow=0;
	$taxAllow=$anallow+$pos+$house;
}

else
{
	$taxAllow=$anallow+$pos+$house;
	$ScholarPay=0;
	$grSalary=$bsalary+$taxAllow;
}

$govP=(11/100)*$bsalary;
$perP=(7/100)*$bsalary;
if($grSalary<=600)
	$tax=0;
else if($grSalary>600 && $grSalary<=1650)
	$tax=(10/100)*$grSalary-60;
else if($grSalary>1650 && $grSalary<=3200)
	$tax=(15/100)*$grSalary-142.50;
else if($grSalary>3200 && $grSalary<=5250)
	$tax=(20/100)*$grSalary-302.50;
else if($grSalary>5250 && $grSalary<=7800)
	$tax=(25/100)*$grSalary-565;
else if($grSalary>7800 && $grSalary<=10900)
	$tax=(30/100)*$grSalary-955;
else if($grSalary>10900)
	$tax=(35/100)*$grSalary-1500;
$totDed=$perP+$tax;
$NetPay=$grSalary-$totDed;
$sql="insert into Faculty_staff values('$ssno','$bank','$fName','$lName','$deptCode','$bsalary','$workDay','$anallow','$pos','$house','$taxAllow','$ans','$ScholarPay','$grSalary','$govP','$perP','$tax','$totDed','$NetPay')";
$query=mysql_query($sql);
if(!$query)
	echo"Failed to Add !".mysql_error();
else
	echo"Succesfully added an employee!!!";
	header('Refresh:5; URL=home.php');
}	
?>