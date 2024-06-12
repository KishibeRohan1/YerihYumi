<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "yerihappointment";

$connection = new mysqli($localhost, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$userid = $_POST['userid'];

$sql = "DELETE FROM appointments WHERE userid='$userid'";

if ($connection->query($sql) === TRUE) {
    header('Location: fordelivery.php');
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>
