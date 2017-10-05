<?php
include 'connection.php';

$que_desc="";
$ans1="";
$ans2="";
$ans3="";
$ans4="";
$true_ans="";
$test_id="";


if($_SERVER['REQUEST_METHOD']=='POST')
  {
if(isset($_POST['que_desc'])==true && empty($_POST['que_desc'])==false &&
  isset($_POST['ans1'])==true && empty($_POST['ans1'])==false &&
  isset($_POST['ans2'])==true && empty($_POST['ans2'])==false && 
  isset($_POST['ans3'])==true && empty($_POST['ans3'])==false &&
  isset($_POST['ans4'])==true &&  empty($_POST['ans4'])==false &&
  isset($_POST['true_ans'])==true && empty($_POST['true_ans'])==false &&
  isset($_POST['test_id'])==true && empty($_POST['test_id'])==false
  )
{
  $que_desc=$_POST['que_desc'];
$ans1=$_POST['ans1'];
$ans2=$_POST['ans2'];
$ans3=$_POST['ans3'];
$ans4=$_POST['ans4'];
$true_ans=$_POST['true_ans'];
$test_id=$_POST['test_id'];
$q="INSERT INTO mst_question (que_desc,ans1,ans2,ans3,ans4,test_id,true_ans) VALUES ('$que_desc','$ans1','$ans2','$ans3','$ans4','$test_id','$true_ans')";

  mysqli_query($con,$q) or exit('Error in Query');
  echo "<h3>Added..</h3>"; 
}
else{
  echo "not filled";
}
}
/*
$q="select * from mst_question";
$res=mysqli_query($con,$q)or exit('error in query');
  
  while($row=mysqli_fetch_array($res)){
  echo "<hr>";
  echo "<hr>";
  echo "<hr>";
  echo "<hr>";
  echo "<hr>";
  for($i=0;$i<8;$i++){
    echo $row[$i]."<br>";
  }
  
  }
  */

?>

<!DOCTYPE html>
<html lang="en">
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
    margin-tans: 30px;
    font-size: 24px;
  }
  .colorgraph {
  height: 5px;
  border-tans: 0;
  background: #c4e17f;
  border-radius: 5px;
 
}
  

</style>
</head>
<body>

    <div class="container-fluid ">
        <div class="row">   

    <nav class="navbar navbar-default">
        <div class="container-fluid">
        <!-- navbar for mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>

          </button>
        </div>
<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <form role="form" method="post" action="add.php">
            <h2 style="text-align:center;">Add question</h2>
            <hr class="colorgraph">
            
            <div class="form-group">
                <textarea row="10"  name="que_desc" style="resize:none;height:200px;"  class="form-control input-lg" placeholder="question." tabindex="1"></textarea>
            </div>
            
            
                
                    <div class="form-group">
                        <input type="text" name="ans1" value="``" class="form-control input-lg" placeholder="option A" tabindex="2">
                    </div>
                    <div class="form-group">
                        <input type="text" name="ans2" value="``" class="form-control input-lg" placeholder="option B" tabindex="3">
                    </div>
                    <div class="form-group">
                        <input type="text" name="ans3" value="``" class="form-control input-lg" placeholder="option C" tabindex="4">
                    </div>
                    <div class="form-group">
                        <input type="text" name="ans4" value="``" class="form-control input-lg" placeholder="option D" tabindex="5">
                    </div>

                    
                    
                  <div class="form-group">
                  <select tabindex="6" name="true_ans">
                  <option>choose answer</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                  </div>

                    <div class="form-group">
                  <select tabindex="7" name="test_id">
                  <option>Select catagory</option>
                    <?php
                    $myfile = fopen("topic.txt", "r") or die("Unable to open file!");
                    $i=0;
                    while($i<30){
                    $str=fgets($myfile);
                    echo '<option>';
                                echo $str;
                            echo '</option>';

                    $i++;
                    }
                    fclose($myfile);
                    ?>
                    
                  </select>
                  </div>
            <hr class="colorgraph">
            <div class="row">
                <div class="col-xs-12 col-md-12"><input type="submit" value="Add question" class="btn btn-primary btn-block btn-lg" tabindex="10"></div>
            </div>
        </form>
    </div>
</div>
<!-- Modal -->

</div>



 <!-- jQuery -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/test.js"></script>
    <script src="js/signup.js"></script>
     <script type="text/javascript"
  src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=AM_HTMLorMML-full">
  </script>

 <!--  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script> -->

    </body>
    </html>