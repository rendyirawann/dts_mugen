<?php
require_once "base.php";

date_default_timezone_set('Asia/Jakarta');
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "biker";

//create connection
$conn = new mysqli($serverName, $username, $password, $dbName);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// $conn->close();


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}