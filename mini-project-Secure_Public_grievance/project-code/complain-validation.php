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
$user= $_POST["phone"];
$q="SELECT * FROM user_login WHERE phone= '$user'";
 $result = mysqli_query($con,$q);

$res= mysqli_num_rows($result);
if($res==1){
    
$type = $_POST["ComplainType"];
$help = $_POST["help"];
$descr = $_POST["description"];
   

$q="INSERT INTO complaints (type, help, descr, id) VALUES ('$type', '$help', '$descr', '$user')";
if(!mysqli_query($con,$q)){
    header('location:fail.html');
}
else{
     header('location:userportal.html');
}
}
else{
     header('location:fail.html');
}
 ?>