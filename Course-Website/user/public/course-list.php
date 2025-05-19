<?php

include "../include/header.php";

if(isset($_GET['removecart'])){

	$cartid = $_GET['cartid'];

	$deletequery = mysqli_query($db, "DELETE FROM `cart` WHERE cartid = '$cartid'");
	echo "<script>alert('Course Has Been Successfully Remove From Your Cart !');
	window.location.href = '../public/course-list';
	</script>";

}

?>

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
			<h1>Courses</h1>
			
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
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!-- Content Side -->
                <div class="content-side col-lg-9 col-md-12 col-sm-12">
                	<div class="our-courses">
						
						<!-- Options View -->
						<div class="options-view">
							<div class="clearfix">
								<div class="pull-left">
									<h3>Your cart</h3>
								</div>								
							</div>
						</div>
						
						<?php

						$check = $_SESSION['userid'];
						$selectquery = mysqli_query($db, "SELECT * FROM cart INNER JOIN lesson on cart.lessonid = lesson.lessonid WHERE cart.userid = '$check'");

						while($rowcheck = mysqli_fetch_array($selectquery)){

						?>

						<!-- Cource Block Two -->
						<div class="cource-block-three">
							<div class="inner-box">
								<div class="image">
									<a href="course-detail?lessonid=<?php echo $rowcheck['lessonid']; ?>"><img src="../../course/<?php echo $rowcheck['lessonimg']; ?>" width="270" height="250" alt="" /></a>
								</div>
								<div class="content-box">
									<div class="box-inner">
										<h5><a href="course-detail?lessonid=<?php echo $rowcheck['lessonid']; ?>"><?php echo $rowcheck['lessonname']; ?></a></h5>
										<div class="text"><?php echo $rowcheck['lessondesc']; ?></div>
										<div class="clearfix">
											<div class="pull-right clearfix">
												<div class="students">Selected Size : <?php echo $rowcheck['class']; ?></div>
												<a href="course-list?removecart=true&cartid=<?php echo $rowcheck['cartid']; ?>"><div class="hours">Remove ?</div></a>
											</div>
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
				
				<!-- Sidebar Side -->
                <div class="sidebar-side col-lg-3 col-md-3 col-sm-3">
					<div class="sidebar-inner">
						<aside class="sidebar">
							
							<!-- Filter Widget -->
							<div class="filter-widget">
								<h5>Total Price</h5>
								
								<div class="skills-box">

								<?php

									$check = $_SESSION['userid'];
									$totalprice = 0;
									$pricequery = mysqli_query($db, "SELECT * FROM cart INNER JOIN lesson on cart.lessonid = lesson.lessonid WHERE cart.userid = '$check'");

									while($priceresult = mysqli_fetch_array($pricequery)){
										$totalprice += $priceresult['lessonprice'];
									}

								?>
									
									<!-- Skills Form -->
									<div class="skills-form">
										<form method="POST" action="checkout">
											<span>Total With Tax : RM <?php echo $totalprice; ?></span>
												<center>
													<button type="submit" name="checkout" class="theme-btn btn-style-three ">Checkout</button>
													<input type="hidden" name="totalprice" value="<?php echo $totalprice; ?>"> 
												</center>
										</form>
									</div>				
								</div>				
							</div>
							
						</aside>
					</div>
				</div>
				
			</div>									
		</div>
	</div>
	
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