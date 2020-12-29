<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BLOG</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom icon font-->
    
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <!-- Fancybox-->
   
    <!-- theme stylesheet-->
   
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Favicon-->
   <link rel="stylesheet" href="../homepage/style.css">
    <link rel="stylesheet" href="style.blue.css">
    
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
            <a class="nav-link" href="../Aboutus/about.html">ABOUT US</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../profile_student/profile_student.php">SEARCH</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../blog/blog.php">BLOG</a>
          </li>
            
          
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../login/login.html">LOGIN</a></li>
          <li class="nav-item active">
            <a class="nav-link" href="../signup/signup.html">REGISTER</a></li>
          
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
                <a class="dropdown-item" href="#" style="color:red">You are not a verified user</a>
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
        <main class="posts-listing col-lg-8"> 
          <div class="container">
            <div class="row">
              <!-- post -->
              <?php


              //connecting to the database
              $servername = "localhost";
              $uname = "root";
              $pword = ""; 
              $database = "online_tutor";
              $conn = mysqli_connect($servername, $uname, $pword, $database);

              
              $result = mysqli_query($conn,"SELECT * FROM  write_blog");
              if (mysqli_num_rows($result) > 0) {
                $i=0;
                while($row = mysqli_fetch_array($result)) {
              echo "
              <div class='post col-xl-6'>
                <div class='post-thumbnail'><a href='post.php'><img src='data:image/jpeg;base64,".base64_encode($row['thumbnail'] )."' alt='...' class='img-fluid'></a></div>
                <div class='post-details'>
                  <div class='post-meta d-flex justify-content-between'>
                    <div class='date meta-last'>20 May | 2016</div>
                    <div class='category'><a href='#'>".$row['Category']."</a></div>
                  </div><a href='post.php'>
                    <h3 class='h4'>".$row['Title']."
                </h3></a>
                  <p class='text-muted'>".$row['Highlight']."…</p>
                  
                </div>
              </div>
              ";   
              $i++;
            }
          }
          else{
              
          }
              ?>
              <!-- post             -->
              <div class="post col-xl-6">
                <div class="post-thumbnail"><a href="post.html"><img src="graphic.jpg" alt="..." class="img-fluid"></a></div>
                <div class="post-details">
                  <div class="post-meta d-flex justify-content-between">
                    <div class="date meta-last">20 May | 2016</div>
                    <div class="category"><a href="#">Education</a></div>
                  </div><a href="post.html">
                    <h3 class="h4">Top 10 Career Option for Graphic Designer</h3></a>
                  <p class="text-muted">When words are not enough, images say more. Graphic designing is such a field for visual communication through designing Infographics, or graphic forms. This field of study....</p>
                  
                </div>
              </div>
              <!-- post             -->
              <div class="post col-xl-6">
                <div class="post-thumbnail"><a href="post.html"><img src="technology.jpg" alt="..." class="img-fluid"></a></div>
                <div class="post-details">
                  <div class="post-meta d-flex justify-content-between">
                    <div class="date meta-last">20 May | 2016</div>
                    <div class="category"><a href="#">Education</a></div>
                  </div><a href="post.html">
                    <h3 class="h4">The Latest Trends in Technology</h3></a>
                  <p class="text-muted">
                    The evolving technologies have rapidly changed the world in all sectors of education as well as economy. It has overall changed the global platform...</p>
                  
                </div>
              </div>
              <!-- post -->
              <div class="post col-xl-6">
                <div class="post-thumbnail"><a href="post.html"><img src="img/blog-post-4.jpeg" alt="..." class="img-fluid"></a></div>
                <div class="post-details">
                  <div class="post-meta d-flex justify-content-between">
                    <div class="date meta-last">20 May | 2016</div>
                    <div class="category"><a href="#">Education</a></div>
                  </div><a href="post.html">
                    <h3 class="h4">The Time Management Skill</h3></a>
                  <p class="text-muted">A career is well begun with an engineering degree. It is a degree that develops various skills and also enhances one’s thinking capabilities. But time management is an important factor...</p>
                
                </div>
              </div>
            </div>
            <!-- Pagination -->
            <nav aria-label="Page navigation example">
              <ul class="pagination pagination-template d-flex justify-content-center">
                <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
                <li class="page-item"><a href="#" class="page-link active">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
              </ul>
            </nav>
          </div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
  </body>
</html>