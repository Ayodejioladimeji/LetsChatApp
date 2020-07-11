<?php

include("include/connection.php");


  $user="select * from users";
  $run_user = mysqli_query($con, $user);

  while($row_user=mysqli_fetch_array($run_user)){
      $user_id = $row_user['user_id'];
      $user_name = $row_user['user_name'];
      $user_profile = $row_user['user_profile'];
      $login = $row_user['log_in'];


    if($login=="Online"){
      echo"
                    <div class='chat-block'>

                        <div class='chat-img'>
                            <img src='$user_profile'>
                        </div>

                        <div class='chat-details'>
                            <p class='name'><a href='home.php?user_name=$user_name'>$user_name</a></p>
                        </div>

                    </div>
      
      ";
     
    }
  }


?>