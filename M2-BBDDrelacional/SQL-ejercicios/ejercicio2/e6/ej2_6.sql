/*Ejercicio 2.6*/

/*Apartado 1*/
DROP TABLE Veteranos CASCADE CONSTRAINTS;

CREATE TABLE Veteranos(
  dni varchar(9),
  nombre varchar(15),
  telefono int(11),
  direccion varchar(30),
  salario numeric(8,2),
  poblacion varchar(12),
  edad int(11),
  PRIMARY KEY(dni)
);

INSERT INTO Veteranos (SELECT * FROM Camioneros WHERE edad>50);

/*Apartados 2*/
DROP TABLE Camioneros_Vitoria CASCADE CONSTRAINTS;

CREATE TABLE Camioneros_Vitoria(
  dni varchar(9),
  nombre varchar(100),
  direccion varchar(100),
  PRIMARY KEY (dni)
);

INSERT INTO Camioneros_Vitoria (SELECT dni,nombre,direccion
  FROM Camioneros WHERE poblacion='Vitoria-Gast');

/*Apartado 3*/
DROP TABLE Camioneros_Pobres CASCADE CONSTRAINTS;

CREATE TABLE Camioneros_Pobres(
  dni varchar(9),
  nombre varchar(100),
  salario numeric(8,2),
  poblacion varchar(100),
  edad int(11),
  PRIMARY KEY(dni)
);

INSERT INTO Camioneros_Pobres (dni, nombre, salario)
(SELECT dni, nombre, salario FROM Camioneros WHERE salario <= 1500)
