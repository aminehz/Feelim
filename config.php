<?php
$db_username = 'root';
$db_password = '';
$db_name     = 'feelim';
$db_servername     = 'localhost';
$db = mysqli_connect($db_servername, $db_username, $db_password,$db_name)
       or die('failed to connect to database');

?>