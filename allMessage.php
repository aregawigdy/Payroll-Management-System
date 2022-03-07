<?php include("connection.php")
?>
<?php
	$comment=$_POST['Comment'];
	$sql="insert into AllUMessages values('','$comment')";
	$query=mysql_query($sql);
	if(!$query)
		echo"Failed to send!!! ".mysql_error();
	else
		echo"Message Succesfully sent!!!";
		header('Refresh:5; URL=home.php');
?>