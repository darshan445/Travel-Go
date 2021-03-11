<?php
session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="tour and travles";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    echo "connection failed".mysqli_connect_error();
}
else{
    echo "connection successfully";
}
$email=$_POST['email'];
$password=$_POST['password'];

$q="select * from signin where email='$email'&& password='$password'";
$result=mysqli_query($conn,$q);
$num=mysqli_num_rows($result);

if($num==1){
    $_SESSION['email']=$email;
    header('location:tourandtravels.php');
}
else{
    header('location:login.php');
}
?>
