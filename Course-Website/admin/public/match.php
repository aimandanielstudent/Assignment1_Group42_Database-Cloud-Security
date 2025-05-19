<?php

include "../include/header.php";

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
                            <h1 class="page-title">Matches</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Match</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->
                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">List of Match</h3>
                                    </div>
                                    <div class="card-body">
                                    <a href="config?addmatch=true"><button class="btn btn-primary mb-4">Add New Match</button></a>
                                        <div class="table-responsive">
                                            <table class="table table-bordered border text-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Match ID</th>
                                                        <th>Team A Name</th>
                                                        <th>Team B Name</th>
                                                        <th>Team A Score</th>
                                                        <th>Team B Score</th>
                                                        <th>Date</th>
                                                        <th>Time</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php
                                                $query = "SELECT * FROM matches";
                                                $query_run = mysqli_query($db,$query);

                                                while($row = mysqli_fetch_array($query_run))
                                                {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row['matchid']; ?></td>
                                                        <td><?php echo $row['team_A_name']; ?></td>
                                                        <td><?php echo $row['team_B_name']; ?></td>
                                                        <td><?php echo $row['team_A_score']; ?></td>
                                                        <td><?php echo $row['team_B_score']; ?></td>
                                                        <td><?php echo $row['match_date']; ?></td>
                                                        <td><?php echo $row['match_time']; ?></td>
                                                        <td><?php echo $row['status']; ?></td>
                                                        <td>
                                                            <a href="config.php?matchid=<?php echo $row['matchid']; ?>"><button class="btn btn-success-light">Edit</button></a>
                                                            <a href="../private/delete.php?matchid=<?php echo $row['matchid']; ?>"><button class="btn btn-danger-light">Delete</button></a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- CONTAINER CLOSED -->

                </div>
            </div>
            <!--app-content closed-->
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

    <!-- Select2 js-->
    <script src="assets/plugins/select2/select2.full.min.js"></script>

    <!-- SIDE-MENU JS -->
    <script src="assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="assets/plugins/p-scroll/pscroll.js"></script>
    <script src="assets/plugins/p-scroll/pscroll-1.js"></script>

    <!-- SIDEBAR JS -->
    <script src="assets/plugins/sidebar/sidebar.js"></script>

    <!-- INTERNAL Edit-Table JS -->
    <script src="assets/plugins/edit-table/bst-edittable.js"></script>
    <script src="assets/plugins/edit-table/edit-table.js"></script>

    <!-- Color Theme js -->
    <script src="assets/js/themeColors.js"></script>

    <!-- Sticky js -->
    <script src="assets/js/sticky.js"></script>

    <!-- CUSTOM JS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>