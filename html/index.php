<?php
session_start();
/*$mysqli = @new mysqli('localhost', 'root', '', 'testblog_db');*/
$db = mysql_connect ('localhost', 'root', '', 'testblog_db');
mysql_select_db ("mysql",$db);

if (mysqli_connect_errno()) {
    echo "Connect unavailable: ".mysqli_connect_error();
    phpinfo();
} else {
    include('page.php');
}
?>