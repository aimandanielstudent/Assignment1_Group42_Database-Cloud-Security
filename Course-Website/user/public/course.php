<?php

include "../include/header.php";

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
    <!-- <div class="preloader"></div> -->
 	
	<?php

		include "../include/navbar.php";

	?>
	
	<!-- Page Title -->
    <section class="page-title">
        <div class="auto-container">
			<h1>Merchandise</h1>
			
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
	
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
		<div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-1.png)"></div>
		<div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-2.png)"></div>
		<div class="circle-one"></div>
		<div class="circle-two"></div>
	</div>
	
	<!-- Popular Courses -->
	<section class="popular-courses-section">
		<div class="auto-container">
			<div class="sec-title">
				<h2>All Products</h2>
			</div>
			
			<div class="row clearfix">

			<?php

				$selectquery = mysqli_query($db, "SELECT * FROM lesson");

				while($rowselect=mysqli_fetch_array($selectquery)){

			
			?>
				
				<!-- Cource Block Two -->
				<div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image customsize">
							<a href="course-detail?lessonid=<?php echo $rowselect['lessonid']; ?>"><img src="../../course/<?php echo $rowselect['lessonimg']; ?>"  alt="" /></a>
						</div>
						<div class="lower-content">
							<h5><a href="course-detail?lessonid=<?php echo $rowselect['lessonid']; ?>"><?php echo $rowselect['lessonname']; ?></a></h5>
							<div class="text"><?php echo $rowselect['lessondesc']; ?></div>
							<div class="clearfix">
							</div>
						</div>
					</div>
				</div>

			<?php

				}

			?>
				
				
			</div>
			
		</div>
	</section>
	<!-- End Popular Courses -->
	
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