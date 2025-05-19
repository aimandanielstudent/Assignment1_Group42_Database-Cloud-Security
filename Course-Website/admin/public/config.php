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
                            <h1 class="page-title">Configuration</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Configuration</li>
                                </ol>
                            </div>
                        </div>

                        <form method="POST" action="../private/config" enctype='multipart/form-data'>

                        <!-- PAGE-HEADER END -->

                        <?php

                        if (isset($_GET['adduser'])) {

                        ?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Add User</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label"> Full Name :</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Full Name" name="fullname">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label"> User Name :</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="User Name" name="username">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Email :</label>
                                            <div class="col-md-9">
                                                <input type="email" class="form-control" placeholder="Email" name="email">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Password :</label>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control" placeholder="Password" name="password">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Usertype :</label>
                                            <div class="col-md-9">
                                                <select name="usertype" class="form-control">
                                                    <option value="0">User</option>
                                                    <option value="1">Admin</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9">
                                                <button type="submit" name="adduser" class="btn btn-primary">Add User</button>
                                            </div>
                                        </div>
                                        <!--End Row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                        <?php

                            } elseif(isset($_GET['userid'])) {

                            $check = $_GET['userid'];
                            $query = mysqli_query($db, "SELECT * FROM user WHERE userid = '$check'");
                            $rowcheck = mysqli_fetch_array($query);

                        ?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Update Details</div>
                                    </div>
                                    <div class="card-body">
                                        <input type="hidden" name="userid" value="<?php echo $rowcheck['userid']; ?>">
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label"> Full Name :</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Full Name" name="fullname" value="<?php echo $rowcheck['fullname']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label"> User Name :</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="username" name="username" value="<?php echo $rowcheck['username']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Email :</label>
                                            <div class="col-md-9">
                                                <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $rowcheck['email']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Password :</label>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $rowcheck['password']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Usertype :</label>
                                                <div class="col-md-9">
                                                <select name="usertype" class="form-control">

                                                <?php

                                                    if($rowcheck['usertype'] == "0"){

                                                ?>
                                                    <option value="0">User</option>

                                                <?php

                                                    } else {

                                                ?>
                                                    <option value="1">Admin</option>
                                                <?php

                                                    }

                                                ?>

                                                    <option value="0">User</option>
                                                    <option value="1">Admin</option>
                                                </select>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9">
                                                <button type="submit" name="updateuser" class="btn btn-primary">Update User</button>
                                            </div>
                                        </div>
                                        <!--End Row-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php

                            } elseif(isset($_GET['addmatch'])) {

                        ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Add Match</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label"> Team A Name :</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Full Name" name="team_A_name">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label"> Team B Name :</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Full Name" name="team_B_name">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Team A Logo :</label>
                                            <div class="col-md-3">
                                            <input class="form-control" type="file" name="image_A" required>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Team B Logo :</label>
                                            <div class="col-md-3">
                                            <input class="form-control" type="file" name="image_B" required>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Team A Score :</label>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control" placeholder="Score" name="team_A_score">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Team B Score :</label>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control" placeholder="Score" name="team_B_score">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Date :</label>
                                            <div class="col-md-9">
                                                <input type="date" class="form-control" placeholder="Password" name="date">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Time :</label>
                                            <div class="col-md-9">
                                                <input type="time" class="form-control" placeholder="Password" name="time">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Status :</label>
                                            <div class="col-md-9">
                                                <select name="status" class="form-control">
                                                    <option value="Not Yet Started">Not Yet Started</option>
                                                    <option value="Ongoing">Ongoing</option>
                                                    <option value="Full Time">Full Time</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9">
                                                <button type="submit" name="addmatch" class="btn btn-primary">Add Match</button>
                                            </div>
                                        </div>
                                        <!--End Row-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php

                            } elseif(isset($_GET['matchid'])) {

                            $check = $_GET['matchid'];
                            $query = mysqli_query($db, "SELECT * FROM matches WHERE matchid = '$check'");
                            $rowcheck = mysqli_fetch_array($query);

                        ?>
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Update Match Details</div>
                                    </div>
                                    <div class="card-body">
                                        <input type="hidden" name="matchid" value="<?php echo $rowcheck['matchid']; ?>">
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label"> Team A Name :</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Full Name" name="team_A_name" value="<?php echo $rowcheck['team_A_name']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label"> Team B Name :</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Full Name" name="team_B_name" value="<?php echo $rowcheck['team_B_name']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Team A Score :</label>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control" placeholder="Score" name="team_A_score" value="<?php echo $rowcheck['team_A_score']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Team B Score :</label>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control" placeholder="Score" name="team_B_score" value="<?php echo $rowcheck['team_B_score']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Date :</label>
                                            <div class="col-md-9">
                                                <input type="date" class="form-control" placeholder="Password" name="date" value="<?php echo $rowcheck['match_date']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Time :</label>
                                            <div class="col-md-9">
                                                <input type="time" class="form-control" placeholder="Password" name="time" value="<?php echo $rowcheck['match_time']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Status :</label>
                                                <div class="col-md-9">
                                                <select name="status" class="form-control">

                                                <?php

                                                    if($rowcheck['status'] == "Not Yet Started"){

                                                ?>
                                                    <option value="Not Yet Started">Not Yet Started</option>

                                                <?php

                                                    } elseif($rowcheck['status'] == "Ongoing"){

                                                ?>
                                                    <option value="Ongoing">Ongoing</option>
                                                <?php

                                                    } else {

                                                ?>
                                                    <option value="Full Time">Full Time</option>
                                                <?php

                                                } 

                                                ?>         
                                                    <option value="Not Yet Started">Not Yet Started</option>
                                                    <option value="Ongoing">Ongoing</option>
                                                    <option value="Full Time">Full Time</option>
                                                </select>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9">
                                                <button type="submit" name="updatematch" class="btn btn-primary">Update Match</button>
                                            </div>
                                        </div>
                                        <!--End Row-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php

                            } elseif(isset($_GET['addcourse'])) {

                        ?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Add New Course</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Course Name :</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Product Name" name="lessonname">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Course Description :</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Product Name" name="lessondesc">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Course Price :</label>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control" placeholder="RM 10" name="lessonprice">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Course Image : ( Recommended : 370x253 )</label>
                                            <div class="col-md-3">
                                            <input class="form-control" type="file" name="image" required>
                                            </div>
                                        </div>
                                        <!-- <div class="row mb-4">
                                            <label class="col-md-3 form-label">Monday Start</label>
                                            <div class="col-md-3">
                                            <input class="form-control" type="time" name="startmonday" required>
                                            </div>
                                            <label class="col-md-3 form-label">Monday End</label>
                                            <div class="col-md-3">
                                            <input class="form-control" type="time" name="endmonday" required>
                                            </div>
                                        </div> -->
                                        <!-- <div class="row mb-4">
                                            <label class="col-md-3 form-label">Tuesday Start</label>
                                            <div class="col-md-3">
                                            <input class="form-control" type="time" name="starttuesday" required>
                                            </div>
                                            <label class="col-md-3 form-label">Tuesday End</label>
                                            <div class="col-md-3">
                                            <input class="form-control" type="time" name="endtuesday" required>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Wednesday Start</label>
                                            <div class="col-md-3">
                                            <input class="form-control" type="time" name="startwednesday" required>
                                            </div>
                                            <label class="col-md-3 form-label">Wednesday End</label>
                                            <div class="col-md-3">
                                            <input class="form-control" type="time" name="endwednesday" required>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Thursday Start</label>
                                            <div class="col-md-3">
                                            <input class="form-control" type="time" name="startthursday" required>
                                            </div>
                                            <label class="col-md-3 form-label">Monday End</label>
                                            <div class="col-md-3">
                                            <input class="form-control" type="time" name="endthursday" required>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Friday Start</label>
                                            <div class="col-md-3">
                                            <input class="form-control" type="time" name="startfriday" required>
                                            </div>
                                            <label class="col-md-3 form-label">Friday End</label>
                                            <div class="col-md-3">
                                            <input class="form-control" type="time" name="endfriday" required>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="card-footer">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9">
                                            <button type="submit" name="addcourse" class="btn btn-primary">Add Course</button>
                                            </div>
                                        </div>
                                        <!--End Row-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php

                            } elseif(isset($_GET['lessonid'])) {

                                $check = $_GET['lessonid'];
                                $query = mysqli_query($db, "SELECT * FROM lesson  WHERE lessonid = '$check'");
                                $rowcheck = mysqli_fetch_array($query);

                        ?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Update Course</div>
                                    </div>
                                    <input type="hidden" name="lessonid" value="<?php echo $rowcheck['lessonid']; ?>">
                                    <div class="card-body">
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Course Name :</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Product Name" name="lessonname" value="<?php echo $rowcheck['lessonname']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Course Description :</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Product Name" name="lessondesc" value="<?php echo $rowcheck['lessondesc']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Course Price:</label>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control" name="lessonprice" value="<?php echo $rowcheck['lessonprice']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Monday Start</label>
                                            <div class="col-md-3">
                                            <input class="form-control" type="time" name="startmonday" value="<?php echo $rowcheck['startmonday']; ?>" required>
                                            </div>
                                            <label class="col-md-3 form-label">Monday End</label>
                                            <div class="col-md-3">
                                            <input class="form-control" type="time" name="endmonday" value="<?php echo $rowcheck['endmonday']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Tuesday Start</label>
                                            <div class="col-md-3">
                                            <input class="form-control" type="time" name="starttuesday" value="<?php echo $rowcheck['starttuesday']; ?>" required>
                                            </div>
                                            <label class="col-md-3 form-label">Tuesday End</label>
                                            <div class="col-md-3">
                                            <input class="form-control" type="time" name="endtuesday" value="<?php echo $rowcheck['endtuesday']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Wednesday Start</label>
                                            <div class="col-md-3">
                                            <input class="form-control" type="time" name="startwednesday" value="<?php echo $rowcheck['startwednesday']; ?>" required>
                                            </div>
                                            <label class="col-md-3 form-label">Wednesday End</label>
                                            <div class="col-md-3">
                                            <input class="form-control" type="time" name="endwednesday" value="<?php echo $rowcheck['endwednesday']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Thursday Start</label>
                                            <div class="col-md-3">
                                            <input class="form-control" type="time" name="startthursday" value="<?php echo $rowcheck['startthursday']; ?>" required>
                                            </div>
                                            <label class="col-md-3 form-label">Monday End</label>
                                            <div class="col-md-3">
                                            <input class="form-control" type="time" name="endthursday" value="<?php echo $rowcheck['endthursday']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Friday Start</label>
                                            <div class="col-md-3">
                                            <input class="form-control" type="time" name="startfriday" value="<?php echo $rowcheck['startfriday']; ?>" required>
                                            </div>
                                            <label class="col-md-3 form-label">Friday End</label>
                                            <div class="col-md-3">
                                            <input class="form-control" type="time" name="endfriday" value="<?php echo $rowcheck['endfriday']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9">
                                            <button type="submit" name="updatecourse" class="btn btn-primary">Update Course</button>
                                            </div>
                                        </div>
                                        <!--End Row-->
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php

                        } elseif(isset($_GET['editimg'])) {

                            $check = $_GET['id'];
                            $query = mysqli_query($db, "SELECT * FROM lesson WHERE lessonid = '$check'");
                            $rowcheck = mysqli_fetch_array($query);

                    ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Update Product Image ( Recommended : 370x253 )</div>
                                </div>
                                <input class="form-control" type="hidden" name="lessonid" value="<?php echo $rowcheck['lessonid']; ?>">
                                <div class="card-body">
                                    <div class="row mb-4">
                                            <label class="col-md-3 form-label">Course Image :</label>
                                            <div class="col-md-9">
                                            <input class="form-control" type="file" name="image" required>
                                            </div>
                                        </div>
                                </div>
                                <div class="card-footer">
                                    <!--Row-->
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-9">
                                        <button type="submit" name="updatecourseimg" class="btn btn-primary">Update Course Image</button>
                                        </div>
                                    </div>
                                    <!--End Row-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php

                        } 

                    ?>

                        </form>
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

    <!-- CHART-CIRCLE JS-->
    <script src="assets/js/circle-progress.min.js"></script>

    <!-- INPUT MASK JS-->
    <script src="assets/plugins/input-mask/jquery.mask.min.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="assets/plugins/select2/select2.full.min.js"></script>
    <script src="assets/js/select2.js"></script>

    <!-- SIDE-MENU JS -->
    <script src="assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- SIDEBAR JS -->
    <script src="assets/plugins/sidebar/sidebar.js"></script>

    <!-- INTERNAL WYSIWYG Editor JS -->
    <script src="assets/plugins/wysiwyag/jquery.richtext.js "></script>
    <script src="assets/plugins/wysiwyag/wysiwyag.js "></script>

    <!-- INTERNAL File-Uploads Js-->
    <script src="assets/plugins/fancyuploder/jquery.ui.widget.js"></script>
    <script src="assets/plugins/fancyuploder/jquery.fileupload.js"></script>
    <script src="assets/plugins/fancyuploder/jquery.iframe-transport.js"></script>
    <script src="assets/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
    <script src="assets/plugins/fancyuploder/fancy-uploader.js"></script>

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


