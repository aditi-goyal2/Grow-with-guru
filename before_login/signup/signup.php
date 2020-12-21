<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $designation = $_POST['designation'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
    
//connecting to the database
$servername = "localhost";
$uname = "root";
$pword = ""; 
$database = "online_tutor";
$conn = mysqli_connect($servername, $uname, $pword, $database);

//submit to database sql query to be executed
$sql = "INSERT INTO `testtable` (`username`,`designation`,`gender`,`email`, `password`) VALUES ('$username',  '$designation',  '$gender', '$email', '$password')"; 
$result = mysqli_query($conn, $sql);

if($result){
    header( "location:http://localhost/new/before_login/login/login.html");    
}
else{
    
    header( "location:http://localhost/new/before_login/signup/error.html");  
}
}
?>