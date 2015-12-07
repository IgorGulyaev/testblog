<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testblog_db";

$connect = mysqli_connect($servername, $username, $password, $dbname);
/*mysqli_select_db ("testblog_db",$connect);*/
/*$db = mysqli_connect('localhost', 'root', '');
$connect = mysqli_select_db("testblog_db", $db);*/

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

error_reporting(E_ALL ^ E_DEPRECATED);
?>