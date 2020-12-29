<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" id="bootstrap-css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../homepage/style.css">
<link rel="stylesheet" href="../profile_student/profile_student.css">
<link rel="stylesheet" href="personal_profile.css">
</head>
<body>
  <!--nav bar-->
  
  <nav class="navbar navbar-expand-lg  navbar-dark fixed-top black ">  
   
    <a class="navbar-brand" href="../homepage/homepage.html"><img src="../../logo.png" alt="" height="60px;" width="60px;"></i>&emsp;GROW WITH GURU</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../homepage/homepage.html">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../profile/createprofile.html">MY PROFILE</a>
        </li>
       
        <li class="nav-item active">
          <a class="nav-link" href="../Aboutus/about.html">ABOUT US</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../profile_student/profile_student.php">SEARCH</a>
        </li>
        
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              BLOG
            </a>
            <div class="dropdown-menu" style="right: auto; left: 0;" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../blog/blog.php">Blog post</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../blog/write_blog.html"> Write Blog</a>
            </div>
          </li>
          <li class="nav-item active">
          <a class="nav-link" href="../../before_login/homepage/homepage.html">LOGOUT</a>
        </li>
        
      </ul>
      <ul class="navbar-nav">
          <li class="nav-item active dropdown">
            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
            <span class="p1 fa-stack fa-2x has-badge" data-count="2"> 
              <i class="p3 fa fa-bell fa-stack-1x xfa-inverse" data-count="2b" role="button"></i>
            </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#" style="color:green;">Welcome</a>
              
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" style="color:green">You are a verified user</a>
            </div>
          </li>
        </li>
    </ul>
    </div>

</nav> 
  <!---->
 <div class="main">
 <?php


//connecting to the database
$servername = "localhost";
$uname = "root";
$pword = ""; 
$database = "online_tutor";
$conn = mysqli_connect($servername, $uname, $pword, $database);

$query = "SELECT * FROM `profile`";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

echo "

  <h4> 
    <span class='badge badge-secondary'>Tutor</span>
    <span class='badge badge-secondary'>".$result['location']."</span>
    <span class='badge badge-secondary'>".$result['Subject']."</span>
  </h4>
  <h1>
  ".$result['first_name']." ".$result['last_name']."
  </h1>
  
      <div class='card'>
        <div class='card-body'>
          <div class='row'>
          <div class='col-sm-9'>
         
            <div class='media'>
              <img src='data:image/jepg;base64,".base64_encode($result['profile_image'] )."' class='mr-3' alt='...'>
              <div class='media-body col-6'>
             
                <h5 class='mt-0 heading'>".$result['first_name']." ".$result['last_name']."</h5>
                <b>Tutor</b>
                 <i class='fa fa-star first' aria-hidden='true'></i>
                <i class='fa fa-star' aria-hidden='true'></i>
                <i class='fa fa-star' aria-hidden='true'></i>
                <i class='fa fa-star' aria-hidden='true'></i>
                <i class='fa fa-star' aria-hidden='true'></i>
                <p>
                  <i>Subjects: ".$result['Subject']."
                </i>
                </p>
                 <i class='fa fa-map-marker fa-lg' aria-hidden='true'></i>
                 ".$result['location']."
                 <br>
                 
                 <i class='fa fa-money fa-lg' aria-hidden='true'></i>
                 <b>Fees: </b> Rs. ".$result['fee']." per month
                 
              </div>
              <div class='media-body col-6'>
                <p class='verify'><i class='fa fa-check' aria-hidden='true'></i> ID verified</p>
                <b class='heading'>Member Since:</b> 24/12/2020
                <br>
                <b class='heading'>Last Login:</b> few min ago
                <br>
                <b class='heading'>Response Rate:</b>100%
                <br>
                <b class='heading'>Expected Response:</b>< 2 hours 
                <br>
                 
                 
              </div>
            </div>
          <div class='info'>
         <h6>Information of Andrew</h6>
         <p>".$result['more_info']."</p>
         
         </div>
         
         </div>
          
         <div class='col-sm-3 next-div'>
          <br>
          <button type='button' class='btn btn-primary contact' data-toggle='modal' data-target='#exampleModal' data-whatever=''> CONTACT THE TUTOR </button>
          <br>
          <h6 class='heading'>My Qualification:</h6>
          <p><b>PhD</b>
            <br>
            ".$result['Qualification']."
            <br>
            ".$result['Subject']."
            <br>
           </p>
            <hr>
            <h6 class='heading'>Verification status</h6>
            <i class='fa fa-id-card fa-2x'></i> Tutors id verified
            <hr>  
            <h6 class='heading'>Availability:</h6>
           <b><i class='fa fa-clock-o' aria-hidden='true'></i>TIME:</b> ".$result['Time']."
           <br>
           <b><i class='fa fa-calendar-o' aria-hidden='true'></i>DAYS:</b> Mon-Fri , Sat-Sun
          <!-- Vertically centered modal -->
          
         <div class='modal-dialog  '>
            <form action='enquiry.php' method='post' id='frmContactus'>
            <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
              <div class='modal-dialog modal-lg'>
                <div class='modal-content'>
                  <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Send an Enquiry to ".$result['first_name']."</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>
                  <div class='modal-body'>
                   
                      
                        <div class='row'>
                          <div class='col-md-6'>
                            <input type='text' class='form-control' name='pname' id='pname'  placeholder='Name *' required>
                          </div>
                          <div class='col-md-6'>
                            <select type='text' class='form-control' name='subject' id='subject' placeholder='subject' requireds>
                              <option selected>Subject *</option>
                              <option>".$result['Subject']."</option>
                              </select>
                          </div>
                        </div>
                      <div class='col'>
                      How often would you like tuition?<b style='color: #e46464;'> * </b>
                      <div class='custom-control custom-radio custom-control-inline'>
                      <input type='radio' name='days' value='Weekly'/>Weekly
                      </div>
                      
                      <div class='custom-control custom-radio custom-control-inline'>
                      <input type='radio' name='days' value='Mon-Fri'/>Mon-Fri
                      </div>
                      </div>
                      <br>
                      <div class='row'>
                        <div class='col-md-8'>
                          <input type='text' class='form-control' name='contactno' id='contactno'  placeholder='Contact no.*' required>
                        </div>
                        <div class='col-md-4'>
                          <input type='text' class='form-control' name='timing' id='timing'  placeholder='timings*' required>
                            
                        </div>
                      </div>
                      <div class='col'>
                        
                        <textarea  class='form-control form-control-lg' type='text'  id='info' name='info'  placeholder='Hi  ".$result['first_name'].",
                        I am looking for a tutor to teach .I would like to be tutored at my house. Please let me know if you are able to help and your availability.
                        Thanks.' rows='3'></textarea>
                      </div>
                     
                      <div class='col'>
                        Are there any heath and safety risks at your property? ie. building work that we need to inform the tutor about. Provide details..
                        <br>
                        <br>
                        <textarea class='form-control col' id='safetyinfo' name='safetyinfo'  placeholder='Please provide any details of any health or safety risks with your property. Leave blank , if there are none.' rows='1' ></textarea>
                      </div>
                     
                    
                  </div>
                  <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                    <button type='submit' class='btn btn-primary' type='submit'  id='submit' value='send' name='send'>Send message</button>
                    <br>
                    <span style='color:red;' id='msg'></span>
                  </div>
                </div>
              </div>
            </div>
            </form>
          </div>
      
      
      
      </div>
         </div>
        </div>
      </div>
      
    </div>
    "; 
          ?>
  </div>
  
  
   <!--footer-->
   <footer class="footer-distributed">
 
    <div class="footer-left">
  
    <h3>Grow <span>With Guru</span></h3>
  
    <p class="footer-links">
    <a href="../homepage/homepage.html">Home</a>
  .
    <a href="../Aboutus/about.html">About</a>
  ·
    <a href="../homepage/homepage.html#contact">Contact</a>
  .
    <a href="../blog/blog.html">Blog</a>
    
    </p>
  
    <p class="footer-company-name" >Grow With Guru © 2020</p>
    
    </div>
  
    <div class="footer-center">
  
    <div>
    <i class="fa fa-map-marker"></i>
    <p><span>Grow With Guru , Ghaziabad , India</span> </p>
    </div>
  
    <div>
    <i class="fa fa-phone"></i>
    <p><span><a href="tel://+1234567890" style="color: white;">+1 234 567890</a></span></p>
    </div>
  
    <div>
      <i class="fa fa-envelope"></i>
      <p><span ><a href="https://mail.google.com/mail/?view=cm&fs=1&to=growwithguru@gmail.com" style="color: white;">growwithguru@gmail.com</a></span></p>
    </div>
  
    <div>
      <i class="fa fa-skype"></i>
      <p><span ><a href="skype:echo123?call" style="color: white;">Contact with skype</a></span></p>
    </div>
  
    
    </div>
  
    <div class="footer-right">
  
    <p class="footer-company-about">
    <span>About </span>
    GROW WITH GURU understands that finding a pefect tutor is not at all an easy task. Whether searching for studies ,art, dance, music, etc for primary, secondary , A-Level or an adult learner, we strive to make the process as simple as possible - listing all personal and private tutors closest to you.
    </p>
  
    <div class="footer-icons">
  
    <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
    <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
    <a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a>
    <a href="https://www.github.com"><i class="fa fa-github"></i></a>
  
    </div>
  
    </div>
  
    
  </footer>


</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>