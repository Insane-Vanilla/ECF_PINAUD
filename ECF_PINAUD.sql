-- BASE DE DONNEES : "pinaud_ecf_garage"

-- --------------------------------------------------------------

-- STRUCTURE TABLE ADMINISTRATOR
DROP TABLE IF EXISTS administrator;
CREATE TABLE administrator
(
    idAdmin INTEGER(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    email_admin VARCHAR(50) UNIQUE NOT NULL,
    password_admin VARCHAR(50) NOT NULL
);


-- STRUCTURE TABLE EMPLOYEE
DROP TABLE IF EXISTS employee;
CREATE TABLE employee
(
    idEmployee INT (11) PRIMARY KEY NOT NULL AUTO_INCREMENT ,
    email_employee VARCHAR (50) NOT NULL UNIQUE, 
    password_employee VARCHAR (50) NOT NULL,
    idAdmin INT(11) NOT NULL,
    FOREIGN KEY (idAdmin) REFERENCES administrator(idAdmin)
);

-- STRUCTURE TABLE SERVICE
DROP TABLE IF EXISTS services;
CREATE TABLE services 
(
	idServices INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    category VARCHAR(50),
    description_service VARCHAR(255),
    idAdmin INT(11) NOT NULL,
    FOREIGN KEY(idAdmin) REFERENCES administrator(idAdmin)
);

-- STRUCTURE TABLE OPENING
DROP TABLE IF EXISTS opening;
CREATE TABLE opening
(
	idOpening INT (11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    opening_day VARCHAR (50),
    opening_hours TIME,
    idAdmin INT (11),
    FOREIGN KEY(idAdmin) REFERENCES administrator(idAdmin)
);

-- STRUCTURE TABLE REVIEW
DROP TABLE IF EXISTS review;
CREATE TABLE review
(
	idReview INT (11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	firstname VARCHAR (50),
	content VARCHAR (50),
	ratingStars INT (1),
	approved BOOLEAN
);

-- STRUCTURE TABLE D'ASSOCIATION EMPLOYEE + REVIEW
DROP TABLE IF EXISTS manage_review;
CREATE TABLE manage_review
(
	idEmployee INT (11),
    FOREIGN KEY(idEmployee) REFERENCES employee(idEmployee),
    idReview INT (11),
    FOREIGN KEY(idReview) REFERENCES review(idReview)
);

-- STRUCTURE TABLE MESSAGES 
DROP TABLE IF EXISTS messages ;
CREATE TABLE messages (
	idMessage INT (11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	lastname VARCHAR (50),
	firstname VARCHAR (50),
    email VARCHAR(50),
    phone_number VARCHAR (50),
    content VARCHAR (255)
);

-- STRUCTURE TABLE D'ASSOCIATION EMPLOYEE + MESSAGES
DROP TABLE IF EXISTS get_message;
CREATE TABLE get_message
(
	idEmployee INT (11),
    FOREIGN KEY(idEmployee) REFERENCES employee(idEmployee),
    idMessage INT (11),
    FOREIGN KEY(idMessage) REFERENCES messages(idMessage)
);

-- STRUCTURE DE LA TABLE CAR 
DROP TABLE IF EXISTS car;
CREATE TABLE car
(
	idCar INT (11) PRIMARY KEY NOT NULL AUTO_INCREMENT ,
	car_image VARCHAR(50),
    brand VARCHAR(50),
    model VARCHAR(50),
    price FLOAT,
    year DATE,
    fuel VARCHAR(50),
    gearbox VARCHAR(50),
    mileage FLOAT,
    doors INT (1),
    seats INT (1),
    color VARCHAR(50),
    horsepower VARCHAR(50)
);

-- STRUCTURE TABLE D'ASSOCIATION EMPLOYEE + CAR
DROP TABLE IF EXISTS manage_car;
CREATE TABLE manage_car
(
	idCar INT (11),
    FOREIGN KEY(idCar) REFERENCES car(idCar),
    idEmployee INT (11),
    FOREIGN KEY(idEmployee) REFERENCES employee(idEmployee)
);

-- STRUCTURE TABLE OPTION
DROP TABLE IF EXISTS options;
CREATE TABLE options
(
	idOption INT (11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	category VARCHAR (50),
	option_description VARCHAR (50)
); 


-- STRUCTURE TABLE D'ASSOCIATION CAR + OPTIONS
DROP TABLE IF EXISTS car_options;
CREATE TABLE car_options
(
	idCar INT (11),
    FOREIGN KEY(idCar) REFERENCES car(idCar),
    idOption INT (11),
    FOREIGN KEY(idOption) REFERENCES options(idOption)
);

-- ALIMENTATION TABLE ADMINISTRATOR

INSERT INTO administrator (idAdmin, email_admin, password_admin)
VALUES (1, 'vincent.parrot@garageparrot.com', 'dS1)x''Erw`oD3');


-- ALIMENTATION TABLE EMPLOYEE
INSERT INTO employee (idEmployee, email_employee, password_employee, idAdmin)
VALUES
(1, 'catherine.parrot@garageparrot.com', 'iS2$fR)8A', 1),
(2, 'ahmed.rachedi@garageparrot.com', 'dZ0|f0z5LN', 1),
(3, 'sophia.martinez@garageparrot.com', 'lW8.!#"pa9!Dr2f=', 1),
(4, 'jeremy.conte@garageparrot.com', 'fK3$T/,25', 1),
(5, 'cecilia.vallier@garageparrot.com', 'wP4=CC+5KxuM&4c`', 1),
(6, 'james.smith@garageparrot.com', 'pC4'')EKzs}3', 1),
(7, 'david.carvalho@garageparrot.com','mU7\7F.TQ?6', 1),
(8, 'lino.ricciardella@garageparrot.com', 'iA1~foRZXF2%', 1);

-- ALIMENTATION TABLE SERVICE
INSERT INTO services (idServices, category,description_service, idAdmin)
VALUES
(1, 'Réparations', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Odio tempor orci dapibus ultrices in iaculis nunc. Lacus luctus accumsan tortor posuere ac ut consequat semper. Euismod lacinia at quis risus sed vulputate odio ut enim. Elit pellentesque habitant morbi tristique senectus. Faucibus interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. Magna etiam tempor orci eu lobortis elementum. Posuere lorem ipsum dolor sit. Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. A diam sollicitudin tempor id. Tellus molestie nunc non blandit.', 1),
(2, 'Entretien', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Odio tempor orci dapibus ultrices in iaculis nunc. Lacus luctus accumsan tortor posuere ac ut consequat semper. Euismod lacinia at quis risus sed vulputate odio ut enim. Elit pellentesque habitant morbi tristique senectus. Faucibus interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. Magna etiam tempor orci eu lobortis elementum. Posuere lorem ipsum dolor sit. Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. A diam sollicitudin tempor id. Tellus molestie nunc non blandit.', 1),
(3, 'Pneumatiques', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Odio tempor orci dapibus ultrices in iaculis nunc. Lacus luctus accumsan tortor posuere ac ut consequat semper. Euismod lacinia at quis risus sed vulputate odio ut enim. Elit pellentesque habitant morbi tristique senectus. Faucibus interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. Magna etiam tempor orci eu lobortis elementum. Posuere lorem ipsum dolor sit. Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. A diam sollicitudin tempor id. Tellus molestie nunc non blandit.', 1),
(4, 'Carrosserie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Odio tempor orci dapibus ultrices in iaculis nunc. Lacus luctus accumsan tortor posuere ac ut consequat semper. Euismod lacinia at quis risus sed vulputate odio ut enim. Elit pellentesque habitant morbi tristique senectus. Faucibus interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. Magna etiam tempor orci eu lobortis elementum. Posuere lorem ipsum dolor sit. Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. A diam sollicitudin tempor id. Tellus molestie nunc non blandit.', 1);


-- ALIMENTATION TABLE OPENING
INSERT INTO opening (idOpening, opening_day, opening_hours, idAdmin)
VALUES
(1, 'lundi', '8:00', 1), (2, 'lundi', '12:00', 1), (3, 'lundi', '14:00', 1), (4, 'lundi', '19:00', 1),
(5, 'mardi', '8:00', 1), (6, 'mardi', '12:00', 1), (7, 'mardi', '14:00', 1), (8, 'mardi', '19:00', 1),
(9, 'mercredi', '8:00', 1), (10, 'mercredi', '12:00', 1), (11, 'mercredi', '14:00', 1), (12, 'mercredi', '19:00', 1),
(13, 'jeudi', '8:00', 1), (14, 'jeudi', '12:00', 1), (15, 'jeudi', '14:00', 1), (16, 'jeudi', '19:00', 1),
(17, 'vendredi', '8:00', 1), (18, 'vendredi', '18:00', 1),
(19, 'samedi', '8:00', 1), (20, 'samedi', '18:00', 1);

-- ALIMENTATION TABLE REVIEW
INSERT INTO review (idReview, firstname, content, ratingStars, approved)
VALUES
(1, 'Sergio', 'Super merci vous êtes les meilleurs je recommande ++++. Ma voiture a été chouchoutée, nettoyée, l’équipe est très disponible et à l’écoute, et le prix très raisonnable par rapport à la prestation effectuée.', 5, true),
(2, 'Claudine', 'Le patron a compris mon problème et a très bien suivi mon dossier. Equipe très sympathique. Ils tiennent bien au courant de l’avancement des réparations et le délai annoncé est toujours respecté.', 5, true),
(3, 'Assad', 'Je cherchais une occasion depuis un bon moment et grâce aux réseaux sociaux j’ai découvert le catalogue de voitures d’occasion du garage Parrot ; j’ai pu opérer une pré-sélection grâce aux supers descriptions des véhicules et j’ai eu un rdv très rapide pour venir sur place voir les voitures. Au top !', 5, true),
(4, 'Mia', 'Bon rapport qualité/prix (par rapport à d’autres garages alentours), je reviendrai et je recommande à tout mon entourage.', 5, true) ;

-- ALIMENTATION TABLE MANAGE_REVIEW
INSERT INTO manage_review (idEmployee, idReview)
VALUES
(1,1),
(7,2),
(5,3),
(1,4);

--ALIMENTATION TABLE MESSAGES
INSERT INTO messages (idMessage, lastname, firstname, email, phone_number, content)
VALUES
(1, 'Gachet', 'Gérard', 'gggachet@free.fr', '0607967004', 'Bonjour je souhaite prendre rdv pour poser mes pneus. Merci de me contacter.Cordialement. GG'),
(2, 'Salvetti', 'Aurore', 'ptiteloote@gmail.com', '0755231649', 'Bonjour, je suis très intéressée par une voiture à la vente (Ferrarri) et je souhaiterais venir la voir demain, est-ce possible ?'),
(3, 'Bouragba', 'Salima', 'salima.bouragba@gmail.com', '0659774213', 'Bonsoir, avez-vous reçu ma commande de pneus ? Merci bonne soirée'),
(4, 'Archambault', 'Julien', 'j.archambault@lycos.fr', '0660804570', 'Bonjour, pouvez-vous me dire où en sont les réparations de ma ford fiesta ? Merci bonne journée'),
(5, 'Lopez', 'Joelle', 'joellelopez@outlook.fr', '0799245610', 'Bonjour, la Renault Megane est-elle encore disponible ? Si oui peut-on convenir d''un rdv ?' );

-- ALIMENTATION TABLE GET_MESSAGE
INSERT INTO get_message (idEmployee, idMessage)
VALUES
(3,1),
(5,2),
(4,3),
(1,4),
(6,5);

-- ALIMENTATION TABLE CAR
INSERT INTO car (idCar, car_image, brand, model, price, year, fuel, gearbox, mileage, doors, seats, color, horsepower)
VALUES
(1, '1.jpg', 'ASTON MARTIN', 'RACE', 75500, 2023, 'gazoil', 'manuelle', 1500, 3, 2, 'gris', 12),
(2, '2.jpg', 'BMW', 'RS', 50000, 2018, 'gazoil', 'manuelle', 12000, 3, 4, 'jaune', 10),
(3, '3.jpg', 'VOLKSWAGEN', 'NEW BEATLE', 7500, 1963, 'essence', 'manuelle', 150000, 3, 4, 'bleu', 3),
(4, '4.jpg', 'MERCEDES', 'RS', 73000, 2022, 'gazoil', 'manuelle', 7500, 3, 2, 'blanc', 12),
(5, '5.jpg', 'AUDI', 'TT', 45500, 2015, 'essence', 'automatique', 30000, 5, 5, 'bordeaux', 9),
(6, '6.jpg', 'FERRARI', 'SPORT', 77500, 2023, 'gazoil', 'manuelle', 700, 3, 2, 'noir', 13),
(7, '7.jpg', 'SHELBY', 'RALLYE', 35000, 2013, 'essence', 'manuelle', 60000, 5, 5, 'noir', 11),
(8, '8.jpg', 'FERRARI', 'ULTRA', 52000, 2010, 'gazoil', 'manuelle', 145000, 3, 2, 'rouge', 13),
(9, '9.jpg', 'CITROEN', 'TRACTION', 11000, 1955, 'essence', 'manuelle', 230000, 5, 5, 'noir', 4),
(10, '10.jpg', 'MASERATI', 'RACE', 53200, 2019, 'gazoil', 'manuelle', 14000, 3, 2, 'gris', 12),
(11, '11.jpg', 'PEUGEOT', '308', 3000, 2011, 'essence', 'automatique', 175000, 5, 5, 'gris', 6),
(12, '12.jpg', 'PIAGGIO', 'VINTAGE', 500, 1960, 'essence', 'manuelle', 10500, 2, 2, 'bleu', 1),
(13, '13.jpg', 'RENAULT', 'MEGANE', 2500, 2014, 'gazoil', 'automatique', 206000, 5, 5, 'bordeaux', 5),
(14, '14.jpg', 'MUSTANG', 'SPORT', 17000, 2009, 'gazoil', 'manuelle', 180000, 3, 4, 'noir', 7),
(15, '15.jpg', 'HYUNDAI', 'RACE', 21000, 2016, 'gazoil', 'automatique', 78000, 3, 5, 'noir', 8),
(16, '16.jpg', 'VOLKSWAGEN', 'COMBI', 26000, 1967, 'essence', 'manuelle', 250000, 4, 6, 'rouge', 5);

-- ALIMENTATION TABLE MANAGE_CAR
INSERT INTO manage_car (idCar, idEmployee)
VALUES
(1, 7),
(2, 8),
(3, 7),
(4, 6),
(5, 7),
(6, 5),
(7, 8),
(8, 5),
(9, 7),
(10, 2),
(11, 6),
(12, 3),
(13, 1),
(14, 4),
(15, 7),
(16, 8);

-- ALIMENTATION TABLE OPTIONS
INSERT INTO options (idOption, category, option_description)
VALUES
(1, 'confort', 'bluetooth'),
(2, 'conduite','caméra de recul'),
(3, 'sécurité', 'éclairage directionnel'),
(4, 'sécurité', 'suivi de ligne'),
(5, 'conduite','stationnement automatique'),
(6, 'confort', 'vitres électriques'),
(7, 'confort', 'siège à mémoire de forme'),
(8, 'confort', 'ordinateur de bord'),
(9, 'esthétisme', 'jantes aluminium'),
(10, 'esthétisme', 'toit ouvrant'),
(11, 'confort', 'climatisation automatique'),
(12, 'esthétisme', 'sièges cuir'),
(13, 'sécurité', 'airbags'),
(14, 'confort', 'fermeture centralisée des portes'),
(15, 'conduite','régulateur de vitesse'),
(16, 'confort', 'sièges chauffants'),
(17, 'sécurité', 'aide au freinage d''urgence (AFU)'),
(18, 'sécurité', 'contrôle de la trajectoire (ESP)'),
(19, 'confort', 'accoudoir central'),
(20, 'sécurité', 'phares LED');

-- ALIMENTATION TABLE "CAR_OPTIONS"
INSERT INTO car_options (idCar, idOption)
VALUES
(1,1),(1,2),(1,3),(1,4),(1,5),(1,6),(1,7),(1,8),(1,9),(1,11),(1,12),(1,13),(1,14),(1,15),(1,16),(1,17),(1,18),(1,19),(1,20),
(2,1),(2,5),(2,6),(2,9),(2,11),(2,12),(2,13),(2,14),(2,15),(2,17),(2,19),
(4,1),(4,2),(4,3),(4,4),(4,5),(4,6),(4,7),(4,8),(4,9),(4,11),(4,12),(4,13),(4,14),(4,15),(4,16),(4,17),(4,18),(4,19),(4,20),
(5,1),(5,5),(5,6),(5,9),(5,11),(5,12),(5,13),(5,14),(5,15),(5,17),(5,19),
(6,1),(6,2),(6,3),(6,4),(6,5),(6,6),(6,7),(6,8),(6,9),(6,11),(6,12),(6,13),(6,14),(6,15),(6,16),(6,17),(6,18),(6,19),(6,20),
(7,1),(7,2),(7,6),(7,9),(7,11),(7,12),(7,13),(7,14),(7,17),
(8,1),(8,2),(8,3),(8,4),(8,5),(8,6),(8,7),(8,8),(8,9),(8,11),(8,12),(8,13),(8,14),(8,15),(8,16),(8,17),(8,18),(8,19),(8,20),
(9,12),
(10,1),(10,2),(10,3),(10,4),(10,5),(10,6),(10,7),(10,8),(10,9),(10,11),(10,12),(10,13),(10,14),(10,15),(10,16),(10,17),(10,18),(10,19),(10,20),
(11,6),(11,13),(11,15),
(13,1),(13,6),(13,9),(13,13),(13,15),
(14,1),(14,2),(14,6),(14,9),(14,11),(14,12),(14,13),(14,14),(14,17),
(15,1),(15,2),(15,3),(15,4),(15,5),(15,6),(15,7),(15,8),(15,9),(15,11),(15,12),(15,13),(15,14),(15,15),(15,16),(15,17),(15,18),(15,19),(15,20),
(16,10);

-- SUPPRESSION COLONNE "IMAGE_CAR" DE LA TABLE CAR
ALTER TABLE car
DROP car_image

-- MODIFICATION COLONNE "YEAR" DE LA TABLE CAR (A RENOMMER)
ALTER TABLE car
DROP year

-- MODIFICATION TYPE COLONNE "CAR_YEAR" DE LA TABLE CAR ADD
ALTER TABLE car
ADD car_year YEAR(4) 

-- ALIMENTATION COLONNE "CAR_YEAR" DE LA TABLE CAR
UPDATE car SET car_year = 2023 WHERE idCar=1;
UPDATE car SET car_year = 2018 WHERE idCar=2;
UPDATE car SET car_year = 1963 WHERE idCar=3;
UPDATE car SET car_year = 2022 WHERE idCar=4;
UPDATE car SET car_year = 2015 WHERE idCar=5;
UPDATE car SET car_year = 2023 WHERE idCar=6;
UPDATE car SET car_year = 2013 WHERE idCar=7;
UPDATE car SET car_year = 2010 WHERE idCar=8;
UPDATE car SET car_year = 1955 WHERE idCar=9;
UPDATE car SET car_year = 2019 WHERE idCar=10;
UPDATE car SET car_year = 2011 WHERE idCar=11;
UPDATE car SET car_year = 1960 WHERE idCar=12;
UPDATE car SET car_year = 2014 WHERE idCar=13;
UPDATE car SET car_year = 2009 WHERE idCar=14;
UPDATE car SET car_year = 2016 WHERE idCar=15;
UPDATE car SET car_year = 1967 WHERE idCar=16;


-- MODIFICATION DU TYPE DE LA COLONNE "CONTENT" DE LA TABLE REVIEW
ALTER TABLE review
MODIFY content TEXT

-- MODIFICATION DU CONTENU DE LA COLONNE "CONTENT" DE LA TABLE REVIEW
UPDATE review 
SET content = "Super merci vous êtes les meilleurs je recommande ++++. Ma voiture a été chouchoutée, nettoyée, l’équipe est très disponible et à l’écoute, et le prix très raisonnable par rapport à la prestation effectuée."
WHERE idReview=1;

UPDATE review 
SET content = "Le patron a compris mon problème et a très bien suivi mon dossier. Equipe très sympathique. Ils tiennent bien au courant de l’avancement des réparations et le délai annoncé est toujours respecté."
WHERE idReview=2;

UPDATE review 
SET content = "Je cherchais une occasion depuis un bon moment et grâce aux réseaux sociaux j’ai découvert le catalogue de voitures d’occasion du garage Parrot ; j’ai pu opérer une pré-sélection grâce aux supers descriptions des véhicules et j’ai eu un rdv très rapide pour venir sur place voir les voitures. Au top !"
WHERE idReview=3;

UPDATE review 
SET content = "Bon rapport qualité/prix (par rapport à d’autres garages alentours), je reviendrai et je recommande à tout mon entourage."
WHERE idReview=4;

-- MODIFICATION DE LA COLONNE "APPROVED" DE LA TABLE REVIEW
ALTER TABLE review
MODIFY approved BOOLEAN;

-- MODIFICATION DES LIGNES DE LA COLONNE "APPROVED"
UPDATE review
SET approved = TRUE
WHERE idReview = 1;

UPDATE review
SET approved = TRUE
WHERE idReview = 2;

UPDATE review
SET approved = TRUE
WHERE idReview = 3;

UPDATE review
SET approved = TRUE
WHERE idReview = 4;

-- MODIFICATION DU TYPE DE LA COLONE "DESCRIPTION_SERVICE" DE LA TABLE SERVICES
ALTER TABLE services
MODIFY description_service TEXT;

-- MISE A JOUR DES TEXTES DE LA COLONNE "DESCRIPTION_SERVICE"
UPDATE services
SET description_service = 
"Le garage Parrot assure un grand nombre d'interventions pour réparer votre véhicule : 
\n - Démarrage et charge : batteries, bougies d'allumage, bougies de préchauffage, démarreur, alternateur, circuit de charge.
\n - Echappement : pot d'échappement, catalyseur, vanne EGR, décalamitage ...
\n - Remplacement pièces moteur : injecteurs, liquide de refroidissement, joint de culasse, thermostat...
"
WHERE idServices=1;

UPDATE services
SET description_service = 
"L'entretien de votre véhicule est primordial pour assurer la bonne santé de celui-ci ainsi que votre sécurité. Le garage Parrot vous propose notamment les prestations suivantes : 
\n - Contrôle et diagnostics : sécurité, électronique, technique.
\n - Recherche de pannes.
\n - Révision et vidange.
\n - Freinage : plaquettes, disques...
\n - Echappement : nettotage filtre à particules (FAP), recharge du filtre à particules, recharge d'AdBlue.
\n - Kit de distribution.
\n - Embrayage et transmission : boîte de vitesse, cardan ...
\n - Climatisation.
"
WHERE idServices=2;

UPDATE services
SET description_service = 
"En toute saison, le garage est à votre service pour changer vos pneumatiques ainsi que pour réaliser les prestations liés à vos roues: 
\n - Suspension et géométrie :
\n - Roues et direction: équilibrage, biellette de direction ...
\n - Changement des pneus.
"
WHERE idServices=3;

UPDATE services
SET description_service = 
"Nous tenons à votre disposition des experts en carrosserie afin d'assurer les missions suivantes : 
\n - Rénovation de pièces de carrosserie.
\n - Réparation de pare-brise.
\n - Remplacement de pare-brise.
\n - Rénovation des optiques de phares.
"
WHERE idServices=4;

--SUPPRESSION DE LA TABLE "OPENING"
DROP TABLE IF EXISTS opening;

--CREATION DE LA TABLE "OPENING"
CREATE TABLE opening
(
	idOpening INT (11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    opening_day VARCHAR (50),
    morning_opening TIME,
    morning_closing TIME,
    afternoon_opening TIME,
    afternoon_closing TIME,
    idAdmin INT (11),
    FOREIGN KEY(idAdmin) REFERENCES administrator(idAdmin)
);

-- ALIMENTATION DE LA TABLE OPENING

INSERT INTO opening (idOpening, opening_day, morning_opening, morning_closing, afternoon_opening, afternoon_closing, idAdmin)
VALUES
(1, 'lundi', '8:00', '12:00', '14:00', '19:00', 1),
(2, 'mardi', '8:00', '12:00', '14:00', '19:00', 1),
(3, 'mercredi', '8:00', '12:00', '14:00', '19:00', 1),
(4, 'jeudi', '8:00', '12:00', '14:00', '19:00', 1),
(5, 'vendredi', '8:00', NULL, NULL, '18:00', 1),
(6, 'samedi', '9:00', '12:00', NULL, NULL, 1);

-- AJOUT UNE COLONNE "PROCESSED" A LA TABLE MESSAGES
ALTER TABLE messages
ADD processed BOOLEAN;

-- ALIMENTATION DE LA NOUVELLE COLONNE "PROCESSED"
UPDATE messages
SET processed = TRUE
WHERE idMessage=1;

UPDATE messages
SET processed = TRUE
WHERE idMessage=2;

UPDATE messages
SET processed = TRUE
WHERE idMessage=3;

UPDATE messages
SET processed = TRUE
WHERE idMessage=4;

UPDATE messages
SET processed = TRUE
WHERE idMessage=5;

-- AJOUT D'UNE LIGNE DANS LA TABLE MESSAGES
INSERT INTO messages (lastname, firstname, email, phone_numer, content, processed)
VALUES
("MARTIN", "Hubert", "hubmartin@free.fr", "0657125435", "Bonjour, je souhaiterais prendre rendez-vous pour effectuer un diagnostic complet de mon véhicule.Merci de me contacter très rapidement. HM", 0);

-- MODIFICATION DU TYPE DE 3 COLONNES DANS LA TABLE CAR
ALTER TABLE car
MODIFY price INTEGER;

ALTER TABLE car
MODIFY mileage INTEGER;

ALTER TABLE car
MODIFY horsepower INTEGER;