<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
    border: 3px solid black;
border-collapse: collapse;
width: 100%;
color: black;
font-family: monospace;
font-size: 25px;
text-align: left;
}
    body{
        background-color:plum;
    }
th {
background-color: black;
color: white;
}
tr {background-color: white;}
     .blink {
      animation: blinker 0.6s linear infinite;
      color: #1c87c9;
      font-size: 30px;
      font-weight: bold;
      font-family: sans-serif;
      }
      @keyframes blinker {  
      50% { opacity: 0; }
      }
      .blink-one {
      animation: blinker-one 1s linear infinite;
      }
      @keyframes blinker-one {  
      0% { opacity: 0; }
      }
      .blink-two {
      animation: blinker-two 1.4s linear infinite;
      }
      @keyframes blinker-two {  
      100% { opacity: 0; }
      }
</style>
</head>
<body>
    <br>
    <br>
     <a href="counsellor-portal.html" style="font-size:22px; text-decoration: none ;">  <p class="blink blink-two" style="color:darkblue; font-family:fantasy"> << Go Back</p></a> 
    <br>
    <br>
<table>
    <br>
    
       <p style="font-size:22px; color:black; font-family:fantasy">  Request Bucket</p>
    
<tr>
<th>Commplain No.</th>
<th>Type</th>
<th>From (UserID)</th>
</tr>
      
     
<?php
    $type= $_POST["help"];
    $id= $_POST["identity"];
        $conn = mysqli_connect("localhost","root","","miniproject");
        if (mysqli_connect_errno())
{
echo "Connetion attempt Failed :".mysqli_connect_error;
}
$qu="SELECT * FROM coun_login WHERE phone= '$id'";
 $result = mysqli_query($conn,$qu);


$res= mysqli_num_rows($result);
if($res==1){   

$sql = "SELECT type, descr, id, complain_no FROM complaints where help='$type' and status='active' and feedback IS NULL";
$result = mysqli_query($conn,$sql);
$res= mysqli_num_rows($result);
if($res>0){
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["complain_no"]. "</td><td>" . $row["type"]. "</td><td>" . $row['id'] ."</td></tr>";
}
echo "</table>";
}
    else{
        echo "--------------------------------------------Empty Bucket-------------------------------------------";
    }
    
}
    else { 
       header('location:fail.html');
         }  
    ?>
    <br>
 
    <br>
    <br>
    <br>
    <p style="font-family:monospace;font-size:16px"> Note the complain number you want to solve</p>
    
     <a href="solve.html" style="font-size:22px; text-decoration: none ;">  <p class="blink blink-two" style="color:darkblue; font-family:fantasy"> Click here to Solve >> </p></a> 
     
       
    </table>
    <br>
       

