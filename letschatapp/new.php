<?php

include("include/connection.php");

    $user = $_POST['user_name'];
    $pass = $_POST['user_pass'];
    $email = $_POST['user_email'];

    
    
    $stmt = $con->prepare("INSERT INTO user(user_name,user_pass,user_email) VALUES(?,?,?)");
    
    $stmt->bind_param("sss", $user,$pass,$email);
    
    if($stmt->execute()){
        echo "success";
    }
    else{
        echo "failure";
    }