<?php

session_start();
include "../../global/settings.php";
include "../include/session-checker.php";

if(isset($_SESSION['userid'])){

$userid = $_SESSION['userid'];
$query = mysqli_query($db, "SELECT * FROM user WHERE userid = '$userid'");
$selectrow = mysqli_fetch_array($query);

$cartquery = mysqli_query($db, "SELECT * FROM cart WHERE userid = '$userid'");
$cartcount = mysqli_num_rows($cartquery);

}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $websitename; ?> | <?php echo $websitedesc; ?></title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="<?php echo $websitefavicon; ?>" type="image/x-icon">
<link rel="icon" href="<?php echo $websitefavicon; ?>" type="image/x-icon">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Titillium+Web:wght@300;400;600;700;900&display=swap" rel="stylesheet">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>