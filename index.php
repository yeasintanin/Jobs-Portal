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
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

	<!--my jquery-->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


	<style>
		html{
			scroll-behavior:smooth;
		}
		.hot{
		
			height:27vh;
			overflow:hidden;
			/* z-index:1; */
			background-color:#C7DFFC;
			transform:0.3s ease-in-out;
			padding-top:1rem;
			padding-left:1rem;
			padding-right:1rem;
			padding-bottom:1.5rem;
			border-radius:5px;
			border:2px solid white;
			font-size:1rem;
			
		}
		.hot:hover {			
			font-size:1rem;
			/*
		 overflow:visible;
		 z-index:999;
		
		 height:auto;
		box-shadow:0 1px 3px rgba(0,0,0,.35);
		 border-radius:4px;
		 transition:top .2s ease-in-out, box-shadow .2s ease-in-out;
		 --webkit-transition:top .2s ease-in-out, box-shadow .2s ease-in-out
		 */
		}
		/*
		.hot:hover .more-hot-jobs{
			
			left:85%;
			top:73%;
			display:block;
		}
	

		.more-hot-jobs{
			position:absolute;
			top:0;
			left:-100%;
			transition:all 0.3s ease-in-out;
			
		}
	*/

	.more-hot-jobs{
			position:absolute;
			left:85%;
			top:73%;
			
		}

		li{
			cursor:pointer;
			font-size:1rem;
		}
		ul{
			margin-left:15%;
			margin-right:2%;
		}
		.view-more{
			position:absolute;
			top:0;
			left:-100%;
			transition:all 0.3s ease-in-out;
		}

	</style>
</head>
<body id="bg">

		<?php
			$con=mysqli_connect("localhost","root","","jobscope") or die("database failed");
		?>

<div id="loading-area"></div>
<div class="page-wraper">
			<!-- header -->
		<?php 
		session_start();
		include "header.php";?>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
		<!-- Search jobs-->
		<div class="dez-bnr-inr dez-bnr-inr-md" style="background-image:url(images/main-slider/slide2.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry align-m ">
					<div class="find-job-bx">
						<p class="site-button button-sm">Find Jobs, Employment & Career Opportunities</p>
						<h2>Search Between More Them <br/> <span class="text-primary">50,000</span> Open Jobs.</h2>
						<form class="dezPlaceAni" method="POST" action="process_search.php">
							<div class="row" style="display:flex;flex-direction:row;align-items:center;justify-content:space-between">
								<div class="col-lg-4 col-md-6">
									<div class="form-group">
										
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Job Title" name="job-name" required>
											<div class="input-group-append">
											  <span class="input-group-text"><i class="fa fa-search"></i></span>
											</div>
										</div>
									</div>
								</div>
								<?php
									$sql6="SELECT * FROM categories";
									$result6=mysqli_query($con,$sql6) or die("query failed");
									if(mysqli_num_rows($result6)>0){
								?>
								<div class="col-lg-3 col-md-6">
									<div class="form-group">
										<select name="catselect">
											<option>Select a category</option>
											<?php
												while($data6=mysqli_fetch_assoc($result6)){
											?>
											<option><?php echo $data6['cat_nm']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<?php
									}
								?>
								<div class="col-lg-2 col-md-6">
									<button type="submit" class="site-button btn-block" name="findjob">Find Job</button>
								</div>
							</div>
						</form>
					</div>
				</div>
            </div>
        </div>
		<!-- Section Banner END -->
		<!--search box php code-->
		<?php
			//if(isset($_POST['findjob'])){
			
			//}
		?>

        <!-- About Us -->
		<div class="section-full job-categories content-inner-2 bg-white" id="category" style="background-image:url(../images/pattern/pic1.html);">
			<div class="container">
				<div class="section-head d-flex head-counter clearfix">

					<?php
						//count the number of jobs
						$sql="SELECT COUNT(j_id) AS jobscount FROM jobs WHERE j_active='1'";
						$result3=mysqli_query($con,$sql) or die("query failed");
						$data3=mysqli_fetch_assoc($result3);

						//count the number of categories
						$sql4="SELECT COUNT(cat_nm) AS catcount FROM categories";
						$result4=mysqli_query($con,$sql4) or die("query failed");
						$data4=mysqli_fetch_assoc($result4);

						//count the number of companys from employer table
						/*
						$sql5="SELECT company_name FROM jobs GROUP BY company_name";
						$result5=mysqli_query($con,$sql5) or die("query failed");
						$count=0;
						while(mysqli_fetch_assoc($result5)){
							$count+=1;
						};*/
						$sqlcom="SELECT COUNT(er_fnm) AS ercount FROM employers";
						$resultcom=mysqli_query($con,$sqlcom) or die("query failed");
						$datacom=mysqli_fetch_assoc($resultcom); 
					?>
					<div class="mr-auto">
						<h2 class="m-b5">Popular Categories</h2>
						<h6 class="fw3"><span style="color:crimson;text-transform:uppercase;font-size:1.5rem;font-weight:bold;margin-right:0.5rem"><?php echo $data4['catcount'];?>+ </span>Catetories work wating for you</h6>
					</div>

					<div class="head-counter-bx">
						<h2 class="m-b5 counter"><?php echo $data3['jobscount'];?></h2>
						<h6 class="fw3">Jobs Posted</h6>
					</div>
					<div class="head-counter-bx">
						<h2 class="m-b5 counter"><?php echo $data4['catcount'];?></h2>
						<h6 class="fw3">Categories</h6>
					</div>
					<div class="head-counter-bx">
						<h2 class="m-b5 counter"><?php echo $datacom['ercount'];?></h2>
						<h6 class="fw3">Companies</h6>
					</div>
				</div>

				<div class="row sp20">
					<?php
						//$link=mysql_connect("localhost","jobscope","riddhi")or die("can not connect");
						//mysql_select_db ("jobscope",$link) or die("can not select database");
						   //$con taking at the top
						//$con=mysqli_connect("localhost","root","","jobscope") or die("database failed");
						$q="select * from categories";
						$res=mysqli_query($con,$q) or die("worng query");
						while($row=mysqli_fetch_assoc($res)){
									//echo '<li><a href="jobs_by_category.php?cat='.$row['cat_nm'].'">'.$row['cat_nm'].'</a></li>';
					?>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="icon-bx-wraper">
							<div class="icon-content">
								<div class="icon-md text-primary m-b20"><i class="ti-location-pin"></i></div>
								<a href="jobs_by_category.php?cat=<?php echo $row['cat_nm']?>" class="dez-tilte"><?php echo $row['cat_nm'];?></a>
								
								<?php
									//count the number of categories
									$cate_name=$row['cat_nm'];
									$sqlcat="SELECT COUNT(j_category) AS catjobscount FROM jobs WHERE j_category='{$cate_name}' AND j_active='1'";
									$resultcat=mysqli_query($con,$sqlcat) or die("query failed");
									$datacat=mysqli_fetch_assoc($resultcat);
								?>
								<p class="m-a0"><?php echo $datacat['catjobscount']?></p>
								<div class="rotate-icon"><i class="ti-location-pin"></i></div> 
							</div>
						</div>				
					</div>

					<?php
							}
						mysqli_close($con);		
					?>
				</div>
			</div>
		</div>

		<!-- About Us END -->
		
		<!--modal for hot jobs-->

<!-- Button trigger modal -->

<!--button trigger is placed at the card-->

		<!--end for hot jobs-->

		<!-- Call To Action -->
		<!-- Call To Action -->
		<div class="section-full content-inner bg-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 section-head text-center">
						<h2 class="m-b5">Hot jobs</h2>
					</div>
				</div>
				<div class="row ">
				<?php
						$con=mysqli_connect("localhost","root","","jobscope") or die("could not connect to db");
						$sql="SELECT * FROM employers";
						$result=mysqli_query($con,$sql) or die("query failed");
						while($data=mysqli_fetch_assoc($result)){
							$employer=$data['er_fnm'];
							$query="select * from hotjobs where er_name='$employer'";
							$execute=mysqli_query($con, $query);
							$count = mysqli_num_rows($execute);
							if($count!=0)
							{
					?>	
							<div class="col-3 mx-auto hot" style="" >
								
								<div class="" style="display:flex;flex-drection:row;align-items:center; justify-content: space-between;">
									<div class="left" style="width:30%;height:100px;">
										<img src="<?php echo $data['com_logo']?>" style="border-radius:5px;" >
									</div>
									<div class="right" style="width:70%;">
										
										<ul style="">
										<?php
											
											$sqlc="SELECT * FROM hotjobs WHERE er_name='{$employer}'";
											$search=mysqli_query($con,$sqlc) or die("query failed");
											$output=mysqli_fetch_assoc($search);

										?>
										<h5 class="" style="text-transform:uppercase"><?php echo $output['com_name'];?></h5>
										<?php
											$duplicate=$data['er_fnm'];
											$sql2="SELECT * FROM hotjobs WHERE j_active='1' AND er_name='{$duplicate}'";
											$result2=mysqli_query($con,$sql2) or die("query failed");
											$count=0;
											while($data2=mysqli_fetch_assoc($result2)){

											//deadline things for hot jobs
											$date = new DateTime($data2['pub_date']);
											$now = new DateTime();
		
											$dates = $date->diff($now);//->format("%d days, %h hours and %i minuts");
										    $check=$dates->days;
								
											//get package date from hotjobs
											 $deadline=$output['package'];
											if($check<=$deadline){ 
												//jobs count to display view more button
												
										?>
										<li class="hot-list"><a target="_blank" href="tinyshow.php?id=<?php echo $data2['id'];?>"><?php echo $data2['j_title'];$count+=1;?></a></li>
									
										<?php 
											
											}
											
											} 

											//echo "<input type='text' name='count' value='{$count}' class='count'>";
											//echo "<input type='submit' class='clickme'>";
										?>
										<!--modal-->
										<?php 
											if($count>2){
										?>
												<a href="#edit<?php echo $data['er_fnm']; ?>" data-toggle="modal" class="btn btn-warning more-hot-jobs"><span class="glyphicon glyphicon-edit"></span> <i class="fas fa-angle-double-right"></i></a>
										<?php
											}
										?>
										
										<?php include('button.php'); ?>
										<?php include('add_modal.php'); ?>


										</ul>
										
									</div>
								</div>
							</div>
					<?php
							}
						}
					?>


				</div>
			</div>
		</div>

		<!-- Call To Action END -->

		<!-- Call To Action END -->
		<!-- Our Job -->
		<div class="section-full bg-white content-inner-2" id="recent">
			<div class="container">
				<div class="d-flex job-title-bx section-head">
					<div class="mr-auto">
						<h2 class="">Recent Jobs</h2>
					</div>
				</div>
				<?php 


	//$link=mysql_connect("localhost","jobscope","riddhi") or die("cant connect");
	//mysql_select_db("jobscope",$link) or die("cant select db");
	$con=mysqli_connect("localhost","root","","jobscope") or die("database failed");
		
	$q = "SELECT * FROM jobs WHERE j_active='1' ORDER BY j_id DESC LIMIT 20;";
	
	$res = mysqli_query($con,$q) or die("Wrong Query");
	

	
?>			
					<!--<h2 class="title"><?php echo $_GET['cat']; ?></h2>	-->	


    <!-- Content -->
    <div class="page-content">

		<!-- Our Job -->
		<div class="section-full bg-white content-inner-2">
			<div class="container">
				<div class="d-flex job-title-bx section-head">
				</div>
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
							?>

							<li>
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
						?>

						</ul>
						<div class="m-t30">

						</div>
					</div>
					<div class="col-lg-3">
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
				</div>
			</div>
		</div>
		<!-- Our Job END -->	
		<!-- Call To Action -->
		<div class="section-full p-tb70 overlay-black-dark text-white text-center bg-img-fix" style="background-image: url(images/background/bg4.jpg);">
			<div class="container">
				<div class="section-head text-center text-white">
					<h2 class="m-b5">Testimonials</h2>
					<h5 class="fw4">Few words from candidates</h5>
				</div>
				<div class="blog-carousel-center owl-carousel owl-none">
					<div class="item">
						<div class="testimonial-5">
							<div class="testimonial-text">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry...</p>
							</div>
							<div class="testimonial-detail clearfix">
								<div class="testimonial-pic radius shadow">
									<img src="images/testimonials/pic1.jpg" width="100" height="100" alt="">
								</div>
								<strong class="testimonial-name">David Matin</strong> 
								<span class="testimonial-position">Student</span> 
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-5">
							<div class="testimonial-text">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry...</p>
							</div>
							<div class="testimonial-detail clearfix">
								<div class="testimonial-pic radius shadow">
									<img src="images/testimonials/pic2.jpg" width="100" height="100" alt="">
								</div>
								<strong class="testimonial-name">David Matin</strong> 
								<span class="testimonial-position">Student</span> 
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-5">
							<div class="testimonial-text">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry...</p>
							</div>
							<div class="testimonial-detail clearfix">
								<div class="testimonial-pic radius shadow">
									<img src="images/testimonials/pic3.jpg" width="100" height="100" alt="">
								</div>
								<strong class="testimonial-name">David Matin</strong> 
								<span class="testimonial-position">Student</span> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Call To Action END -->
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


<script>
$(document).ready(function(){
	
	var jobcount=$('.count').val();
		if(jobcount===0){
		alert("00000");
	}

})

 </script>

</body>

</html>