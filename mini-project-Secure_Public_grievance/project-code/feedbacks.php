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

$use = $_POST["useful"];
$idd = $_POST["id"];
$imp = $_POST["yesorno"];
$rem = $_POST["comments"];
$easy=$_POST["ease"];
echo "$use";
echo "$idd";
echo "$imp";
echo "$rem";
echo "$easy";

$q="INSERT into feedbbacks (user_id, review,improvement_needed, easy_to_use, remarks) VALUES ('$idd','$use','$imp','$easy','$rem')";
  

if(!mysqli_query($con,$q)){
     header('location:fail.html');
}

else{
     header('location:success.html');
}

 ?>