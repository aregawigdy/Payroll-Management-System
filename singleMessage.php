<?php include("connection.php")
?>
<?php
	$ssn=$_POST['SSNum'];
	$comment=$_POST['Comment'];
	$sql="insert into SingleUMessages values('$ssn','$comment')";
	$query=mysql_query($sql);
	if(!$query)
		echo"Failed to send!!! ".mysql_error();
	else
		echo"Message Succesfully sent!!!";
		header('Refresh:5; URL=home.php');
?>