<?php
session_start();
include("include/connection.php");

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
    <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
    </head>
    
    <body>
        
        <div id="show"></div>
        
        <script>
            $(document).ready(function(){
                setInterval(function(){
                    $('#show').load('change.php');
                }, 3000);
            });
        </script>
    </body>
</html>