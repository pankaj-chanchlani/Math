<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quizzeria</title>
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/CustomStyle.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="../test.css" rel="stylesheet">


  
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

<style>
 
  .colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
 
}
  

</style>
</head>
<body>

  <div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 
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
                <li><a href="signout.php">Sign Out</a></li>
                </ul> 
        </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav> <!-- header area end -->
            
            <!-- menubar area start -->
            
           
           <!-- menubar area end -->
<?php
//include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
  $rs=mysql_query("select * from mst_user where login='$loginid' and pass='$pass'");
  if(mysql_num_rows($rs)<1)
  {
    $found="N";
  }
  else
  {
    $_SESSION[login]=$loginid;
  }
}
if (isset($_SESSION[login]))
{
echo "<hr><h1 class='style8' align=center>Wel come to Online Exam</h1>";
    echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4">Choose Topics</a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="image/DEGREE.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="result.php" class="style4">Previous Result </a></td>
  </tr>
</table>';
   
    exit;
    

}


?>
 
   
<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 ">
        <form name="form1" method="post" action="" role="form">
            <h2 style="text-align:center;">Login to Take Quiz</h2>
            <hr class="colorgraph">
            
            <div class="form-group">
                <input type="text" name="loginid" id="loginid2" class="form-control input-lg" placeholder="User Name" tabindex="1">
            </div>
            
            
                
                    <div class="form-group">
                        <input name="pass" type="password" id="pass2" class="form-control input-lg" placeholder="Password" tabindex="2">
                    </div>
                      <?php
      if(isset($found))
      {
        echo "Invalid Username or Password";
      }
      ?>
                
                
               
            
            
            <hr class="colorgraph">
            <div class="row">
                <div class="col-xs-12 col-md-6"><input  name="submit" type="submit" value="Login" id="submit" class="btn btn-primary btn-block btn-lg" tabindex="3"></div>
                <div class="col-xs-12 col-md-6"><a href="signup.php" class="btn btn-success btn-block btn-lg" tabindex="4">Sign Up</a></div>
                
                
            </div>
        </form>
    </div>
</div>
<!-- Modal -->

</div>



 <!-- jQuery -->
    <script src="../js/jquery-1.11.2.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../test.js"></script>
    <script src="../js/signup.js"></script>

 <!--  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script> -->

    </body>
    </html>