<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

$username = "root";


$database = "chistar";

$host = "localhost";


mysql_connect($host, $username, $password);

mysql_select_db($database) or die("Unable to select database" . mysql_error());
?>