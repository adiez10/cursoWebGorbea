/*Tabla Departamento*/
INSERT INTO Departamento (codDpto,nombreDpto) VALUES(123,'Compras');
INSERT INTO Departamento (codDpto,nombreDpto) VALUES(451,'Ventas');
INSERT INTO Departamento (codDpto,nombreDpto) VALUES(735,'RRHH');
INSERT INTO Departamento (codDpto,nombreDpto) VALUES(655,'Finanzas');
INSERT INTO Departamento (codDpto,nombreDpto) VALUES(362,'Producción');
/*Tabla Empleado*/
INSERT INTO Empleado (dniEmp,nombreEmp,apellidoEmp,direccionEmp,telefonoEmp,sueldoEmp,codDpto)
VALUES ('1234567K', 'Lorea', 'Agirre', 'Erreka 12', 555123456, 1600, 123);
INSERT INTO Empleado (dniEmp,nombreEmp,apellidoEmp,direccionEmp,telefonoEmp,sueldoEmp,codDpto)
VALUES ('4124914Y', 'Haizea', 'Etxeberria', 'Boulevard 4', 523023915, 1500, 735);
INSERT INTO Empleado (dniEmp,nombreEmp,apellidoEmp,direccionEmp,telefonoEmp,sueldoEmp,codDpto)
VALUES ('1477392P', 'Jon', 'Dominguez', 'Mungia 54', 531308398, 1450, 362);
INSERT INTO Empleado (dniEmp,nombreEmp,apellidoEmp,direccionEmp,telefonoEmp,sueldoEmp,codDpto)
VALUES ('1230358B', 'Irati', 'Perez', 'Mendieta 15',NULL,1700, 655);
INSERT INTO Empleado (dniEmp,nombreEmp,apellidoEmp,direccionEmp,telefonoEmp,sueldoEmp,codDpto)
VALUES ('6421205N', 'Jokin', 'Iradier', 'Agurain 32', 542009391, 1300, 123);

/*Jefe*/
INSERT INTO Jefe (dniJefe,nombreJefe,codDpto) VALUES ('12628372D', 'Juan', 123);
INSERT INTO Jefe (dniJefe,nombreJefe,codDpto) VALUES ('23483635G', 'Joxe', 451);
INSERT INTO Jefe (dniJefe,nombreJefe,codDpto) VALUES ('77733328N', 'Mireia', 655);
INSERT INTO Jefe (dniJefe,nombreJefe,codDpto) VALUES ('24412443S', 'Koldo',735);
INSERT INTO Jefe (dniJefe,nombreJefe,codDpto) VALUES ('11145234W', 'Idoia', 362);

/*Puesto*/
INSERT INTO Puesto (codPuesto,nombrePuesto,descripPuesto)
VALUES ('1','Técnico','Descripción del técnico');
INSERT INTO Puesto (codPuesto,nombrePuesto,descripPuesto)
VALUES ('2','Comercial','Descripción del comercial');
INSERT INTO Puesto (codPuesto,nombrePuesto,descripPuesto)
VALUES ('3','Ingeniero','Descripción del ingeniero');
INSERT INTO Puesto (codPuesto,nombrePuesto,descripPuesto)
VALUES ('4','Investigador','Descripción del investigador');

/*Tabla Ocupa*/
INSERT INTO Ocupa (dniEmpOcupa, codPuestoOcupa)
VALUES('1234567K',1);
INSERT INTO Ocupa (dniEmpOcupa, codPuestoOcupa)
VALUES('1234567K',2);
INSERT INTO Ocupa (dniEmpOcupa, codPuestoOcupa)
VALUES('1477392P',3);
INSERT INTO Ocupa (dniEmpOcupa, codPuestoOcupa)
VALUES('1230358B',1);
INSERT INTO Ocupa (dniEmpOcupa, codPuestoOcupa)
VALUES('1230358B',4);
INSERT INTO Ocupa (dniEmpOcupa, codPuestoOcupa)
VALUES('6421205N',3);
