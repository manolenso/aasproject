<?php 
// -----------------------------------------
// Source  :	http://cogites.com
// Script  :	E RESERV
// Version :	5
// revente et redistribution interdites 
// Vous devez laisser le copyright.
// -----------------------------------------

// Connexion à la base
include ("../inc/conec.php");


// Création des tables

// table locations
$sql_1 = "CREATE TABLE $T_locations (
  ID_location smallint(11) NOT NULL auto_increment,
  nom_location varchar(255) NOT NULL,
  description varchar(255) NOT NULL,
  PRIMARY KEY  (ID_location)
  )
  " ; 
// table locataires
$sql_2 = "CREATE TABLE $T_locataires (
  ID_locataire smallint(11) unsigned NOT NULL auto_increment,
  titre varchar(4) NOT NULL,
  nom_locataire varchar(30) NOT NULL,
  prenom varchar(30) NOT NULL,
  rue varchar(70) NOT NULL,
  codepostal varchar(10) NOT NULL,
  ville varchar(70) NOT NULL,
  pays varchar(70) NOT NULL,
  tel varchar(25) NOT NULL,
  tel_portable varchar(25) NOT NULL,
  email varchar(50) NOT NULL,
  commentaires text NOT NULL,
  nbr_sejour smallint(11) unsigned NOT NULL,
  date_enreg_locataire date NOT NULL,
  PRIMARY KEY  (ID_locataire)
 )
  " ;
// table reserv
$sql_3 = "CREATE TABLE $T_reserv (
  ID_reserv smallint(11) unsigned NOT NULL auto_increment,
  ID_location smallint(11) unsigned NOT NULL,
  ID_locataire smallint(11) unsigned NOT NULL,
  datedeb date NOT NULL,
  datefin date NOT NULL,
  date_enreg date NOT NULL,
  prix decimal(6,2) NOT NULL,
  commentaire_reserv text NOT NULL,
  nbr_adultes smallint(3) NOT NULL,
  nbr_enfants_inf_2 smallint(3) NOT NULL,
  nbr_enfants_2_13 smallint(3) NOT NULL,
  pmr smallint(3) NOT NULL,
  PRIMARY KEY  (ID_reserv)
  ) 
  ";
  
  // table admin
$sql_4 = "CREATE TABLE $T_admin (
  ID_admin int(3) unsigned NOT NULL auto_increment,
  login_admin varchar(40) NOT NULL,
  pass_admin varchar(40) NOT NULL,
  PRIMARY KEY (ID_admin)
)
";
 // on rempli la table admin : login = admin et passe = admin crypté
$sql_5 = "INSERT INTO $T_admin VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3')";

// complément au message d'erreur
$erreur = "<p>Vérifier le fichier inc/conec.php </p>
<p>Si celà ne suffit pas <a href=\"http://cogites.com/e_reserv/faq_reserv.php\">consulter la FAQ</a>.</p>
 "; 
$img = "<p align=\"center\"><a href=\"http://cogites.com/e_reserv/index.php\"><img src=\"../img/e_reserv_big.jpg\" width=\"350\" height=\"151\" border=\"0\" /></a></p>";


?>

<?php echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?".">"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Cr&eacute;ation des tables pour e-reserv</title>

            <!-- css génériques -->
            <link href="../inc/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" >
            <link href="../style_reserv.css" rel="stylesheet" type="text/css" >

</head>
<body>
    <div class="container">
        <h2 class="titre" >E'RESERV : gérez vos réservations en lignes</h2>
        <?php
        mysql_query($sql_1) or die("<div class = \"alert alert-error\">La table des LOCATIONS n'a pas pu être créée. <p>&nbsp;</p><p>Message d'erreur : <strong>" . mysql_error() . "</strong></p>" . $erreur . "</div>" . $img . "");
        mysql_query($sql_2) or die("<div class = \"alert alert-error\">La table des LOCATAIRES n'a pas pu être créée. <p>&nbsp;</p><p>Message d'erreur : <strong>" . mysql_error() . "</strong></p>" . $erreur . "</div>" . $img . "");
        mysql_query($sql_3) or die("<div class = \"alert alert-error\">La table des RESERVATION n'a pas pu être créée<p>&nbsp;</p><p>Message d'erreur : <strong>" . mysql_error() . "</strong></p>" . $erreur . "</div>" . $img . "");
        mysql_query($sql_4) or die("<div class = \"alert alert-error\">La table ADMIN n'a pas pu être créée.<p>&nbsp;</p><p>Message d'erreur : <strong> " . mysql_error() . "</strong></p>" . $erreur . "</div>" . $img . "");
        mysql_query($sql_5) or die("<div class = \"alert alert-error\">La table ADMIN n'a pas pu être renseignée.<p>&nbsp;</p><p>Message d'erreur : <strong>" . mysql_error() . "</strong></p>" . $erreur . "</div>" . $img . "");
        ?>
    
        <div class = "alert alert-success">
            Les tables ont &eacute;té cré&eacute;es avec succ&egrave;s !
        </div>
    
        <div class="well lead">
            Vous pouvez vous connecter &agrave; l'<strong><a href="../index.php">espace d'administration</a> </strong>
            et ajouter une location. <p>&nbsp;</p>
            Par défaut <strong>login = &quot;admin&quot;, mot de passe = "admin"</strong>.
      
        </div>
        <p>&nbsp;</p>
        <p>Si vous souhaitez appara&icirc;tre dans la page des <a href="http://cogites.com/e_reserv/utilisateurs_reserv.php" target="_blank">utilisateurs 
                d'E-reserv</a> , <a href="http://cogites.com/contact.php" target="_blank">contacter 
                moi</a></p>
        <p>Pour les mises &agrave; jour : <a href="http://cogites.com/e_reserv/index.php">cogites.com/e_reserv/</a> 
            et <a href="http://twitter.com/cogites" class="twitter-follow-button" data-show-count="false" data-lang="fr">Suivre 
                @cogites</a> 
            <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
        </p>
        <p>Par mesure de s&eacute;curit&eacute; nous vous conseillons de supprimer le 
            dossier &quot;install&quot;.</p>
        <p>Merci d'avoir choisi cogites.com et bonne mise en oeuvre.</p>
        <p>&nbsp;</p>
        <p align="center"><a href="http://cogites.com/e_reserv/index.php"><img src="../img/e_reserv_big.jpg" width="350" height="151" border="0" /></a></p>
        <p>&nbsp;</p>

</div> <!--   fin de div container-->
</body>
</html>