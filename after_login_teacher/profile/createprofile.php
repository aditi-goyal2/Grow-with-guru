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
    $speciality= $_POST['speciality'];
    $achievement= $_POST['achievement'];
    $Subject= $_POST['Subject'];
    $Qualification= $_POST['Qualification'];
    $Profession= $_POST['Profession'];
    $Experience= $_POST['Experience'];
    $Time= $_POST['Time'];
    $fee= $_POST['fee'];
    $more_info= $_POST['more_info'];
    $file_identity = addslashes(file_get_contents($_FILES["identity"]["tmp_name"]));
   
    
//connecting to the database
$servername = "localhost";
$uname = "root";
$pword = ""; 
$database = "online_tutor";
$conn = mysqli_connect($servername, $uname, $pword, $database);

//submit to database sql query to be executed
$sql = "INSERT INTO `profile` (`first_name`,`last_name`,`Address`,`phone`, `email`, `location`, `Age`, `gender`, `speciality`, `achievement`, `Subject`, `Qualification`, `Profession`, `Experience`, `Time`, `fee`, `more_info` , `identity`) VALUES (' $first_name',  ' $last_name',  '$Address', '$phone', '$email', '$location',  '$Age',  '$gender', '$speciality', '$achievement', '$Subject', '$Qualification', '$Profession', '$Experience', '$Time', '$fee', '$more_info' , '$file_identity')"; 
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