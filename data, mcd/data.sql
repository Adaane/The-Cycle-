#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: user
#------------------------------------------------------------

CREATE TABLE user(
        id_user       int (11) Auto_increment  NOT NULL ,
        nom           Varchar (50) ,
        prenom        Varchar (55) ,
        mail          Varchar (100) ,
        cofirmer_mail Varchar (55) ,
        id_bike       Int ,
        PRIMARY KEY (id_user )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: bike
#------------------------------------------------------------

CREATE TABLE bike(
        id_bike    int (11) Auto_increment  NOT NULL ,
        id_cadre   Int ,
        id_scelle  Int ,
        id_fourche Int ,
        id_roues   Int ,
        id_guidons Int ,
        PRIMARY KEY (id_bike )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: cadre
#------------------------------------------------------------

CREATE TABLE cadre(
        id_cadre        int (11) Auto_increment  NOT NULL ,
        design_cadre    Varchar (55) ,
        reference_cader Varchar (10) ,
        id_couleur      Int ,
        id_type         Int ,
        PRIMARY KEY (id_cadre )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: scelle
#------------------------------------------------------------

CREATE TABLE scelle(
        id_scelle        int (11) Auto_increment  NOT NULL ,
        design_scelle    Varchar (55) NOT NULL ,
        reference_scelle Varchar (10) NOT NULL ,
        id_couleur       Int ,
        id_type          Int ,
        PRIMARY KEY (id_scelle )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: roues
#------------------------------------------------------------

CREATE TABLE roues(
        id_roues        int (11) Auto_increment  NOT NULL ,
        reference_roues Varchar (10) NOT NULL ,
        design_roues    Varchar (55) NOT NULL ,
        id_couleur      Int ,
        id_type         Int ,
        PRIMARY KEY (id_roues )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: fourche
#------------------------------------------------------------

CREATE TABLE fourche(
        id_fourche        int (11) Auto_increment  NOT NULL ,
        design_fourche    Varchar (55) NOT NULL ,
        reference_fourche Varchar (10) NOT NULL ,
        id_couleur        Int ,
        id_type           Int ,
        PRIMARY KEY (id_fourche )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: guidons
#------------------------------------------------------------

CREATE TABLE guidons(
        id_guidons        int (11) Auto_increment  NOT NULL ,
        reference_guidons Varchar (10) NOT NULL ,
        design_guidons    Varchar (55) NOT NULL ,
        id_type           Int ,
        id_couleur        Int ,
        PRIMARY KEY (id_guidons )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: couleur
#------------------------------------------------------------

CREATE TABLE couleur(
        id_couleur int (11) Auto_increment  NOT NULL ,
        couleur    Varchar (25) ,
        PRIMARY KEY (id_couleur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: type
#------------------------------------------------------------

CREATE TABLE type(
        id_type int (11) Auto_increment  NOT NULL ,
        type    Varchar (50) ,
        PRIMARY KEY (id_type )
)ENGINE=InnoDB;

ALTER TABLE user ADD CONSTRAINT FK_user_id_bike FOREIGN KEY (id_bike) REFERENCES bike(id_bike);
ALTER TABLE bike ADD CONSTRAINT FK_bike_id_cadre FOREIGN KEY (id_cadre) REFERENCES cadre(id_cadre);
ALTER TABLE bike ADD CONSTRAINT FK_bike_id_scelle FOREIGN KEY (id_scelle) REFERENCES scelle(id_scelle);
ALTER TABLE bike ADD CONSTRAINT FK_bike_id_fourche FOREIGN KEY (id_fourche) REFERENCES fourche(id_fourche);
ALTER TABLE bike ADD CONSTRAINT FK_bike_id_roues FOREIGN KEY (id_roues) REFERENCES roues(id_roues);
ALTER TABLE bike ADD CONSTRAINT FK_bike_id_guidons FOREIGN KEY (id_guidons) REFERENCES guidons(id_guidons);
ALTER TABLE cadre ADD CONSTRAINT FK_cadre_id_couleur FOREIGN KEY (id_couleur) REFERENCES couleur(id_couleur);
ALTER TABLE cadre ADD CONSTRAINT FK_cadre_id_type FOREIGN KEY (id_type) REFERENCES type(id_type);
ALTER TABLE scelle ADD CONSTRAINT FK_scelle_id_couleur FOREIGN KEY (id_couleur) REFERENCES couleur(id_couleur);
ALTER TABLE scelle ADD CONSTRAINT FK_scelle_id_type FOREIGN KEY (id_type) REFERENCES type(id_type);
ALTER TABLE roues ADD CONSTRAINT FK_roues_id_couleur FOREIGN KEY (id_couleur) REFERENCES couleur(id_couleur);
ALTER TABLE roues ADD CONSTRAINT FK_roues_id_type FOREIGN KEY (id_type) REFERENCES type(id_type);
ALTER TABLE fourche ADD CONSTRAINT FK_fourche_id_couleur FOREIGN KEY (id_couleur) REFERENCES couleur(id_couleur);
ALTER TABLE fourche ADD CONSTRAINT FK_fourche_id_type FOREIGN KEY (id_type) REFERENCES type(id_type);
ALTER TABLE guidons ADD CONSTRAINT FK_guidons_id_type FOREIGN KEY (id_type) REFERENCES type(id_type);
ALTER TABLE guidons ADD CONSTRAINT FK_guidons_id_couleur FOREIGN KEY (id_couleur) REFERENCES couleur(id_couleur);
