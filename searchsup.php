<?php include("connection.php")
?>
<?php
	$ssno=$_POST['SSNum'];
	$sql="select * from Support_staff where SSN='$ssno'";
	$query=mysql_query($sql);
	if(!$query)
	{
		echo "Couldn't found SSN!";
		header('Refresh:5; URL=home.php');
	}
else { 
 $i = 0;
	echo '<html><body><table border="1px" ><tr>';
	while ($i < mysql_num_fields($query))
	{
		$meta = mysql_fetch_field($query, $i);
		echo '<td>' . $meta->name . '</td>';
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
	echo '</table></body></html>';
	mysql_free_result($query);
	mysql_close ($con);
}


?>