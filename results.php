<!DOCTYPE html>
<html>
<head>
	<title>results</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style4.css">

</head>
<body>
<?php
echo 'welcome';
echo "<br>";
require('connection.php');
$sql="select * from details";
$query=mysqli_query($con,$sql);
echo "<table border=1>";
echo "<tr><td>NSSF</td><td>NHIF</td><td>PAYE</td><td>Grosspay</td><td>Name</td></tr>";
while($results=mysqli_fetch_array($query))
{


echo  "<tr><td>$results[0]</td><td>$results[1]</td><td>$results[2]</td><td>$results[3]</td><td>$results[4]</td></tr>";


}
echo "</table>";


?>

</body>
</html>