<?php
$connection = mysqli_connect('localhost', 'root', '', 'test');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysqli_select_db($connection, 'test');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}