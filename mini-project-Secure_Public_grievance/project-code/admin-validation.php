<?php


$uname = $_POST["phone"];

$pass = $_POST["password"];

echo "$pass";
//Connect to the database
$con = mysqli_connect("localhost","root","","miniproject");

 //Make sure we connected successfully
if (mysqli_connect_errno())
{
echo "Connetion attempt Failed :".mysqli_connect_error;
}
else{
echo "Connection Status: Connected Successfully";
echo "<br>";
echo "<br>";
}

$q="SELECT * FROM admin_login WHERE phone= '$uname' and password= '$pass'";
 $result = mysqli_query($con,$q);


$res= mysqli_num_rows($result);
if($res==1){
    echo "LOGIN SUCCESSFUL :) :)";
    
    header('location:admin-portal.php');

}
else
{
    header('location:fail.html');

   
}



?>