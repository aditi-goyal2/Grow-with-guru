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
    $sub1=$_POST['sub1'];
    $sub2=$_POST['sub2'];
    $class=$_POST['class'];
    $school=$_POST['school'];
    $qualification=$_POST['qualification'];
    $time=$_POST['time'];
    $fee=$_POST['fee'];
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $file_identity = addslashes(file_get_contents($_FILES["identity"]["tmp_name"]));
   
    
//connecting to the database
$servername = "localhost";
$uname = "root";
$pword = ""; 
$database = "online_tutor";
$conn = mysqli_connect($servername, $uname, $pword, $database);

//submit to database sql query to be executed
$sql = "INSERT INTO `profile_student` (`first_name`,`last_name`,`Address`,`phone`, `email`, `location`, `Age`, `gender`,`sub1`,`sub2`,`class`,`school`,`qualification`,`time`,`fee`, `profile_image` , `identity`) VALUES (' $first_name',  ' $last_name',  '$Address', '$phone', '$email', '$location',  '$Age',  '$gender', '$sub1', '$sub2', '$class', '$school', '$qualification', '$time', '$fee','$file', '$file_identity')"; 
$result = mysqli_query($conn, $sql);

if($result){
    header( "location:http://localhost/new/after_login/profile/success.html"); 
}
else{
    header( "location:http://localhost/new/after_login/profile/error.html");   
}
}
?>