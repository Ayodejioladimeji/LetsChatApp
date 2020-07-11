<?php

include("include/connection.php");
            
              $user=$_SESSION['user_email'];
             $get_user="select * from users where user_email='$user'";
             $run_user=mysqli_query($con,$get_user);
             $row=mysqli_fetch_array($run_user);

             $user_id=$row['user_id'];
             $user_name=$row['user_name'];
               

                    if(isset($_GET['user_name'])){
                        global $con;
                        $get_username=$_GET['user_name'];
                        
                        $get_user="select * from users where user_name='$get_username'";
                        $run_user=mysqli_query($con, $get_user);
                        $row_user=mysqli_fetch_array($run_user);

                        $username=$row_user['user_name'];
                        $user_profile_image=$row_user['user_profile'];
                    }
                    


  $user="select * from users_chat where msg_status='unread'";
  $run_user = mysqli_query($con, $user);

  while($row_user=mysqli_fetch_array($run_user)){
      $msg_id = $row_user['msg_id'];
      $msg_status = $row_user['msg_status'];
      $sender = $row_user['sender_username'];
      $receiver = $row_user['receiver_username'];
    
            

    if($msg_status=="unread" && $receiver==$user_name){

      echo "<i class='fa fa-exclamation-circle'></i>";
    }
    
    else if($msg_status=="read"){
      echo"<p></p>";
    }
    
  }






 ?>