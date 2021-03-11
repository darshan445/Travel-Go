<?php
require('db.php');
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql="INSERT INTO contact(name,email,message)
                values('$name','$email','$message')";


                if(mysqli_query($con,$sql)){
                    header('location:tourandtravels.php');
                }


?>
