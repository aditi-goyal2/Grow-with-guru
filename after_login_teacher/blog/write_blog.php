<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Title = $_POST['Title'];
    $Category = $_POST['Category'];
    $Highlight = $_POST['Highlight'];
    $Description = $_POST['Description']; 
    $Sub_Heading = $_POST['Sub_Heading']; 
    $Description2 = $_POST['Description2']; 
    $Quote = $_POST['Quote']; 
    $Hashtag1 = $_POST['Hashtag1']; 
    $Hashtag2= $_POST['Hashtag2']; 
    $Hashtag3 = $_POST['Hashtag3']; 
    $file = addslashes(file_get_contents($_FILES["Image"]["tmp_name"]));    
    $file_thumbnail = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
    
//connecting to the database
$servername = "localhost";
$uname = "root";
$pword = ""; 
$database = "online_tutor";
$conn = mysqli_connect($servername, $uname, $pword, $database);

//submit to database sql query to be executed
$sql = "INSERT INTO `write_blog` (`Title`,`Category`,`Highlight`,`Description`,`Sub_Heading`,`Description2`,`Quote`,`Hashtag1`,`Hashtag2`,`Hashtag3` ,`name`,`thumbnail`) VALUES ('$Title',  '$Category',  '$Highlight',  '$Description',  '$Sub_Heading',  '$Description2',  '$Quote',  '$Hashtag1',  '$Hashtag2',  '$Hashtag3','$file' , '$file_thumbnail')"; 
$result = mysqli_query($conn, $sql);

if($result){
   
    
    ?>
    <script>
         alert("Your Blog is ready now!!");
         header( "location:http://localhost/new/after_login/blog/blog.html");
    </script>    
    
   <?php  
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