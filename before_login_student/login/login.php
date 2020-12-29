<?php
session_start();
//connecting to the database
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'online_tutor');
	$username=$_POST["username"];
	$password=$_POST["password"];
	$query ="select * from testtable where username='$username' && password='$password'";
	$designation="select `designation` from `testtable`";
	$result=mysqli_query($con, $query);
	$num= mysqli_num_rows($result);
	if($num == 1)
	{
		$_SESSION['user'] = $username;
				header("Location: http://localhost/new/after_login/profile/createprofile.html");		
	}
	else{
		header( "location:http://localhost/new/before_login_student/login/error.html"); 
	}
?>