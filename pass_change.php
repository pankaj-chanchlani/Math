<?php
   include('session.php');
   include('connection.php');
  $login = $login_session;
  $old_pass="";
  $pass="";
  $flag=0;
  $cpass="";
  if($_SERVER['REQUEST_METHOD']=='POST')
  { 
if(isset($_POST['pass'])==true &&  empty($_POST['pass'])==false &&
  isset($_POST['cpass'])==true && empty($_POST['cpass'])==false&&
  isset($_POST['old_pass'])==true &&  empty($_POST['old_pass'])==false
  )
{
  $pass=$_POST['pass'];
  $cpass=$_POST['cpass'];
  $old_pass=$_POST['old_pass'];
  $t = "SELECT * FROM `mst_user` WHERE login='$login'";
  $p=mysqli_query($con,$t);
  $rows = mysqli_fetch_array($p);
 
$rows = $rows['pass'];
  if($old_pass == $rows)
  {
    if($pass==$cpass)
    {
   $q="UPDATE `mst_user` SET pass='$pass'";
  mysqli_query($con,$q) or exit('Error in query');
  header('location:change.php?info=');
}
else
{
  $flag=1;
}
}
else
{
  $flag=2;
}
}
}
?>
<html>
   
   <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/CustomStyle.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="css/test.css" rel="stylesheet">


  
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

<style>
  .rect{
    height: 250px;
    width: 250px;
    border: 2px solid;
    margin-top: 30px;
    font-size: 24px;
  }
  .colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
 
}
  

</style>

   </head>
   
   <body>
   <!--   <h1>Welcome <?php echo $login_session; ?></h1>  -->
<div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
        </div>
        <!-- navbar for desktop display -->
        <div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <a href="index.php"><img src="logo.jpg" style= "margin-left: 15px;"></img></a>
                 
          <ul class="nav navbar-nav navbar-right">
              <ul class="nav navbar-nav"  style="padding: 3px; margin-right: 10px;">
              <li class="active" class="offset-2"><a href="index.php">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categories<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            <li><a href="#">ONLINE STUDY</a></li>
            <li><a href="#">PERCENTAGE CALCULATOR</a></li>
            <li><a href="#">ONLINE TEST SERIES</a></li>
            <li class="divider"></li>
            <li><a href="#">RANK PRIDICTOR</a></li>
            <li><a href="#">LAST YEAR JEE ADVANCED SOLUTIONS</a></li>
            <li><a href="#">JEE MAIN SOLUTIONS</a></li>
            <li class="divider"></li>
            <li><a href="#">JEE ADVANCE PREPRATION</a></li>
            <li><a href="#">JEE MAIN PREPRATION</a></li>
            <li><a href="#">ABOUT US</a></li>
            </ul>
          </li>
          <li><a href="contact.php">Contact Us</a></li>
                <li><a href="#">Welcome! <?php echo $login_session; ?></a></li>
                <li><a href="logout.php">Sign out</a></li>
                </ul> 
        </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

<br>
<br><br><br>
<div class="container">
<div class="row">
  <?php
$msg1="Your Password Is Not Matching";
$msg2="You Are Entering Wrong Old Password";
if($flag==1){
 echo '<div style="text-align:center;"class="alert alert-success" role="alert"><h3>';echo $msg1;echo '</h3></div>';
$flag=0;
}

if($flag==2){
$flag=0;
 echo '<div style="text-align:center;"class="alert alert-danger" role="alert"><h3>';echo $msg2;echo '</h3></div>';
}

?>

  <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form role="form" action="pass_change.php" method="post">
      <h2 style="text-align:center;">Change Password</h2>
      <hr class="colorgraph">
            <input type="password" name="old_pass"  class="form-control input-lg" placeholder="Old Password" tabindex="4">
            <br>
            <input type="password" name="pass"  class="form-control input-lg" placeholder="Password" tabindex="4">
            <br>
            <input type="password" name="cpass"  class="form-control input-lg" placeholder="Confirm Password" tabindex="5">
          
 <!--     <div class="g-recaptcha" data-sitekey="6Lf8BxMTAAAAAFLE6clq1I7YYbzrXsaE6isH0rWx"></div><br>
      <br>
<br><br><br><br><br><br><br>-->
      <hr class="colorgraph">
      <div class="row">
        <div class="col-xs-12 col-md-12"><input type="submit" value="Submit" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
       </div>
    </div>
    </form>
</div>
</div>
   </body>
      <script src="js/jquery-1.11.2.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/test.js"></script>
    <script src="js/signup.js"></script>

 <!--  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script> -->

    </body>
    </html>