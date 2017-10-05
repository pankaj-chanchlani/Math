<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript"
  src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=AM_HTMLorMML-full">
  </script>
<style type="text/css">
#content
{
	width: 900px;
	margin: 0 auto;
	font-family:Arial, Helvetica, sans-serif;
}
.page
{
float: right;
margin: 0;
padding: 0;
}
.page li
{
	list-style: none;
	display:inline-block;
}
.page li a, .current
{
display: block;
padding: 5px;
text-decoration: none;
color: #8A8A8A;
}
.current
{
	font-weight:bold;
	color: #000;
}
.button
{
padding: 5px 15px;
text-decoration: none;
background: #333;
color: #F3F3F3;
font-size: 13PX;
border-radius: 2PX;
margin: 0 4PX;
display: block;
float: left;
}
</style>


</head>
<body>
<div id="content">
<?php
include 'connection.php';

$start=0;
$limit=10;


if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$start=($id-1)*$limit;
}
else{
	$id=1;
}


$query=mysqli_query($con,"select * from mst_question LIMIT $start, $limit");
echo "<ul>";
while($row=mysqli_fetch_array($query))
{
	echo $row[2]."<br><br>";
	echo "(A)".$row[3]."<br><br>";
	echo "(B)".$row[4]."<br><br>";
	echo "(C)".$row[5]."<br><br>";
	echo "(D)".$row[6]."<br><br>";
}
echo "</ul>";

$res=mysqli_query($con,"select * from mst_question");
$rows=mysqli_num_rows($res);
$total=ceil($rows/$limit);

if($id>1)
{
	echo "<a href='?id=".($id-1)."' class='button'>PREVIOUS</a>";
}
if($id!=$total)
{
	echo "<a href='?id=".($id+1)."' class='button'>NEXT</a>";
}

echo "<ul class='page'>";
		for($i=1;$i<=$total;$i++)
		{
			if($i==$id) { echo "<li class='current'>".$i."</li>"; }
			
			else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
		}
echo "</ul>";
?>
</div>
</body>
</html>