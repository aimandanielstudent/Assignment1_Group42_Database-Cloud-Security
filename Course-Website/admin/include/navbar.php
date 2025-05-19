         <!-- app-Header -->
             <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="index">
                            <img src="<?php echo $websitelogo; ?>" class="header-brand-img desktop-logo" alt="logo" width="80" height="80">
                            <img src="<?php echo $websitelogo; ?>" class="header-brand-img light-logo1" alt="logo" width="80" height="80">
                        </a>
                        <!-- LOGO -->
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <div class="dropdown d-none">
                                <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                    <i class="fe fe-search"></i>
                                </a>
                                <div class="dropdown-menu header-search dropdown-menu-start">
                                    <div class="input-group w-100 p-2">
                                        <input type="text" class="form-control" placeholder="Search....">
                                        <div class="input-group-text btn btn-primary">
                                            <i class="fe fe-search" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-lg-none d-flex">
                                            <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                                <i class="fe fe-search"></i>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="input-group w-100 p-2">
                                                    <input type="text" class="form-control" placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- SIDE-MENU -->
                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                                <img src="<?php echo $defaultprofilepicture; ?>" alt="profile-user"
                                                    class="avatar  profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <h5 class="text-dark mb-0 fs-14 fw-semibold"><?php echo $row['fullname']; ?></h5>
                                                        <small class="text-muted"><?php echo $row['email']; ?></small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a class="dropdown-item" href="config.php?userid=<?php echo $_SESSION['adminid']; ?>">
                                                    <i class="dropdown-icon fe fe-user"></i> Profile
                                                <a class="dropdown-item" href="../private/logout">
                                                    <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->
 
            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="index">
                            <img src="<?php echo $websitelogo; ?>" class="header-brand-img desktop-logo" alt="logo" width="80" height="80">
                            <img src="<?php echo $websitelogo; ?>" class="header-brand-img toggle-logo" alt="logo" width="80" height="80">
                            <img src="<?php echo $websitelogo; ?>" class="header-brand-img light-logo" alt="logo" width="80" height="80">
                            <img src="<?php echo $websitelogo; ?>" class="header-brand-img light-logo1" alt="logo" width="80" height="80">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            <li class="sub-category">
                                <h3>Main</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="index"><i class="side-menu__icon fe fe-home"></i>
                                <span class="side-menu__label">Dashboard</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="user"><i class="side-menu__icon fe fe-user"></i>
                                <span class="side-menu__label">Users</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="course"><i class="side-menu__icon fe fe-box"></i>
                                <span class="side-menu__label">Merchandise</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="match"><i class="side-menu__icon fe fe-tv"></i>
                                <span class="side-menu__label">Matches</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="siteidentity"><i class="side-menu__icon fe fe-anchor"></i>
                                <span class="side-menu__label">Site Identity</span></a>
                            </li>
                </div>
                <!--/APP-SIDEBAR-->