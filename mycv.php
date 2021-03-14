<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

     <title>One Page Resume</title>

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

     <style type="text/css">
        * { margin: 0; padding: 0; }
        body { font: 16px Helvetica, Sans-Serif; line-height: 24px; background: url(images/noise.jpg); }
        .clear { clear: both; }
        #page-wrap { width: 800px; margin: 40px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: auto; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }

        input{
            width:50%;
            height:6vh;
            margin-left:7%;
        }
     </style>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>
<?php 
        session_start();
       $appid=$_SESSION['eeid'];
        include "conn.php";
        $sql="SELECT * FROM employees WHERE ee_id='{$appid}'";
        $result=mysqli_query($conn,$sql) or die("query failed");
        $data=mysqli_fetch_assoc($result);
    ?>
        <div class="dez-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/cv.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">MY RESUME</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>My Resume</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
    
    <div id="page-wrap">
    
        <div id="contact-info" class="vcard">
        
            <!-- Microformats! -->
        
            <h1 class="fn" style="color:red"><?php echo $data['ee_fnm'];?></h1>
        </div>

        
        <div class="clear"></div>
        
        <dl>
            <dd class="clear"></dd>
            
            <dt>Phone no</dt>
            <dd>
                <h5><?php echo $data['ee_phno'];?></h5>
            </dd>
            <dd class="clear"></dd>
            
            <dt>Mobile no</dt>
            <dd>
                <h5><?php echo $data['ee_mobileno'];?></h5>
            </dd>
            <dd class="clear"></dd>
            
            <dt>Email</dt>
            <dd>
                <h5><?php echo $data['ee_email'];?></h5>
            </dd>

            <dd class="clear"></dd>
            
            <dt>Address</dt>
            <dd>
                <h5><?php echo $data['ee_add'];?></h5>
                <!--<p><strong>Major:</strong> Public Relations<br />
                   <strong>Minor:</strong> Scale Tending</p>-->
            </dd>
            <dd class="clear"></dd>
            
            <dt>Current location</dt>
            <dd>
                <h5><?php echo $data['ee_current_location'];?></h5>
                <!--<p><strong>Major:</strong> Public Relations<br />
                   <strong>Minor:</strong> Scale Tending</p>-->
            </dd>
            <dd class="clear"></dd>
            
            <dt>Educationa qualification</dt>
            <dd>
                <h5><?php echo $data['ee_qualification'];?></h5>
            </dd>
            <dd class="clear"></dd>
            
            <dt>Gender</dt>
            <dd>
                <h5><?php echo $data['ee_gender'];?></h5>
            </dd>
            <dd class="clear"></dd>
            
            <dt>Expected annual salary</dt>
            <dd>
                <h5><?php echo $data['ee_annualsalary'];?></h5>
            </dd>
            <dd class="clear"></dd>
            
            <dt>Current industry</dt>
            <dd>
                <h5><?php echo $data['ee_current_industry'];?></h5>
            </dd>
            <dd class="clear"></dd>
            
            <dt>profile</dt>
            <dd>
                <h5><?php echo $data['ee_profile'];?></h5>
            </dd>
        
        </dl>
        
        <div class="clear"></div>
    
    </div>


    <!--modal things--->
    <!-- Button trigger modal -->
<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Edit Info
</button><center>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="mycvupdate.php" enctype="multipart/form-data">
            
            Phone No: <input type="text" name='phno' id='phno' placeholder='phone no' value='<?php echo $data['ee_phno'];?>'><br><br>
            Mobile No: <input type="text" name='mblno' id='mblno' placeholder='Mobile no' value='<?php echo $data['ee_mobileno'];?>'><br><br>
            Email: <input type="text" name='email' id='email' placeholder='Email' value='<?php echo $data['ee_email'];?>'><br><br>
            Address: <input type="text" name='addr' id='addr' placeholder='Address' value='<?php echo $data['ee_add'];?>'><br><br>
            Current loation: <input type="text" name='crlc' id='crlc' placeholder='Current location' value='<?php echo $data['ee_current_location'];?>'><br><br>
            Educational qualification:   <input type="text" name='ed_qua' id='ed_qua' placeholder='Educational qalification' value='<?php echo $data['ee_qualification'];?>'><br><br>
            Gender:  <input type="text" name='gender' id='gender' placeholder='Gender' value='<?php echo $data['ee_gender'];?>'><br><br>
            Expected salary: <input type="text" name='sal' id='sal' placeholder='expected salary' value='<?php echo $data['ee_annualsalary'];?>'><br><br>
            Current industry: <input type="text" name='cr_ind' id='cr_ind' placeholder='Current industry' value='<?php echo $data['ee_current_industry'];?>'><br><br>
            Profile: <input type="text" name='profile' id='pro' placeholder='Details profile' value='<?php echo $data['ee_profile'];?>'><br><br>
            <div class="form-group">
										<label class="font-weight-700">Upload updated CV *</label>
										<input type="file" name="resume" style="width:200px;">
									</div>
            <input type="submit" name="submit" value="Save"class="btn btn-success" style="font-size:20px">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <!-- <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

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
<script src="js/recaptcha/api.js"></script> <!-- Google API For Recaptcha  -->
<script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->
<script src="plugins/paroller/skrollr.min.js"></script><!-- PAROLLER -->
<!-- Go to www.addthis.com/dashboard to customize your tools --> 


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>