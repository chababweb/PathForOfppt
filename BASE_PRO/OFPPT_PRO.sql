CREATE DATABASE OFPPT_PRO
USE OFPPT_PRO
CREATE TABLE profil
(Email VARCHAR(40) PRIMARY KEY,
Pass VARCHAR(40) NOT NULL,
V_Pass VARCHAR(40) check(V_Pass = Pass),
Nom_Pro VARCHAR(20),
Prenom_Pro VARCHAR(20),
Genre varchar(20), 
DateNaiss DATE,
Tel INT,
TypeP VARCHAR(20)
)

CREATE TABLE Filiere
(Code_Fil VARCHAR(20) PRIMARY KEY,
Nom_Fil VARCHAR(20),
Description TEXT 
)




CREATE TABLE Post
(id_Post INT PRIMARY KEY AUTO_INCREMENT,
contenu TEXT,
Lien_img TEXT,
Lien_video TEXT,
Email VARCHAR(40),
CONSTRAINT FkE_1 FOREIGN KEY (Email) REFERENCES profil(Email)
)
CREATE TABLE Commentaire
(id_Post INT,
Email VARCHAR(40),
CONSTRAINT FkE_2 FOREIGN KEY (id_Post) REFERENCES Post(id_Post),
CONSTRAINT FkE_3 FOREIGN KEY (Email) REFERENCES Profil(Email),
PRIMARY KEY(id_Post,Email)
)
CREATE TABLE Module
(id_Mod INT PRIMARY KEY,
Nom_Mod VARCHAR(30),
Code_Fil VARCHAR(20),
CIN_For VARCHAR(20),
CONSTRAINT FkE_4 FOREIGN KEY (Code_Fil) REFERENCES Filiere(Code_Fil),
CONSTRAINT FkE_5 FOREIGN KEY (CIN_For) REFERENCES Formateur(CIN_For)
)
CREATE TABLE Cour
(id_Cour INT PRIMARY KEY,
Nom_Cour VARCHAR(20),
contenu TEXT,
id_Mod INT,
CONSTRAINT FkE_6 FOREIGN KEY (id_Mod) REFERENCES Module(id_Mod)
)
CREATE TABLE Tp
(id_tp INT PRIMARY KEY,
Nom_tp VARCHAR(20),
contenu TEXT,
id_Mod INT,
CONSTRAINT FkE_7 FOREIGN KEY (id_Mod) REFERENCES Module(id_Mod)
)
CREATE TABLE Exam
(id_Exam INT PRIMARY KEY AUTO_INCREMENT,
Num_Exam INT,
DatePasse DATE,
id_Mod INT,
CONSTRAINT FkE_8 FOREIGN KEY (id_Mod) REFERENCES Module(id_Mod)
)
CREATE TABLE Note
(
id_Exam INT,
CIN_STG VARCHAR(20),
Note FLOAT,
CONSTRAINT FkE_1 FOREIGN KEY (id_Exam) REFERENCES Exam(id_Exam),
CONSTRAINT FkE_1 FOREIGN KEY (CIN_STG) REFERENCES Stagiaire(CIN_STG),
PRIMARY KEY(id_Exam,CIN_STG)
)


CREATE USER 'Abdessamad'@'localhost' IDENTIFIED BY 'Viserion'
GRANT ALL ON OFPPT_PRO.* TO 'Abdessamad'@'localhost'
CREATE USER 'Mohamed'@'localhost' IDENTIFIED BY 'Knucker'
GRANT ALL ON OFPPT_PRO.* TO 'Mohamed'@'localhost'
CREATE USER 'Abdellah'@'localhost' IDENTIFIED BY 'Saphira'
GRANT ALL ON OFPPT_PRO.* TO 'Abdellah'@'localhost'
CREATE USER 'Imad_Eddine'@'localhost' IDENTIFIED BY 'Balerion'
GRANT ALL ON OFPPT_PRO.* TO 'Imad_Eddine'@'localhost'










