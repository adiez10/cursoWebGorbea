/*Ejercicio 2.4*/
/*Actividad 1*/

/*Apartado 1*/
SELECT * FROM Camioneros WHERE poblacion = 'Vitoria-Gast';
/*Apartado 2*/
SELECT * FROM Camioneros;
/*Apartado 3*/
SELECT nombre, telefono FROM Camioneros;
/*Apartado 4*/
SELECT nombre, telefono FROM Camioneros WHERE nombre LIKE 'A%';
/*Apartado 5*/
SELECT nombre, telefono FROM Camioneros WHERE nombre LIKE 'I%' OR nombre LIKE 'E%';
/*Apartado 5.1*/
UPDATE Camioneros SET salario=1800 WHERE nombre = 'Idoia';
/*Apartado 5.2*/
UPDATE Camioneros SET salario=2100 WHERE nombre = 'Egoitz';
/*Apartado 5.3*/
UPDATE Camioneros SET salario=1500 WHERE nombre = 'Arturo';
/*Apartado 5.4*/
UPDATE Camioneros SET salario=2800 WHERE nombre = 'Amaia';

/*Apartado 6*/
SELECT dni, nombre FROM caminoneros WHERE salario>1600 AND salario <2700;
SELECT dni, nombre FROM camioneros WHERE salario BETWEEN 1600 AND 2700;
/*Apartado 7*/

/*Apartado 8*/
