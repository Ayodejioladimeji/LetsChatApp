<?php
session_start();
include("include/connection.php");

  if(isset($_POST['submit'])){
      
    $email= htmlentities(mysqli_real_escape_string($con,$_POST['email']));
    $pass= htmlentities(mysqli_real_escape_string($con,$_POST['pass']));
    
    
    if($email == ''){
        header("location:signin.php?error=emailerror");
        exit();
    }
    else if($pass == ''){
        header("location:signin.php?error=passerror");
        exit();
    }
    
    
    $select_user="select * from users where user_email='$email' AND user_pass='$pass'";
    // $query = mysqli_query($con, $select_user);
    // $check_user=mysqli_num_rows($query);
    // $row = mysqli_fetch_array($query);
    
    $sel = $con->query($select_user);
    if($sel==true){

            $update_msg=mysqli_query($con, "UPDATE users SET log_in='Online' WHERE user_email='$email'");
            
            $_SESSION['user_email']=$email;
            
            $user= $_SESSION['user_email'];
            $get_user ="select * from users where user_email='$user'";
            $run_user= mysqli_query($con, $get_user);
            $row= mysqli_fetch_array($run_user);

            $user_name=$row['user_name'];

            echo"<script>window.open('home.php?user_name=$user_name','_self')</script>";
    }
    else{
        header("location:signin.php?error=nouser");
    }
    
}
?>