<?php
include "amunet_config.php";

$ip = $_SERVER["REMOTE_ADDR"];

$conn = new mysqli($dbServername, $dbUsername, $dbUserpass, $dbName);

$sql = "INSERT INTO log (ip, datetime)
VALUES ('$ip', now())";

if ($conn->query($sql) === TRUE) {
    echo "";
}

$conn->close();
?>
