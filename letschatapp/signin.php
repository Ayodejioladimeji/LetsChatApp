<?php
include("signin_user.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="animate.css">
    <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
    <link rel="stylesheet" href="css/signin.css">

</head>

<body>
    <div id="main">

        <!-- The container of the page -->
        <div class="container">
            <div class="content">
                <div class="left">

                    <!-- The section of the color designs -->
                    <div class="color1"></div>
                    <div class="color2"></div>
                    <div class="color3"></div>
                    <div class="color4"></div>
                    <div class="color5"></div>
                    <div class="color6"></div>


                    <div class="logo">
                        <i class="fa fa-comments animated pulse infinite fast"></i>
                        <p>LetsChat</p>
                    </div>

                    <div class="welcome">
                        <p class="animated slideInDown slower">Welcome to<br>&nbsp;&nbsp;&nbsp;<span>LetsChat...</span></p>

                        <small class="connected animated fadeInLeft slower">To keep connected with us<br>
                            Please Login with your personal Info.
                        </small>

                        <div class="login">
                            <h4 class="animated bounce slower"><a href="index.php">REGISTER</a></h4>
                        </div>

                    </div>
                    
                    
                    <div class="portfolio">
                        <small>
                            Designed & Developed By :
                        </small>
                                            <span style="color:yellow">L</span>
                                            <span style="color:green">A</span>
                                            <span style="color:#00ff00">Y</span>
                                            <span style="color:blue">O</span>
                                            <span style="color:orange">B</span>
                                            <span style="color:violet">R</span>
                                            <span style="color:purple">I</span>
                                            <span style="color:pink">G</span>
                                            <span style="color:maroon">H</span>
                                            <span style="color:white">T</span>
                        
                    </div>



                </div>

                <!--<div class="right">-->
                <!--    <div class="right-contain">-->
                <!--        <div class="right-top">-->

                <!--            <div class="click">-->
                <!--                <p class="animated fadeIn infinite slower">Click the icon to Login</p>-->
                <!--            </div>-->

                <!--            <i id="click" class="fa fa-arrow-circle-down animated bounce infinite slow"></i>-->

                <!--        </div>-->


                         <!--the section of the right bottom -->
                         
                <!--        <div class="right-bottom">-->
                <!--            <p class="explore animated fadeInRight slower">Explore Your Search</p>-->
                <!--            <p class="meet animated fadeInUp slower">Meet New People</p>-->

                <!--            <p class="join animated fadeIn slower">Join Our Community</p>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->


                <div class="login-contain">

                    <form action="" method="POST">
                        <div class="log">
                            <h3 class="animated fadeInRight slower">Login to continue</h3>
                        </div>

                        <div class="form-details">
                            <i class="fa fa-user"></i>
                            <input autocomplete="off" type="text" name="email" id="email"
                                placeholder="Write your Email">
                        </div>

                        <div class="form-details">
                            <i class="fa fa-lock"></i>
                            <input type="password" name="pass" id="pass" placeholder="************">
                        </div>

                        <div class="forgot">
                            <p>Forgot Password?<i class="fa fa-key"></i><a href="forgot_password.php">&nbsp; Click here</a>
                            </p>
                        </div>

                        <input type="submit" value="Continue" name="submit">

                    </form>
                    
                        
                        <?php
                        
                        if(isset($_GET['error'])){
                            
                            if($_GET['error'] == 'emailerror'){
                                echo "
                             <div class='error animated fadeInUp slow'>
                                <p><i class='fa fa-exclamation-circle'></i>&nbsp;Unable to confirm email!</p>
                             </div>
                            ";
                            exit();
                            }
                            
                            else if($_GET['error'] == 'passworderror'){
                                echo "
                             <div class='error animated fadeInUp slow'>
                                <p><i class='fa fa-exclamation-circle'></i>&nbsp;Unable to confirm password!</p>
                             </div>
                            ";
                            exit();
                            }
                            
                            else if($_GET['error'] == 'nouser'){
                                echo "
                             <div class='error animated fadeInUp slow'>
                                <p><i class='fa fa-exclamation-circle'></i>&nbsp; No user found!</p>
                             </div>
                            ";
                            exit();
                            }
                            
                        }
                        
                        
                        
                        ?>

                </div>

            </div>
        </div>
    </div>
</body>

</html>