<?php

session_start();
include "../../global/conn.php";
date_default_timezone_set("Asia/Kuala_Lumpur");

if (isset($_POST['adduser'])) {
  // receive all input values from the form
  $userid=rand(99999, 999999);
  $email=mysqli_real_escape_string($db, $_POST['email']);
  $fullname=mysqli_real_escape_string($db, $_POST['fullname']);
  $username=mysqli_real_escape_string($db, $_POST['username']);
  $password=mysqli_real_escape_string($db, $_POST['password']);
  $usertype=mysqli_real_escape_string($db, $_POST['usertype']);

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

    if ($user['email'] == $email) {
      echo "<script>alert('User Has Already Been Registered !');
          window.location.href='../public/user';
              </script>";      
    }  else {
      $query = "INSERT INTO `user`(`userid`, `password`, `fullname`, `username`, `email`, `usertype`) 
      VALUES 
    ('$userid','$password','$fullname','$username','$email','$usertype')";
      mysqli_query($db, $query);
      echo "<script>alert('User Has Successfully Been Registered !');
      window.location.href='../public/user';
          </script>";
    }
}

if (isset($_POST['updateuser'])) {
  // receive all input values from the form
  $userid=mysqli_real_escape_string($db, $_POST['userid']);
  $password=mysqli_real_escape_string($db, $_POST['password']);
  $fullname=mysqli_real_escape_string($db, $_POST['fullname']);
  $username=mysqli_real_escape_string($db, $_POST['username']);
  $email=mysqli_real_escape_string($db, $_POST['email']);
  $usertype=mysqli_real_escape_string($db, $_POST['usertype']);

    $query = "UPDATE `user` SET `password`='$password',`fullname`='$fullname',`username`='$username',`email`='$email',`usertype`='$usertype' WHERE userid = $userid";
    mysqli_query($db, $query);
    echo "<script>alert('User Has Successfully Been Updated !');
    window.location.href='../public/user';
        </script>";
}

if (isset($_POST['addmatch'])) {
  // receive all input values from the form
  $matchid=rand(99999, 999999);
  $team_A_name=mysqli_real_escape_string($db, $_POST['team_A_name']);
  $team_B_name=mysqli_real_escape_string($db, $_POST['team_B_name']);
  $team_A_score=mysqli_real_escape_string($db, $_POST['team_A_score']);
  $team_B_score=mysqli_real_escape_string($db, $_POST['team_B_score']);
  $date=mysqli_real_escape_string($db, $_POST['date']);
  $time=mysqli_real_escape_string($db, $_POST['time']);
  $status=mysqli_real_escape_string($db, $_POST['status']);

  $imageA = $_FILES['image_A']['name'];
  $imageB = $_FILES['image_B']['name'];
  $team_A_logo = rand(100000,99999999999).basename($imageA);
  $team_B_logo = rand(100000,99999999999).basename($imageB);
  $targetA = "../../course/".$team_A_logo;
  $targetB = "../../course/".$team_B_logo;

  // Finally, Inserting The Data
  $query = "INSERT INTO `matches`(`team_A_name`, `team_B_name`, `team_A_logo`, `team_B_logo`, `team_A_score`, `team_B_score`, `status`, `match_date`, `match_time`) 
  VALUES 
  ('$team_A_name','$team_B_name','$team_A_logo','$team_B_logo','$team_A_score','$team_B_score','$status','$date','$time')";
   $runquery = mysqli_query($db, $query);
   if (move_uploaded_file($_FILES['image_A']['tmp_name'], $targetA)) {
         echo "<script>alert('Course Has Been Successfully Added');   
         window.location.href='../public/course';
         </script>";
   }else{
   echo "<script>alert('Course Failed To Be Registered !');
   window.location.href='../public/course';
       </script>";
    }

   if (move_uploaded_file($_FILES['image_B']['tmp_name'], $targetB)) {
      echo "<script>alert('Course Has Been Successfully Added');   
      window.location.href='../public/match';
      </script>";
   }else{
    echo "<script>alert('Course Failed To Be Registered !');
    window.location.href='../public/match';
        </script>";
    }
}
if (isset($_POST['updatematch'])) {
  // receive all input values from the form
  $matchid=mysqli_real_escape_string($db, $_POST['matchid']);
  $team_A_name=mysqli_real_escape_string($db, $_POST['team_A_name']);
  $team_B_name=mysqli_real_escape_string($db, $_POST['team_B_name']);
  $team_A_score=mysqli_real_escape_string($db, $_POST['team_A_score']);
  $team_B_score=mysqli_real_escape_string($db, $_POST['team_B_score']);
  $date=mysqli_real_escape_string($db, $_POST['date']);
  $time=mysqli_real_escape_string($db, $_POST['time']);
  $status=mysqli_real_escape_string($db, $_POST['status']);
    
    $query = "UPDATE `matches` SET `team_A_name`='$team_A_name',`team_B_name`='$team_B_name',`team_A_score`='$team_A_score',`team_B_score`='$team_B_score',`match_date`='$date',`match_time`='$time',`status`='$status' WHERE matchid = $matchid";
    mysqli_query($db, $query);
    echo "<script>alert('Match Has Successfully Been Updated !');
    window.location.href='../public/match';
        </script>";
    
}


if (isset($_POST['addcourse'])) {
  // receive all input values from the form
  $lessonname=mysqli_real_escape_string($db, $_POST['lessonname']);
  $lessondesc=mysqli_real_escape_string($db, $_POST['lessondesc']);
  $lessonprice=mysqli_real_escape_string($db, $_POST['lessonprice']);
  // $startmonday=mysqli_real_escape_string($db, $_POST['startmonday']);
  // $endmonday=mysqli_real_escape_string($db, $_POST['endmonday']);
  // $starttuesday=mysqli_real_escape_string($db, $_POST['starttuesday']);
  // $endtuesday=mysqli_real_escape_string($db, $_POST['endtuesday']);
  // $startwednesday=mysqli_real_escape_string($db, $_POST['startwednesday']);
  // $endwednesday=mysqli_real_escape_string($db, $_POST['endwednesday']);
  // $startthursday=mysqli_real_escape_string($db, $_POST['startthursday']);
  // $endthursday=mysqli_real_escape_string($db, $_POST['endthursday']);
  // $startfriday=mysqli_real_escape_string($db, $_POST['startfriday']);
  // $endfriday=mysqli_real_escape_string($db, $_POST['endfriday']);
  $image = $_FILES['image']['name'];

  $lessonimg = rand(100000,99999999999).basename($image);
  $target = "../../course/".$lessonimg;
   // Finally, Inserting The Data
   $query = "INSERT INTO `lesson`(`lessonname`, `lessondesc`, `lessonimg`, `lessonprice`) 
   VALUES 
   ('$lessonname','$lessondesc','$lessonimg','$lessonprice')";
    $runquery = mysqli_query($db, $query);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
          echo "<script>alert('Course Has Been Successfully Added');
          window.location.href='../public/course';
          </script>";
    }else{
    echo "<script>alert('Course Failed To Be Registered !');
    window.location.href='../public/course';
        </script>";
      }
}

if (isset($_POST['updatecourse'])) {
  // receive all input values from the form
  $lessonid=mysqli_real_escape_string($db, $_POST['lessonid']);
  $lessonname=mysqli_real_escape_string($db, $_POST['lessonname']);
  $lessondesc=mysqli_real_escape_string($db, $_POST['lessondesc']);
  $lessonprice=mysqli_real_escape_string($db, $_POST['lessonprice']);
  // $startmonday=mysqli_real_escape_string($db, $_POST['startmonday']);
  // $endmonday=mysqli_real_escape_string($db, $_POST['endmonday']);
  // $starttuesday=mysqli_real_escape_string($db, $_POST['starttuesday']);
  // $endtuesday=mysqli_real_escape_string($db, $_POST['endtuesday']);
  // $startwednesday=mysqli_real_escape_string($db, $_POST['startwednesday']);
  // $endwednesday=mysqli_real_escape_string($db, $_POST['endwednesday']);
  // $startthursday=mysqli_real_escape_string($db, $_POST['startthursday']);
  // $endthursday=mysqli_real_escape_string($db, $_POST['endthursday']);
  // $startfriday=mysqli_real_escape_string($db, $_POST['startfriday']);
  // $endfriday=mysqli_real_escape_string($db, $_POST['endfriday']);

    $query = "UPDATE `lesson` SET `lessonname`='$lessonname',`lessondesc`='$lessondesc',`lessonprice`='$lessonprice' WHERE `lessonid`='$lessonid'";
    mysqli_query($db, $query);
    echo "<script>alert('Course Has Successfully Been Updated !');
    window.location.href='../public/course';
        </script>";

}

if (isset($_POST['updatecourseimg'])) {
  // receive all input values from the form
  $lessonid=mysqli_real_escape_string($db, $_POST['lessonid']);
  $image = $_FILES['image']['name'];

  $lessonimg = rand(100000,99999999999).basename($image);
  $target = "../../course/".$lessonimg;
   // Finally, Inserting The Data
   $query = "UPDATE `lesson` SET `lessonimg`='$lessonimg' WHERE `lessonid`='$lessonid'";
  $runquery = mysqli_query($db, $query);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
          echo "<script>alert('Course Image Has Been Successfully Updated');
          window.location.href='../public/course';
          </script>";
    }else{
    echo "<script>alert('Course Image Failed To Be Updated !');
    window.location.href='../public/course';
          </script>"; 
      }
}

?>