<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
    body{
        background-color:palevioletred;
    }
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
table {
    border: 3px solid black;
border-collapse: collapse;
width: 100%;
color: black;
font-family: monospace;
font-size: 25px;
text-align: left;
    background-color:white;
}
th {
background-color:black;
color: white;
}
tr:nth-child(even) {background-color:darkkhaki;}
</style>
</head>
<body>
   <br>
	<br>
    <b> <a href="counsellor-portal.html" style="font-size:22px; text-decoration: none ;">  <p class="blink blink-two" style="color:darkblue; font-family:fantasy"> << Go back </p></a> 
    
	
    <b>
    <p style="font-size:25px; color:black; font-family:fantasy; "> Request Bucket</b>
<table>
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
if($res>0){   
echo "Type: '$type'";
echo "<br>";
echo "<br>";
$sql = "SELECT type, descr, id, complain_no FROM complaints where help='$type' and status='active'";
$result = mysqli_query($conn,$sql);
$res= mysqli_num_rows($result);
if($res>0){
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["complain_no"]. "</td><td>" . $row["type"]. "</td><td>" . $row['id'] ."</td></tr>";
}
echo "</table>";
}
}
    else { 
        header('location:fail.html');
         }  
    ?>    
  
    <br>
    <br>
       
    </table>
    <br>
      
    </table>
    <br>
	<br>
    <b>
            <br>
    Note the complain number you want to solve<br>
         <a href="solve.html" style="font-size:22px; text-decoration: none ;">  <p class="blink blink-two" style="color:darkblue; font-family:fantasy"> Pick and Solve >> </p></a> 
    
    <br></b>