CREATE DATABASE AmantesInformatica;
USE AmantesInformatica;

CREATE TABLE Departamento(
  codDpto INT(10),
  nombreDpto VARCHAR(100),
  PRIMARY KEY (codDpto)
);

CREATE TABLE Empleado(
  dniEmp VARCHAR(9),
  nombreEmp VARCHAR(100),
  apellidoEmp VARCHAR(100),
  direccionEmp VARCHAR(200),
  telefonoEmp INT(14),
  sueldoEmp NUMERIC(7,2),
  codDpto INT(10),
  PRIMARY KEY (dniEmp),
  CONSTRAINT fkempdpto FOREIGN KEY (codDpto)
    REFERENCES Departamento (codDpto)
);

CREATE TABLE Jefe(
  dniJefe VARCHAR(9),
  nombreJefe VARCHAR(100),
  codDpto INT(10),
  PRIMARY KEY (dniJefe),
  CONSTRAINT fkjefedpto FOREIGN KEY (codDpto)
    REFERENCES Departamento (codDpto)
);

CREATE TABLE Puesto(
  codPuesto VARCHAR(9),
  nombrePuesto VARCHAR(100),
  descripPuesto VARCHAR(350),
  PRIMARY KEY (codPuesto)
);

CREATE TABLE Ocupa(
  dniEmpOcupa VARCHAR(9),
  codPuestoOcupa VARCHAR(9),
  PRIMARY KEY (dniEmpOcupa,codPuestoOcupa),
  CONSTRAINT fkdniEmpOcupa FOREIGN KEY (dniEmpOcupa)
    REFERENCES Empleado (dniEmp),
  CONSTRAINT fkcodPuestoOcupa FOREIGN KEY (codPuestoOcupa)
    REFERENCES Puesto (codPuesto)
);
