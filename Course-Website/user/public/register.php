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
    <section class="page-title">
        <div class="auto-container">
			<!-- <h1>Register</h1> -->
			
			<!-- Search Boxed -->
			<!-- <div class="search-boxed">
				<div class="search-box">
					<form method="post" action="contact.html">
						<div class="form-group">
							<input type="search" name="search-field" value="" placeholder="What do you want to learn?" required>
							<button type="submit"><span class="icon fa fa-search"></span></button>
						</div>
					</form>
				</div>
			</div> -->
			
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Register Section -->
	<section class="register-section">
		<div class="auto-container">
			<div class="register-box">
				
				<!-- Title Box -->
				<div class="title-box">
					<h2>Register</h2>
					<div class="text"><span class="theme_color">Welcome!</span> Please confirm that you are visiting</div>
				</div>
				
				<!-- Login Form -->
				<div class="styled-form">
					<form method="post" action="../private/config">
						
						<div class="row clearfix">
							
							<!-- Form Group -->
							<div class="form-group col-lg-6 col-md-12 col-sm-12">
								<label>Full Name</label>
								<input type="text" name="fullname" value="" placeholder="Full Name" required>
							</div>

							<!-- Form Group -->
							<div class="form-group col-lg-6 col-md-12 col-sm-12">
								<label>User Name</label>
								<input type="text" name="username" value="" placeholder="User Name" required>
							</div>
											
							<!-- Form Group -->
							<div class="form-group col-lg-6 col-md-12 col-sm-12">
								<label>Email Address</label>
								<input type="email" name="email" value="" placeholder="abcd@gmail.com" required>
							</div>
							
							<!-- Form Group -->
							<div class="form-group col-lg-6 col-md-12 col-sm-12">
								<label>Password</label>
								<input type="password" name="password" value="" placeholder="Password" required>
							</div>
														
							<div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
								<button type="submit" name="register" class="theme-btn btn-style-three"><span class="txt">Register<i class="fa fa-angle-right"></i></span></button>
							</div>
							
							<div class="form-group col-lg-12 col-md-12 col-sm-12">
								<div class="users">Already have an account? <a href="login">Sign In</a></div>
							</div>
							
						</div>
						
					</form>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Login Section -->	
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