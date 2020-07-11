<?php
// $con=mysqli_connect("localhost","id14098968_root","Ayodejioladimeji1!","id14098968_layochat") or die ("Connection was not established");


$servername = "localhost";
$dbusername = "id14110111_root";
$dbpassword = "Ayodejioladimeji1!";
$dbname = "id14110111_letschatapp";

$con = new mysqli($servername,$dbusername,$dbpassword,$dbname);

if($con->connect_error){
    die("connection failed" .$con->connect_error);
}
else{
    // echo "connection successful";
}


?>