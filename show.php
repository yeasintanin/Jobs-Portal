<?php session_start();

	if(! isset($_SESSION['status']))
	{
		header("location:index.php");
	}
		//$link=mysql_connect("localhost","jobscope","riddhi")or die("can not connect");
		//mysql_select_db("jobscope",$link) or die("can not select database");
		$con=mysqli_connect("localhost","root","","jobscope") or die("database failed");
		$q="select * from employees where ee_id in(select a_uid from applicants where a_jid=".$_GET['id']." )";
	
		$res=mysqli_query($con,$q) or die ("wrong query");
		
		
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Flowerily 
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20090906

-->

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/categories.css">
<?php
//include("includes/head.inc.php");
?>
</head>

<!--update-->
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
	<!--/update-->
</head>
<!--update-->
<body id="bg">
<div class="page-wraper">
<div id="loading-area"></div>
    <!-- header -->
	<?php include "header.php";?>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/show.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Applicant lists</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<!-- <li><a href="#">Home</a></li>
							<li>Employer Register</li> -->
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
      
<!--/update-->

<div id="header-wrapper">
	<div id="header">
	<div id="menu">
		<?php
		//include("includes/menu.inc.php");
		?>
		</div>
		<!-- end #menu -->
		<div id="search">
		<?php
		
		//include("includes/search.inc.php");
		?>
		</div>
		<!-- end #search -->
	</div>
</div>
<!-- end #header -->
<!-- end #header-wrapper -->
<div id="logo">
	<?php
	//include("includes/logo.inc.php");
	?>
	</div>
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<hr />
			<!-- end #logo -->
			<div id="content">
			<!--update-->
				<div class="post" style="margin-left: 70px; margin-right: 70px">
			<!--/update-->		
					<h2 class="title" style="margin-left: 38%"><?php echo $_GET['nm']; ?></h2>
					<p class="meta"></p>
					<div class="entry">
				
					<table border="0" width="100%">
				
				<tr>
						<!-- <td width="10%">No
						<td width="50%">Name
						<td width="30%">Resume -->
						<td width="10%" style="font-size: 22px"><b>No</b>
						<td width="50%" style="font-size: 22px"><b>Name</b>
						<td width="30%" style="font-size: 22px"><b>Resume</b>
						
					</tr>
				
					
				<?php
				$count=1;
					while($row=mysqli_fetch_array($res))
					{
						
						echo '<tr> <td width="10%">'.$count.'
								<td width="50%">'.$row['ee_fnm'].'
								<td width="30%"><a href="'.$row['ee_resume'].'"><button type="button" class="btn btn-success">Show</button></a>
								';
							$count++;
					}
				?>
				<!-- <td width="30%"><a href="'.$row['ee_resume'].'">resume</a> -->
					</table>
						
					</div>
				</div>
				
			</div>
			<!-- end #content -->
			<div id="sidebar">
			<?php
		//include("includes/sidebar.inc.php");
		?>	
			</div>
			<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>
<!-- end #page -->
<div id="footer-bgcontent">
	<div id="footer">
		<?php
		//include("includes/footer.inc.php");
		?>	
	</div>
</div>
<!-- end #footer -->


<!-- Footer -->
<!--update-->
<?php include "footer.php" ?>
    <!-- Footer END -->
    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up" ></button>
</div>
<!--/update-->

<!--update-->
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

<!--/update-->
</body>
</html>
