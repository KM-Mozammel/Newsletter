<?php 

require_once('connection.inc.php');

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$date = date("Y-m-d h:i:s");

$query = "SELECT email FROM $table where email = '$email'";
$result = $dbc->query($query);

if($result->num_rows > 0){
    echo "This email has been aready subscribed";
    die();
}

$query = "INSERT INTO $table (first_name, last_name, email, date) VALUES ('$first_name', '$last_name', '$email', '$date')";

mysqli_query($dbc, $query) or die("Data Inser Fail to database".mysqli_error($dbc));
echo "You have been successfully added.";

mysqli_close($dbc);