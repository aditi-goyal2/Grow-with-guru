<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POST</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
  
    
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <!-- Fancybox-->
    
      <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../homepage/style.css">
    <link rel="stylesheet" href="style.blue.css">
   

  </head>
  <body>
     <!--nav bar-->
     <nav class="navbar navbar-expand-lg  navbar-dark fixed-top black ">  
   
     <a class="navbar-brand" href="../homepage/homepage.html"><img src="../../logo.png" alt="" height="60px;" width="60px;">&emsp;GROW WITH GURU</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../homepage/homepage.html">HOME <span class="sr-only">(current)</span></a>
        </li>
       
        <li class="nav-item active">
          <a class="nav-link" href="../Aboutus/about.html">ABOUT US</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../profile_student/profile_student.php">SEARCH</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="../blog/blog.php">BLOG</a>
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
<div style="height: 5em;"></div>
    <div class="container">
      <div class="row">
        <!-- Latest Posts -->
        <main class="post blog-post col-lg-8"> 
        <?php


          //connecting to the database
          $servername = "localhost";
          $uname = "root";
          $pword = ""; 
          $database = "online_tutor";
          $conn = mysqli_connect($servername, $uname, $pword, $database);

          $query = "SELECT * FROM write_blog";
          $data = mysqli_query($conn,$query);
          $total = mysqli_num_rows($data);
          $result = mysqli_fetch_assoc($data);

          echo "
         
              
            

          
          <div class='container'>
            <div class='post-single'>
              <div class='post-thumbnail'><img src='data:image/jpeg;base64,".base64_encode($result['thumbnail'] )."' alt='...' class='img-fluid'></div>
              <div class='post-details'>
                <div class='post-meta d-flex justify-content-between'>
                  <div class='category'><a href='#'>".$result['Category']."</a><a href='#'></a></div>
                </div>
                <h1>".$result['Title']."<a href='#'><i class='fa fa-bookmark-o'></i></a></h1>
                <div class='post-footer d-flex align-items-center flex-column flex-sm-row'><a href='#' class='author d-flex align-items-center flex-wrap'>
                    <div class='avatar'><img src='img/avatar-1.jpg' alt='...' class='img-fluid'></div>
                    <div class='title'><span>John Doe</span></div></a>
                  <div class='d-flex align-items-center flex-wrap'>       
                    <div class='date'><i class='icon-clock'></i> 2 months ago</div>
                    <div class='views'><i class='icon-eye'></i> 500</div>
                    <div class='comments meta-last'><i class='icon-comment'></i>12</div>
                  </div>
                </div>
                <div class='post-body'>
                  <p class='lead'>".$result['Description']."</p>
                  
                  <p> <img src='data:image/jpeg;base64,".base64_encode($result['name'] )."' alt='...' class='img-fluid'></p>
                  <h3>".$result['Sub_Heading']."</h3>
                  <p> ".$result['Description2']."</p>
                  <blockquote class='blockquote'>
                    <p>".$result['Quote']."</p>
                    <footer class='blockquote-footer'>Someone famous in
                      <cite title='Source Title'>Source Title</cite>
                    </footer>
                  </blockquote>
                  
                </div>
                <div class='post-tags'><a href='#' class='tag'>".$result['Hashtag1']."</a><a href='#' class='tag'>".$result['Hashtag2']."</a><a href='#' class='tag'>".$result['Hashtag3']."</a></div>
                <div class='posts-nav d-flex justify-content-between align-items-stretch flex-column flex-md-row'><a href='#' class='prev-post text-left d-flex align-items-center'>
                    <div class='icon prev'><i class='fa fa-angle-left'></i></div>
                    <div class='text'><strong class='text-primary'>Previous Post </strong>
                      <h6>I Bought a Wedding Dress.</h6>
                    </div></a><a href='#' class='next-post text-right d-flex align-items-center justify-content-end'>
                    <div class='text'><strong class='text-primary'>Next Post </strong>
                      <h6>I Bought a Wedding Dress.</h6>
                    </div>
                    <div class='icon next'><i class='fa fa-angle-right'>   </i></div></a></div>
                
                
              </div>
            </div>
          </div>
          "; 
          ?>
        </main>
        <aside class="col-lg-4">
          <!-- Widget [Search Bar Widget]-->
      
          <!-- Widget [Latest Posts Widget]        -->
          <div class="widget latest-posts">
            <header>
              <h3 class="h6">Latest Posts</h3>
            </header>
            <div class="blog-posts"><a href="#">
                <div class="item d-flex align-items-center">
                  <div class="image"><img src="img/small-thumbnail-1.jpg" alt="..." class="img-fluid"></div>
                  <div class="title"><strong>Let’s Be Honest About School Choice</strong>
                    <div class="d-flex align-items-center">
                      <div class="views"><i class="icon-eye"></i> 500</div>
                      <div class="comments"><i class="icon-comment"></i>12</div>
                    </div>
                  </div>
                </div></a><a href="#">
                <div class="item d-flex align-items-center">
                  <div class="image"><img src="img/small-thumbnail-2.jpg" alt="..." class="img-fluid"></div>
                  <div class="title"><strong>The Latest Trends in Technology</strong>
                    <div class="d-flex align-items-center">
                      <div class="views"><i class="icon-eye"></i> 500</div>
                      <div class="comments"><i class="icon-comment"></i>12</div>
                    </div>
                  </div>
                </div></a><a href="#">
                <div class="item d-flex align-items-center">
                  <div class="image"><img src="img/small-thumbnail-3.jpg" alt="..." class="img-fluid"></div>
                  <div class="title"><strong>The Time Management Skill</strong>
                    <div class="d-flex align-items-center">
                      <div class="views"><i class="icon-eye"></i> 500</div>
                      <div class="comments"><i class="icon-comment"></i>12</div>
                    </div>
                  </div>
                </div></a></div>
          </div>
          <!-- Widget [Categories Widget]-->
          <div class="widget categories">
            <header>
              <h3 class="h6">Categories</h3>
            </header>
            <div class="item d-flex justify-content-between"><a href="#">Academics</a><span>12</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Languages</a><span>25</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Music</a><span>8</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Art</a><span>17</span></div>
            <div class="item d-flex justify-content-between"><a href="#">It</a><span>25</span></div>
          </div>
          <!-- Widget [Tags Cloud Widget]-->
          <div class="widget tags">       
            <header>
              <h3 class="h6">Tags</h3>
            </header>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="tag">#Education</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Technology</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Fashion</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Sports</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Economy</a></li>
            </ul>
          </div>
        </aside>
      </div>
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
<!--end of footer section-->
    <!-- JavaScript files-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>