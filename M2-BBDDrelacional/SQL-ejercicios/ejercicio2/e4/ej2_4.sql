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
SELECT dni, nombre FROM Camioneros WHERE salario>1600 AND salario <2700;
SELECT dni, nombre FROM camioneros WHERE salario BETWEEN 1600 AND 2700;
/*Apartado 7*/
SELECT telefono FROM Camioneros WHERE salario = 1500 OR salario = 2100 OR salario = 2800;
SELECT telefono FROM Camioneros WHERE salario IN (1500,2100,2800);
/*Apartado 8*/
SELECT * FROM Paquetes WHERE destinatario LIKE '7%';
/*Apartado 9*/
SELECT direccion FROM Paquetes WHERE descripcion = 'Ordenador';
/*Apartado 10*/
SELECT direccion FROM Paquetes WHERE descripcion LIKE 'C%' AND codigoprovincia = 2;
/*Apartado 11*/
SELECT * FROM Camiones;
/*Apartado 12*/
SELECT * FROM Camiones WHERE modelo = 'Renault' OR modelo = 'Iveco';
/*Apartado 13*/
SELECT matricula, modelo FROM Camiones WHERE potencia = 420 OR potencia = '310';
SELECT matricula, modelo FROM Camiones WHERE potencia IN (420,310);
/*Apartado 14*/
SELECT matricula, modelo FROM Camiones WHERE potencia >= 300 AND potencia <=400;
SELECT matricula, modelo FROM Camiones WHERE potencia BETWEEN 300 AND 400;
/*Apartado 15*/
SELECT matricula FROM llevan WHERE dni = '72525244D';
/*Apartado 16*/
SELECT matricula FROM llevan WHERE dni LIKE '7%';
/*Apartado 17*/
SELECT dni FROM llevan WHERE matricula = '5596MMA';

/*Actividad 2*/
/*Apartado 1*/
SELECT  Camioneros.nombre FROM Camioneros,Paquetes WHERE Camioneros.dni=Paquetes.dni AND Paquetes.descripcion = 'Abrigo';
SELECT  Camioneros.nombre FROM Camioneros JOIN Paquetes ON Camioneros.dni=Paquetes.dni WHERE Paquetes.descripcion = 'Abrigo';
/*Apartado 2*/
SELECT Camioneros.salario, Camioneros.poblacion FROM Camioneros,Paquetes
WHERE Camioneros.dni=Paquetes.dni AND Paquetes.direccion='Av. Gasteiz 66';
SELECT Camioneros.salario, Camioneros.poblacion FROM Camioneros JOIN Paquetes ON Camioneros.dni=Paquetes.dni
WHERE Paquetes.direccion='Av. Gasteiz 66';
/*Apartado 3*/
SELECT Camioneros.nombre, Paquetes.descripcion, Paquetes.destinatario, Paquetes.direccion
FROM Camioneros, Paquetes WHERE Camioneros.dni=Paquetes.dni AND Camioneros.poblacion='Vitoria-Gast';
SELECT Camioneros.nombre, Paquetes.descripcion, Paquetes.destinatario, Paquetes.direccion
FROM Camioneros JOIN Paquetes ON Camioneros.dni=Paquetes.dni
WHERE Camioneros.poblacion='Vitoria-Gast';
/*Apartado 4*/
SELECT Paquetes.* FROM Paquetes, Camioneros WHERE Camioneros.dni=Paquetes.dni AND Camioneros.salario = 2800;
SELECT Paquetes.* FROM Paquetes JOIN Camioneros ON Camioneros.dni=Paquetes.dni WHERE Camioneros.salario = 2800;
/*Apartado 5*/
SELECT Camioneros.nombre FROM Camioneros, Camiones, Llevan
WHERE Llevan.dni = Camioneros.dni AND Llevan.matricula = Camiones.matricula
AND Camiones.modelo = 'Ebro';
SELECT Camioneros.NOMBRE FROM Camioneros JOIN Llevan ON
Camioneros.DNI = Llevan.DNI JOIN Camiones ON Llevan.MATRICULA = Camiones.MATRICULA
WHERE MODELO='Ebro';
/*Apartado 6*/
SELECT Camiones.modelo, Camiones.tipo FROM Camiones, Camioneros, LLEVAN
WHERE Llevan.dni = Camioneros.dni AND Llevan.matricula = Camiones.matricula
AND Camioneros.salario>2000;
SELECT Camiones.modelo, Camiones.tipo FROM
Camioneros JOIN Llevan ON Camioneros.dni=Llevan.DNI
JOIN Camiones ON Camiones.matricula=llevan.matricula
WHERE Camioneros.salario>2000;
/*Apartado 7*/
SELECT Camioneros.nombre, Camioneros.telefono, Camioneros.direccion, Camiones.tipo
FROM Camioneros, Camiones, Llevan
WHERE Camioneros.dni= Llevan.dni AND Camiones.matricula=Llevan.MATRICULA
AND (tipo LIKE 'P%' OR tipo LIKE 'M%');
SELECT Camioneros.nombre, Camioneros.telefono, Camioneros.direccion, Camiones.tipo
FROM Camioneros JOIN Llevan ON Camioneros.dni= Llevan.dni
JOIN Camiones ON Camiones.matricula=Llevan.matricula
WHERE tipo LIKE 'P%' OR tipo LIKE 'M%';
/*Apartado 8*/
SELECT Camiones.modelo, Camiones.tipo, Camiones.potencia, Camioneros.nombre
FROM Camioneros, Camiones, Llevan, Paquetes
WHERE Camioneros.dni = Llevan.dni AND Llevan.matricula = Camiones.matricula AND Camioneros.dni = Paquetes.DNI
AND Paquetes.descripcion= 'Zapatillas';
SELECT Camiones.modelo, Camiones.tipo, Camiones.potencia, Camioneros.nombre
FROM Camiones JOIN Llevan ON Camiones.matricula = Llevan.matricula
JOIN Camioneros ON Camioneros.dni = Llevan.dni
JOIN Paquetes ON Camioneros.dni = Paquetes.dni
WHERE Paquetes.descripcion= 'Zapatillas';
