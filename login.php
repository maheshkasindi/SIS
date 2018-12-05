 <?php
    session_start();
	
	$errors=array();
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="sis";
	$conn=mysqli_connect("$dbhost","$dbuser","$dbpass");
	mysqli_select_db($conn,$dbname);
	if(!$conn)
  		die("Database Connection failed:".mysqli_connect_error());
  	if(isset($_POST['login']))
	{
		$u=$_POST['username'];
		$pass=$_POST['password_1'];
		/*$_SESSION['username']='username';*/
		/*if(isset($_SESSION['username']))
		{
            header("Location: hello.php"); // redirects them to homepage
            exit; // for good measure
		}*/
		if(empty($u))
		{
			array_push($errors,"Username required");
		}
		if(empty($pass))
		{
			array_push($errors,"Password required");
		}
		if(count($errors)==0)
		{
		if($u=="admin" && $pass=="admin")
		{
			header("location: first.html");
		}
		else
		{
			array_push($errors, "invalid username/password");
		}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">

body {
   background-color: grey;
}
h3
{
	position: absolute;
	left: 40%;
	top: 40%;
	text-align: center;
}
</style>
</head>
<body>
		<center><h2>Login</h2>
	<form action="login (1).php" method="POST">
		<?php include('errors.php');?>
			<label>Username:</label>
			<input type="text" name="username" size=10>
			<br/><br/>
			<label>Password:</label>
			<input type="password" name="password_1" size=10></br></br>
			<button type="submit" name="login" class="btn">Login</button></center>
			</form>
</body>
</html>