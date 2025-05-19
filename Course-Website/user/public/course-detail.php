<?php

include "../include/header.php";

$checkid = $_GET['lessonid'];
$runquery = mysqli_query($db, "SELECT * FROM lesson WHERE lessonid = '$checkid'");
$fetchquery = mysqli_fetch_array($runquery);

if(isset($_POST['addtocart'])){

	$lessonid = $_POST['lessonid'];
	$class = $_POST['class'];
	$userid = $_SESSION['userid'];

	$checkquery = mysqli_query($db, "SELECT * FROM cart WHERE userid = '$userid' AND lessonid = '$lessonid'");
	$rowcount = mysqli_num_rows($checkquery);
	$checkquery1 = mysqli_query($db, "SELECT * FROM enrolmen WHERE userid = '$userid' AND lessonid = '$lessonid'");
	$rowcount1 = mysqli_num_rows($checkquery1);

	if($rowcount > 0){

		echo "<script>alert('This Course Is Already In Your Cart !');
		window.location.href = '../public/course';
		</script>";

	} elseif($rowcount1 > 0 ){

		echo "<script>alert('You Already Enrolled In This Course !');
		window.location.href = '../public/course';
		</script>";
		
	} else {

		$insertquery = mysqli_query($db, "INSERT INTO `cart`(`lessonid`, `userid`, `class`) VALUES ('$lessonid','$userid','$class')");
		echo "<script>alert('Course Has Been Successfully Added To Your Cart !');
		window.location.href = '../public/course';
		</script>";
		
	}


}

?>

<style>

.customsize {
	width: 370px;
	height: 400px;
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
			<h1>Merchandise</h1>
			
			<!-- Search Boxed -->
			<!-- <div class="search-boxed">
				<div class="search-box">
					<form method="post" action="contact.html">
						<div class="form-group">
							<input type="search" name="search-field" value="" placeholder="What do you want to find?" required>
							<button type="submit"><span class="icon fa fa-search"></span></button>
						</div>
					</form>
				</div>
			</div> -->
			
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
														<?php
															$selectquery = mysqli_query($db, "SELECT * FROM lesson");
															while($rowselect=mysqli_fetch_array($selectquery)){
														?>
														<div class="image customsize">
															<a href="course-detail?lessonid=<?php echo $rowselect['lessonid']; ?>"><img src="../../course/<?php echo $rowselect['lessonimg']; ?>"  alt="" /></a>
															<?php } ?>
														</div>
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
                                                    <option value="S">Size S</option>
                                                    <option value="M">Size M</option>
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