CREATE TABLE empleados (
 dni int(9),
 nombre VARCHAR(20) NOT NULL,
 centro VARCHAR(20) DEFAULT 'Arriaga',
 sueldo int(10) NOT NULL,
    PRIMARY KEY (dni)
 );
/****************************/
/*Apartado 1*/
INSERT INTO empleados (dni,nombre,centro,sueldo) VALUES (12345,'Jaime','Arriaga',1000);
INSERT INTO empleados (dni,nombre,centro,sueldo) VALUES (54321,'Marta','Molinuevo',2000);
INSERT INTO empleados (dni,nombre,centro,sueldo) VALUES (98765,'Julián','Arriaga',1000);
INSERT INTO empleados (dni,nombre,centro,sueldo) VALUES (11111,'Sofía','Txus',3000);
/*Apartado 2*/
INSERT INTO empleados (dni,nombre,sueldo) VALUES (99999, 'Andrea', 2000);
/*Apartado 3*/
UPDATE empleados SET sueldo=sueldo+500 WHERE sueldo = 1000;
UPDATE empleados SET sueldo=1500 WHERE sueldo = 1000;
/*Apartado 4*/
UPDATE empleados SET centro='Arriaga' WHERE centro<>'Arriaga';
UPDATE empleados SET centro='Arriaga';
/*Apartado 5*/
DELETE FROM empleados WHERE dni=(SELECT dni FROM empleados WHERE nombre = 'Sofía');

SELECT dni FROM empleados WHERE nombre = 'Sofía';
DELETE FROM empleados WHERE dni='11111';

/*Apartado 6*/
SELECT * FROM empleados;

/*Apartado 7*/
SELECT nombre FROM empleados;
/*Apartado 7.1 Mostrar los sueldos de los empleados*/
SELECT sueldo FROM empleados;
/*Apartado 7.2 Mostrar los sueldos de los empleados, sin que aparezcan repetidos*/
SELECT DISTINCT sueldo FROM empleados;
/*Apartado 8*/
SELECT dni,nombre FROM empleados WHERE sueldo = 2000;
