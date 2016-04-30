<?php

include "amunet_config.php";

$conn = new mysqli($dbServername, $dbUsername, $dbUserpass, $dbName);

if (isset($_GET["ip"])) {
    $sql = "DELETE FROM log WHERE ip = '" . $_GET["ip"] . "'";
}

if (isset($_GET["id"])) {
    $sql = "DELETE FROM log WHERE id = " . $_GET["id"];
}

if ($_GET["white"] == "true") {
    echo "all white are clear";
    $sql = "SELECT ip FROM ip WHERE white = 1";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $sql = "DELETE FROM log WHERE ip = '" . $row["ip"] . "'";
        $conn->query($sql);
    }
}

$conn->close();

?>

<script language="JavaScript" type="text/javascript">
location="amunet_admin.php"; 
</script>
