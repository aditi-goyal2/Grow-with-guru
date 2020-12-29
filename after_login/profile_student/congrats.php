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
  <div class="container">
  <form style="margin-top: 8em;">
    <div class="alert alert-success alert-dismissible" role="alert">
      <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
      <strong>Congratulations!</strong> Message has been sent to the the tutor.Tutor will contact you as soon as possible.
    </div>
    </form>
</div>
   
   <div class="container">
    <div class="row">
  <input class="filter col-sm-5" placeholder="location"  />
  <input class="filter col-sm-5 " placeholder="Subject" />
   </div>
  <hr>
  <p>We have a total of 17482  Tutors registered. Our tutors can teach in-person  interactively.</p>
  <?php


              //connecting to the database
              $servername = "localhost";
              $uname = "root";
              $pword = ""; 
              $database = "online_tutor";
              $conn = mysqli_connect($servername, $uname, $pword, $database);

              
              $result = mysqli_query($conn,"SELECT * FROM `profile`");
              if (mysqli_num_rows($result) > 0) {
                $i=0;
                while($row = mysqli_fetch_array($result)) {
              echo "
              <div class='card mb-3' data-string='".$row['location']." ".$row['Subject']."'>
    <div class='row no-gutters'>
      <div class='col-md-3'>
        <a href=''>
        <img src='data:image/jepg;base64,".base64_encode($row['profile_image'] )."' class='card-img' alt='...'></a>
      </div>
      <div class='col-md-9'>
        <div class='card-body'>
          <h5 class='card-title'>".$row['first_name']." ".$row['last_name']."<i class='fa fa-star first' aria-hidden='true'></i>
            <i class='fa fa-star' aria-hidden='true'></i>
            <i class='fa fa-star' aria-hidden='true'></i>
            <i class='fa fa-star' aria-hidden='true'></i>
            <i class='fa fa-star' aria-hidden='true'></i></h5>
          <p class='city' style=' color:  #5383d3;'>Location: ".$row['location']."</p>
          <p class='sub'>Subject: ".$row['Subject']."</p>
          <p class='card-text'> 
            ".$row['more_info']."...
          
          </p>
          <p class='card-text'><small class='text-muted'>
          <!-- Button trigger modal -->
          <a href='personal_profile.php'><button type='button' class='btn btn-primary' >
            View Profile
          </button></a>
          </small></p>

        
        </div>
      </div>
    </div>
  </div>
              ";   
              $i++;
            }
          }
          else{
              
          }
              ?>
 <div class="card mb-3" data-string="delhi PHYSICS">
    <div class="row no-gutters">
      <div class="col-md-3">
        <a href="">
        <img src="tutor3.jpg" class="card-img" alt="..."></a>
      </div>
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title">Amrita Agarwal<i class="fa fa-star first" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i></h5>
          <p class="city" style=" color:  #5383d3;">Location: Delhi</p>
          <p class="sub">Subject: Physics</p>
          <p class="card-text"> 
            Alongside my research, I work as an associate tutor at my university. I assist lecturers in carrying out workshops for undergraduate students in thermo-fluid engineering subjects...
          
          </p>
          <p class="card-text"><small class="text-muted">
          <!-- Button trigger modal -->
          <a href="personal_profile.html"><button type="button" class="btn btn-primary" >
            View Profile
          </button></a>
          </small></p>

        
        </div>
      </div>
    </div>
  </div>
  
  <div class="card mb-3" data-string="Economics Hyderabad">
    <div class="row no-gutters">
      <div class="col-md-3">
        <img src="tutor1.jpg" class="card-img" alt="...">
      </div>
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title">Anuradha Singhal<i class="fa fa-star first" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            </h5>
          <p class="city" style=" color:  #5383d3;">Location: Hyderabad</p>
          <p class="sub">Subject: Economics</p>
          <p class="card-text"> I will personalise my tutoring to your individual needs. This could be from a beginners level, concentrating on certain skills....</p>
          <p class="card-text"><small class="text-muted"> <!-- Button trigger modal -->
            <a href="profile-2.html"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              View Profile
            </button></a></small></p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="card mb-3" data-string="Noida Computer Science">
    <div class="row no-gutters">
      <div class="col-md-3">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSM1q99ZLLIiDZYf8MAogmyxW8q_Y4wXC127w&usqp=CAU" class="card-img" alt="...">
      </div>
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title">Amrita Tyagi <i class="fa fa-star first" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i></h5>
          
         <p class="city" style=" color:  #5383d3;">Location: Noida</p>
          
          <p class="sub">Subject: Computer Science</p>
          <p class="card-text">I will personalise my tutoring to your individual needs. This could be from a beginners level, concentrating on certain skills....</p>
          <p class="card-text"><small class="text-muted"> <!-- Button trigger modal -->
            <a href="profile-4.html"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              View Profile
            </button></a></small></p>  
      </div>
    </div>
  </div>
  </div>
 
  <div class="card mb-3" data-string="Chemistry Dadri">
    <div class="row no-gutters">
      <div class="col-md-3">
        <img src="Tutor.jfif" class="card-img" alt="...">
      </div>
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title">Sunil Sharma<i class="fa fa-star first" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i></h5>
          <p class="city" style=" color:  #5383d3;">Location: Dadri</p>
          <p class="sub">Subject: Chemistry</p>
          <p class="card-text">I will personalise my tutoring to your individual needs. This could be from a beginners level, concentrating on certain skills....</p>
          <p class="card-text"><small class="text-muted"> <!-- Button trigger modal -->
            <a href="profile-6.html"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              View Profile
            </button></a></small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" data-string="Physics Kanpur ">
    <div class="row no-gutters">
      <div class="col-md-3">
        <img src="tutor 2.jpg" class="card-img" alt="...">
      </div>
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title">Ajay Kumar<i class="fa fa-star first" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i></h5>
          <p class="city" style=" color:  #5383d3;">Location: Kanpur</p>
          <p class="sub">Subject: Physics</p>
          <p class="card-text">I assist lecturers in carrying out workshops for undergraduate students in thermo-fluid engineering subjects...
          </p>
          <p class="card-text"><small class="text-muted"> <!-- Button trigger modal -->
            <a href="profile-5.html"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              View Profile
            </button></a></small></p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="card mb-3" data-string="Greater Noida Maths">
    <div class="row no-gutters">
      <div class="col-md-3">
        <img src="tutor4.png" class="card-img" alt="...">
      </div>
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title">Rohan Nagar<i class="fa fa-star first" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i></h5>
          <p class="city" style=" color:  #5383d3;">Location: Greater Noida</p>
          <p class="sub">Subject: Maths</p>
          <p class="card-text">I will personalise my tutoring to your individual needs. This could be from a beginners level, concentrating on certain skills....</p>
          <p class="card-text"><small class="text-muted"> <!-- Button trigger modal -->
            <a href="profile-7.html"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              View Profile
            </button></a></small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" data-string="Maths Lucknow">
    <div class="row no-gutters">
      <div class="col-md-3">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSLHvzyqlpe7Aw_qH5ZR5fvjErwjzNuqIlc6A&usqp=CAU" class="card-img" alt="...">
      </div>
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title">Shweta Tiwari<i class="fa fa-star first" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i></h5>
          <p class="city" style=" color:  #5383d3;">Location: Lucknow</p>
          <p class="sub">Subject: Maths</p>
          <p class="card-text">  I am very patient, and am very happy to try different methods of teaching as I am very aware and receptive to the different ways children learn.

            I also concentrate on...</p>
          <p class="card-text"><small class="text-muted"> <!-- Button trigger modal -->
            <a href="profile-3.html"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              View Profile
            </button></a></small></p>
        </div>
      </div>
    </div>
  </div>
        </div>
 <!---->
 <!---->
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>
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
</nav>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script>
  $(".filter").on("keyup", function() {
    var input = $(this).val().toUpperCase();
  
    $(".card").each(function() {
      if ($(this).data("string").toUpperCase().indexOf(input) < 0) {
        $(this).hide();
      } else {
        $(this).show();
      }
    })
  });
  
    </script>
</body>

</head>
</html>