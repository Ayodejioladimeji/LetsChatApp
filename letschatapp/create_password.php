<?php

include("include/connection.php");
include("create_password_connection.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Password</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="css/create_password.css">
    <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
</head>

<body oncontextmenu="return false">

    <div class="container">
        <header>


            <!-- The section of the header1 -->
            <div class="header1">
                <center>
                    <div class="logo">
                        <i class="fa fa-comments animated pulse infinite fast"></i>
                        <p>LetsChat</p>
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
            </div>

        </header>


        <!-- The section content -->
        <section>

            <center>

                <div class="middle">
                    <form action="" method="POST">
                        <table border="1" width="600" height="350">

                            <tr>
                                <td colspan="3" align="center" class="top">CREATE PASSWORD</td>
                            </tr>

                            <tr>
                                <td align="center" class="left">Provide your Email</td>
                                <td align="center" class="left"><input type="text" name="user_email"></td>
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
                                    <input type="submit" name="create" value="CREATE PASSSWORD">
                                </td>
                            </tr>

                        </table>
                    </form>
                    
                            <?php
                        
                                if(isset($_GET['error'])){
                                    
                                    if($_GET['error'] == 'emptyfield'){
                                        
                                        echo "
                                            <div class='error animated fadeInUp slow'>
                                                <p><i class='fa fa-exclamation-circle'></i>&nbsp;Cannot leave the fields empty!</p>
                                            </div>
                                         ";
                                        exit();
                                    }
                                    
                                    else if($_GET['error'] == 'lengtherror'){
                                        
                                        echo "
                                            <div class='error animated fadeInUp slow'>
                                                <p><i class='fa fa-exclamation-circle'></i>&nbsp;Password should be more than 8 characters!</p>
                                            </div>
                                         ";
                                        exit();
                                    }
                                    
                                    else if($_GET['error'] == 'matcherror'){
                                        
                                        echo "
                                            <div class='error animated fadeInUp slow'>
                                                <p><i class='fa fa-exclamation-circle'></i>&nbsp;Password does not match!</p>
                                            </div>
                                         ";
                                        exit();
                                    }
                                    
                                    else if($_GET['error'] == 'accounterror'){
                                        
                                        echo "
                                            <div class='error animated fadeInUp slow'>
                                                <p><i class='fa fa-exclamation-circle'></i>&nbsp;No account found for the provided email!</p>
                                            </div>
                                         ";
                                        exit();
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