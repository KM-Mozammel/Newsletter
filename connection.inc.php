<?php

$user = "mozammel";
$password = "khandakar";
$host = "localhost";
$database = "newsletter";
$table = "subscribers";

$dbc = mysqli_connect($host, $user, $password, $database) or die("Connection Error to Database!");