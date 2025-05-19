<?php

include "conn.php";

date_default_timezone_set("Asia/Kuala_Lumpur");

$query = mysqli_query($db , "SELECT * FROM siteidentity");
$row = mysqli_fetch_assoc($query);

$websitename = $row['websitename'];
$websitedesc = $row['websitedesc'];
$websitelogo = "../../siteidentity/logo/".$row['websitelogo'];
$websitefavicon = "../../siteidentity/favicon/".$row['websitefavicon'];
$websitebackground = "../../siteidentity/background/".$row['websitebackground'];
$websitefooter = $row['websitefooter'];
$defaultprofilepicture = "../../siteidentity/profilepicture/defaultprofilepicture.jpg";


?>