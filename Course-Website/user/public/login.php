<?php
// 🚨 MUST BE AT THE VERY TOP OF THE FILE! 🚨
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Handle WSO2 login callback
if (isset($_GET['code'])) {
    $code = $_GET['code'];
    $token_url = "https://localhost:9443/oauth2/token";
    $client_id = "F_2nJNAIz5OHvb0U2JhstiAfa8sa";
    $client_secret = "ZY1LxPvc4MwCpO_kOHhDVp7e_JUP7MKKk7d1dGo1GBca";
    $redirect_uri = "http://localhost:80/course-website/user/public/login";

    // Request access token from WSO2
    $data = [
        'grant_type' => 'authorization_code',
        'code' => $code,
        'redirect_uri' => $redirect_uri,
        'client_id' => $client_id,
        'client_secret' => $client_secret
    ];

    $ch = curl_init($token_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disable SSL check for localhost
    
    $response = curl_exec($ch);
    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($http_status == 200) {
		// 🚨 Debug: Print roles and token
		echo "<h3>Roles:</h3><pre>";
		print_r($user_roles);
		echo "</pre>";
		echo "<h3>Token:</h3><div style='word-wrap: break-word;'>$access_token</div>";
		exit();
		
        $token_data = json_decode($response, true);
        
        // Check if token is valid
        if (empty($token_data['access_token'])) {
            die("Error: No access token received");
        }

        // Decode JWT to get user roles
        $access_token = $token_data['access_token'];
        $jwt_parts = explode('.', $access_token);
        
        // Fix base64 decoding for JWT
        $payload = base64_decode(str_replace(['-', '_'], ['+', '/'], $jwt_parts[1]));
        $payload = json_decode($payload, true);
        $user_roles = $payload['groups'] ?? []; // Get roles from "groups" claim

        // Store roles in session
        $_SESSION['roles'] = $user_roles;

        // // Redirect based on roles
        if (in_array('ronaldo_role', $user_roles)) {
            header("Location: http://localhost/course-website/admin/public/match");
        } elseif (in_array('Merchandise_Admin', $user_roles)) {
            header("Location: http://localhost/course-website/admin/public/course");
        } else {
            header("Location: http://localhost/course-website/user/unauthorized.php"); // No valid roles
        }
        exit();
    } else {
        echo "Error: HTTP $http_status<br>Response: <pre>" . $response . "</pre>";
        exit();
    }
}
?>

<?php

include "../include/header.php";

?>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
 	
	<?php

		include "../include/navbar.php";

	?>
	
	<!-- Page Title -->
    <section class="page-title">
        <!-- <div class="auto-container"> -->
			<!-- <h1>Login</h1> -->
			
			<!-- Search Boxed
			<div class="search-boxed">
				<div class="search-box">
					<form method="post" action="contact.html">
						<div class="form-group">
							<input type="search" name="search-field" value="" placeholder="What do you want to learn?" required>
							<button type="submit"><span class="icon fa fa-search"></span></button>
						</div>
					</form>
				</div>
			</div> -->
			
        <!-- </div> -->
    </section>
    <!--End Page Title-->
	
	<!-- Login Section -->

	<section class="login-section">
		<div class="auto-container">
			<div class="login-box">
				
				<!-- Title Box -->
				<div class="title-box">
					<h2>Login</h2>
					<div class="text"><span class="theme_color">Welcome!</span> Please confirm that you are visiting</div>
				</div>
				
				<!-- Login Form -->
				<div class="styled-form">
					<form method="post" action="../private/config">
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" value="" placeholder="Email" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" value="" placeholder="Password" required>
						</div>
						<div class="form-group">
							<div class="clearfix">
								<div class="pull-left">
									<div class="check-box">
										<input type="checkbox" name="remember-password" id="type-1"> 
										<label for="type-1">Remember Password</label>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group text-center">
							<button type="submit" name="login" class="theme-btn btn-style-three"><span class="txt">Login <i class="fa fa-angle-right"></i></span></button>
						</div>

						<div class="form-group">
							<div class="users">New User? <a href="register">Sign Up</a></div>
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
<!-- <script src="js/jquery.easing.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script> -->

</body>
</html>