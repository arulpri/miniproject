<?php

$conn =mysqli_connect("localhost","root","","project");

// Check the connection
if ($conn->connect_error)
 {

    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quantity = $_POST["re_a_litter"];
    $amount = $_POST["re_a_amount"];
    // SQL to insert data into the database
    $sql = "UPDATE re_diesel SET amount=amount-$amount,quantity=quantity+$quantity WHERE n=1"; 
    if ($conn->query($sql) === TRUE) {
        echo "<h1>". "PAYMENT HAS BEEN SUCCESSFULLY PAID TO YOU"."</h1>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>