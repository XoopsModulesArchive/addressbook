<?php

include '../../mainfile.php';
include '../../header.php';
OpenTable();

include('include/header.inc.php');

include('include/dbconnect.php');

$result = $GLOBALS['xoopsDB']->queryF("SELECT * FROM $table WHERE LEFT(lastname,1) = '$alphabet' ORDER BY lastname", $db);

echo '<table cellpadding=2 cellspacing=1 border=0>';
$resultsnumber = mysql_numrows($result);
$alternate = '2';
#echo "Number of results: $resultsnumber";
    while ($row = $GLOBALS['xoopsDB']->fetchBoth($result)) {
        $id = $row['id'];

        $firstname = $row['firstname'];

        $lastname = $row['lastname'];

        if ('1' == $alternate) {
            $color = '#ffffff';

            $alternate = '2';
        } else {
            $color = '#efefef';

            $alternate = '1';
        }

        echo "<tr bgcolor=$color><td>$lastname, $firstname</td><td><a href='view.php?id=$id'>Ver detalles</a></td><td><a href='edit.php?id=$id'>Editer entrada</a></td><td><a href='delete.php?id=$id' onClick=\"return confirm('¿Está Ud. seguro?')\">Borrar entrada</a></td></tr>";
    }

    echo '</table>';

    if ('0' == $resultsnumber) {
        echo '<center>Lo siento, no existen entradas para la letra seleccionada.</center>';
    }
?> 

<P><center><a href="az_index.php">Retour à la liste alphabétique</a></center></P>

<?php
include('include/footer.inc.php');

CloseTable();
include('../../footer.php');

?>
