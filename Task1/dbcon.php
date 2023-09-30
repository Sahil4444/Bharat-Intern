<?php
$servername = 'localhost';
$username  = 'root';
$password = '';
$database = 'contentpoint';

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    echo 'mysqli_error()';
}

?>