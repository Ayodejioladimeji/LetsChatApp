<?php
session_start();
include("include/connection.php");
$user_email = $_SESSION['user_email'];


                    
                    $user=$_SESSION['user_email'];
                    $get_user="select * from users where user_email='$user'";
                    $run_user=mysqli_query($con,$get_user);
                    $row=mysqli_fetch_array($run_user);

                    $user_id=$row['user_id'];
                    $user_name=$row['user_name'];


                ?>
                
                
                <?php
                    if(isset($_GET['user_name'])){
                        global $con;
                        $get_username=$_GET['user_name'];
                        
                        $get_user="select * from users where user_name='$get_username'";
                        $run_user=mysqli_query($con, $get_user);
                        $row_user=mysqli_fetch_array($run_user);

                        $username=$row_user['user_name'];
                        $user_profile_image=$row_user['user_profile'];
                    
                                        
                        
                    } 
                    
                    echo "<p>$user_name</p>";
                    
                    

$select = "select * from users_chat";
$sel = $con->query($select);
if($sel==true){
    while($row=$sel->fetch_assoc()){
        $sender = $row['sender_username'];
        $receiver = $row['receiver_username'];
        $content = $row['msg_content'];
        
        
        if($sender==$sender){
            echo "<p>$sender $content</p>";
        }
        else if($receiver==$receiver){
            echo "<p>$receiver $content</p>";
        }
    }
}



?>