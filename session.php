<?php
   include('connection.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($con,"SELECT login from `mst_user` where login = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['login'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>