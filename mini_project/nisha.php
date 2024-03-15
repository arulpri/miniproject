<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
 <style type="text/css">
 table
 {
font-family: monospace;
width: 80%;
font-size: 20px;
margin-left: 3%;
margin-bottom: 35%;
}
th
{
width: 30%;
background-color: olive;
color: gold;
 }
 td
 {
text-align: flex;
color: white;
}
a
{
font-size:30 px;
color:white;
padding: 20px;
}
 body
{
height: 100%;
width:100%;
display: flex;
justify-content: center;
align-items: center;
background-image: url("footprint01.jpg");
background-size: cover;
}
</style>
</head>
<body>
<table>
<div class="options-container">
     <a href="homepage_petrol.html"
class="option-button">Home</a>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Emp Id</th>
<th> DOB </th>
<th>Gender</th>
<th>Email-id</th>
<th>Phone No</th>
<th>Address</th>
<th>Postion</th>
<th>Shift</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","project");
if($conn->connect_error)
{
 die("connection failed:".$conn->connect_error);
}
$sql="SELECT * FROM emp_details ";
$result=$conn->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
 echo "<tr><td>". $row["f_name"]. "</td><td>". $row["l_name"]. "</td><td>".  $row["emp_id"]. "</td><td>".$row["dob"]."</td><td>".$row["gender"]."</td><td>".$row["email_id"]."</td><td>".$row["phone_no"]."</td><td>".$row["emp_address"]."</td><td>".$row["emp_position"]."</td><td>".$row["emp_shift"]."</td></tr>";
}
echo "</table>";
}
else
{
 echo "0 result";
}
 $conn->close();
?>  
</body>
</html>
