<?php

$con=@mysql_connect("localhost","root","") or die(mysql_error());

$db=mysql_select_db('register', $con) or die(mysql_error());

if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password1=$_POST['password1'];
	$password2=$_POST['password2'];

	if($username==''){
		echo "<script>alert('Enter username')</script>";
	}
	if($email==''){
		echo "<script>alert('Enter email')</script>";
	}
	
	if($password1==''){
		echo "<script>alert('Enter password1')</script>";
	}
	
	if($password2==''){
		echo "<script>alert('Enter password2')</script>";
	}
	

	else{
	$query="insert into n1(username,email,password1,password2) values ('$username','$email',$password1,'$password2')";


	if(mysql_query($query)){
		echo(" You are successfully register");
		
	
	}
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="view port" content="width=device-width,inital-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<br>Click here to
<input type="submit" class="btn btn-info" name="Login" value="Login" onclick="window.location='Login.html'">

</body>
</html>