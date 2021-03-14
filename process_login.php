<?php 
	echo $_POST['cat'];

session_start();
$con=mysqli_connect("localhost","root","","jobscope") or die("database connection failed");
	
if(empty($_POST))
{
	exit;
}

if(empty($_POST['unm'])||empty($_POST['pwd'])||empty($_POST['cat']))
{
	echo "You must enter all fields";
}
if($_POST['cat']=='employee')
{


	$sql = "select * from employees where ee_fnm = '".$_POST['unm']."'";
	
	$res = mysqli_query($con,$sql) or die("wrong query");
	
	$row = mysqli_fetch_assoc($res);
	
	
	if(!empty($row))
	{
		if($_POST['pwd']==$row['ee_pwd'])
		{
			//login
			$_SESSION = array();
			
			$_SESSION['unm']=$row['ee_fnm'];
			$_SESSION['eeid']=$row['ee_id'];
			$_SESSION['cat']='employee';
			$_SESSION['status']=1;
			$_SESSION['employee']=1;
			
			header("location:index.php");
		}
		else
		{
			echo "Wrong Password";
		}
	}
	else
	{
		echo "No Such User";
	}
	
}	
	
if($_POST['cat']=='employer')
{

	/*
	$link = mysql_connect("localhost","jobscope","riddhi") or die("Cannot Connect");
	mysql_select_db("jobscope",$link) or die("Cant select db");
	*/

	
	$q = "select * from employers where er_fnm = '".$_POST['unm']."'";
	
	$resu = mysqli_query($con,$q) or die("wrong query");
	
	$row = mysqli_fetch_assoc($resu);
	
	
	if(!empty($row))
	{
		if($_POST['pwd']==$row['er_pwd'])
		{
			//login
			$_SESSION = array();
			
			$_SESSION['unm']=$row['er_fnm'];
			$_SESSION['eid']=$row['er_id'];
			$_SESSION['cat']='employer';
			$_SESSION['status']=1;
			$_SESSION['employer']=1;
			$_SESSION['company']=$row['er_company'];
			header("location:index.php");
		}
		else
		{
			echo "Wrong Password .";
		}
	}
	else
	{
		echo "No Such User";
	}
	
	
}
?>