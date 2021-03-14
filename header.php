	<!-- header -->
	<?php 
		//session_start();
		?>
    <header class="site-header mo-left header fullwidth">
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="index.php"><img src="images/shlogo.png" class="logo" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                    <div class="extra-nav">

						<?php 
							//session_start();
							if(isset($_SESSION['unm'])){
								$categoey=$_SESSION['cat'];
								if($categoey=='employee'){
						?>
								<div class="extra-cell">
									<div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
										<ul class="nav navbar-nav">
											<li>
												<a  class="btn btn-primary" style="color:white;"><i class="fa fa-user"></i> <?php echo $_SESSION['unm']?><i class="fa fa-chevron-down"></i></a>										
												<ul class="sub-menu">
													<li><a href="mycv.php" class="dez-page">Profile</a></li>
													<li><a href="mycv.php" class="dez-page">Edit Profile</a></li>
													<li><a href="applicants.php" class="dez-page">Applied job lists</a></li>
													<center><a href="process_logout.php" class="btn btn-danger"><i class="fa fa-lock"></i> logout</a></center>
												</ul>
											</li>
										</ul>
									</div>	
								</div>
						<?php
								}
								else if($categoey=='employer'){
						?>
								<div class="extra-cell">

									<div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
											<ul class="nav navbar-nav">
												<li>
													<a  class="btn btn-primary" style="color:white;"><i class="fa fa-user"></i> <?php echo $_SESSION['unm']?><i class="fa fa-chevron-down"></i></a>										
													<ul class="sub-menu">
														<!--<li><a href="employerregister.php" class="dez-page">Register</a></li>-->
														<li><a href="postjob.php" class="dez-page">Post a job</a></li>
														<li><a href="tiny.php" class="dez-page">Post a hot job</a></li>
														<li><a href="manage.php" class="dez-page">Manage jobs</a></li>
														<center><a href="process_logout.php" class="btn btn-danger"><i class="fa fa-lock"></i> logout</a></center>
													</ul>
												</li>
											</ul>
										</div>

									<!--
									<a  class="btn btn-primary" style="color:white;"><i class="fa fa-user"></i> <?php //echo $_SESSION['unm']?></a>
									<a href="process_logout.php" class="btn btn-danger"><i class="fa fa-lock"></i> logout</a>-->
								</div>	
						<?php 
							} 
							else{

							}
						?>
						<?php						
							}
							else{
						?>
                        <div class="extra-cell">
									<div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
										<ul class="nav navbar-nav">
											<li>
												<a  class="btn btn-primary" style="color:white;"><i class="fa fa-user"></i> Sign up</a>										
												<ul class="sub-menu">
													<li><a href="employeeregister.php" class="dez-page">Employee register</a></li>
													<li><a href="employerregister.php" class="dez-page">Employer register</a></li>
												</ul>
											</li>
											 
										</ul>
									</div>

                            <!--<a href="employeeregister.php" class="site-button"><i class="fa fa-user"></i> Sign Up</a>-->
                           
                        </div>
						<div  class="extra-cell">
							<a href="login.php" class="site-button"><i class="fa fa-lock"></i> login</a>
						</div>
						<?php
							}
						?>
                    </div>
					
                    <!-- Quik search -->
                    <div class="dez-quik-search bg-primary">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span id="quik-search-remove"><i class="flaticon-close"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">
							<li>
									<a href="index.php" class="dez-page">All jobs</a>
							</li>
						
							<li>
								<a href="login.php">SKILLHUTCH <i class="fa fa-chevron-down"></i> </a>
								<ul class="sub-menu">
									<li><a href="#" class="dez-page">About us</a></li>
									<li><a href="#" class="dez-page">Blog</a></li>
									<li><a href="#" class="dez-page">Offers</a></li>
									<li><a href="#" class="dez-page">News</a></li>
								</ul>
							</li>
							<li>
								<a href="contact.php" class="dez-page">Contact Us</a>
								<!--<a href="#">Pages <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="about-us.html" class="dez-page">About Us</a></li>
									<li><a href="coming-soon.html" class="dez-page">Coming Soon</a></li>
									<li><a href="error-404.html" class="dez-page">Error 404</a></li>
									<li><a href="#" class="dez-page">Portfolio</a>
										<ul class="sub-menu">
											<li><a href="portfolio-grid-2.html" class="dez-page">Portfolio Grid 2 </a></li>
											<li><a href="portfolio-grid-3.html" class="dez-page">Portfolio Grid 3 </a></li>
											<li><a href="portfolio-grid-4.html" class="dez-page">Portfolio Grid 4 </a></li>
										</ul>
									</li>
									<li><a href="login.html" class="dez-page">Login</a></li>
									<li><a href="register.html" class="dez-page">Register</a></li>
									<li><a href="contact.php" class="dez-page">Contact Us</a></li>
								</ul>-->
							</li>
							<!--<li>
								<a href="#">Blog <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="blog-classic.html" class="dez-page">Classic</a></li>
									<li><a href="blog-classic-sidebar.html" class="dez-page">Classic Sidebar</a></li>
									<li><a href="blog-detailed-grid.html" class="dez-page">Detailed Grid</a></li>
									<li><a href="blog-detailed-grid-sidebar.html" class="dez-page">Detailed Grid Sidebar</a></li>
									<li><a href="blog-left-img.html" class="dez-page">Left Image Sidebar</a></li>
									<li><a href="blog-details.html" class="dez-page">Blog Details</a></li>
								</ul>
							</li>-->
						</ul>			
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>