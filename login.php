<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
<link rel="stylesheet" type="text/css" href="assets/css/style4.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
</head>
<body>

<div class="container">
<img src="assets/css/images/man.png">
<form action="login.php" method="POST">
<div class="form-input">
<input type="text" name="username" placeholder="enter username">
</div>
<div class="form-input">
<input type="password" name="password" placeholder="Enter password">
</div>
<input type="submit" name="submit" value="LOGIN" class="btn-login">
<p>Username is <u>admin</u> and password is <u>1234</u> !!</p>
</form>	
</div>
<?php
 if(isset($_POST['submit']))
 {
   	 $username=$_POST['username'];
   	 $password=$_POST['password'];
   if(!empty($username)||!empty($password))
   {
   	if ($username=="admin"&&$password=="1234") 
   	{
   		header("location:main.php");
   	}
   	else
   	{
   		echo "username is missings or <br>";
   		echo"password is missing";
   	}

   }
   else
   {
   	    echo "username cannot be blank  or <br>";
   	    echo "password cannot be blank";
   }

 }



?>
</body>
</html>