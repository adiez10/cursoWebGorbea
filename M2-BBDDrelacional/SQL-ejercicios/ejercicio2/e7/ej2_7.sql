/*Ejercicio 2.7*/

/*Apartado 1*/
CREATE TABLE oficinas(
  calle varchar(40),
  ciudad varchar(15)
);

ALTER TABLE oficinas ADD COLUMN telefono NUMERIC(9,0);
ALTER TABLE oficinas ADD CONSTRAINT UQ_TELF_OFICINA UNIQUE(telefono);

/*Apartado 2*/
ALTER TABLE oficinas ADD COLUMN cod_ofi INT NOT NULL;
ALTER TABLE oficinas ADD CONSTRAINT PK_OFI PRIMARY KEY(cod_ofi);
/*Apartado 3*/
ALTER TABLE oficinas ADD COLUMN cod_provincia INT NOT NULL;

ALTER TABLE oficinas ADD CONSTRAINT fk_ofi_prov
FOREIGN KEY (COD_PROVINCIA) REFERENCES provincias(Codigoprovincia);
/*Apartado 4*/
ALTER TABLE oficinas DROP ciudad;
ALTER TABLE oficinas DROP index UQ_TELF_OFICINA;
/*Apartado 5*/
ALTER TABLE oficinas DROP FOREIGN KEY fk_ofi_prov;
ALTER TABLE oficinas DROP COD_PROVINCIA;
/*Apartado 6*/
DROP TABLE oficinas;
