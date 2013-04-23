<?php 
// -----------------------------------------
// Source  :	http://cogites.com
// Script  :	E RESERV
// Version :	5
// revente et redistribution interdites 
// Vous devez laisser le copyright.
// -----------------------------------------
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
<p>&nbsp;</p>
<table width="700" border="0" align="center" class="texte_erreur">
  <tr>
    <td>
	<?php 
	include ("../inc/conec.php"); 
	
	$sql_codepostal = "ALTER TABLE $T_locataires MODIFY codepostal varchar(10) NOT NULL";
	mysql_query($sql_codepostal) or die ("échec de la modifictaion du champs code postal : " . mysql_error());
	echo '<div class = "texte_OK">Le champ code postal de la table locataire a été modifié avec succés</div>';
	
	$sql_titre = "ALTER TABLE $T_locataires ADD titre varchar(4) NOT NULL AFTER ID_locataire";
	mysql_query($sql_titre) or die ("échec de l'ajout du champ titre : " . mysql_error());
	echo '<div class = "texte_OK">Le champ titre a été ajouté avec succés à la table locataire</div>';
	
	$sql_commentaire_reserv = "ALTER TABLE $T_reserv ADD commentaire_reserv text NOT NULL AFTER prix";
	mysql_query($sql_commentaire_reserv) or die ("échec de l'ajout du commentaire_reserv : " . mysql_error());
	echo '<div class = "texte_OK">Le champ commentaire_reserv a été ajouté avec succés de la table reserv</div>';
	
	echo'<p><b>Supprimer ce fichier aprés la mise à jour</b></p>';
	echo'<p><a href="../index.php">aller &agrave; la plage d\'accueil</a></p>';
	?>
    </td>
  </tr>
</table>
</body>
</html>