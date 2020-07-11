<?php
session_start();
include("include/connection.php");
include("include/find_friends_function.php");

$user_email=$_SESSION['user_email'];

if(!isset($_SESSION['user_email'])){
    Echo "<script>window.open('signin.php', '_self')</script>";
}
else{
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Friends</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../animate.css">
    <link rel="stylesheet" href="css/find_friends.css">
    <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
    
    <script>
        $(document).ready(function () {
            $('#btn').click(function () {
                $('.left-content').fadeToggle('slow');
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
    
</head>

<body oncontextmenu="return false">

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
                            $user_profile=$row['user_profile'];

                            echo "
                        
                                <a href='../home.php?user_name=$user_name'><i class='fa fa-comments animated pulse infinite fast'></i>
                                </a>
                                <p style='font-family:allura;'>LetsChat</p>
                            ";
                        ?>
                        
                    </div>
                    
                     <i class="fa fa-bars" id="btn"></i>
                    
                </center>

            </div>




            <!-- The section of the header 2 -->
            <div class="header2">


                
    
       
                

                <div class="head1">
                    
                         <?php
                            if(isset($_GET['user_name'])){
                            global $con;
                            $get_username=$_GET['user_name'];
                        
                            $get_user="select * from users where user_name='$get_username'";
                            $run_user=mysqli_query($con, $get_user);
                            $row_user=mysqli_fetch_array($run_user);

                            $username=$row_user['user_name'];
                            $user_profile=$row_user['user_profile'];
                            }
                     
                         ?>

                    <div class="head1-img">
                        <img src='<?php echo $user_profile; ?>'>
                    </div>

                </div>

                <div class="head2">
                    <p class="details"><?php echo $user_name?></p>
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
            </div>

        </header>


        <!-- The section content -->
        <section>

            <div class="left-content">
                <div class="left-top">
                    <h3><i class="fa fa-circle" style="color:#00ff00"></i>ONLINE USERS</h3>
                </div>

                <div class="mychat">

                    <?php include("include/online_users.php"); ?>

                </div>

            </div>
            
            
    <!--The section of the middle content-->
            <div class="middle-content">
                <div class="middle-top">
                    
                    <form action="">
                    <input type="text" name="search_query" placeholder="Enter your search here!">
                    <input type="submit" name="search" value="SEARCH">
                    </form>
                    
                </div>

                <div class="middle-box">

                    <?php search_user(); ?>

                </div>
            </div>

            <div class="right-content">
                
                  
            </div>

        </section>


    </div>

    <script src="index.js"></script>
</body>

</html>
<?php }; ?>