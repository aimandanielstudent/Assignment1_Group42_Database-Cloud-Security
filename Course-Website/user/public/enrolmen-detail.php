<?php

include "../include/header.php";

$checkid = $_GET['lessonid'];
$runquery = mysqli_query($db, "SELECT * FROM lesson WHERE lessonid = '$checkid'");
$fetchquery = mysqli_fetch_array($runquery);

$countquery1 = mysqli_query($db, "SELECT * FROM enrolmen WHERE lessonid = '$checkid' AND class = 'A'");
$countresult1 = mysqli_num_rows($countquery1);

$countquery2 = mysqli_query($db, "SELECT * FROM enrolmen WHERE lessonid = '$checkid' AND class = 'B'");
$countresult2 = mysqli_num_rows($countquery2);


?>

<style>

.customsize {
	width: 370px;
	height: 253px;
}

</style>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
	<?php

		include "../include/navbar.php";

	?>
	
	<!-- Page Title -->
    <section class="page-title">
        <div class="auto-container">
			<h1>Course Introduction</h1>
			
			<!-- Search Boxed -->
			<div class="search-boxed">
				<div class="search-box">
					<form method="post" action="contact.html">
						<div class="form-group">
							<input type="search" name="search-field" value="" placeholder="What do you want to learn?" required>
							<button type="submit"><span class="icon fa fa-search"></span></button>
						</div>
					</form>
				</div>
			</div>
			
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Intro Courses -->
	<section class="intro-section">
		<div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-1.png)"></div>
		<div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-2.png)"></div>
		<div class="circle-one"></div>
		<div class="auto-container">
			<div class="sec-title">
				<h2><?php echo $fetchquery['lessonname']; ?></h2>
			</div>
			
			<div class="inner-container">
				<div class="row clearfix">
					
					<!-- Content Column -->
					<div class="content-column col-lg-8 col-md-12 col-sm-12">
						<div class="inner-column">
							
							<!-- Intro Info Tabs-->
							<div class="intro-info-tabs">
								<!-- Intro Tabs-->
								<div class="intro-tabs tabs-box">

									<!--Tab Btns-->
									<ul class="tab-btns tab-buttons clearfix">
										<li data-tab="#prod-overview" class="tab-btn active-btn">Overview</li>
										<li data-tab="#prod-timetable" class="tab-btn">Timetable</li>
										<li data-tab="#prod-student" class="tab-btn">List of Students</li>
									</ul>
								
									<!--Tabs Container-->
									<div class="tabs-content">
										
										<!--Tab / Active Tab-->
										<div class="tab active-tab" id="prod-overview">
											<div class="content">
												
												<!-- Cource Overview -->
												<div class="course-overview">
													<div class="inner-box">
														<h4><?php echo $fetchquery['lessonname']; ?></h4>
														<p><?php echo $fetchquery['lessondesc']; ?></p>
														<ul class="student-list">
															<li>Class A : <?php echo $countresult1; ?> Total Students</li>
															<li>Class B : <?php echo $countresult2; ?> Total Students</li>
														</ul>		
													</div>
												</div>
											</div>
										</div>
										
										<div class="tab" id="prod-timetable">
											<div class="content">
												
												<!-- Cource Overview -->
												<div class="course-overview">
													<div class="inner-box">
														<h4>Course Timetable</h4>
														<p>Monday : <?php echo $fetchquery['startmonday']; ?> ~ <?php echo $fetchquery['endmonday']; ?></p>
														<p>Tuesday : <?php echo $fetchquery['starttuesday']; ?> ~ <?php echo $fetchquery['endtuesday']; ?></p>
														<p>Wednesday : <?php echo $fetchquery['startwednesday']; ?> ~ <?php echo $fetchquery['endwednesday']; ?></p>
														<p>Thursday : <?php echo $fetchquery['startthursday']; ?> ~ <?php echo $fetchquery['endthursday']; ?></p>	
														<p>Friday : <?php echo $fetchquery['startfriday']; ?> ~ <?php echo $fetchquery['endfriday']; ?></p>	
													</div>
												</div>
											</div>
										</div>

										<div class="tab" id="prod-student">
											<div class="content">
												
												<!-- Cource Overview -->
												<div class="course-overview">
													<div class="inner-box">
														<h4>All Students That Enrolled In This Course</h4>
														<?php

														$check = $_GET['lessonid'];
														$enrolmenquery = mysqli_query($db, "SELECT * FROM enrolmen INNER JOIN user ON enrolmen.userid = user.userid WHERE enrolmen.lessonid = '$check'");
														while($enrolmenresult = mysqli_fetch_array($enrolmenquery)){

														?>

														<p>- <?php echo $enrolmenresult['fullname']; ?> ( <?php echo $enrolmenresult['username']; ?> )</p>

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
					
					<!-- Video Column -->
					<div class="video-column col-lg-4 col-md-12 col-sm-12">
						<div class="inner-column sticky-top">

							<!-- End Video Box -->
							<div class="price">RM <?php echo $fetchquery['lessonprice']; ?></div>
							<div class="time-left">Grab While Stock Last</div>
							<form method="POST">

							<input type="hidden" name="lessonid" value="<?php echo $_GET['lessonid']; ?>">

							<div class="row mb-4 justify-content-center">
                                            <div class="col-md-6">
                                                <select name="class" class="form-control">
                                                    <option value="A">Class A</option>
                                                    <option value="B">Class B</option>
                                                </select>
                                            </div>
                            			</div>
							
							<?php

								if(!isset($_SESSION['userid'])){

							?>

								<a href="login" class="theme-btn btn-style-three"><span class="txt">Add To Cart <i class="fa fa-angle-right"></i></span></a>
								

							<?php

								} else {

							?>

								<button type="submit" class="theme-btn btn-style-three" name="addtocart"><span class="txt">Add To Cart<i class="fa fa-angle-right"></i></span></button>

							<?php

								}

							?>



							</form>

						</div>
					</div>
					
				</div>
			</div>
		
		</div>
	</section>
	<!-- End intro Courses -->
	
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