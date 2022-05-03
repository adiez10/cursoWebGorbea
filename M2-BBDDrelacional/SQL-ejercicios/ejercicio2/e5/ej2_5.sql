/*Ejercicio 2.5*/
/*Actividad 1*/
/*Apartado 1*/
SELECT COUNT(*),poblacion FROM Camioneros GROUP BY poblacion;
/*Apartado 2*/
SELECT AVG(salario),poblacion FROM Camioneros GROUP BY poblacion;
/*Apartado 3*/
SELECT MIN(salario),MAX(salario),poblacion FROM Camioneros GROUP BY poblacion;
/*Apartado 4*/
SELECT SUM(salario),poblacion FROM Camioneros GROUP BY poblacion;
/*Apartado 5*/
SELECT COUNT(*),poblacion FROM Camioneros WHERE edad>50 GROUP BY poblacion;
/*Apartado 6*/
SELECT COUNT(*),poblacion FROM Camioneros WHERE edad<=50 GROUP BY poblacion;
/*Apartado 7*/
SELECT poblacion,AVG(salario),MAX(salario),MIN(salario),COUNT(*)
FROM Camioneros WHERE edad>50 GROUP BY poblacion;
/*Apartado 8*/
SELECT poblacion,AVG(salario),MAX(salario),MIN(salario),COUNT(*)
FROM Camioneros WHERE edad<=50 GROUP BY poblacion;
/*Apartado 9*/
SELECT poblacion,AVG(salario),MAX(salario), MIN(salario)
FROM Camioneros GROUP BY poblacion HAVING AVG(salario)>2000;
/*Apartado 10*/
SELECT poblacion,AVG(salario),MAX(salario), MIN(salario)
FROM Camioneros GROUP BY poblacion HAVING AVG(salario)<2000;
/*Apartado 11*/
SELECT poblacion,AVG(edad),MIN(edad),MAX(edad) FROM Camioneros GROUP BY poblacion;
/*Apartado 12*/
SELECT poblacion,AVG(edad),MIN(edad),MAX(edad)
FROM Camioneros WHERE edad>=40 GROUP BY poblacion;
/*Apartado 13*/
SELECT poblacion,AVG(edad),MIN(edad),MAX(edad)
FROM Camioneros WHERE edad<40 GROUP BY poblacion;
/*Apartado 14*/
SELECT poblacion,AVG(edad),MIN(edad), MAX(edad)
FROM Camioneros GROUP BY poblacion HAVING AVG(edad)>40;
/*Apartado 15*/
SELECT poblacion,AVG(edad),MIN(edad), MAX(edad)
FROM Camioneros GROUP BY poblacion HAVING AVG(edad)<=40;
/*Apartado 16*/
SELECT poblacion,AVG(salario),MAX(salario),MIN(salario),COUNT(*)
FROM Camioneros WHERE salario>2000 GROUP BY poblacion
HAVING COUNT(*)>=2;
/*Apartado 17*/
SELECT poblacion,AVG(edad),MIN(edad),MAX(edad),COUNT(*)
FROM Camioneros WHERE salario>2000 GROUP BY poblacion
HAVING AVG(edad)>50;
/**********************************************************************/
/*Actividad 2*/

/*Apartado 1*/
SELECT dni, nombre FROM Camioneros
WHERE salario = (SELECT MAX(salario) FROM Camioneros);
/*Apartado 2*/
SELECT dni, nombre FROM Camioneros
WHERE salario = (SELECT MIN(salario) FROM Camioneros);
/*Apartado 3*/
SELECT nombre, telefono, salario FROM Camioneros
WHERE salario > (SELECT AVG(salario) FROM Camioneros);
/*Apartado 4*/
SELECT telefono, salario, nombre FROM camioneros
WHERE SALARIO>ALL(SELECT AVG(salario) FROM Camioneros GROUP BY poblacion)
/*Apartado 5*/
SELECT nombre, salario, edad FROM Camioneros
WHERE edad<40 AND salario > (SELECT AVG(salario) FROM Camioneros);
/*Apartado 6*/
SELECT nombre, salario, edad FROM Camioneros
WHERE edad = (SELECT MIN(edad) FROM Camioneros);
/*Apartado 7*/
SELECT nombre, salario, edad FROM Camioneros
WHERE edad = (SELECT MAX(edad) FROM Camioneros);
