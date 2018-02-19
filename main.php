 <!DOCTYPE html>
 <html>
 <head>
 	<title>main</title>
<link rel="stylesheet" type="text/css" href="assets/css/style4.css">
 </head>
 <body>
       <fieldset>
       <form method="POST" action="main.php">

       Name:<input type="text" name="name" ><br>
 	   Please choose job group:<select name="group"><option>A.</option><option>B.</option><option>C.</option></select><br>
       Enter amount of salary:<input type="text" name="salary" ><br><br><br><br> 
       <input type='submit' name='submit'><br>
       <a href="results.php"> click after submission for results </a>
       </form>


       </fieldset>";

 
 <?php

    require('connection.php');

	if(isset($_POST['submit']));
	{

	$name=$_POST['name'];	
	$NHIF=0.12;
    $NSSF=0.10;
    $PAYE=0.15;	
	$salary=$_POST['salary'];
	$NHIFF=($salary*$NHIF);
    $NSSFF=($salary*$NSSF);
    $PAYEE=($salary*$PAYE);
    $GROSSPAY=($salary-$NHIFF-$NSSFF-$PAYEE);

	$sql="INSERT INTO details (nssff,nhiff,payee,grosspay,Name)
	VALUES ('$NSSFF','$NHIFF','$PAYEE','$GROSSPAY','$name')";
	echo $sql;
	$query=mysqli_query($con,$sql);
	if($query){

		echo "New record created succefully";
		
	}else{
		echo "error adding record".mysqli_error($con);
	}
    }
  mysqli_close($con);

 ?>
      

 </body>
 </html>


 