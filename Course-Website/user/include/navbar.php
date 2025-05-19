
<!-- Main Header-->
    <header class="main-header header-style-one">
			
    	<!-- Header Upper -->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div class="logo"><a href="index"><img src="<?php echo $websitelogo; ?>" width="100" height="60" alt="" title="Bootcamp"></a></div>
                    </div>
                   	
                   	<div class="nav-outer clearfix">
						<!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						<!-- Main Menu -->

						<?php

						if(isset($_SESSION['userid'])){

						?>

						<nav class="main-menu show navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li><a href="index">Home</a></li>
									<li><a href="match">Match</a></li>
									<li><a href="course">Merchandise</a></li>
									<li><a href="course-list">Cart ( <?php echo $cartcount; ?> )</a></li>
									<li class="dropdown"><a href="#">Welcome, <?php echo $selectrow['username']; ?></a>
										<ul>
											<li><a href="edit-profile">Profile</a></li>
											<li><a href="../private/logout">Logout</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</nav>

						<?php

							} else {

						?>

						<nav class="main-menu show navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li><a href="index">Home</a></li>
									<li><a href="match">Match</a></li>
									<li><a href="course">Merchandise</a></li>
									<li><a href="login">Login / Register</a></li>
								</ul>
							</div>
						</nav>

						<?php

							}

						?>

						
					</div>
                   
                </div>
            </div>
        </div>
        <!-- End Header Upper -->
        
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="https://via.placeholder.com/230x60" alt="" title=""></a></div>
                <div class="menu-outer">
					<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
				</div>
            </nav>
        </div>
		<!-- End Mobile Menu -->
		
    </header>
    <!-- End Main Header -->