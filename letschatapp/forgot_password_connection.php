<?php
session_start();
include("include/connection.php");


        if(isset($_POST["forgot"])){
            
            $email= htmlentities(mysqli_real_escape_string($con,$_POST['user_email']));
            $user_pet =htmlentities(mysqli_real_escape_string($con,$_POST['user_pet']));
            
            
            if($email == ''){
                 header("location:forgot_password.php?error=emptyfield");
                 exit();
            }
            else if($user_pet == ''){
                 header("location:forgot_password.php?error=emptyfield");
                 exit();
            }
            
            
            // $user=$_SESSION['user_email'];
            $get_user="select * from users where user_email='$email'";
            $run_user=mysqli_query($con,$get_user);
            $row=mysqli_fetch_array($run_user);

            $user_id=$row['user_id'];
            $user_email=$row['user_email'];
            $pets_name = $row['pets_name'];
            
            if($email != $user_email){
                
                header("location:forgot_password.php?error=emailerror");
            }
            else if($user_pet != $pets_name){
                header("location:forgot_password.php?error=peterror");
            }
            else{
                
                echo "<script>alert('Go ahead and Create your New Account Password')</script>";
                echo "<script>window.open('create_password.php','_self')</script>"; 
            }    
                
            
        }
   
?>