<?php
	$con=mysqli_connect("localhost","root","","jobscope") or die("could not connect to db");
	$id=$_GET['id'];
	$sql="SELECT * FROM hotjobs WHERE id='{$id}'";
	$result=mysqli_query($con,$sql) or die("query falied");
	if(mysqli_num_rows($result)>0){
	$data=mysqli_fetch_assoc($result);
	echo $data['circular'];
	}
	else{
		echo "no such jobs";
	}
?>
	