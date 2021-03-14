<?php

	//echo $fileextension=substr($_FILES['resume']['name'],-4);
	
/* 	if(!(strtoupper(substr($_FILES['resume']['name'],-4))=='.DOCX'))
	{
		echo "wrong file type 1";
	} */
	
	
	
	
	if(empty($_POST))
	{
		exit;
	}
	$msg=array();
	if(empty($_POST['nm'])|| empty($_POST['gender'])|| empty($_POST['email'])|| empty($_POST['addr'])||
	empty($_POST['ph'])|| empty($_POST['mobile'])|| empty($_POST['cl'])|| empty($_POST['cas'])||
	empty($_POST['cindustry'])||empty($_POST['quali'])|| empty($_POST['profile']) || empty($_POST['pwd'] ))
	{
		$msg[]="one of your field is empty";
	}
	if(strlen($_POST['pwd'])<6)
	{
		$msg[]="please enter atlist 6 digit password";
	}

	if(strlen($_POST['ph'])!=10)
	{
	
		$msg[]="please enter 10 digit number";

	}
	if(strlen($_POST['mobile'])!=10)
	{
		$msg[]="please enter 10 digit number";
	}
	if(!is_numeric($_POST['cas']))
	{
		$msg[]="only numeric valueis valid";
	}
	if(empty($_FILES['resume']['name']))
	{
		$msg[] = "Plz select a file";
	}
	
	if($_FILES['resume']['error']>0)
	{
		$msg[] = "error uploading file";
	}
	
	if(file_exists("uploads/".$_FILES['resume']['name']))
	{
		$msg[] = "this file is already uploaded.";
	}
	

/* 	if(!(strtoupper(substr($_FILES['resume']['name'],-4))=='.DOCX'))
	{
		$msg[] = "wrong file type";
	} */

	if(!empty($msg))
	{
		echo "<b> errors:</b><br>";
		foreach($msg as $k)
		{
			echo "<li>".$k;
		}
	}
	else
	{
	//	$link=mysql_connect("localhost","jobscope","riddhi")or die("can not connect");
	//	mysql_select_db("jobscope",$link) or die("can not select database");
	$con=mysqli_connect("localhost","root","","jobscope") or die("database connection failed");
		$nm=$_POST['nm'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$addr=$_POST['addr'];
		$ph=$_POST['ph'];
		$mobile=$_POST['mobile'];
		$cl=$_POST['cl'];
		$cas=$_POST['cas'];
		$cindustry=$_POST['cindustry'];
		$quali=$_POST['quali'];
		$profile=$_POST['profile'];
		$pwd=$_POST['pwd'];

		
		//echo $_FILES['resume'];
		$fileernaam=$_FILES['resume']['name'];
		//$tmp_name=$_FILES['resume']['tmp_name'];
		///$file_path="uploads/".$_FILES['resume']['name'];
		$extension=pathinfo($fileernaam, PATHINFO_EXTENSION);
		///////////////////

		if (!in_array($extension, ['pdf', 'PDF'])) {
			echo "You file extension must be .pdf";
		} 
		else {
			// move the uploaded (temporary) file to the specified destination
		/*	if (move_uploaded_file($tmp_name, $file_path)) {
				$sql = "INSERT INTO files (name, size, downloads) VALUES ('$filename', $size, 0)";
				if (mysqli_query($conn, $sql)) {
					echo "File uploaded successfully";
				}
			} else {
				echo "Failed to upload file.";
			}*/

			move_uploaded_file($_FILES['resume']['tmp_name'],"uploads/".$_FILES['resume']['name']);
			$path = "uploads/".$_FILES['resume']['name'];

					
		$q="insert into employees(ee_resume,ee_pwd,ee_fnm,ee_gender,ee_email,ee_add,ee_phno,ee_mobileno,
		ee_current_location,ee_annualsalary,ee_current_industry,ee_qualification,ee_profile)
   values ('$path','$pwd','$nm','$gender','$email','$addr','$ph','$mobile','$cl','$cas','$cindustry','$quali','$profile')";
	  
   mysqli_query($con,$q)or die("wrong query");
   mysqli_close($con);
   header("location:login.php");
		}


		/////////////////

	}
?>