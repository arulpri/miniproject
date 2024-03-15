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
 body
{
height: 100%;
width:100%;
display: flex;
justify-content: center;
align-items: center;
</style>
</head>
<body>
<table>
<tr>
<th>Quantity</th>
<th>Amount</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","project");
if($conn->connect_error)
{
 die("connection failed:".$conn->connect_error);
}
$sql="SELECT * FROM re_s_petrol ";
$result=$conn->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
 echo "<tr><td>". $row["quantity"]. "</td><td>". $row["amount"]. "</td></tr>";
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
