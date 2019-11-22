<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
    body{
        background-color: whitesmoke;
    }  
table {
    background-color:palevioletred;
border-collapse: collapse;
width: 100%;
color: black;
font-family: monospace;
font-size: 25px;
text-align: left;
    border: 3px solid black;
}
th {
background-color:black;
color: white;
}
tr:nth-child(even) {background-color:whitesmoke}
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
    <b>
    <a href="admin_login.html" style="font-size:30px; font-family:fantasy,color:darkblue; text-decoration:none;" class="blink blink-two" > << Click here to Log out</a><br><br>
    <br></b>
       
<table>
     <p style="font-size:28px; color:darkblue; font-family:fantasy">Total Valid Request Bucket</p>
<tr>
<th>No.</th>
<th>Complain Type</th>
<th>Solution Type</th>
<th>Description</th>
<th>Sent From( UserID)</th>
<th>Status</th>
<th>Solution</th>
<th>Seen by( Counsellor)</th>
</tr>
<?php
$conn = mysqli_connect("localhost","root","","miniproject");
// Check connection
if (mysqli_connect_errno())
{
echo "Connetion attempt Failed :".mysqli_connect_error;
}
else{
  
     $sql = "DELETE FROM complaints WHERE id= '0'";
$result = mysqli_query($conn,$sql);
$sql = "SELECT complain_no, type, feedback, status, help, descr, id, couns_id FROM complaints";
$result = mysqli_query($conn,$sql);
$res= mysqli_num_rows($result);
if($res>0){
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["complain_no"]. "</td><td>" . $row["type"]. "</td><td>" . $row["help"] . "</td><td>"
. $row["descr"]. "</td><td>" . $row['id'] ."</td><td>" . $row["status"]. "</td><td>" . $row["feedback"]. "</td><td>" . $row["couns_id"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
}
 ?>
    
    </table>
    
    <table>
        <br>
        <br>
        <br>
        <p style="font-size:24px; color:black; font-family:fantasy">1. NGO Request Bucket</p>
<tr>
<th>Complain_No.</th>
<th>Complain Type</th>
<th>Description</th>
<th>Sent From( UserID)</th>
    <th>Status</th>
<th>Solution</th>
    <th>Seen by( Counsellor)</th>
</tr>
        <?php
     
        
        $conn = mysqli_connect("localhost","root","","miniproject");
        if (mysqli_connect_errno())
{
echo "Connetion attempt Failed :".mysqli_connect_error;
}

else{
$sql = "SELECT  feedback, status,complain_no, type, descr, id, couns_id FROM complaints where help='NGO'";
$result = mysqli_query($conn,$sql);
$res= mysqli_num_rows($result);
if($res>0){
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["complain_no"]. "</td><td>" . $row["type"]. "</td><td>"
. $row["descr"]. "</td><td>" . $row['id'] ."</td><td>" . $row["status"]. "</td><td>" . $row["feedback"]. "</td><td>" . $row["couns_id"]. "</td></tr>";
}
echo "</table>";
} 
}?>
       </table>
    
    <table>
        
        <br>
        <br>
        <br>
        <p style="font-size:24px; color:black; font-family:fantasy">2.  Environmental Request Bucket</p>
<tr>
<th>Complain_No.</th>
<th>Complain Type</th>
<th>Description</th>
<th>Sent From( UserID)</th>
    <th>Status</th>
<th>Solution</th>
    <th>Seen by( Counsellor)</th>
</tr> 
       
        <?php
        $conn = mysqli_connect("localhost","root","","miniproject");
        if (mysqli_connect_errno())
{
echo "Error";
}
else{

$sql = "SELECT complain_no, type, descr, feedback, status, id, couns_id FROM complaints where help='EVS'";
$result = mysqli_query($conn,$sql);
$res= mysqli_num_rows($result);
if($res>0){
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["complain_no"]. "</td><td>" . $row["type"]. "</td><td>"
. $row["descr"]. "</td><td>" . $row['id'] ."</td><td>" . $row["status"]. "</td><td>" . $row["feedback"]. "</td><td>" . $row["couns_id"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }  
}
?>
     
</table>
        
        <table>
            <br>
        <br>
        <br>
        <p style="font-size:24px; color:black; font-family:fantasy">3.  Civil Request Bucket</p>
<tr>
<th>Complain_No.</th>
<th>Complain Type</th>
<th>Description</th>
<th>Sent From( UserID)</th>
<th>Status</th>
<th>Solution</th>
    <th>Seen by( Counsellor)</th>
            </tr>
        <?php
        $conn = mysqli_connect("localhost","root","","miniproject");
        if (mysqli_connect_errno())
{
echo "Connetion attempt Failed :".mysqli_connect_error;
}
else{
   

$sql = "SELECT complain_no, type, feedback, status, descr, id, couns_id FROM complaints where help='civil'";
$result = mysqli_query($conn,$sql);
$res= mysqli_num_rows($result);
if($res>0){
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["complain_no"]. "</td><td>" . $row["type"]. "</td><td>"
. $row["descr"]. "</td><td>" . $row['id'] ."</td><td>" . $row["status"]. "</td><td>" . $row["feedback"]. "</td><td>" . $row["couns_id"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }  }
            ?>
    </table>
            <table>
                <br>
        <br>
        <br>
        <p style="font-size:24px; color:black; font-family:fantasy">4. Medical Request Bucket</p>
<tr>
<th>Complain_No.</th>
<th>Complain Type</th>
<th>Description</th>
<th>Sent From( UserID)</th>
<th>Status</th>
<th>Solution</th>
    <th>Seen by( Counsellor)</th>
                </tr>
        <?php
        $conn = mysqli_connect("localhost","root","","miniproject");
        if (mysqli_connect_errno())
{
echo "Connetion attempt Failed :".mysqli_connect_error;
}
else{
   

$sql = "SELECT  feedback, status,complain_no, type, descr, id, couns_id FROM complaints where help='Medical'";
$result = mysqli_query($conn,$sql);
$res= mysqli_num_rows($result);
if($res>0){
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["complain_no"]. "</td><td>" . $row["type"]. "</td><td>"
. $row["descr"]. "</td><td>" . $row['id'] ."</td><td>" . $row["status"]. "</td><td>" . $row["feedback"]. "</td><td>" . $row["couns_id"]. "</td></tr>";
}
echo "</table>";
    } else { echo "0 results"; }  }
                ?>
                
    </table>     
         <table>
             <br>
        <br>
        <br>
        <p style="font-size:24px; color:black; font-family:fantasy">5.Counselling Request Bucket</p>
<tr>
<th>Complain_No.</th>
<th>Complain Type</th>
<th>Description</th>
<th>Sent From( UserID)</th>
    <th>Status</th>
<th>Solution</th>
    <th>Seen by( Counsellor)</th>
</tr>
        <?php
     
        
        $conn = mysqli_connect("localhost","root","","miniproject");
        if (mysqli_connect_errno())
{
echo "Connetion attempt Failed :".mysqli_connect_error;
}

else{

$sql = "SELECT  feedback, status,complain_no, type, descr, id, couns_id FROM complaints where help='Counselling'";
$result = mysqli_query($conn,$sql);
$res= mysqli_num_rows($result);
if($res>0){
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["complain_no"]. "</td><td>" . $row["type"]. "</td><td>"
. $row["descr"]. "</td><td>" . $row['id'] ."</td><td>" . $row["status"]. "</td><td>" . $row["feedback"]. "</td><td>" . $row["couns_id"]. "</td></tr>";
}
echo "</table>";
} }  ?>
       </table> 
                    <table>
                        <br>
        <br>
        <br>
        <p style="font-size:28px; color:darkblue; font-family:fantasy"> Feedback Bucket</p>
<tr>
<th>User_Id</th>
<th>Rating</th>
<th>Improvement Needed</th>
<th>Easy-to-use</th>
    <th>Remarks</th>

</tr>
        <?php
     
        
        $conn = mysqli_connect("localhost","root","","miniproject");
        if (mysqli_connect_errno())
{
echo "Connetion attempt Failed :".mysqli_connect_error;
}

    

 $sql = "DELETE FROM feedbbacks WHERE user_id= '0'";
$result = mysqli_query($conn,$sql);

$sql = "SELECT  user_id, review, improvement_needed, easy_to_use, remarks FROM feedbbacks";
$result = mysqli_query($conn,$sql);
$res= mysqli_num_rows($result);
if($res>0){
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["user_id"]. "</td><td>" . $row["review"]. "</td><td>"
. $row["improvement_needed"]. "</td><td>" . $row['easy_to_use'] ."</td><td>" . $row["remarks"]. "</td></tr>";
}
echo "</table>";
}   ?>
       </table>           
                
</body>
</html>