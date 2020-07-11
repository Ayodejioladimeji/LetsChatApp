<?php
session_start();
include("include/connection.php");
include("settings_connection.php");

$user = $_SESSION['user_email'];

$get_user= "select * from users where user_email='$user'";
$run_user = mysqli_query($con, $get_user);
$row= mysqli_fetch_array($run_user);

$user_name=$row['user_name'];
$user_profile=$row['user_profile'];
$user_email=$row['user_email'];
$user_gender=$row['user_gender'];
$user_country=$row['user_country'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account Settings</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="css/settings.css">
    <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
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
                            <h4><a href="search.php">Add New Users</a></h4>
                        </div>
                    </center>

                    <center>
                        <div class="online-user">
                            <h4><a href="online.php">Online Users</a></h3>
                        </div>
                    </center>
                </div>
            </div>




            <!-- The section of the header 2 -->
            <div class="header2">

                <div class="head1">

                    <div class="head1-img">
                        <img src="<?php echo $user_profile; ?>">
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

            <center>

                <div class="middle">
                    <form action="" method="POST">
                        <table border="1" width="800" height="430">

                            <tr>
                                <td colspan="3" align="center" class="top">ACCOUNT SETTINGS</td>
                            </tr>

                            <tr>
                                <td align="center" class="left">Username</td>
                                <td align="center" class="left"><input type="text" name="user_name"
                                        value="<?php echo $user_name; ?>"></td>
                            </tr>

                            <tr>
                                <td align="center" class="left">Email</td>
                                <td align="center" class="left"><input type="text" name="user_email"
                                        value="<?php echo $user_email; ?>"></td>
                            </tr>

                            <tr>
                                <td align="center" class="left">country</td>
                                <td align="center" class="left"><input type="text" name="user_country"
                                        value="<?php echo $user_country; ?>"></td>
                            </tr>

                            <tr>
                                <td align="center" class="left">Gender</td>
                                <td align="center" class="left"><input type="text" name="user_gender"
                                        value="<?php echo $user_gender; ?>"></td>
                            </tr>

                            <tr>
                                <td align="center" class="left">Change Password</td>
                                <td class="left">
                                    <p><a href="change_password.php">change password</a></p>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="3" align="center" class="top">
                                    <input type="submit" name="update" value="UPDATE PROFILE">
                                </td>
                            </tr>

                        </table>
                    </form>
                    
                    <?php
                    
                    if(isset($_GET['error'])){
                        
                        if($_GET['error'] == 'error'){
                            echo "
                                    <div class='error animated fadeInUp slow'>
                                        <p><i class='fa fa-exclamation-circle'></i>&nbsp;Cannot leave fields empty!</p>
                                    </div>
                            ";
                        }
                        else if($_GET['error'] == 'settingserror'){
                            echo "
                                    <div class='error animated fadeInUp slow'>
                                        <p><i class='fa fa-exclamation-circle'></i>&nbsp;Cannot update Account!</p>
                                    </div>
                            ";
                        }
                        
                    }
                    
                    ?>

                </div>
            </center>

        </section>


    </div>

    <script src="index.js"></script>
</body>

</html>