<?php 
// -----------------------------------------
// Source  :	http://cogites.com
// Script  :	E RESERV
// Version :	5
// revente et redistribution interdites 
// Vous devez laisser le copyright.
// -----------------------------------------

// permet de passer des version 3.3* à 3.4 en ajoutant et renseignant la table admin

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
    // table admin
	$sql_admin_structure = "CREATE TABLE $T_admin (
	ID_admin int(3) unsigned NOT NULL auto_increment,
	login_admin varchar(40) NOT NULL,
	pass_admin varchar(40) NOT NULL,
	PRIMARY KEY (ID_admin)
	)
	";
	
	mysql_query($sql_admin_structure) or die ("échec de la création de la table admin : " . mysql_error());
	echo '<div class = "texte_OK">La table admin a été crée avec succés</div>';
	
	 // on rempli la table admin : login = admin et passe = admin crypté
	$sql_admin_donnees = "INSERT INTO $T_admin VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3')";
	mysql_query($sql_admin_donnees) or die ("échec du renseignement de la table admin : " . mysql_error());
	echo '<div class = "texte_OK">La table admin a été renseignée avec succés</div>';

	echo'<p><b>Supprimer ce fichier aprés la mise à jour</b></p>';
	echo'<p><a href="../index.php">aller &agrave; la plage d\'accueil</a></p>';
	?>
    </td>
  </tr>
</table>
</body>
</html>