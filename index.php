<?php

include '../../mainfile.php';
include '../../header.php';
OpenTable();

include('include/header.inc.php');

include('include/dbconnect.php');

              $sql = "SELECT * FROM $table";

    $result = $GLOBALS['xoopsDB']->queryF($sql);

    $resultsnumber = mysql_numrows($result);
    echo "<center>Le nombre total d'entréesdans l'annuaire est de : $resultsnumber</center>";

include('include/footer.inc.php');

CloseTable();
include('../../footer.php');
