<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
    body{
        background-color:darkturquoise;
    }
table {
    border: 4px solid black;
    background-color: darkkhaki;
border-collapse: collapse;
width: 100%;
color: white;
font-family: monospace;
font-size: 25px;
text-align: left;
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
th {
background-color:black;
color: white;
}
tr:nth-child(even) {background-color: darkcyan;}
</style>
</head>
<body>
    
<table>
    <p style="font-family:fantasy; font-size:24px; color: black">Your History of Complains and Feedbacks</p>
<tr>
<th>Complain No.</th>
<th>Type</th>

<th>Complain</th>
    
<th>Feedback</th>
<th>Status</th>
    <th>Sent By(User_id)</th>
</tr>
<?php
  $id=$_POST['identity'];
        $conn = mysqli_connect("localhost","root","","miniproject");
        if (mysqli_connect_errno())
{
echo "Connetion attempt Failed :".mysqli_connect_error;
}
  

$qu="SELECT complain_no, type, descr, feedback, status, id FROM complaints WHERE couns_id= '$id'";
 $result = mysqli_query($conn,$qu);


$res= mysqli_num_rows($result);


if($res>0){
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["complain_no"]. "</td><td>" . $row["type"]. "</td><td>" . $row["descr"]. "</td><td>" . $row["feedback"]. "</td><td>" . $row['status'] ."</td><td>" . $row["id"]. "</td></tr>";
}
echo "</table>";
}

    else { 
       
        exit("Empty Bucket");
         }  
    ?>    
        
    </table>
    <br>
    <br>
    <br>
    <a href="counsellor-portal.html" style="font-size:22px; text-decoration: none ;">  <p class="blink blink-two" style="color:darkblue; font-family:fantasy"> << Go Back </a></p> 
       