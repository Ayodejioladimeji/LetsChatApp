<?php
// session_start();
include("include/connection.php");


if(isset($_POST['create'])){

    $email = htmlentities(mysqli_real_escape_string($con,$_POST['user_email']));
    $password = htmlentities(mysqli_real_escape_string($con,$_POST['password']));
    $password2 = htmlentities(mysqli_real_escape_string($con,$_POST['password2']));
        
        if($email == ''){
            header("location:create_password.php?error=emptyfield");
            exit();
        }
         
        else if($password == ''){
            header("location:create_password.php?error=emptyfield");
            exit();
        }
        else if($password != $password2){
            header("location:create_password.php?error=matcherror");
            exit();
        }
        else if(strlen($password) < 8){
            header("location:create_password.php?error=lengtherror");
            exit();
        }
        
        else{
      

            $select = "SELECT * FROM users WHERE user_email='$email'";
            $result = $con->query($select);
            if($result->num_rows > 0){

                $update = "UPDATE users SET user_pass='$password' WHERE user_email='$email'";
                $up = $con->query($update);
                if($up==true){
                
                    echo "<script>alert('Go Ahead and Sign In. ')</script> ";
                    echo "<script>window.open('signin.php','_self')</script>";
                }

            }
            else{
            header("location:create_password.php?error=accounterror");
            }
        }

}
?>