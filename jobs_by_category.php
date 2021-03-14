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
<div id="loading-area"></div>
<div class="page-wraper">
	<!-- header -->
	<?php 
		session_start();
	include "header.php";?>
    <!-- header END -->
	<?php 


	//$link=mysql_connect("localhost","jobscope","riddhi") or die("cant connect");
	//mysql_select_db("jobscope",$link) or die("cant select db");
	$con=mysqli_connect("localhost","root","","jobscope") or die("database failed");
		
	$q = "select * from jobs where j_category ='".$_GET['cat']."' and j_active=1";
	
	$res = mysqli_query($con,$q) or die("Wrong Query");
	

	
?>			
					<center><h2 class="title" style="margin-top:2rem;color:crimson;text-transform:uppercase;"><?php echo $_GET['cat']; ?></h2></center>	


    <!-- Content -->
    <div class="page-content" style="display:flex;fles-direction:row;">

		<!-- Our Job -->
		<div class="section-full bg-white content-inner-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<ul class="post-job-bx">
							<?php
								while($row = mysqli_fetch_assoc($res))
								{
								
									/*echo '
												<li>
												<a href="job_details.php?id='.$row['j_id'].'">'.$row['j_title'].'</a>
										';
									*/
									 $row['pub_date'];
									 "<br>";
									 $row['deadline'];
									 "<br>";
									$db_date1=$row['pub_date'];
									$db_date2=$row['deadline'];
									$date1=date_create('$db_date2');
									$date2=date_create('$db_date1');
									
									//$date->diff($date1,$date2);
									//print_r ($date);
									
									$date = new DateTime($row['deadline']);
									$now = new DateTime();

									$dates = $date->diff($now);//->format("%d days, %h hours and %i minuts");
									$check=$dates->days;
									
									if($check>0){

									?>
										<li>
										<!--check the deadline of the jobs-->
	
	
									<a href="job_details.php?id=<?php echo $row['j_id'];?>">
										<div class="d-flex m-b30">
											<div class="job-post-company">
												<span><img src="images/logo/icon1.png"/></span>
											</div>
											<div class="job-post-info" style="width:80%;">
											<?php
											//	echo '<a href="job_details.php?id='.$row['j_id'].'">'.$row['j_title'].'</a>';
											?>
												<h3><?php echo $row['j_title'];?></h3>
												<h6 style="color:green;"><?php echo $row['company_name'];?></h6>
												<ul>
													<li><i class="fa fa-map-marker"></i> <?php echo $row['j_city'];?></li>
													<li><i class="fa fa-bookmark-o"></i> <?php echo $row['status'];?></li>
													<li><i class="fa fa-clock-o"></i> <?php echo $row['pub_date'];?></li>
												</ul>		
											</div>
											<img src="<?php echo $row['logo'];?>" style="max-width:13%;float:right;border-radius:5px" />
										</div>
										<div class="d-flex">
											<div class="job-time mr-auto">
												<span>Full Time</span>
											</div>
											<div class="salary-bx job-time">
												<span><?php echo $row['salary'];?>/-</span>
											</div>
										</div>	
									</a>
								</li>
								<?php
									}
									else{
										$index=$row['j_id'];
										$con=mysqli_connect("localhost","root","","jobscope") or die("could not connect to db");
										$sql="UPDATE jobs SET j_active='0' WHERE j_id='{$index}'";
										$result=mysqli_query($con,$sql) or die("query failed");

									}
								?>


						<?php
							}
						?>

						</ul>
					</div>
	
				</div>
			</div>
		</div>
		<!-- Our Job END -->	
		
		<!--right side design to cover page or good looking-->
		<div class="col-lg-3 right-side">
						<div class="sticky-top">
							<div class="candidates-are-sys m-b30">
								<div class="candidates-bx">
									<div class="testimonial-pic radius"><img src="images/testimonials/pic3.jpg" alt="" width="100" height="100"></div>
									<div class="testimonial-text">
										<p>I just got a job that I applied for via careerfy! I used the site all the time during my job hunt.</p>
									</div>
									<div class="testimonial-detail"> <strong class="testimonial-name">Richard Anderson</strong> <span class="testimonial-position">Nevada, USA</span> </div>
								</div>
							</div>
							<div class="quote-bx">
								<div class="quote-info">
									<h4>Make a Difference with Your Online Resume!</h4>
									<p>Your resume in minutes with JobBoard resume assistant is ready!</p>
									<a href="#" class="site-button">Create an Account</a>
								</div>
							</div>
						</div>
		 </div>


		<!-- Call To Action -->
		
	</div>
	<!-- Footer -->
	<?php include "footer.php" ?>
    <!-- Footer END -->
    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up" ></button>
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
<!-- Go to www.addthis.com/dashboard to customize your tools --> 

</body>


</html>