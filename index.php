<?php

$con=@mysql_connect("localhost","root","") or die(mysql_error());

$db=mysql_select_db('index', $con) or die(mysql_error());

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$web_address=$_POST['web_address'];
	$attechment_file=$_POST['attechment'];
	$radio=$_POST['group'];

	if($name==''){
		echo "<script>alert('Enter name')</script>";
	}
	if($email==''){
		echo "<script>alert('Enter email')</script>";
	}
	
	if($web_address==''){
		echo "<script>alert('Enter web_address')</script>";
	}
	
	
	if($attechment_file==''){
		echo "<script>alert('Enter attechment_file')</script>";
	}
	if($radio==''){
		echo "<script>alert('Enter radio')</script>";
	}
	else{
	$query="insert into i1(name,email,web address,attechment file,radio) values ('$name','$email','$web_address','$attechment_file','$radio')";

	if(mysql_query($query)){
		echo(" You are successfully register");
	}
}
}
?>