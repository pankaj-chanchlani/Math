<?php
$count=0;
//include 'timer.html';
session_start();
error_reporting(1);
include("database.php");
extract($_POST);
extract($_GET);
extract($_SESSION);
if(isset($subid) && isset($testid))
{
$_SESSION[sid]=$subid;
$_SESSION[tid]=$testid;
header("location:quiz.php");
}
if(!isset($_SESSION[sid]) || !isset($_SESSION[tid]))
{
	header("location: index.php");
}
?>
<html>
<head>
<title>Online Quiz</title>
<script type="text/javascript"
  src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=AM_HTMLorMML-full">
  </script>
 <span id="countdown" class="timer"></span>
<script>
	   function setCookie(cname,cvalue,exdays)
                {
                var d = new Date();
                d.setTime(d.getTime()+(exdays*24*60*60*1000));
                var expires = "expires="+d.toGMTString();
                document.cookie = cname + "=" + cvalue + "; " + expires;
                }
                function getCookie(cname)
                {
                var name = cname + "=";
                var ca = document.cookie.split(';');
                for(var i=0; i<ca.length; i++)
                  {
                  var c = ca[i].trim();
                  if (c.indexOf(name)==0) return c.substring(name.length,c.length);
                  }
                return "";
                }
                cook=getCookie("my_cookie");
                if(cook==""){
                   var seconds = 60;
                }else{
                     seconds = cook;
                     console.log(cook);
                }
function secondPassed() {
                    var minutes = Math.round((seconds - 30)/60);
                    var remainingSeconds = seconds % 60;
                    if (remainingSeconds < 10) {
                        remainingSeconds = "0" + remainingSeconds;
                    }
                    setCookie("my_cookie",seconds,5);
                    document.getElementById('countdown').innerHTML = minutes + ":" +    remainingSeconds;
                    if (seconds == 0) {
                        clearInterval(countdownTimer);
                        document.getElementById('countdown').innerHTML = "Buzz Buzz";
                    } else {    
                        seconds--; }}
                var countdownTimer = setInterval(secondPassed, 1000);
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
<style>

.colorgraph {
  height: 5px;
  border-tans: 0;
  border-radius: 5px;
  color: #c4e17f;
  text-align: center;
}
.colorgraph1 {
  color: #97FF00;
  text-align: center;
}
 </style>

</head>

<body>

<?php
include("header.php");
$query="select * from mst_question";
$rs=mysql_query("select * from mst_question where test_id=$tid",$cn) or die(mysql_error());
if(!isset($_SESSION[qn])&&!isset($_SESSION[pn])&&!isset($_SESSION[rn])&&!isset($_SESSION[tn]))
{
	$_SESSION[qn]=0;
	$_SESSION[tn]=0;
	$_SESSION[rn]=0;
	$_SESSION[pn]=0;
	mysql_query("delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysql_error());
	$_SESSION[trueans]=0;
}
else
{	

		if($submit=='Next Question' && (isset($ans) || !isset($ans)))
		{
				mysql_data_seek($rs,$_SESSION[qn]);
				$row= mysql_fetch_row($rs);	
				mysql_query("insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
				//echo "$ans";
				//mysql_query("UPDATE `mst_useranswer` SET `sess_id`='".session_id()."', `your_ans`=[`$ans`]");
				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				else if(isset($ans) && $ans!=$row[7])
				{
					$_SESSION[tn]=$_SESSION[tn]+1;
				}
				if($_SESSION[pn]<0 && isset($ans) && $_SESSION[trueans]>0)
				{
					mysql_query("UPDATE `mst_useranswer` SET `sess_id`='".session_id()."', `your_ans`=[`$ans`]");
					$_SESSION[pn]=$_SESSION[pn]+1;
					$_SESSION[trueans]=$_SESSION[trueans]-1;
					if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				}
				$_SESSION[qn]=$_SESSION[qn]+1;
		}
		else if($submit=='Previous Question' && !isset($ans))
		{
				mysql_data_seek($rs,$_SESSION[qn]);
				$row= mysql_fetch_row($rs);	
				mysql_query("insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());	
				if($_SESSION[qn]==0)
					{
					echo "<h2 class='colorgraph';>you are the beginning</h2>";
				}
				else
				{
				$_SESSION[qn]=$_SESSION[qn]-1;
				$_SESSION[pn]=$_SESSION[pn]-1;
		}
	//	mysql_query("UPDATE `mst_useranswer` SET `sess_id`='".session_id()."', `your_ans`=`$ans`");
		}
	/*	else if($submit=='Next Question' && !isset($ans))
		{
				mysql_data_seek($rs,$_SESSION[qn]);
				$row= mysql_fetch_row($rs);
				mysql_query("insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());	
				$_SESSION[qn]=$_SESSION[qn]+1;
				$_SESSION[rn]=$_SESSION[rn]-1;
		}*/
		else if($submit=='Get Result' && (isset($ans) || !isset($ans)))
		{
				mysql_data_seek($rs,$_SESSION[qn]);
				$row= mysql_fetch_row($rs);	
				mysql_query("insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
				if(isset($ans) && $ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				if(isset($ans) && $ans!=$row[7])
				{
					$_SESSION[tn]=$_SESSION[tn]+1;
				}
				else
				{
					$_SESSION[qn]=$_SESSION[qn]+1;
				}
				echo "<h1 class=head1> Result</h1>";
				echo "<Table align=center><tr class=tot><td>Total Question <td>5";
				echo "<tr class=tans><td>True Answer<td>".$_SESSION[trueans];
				$w=$_SESSION[tn];
				echo "<tr class=fans><td>Wrong Answer<td> ". $w;
				echo "</table>";
				mysql_query("insert into mst_result(login,test_id,test_date,score) values('$login',$tid,'".date("d/m/Y")."',$_SESSION[trueans])") or die(mysql_error());
				echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
				echo "<h1 align=center><a href=index.php> Take Quiz Again</a> </h1>";
				unset($_SESSION[qn]);
				unset($_SESSION[pn]);
				unset($_SESSION[rn]);
				unset($_SESSION[tn]);
				unset($_SESSION[sid]);
				unset($_SESSION[tid]);
				unset($_SESSION[trueans]);
				exit;
		}
}
$rs=mysql_query("select * from mst_question where test_id=$tid",$cn) or die(mysql_error());
// ORDER BY RAND()
if($_SESSION[qn]>mysql_num_rows($rs)-1)
{
unset($_SESSION[qn]);
echo "<h1 class=head1>Some Error  Occured</h1>";
session_destroy();
echo "Please <a href=index.php> Start Again</a>";

exit;
}
mysql_data_seek($rs,$_SESSION[qn]);
$row= mysql_fetch_row($rs);
echo "<form name=myfm method=post action=quiz.php>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
$n=$_SESSION[qn]+1;
echo "<tR><td><span class=style2>Que ".  $n .": $row[2]</style>";
echo "<tr><td class=style8><input type=radio name=ans value=1>$row[3]";
echo "<tr><td class=style8><input type=radio name=ans value=2>$row[4]";
echo "<tr><td class=style8><input type=radio name=ans value=3>$row[5]";
echo "<tr><td class=style8><input type=radio name=ans value=4>$row[6]";

if($_SESSION[qn]<mysql_num_rows($rs)-1)
{
//echo "<tr><td><input type=submit name=submit value='Next Question'></form>";
echo "<tr><td><input type=submit name=submit value='Next Question'></form>";
echo "<tr><td><input type=submit name=submit value='Previous Question'></form>";

}
else
	echo "<tr><td><input type=submit name=submit value='Previous Question'></form>";
echo "<tr><td><input type=submit name=submit value='Get Result'></form>";
echo "</table></table>";
?>
</body>
</html>