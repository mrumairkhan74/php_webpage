<?php
session_start();
    $server="localhost";
    $username="root";
    $password="";
    $db="fixophones";

$conn=mysqli_connect($server,$username,$password,$db);

if(isset($_POST["save"])){
$name=$_POST['name'];
$phno=$_POST['phno'];
$bestway=$_POST['bestway'];
$time=$_POST['time'];
$date=$_POST['date'];
$device=$_POST['device'];
$pickup=$_POST['pickup'];
$problem=$_POST['problem'];
$msg=$_POST['msg'];


$query = "INSERT INTO `fixosheet`(`name`,`phno`,`pickup`,`bestway`,`time`,`date`,`device`,`problem`,`message`) VALUES('$name','$phno','$pickup','$bestway','$time','$date','$device','$problem','$msg')";

$result = mysqli_query($conn,$query);
if($result){
    $_SESSION['status']="success";
    header("Location:index.php");
}else{
  $_SESSION['status']="Error 404";
}

}




?>
