<?php

session_start();
$email=$_POST['email'];
$password2=$_POST['password2'];

if($email && $password2)
{
	$connect=@mysql_connect("localhost","root","");
	mysql_select_db("register");
	$query=mysql_query("select * from n1 where email='$email'");
	while($log=mysql_fetch_assoc($query))
	{
		$dbemail=$log['email'];
		$dbpassword2=$log['password2'];
	}
	if($email==$dbemail && $password2==$dbpassword2)
	{
		echo "Login !!!";
	}
	else{
		echo "something wrong";
	}
}
?>