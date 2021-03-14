<?php session_start();
		//echo $_SESSION['eeid'];
		$job_id=$_GET['jid'];
	//$link=mysql_connect("localhost","jobscope","riddhi")or die("can not connect");
	//mysql_select_db("jobscope",$link) or die("can not select database");
	$con=mysqli_connect("localhost","root","","jobscope") or die("database failed");
	$q="insert into applicants (a_uid,a_jid) values(".$_SESSION['eeid'].",".$_GET['jid'].")";

	mysqli_query($con,$q) or die("wrong query");
	header("location:job_details.php?id={$job_id}");
	
?>