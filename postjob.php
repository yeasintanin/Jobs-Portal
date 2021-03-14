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

	<style>
		label {
			display: block;
			font: 1rem 'Fira Sans', sans-serif;
		}

		input,
		label {
			margin: .4rem 0;
		}
		</style>

</head>
<body id="bg">
		<?php 
			include "sessioncheck.php";
			include "employeraccess.php";
		?>
<div class="page-wraper">
<div id="loading-area"></div>
    <!-- header -->
	<?php include "header.php";?>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/postjob.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">POST A JOB</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>Post a job</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner shop-account">
            <!-- Product -->
            <div class="container">
                <div class="row">
					<div class="col-md-12 text-center">
						<h3 class="font-weight-700 m-t0 m-b20">Create An Account</h3>
					</div>
				</div>
                <div class="row">
					<div class="col-md-12 m-b30">
						<div class="p-a30 border-1  max-w500 m-auto">
							<div class="tab-content">
								<form id="login" class="tab-pane active" action="process_postjob.php" method="post" enctype="multipart/form-data">
									<h4 class="font-weight-700">JOB DETAILS</h4>
									<div class="form-group">
										<label class="font-weight-700"> TITLE</label>
										<input name="title"  class="form-control" placeholder="Job title" type="text">
									</div>
									<div class="form-group">
										<label class="font-weight-700">COMPANY NAME</label>
										<input name="company_name"  class="form-control" placeholder="Company name" type="text">
									</div>
									<div class="form-group">
										<label class="font-weight-700">JOB CATEGORIES</label>
										<SELECT name="cat" style="width:200px;">
											<?php

												//$link=mysql_connect("localhost","jobscope","riddhi") or die("cant connect");
									
												//mysql_select_db("jobscope",$link) or die("cant select db");
												$con=mysqli_connect("localhost","root","","jobscope") or die("database failed");
												$q="select * from categories";
							
												$res=mysqli_query($con,$q) or die('wrong query');
							
												while($row=mysqli_fetch_assoc($res))
												{
													echo "<option>".$row['cat_nm'];
												}
											?>
										</SELECT>
									</div>
									<div class="form-group">
										<label class="font-weight-700">VACANCY</label>
										<input name="vacancy"  class="form-control" placeholder="vacancy" type="text">
									</div>
									<div class="form-group">
										<label class="font-weight-700">GRADE/POSITION</label>
										<input name="position"  class="form-control" placeholder="Grade/Position" type="text">
									</div>
									<div class="form-group">
										<label class="font-weight-700">JOB RESPONSIBILITIES</label>
										<TEXTAREA name="job_responsibilities" class="form-control" style="width:200px; border:1px solid grey" ></TEXTAREA>
									</div>
									<div class="form-group">
										<label class="font-weight-700">EMPLOYMENT STATUS</label>
										<input name="status"  class="form-control" placeholder="part-time/full-time/contract" type="text">
									</div>
									<div class="form-group">
										<label class="font-weight-700">EDUCATIONAL REQUIREMENTS</label>
										<input name="edu_req"  class="form-control" placeholder="Educational requirements" type="text">
									</div>
									<div class="form-group">
										<label class="font-weight-700">EXPERIENCE</label>
										<input name="experience"  class="form-control" placeholder="Experience" type="text">
									</div>
									<div class="form-group">
										<label class="font-weight-700">SALARY</label>
										<input name="salary"  class="form-control" placeholder="SALARY" type="text">
									</div>
									<div class="form-group">
										<label class="font-weight-700">ADDITIONAL REQUIREMENTS</label>
										<input name="add_req"  class="form-control" placeholder="Additional requirements" type="text">
									</div>
									<div class="form-group">
										<label class="font-weight-700">JOB LOCATION</label>
										<input name="city"  class="form-control" placeholder="job location" type="text">
									</div>
									<!--<div class="form-group">
										<label class="font-weight-700">Published date</label>
										<input name="pub_date"  class="form-control" placeholder="Published date" type="text">
									</div>-->
									<div class="form-group">
										<label class="font-weight-700">APPLICATION DEADLINE</label>
										<!--<input name="deadline"  class="form-control" placeholder="YY-MM-DD" type="text">-->
										<input type="date" id="start" name="deadline" 
												min="2020-12-23" max="2021-12-31">
									</div>
									<div class="form-group">
										<label class="font-weight-700">COMPANY INFORMATION</label>
										<TEXTAREA name="com_info" class="form-control" style="width:200px; border:1px solid grey" ></TEXTAREA>
									</div>
									<div class="form-group">
										<label class="font-weight-700">INSTRUCTION TO APPLICANTS</label>
										<TEXTAREA name="instruction" class="form-control" style="width:200px; border:1px solid grey" ></TEXTAREA>
									</div>
									<div class="form-group">
										<label class="font-weight-700">UPLOAD COMPANY LOGO *</label>
										<input type="file" name="resume" style="width:200px;">
									</div>
									<div class="text-left">
										<input type="submit" value="submit" class="site-button button-lg outline outline-2">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Product END -->
		</div>
		<!-- contact area  END -->
    </div>
    <!-- Content END-->
    <!-- Footer -->
	<?php include "footer.php" ?>
    <!-- Footer END -->
    <button class="scroltop fa fa-chevron-up" ></button>
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
<script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->
 

</body>


</html>
