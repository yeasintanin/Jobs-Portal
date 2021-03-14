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
	<style>
		.hot{
			
			height:20vh;
			overflow:hidden;
			transform:all 0.3s ease-in-out;
			background-color:#C7DFFC;
			margin:0.5rem;
			padding:1rem 0.5rem;
			border-radius:5px;
		}
		.hot:hover{
		 overflow:visible;
		 height:30vh;
		 z-index:999;  
		}

		li{
			cursor:pointer;
			font-size:1rem;
		}
		ul{
			margin-left:15%;
		}

	</style>

</head>
<body id="bg">					
	<div class="row ">
		<?php
			$con=mysqli_connect("localhost","root","","jobscope") or die("could not connect to db");
			$sql="SELECT * FROM jobs GROUP BY j_owner_name";
			$result=mysqli_query($con,$sql) or die("query failed");
			while($data=mysqli_fetch_assoc($result)){
		?>
				<div class="col-3 hot" style="" >
					
					<div class="" style="display:flex;flex-drection:row;align-items:center; justify-content: space-between;">
						<div class="left" style="width:30%;height:100px;">
							<img src="<?php echo $data['logo']?>" style="border-radius:5px;" >
						</div>
						<div class="right" style="width:70%;">
							
							<ul style="">
							<h5 class="" style="text-transform:uppercase"><?php echo $data['j_owner_name'];?></h5>
							<?php
								$duplicate=$data['j_owner_name'];
								$sql2="SELECT * FROM jobs WHERE j_owner_name='{$duplicate}'";
								$result2=mysqli_query($con,$sql2) or die("query failed");
								while($data2=mysqli_fetch_assoc($result2)){
							?>
							<li class="hot-list"><a href="job_details.php?id=<?php echo $data2['j_id'];?>"><?php echo $data2['j_title'];?></a></li>
							
							<?php 
								} 
							?>
							</ul>
						</div>
					</div>
				</div>
		<?php
			}
		?>


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
<script type="text/javascript">

			$("#exp-slider-range").slider({
				range: true,
				min: 0,
				max: 10,
				//values: [0, 10],
				slide: function(event, ui) {
					var min = ui.values[0],
						max = ui.values[1];
					  $('#' + this.id).prev().val( min + " year - " + max + " year");
				}
			});
			
			$("#salary-slider-range").slider({
				range: true,
				min: 10,
				max: 100,
				//values: [10, 1000],
				slide: function(event, ui) {
					var min = ui.values[0],
						max = ui.values[1];
					  $('#' + this.id).prev().val(min + "K - " + max + "K");
				}
			});
		
</script>
</body>
</html>