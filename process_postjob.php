<?php session_start();

	if(empty($_POST))
	{
		exit;
	}
	$msg=array();
	if(empty($_POST['title'])|| empty($_POST['cat'])||
	empty($_POST['salary'])|| empty($_POST['experience'])|| empty($_POST['city']))
	{
		$msg[]="one of your field is empty";
	}
	if(!is_numeric($_POST['salary']))
	{
		$msg[]="only numeric valueis valid";
	}

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
		//$link=mysql_connect("localhost","jobscope","riddhi")or die("can not connect");
		//mysql_select_db("jobscope",$link) or die("can not select database");
		$con=mysqli_connect("localhost","root","","jobscope") or die("database failed");

		$title=$_POST['title'];
		$cnam=$_POST['company_name'];
		$cat=$_POST['cat'];
		$vac=$_POST['vacancy'];
		$pos=$_POST['position'];
		$j_res=$_POST['job_responsibilities'];
		$status=$_POST['status'];
		$e_req=$_POST['edu_req'];
		$ex=$_POST['experience'];
		$sal=$_POST['salary'];
		$a_req=$_POST['add_req'];
		$city=$_POST['city'];
		// $date=$_POST['pub_date'];
		$date=date("Y-m-d");
		$dead=$_POST['deadline'];
		$c_inf=$_POST['com_info'];
		$ins=$_POST['instruction'];

		echo $fileernaam=$_FILES['resume']['name'];
		$extension=pathinfo($fileernaam, PATHINFO_EXTENSION);

		//$experience=$_POST['logo'];
	

		/*
		$q="insert into jobs(j_title,j_owner_name,j_category,j_hours,j_salary,j_experience,j_discription,j_city,company_name,vacancy,grade,job_responsibilities,status,edu_requirements,experience,add_requirements,instruction,pub_date,deadline,company_info,salary )
		   values ('$title','".$_SESSION['unm']."','$cat','$hours','$salary','$experience','$disc','$city','{$cnam}','{$vac}','{$pos}','{$j_res}','{$status}','{$e_req}','{$ex}','{$a_req}','{$ins}','{$date}','{$dead}','{$c_inf}','{$sal}')";
		   
		mysqli_query($con,$q)or die("wrong query");
		mysqli_close($con);
		header("location:postjob.php");
		*/
		if (!in_array($extension, ['jpg', 'JPG', 'jpeg','JPEG','png','PNG'])) {
			echo "You file extension must be .jpg, .jpeg, .png";
		} 
		else {
			move_uploaded_file($_FILES['resume']['tmp_name'],"uploads/".$_FILES['resume']['name']);
			$path = "uploads/".$_FILES['resume']['name'];		
			$q="insert into jobs(j_title,j_owner_name,j_category,j_hours,j_salary,j_experience,j_discription,j_city,company_name,vacancy,grade,job_responsibilities,status,edu_requirements,experience,add_requirements,instruction,pub_date,deadline,company_info,logo,salary)
			   values ('$title','".$_SESSION['unm']."','$cat','$hours','$salary','$experience','$disc','$city','{$cnam}','{$vac}','{$pos}','{$j_res}','{$status}','{$e_req}','{$ex}','{$a_req}','{$ins}','{$date}','{$dead}','{$c_inf}','{$path}','{$sal}')";
			   
			mysqli_query($con,$q)or die("wrong query");
			mysqli_close($con);
			header("location:postjob.php");
		}
	}



	
?>