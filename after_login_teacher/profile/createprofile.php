<?php



if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $Address = $_POST['Address'];
    $phone = $_POST['phone'];
    $email = $_POST['email']; 
    $location = $_POST['location'];
    $Age = $_POST['Age'];
    $gender= $_POST['gender'];
   
   
    
//connecting to the database
$servername = "localhost";
$uname = "root";
$pword = ""; 
$database = "online_tutor";
$conn = mysqli_connect($servername, $uname, $pword, $database);

//submit to database sql query to be executed
$sql = "INSERT INTO `profile` (`first_name`,`last_name`,`Address`,`phone`, `email`, `location`,`Age`, `gender`) VALUES (' $first_name',  ' $last_name',  '$Address', '$phone', '$email', ' $location',  '$Age',  '$gender')"; 
$result = mysqli_query($conn, $sql);

if($result){
    echo '<div class="alert alert-sucess alert-dismissiable fade show" role="alert"> <center><strong><h1>Your profile has been updated!</h1></strong></center>
    </div>'; 
}
else{
    echo "The record was not inserted successfully becoz --->". mysqli_error($conn);
}
}
?>