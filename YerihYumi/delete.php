<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = " yerihaccounts";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userid = $_POST['userid'];

$sql = "DELETE FROM sched WHERE id=".$userid;

if ($conn->query($sql) === TRUE) {
    header('Location: accounts.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>