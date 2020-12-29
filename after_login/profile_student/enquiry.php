<?php
$msg="";
if(isset($_POST["send"])) {
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $pname = $_POST['pname'];
    $subject = $_POST['subject'];
    $days= $_POST['days'];
    $info = $_POST['info'];
    $safetyinfo = $_POST['safetyinfo'];
    $contactno = $_POST['contactno'];
    $timing = $_POST['timing'];
    
    
//connecting to the database
$servername = "localhost";
$uname = "root";
$pword = ""; 
$database = "online_tutor";
$conn = mysqli_connect($servername, $uname, $pword, $database);

//submit to database sql query to be executed
$sql = "INSERT INTO `enquiry` (`pname`,`subject`,`days`,`info`,`safetyinfo`,`contactno`,`timing`) VALUES ('$pname',  '$subject',  '$days',  '$info',  '$safetyinfo','$contactno','$timing')"; 
$result = mysqli_query($conn, $sql);

$html="<h1>Welcome</h1><br><h3>One student has tried to show interest in your profile and wants to connect with you</h3><table><tr><td>Name of the student:</td><td>$pname</td></tr><tr><td>Subject he/she is interested:</td><td>$subject</td></tr><tr><td>Number of days he/she wants to study:</td><td>$days</td></tr><tr><td>Timing suitable:</td><td>$timing</td></tr><tr><td>Message</td><td>$info</td></tr></table><br><h3>You may contact with student with contact number:$contactno</h3><br><h4 style='color:#2746E8;'>Thanks and regards<br><img src='cid:logo' style='height:90px; width:90px;'><br>Grow With Guru<br>Delhi,India<br>110001</h4><p style='color:green'>Please donot print this email untill it is absolutely necessary.</p>";
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
	$mail->addAddress("aditi29bhawna@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject="New Message From Student";
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
    echo $msg;
    if($result){
        header( "location:http://localhost/new/after_login/profile_student/congrats.php");    
    }
    else{
        echo "The record was not inserted successfully becoz --->". mysqli_error($conn);
    }
}
}


?>