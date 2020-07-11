<?php
include("include/connection.php");
                 
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
