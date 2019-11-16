#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: propriétaire
#------------------------------------------------------------

CREATE TABLE proprietaire(
        n__premis_conduire Int NOT NULL ,
        nom                Varchar (50) NOT NULL ,
        prenom             Varchar (50) NOT NULL
	,CONSTRAINT proprietaire_PK PRIMARY KEY (n__premis_conduire)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: modele
#------------------------------------------------------------

CREATE TABLE modele(
        n_type   Int NOT NULL ,
        finition Varchar (50) NOT NULL
	,CONSTRAINT modele_PK PRIMARY KEY (n_type)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: vehicule
#------------------------------------------------------------

CREATE TABLE vehicule(
        n_immatriculation Int NOT NULL ,
        couleur           Varchar (50) NOT NULL ,
        puissance         Varchar (50) NOT NULL ,
        marque            Varchar (50) NOT NULL ,
        n_type            Int NOT NULL
	,CONSTRAINT vehicule_PK PRIMARY KEY (n_immatriculation)

	,CONSTRAINT vehicule_modele_FK FOREIGN KEY (n_type) REFERENCES modele(n_type)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Avoir
#------------------------------------------------------------

CREATE TABLE Avoir(
        n_immatriculation  Int NOT NULL ,
        n__premis_conduire Int NOT NULL
	,CONSTRAINT Avoir_PK PRIMARY KEY (n_immatriculation,n__premis_conduire)

	,CONSTRAINT Avoir_vehicule_FK FOREIGN KEY (n_immatriculation) REFERENCES vehicule(n_immatriculation)
	,CONSTRAINT Avoir_proprietaire0_FK FOREIGN KEY (n__premis_conduire) REFERENCES proprietaire(n__premis_conduire)
)ENGINE=InnoDB;

