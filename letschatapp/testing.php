<?php
session_start();
include("include/connection.php");
// error_reporting(0);

$user_email=$_SESSION['user_email'];

if(!$_SESSION['user_email']){
    Echo"<script>window.open('signin.php','_self')</script>";
}
else{
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LetsChat</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
    
    <script>
        $(document).ready(function () {
            $('#btn').click(function () {
                $('.left').fadeToggle('slow');
            });
        });
    </script>
    
    <script>
        $(document).ready(function () {
            $('.head1-img').click(function () {
                $('.right').fadeToggle('slow');
            });
        });
    </script>
    
    <script>
        $(document).ready(function () {
            $('#bell').click(function () {
                $('#notify-box').fadeToggle('slow');
            });
        });
    </script>
    
    
</head>

<body oncontextmenu="return false">
    
      <?php
  $user=$_SESSION['user_email'];
  $get_user="select * from users where user_email='$user'";
  $run_user=mysqli_query($con,$get_user);
  $row=mysqli_fetch_array($run_user);

  $user_id=$row['user_id'];
  $user_name=$row['user_name'];


   ?>
    

    <div class="container">
        <header>


            <!-- The section of the header1 -->
            <div class="header1">
                <center>
                    <div class="logo">
                        
                        
                        <?php
                            $user = $_SESSION['user_email'];
                            $get_user="select * from users where user_email='$user'";
                            $run_user=mysqli_query($con,$get_user);
                            $row=mysqli_fetch_array($run_user);

                            $user_name = $row['user_name'];

                            echo "
                        
                        
                                <a href='home.php?user_name=$user_name'><i class='fa fa-comments animated pulse infinite fast'></i>
                                </a>
                                <p>LetsChat</p>
                        
                            ";
                        ?>
                        
                    </div>
                </center>

                <div class="search">
                    <center>
                        <div class="search-user">
                            <h4><a href="find_friends.php">Search Users</a></h4>
                        </div>
                    </center>

                    <center>
                        <div class="bell">
                            <i id="bell" class="fa fa-bell"></i>
                            <?php include("include/notify.php");?>
                        </div>
                        
                        <div id="notify-box">
                            <?php include("include/notification.php")?>
                        </div>
                    </center>
                    
                    <i class="fa fa-bars" id="btn"></i>
                    
                </div>
            </div>




            <!-- The section of the header 2 -->
            <div class="header2">
                
                 <?php
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
                    
                    
                    // The section counting the messages conversation with users
                    $total_messages="select * from users_chat where (sender_username='$user_name' AND receiver_username='$username')
                        OR (receiver_username='$user_name' AND sender_username='$username')";

                    $run_messages=mysqli_query($con, $total_messages);
                    $total = mysqli_num_rows($run_messages);
                    
                ?>

                <div class="head1">

                    <div class="head1-img">
                        <img src="<?php echo $user_profile_image?>">
                    </div>

                </div>

                <div class="head2">
                    <p class="details"><?php echo $username; ?></p>
                    <p class="message"><?php echo $total; ?> Messages</p>
                </div>

                <div class="head3">
                    <div class="date-box" class="animated fadeIn slow">
                        <div id="date"></div>
                        <div id="Myclock"></div>
                    </div>
                </div>
            </div>




            <!-- The section of the header 3 -->
            <div class="header3">
                <P>Welcome, <?php echo $user_email; ?></P>
                <h3>PROFILE VIEW</h3>
            </div>

        </header>


        <!-- The section content -->
        <section>
            <div class="left">

                <div class="fixed">

                    <div class="inside">
                        <center>
                            <i class="fa fa-envelope"></i>

                            <i class="fa fa-phone"></i>

                            <i class="fa fa-users"></i>

                            <a href="settings.php"><i class="fa fa-cogs"></i></a>
                            
                            
                                <?php
                                     if(isset($_POST['logout'])){
                                     $update_msg = mysqli_query($con, "UPDATE users SET log_in='Offline'
                                     WHERE user_name='$user_name'");
                                     Echo"<script>window.open('logout.php','_self')</script>";
                                     exit();


                                   }
                                ?>

                            <form action="" method="POST">
                                <button type="submit" name="logout" style="background:none;border:none;outline:none;">
                                    <i class="fa fa-power-off" name="logout"></i>
                                </button>
                            </form>

                        </center>
                    </div>

                </div>

                <div class="mychat">

                    <ul>

                            <?php include("include/get_users_data.php"); ?>

                    </ul>
                    

                </div>

            </div>

            <!-- The section of the middle -->
            <div class="middle">
            <?php
                    $user=$_SESSION['user_email'];
                    $get_user="select * from users where user_email='$user'";
                    $run_user=mysqli_query($con,$get_user);
                    $row=mysqli_fetch_array($run_user);

                    $user_id=$row['user_id'];
                    $user_name=$row['user_name'];


                ?>

                <div id="middle-topper" class="middle-top">
                
                    <?php
       
                       $update_msg=mysqli_query($con, "UPDATE users_chat SET msg_status='read'
                       WHERE sender_username='$username' AND receiver_username='$user_name'");

                       $sel_msg= "select * from users_chat where (sender_username='$user_name' AND receiver_username='$username') OR
                       (receiver_username='$user_name' AND sender_username='$username') ORDER by 1 ASC";
                           $run_msg = mysqli_query($con, $sel_msg);
                           
                       while ($row = mysqli_fetch_array($run_msg)) {
                           $sender_username=$row['sender_username'];
                           $receiver_username=$row['receiver_username'];
                           $msg_content = $row['msg_content'];
                           $msg_date=$row['msg_date'];

                   ?>
                   
                    
                   <ul>
                   
                   
                       <?php
                
                               if($user_name == $sender_username AND $username == $receiver_username){
                               echo "
                                   <li>
                                       <div class='right-chat'>
                                           <span>$user_name <small>$msg_date</small></span><br><br>
                                           <p>$msg_content</p>
                                       </div>
                                   </li>

                               ";
                           }
                           else if($user_name == $receiver_username AND $username == $sender_username){
                               echo "
                                   <li>
                                    <div class='left-chat'>
                                           <span>$username <small>$msg_date</small></span><br><br>
                                           <p>$msg_content</p>
                                       </div>
                                   </li>

                               ";
                           }
                        ?>
                   </ul>

                   <?php
                       }

                   ?>

                </div>


                <div class="middle-bottom">
                    <form id="message_form" method="POST">
                        <input autocomplete="off" type="text" id="title" name="$msg_content" placeholder="Start Chatting......">
                        <button type="submit" id="post" name="submit"><i class="fa fa-send"></i></button>
                        <h3 id="success"></h3>
                    </form>
                </div>


            </div>
            
            
            <!--The section of the code for text-box input-->
                 <?php
                 
                    if(isset($_POST['submit'])){

                        $msg = htmlentities($_POST['$msg_content']);
 
                        if($msg == ""){
                            echo "
                                <div class='alert alert-danger'>
                                    <strong><center>Message was unable to send </center></strong>
                                </div>

                            ";
                        }
                        

                        else if(strlen($msg) > 500){
                            echo "
                                <div class='alert alert-danger'>
                                    <strong><center>Message is too long. Use only 100 characters </center></strong>
                                </div>
                            ";
                        }

                        else{
                            $insert ="insert into users_chat(sender_username,receiver_username,msg_content,msg_status,msg_date)
                            values('$user_name','$username','$msg','unread',NOW())";

                            $run_insert = mysqli_query($con,$insert);
                            echo"<script>window.open('home.php?user_name=$username', '_self')</script>";

                        }

                    }

                ?>





            <!-- The section of the right -->
            <div class="right">
            
                        <?php
                        $user=$_SESSION['user_email'];
                        $get_user="select * from users where user_email='$user'";
                        $run_user=mysqli_query($con,$get_user);
                        $row=mysqli_fetch_array($run_user);

                        $user_id=$row['user_id'];
                        $user_profile=$row['user_profile'];
                        $user_name=$row['user_name'];
                        $user_email=$row['user_email'];
                        $user_country=$row['user_country'];
                        $user_gender=$row['user_gender'];

                    ?>


                <div class="right-top">

                    <center>
                        <div class="top-image">
                            <a href='<?php echo $user_profile; ?>'><img src="<?php echo $user_profile; ?>"></a>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <label>
                                    <i class="fa fa-camera">
                                        <input type="file" name="image">
                                    </i>
                                </label>
                                <button type="submit" class="button" name="upload">Save</button>
                            </form>
                        </div>
                    </center>


                    <?php
                if(isset($_POST['upload'])){

                    $image=$_FILES['image']['name'];
                    $image_tmp=$_FILES['image']['tmp_name'];
                    $random_number= rand(1,100);

                    if($image==''){
                    echo"
                    <script>alert('Please select profile')</script>";
                    echo"
                    <script>window.open('home.php?user_name=$user_name', '_self')</script>";
                    exit();

                    }
                    else{
                    move_uploaded_file($image_tmp, "images/$image.$random_number");
                    $update="update users set user_profile='images/$image.$random_number' where user_email='$user'";

                    $run=mysqli_query($con,$update);
                    if($run){
                    echo"
                    <script>alert('Your profile image has been updated!')</script>";
                    echo"
                    <script>window.open('home.php?user_name=$user_name', '_self')</script>";
                    }

                    }
                    }
                ?>


                </div>



                <!--  -->
                <div class="right-bottom">

                     <div class="information">
                        <span class="a">USERNAME : </span>
                        <span class="b"><?php echo $user_name; ?></span>
                    </div>

                    <div class="information">
                        <span class="a">EMAIL : </span>
                        <span class="b"><?php echo $user_email; ?></span>
                    </div>

                    <div class="information">
                        <span class="a">COUNTRY: </span>
                        <span class="b"><?php echo $user_country; ?></span>
                    </div>

                    <div class="information">
                        <span class="a">GENDER : </span>
                        <span class="b"><?php echo $user_gender; ?></span>
                    </div>

                </div>
            </div>
            
            
            
            <div class="right2">
            
                        <?php
                        $user=$_SESSION['user_email'];
                        $get_user="select * from users where user_email='$user'";
                        $run_user=mysqli_query($con,$get_user);
                        $row=mysqli_fetch_array($run_user);

                        $user_id=$row['user_id'];
                        $user_profile=$row['user_profile'];
                        $user_name=$row['user_name'];
                        $user_email=$row['user_email'];
                        $user_country=$row['user_country'];
                        $user_gender=$row['user_gender'];

                    ?>


                <div class="right-top">

                    <center>
                        <div class="top-image">
                            <a href='<?php echo $user_profile; ?>'><img src="<?php echo $user_profile; ?>"></a>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <label>
                                    <i class="fa fa-camera">
                                        <input type="file" name="image">
                                    </i>
                                </label>
                                <button type="submit" class="button" name="upload">Save</button>
                            </form>
                        </div>
                    </center>


                    <?php
                if(isset($_POST['upload'])){

                    $image=$_FILES['image']['name'];
                    $image_tmp=$_FILES['image']['tmp_name'];
                    $random_number= rand(1,100);

                    if($image==''){
                    echo"
                    <script>alert('Please select profile')</script>";
                    echo"
                    <script>window.open('home.php?user_name=$user_name', '_self')</script>";
                    exit();

                    }
                    else{
                    move_uploaded_file($image_tmp, "images/$image.$random_number");
                    $update="update users set user_profile='images/$image.$random_number' where user_email='$user'";

                    $run=mysqli_query($con,$update);
                    if($run){
                    echo"
                    <script>alert('Your profile image has been updated!')</script>";
                    echo"
                    <script>window.open('home.php?user_name=$user_name', '_self')</script>";
                    }

                    }
                    }
                ?>


                </div>



                <!--  -->
                <div class="right-bottom">

                     <div class="information">
                        <span class="a">USERNAME : </span>
                        <span class="b"><?php echo $user_name; ?></span>
                    </div>

                    <div class="information">
                        <span class="a">EMAIL : </span>
                        <span class="b"><?php echo $user_email; ?></span>
                    </div>

                    <div class="information">
                        <span class="a">COUNTRY: </span>
                        <span class="b"><?php echo $user_country; ?></span>
                    </div>

                    <div class="information">
                        <span class="a">GENDER : </span>
                        <span class="b"><?php echo $user_gender; ?></span>
                    </div>

                </div>
            </div>
            

        </section>


    </div>

    <script src="index.js"></script>
    
    <script>
        $('#middle-topper').animate({
        scrollTop: $('#middle-topper').get(0).scrollHeight
        }, 1000);
    </script>
    
    
    
    
</body>

</html>
<?php }?>