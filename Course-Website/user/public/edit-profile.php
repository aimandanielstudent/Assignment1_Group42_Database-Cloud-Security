<?php

include "../include/header.php";

?>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
	<?php

		include "../include/navbar.php";

	?>
	
	<!-- Page Title -->
    <section class="page-title style-two">
        <div class="auto-container">
			<h1>Edit Profile</h1>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Edit Profile Section -->
	<section class="edit-profile-section">
		<div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-1.png)"></div>
		<div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-2.png)"></div>
		<div class="auto-container">
			
			<div class="row clearfix">								
				
				<!-- Content Section -->
				<div class="content-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Edit Profile Info Tabs-->
						<div class="edit-profile-info-tabs">
							<!-- Profile Tabs-->
							<div class="edit-profile-tabs tabs-box">
							
								<!--Tab Btns-->
								<ul class="tab-btns tab-buttons clearfix">
									<li data-tab="#prod-edit" class="tab-btn active-btn">Overview</li>
									<!-- <li data-tab="#prod-enrolmen" class="tab-btn">Enrolmen</li> -->
								</ul>
								
								<!--Tabs Container-->
								<div class="tabs-content">
									
									<!--Tab / Active Tab-->
									<div class="tab active-tab" id="prod-edit">
										<div class="content">
											<!-- Title Box -->
											<div class="title-box">
												<h5>Edit Profile</h5>
											</div>
											
											<!-- Profile Form -->
											<div class="profile-form">
											
												<!-- Profile Form -->
												<form method="post" action="../private/config.php">

													<?php
													$check= $_SESSION['userid'];
													$check_query= mysqli_query($db, "SELECT * FROM `user` WHERE userid='$check'" );
													while($fetch= mysqli_fetch_assoc($check_query)){
														
													
													?>
													<div class="row clearfix">
														
														<div class="col-lg-6 col-md-6 col-sm-12 form-group">
															<input type="text" name="fullname" placeholder="Fullname" value= "<?php echo $fetch['fullname']; ?>"required=""> 
															<span class="icon flaticon-edit-1"></span>
														</div>
														
														<div class="col-lg-6 col-md-6 col-sm-12 form-group">
															<input type="text" name="username" placeholder="Username" value= "<?php echo $fetch['username']; ?>" required="">
															<span class="icon flaticon-edit-1"></span>
														</div>
														
														<div class="col-lg-6 col-md-6 col-sm-12 form-group">
															<input type="email" name="email" placeholder="Email" value= "<?php echo $fetch['email']; ?>" required="">
															<span class="icon flaticon-edit-1"></span>
														</div>
														
														<div class="col-lg-6 col-md-6 col-sm-12 form-group">
															<input type="password" name="password" placeholder="Password" value= "<?php echo $fetch['password']; ?>" required="">
															<span class="icon flaticon-edit-1"></span>
														</div>														
														
														<input type = "hidden" name = "userid" value= "<?php echo $fetch['userid']; ?>" >
														
														<div class="col-lg-12 col-md-12 col-sm-12 form-group text-right">
															<button class="theme-btn btn-style-three" type="submit" name="updateprofile"><span class="txt">Save Change <i class="fa fa-angle-right"></i></span></button>
														</div>
														
													</div>
													<?php
													}
													?>
												</form>
													
											</div>
												
										</div>
									</div>
									
									<!-- Tab -->
									<div class="tab" id="prod-enrolmen">
										<div class="content">
											
											<!-- Title Box -->
											<div class="title-box">
												<h5>Course Enrolmen</h5>
											</div>
											
											<!-- Profile Form -->
											<?php

												$check = $_SESSION['userid'];
												$selectquery = mysqli_query($db, "SELECT * FROM enrolmen INNER JOIN lesson on enrolmen.lessonid = lesson.lessonid WHERE enrolmen.userid = '$check'");

												while($rowcheck = mysqli_fetch_array($selectquery)){

												?>

												<!-- Cource Block Two -->
												<div class="cource-block-three">
													<div class="inner-box">
														<div class="image">
															<a href="enrolmen-detail?lessonid=<?php echo $rowcheck['lessonid']; ?>"><img src="../../course/<?php echo $rowcheck['lessonimg']; ?>" width="270" height="250" alt="" /></a>
														</div>
														<div class="content-box">
															<div class="box-inner">
																<h5><a href="enrolmen-detail?lessonid=<?php echo $rowcheck['lessonid']; ?>"><?php echo $rowcheck['lessonname']; ?></a></h5>
																<div class="text"><?php echo $rowcheck['lessondesc']; ?></div>
																<div class="clearfix">
																</div>
															</div>
														</div>
													</div>
												</div>

												<?php

													}

												?>										
										</div>
									</div>									
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
			
		</div>
		
	</section>
	<!-- End Profile Section -->
	
	<!-- Call To Action Section Two -->
	<section class="call-to-action-section-two" style="background-image: url(images/background/3.png)">
		<div class="auto-container">
			<div class="content">
				<h2>Ready to get started?</h2>
				<div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re, they’re two <br> waters own morning gathered greater shall had behold had seed.</div>
				<div class="buttons-box">
					<a href="course.html" class="theme-btn btn-style-one"><span class="txt">Get Stared <i class="fa fa-angle-right"></i></span></a>
					<a href="course.html" class="theme-btn btn-style-two"><span class="txt">All Courses <i class="fa fa-angle-right"></i></span></a>
				</div>
			</div>
		</div>
	</section>
	<!-- End Call To Action Section Two -->
	
	<!--Main Footer-->
	<?php

		include "../include/footer.php";

	?>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/element-in-view.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<!--Master Slider-->
<script src="js/jquery.easing.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>

</body>
</html>