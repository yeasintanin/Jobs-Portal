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

if(empty($_POST['nm']))
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
	//$link=mysql_connect("localhost","jobscope","riddhi") or die("cant connect");
	//mysql_select_db("jobscope",$link) or die("cant select db");
	$con=mysqli_connect("localhost","root","","jobscope") or die("database failed");
	$nm=$_POST['nm'];
	$q="insert into categories(cat_nm)values('$nm')";
	mysqli_query($con,$q) or die("wrong query");
	mysqli_close($con);
	header("location:category.php");
}