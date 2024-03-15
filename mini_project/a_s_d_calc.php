<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error)
 {

    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quantity= $_POST["re_a_litter"];
    $amount = $_POST["re_a_amount"];
    // SQL to insert data into the database
    $sql = "UPDATE re_diesel SET amount=amount+$amount,quantity=quantity-$quantity WHERE n=1"; 
    if ($conn->query($sql) === TRUE) {
        echo "<h1>". "PAYMENT HAS BEEN SUCCESSFULLY PAID TO US"."</h1>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>