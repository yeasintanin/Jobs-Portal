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
	<title>Skillhutch Job</title>
	
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
<?php 			
      include "sessioncheck.php";
      include "employeraccess.php";
?>
		<?php 
			 $_SESSION['cat'];
			if($_SESSION['cat']='employer'){
			}
			else{
				header('location:login.php');
			}
		;?>
<div class="page-wraper">
<div id="loading-area"></div>
    <!-- header -->
	<?php include "header.php";?>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/hotjob.png);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">POST A HOT JOBS</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>Post a Hot Jobs</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
<br><br>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <form method="POST" action="" style="margin-left: 17%; margin-right: 17%">
     <h4>Choose your offer package for posting the hot jobs</h4><br>
     Days:
      <select name="pack-days">
          <option value="7">7</option>
          <option value="15">15</option>
          <option value="30">30</option>
      </select><br><br>
      <label>Job title </label>
      <input type="text" name="title" placeholder="type your job title here"><br><br>
      <div class="form-group"> 
        <h1>Write your job circular</h1>
        <script src="https://cdn.tiny.cloud/1/tiwwexx95p8jk38wqyantypmzurkd7prafgdo8pnqao58zve/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <textarea type="text" class="form-control" id="description" name="jtext"></textarea>
        <script>
          tinymce.init
          ({
            selector: 'textarea',
            height: 350,
            width: 900,
            plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
          });
        </script>
      </div>
      <div>
      <input type="submit" name="submit" value="Submit" class="btn btn-primary">
      </div>
    </form>

    <?php
    if(isset($_POST['submit']))
    {

    $jtext = $_POST['jtext'];
    $offer=$_POST['pack-days'];
    $job_title=$_POST['title'];
    
    $con=mysqli_connect("localhost","root","","jobscope") or die("database failed");
    $date=date("Y-m-d");
    $employer=$_SESSION['unm'];
    $com=$_SESSION['company'];
    $q="INSERT INTO hotjobs(circular, pub_date, er_name, com_name, j_active, package, j_title) VALUES ('$jtext','{$date}','{$employer}','{$com}','0','{$offer}','{$job_title}');";
    $res=mysqli_query($con,$q) or die ("wrong query");
    if($res)
    {
      header('loction:postjob.php');
    }
    else
    {
      echo 'Not saved';
    }
    }
    ?>                            

<!-- Footer -->
<?php include "footer.php" ?>
    <!-- Footer END -->
    <button class="scroltop fa fa-chevron-up" ></button>
</div>


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