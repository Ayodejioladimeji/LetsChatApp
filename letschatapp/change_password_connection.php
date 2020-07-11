<?php
include("include/connection.php");



        if(isset($_POST['change'])){
            
            $email= htmlentities(mysqli_real_escape_string($con,$_POST['user_email']));
            $old_password = htmlentities(mysqli_real_escape_string($con,$_POST['user_pass']));
            $new_password = htmlentities(mysqli_real_escape_string($con,$_POST['password']));
            $new_password2 = htmlentities(mysqli_real_escape_string($con,$_POST['password2']));
            
            
            $user = $_SESSION['user_email'];
            $get_user= "select * from users where user_email='$user'";
            $run_user = mysqli_query($con, $get_user);
            $row= mysqli_fetch_array($run_user);
   
                $user_name=$row['user_name'];
                $user_pass=$row['user_pass'];
                $user_email=$row['user_email'];
              
            if($email != $user_email){
                header("location:change_password.php?error=email&user_email=".$email);
            }
            else if($old_password != $user_pass){
                header("location:change_password.php?error=password&user_email=".$email);
            }
            else if($new_password != $new_password2){
                header("location:change_password.php?error=match&user_email=".$email);
            }
            
            else{
                    $update="update users set user_pass='$new_password' WHERE user_email='$email'";

                    $run=mysqli_query($con,$update);

                    if($run){
                        echo "<script>alert('Password Changed successfully')</script>";
                        echo "<script>window.open('change_password.php','_self')</script>";
                    }
                    
            }
            
        }
   
?>