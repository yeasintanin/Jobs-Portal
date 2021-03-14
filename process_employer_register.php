<?php
	if(empty($_POST))
	{
		exit;
	}
	$msg=array();
	if(empty($_POST['nm'])|| empty($_POST['cnm'])|| empty($_POST['addr'])||
	empty($_POST['ph'])|| empty($_POST['email'])|| empty($_POST['profile']) ||empty($_POST['pwd']))
	{
		$msg[]="one of your field is empty";
	}

	if(strlen($_POST['pwd']<6))
	{
		$msg[]="please enter atlist 6 digit password";
	}
	if(strlen($_POST['ph'])!=10)
	{
	
		$msg[]="please enter 10 digit number";

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
		$con=mysqli_connect("localhost","root","","jobscope") or die("database connection failed");
		$nm=$_POST['nm'];
		$cnm=$_POST['cnm'];
		$addr=$_POST['addr'];
		$ph=$_POST['ph'];
		$email=$_POST['email'];
		$profile=$_POST['profile'];
		$pwd=$_POST['pwd'];
		
		////////////////company logo adding in employer registration////////////



		 $fileernaam=$_FILES['resume']['name'];
		$extension=pathinfo($fileernaam, PATHINFO_EXTENSION);
		if (!in_array($extension, ['jpg', 'JPG', 'jpeg','JPEG','png','PNG'])) {
			echo "You file extension must be .jpg, .jpeg, .png";
		} 
		else {
			move_uploaded_file($_FILES['resume']['tmp_name'],"uploads/".$_FILES['resume']['name']);
			$path = "uploads/".$_FILES['resume']['name'];		
			//$q="insert into jobs(j_title,j_owner_name,j_category,j_hours,j_salary,j_experience,j_discription,j_city,company_name,vacancy,grade,job_responsibilities,status,edu_requirements,experience,add_requirements,instruction,pub_date,deadline,company_info,logo,salary)
			  // values ('$title','".$_SESSION['unm']."','$cat','$hours','$salary','$experience','$disc','$city','{$cnam}','{$vac}','{$pos}','{$j_res}','{$status}','{$e_req}','{$ex}','{$a_req}','{$ins}','{$date}','{$dead}','{$c_inf}','{$path}','{$sal}')";
			   
			//mysqli_query($con,$q)or die("wrong query");
			//mysqli_close($con);
			//header("location:postjob.php");
			$q="insert into employers(er_fnm,er_pwd,er_company,er_add,er_ph,er_email,er_company_profile,com_logo)
			values ('$nm','$pwd','$cnm','$addr','$ph','$email','$profile','{$path}')";
			
			mysqli_query($con,$q)or die("wrong query");
			mysqli_close($con);
			header("location:login.php");
		}


		//////////////////company logo endded////////////////




		

	}
?>