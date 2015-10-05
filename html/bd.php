<?php
$connect = @new mysqli('localhost', 'root', '', 'testblog_db');
/*mysqli_select_db ("testblog_db",$connect);*/
/*$db = mysqli_connect('localhost', 'root', '');
$connect = mysqli_select_db("testblog_db", $db);*/

error_reporting(E_ALL ^ E_DEPRECATED);
?>