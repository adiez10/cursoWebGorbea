/*Ej1*/
SELECT * FROM empleados;
/*Ej2*/
SELECT * FROM departamentos;
/*Ej3*/
SELECT * FROM empleados WHERE cargoE = 'Secretaria';
/*Ej4*/
SELECT nomEmp,salEmp FROM empleados;
/*Ej5*/
SELECT * FROM empleados WHERE cargoE = 'Vendedor' ORDER BY nomEmp DESC;
/*Ej6*/
SELECT nombreDpto FROM departamentos;
/*sin repeticiones*/SELECT DISTINCT nombreDpto FROM departamentos;
/*Ej7*/
SELECT nomEmp, cargoE FROM empleados ORDER BY salEmp;
SELECT nomEmp, cargoE,salEmp FROM empleados ORDER BY salEmp;
/*Ej8*/
SELECT salEmp,comisionE FROM empleados WHERE codDepto = 2000 ORDER BY comisionE;
/*Ej9*/
SELECT comisionE FROM empleados;
/*Ej10*/
SELECT nomEmp, salEmp, (salEmp+500000) as 'paga extra'
FROM empleados WHERE codDepto = 3000 ORDER BY nomEmp;
/*Ej11*/
SELECT * FROM empleados WHERE comisionE>salEmp;
/*Ej12*/
SELECT * FROM empleados WHERE comisionE<=(salEmp*0.3);
/*Ej13*/
SELECT nomEmp as 'NOMBRE',cargoE as 'CARGO' FROM empleados;
/*Ej14*/
SELECT salEmp, comisionE,codDepto FROM empleados WHERE codDepto>2500;
/*Ej15*/
SELECT nomEmp,cargoE FROM empleados WHERE nomEmp>'J' AND nomEmp<'Z' ORDER BY nomEmp;
SELECT nomEmp,cargoE FROM empleados WHERE nomEmp BETWEEN 'J' AND 'Z' ORDER BY nomEmp;
/*Ej16*/
SELECT salEmp, comisionE, (salEmp+comisionE) as 'SalarioTotal', nDIEmp, nomEmp
FROM empleados WHERE comisionE>1000000 ORDER BY nDIEmp;
/*Ej17*/
SELECT * FROM empleados WHERE comisionE=0;
SELECT salEmp, comisionE, (salEmp+comisionE) as 'SalarioTotal', nDIEmp, nomEmp
FROM empleados WHERE comisionE=0 ORDER BY nDIEmp;
/*Ej18*/
SELECT * FROM empleados WHERE upper(nomEmp) NOT LIKE '%MA%';
/*Ej19*/
SELECT nombreDpto FROM departamentos
WHERE nombreDpto <> 'VENTAS' AND nombreDpto <> 'INVESTIGACIÓN'
AND nombreDpto <> 'MANTENIMIENTO';
SELECT nombreDpto FROM departamentos
WHERE nombreDpto NOT IN ('VENTAS','INVESTIGACIÓN','MANTENIMIENTO');
/*Ej20*/
SELECT empleados.nomEmp, departamentos.nombreDpto FROM empleados, departamentos
WHERE empleados.codDepto = departamentos.codDepto
AND (empleados.cargoE='Secretaria' OR empleados.cargoE ='Vendedor')
AND departamentos.nombreDpto <> 'PRODUCCIÓN' AND empleados.salEmp > 1000000
ORDER BY fecIncorporacion;
/*Ej21*/
SELECT * FROM empleados WHERE char_length(nomemp) = 11;
/*Ej22*/
SELECT * FROM empleados WHERE char_length(nomemp) >= 11;
/*Ej23*/
select emp.nomEmp, dpt.nombreDpto, emp.salEmp
from empleados emp, departamentos dpt
where emp.codDepto=dpt.codDepto and lower(emp.nomEmp) like 'm%'
and (emp.salEmp > 800000 or emp.comisionE>0)
and lower(dpt.nombreDpto)='ventas';
/*Ej24*/
SELECT nomEmp, salEmp, comisionE FROM empleados
WHERE salEmp > (comisionE/2) AND salEmp < comisionE;
/*Ej25*/
SELECT max(salEmp) FROM empleados;
/*Ej26*/
SELECT comisionE, count(*) AS 'numeroEmpleados'
FROM empleados GROUP BY (comisionE)
HAVING  (comisionE > 0);
/*Ej27*/
SELECT max(nomEmp) FROM empleados;
/*Ej28*/
SELECT max(salEmp) AS 'MaximoSalario', min(salEmp) AS 'MinimoSalario',
(max(salEmp)-min(salEmp)) AS 'Diferencia' FROM empleados;
/*Ej29*/
SELECT codDepto, sexemp, count(*)
FROM empleados
GROUP BY codDepto, sexemp;
/*Ej30*/
SELECT AVG(salEmp), codDepto FROM empleados GROUP BY codDepto;
/*Ej31*/
SELECT * FROM empleados
WHERE salEmp>= (SELECT AVG(salEmp) FROM empleados);
/*Ej32*/
select d.codDepto, d.nombreDpto, count(*) as 'Num empleados'
from departamentos d, empleados e
where d.codDepto=e.codDepto group by d.codDepto
having count(*) >= 3;
/*Ej33*/
select j.nDIEmp, j.nomEmp, count(*) as 'Num Empleados'
from empleados e, empleados j where e.jefeID=j.nDIEmp
group by j.nomEmp having count(*)>=2 order by count(*) desc;
/*Ej34*/
select d.nombreDpto, sum(e.salEmp) from departamentos d, empleados e
where d.codDepto=e.codDepto group by d.nombreDpto
order by sum(e.salEmp) desc limit 1;
/*Ej35*/
INSERT INTO empleados (nDIEmp,nomEmp,sexEmp,fecNac,fecIncorporacion,salEmp,comisione,cargoE,jefeID,codDepto)
VALUES('71.222.111','Pedro Mora','M','1980-12-18','2003-04-02',1200000,200000,'Asesor','22.222.222','3500');
SELECT * FROM empleados where nomEmp='Pedro Mora';
/*Ej36*/
UPDATE empleados SET salEmp = 140000 , comisionE = 300000 WHERE nomEmp = 'Pedro Mora';
SELECT * FROM empleados WHERE nomEmp='Pedro Mora';
/*Ej37*/
UPDATE empleados SET salEmp=(salEmp*3), comisionE=(comisionE/2)
WHERE cargoE='Asesor';
SELECT * FROM empleados WHERE cargoE='Asesor';
/*Ej38*/
DELETE FROM empleados where nomEmp='Pedro Mora';
