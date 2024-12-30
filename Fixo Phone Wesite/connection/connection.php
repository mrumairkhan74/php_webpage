<?php
$server = "localhost";
$username = "root";
$pass = "";
$database="fixophones";

$conn = new mysqli($server,$username,$pass,$database);
if(($conn->connect_errno)){
    echo 'Database Error';
}else{
echo 'Database Connected Successfully';
}


?>