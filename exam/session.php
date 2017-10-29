<?php
   include('database.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysql_query("SELECT login from `mst_user` where login = '$user_check' ",$cn);
   
   $row = mysql_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['login'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
<?php @$_SESSION['login']; 
  error_reporting(1);
  ?>
  </td>
    <td>
	<?php
	if(isset($_SESSION['login']))
	{
	 //echo "<div align=\"right\" \"margin-left: 100px\"><strong><a href=\"signout.php\">Signout</a></strong></div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>