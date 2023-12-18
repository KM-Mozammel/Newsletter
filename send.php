<?php

require_once("connection.inc.php");

$subject = $_POST['subject'];
$body = $_POST['body'];

$header = 'From: postmaster';