<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
 <style type="text/css">
 table
 {
	font-family: monospace;
	width: 45%;
	font-size: 40px;
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
   text-align: center;
   color: white; 
}
 body
{
 height: 90vh;
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
<br><br><br><br><br><br><br><br><br>
<table>
<tr>
 <th>Quantity</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","project");
if($conn->connect_error)
{
 die("connection failed:".$conn->connect_error);
}
$sql="SELECT quantity from diesel_calculator";
$result=$conn->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
 echo "<tr><td>". $row["quantity"]."</td></tr>" ;
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