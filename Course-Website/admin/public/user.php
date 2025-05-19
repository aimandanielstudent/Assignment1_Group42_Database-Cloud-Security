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
                            <h1 class="page-title">Users</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">List of Active User</h3>
                                    </div>
                                    <div class="card-body">
                                        <a href="config?adduser=true"><button class="btn btn-primary mb-4">Add New User</button></a>
                                        <div class="table-responsive">
                                            <table class="table table-bordered border text-nowrap mb-0" >
                                                <thead>
                                                    <tr>
                                                        <th>Full Name</th>
                                                        <th>User Name</th>
                                                        <th>Email</th>
                                                        <th>Usertype</th>
                                                        <th>Password</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php
                                                $query = "SELECT * FROM user";
                                                $query_run = mysqli_query($db,$query);

                                                while($row = mysqli_fetch_array($query_run))
                                                {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row['fullname']; ?></td>
                                                        <td><?php echo $row['username']; ?></td>
                                                        <td><?php echo $row['email']; ?></td>
                                                        <td>
                                                         
                                                        <?php 
                                                        
                                                        if($row['usertype'] == "0"){
                                                            echo "User";
                                                        } else {
                                                            echo "Admin";
                                                        }
                                                        
                                                        ?>

                                                         </td>
                                                        <td><?php echo $row['password']; ?></td>
                                                        <td>
                                                            <a href="config.php?userid=<?php echo $row['userid']; ?>"><button class="btn btn-success-light">Edit</button></a>
                                                            <a href="../private/delete.php?userid=<?php echo $row['userid']; ?>"><button class="btn btn-danger-light">Delete</button></a>
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