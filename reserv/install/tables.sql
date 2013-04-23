# structutre des tables du script e_reserv3.54

-- --------------------------------------------------------

--
-- Structure de la table 'locataires'
--

CREATE TABLE locataires (
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
) ;

-- --------------------------------------------------------

--
-- Structure de la table 'locations'
--

CREATE TABLE locations (
  ID_location smallint(11) NOT NULL auto_increment,
  nom_location varchar(255) NOT NULL,
  description varchar(255) NOT NULL,
  PRIMARY KEY  (ID_location)
);

-- --------------------------------------------------------

--
-- Structure de la table 'reserv'
--

CREATE TABLE reserv (
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
) ;

-- --------------------------------------------------------

--
-- Structure de la table 'admin'
--

CREATE TABLE admin (
  ID_admin int(3) unsigned NOT NULL auto_increment,
  login_admin varchar(40) NOT NULL,
  pass_admin varchar(40) NOT NULL,
  PRIMARY KEY (ID_admin)
);

-- --------------------------------------------------------

--
-- Données de la table 'admin'
--

INSERT INTO admin VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3');
