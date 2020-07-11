<?php
session_start();
include("include/connection.php");
include("change_password_connection.php");

$user = $_SESSION['user_email'];

$get_user= "select * from users where user_email='$user'";
$run_user = mysqli_query($con, $get_user);
$row= mysqli_fetch_array($run_user);

$user_name=$row['user_name'];
$user_profile=$row['user_profile'];
$user_email=$row['user_email'];
$user_gender=$row['user_gender'];
$user_country=$row['user_country'];

if(!$_SESSION['user_email']){
    echo "<script>windows.load('signin.php','_self')</script>";
}
else{

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="css/change_password.css">
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
            </div>




            <!-- The section of the header 2 -->
            <div class="header2">

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
                        <table border="1" width="600" height="350">

                            <tr>
                                <td colspan="3" align="center" class="top">CHANGE PASSWORD</td>
                            </tr>

                            <tr>
                                <td align="center" class="left">Provide your Email</td>
                                <td align="center" class="left"><input type="text" name="user_email" value=""></td>
                            </tr>

                            <tr>
                                <td align="center" class="left">Previous Password</td>
                                <td align="center" class="left"><input type="password" name="user_pass"></td>
                            </tr>

                            <tr>
                                <td align="center" class="left">Enter New Password</td>
                                <td align="center" class="left"><input type="password" name="password"></td>
                            </tr>

                            <tr>
                                <td align="center" class="left">Confirm New Password</td>
                                <td align="center" class="left"><input type="password" name="password2"></td>
                            </tr>

                            <tr>
                                <td colspan="3" align="center" class="top">
                                    <input type="submit" name="change" value="CHANGE PASSSWORD">
                                </td>
                            </tr>

                        </table>
                    </form>
                    
                            <?php
                                if(isset($_GET['error'])){

                                    if($_GET['error'] == 'email'){
                                        echo "
                                            <div class='error animated fadeInUp slow'>
                                                <p><i class='fa fa-exclamation-circle'></i>&nbsp;Provide the correct Email for this Account!</p>
                                            </div>
                                        ";
                                    }
                                    else if($_GET['error'] == 'password'){
                                        echo "
                                            <div class='error animated fadeInUp slow'>
                                                <p><i class='fa fa-exclamation-circle'></i>&nbsp;Provide the correct password for this Account!</p>
                                            </div>
                                        ";
                                    }
                                    else if($_GET['error'] == 'match'){
                                        echo "
                                            <div class='error animated fadeInUp slow'>
                                                <p><i class='fa fa-exclamation-circle'></i>&nbsp;The Password Provided does not match!</p>
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
<?php }; ?>