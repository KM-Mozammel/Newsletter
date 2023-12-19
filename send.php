<?php

require_once("connection.inc.php");

$subject = $_POST['subject'];
$body = $_POST['body'];

$headers = 'From: postmaster@yourdomain.com'. '\n';
$headers.='Reply-To: contact@yourdomain.com'.'\n';
$headers.='Content-Transfer-Encoding: 8bit';

$query = "SELECT * FROM $table";
$result = mysqli_query($dbc, $query) or die("Error Querying Database".mysqli_error($dbc));

while($row = mysqli_fetch_array($result)){
    $first_name = $row['First_Name'];
    $last_name = $row['Last_Name'];
    $email = $row['Email'];

    $msg = "Dear $first_name $last_name, \n $body";

    if (mail($email, $subject, $msg, $headers)){

        echo "Email send to ". $email. "<br>";

    } else{
        echo "Error while sending an email to: ". $email;
    }
}