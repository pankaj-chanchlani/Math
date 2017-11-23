<?php
//include 'connection.php';
//$b = "Your password must contain 8 Charactars , 1 Capital letter And 1 Number And Login-Id must be Unique";
//echo '<div style="text-align:center;"class="alert alert-danger" role="alert"><h3>';echo $b;echo '</h3></div>';
$username="";
$login="";
$email="";
//$pass="";
//$cpass="";
$address="";
$city="";
$phone="";
$flag=0;
$msg1="Succesfully Registered";
$msg2="User Already Exists";
$k="Email Id Exist";
if($_SERVER['REQUEST_METHOD']=='POST')
  { 
  	echo "1";
if(isset($_POST['username'])==true && empty($_POST['username'])==false &&
  isset($_POST['login'])==true && empty($_POST['login'])==false && 
  isset($_POST['email'])==true && empty($_POST['email'])==false &&
  //isset($_POST['pass'])==true &&  empty($_POST['pass'])==false &&
  //isset($_POST['cpass'])==true && empty($_POST['cpass'])==false&&
  isset($_POST['address'])==true &&  empty($_POST['address'])==false &&
  isset($_POST['city'])==true &&  empty($_POST['city'])==false &&
  isset($_POST['phone'])==true &&  empty($_POST['phone'])==false
  )
{
	echo "2";
$username=$_POST['username'];
$login=$_POST['login'];
$email=($_POST['email']);
//$pass = test_input($_POST["pass"]);
//$cpass = test_input($_POST["cpass"]);
//$pass=$_POST['pass'];
//$cpass=$_POST['cpass'];
$address=$_POST['address'];
$city=$_POST['city'];
$phone=$_POST['phone'];
/*if(isset($_POST['g-recaptcha-response'])==true && empty($_POST['g-recaptcha-response'])==false){
$secret="6Lf8BxMTAAAAAHTAl1N1ANiHOZFyIJed8gCqFNQx";
$ip=$_SERVER['REMOTE_ADDR'];
$captcha=$_POST['g-recaptcha-response'];
$google_url="https://www.google.com/recaptcha/api/siteverify";
$rsp=$url=file_get_contents($google_url."?secret=".$secret."&response=".$captcha."&remoteip=".$ip);
var_dump($rsp);
$arr=json_decode($rsp,TRUE);
if($arr['success']){*/
/*  $a="";
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
      $flag=3;
            $a = "You Entered An Invalid Email Format"; 
        }
    if (strlen($_POST["pass"]) < '8') {
      $flag=3;
     $a =  "Your Password Must Contain At Least 8 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$pass)) {
      $flag=3;
        $a = "Your Password Must Contain At Least 1 Number!";
                }
    elseif(!preg_match("#[A-Z]+#",$pass)) {
      $flag=3;
       $a = "Your Password Must Contain At Least 1 Capital Letter!";
            }
    elseif(!preg_match("#[a-z]+#",$pass)) {
      $flag=3;
        $a = "Your Password Must Contain At Least 1 Lowercase Letter!";
    }*/
  //if($cpass==$pass)
//{
  $t = "SELECT email FROM mst_user WHERE email='$email'";
  $p=mysqli_query($con,$t);
  $num= mysqli_num_rows($p);
  if($num==0){
  $r= "SELECT login FROM mst_user WHERE login='$login'";
  $q=mysqli_query($con,$r);
  $num= mysqli_num_rows($q);
  if($num==0){
   // $q="INSERT INTO `mst_user` (username,login,email,address,city,phone) VALUES ('$username','$login','$email','$address','$city','$phone')";
  //mysqli_query($con,$q) or exit('Error in query');
    //   $flag=1;
        $info= array($username,$login,$email,$address,$city,$phone);
       header('location:mailer3.php?info='.serialize($info));
        }
  else{
    $flag=2;
  }
}
else
{
  $flag=4;
}

}
else{
  echo "die";
}
}
?>
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
						<li class="btn-cta"><a href="login.php"><span>Login</span></a></li>
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
							<h2>Just Register And Securely Access  <a href="" target="_blank">Quizzeria</a></h2>
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
if($flag==3)
{
      echo '<div style="text-align:center;"class="alert alert-danger" role="alert"><h3>';echo $a;echo '</h3></div>';
}
if($flag==4)
{
      echo '<div style="text-align:center;"class="alert alert-danger" role="alert"><h3>';echo $k;echo '</h3></div>';
}
?>
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-6 animate-box">
					<h3>Register</h3>
					<form role="form" action="signup.php" method="POST">
						<div class="row form-group">
							<div class="col-md-6">
								<label for="login">Login-Name</label>
								<input type="text" name="login" class="form-control" placeholder="Unique-login-name">
							</div>
							<div class="col-md-6">
								<label for="username">Username</label>
								<input type="text" name="username" class="form-control" placeholder="Your Name">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" name="email" class="form-control" placeholder="Your email address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="address">Address</label>
								<input type="text" name="address" class="form-control" placeholder="Home Address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="city">City</label>
								<input type="text" name="city" class="form-control" placeholder="City">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="phone">Mobile Number</label>
								<input type="text" name="phone" class="form-control" placeholder="Your Mobile Number">
							</div>
						</div>

						<div class="form-group">
							<input type="submit" value="Register" class="btn btn-primary">
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

