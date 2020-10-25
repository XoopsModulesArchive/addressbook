<?php
include '../../mainfile.php';
include '../../header.php';
OpenTable();

include ('include/header.inc.php');
?>

 <center><h1>Editer / modifier les données dans l'annuaire</h1></center> 
  <?php
include 'include/dbconnect.php';
if($submit)
{

$sql = "INSERT INTO $table (firstname, lastname, address, home, mobile, work, email, email2, bday, bmonth, byear) VALUES ('$firstname','$lastname','$address','$home','$mobile','$work','$email','$email2','$bday','$bmonth','$byear')";
$result = $GLOBALS['xoopsDB']->queryF($sql);
echo "<br><br>Información ingresada en el directorio.\n";
}
else if($update)
{
$sql = "UPDATE $table SET firstname='$firstname',lastname='$lastname',address='$address',home='$home',mobile='$mobile',work='$work',email='$email',email2='$email2',bday='$bday',bmonth='$bmonth',byear='$byear' WHERE id=$id";
$result = $GLOBALS['xoopsDB']->queryF($sql);
echo "<br><br><center>Directorio actualizado.\n</center>";
}
else if($id)
{
$result = $GLOBALS['xoopsDB']->queryF("SELECT * FROM $table WHERE id=$id",$db);
$myrow = $GLOBALS['xoopsDB']->fetchBoth($result);
?>
  <form method="post" action="edit.php">
    
  <table width="380" border="0" cellspacing="1" cellpadding="1">
    <tr> 
      <td> 
        <input type="hidden" name="id" value="<?php echo $myrow['id']?>">
        Nom: </td>
      <td> 
        <input type="Text" name="firstname" size="35" value="<?php echo $myrow['firstname']?>">
      </td>
    </tr>
    <tr> 
      <td>Prénom:</td>
      <td> 
        <input type="Text" name="lastname" size="35" value="<?php echo $myrow['lastname']?>">
      </td>
    </tr>
    <tr> 
      <td>Adresse: </td>
      <td> 
        <textarea name="address" rows="5" cols="35"><?php echo $myrow['address']?></textarea>
      </td>
    </tr>
    <tr> 
      <td>Téléphones :</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Maison:</td>
      <td> 
        <input type="Text" name="home" value="<?php echo $myrow['home']?>">
      </td>
    </tr>
    <tr> 
      <td>Portable:</td>
      <td> 
        <input type="Text" name="mobile" value="<?php echo $myrow['mobile']?>">
      </td>
    </tr>
    <tr> 
      <td>Travail: </td>
      <td> 
        <input type="Text" name="work" value="<?php echo $myrow['work']?>">
      </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Email:</td>
      <td> 
        <input type="Text" name="email" size="35" value="<?php echo $myrow['email']?>">
      </td>
    </tr>
    <tr> 
      <td>Email2:</td>
      <td> 
        <input type="Text" name="email2" size="35" value="<?php echo $myrow['email2']?>">
      </td>
    </tr>
    <tr> 
      <td>Date de naissance:</td>
      <td> 
        <select name="bday">
	<option value="<?php echo $myrow['bday']?>" selected><?php echo $myrow['bday']?></option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
        <select name="bmonth">
          <option value="<?php echo $myrow['bmonth']?>" selected><?php echo $myrow['bmonth']?></option>
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
        <input type="text" name="byear" size="4" maxlength="4" value="<?php echo $myrow['byear']?>">
      </td>
    </tr>
  </table>
    <input type="Submit" name="update" value="Mettre à jour">
  </form>
    <?php

}
else
{
?>
 <form method="post" action="<?php echo $PHP_SELF?>">
    
  <table width="380" border="0" cellspacing="1" cellpadding="1">
    <tr> 
      <td> 
        <input type="hidden" name="id" value="<?php echo $myrow['id']?>">
        Nom:</td>
      <td> 
        <input type="Text" name="firstname" size="35">
      </td>
    </tr>
    <tr> 
      <td>Prénom: </td>
      <td> 
        <input type="Text" name="lastname" size="35">
      </td>
    </tr>
    <tr> 
      <td>Adresse: </td>
      <td> 
        <textarea name="address" rows="5" cols="35"></textarea>
      </td>
    </tr>
    <tr> 
      <td>Téléphones :</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Maison:</td>
      <td> 
        <input type="Text" name="home">
      </td>
    </tr>
    <tr> 
      <td>Portable: </td>
      <td> 
        <input type="Text" name="mobile">
      </td>
    </tr>
    <tr> 
      <td>Travail:</td>
      <td> 
        <input type="Text" name="work">
      </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Email: </td>
      <td> 
        <input type="Text" name="email" size="35">
      </td>
    </tr>
    <tr> 
      <td>Email2: </td>
      <td> 
        <input type="Text" name="email2" size="35">
      </td>
    </tr>
    <tr>
      <td>Date de naissance:</td>
      <td>
        <select name="bday">
          <option value="1" selected>1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
        <select name="bmonth">
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
        <input type="text" name="byear" size="4" maxlength="4">
      </td>
    </tr>
  </table>
    <center><br><input type="Submit" name="submit" value="Envoyer"></center>
  </form>
    <?php
}

include ('include/footer.inc.php');

CloseTable();
include ('../../footer.php');

?>
