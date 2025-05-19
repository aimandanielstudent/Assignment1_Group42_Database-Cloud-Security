<?php

include "../include/header.php"

?>

<body class="app sidebar-mini ltr">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

        <?php

            include "../include/navbar.php";

        ?>
            </div>

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Site Identity</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Site Identity</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <?php

                        $query = mysqli_query($db  , "SELECT * FROM siteidentity LIMIT 1");
                        $rowdetail = mysqli_fetch_assoc($query);

                        ?>

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Update Logo</div>
                                    </div>
                                    <form method="POST" action="../private/siteidentity.php" enctype='multipart/form-data'>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="form-label">Logo</label>
                                            <div class="wrap-input100 validate-input input-group">
                                                <input class="form-control" type="file" name="websitelogo" value = "<?php echo $rowdetail['websitelogo']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-end">
                                        <button type="submit" name="updatelogo" class="btn btn-success my-1">Update</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Update Favicon</div>
                                    </div>
                                    <form method="POST" action="../private/siteidentity.php" enctype='multipart/form-data'>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="form-label">Favicon</label>
                                            <div class="wrap-input100 validate-input input-group">
                                                <input class="form-control" type="file" name="websitefavicon" value = "<?php echo $rowdetail['websitefavicon']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-end">
                                        <button type="submit" name="updatefavicon" class="btn btn-success my-1">Update</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Edit Site Details</h3>
                                    </div>
                                <form method="POST" action="../private/siteidentity.php">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputname">Website Name</label>
                                                    <input type="text" class="form-control" id="exampleInputname" placeholder="Website Name" name="websitename" value = "<?php echo $rowdetail['websitename']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputname1">Website Description</label>
                                                    <input type="text" class="form-control" id="exampleInputname1" placeholder="Website Description" name="websitedesc" value = "<?php echo $rowdetail['websitedesc']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputname1">Website Footer</label>
                                                    <input type="text" class="form-control" id="exampleInputname1" placeholder="Website Footer" name="websitefooter" value = "<?php echo $rowdetail['websitefooter']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-end">
                                        <button type="submit" name="updatesite" class="btn btn-success my-1">Save</a>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED -->
                    </div>
                    <!--CONTAINER CLOSED -->

                </div>
            </div>
            <!--app-content open-->
        </div>

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        <?php echo $websitefooter; ?>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER CLOSED -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SPARKLINE JS-->
    <script src="assets/js/jquery.sparkline.min.js"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="assets/js/circle-progress.min.js"></script>

    <!-- INPUT MASK JS-->
    <script src="assets/plugins/input-mask/jquery.mask.min.js"></script>

    <!-- SIDE-MENU JS -->
    <script src="assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- CHARTJS JS -->
    <script src="assets/plugins/chart/Chart.bundle.js"></script>
    <script src="assets/plugins/chart/utils.js"></script>

    <!-- SIDEBAR JS -->
    <script src="assets/plugins/sidebar/sidebar.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="assets/js/show-password.min.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="assets/plugins/select2/select2.full.min.js"></script>
    <script src="assets/js/select2.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="assets/plugins/p-scroll/pscroll.js"></script>
    <script src="assets/plugins/p-scroll/pscroll-1.js"></script>

    <!-- Color Theme js -->
    <script src="assets/js/themeColors.js"></script>

    <!-- Sticky js -->
    <script src="assets/js/sticky.js"></script>

    <!-- CUSTOM JS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>