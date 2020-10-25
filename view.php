<?php

include '../../mainfile.php';
include '../../header.php';
OpenTable();

include('include/header.inc.php');

include('include/dbconnect.php');

if ($id) {
    $result = $GLOBALS['xoopsDB']->queryF("SELECT * FROM $table WHERE id=$id", $db);

    $links = $GLOBALS['xoopsDB']->fetchBoth($result);

    $id = $links['id'];

    $firstname = $links['firstname'];

    $lastname = $links['lastname'];

    $address = $links['address'];

    $home = $links['home'];

    $mobile = $links['mobile'];

    $work = $links['work'];

    $email = $links['email'];

    $email2 = $links['email2'];

    $day = $links['bday'];

    $month = $links['bmonth'];

    $year = $links['byear'];

    echo "<b>Nom completo:</b> $firstname $lastname<br>";

    echo "<br><b>Adresse:</b> $address <br><br>";

    echo '<b>Numeros de Téléphones :</b><br>';

    echo "Maison: $home<br>";

    echo "Portable: $mobile<br>";

    echo "Travail: $work<br><br>";

    echo "email: <a href=mailto:$email>$email</a><br>";

    echo "email2: <a href=mailto:$email2>$email2</a><br><br>";

    echo "<b>Date de naissance:</b> $day $month, $year";
} else {
    echo 'Necesita seleccionar el número identificador de la entrada';
}

include('include/footer.inc.php');

CloseTable();
include('../../footer.php');
