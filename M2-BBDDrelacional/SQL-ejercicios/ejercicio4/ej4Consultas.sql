/*Lista de los trabajadores cuyo código de departamento sea 123*/
SELECT * FROM empleado WHERE codDpto=123;
/*Muestra todos los trabajadores del departamento de Compras (deben aparecer todos los
datos de los trabajadores)*/
SELECT empleado.* FROM empleado, departamento
WHERE empleado.codDpto = departamento.codDpto
AND departamento.nombreDpto = 'Compras';
/*Los nombres de los trabajadores que no tienen número de teléfono y pertenecen al
departamento de finanzas*/
SELECT empleado.nombreEmp FROM empleado, departamento
WHERE empleado.codDpto = departamento.codDpto
AND empleado.telefonoEmp IS NULL AND departamento.nombreDpto = 'Finanzas';
/*La lista de los DNIs de los trabajadores que no tienen teléfono*/
SELECT dniEmp FROM empleado WHERE telefonoEmp IS NULL;
/*El nombre (del empleado) de aquellos trabajadores que ganan más de 1400€*/
SELECT nombreEmp FROM empleado WHERE sueldoEmp > 1400;
/*El nombre (del empleado) y el nombre del puesto de trabajo de aquellos trabajadores que
ganan más de 1400€*/
SELECT empleado.nombreEmp, puesto.nombrePuesto
FROM empleado,puesto,ocupa
WHERE empleado.dniEmp = ocupa.dniEmpOcupa
AND puesto.codPuesto = ocupa.codPuestoOcupa
AND empleado.sueldoEmp > 1400;
/*Los nombres y apellidos de aquellos trabajadores cuyo DNI empiece por 123*/
SELECT nombreEmp, apellidoEmp FROM empleado WHERE dniEmp LIKE '123%';
/*El sueldo más alto*/
SELECT MAX(sueldoEmp) FROM empleado;
/*El nombre y el apellido del empleado con sueldo más alto*/
SELECT nombreEmp, apellidoEmp FROM empleado
WHERE sueldoEmp=(SELECT MAX(sueldoEmp) FROM empleado);
/*El nombre del departamento de aquellos departamentos cuya primera letra está
comprendida de la A a la M. (Investigar cómo se haría)*/
SELECT nombreDpto FROM departamento WHERE nombreDpto BETWEEN 'A' AND 'M';
SELECT nombreDpto FROM departamento WHERE nombreDpto > 'A' AND nombreDpto<'M';
/*La descripción del puesto de trabajo cuyo nombre termina en “ero”*/
SELECT descripPuesto FROM puesto WHERE nombrePuesto LIKE '%ero';
/*El nombre del jefe del departamento donde trabaja Lorea*/
SELECT jefe.nombreJefe FROM departamento, jefe, empleado
WHERE jefe.codDpto = departamento.codDpto
AND departamento.codDpto = empleado.codDpto
AND empleado.nombreEmp = 'Lorea';
/*El nombre del departamento que no tiene trabajadores*/
SELECT nombreDpto FROM departamento
WHERE codDpto NOT IN (SELECT codDpto FROM empleados);
