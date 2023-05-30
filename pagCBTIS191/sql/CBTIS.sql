DROP DATABASE IF EXISTS CBTIS ;
CREATE DATABASE CBTIS;
USE CBTIS;
CREATE TABLE Alumnos (
    Num_De_Control BIGINT NOT NULL PRIMARY KEY,
    Nombre VARCHAR(50),
    Ap_Pat VARCHAR(30),
    Ap_Mat VARCHAR(30),
    Grado INT,
    Grupo VARCHAR(4)
);


CREATE TABLE Profesores ( 
	Matri_Profs INT NOT NULL PRIMARY KEY ,
	Nombre VARCHAR(30),
    Apellidos VARCHAR (70),
    Telefono VARCHAR(20),
    Contraseña varchar (30)
);   

CREATE TABLE Materias (
id_materia INT not null primary key ,
Nom_Mat VARCHAR(30),
Matri_Profs INT,
FOREIGN KEY (Matri_Profs) references Profesores (Matri_Profs)
);

CREATE TABLE Calificaciones ( 

ID_Calificacion int  primary KEY ,
	Promedios INT  ,
    Parcial_1 INT,
    Parcial_2 INT,
    Parcial_3 INT,
	id_materia INT,
	Num_De_Control BIGINT,
    FOREIGN KEY (id_materia) REFERENCES Materias (id_materia),
    FOREIGN KEY (Num_De_Control) REFERENCES Alumnos (Num_De_Control)
);



CREATE TABLE Boletas ( 
Num_De_Control BIGINT,
id_materia INT,
ID_Calificacion int,
foreign key (Num_De_Control) references Alumnos (Num_De_Control),
foreign key (id_materia) references Materias (id_materia),
foreign key (ID_Calificacion ) references Calificaciones (ID_Calificacion)
);


/*CREATE TABLE cbtis_191 (
id_cbtis_191 INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
id_Infrestructuras INT NOT NULL,
id_Num_De_Control FLOAT NOT NULL,
id_Calificaciones INT NOT NULL,
id_Profesores INT NOT NULL,
id_Materias INT NOT NULL,

FOREIGN KEY (id_Infrestructuras) REFERENCES Infrestructuras (id_Infrestructuras),
FOREIGN KEY (id_Num_De_Control) REFERENCES Alumnos (id_Num_De_Control),
FOREIGN KEY (id_Calificaciones) REFERENCES Calificaciones (id_Calificaciones),
FOREIGN KEY (id_Profesores) REFERENCES  Profesores (id_Profesores),
FOREIGN KEY (id_Materias) REFERENCES Materias (id_Materias)

);*/

/*CREATE TABLE roles (
	id_rol INT NOT NULL,
    rol varchar(50)
);*/



USE CBTIS;
INSERT INTO Alumnos (
Num_De_Control, Nombre, Ap_Pat, Ap_Mat, Grado, Grupo) values
(005, 'Panfilo', 'Fox', 'Lopez', 4, 'c');
INSERT INTO Alumnos (
Num_De_Control, Nombre, Ap_Pat, Ap_Mat, Grado, Grupo) values
(006, 'Pancracia', 'Sing', 'Herculanea', 4, 'c');
INSERT INTO Alumnos (
Num_De_Control, Nombre, Ap_Pat, Ap_Mat, Grado, Grupo) values
(007, 'Dualipa', 'Ana', 'Garcia', 4, 'c');


INSERT INTO Profesores (
Matri_profs, Nombre, Apellidos, Telefono, Contraseña) values
(1, 'Joshep', 'Salazar Mendez', 789546,' CBTIS19101');
INSERT INTO Profesores (
Matri_profs, Nombre, Apellidos, Telefono, Contraseña) values
(2, 'Maria', 'Salazar Mendez', 78957888,' CBTIS19102');

INSERT INTO Materias (
id_materia ,Nom_Mat, Matri_Profs) values
(1,'Español', 1);
INSERT INTO Materias (
id_materia,Nom_Mat, Matri_Profs) values
(2,'Matematicas', 2);

INSERT INTO Calificaciones (
ID_Calificacion,Promedios, Parcial_1, Parcial_2, Parcial_3,id_materia,Num_De_Control) values
(1,9,9,9,9,1,005);
INSERT INTO Calificaciones (
ID_Calificacion,Promedios, Parcial_1, Parcial_2, Parcial_3,id_materia,Num_De_Control ) values
(2,7,7,7,7,2,005);
INSERT INTO Calificaciones (
ID_Calificacion,Promedios, Parcial_1, Parcial_2, Parcial_3,id_materia,Num_De_Control) values
(3,8,8,8,8,1,006);
INSERT INTO Calificaciones (
ID_Calificacion,Promedios, Parcial_1, Parcial_2, Parcial_3,id_materia,Num_De_Control) values
(4,9,9,9,9,2,006);
INSERT INTO Calificaciones (
ID_Calificacion,Promedios, Parcial_1, Parcial_2, Parcial_3,id_materia,Num_De_Control) values
(5,8,8,8,8,1,007);
INSERT INTO Calificaciones (
ID_Calificacion,Promedios, Parcial_1, Parcial_2, Parcial_3,id_materia,Num_De_Control) values
(6,7,7,7,7,2,007);

INSERT INTO boletas (
Num_De_Control, id_materia, ID_Calificacion) VALUES
(005,'1',1);
INSERT INTO boletas (
Num_De_Control, id_materia, ID_Calificacion) VALUES
(005,'2',2);


INSERT INTO boletas (
Num_De_Control, id_materia, ID_Calificacion) VALUES
(006,'1',3);
INSERT INTO boletas (
Num_De_Control, id_materia, ID_Calificacion) VALUES
(006,'2',4);


INSERT INTO boletas (
Num_De_Control, id_materia, ID_Calificacion) VALUES
(007,'1',5);
INSERT INTO boletas (
Num_De_Control, id_materia, ID_Calificacion) VALUES
(007,'2',6);

