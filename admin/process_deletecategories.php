<?php session_start();
if(!(isset($_SESSION['status']) && $_SESSION['unm']=='admin'))
{
	header("location:../index.php");
}

if(empty($_POST))
{
	exit;
}
$msg=array();

if(empty($_POST['name']))
{
	$msg[]="One of the field is empty";
}

if(!empty($msg))
{
	echo "<b>Errors:</b><br>";
	foreach($msg as $k)
	{
		echo "<li>".$k;
	}
}
else
{
//$link=mysql_connect("localhost","jobscope","riddhi")or die("can not connect");
//mysql_select_db ("jobscope",$link) or die("can not select database");
$con=mysqli_connect("localhost","root","","jobscope") or die("database failed");
$name=$_POST['name'];
$q="delete from categories where cat_nm='$name'";
mysqli_query($con,$q) or die ("wrong query");
mysqli_close($con);
header("location:category.php");
}