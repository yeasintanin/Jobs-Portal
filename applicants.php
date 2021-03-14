<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
		<meta name="description" content="JobBoard - HTML Template" />
	<meta property="og:title" content="JobBoard - HTML Template" />
	<meta property="og:description" content="JobBoard - HTML Template" />
	<meta property="og:image" content="JobBoard - HTML Template" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>SKILLHUTCH jobs</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/templete.css">
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
	<link rel="stylesheet" href="plugins/datepicker/css/bootstrap-datetimepicker.min.css"/>
	<!-- Revolution Slider Css -->
	<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">
	<!-- Revolution Navigation Style -->

</head>
<body>
<div class="dez-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/applicants.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">APPLICANTS</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>Applicants</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>

    <div class="container">
        <h2 class="title"><center><font color ="red" ><b>Applicants</b></center></font></h2>           
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Category</th>
                    <th>Job Title</th>
                    <th>Company Name</th>
                </tr>
            </thead>
            <?php
                session_start();
                $appid=$_SESSION['eeid'];
                $con=mysqli_connect("localhost","root","","jobscope") or die("Can not connect to database");
                $q="SELECT * FROM applicants WHERE a_uid='{$appid}'";
                $res=mysqli_query($con,$q) or die("query failed");
                if(mysqli_num_rows($res)>0)
                {
                    $count=1;
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $jobid=$row['a_jid'];
                        //echo "<br>";
                        $q2="SELECT * FROM jobs WHERE j_id='{$jobid}'";
                        $res2=mysqli_query($con,$q2) or die("query failed");
                       
                        if(mysqli_num_rows($res2)>0)
                        { 
                            
                            while($row2=mysqli_fetch_assoc($res2))
                            {
                                //echo'<tr><td>'.$count.'</td>';
            ?>
            <tbody>
                    <td><?php echo $count?></td>
                    <td><?php echo $row2['j_title']?></td>
                    <td><?php echo $row2['j_category']?></td>
                    <td><?php echo $row2['company_name']?></td>
                </tr>
            </tbody>
            <?php
                                    //echo $row2['j_title'];
                                    $count++;
                                }
                        }
                    }
                }
            ?>
        </table>
        
    </div>
    <?php include "footer.php" ?>
	<!-- Footer END -->
	<button class="scroltop fa fa-chevron-up" ></button>
</div>
</body>
</html>