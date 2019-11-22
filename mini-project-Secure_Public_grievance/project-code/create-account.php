<?php
$con = mysqli_connect("localhost","root","","miniproject");

 //Make sure we connected successfully
if (mysqli_connect_errno())
{
echo "Connetion attempt Failed :".mysqli_connect_error;
}
else{
echo "Connection Status: Connected Successfully";
}

$uname = $_POST["phone"];

$pass = $_POST["password"];
echo "$uname";
$q="INSERT INTO user_login (phone, password) VALUES ('$uname', '$pass')";
if(!mysqli_query($con,$q)){
     header('location:fail.html');
}
else{
    header('location:user_login.html');
}
 
 