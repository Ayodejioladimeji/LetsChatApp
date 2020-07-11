<?php
include("include/connection.php");


           $user = $_SESSION['user_email'];
           $get_user= "select * from users where user_email='$user'";
           $run_user = mysqli_query($con, $get_user);
           $row= mysqli_fetch_array($run_user);
   
           $user_name=$row['user_name'];
           $user_pass=$row['user_pass'];
           $user_email=$row['user_email'];
           $user_profile=$row['user_profile'];
           $user_country=$row['user_country'];
           $user_gender=$row['user_gender'];
   


if(isset($_POST['update'])){

    $user_name=htmlentities($_POST['user_name']);
    $user_email=htmlentities($_POST['user_email']);
    $user_gender=htmlentities($_POST['user_gender']);
    $user_country=htmlentities($_POST['user_country']);
    
    if($user_name == ''){
        header("location:settings.php?error=error");
        exit();
    }
     else if($user_email == ''){
        header("location:settings.php?error=error");
        exit();
    }
    else if($user_gender == ''){
        header("location:settings.php?error=error");
        exit();
    }
    else if($user_country == ''){
        header("location:settings.php?error=error");
        exit();
    }
    

    $update="update users set user_name='$user_name', user_email='$user_email',
    user_country='$user_country',user_gender='$user_gender' where user_email='$user'";

    $run=mysqli_query($con,$update);

    if($run){
        echo "<script>alert('Account Updated successfully')</script>";
      echo "<script>window.open('settings.php','_self')</script>";
    }
    else{
        header("location:settings.php?error=settingserror");
    }
  }

?>