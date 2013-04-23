<?php 
// -----------------------------------------
// Source  :	http://cogites.com
// Script  :	E RESERV
// Version :	4
// revente et redistribution interdites 
// Vous devez laisser le copyright.
// -----------------------------------------

// permet de passer de la version 3.5 à la version 4

// ajout des champs nbr_adultes smallint(3),  nbr_enfants_2_13 smallint(3),  
// nbr_enfants_inf_2 smallint(3),  pmr smallint(3) à la table reserv


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

	// complément au message d'erreur
	$erreur = "<br/><br/><br/>vérifier le fichier conec.php si celà ne suffit pas <a href=\"http://cogites.com/e_reserv/faq_reserv.php\">consulter la FAQ</a><br/><br/><br/><br/>Message d'erreur : "; 

	$sql_add = 'ADD pmr smallint(3) NOT NULL AFTER commentaire_reserv,';
	$sql_add .= 'ADD nbr_enfants_2_13 smallint(3) NOT NULL AFTER commentaire_reserv,';
	$sql_add .= 'ADD nbr_enfants_inf_2 smallint(3) NOT NULL AFTER commentaire_reserv,';
	$sql_add .= 'ADD nbr_adultes smallint(3) NOT NULL AFTER commentaire_reserv';

	$sql = "ALTER TABLE $T_reserv $sql_add";

	mysql_query($sql) or die ("Echec de l'ajout des champs dans la table reserv, $erreur " . mysql_error());
	echo '<div class = "texte_OK">Les champs : <br/><br/>	
	nbr_adultes smallint(3),<br/>
	nbr_enfants_2_13 smallint(3),<br/> 
	nbr_enfants_inf_2 smallint(3),<br/>
	pmr smallint(3)<br/><br/>
	 ont été ajoutés à la table reserv avec succés</div>';
	
	echo'<p><b>Supprimer ce fichier aprés la mise à jour</b></p>';
	echo'<p><a href="../index.php">aller &agrave; la page d\'accueil</a></p>';
	?>
    </td>
  </tr>
</table>
</body>
</html>