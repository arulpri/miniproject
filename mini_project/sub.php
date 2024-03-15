<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="project";
$db=new mysqli($servername,$username,$password,$dbname);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
// Retrieve user input
$mngrname= $_POST['mngrname'];
$emplid = $_POST['emplid'];

    // Fetch user from the database
    $query = "SELECT * FROM pays WHERE mngrname = '$mngrid' AND emplid= '$emplid'";
    $result = $db->query($query);

    if ($result->num_rows>0) {
        // User is authenticated
        $_SESSION['mngrname'] = $mngrname;
		$_SESSION['emplid'] = $emplid;
        header("Location:saras.html"); // Redirect to a dashboard or welcome page
        exit();
    } else {
        // Authentication failed
        echo "Invalid username or password.";
    }
}
?>
