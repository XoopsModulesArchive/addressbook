<?php
include '../../mainfile.php';
include '../../header.php';
OpenTable();

include ('include/header.inc.php');
include ('include/dbconnect.php');

if ($searchstring)
	{
	$sql = "SELECT * FROM $table WHERE $searchtype LIKE '%$searchstring%' ORDER BY lastname ASC";

	
	$result = $GLOBALS['xoopsDB']->queryF($sql);
	$resultsnumber = mysql_numrows($result);
	
	echo '<TABLE BORDER=0>';
	echo "<center>Résutats trouvés pour cette rechercher: $resultsnumber</center>";
	
	$alternate = '2';
		while (false !== ($myrow = $GLOBALS['xoopsDB']->fetchBoth($result)))
		{
		$firstname = $myrow['firstname'];
		$id = $myrow['id'];
		$lastname = $myrow['lastname'];
		
		if ($alternate == '1') {
		$color = '#ffffff';
		$alternate = '2';
		} 
		else { 
		$color = '#efefef';
		$alternate = '1';
} 
			echo "<TR bgcolor=$color><TD>$lastname, $firstname</TD>";
			echo "<td><a href='view.php?id=$id'>Voir detail</a></td><td><a href='edit.php?id=$id'>Editer entrée</a></td><td><a href='delete.php?id=$id' onClick=\"return confirm('¿Está Ud. seguro?')\">Effacé entrée</a></td>";
			}
	echo '</TR></TABLE>';
	echo "<center><p>Allez a <a href='az_index.php'>Index alphabetique</a> ou <a href='$PHP_SELF'>Nouvelle recherche</a></p></center>";

	}


else
	{
?>
  <form method="POST" action="<?php $PHP_SELF ?>">

  <table border="0" cellspacing="2" width="380">
    <tr>
      <td><h1>Recherche avancée.</h1></td>
	  <td><b>Critère de recherche:</b></td>
    </tr>
	<tr>
	  <td valign="top"> 
        <input type="text" name="searchstring" size="35">
      </td>
	  <td>
        <input type="radio" name="searchtype" value="lastname">Prénom<br>
        <input type="radio" name="searchtype" value="firstname" checked>Nom<br>
        <input type="radio" name="searchtype" value="address">Adresse<br>
        <input type="radio" name="searchtype" value="email">Email</td>
	</tr>
	<tr><td><input type="submit" value="Chercher"></td>
	<td>&nbsp;</td></tr>
    
	</table>
	</form>
	
<form method="POST" action="<?php $PHP_SELF ?>">

  <table border="0" cellspacing="2" width="380">
    <tr> 
      <td>Voir toutes les personnes dont l'anniversaire est dans le mois de :<b></b></td>
    </tr>
    <tr> 
      <td valign="top"> 
	  <input type="hidden" name="searchtype" value="bmonth">
        <select name="searchstring">
          <option value="Janvier" selected>Janvier</option>
          <option value="Février">Février</option>
          <option value="Mars">Mars</option>
          <option value="Avril">Avril</option>
          <option value="Mai">Mai</option>
          <option value="Juin">Juin</option>
          <option value="Juillet">Juillet</option>
          <option value="Août">Août</option>
          <option value="Septembre">Septembre</option>
          <option value="Octobre">Octobre</option>
          <option value="Novembre">Novembre</option>
          <option value="Décembre">Décembre</option>
        </select>
      </td>
    </tr>
    <tr> 
      <td> 
        <input type="submit" value="Voir">
      </td>
    </tr>
  </table>
  </form>
        <?php
	}

include ('include/footer.inc.php');

CloseTable();
include ('../../footer.php');

?>
