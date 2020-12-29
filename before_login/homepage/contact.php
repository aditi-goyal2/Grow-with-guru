<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message']; 
    
    
//connecting to the database
$servername = "localhost";
$uname = "root";
$pword = ""; 
$database = "online_tutor";
$conn = mysqli_connect($servername, $uname, $pword, $database);

//submit to database sql query to be executed
$sql = "INSERT INTO `contact` (`name`,`email`,`subject`,`message`) VALUES ('$name',  '$email',  '$subject',  '$message')"; 
$result = mysqli_query($conn, $sql);

if($result){
   
    
    
         
         header( "location:http://localhost/new/after_login/homepage/homepage.html");
    
}
else{
    ?>
    <script>
         alert(""The record was not inserted successfully becoz --->". mysqli_error($conn)");
    </script>    
   <?php
    
}
}
?>