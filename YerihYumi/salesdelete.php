<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "yerihsales";

$connection = new mysqli($localhost, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Correct the variable name to match the one used in the SQL query
$salesid = $_POST['userid'];

$sql = "DELETE FROM sales WHERE salesid='$salesid'";

if ($connection->query($sql) === TRUE) {
    header('Location: sales.php');
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>
