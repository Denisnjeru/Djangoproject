<!DOCTYPE html>
<html>
<head>
	<title>database connection</title>
</head>
<body>
<?php 
$con=mysqli_connect('localhost','root','','admin');
if($con)
{
	echo "database connection successful";
}
else
{
	echo "failed to connect to MYSQL";
	mysqli_connect_error();
}

?>
</body>
</html>