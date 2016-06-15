<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IP log</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
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
                <li><a href="amunet_admin.php">Log</a></li>
                <li class="active"><a href="amunet_ip_list.php">List</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container theme-showcase">

    <div class="page-header">
        <h1>IP List</h1>
    </div>

    <?php

        $conn = new mysqli($dbServername, $dbUsername, $dbUserpass, $dbName);
        $sql = "SELECT id, ip, name, white FROM ip";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class=\"table\"><tr><th>id</th><th>ip</th><th>name</th><th>white</th></tr>";
            while($row = $result->fetch_assoc()) {
                if($row["white"] == 1) {
                    echo "<tr class=\"ip-white\"><td>".$row["id"]."</td><td>".$row["ip"]."</td><td>".$row["name"]."</td><td>".$row["white"]."</td></tr>";
                } else {
                    echo "<tr><td>".$row["id"]."</td><td>".$row["ip"]."</td><td>".$row["name"]."</td><td>".$row["white"]."</td></tr>";
                }
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        $conn->close();

    ?>

</div><!-- /.container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="js/ajax.js" async></script>
</body>
</html>
