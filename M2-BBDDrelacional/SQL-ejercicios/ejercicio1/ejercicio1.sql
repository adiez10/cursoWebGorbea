/*Creación de la tabla*/
/*Apartado 1*/
CREATE TABLE miprimeratabla(
  DNI int NOT NULL,
  NOMBRE varchar(20) NOT NULL,
  CENTRO varchar(20) DEFAULT 'Arriaga',
  FECHA DATE UNIQUE,
  anyosmatricula int,
  PRIMARY KEY (DNI),
  CONSTRAINT anyoCK CHECK (anyosmatricula>1)
);

/*Apartado 2*/
ALTER TABLE miprimeratabla DROP CONSTRAINT anyoCK;
/*Apartado 3*/
ALTER TABLE miprimeratabla ADD CONSTRAINT anyoCK CHECK (anyosmatricula>1);
/*Apartado 4*/
ALTER TABLE miprimeratabla ADD COLUMN telefono int UNIQUE;
/*Apartado 5*/
ALTER TABLE miprimeratabla RENAME TABLE miprimeratabla to tabla; anyosmatricula anyos int;
/*Apartado 6*/
RENAME TABLE miprimeratabla to tabla;
/*Apartado 7*/
TRUNCATE TABLE tabla;
/*Apartado 8*/
DROP TABLE tabla CASCADE;
