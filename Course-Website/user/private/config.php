<?php

session_start();
include "../../global/conn.php";

if(isset($_POST['login'])) {
  
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // SELECTING USER DATA FROM DATABASE //
    $sql="SELECT * FROM user WHERE email='$email' AND password ='$password' ";
    $result=mysqli_query($db,$sql);  
    $row=mysqli_fetch_assoc($result);

        if ($row['usertype'] == "0") 
        {

          $_SESSION['userid'] = $row["userid"];
          header('location: ../public/');
  
      } elseif($row['usertype'] == "1"){

        $_SESSION['adminid'] = $row["userid"];
        header('location: ../../admin');

    } else {

      echo "<script>alert('Your Password and User ID Combination Is Incorrect !');
            window.location.href = '../public/login';
            </script>";
                
    }
          
  }


if(isset($_POST['register'])) {
  
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $username = mysqli_real_escape_string($db, $_POST['username']);

    $hashed_password = password_hash($raw_password, PASSWORD_DEFAULT);

    $sql="SELECT * FROM user WHERE email='$email'";
    $result=mysqli_query($db,$sql);  
    $res=mysqli_num_rows($result);

    if ($res) 
        {

          echo "<script>alert('Your Email Have Already Been Registered In Our Database!');
          window.location.href = '../public/register';
          </script>";
  
      } else {

        $query = "INSERT INTO `user`(`password`, `fullname`, `username`, `email`) VALUES ('$hashed_password','$fullname','$username','$email')";
        $runquery = mysqli_query($db,$query);
        echo "<script>alert('You Have Successfully Register !');
        window.location.href = '../public/login';
        </script>";
          
    }          
  }

if(isset($_POST['updateprofile'])) {
  
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $userid = mysqli_real_escape_string($db, $_POST['userid']);

    $update = mysqli_query($db, "UPDATE `user` SET `password`='$password',`fullname`='$fullname',`username`='$username',`email`='$email' WHERE `userid`='$userid'");
    echo "<script>alert('You Have Successfully Updated Your Profile !');
        window.location.href = '../public/edit-profile';
        </script>";
  }
    


?>