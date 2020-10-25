 <?php

include 'include/config.php';

$db = mysql_connect((string)$dbserver, (string)$dbuser, (string)$dbpass);
mysqli_select_db($GLOBALS['xoopsDB']->conn, (string)$dbname, $db);

