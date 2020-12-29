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
$html="<h1 style='color:green;'>Congratulations!</h1><p style='color:green;'>You account has been successfully registered.</p><p>You may now view and access all the features of the website.</p><br><h4 style='color:#2746E8;'>Thanks and regards<br><img src='cid:logo' style='height:90px; width:90px;'><br>Grow With Guru<br>Delhi,India<br>110001</h4><p style='color:green'>Please donot print this email untill it is absolutely necessary.</p>";
include('smtp/PHPMailerAutoload.php');
  
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="growwithguru2@gmail.com";
	$mail->Password="Guruji@#190";
	$mail->SetFrom("growwithguru2@gmail.com");
	$mail->addAddress("$email");
	$mail->IsHTML(true);
	$mail->Subject="Account Registered";
	$mail->Body=$html;
	$mail->AddEmbeddedImage(dirname(__FILE__).'/logo.png','logo');
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		//echo "Mail send";
	}else{
		//echo "Error occur";
	}
if($result){
    header( "location:http://localhost/new/before_login/login/login.html");    
}
else{
    
    header( "location:http://localhost/new/before_login/signup/error.html");  
}
}
?>