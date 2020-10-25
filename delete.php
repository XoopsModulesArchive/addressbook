<?php

include '../../mainfile.php';
include '../../header.php';
OpenTable();

include('include/header.inc.php');

include 'include/dbconnect.php';

$GLOBALS['xoopsDB']->queryF("DELETE FROM $table WHERE id=$id", $db);
echo '<center>Entrada borrada</center><br><br>';
echo "<center><a href='index.php'>Inicio</a> | <a href='search.php'>Chercher</a> | <a href='az_index.php'>A-Z</a></center>";

include('include/footer.inc.php');

CloseTable();
include('../../footer.php');
