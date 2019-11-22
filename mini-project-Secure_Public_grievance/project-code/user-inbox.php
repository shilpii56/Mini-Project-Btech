<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
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
    body{
        background-color: darkseagreen;
    }
table {
    background-color: darkgoldenrod;
border-collapse: collapse;
    border: 3px solid black;
width: 100%;
color: black;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color:black;
color: white;
}
tr:nth-child(even) {background-color:white;}
</style>
</head>
<body>
    <a href="userportal.html" style="font-size:22px; text-decoration: none ;">  <p class="blink blink-two" style="color:darkblue; font-family:fantasy"> << Go Back</p></a> 
     
<table>
     <p style="font-size:24px; color:black; font-family:fantasy">Complaints with Feedbacks</p>
<tr>
<th>Complain No.</th>

<th>Complain</th>
<th>Feedback</th>
<th>Status</th>
</tr>
<?php
  $id=$_POST['identity'];
        $conn = mysqli_connect("localhost","root","","miniproject");
        if (mysqli_connect_errno())
{
echo "Connetion attempt Failed :".mysqli_connect_error;
}

echo "<br>";
echo "<br>";

$q="SELECT * FROM user_login WHERE phone= '$id'";
 $result = mysqli_query($conn,$q);

$res= mysqli_num_rows($result);
if($res==1){
$qu="SELECT complain_no, descr, feedback, status FROM complaints WHERE id= '$id' && feedback IS NOT NULL";
 $result = mysqli_query($conn,$qu);


$res= mysqli_num_rows($result);


if($res>0){
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["complain_no"]. "</td><td>" . $row["descr"]. "</td><td>" . $row["feedback"]. "</td><td>" . $row['status'] ."</td></tr>";
}
echo "</table>";
}

    else { 
       
        exit("--------------------------Empty Bucket----------------------------");
         }  }
    else{
        header('location:fail.html');
    }
    ?>    
        
    </table>
    <br>
    <br>
    