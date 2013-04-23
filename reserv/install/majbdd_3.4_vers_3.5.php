<?php 
// -----------------------------------------
// Source  :	http://cogites.com
// Script  :	E RESERV
// Version :	5
// revente et redistribution interdites 
// Vous devez laisser le copyright.
// -----------------------------------------

// permet de passer des versions 3.4 et 3.41 à la version 3.5
// prix smallint(6) => decimal(6,2)


?>
<?php echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?".">"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Mise &agrave; jour de la base de donn&eacute;es</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link REL="StyleSheet" TYPE="text/css" HREF="../style.css">
</head>
<body>
<table width="800" border="2" align="center" cellpadding="0" cellspacing="0" bordercolor="#F4C89F" bgcolor="#FF9933">
  <tr bordercolor="#CCCCCC"> 
    <td class="titre_index" height="45"> E RESERV' : Interface d'administration 
      pour les r&eacute;servations</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="700" border="0" align="center" class="texte_erreur">
  <tr>
    <td>
	<?php 
	include ("../inc/conec.php"); 
    // table reserv changement prix

	$sql_prix = "ALTER TABLE $T_reserv MODIFY prix decimal(6,2) NOT NULL";
	mysql_query($sql_prix) or die ("échec de la modifictaion du champs prix : " . mysql_error());
	echo '<div class = "texte_OK">Le champ prix de la table reserv a été modifié avec succés</div>';
	
	echo'<p><b>Supprimer ce fichier aprés la mise à jour</b></p>';
	echo'<p><a href="../index.php">aller &agrave; la plage d\'accueil</a></p>';
	?>
    </td>
  </tr>
</table>
</body>
</html>