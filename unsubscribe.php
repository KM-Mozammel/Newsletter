<?php
require_once "connection.inc.php";

$email = $_POST['email'];

$query = "DELETE FROM $table WHERE email = '$email'" or die("Error removeing email from databse".mysqli_error($dbc));

$result = mysqli_query($dbc, $query);

mysqli_close($dbc);