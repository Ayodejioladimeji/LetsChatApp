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
    <!--<link rel="stylesheet" href="css/style.css">-->
    <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
</head>

<body oncontextmenu="return false">
    <form method="POST" action="home_connection.php" id="fom">
        <input type="text" id="msg" name="msg_content" placeholder="start sending"><br><br>
        <button>Submit</button>
    </form>
    <div id="result"></div>
    
    <script>
        $("form").submit(function(e){
            e.preventDefault();
            
            $.post(
                    'home_connection.php',
                    $("form :input").serializeArray()
                    ,
                
                function(result){
                    if(result == "success"){
                        $("#result").html("values Inserted");
                    }
                    else{
                        $("#result").html("Error occured");
                    }
                }
            
            );
            // document.getElementById("fom").reset();
        });
    </script>
    
    
</body>
</html>