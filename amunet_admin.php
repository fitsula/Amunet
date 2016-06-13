<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IP log</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<?php
include "amunet_config.php";
?>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container theme-showcase">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Amunet</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#log">Log</a></li>
                <li><a href="#list">List</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>




<div class="container theme-showcase">
    <div class="page-header">
        <h1>Log</h1>
    </div>

    <?php
        $conn = new mysqli($dbServername, $dbUsername, $dbUserpass, $dbName);

        $sql = "SELECT ip, datetime, id FROM log";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class=\"table\"><tr><th>ip</th><th>datetime</th><th>del <a href=\"amunet_delete.php?white=true\" class=\"label label-danger\">[white]</a></th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["ip"]."</td><td>".$row["datetime"]."</td><td><a href=\"amunet_delete.php?id=".$row["id"]."\" class=\"label label-danger\">[one]</a> <a href=\"amunet_delete.php?ip=".$row["ip"]."\" class=\"label label-danger\">[all]</a></td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        $conn->close();
    ?>

</div><!-- /.container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
