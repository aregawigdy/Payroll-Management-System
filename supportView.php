<html>
<head>
<title>EMPLOYEE PAYROLL SYSTEM</title>

<link rel="stylesheet" href="css/payrollcss.css" type="text/css" media="screen" charset="utf-8" />
</head>
<body>
<form class="navbar navbar-fixed-top well1"style="height:30px">
	<center><h3><em>General Support Staff's Status</em></h3></center>
</form>


<?php include("connection.php")
?>
<?php
$sql="select * from Support_staff";
$query=mysql_query($sql);
if(!$query)
 echo "fail";
else { 
 $i = 0;
	echo '<html><body><form class="well"style="margin-top:80px"><center><table border="1px" ><tr>';
	while ($i < mysql_num_fields($query))
	{
		$meta = mysql_fetch_field($query, $i);
		echo '<th>' . $meta->name . '</th>';
		$i = $i + 1;
	}
	echo '</tr>';
	
	$i = 0;
	while ($row = mysql_fetch_row($query)) 
	{
		echo '<tr>';
		$count = count($row);
		$y = 0;
		while ($y < $count)
		{
			$c_row = current($row);
			echo '<td>' . $c_row . '</td>';
			next($row);
			$y = $y + 1;
		}
		echo '</tr>';
		$i = $i + 1;
	}
	echo '</table></center><br/><center><button class="btn btn-success"style="margin-right:-700px"><a href="home.php"style="margin-right:10px">Back</a></button></center></form></body></html>';
	mysql_free_result($query);
}

mysql_close ($con);
?>

</body>
</html>