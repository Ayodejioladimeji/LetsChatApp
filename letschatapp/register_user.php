<?php
error_reporting(0);

include("include/connection.php");
    if (isset($_POST['submit'])){
      $name= htmlentities(mysqli_real_escape_string($con,$_POST['user_name']));
      $pass= htmlentities(mysqli_real_escape_string($con,$_POST['user_pass']));
      $pass2= htmlentities(mysqli_real_escape_string($con,$_POST['user_pass2']));
      $email= htmlentities(mysqli_real_escape_string($con,$_POST['user_email']));
      $country= htmlentities(mysqli_real_escape_string($con,$_POST['user_country']));
      $gender= htmlentities(mysqli_real_escape_string($con,$_POST['user_gender']));
      $pet= htmlentities(mysqli_real_escape_string($con,$_POST['user_pet']));
    
      
      
      if(empty($name) || empty($pass) || empty($pass2) || empty($email) || empty($country) || empty($gender) || empty($pet)){
        header("location:index.php?error=emptyfields");
        exit();
        }
        
        else if(!preg_match("/^[a-zA-Z0-9]*$/", $name)){
        header("location:index.php?error=invalidusername");
        exit();
        }

        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("location:index.php?error=invalidemail");
        exit();
        }
        
        else if(strlen($pass) < 8){
            header("location:index.php?error=passworderror");
            exit();
        }

        else if($pass !== $pass2){
        header("location:index.php?error=passwordmatch");
        exit();
        }
        
        else if($name === $pet){
        header("location:index.php?error=peterror");
        exit();
        }
    
    
 
      $check_email="select * from users where user_email='$email'";
      $run_email=mysqli_query($con,$check_email);

      $check=mysqli_num_rows($run_email);

      if($check==1){
        header("location:index.php?error=emailexists");
        exit();
        }
            if($gender=="Female")
            $profile_pic="images/female.jpeg";
            else if($gender=="Male")
            $profile_pic="images/male.jpeg";

     $hashedpwd = password_hash($pass, PASSWORD_DEFAULT);
     
    $insert="insert into users values(NULL,'$name','$hashedpwd', '$email', '$profile_pic', '$country', '$gender','$pet','$log_in')";
    $query=mysqli_query($con,$insert);

    if($query){
    echo"<script>alert('Congratulations $name, your account has been created successfully')</script>";
    echo"<script>window.open('signin.php','_self')</script>";

    }
    else{
    header("location:index.php?error=accounterror");
    }


}

?>