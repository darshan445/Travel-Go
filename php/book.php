<?php

require('db.php');

$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$address=$_POST['address'];
$day=$_POST['day'];
$age=$_POST['age'];

$sql="INSERT INTO book(name,email,number,address,day,age)
                    values('$name','$email',$number,'$address',$day,$age)";

                    if(mysqli_query($con,$sql)){
                        header('location:tourandtravels.php');
                    }
?>
