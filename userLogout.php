<?php include("connection.php");
?>
<?php
$sql="update SuppFac set Status=0 where Status=1";
$uquery=mysql_query($sql);
session_start();
if(session_destroy())
{
header('location:index.php');

}
?>