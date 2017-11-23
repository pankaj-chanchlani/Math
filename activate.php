<?php
include 'connection.php';
$email="";
$otp="";
$pass="";
$cpass="";
$flag=0;
$msg1="Succesfully Password Changed";
$msg2="OTP is wrong";
$msg3="Email-Address Is Incorrect";
$msg4="Please Try Again Later";
if($_SERVER['REQUEST_METHOD']=='POST'){
  if(isset($_POST['email'])==true && empty($_POST['email'])==false &&
    isset($_POST['otp'])==true && empty($_POST['otp'])==false &&
  isset($_POST['pass'])==true &&  empty($_POST['pass'])==false &&
  isset($_POST['cpass'])==true && empty($_POST['cpass'])==false
  ){
    $email=$_POST['email'];  
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$otp=$_POST['otp'];
$r= "SELECT `email` FROM `otp` WHERE email='$email'";
$q= "SELECT `otp` FROM `otp` WHERE otp='$otp'";
$p=mysqli_query($con,$r);
  $num= mysqli_num_rows($p);
$t=mysqli_query($con,$q);
  $num1= mysqli_num_rows($t);
  if($num==1){
    if($num1==1){
    if($cpass==$pass){
      $s = "SELECT `email` FROM `mst_user` WHERE email='$email'";
      $p=mysqli_query($con,$s);
  $num2= mysqli_num_rows($p);
  if($num2==1){
    $k="UPDATE `mst_user` SET pass='$pass' WHERE email='$email'";
  mysqli_query($con,$k)
   or exit('Password Mismatch');
   $flag=1;
}
  else{
    $flag=2;

  }
}
}
else{
  $flag=3;}
}
else{
  $flag=4;}
  if($flag==1)
  {
$r= "SELECT `email` FROM `otp` WHERE email='$email'";
$p=mysqli_query($con,$r);
  $num= mysqli_num_rows($p);
  if($num==1)
  {
    $q="DELETE FROM `otp` WHERE email='$email'";
    $p=mysqli_query($con,$q);
  }
}
}
}?>
<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Quizzeria</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
  <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="gettemplates.co" />

  <!--
    Oxygen by gettemplates.co
    Twitter: http://twitter.com/gettemplateco
    URL: http://gettemplates.co
  -->

    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  </head>
  <body>
    
  <div class="gtco-loader"></div>
  
  <div id="page">
  <nav class="gtco-nav" role="navigation">
    <div class="gtco-container">
      <div class="row">
        <div class="col-xs-2">
          <div id="gtco-logo"><a href="index.html">Quizzeria.</a></div>
        </div>
        <div class="col-xs-8 text-center menu-1">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li class="has-dropdown">
              <a href="services.html">Services</a>
              <ul class="dropdown">
                  <li><a href="#">Rank Predictor</a></li>
                <li><a href="#">Percentage Calculator</a></li>
                <li><a href="#"></a>Graph Calculator</li>
            </ul>
            </li>
            <li ><a href="contact.html">Contact</a></li>
              <li class="btn-cta"><a href="signup.php"><span>Register</span></a></li>
          </ul>
        </div>
        <div class="col-xs-2 text-right hidden-xs menu-2">
          <ul>
            <li class="btn-cta"><a href="#"><span>Login</span></a></li>
          </ul>
        </div>
      </div>
      
    </div>
  </nav>

  <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(images/img_bg_1.jpg);">

    <div class="gtco-container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <div class="display-t">
            <div class="display-tc animate-box" data-animate-effect="fadeIn">
              <h1>Relax!          . You Are Secure</h1>
              <h2>Just Change Your Password And Securely Access  <a href="" target="_blank">Quizzeria</a></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
      <?php
if($flag==1){
 echo '<div style="text-align:center;"class="alert alert-success" role="alert"><h3>';echo $msg1;echo '</h3></div>';
$flag=0;
}

if($flag==2){
$flag=0;
 echo '<div style="text-align:center;"class="alert alert-danger" role="alert"><h3>';echo $msg2;echo '</h3></div>';
}
if($flag==3){
$flag=0;
 echo '<div style="text-align:center;"class="alert alert-danger" role="alert"><h3>';echo $msg2;echo '</h3></div>';
}
if($flag==4){
$flag=0;
 echo '<div style="text-align:center;"class="alert alert-danger" role="alert"><h3>';echo $msg2;echo '</h3></div>';
}
?>
  
  <div class="gtco-section">
    <div class="gtco-container">
      <div class="row">
        <div class="col-md-6 animate-box">
          <h3>Change Password</h3>
          <form role="form" action="activate.php" method="POST">
            <div class="row form-group">
              <div class="col-md-12">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Your email address">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label for="address">Password</label>
                <input type="text" name="pass" class="form-control" placeholder="Password">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label for="city">Confirm Password</label>
                <input type="text" name="cpass" class="form-control" placeholder="Confirm Password">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label for="phone">One Time Password</label>
                <input type="text" name="otp" class="form-control" placeholder="One Time Password">
              </div>
            </div>

            <div class="form-group">
              <input type="submit" value="Change Password" class="btn btn-primary">
            </div>

          </form>   
        </div>
        <div class="col-md-5 col-md-push-1 animate-box">
          
          <div class="gtco-contact-info">
            <h3>Contact Information</h3>
            <ul>
              <li class="address">B-117 BH-2 LNMIIT <br> Post Sumel , Via Jamdoli , Jaipur 302031</li>
              <li class="phone"><a href="tel://1234567920">+91 9529263020</a></li>
              <li class="email"><a href="mailto:info@yoursite.com">Quizzeria@gmail.com</a></li>
              <li class="url"><a href="http://mystudenttalks.com">mystudenttalks.com</a></li>
            </ul>
          </div>

        </div>
      </div>
      
    </div>
  </div>

  
  
  

  <footer id="gtco-footer" role="contentinfo">
    <div class="gtco-container">
      <div class="row">
        <div class="col-md-4 gtco-widget">
          <h3>The Company</h3>
          <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
          <p><a href="#">Learn More</a></p>
        </div>
        <div class="col-md-2 col-md-push-1">
          <ul class="gtco-footer-links">
            <li><a href="#">About</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Meetups</a></li>
          </ul>
        </div>

        <div class="col-md-2 col-md-push-1">
          <ul class="gtco-footer-links">
            <li><a href="#">Shop</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">Handbook</a></li>
            <li><a href="#">Held Desk</a></li>
          </ul>
        </div>

        <div class="col-md-2 col-md-push-1">
          <ul class="gtco-footer-links">
            <li><a href="#">Find Designers</a></li>
            <li><a href="#">Find Deelopers</a></li>
            <li><a href="#">Teams</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">API</a></li>
          </ul>
        </div>
      </div>

      <div class="row copyright">
        <div class="col-md-12">
          <p class="pull-left">
            <small class="block">&copy; 2016 All Rights Reserved.</small> 
            <small class="block">Designed by <a href="http://gettemplates.co/" target="_blank">Pankaj Chanchlani</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
          </p>
          <p class="pull-right">
            <ul class="gtco-social-icons pull-right">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook"></i></a></li>
              <li><a href="#"><i class="icon-linkedin"></i></a></li>
              <li><a href="#"><i class="icon-dribbble"></i></a></li>
            </ul>
          </p>
        </div>
      </div>

    </div>
  </footer>
  </div>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
  </div>
  
  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Carousel -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- countTo -->
  <script src="js/jquery.countTo.js"></script>
  <!-- Magnific Popup -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/magnific-popup-options.js"></script>
  <!-- Main -->
  <script src="js/main.js"></script>

  </body>
</html>

