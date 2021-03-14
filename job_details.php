<?php
		$con=mysqli_connect("localhost","root","","jobscope") or die("database failed");

?>


<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
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
	<title>JobBoard - HTML Template</title>
	
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
<body id="bg">



<div class="page-wraper">
<div id="loading-area"></div>
	<!-- header -->
	<?php 
	session_start();
	include "header.php";?>
    <!-- header END -->

	<?php 
		
	
			
		$q = "select * from jobs where j_id =".$_GET['id'];
		
		$res = mysqli_query($con,$q) or die("Wrong Query");
		
		$row = mysqli_fetch_assoc($res);
	?>
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Job Detail</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>Job Detail</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <!-- Job Detail -->
			<div class="section-full content-inner-1">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="sticky-top">
								<div class="row">
									<div class="col-lg-12 col-md-6">
										<div class="m-b30">
											<img src="<?php echo $row['logo'];?>" style="width:300px;height:300px;border-radius:5px;" alt="">
										</div>
									</div>
									<div class="col-lg-12 col-md-6">
										<div class="widget bg-white p-lr20 p-t20  widget_getintuch radius-sm">
											<h4 class="text-black font-weight-700 p-t10 m-b15">Job Details</h4>
											<ul>
												<li><i class="ti-location-pin"></i><strong class="font-weight-700 text-black">Location</strong><span class="text-black-light"><?php echo $row['j_city'];?></span></li>
												<li><i class="ti-money"></i><strong class="font-weight-700 text-black">Salary</strong> $<?php echo $row['salary'];?></li>
												<li><i class="ti-shield"></i><strong class="font-weight-700 text-black">Experience (years)</strong><?php echo $row['experience'];?></li>
											</ul>
										</div>
									</div>
								</div>
                            </div>
						</div>
						<div class="col-lg-8">
							<div class="job-info-box">
								<h3 class="m-t0 m-b10 font-weight-700 title-head">
									<a href="#" class="text-secondry m-r30"><?php echo $row['j_title'];?></a>
								</h3>
								<ul class="job-info">
									<li><strong>Position</strong><?php echo $row['status'];?></li>
									<li><strong>Deadline:</strong> <?php echo $row['deadline'];?></li>
									<li><i class="ti-location-pin text-black m-r5"></i> <?php echo $row['j_city'];?></li>
								</ul>
								<!--company info-->
								<p class="p-t20"><?php echo $row['company_info'];?></p>

								<h5 class="font-weight-600">Job Responsibilites</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<p><?php echo $row['job_responsibilities'];?></p>

								<h5 class="font-weight-600">Job Requirements</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<!--
								<ul class="list-num-count no-round">
									<li>The DexignLab Privacy Policy was updated on 25 June 2018.</li>
									<li>Who We Are and What This Policy Covers</li>
									<li>Remaining essentially unchanged It was popularised in the 1960s </li>
									<li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</li>
									<li>DexignLab standard dummy text ever since</li>
								</ul>
								-->
								<h5 class="font-weight-600">Educational Requirements</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<p><?php echo $row['edu_requirements'];?></p>

								<h5 class="font-weight-600">Additional Requirements</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<p><?php echo $row['add_requirements'];?></p>

								<h5 class="font-weight-600">How to Apply</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<p><?php echo $row['instruction'];?></p>

								<?php
	
										if(isset($_SESSION['status']) && $_SESSION['cat']=="employee")
										{
											 $jobid=$_GET['id'];
											 $applicant=$_SESSION['eeid'];
											$sqlu="SELECT * FROM applicants WHERE a_uid='{$applicant}' AND a_jid='{$jobid}'";
											$resultu=mysqli_query($con,$sqlu) or die("query failed");
											if(mysqli_num_rows($resultu)>0){
												//echo "already applied";
												echo '<center><a class=" btn btn-danger" style="color:#fff;"> Already applied</a> </center>';
											}
											else{
												//echo "not applied yet";
												echo'<tr><td colspan="2"><center><a class="site-button" href="process_apply.php?jid='.$row['j_id'].'"> Apply </center></td></tr></a>';
											}
										}

								?>

							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Job Detail -->
		</div>
    </div>
    <!-- Content END-->
	<!-- Footer -->
	<?php include "footer.php" ?>
    <!-- Footer END -->
    <button class="scroltop fa fa-chevron-up"></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="plugins/wow/wow.js"></script><!-- WOW JS -->
<script src="plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="plugins/rangeslider/rangeslider.js" ></script><!-- Rangeslider -->
<script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
<script src='js/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
<script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->
<script src="plugins/paroller/skrollr.min.js"></script><!-- PAROLLER -->
</body>


</html>
