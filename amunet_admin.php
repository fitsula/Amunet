<!DOCTYPE html> 
<html>
<head>
<title>IP log</title>
<style>
table, td { border: 1px solid black; padding: 5px; }
</style>
</head>

<?php
include "amunet_config.php";
?>

<body>

<?php
$conn = new mysqli($dbServername, $dbUsername, $dbUserpass, $dbName);

$sql = "SELECT ip, datetime, id FROM log";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ip</th><th>datetime</th><th>del <a href=\"amunet_delete.php?white=true\">[white]</a></th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["ip"]."</td><td>".$row["datetime"]." </td><td><a href=\"amunet_delete.php?id=".$row["id"]."\">[one]</a>, <a href=\"amunet_delete.php?ip=".$row["ip"]."\">[all]</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>
