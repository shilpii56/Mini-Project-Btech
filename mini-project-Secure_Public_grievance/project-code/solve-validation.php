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

$type = $_POST["complain_no"];
$descr = $_POST["sol"];
$st = $_POST["status"];
$idd = $_POST["identity"];

echo "$idd";
$qu="SELECT * FROM coun_login WHERE phone= '$idd'";
 $result = mysqli_query($con,$qu);


$res= mysqli_num_rows($result);
if($res>0){
$q="UPDATE complaints 
SET 
    feedback = '$descr'
WHERE
    complain_no = '$type'
AND
feedback IS NULL";

if(!mysqli_query($con,$q)){
    die("error occured");
}

$q="UPDATE complaints 
SET 
    status = '$st'
WHERE
    complain_no = '$type'
    AND
feedback IS NULL";

if(!mysqli_query($con,$q)){
    die("error occured");
}
$q="UPDATE complaints 
SET 
    couns_id = '$idd'
WHERE
    complain_no = '$type'
    AND
feedback IS NULL";
if(!mysqli_query($con,$q)){
    die("error occured");
}
 else{
     header('location:success.html');
 }   
  
}
else
{
    
   header('location:fail.html'); 
}




 ?>