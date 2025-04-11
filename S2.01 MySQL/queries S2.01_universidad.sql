SELECT apellido1, apellido2, nombre FROM persona ORDER BY apellido1, apellido2, nombre;
SELECT apellido1, apellido2, nombre FROM persona WHERE telefono IS NULL;
SELECT apellido1, apellido2, nombre, fecha_nacimiento FROM persona WHERE YEAR(fecha_nacimiento)=1999;
SELECT apellido1, apellido2, nombre FROM persona WHERE telefono IS NULL AND tipo = "profesor" AND RIGHT(nif,1)="K";
SELECT asignatura.nombre FROM asignatura INNER JOIN grado ON asignatura.id_grado=grado.id WHERE grado.id=7 AND asignatura.cuatrimestre=1 AND asignatura.curso=3;
SELECT persona.apellido1, persona.apellido2, persona.nombre, departamento.nombre FROM persona INNER JOIN profesor ON persona.id=profesor.id_profesor INNER JOIN departamento ON profesor.id_departamento=departamento.id ORDER BY persona.apellido1, persona.apellido2, persona.nombre;
SELECT asignatura.nombre, curso_escolar.anyo_inicio, curso_escolar.anyo_fin FROM asignatura INNER JOIN alumno_se_matricula_asignatura ON asignatura.id=alumno_se_matricula_asignatura.id_asignatura INNER JOIN persona ON alumno_se_matricula_asignatura.id_alumno=persona.id INNER JOIN curso_escolar ON alumno_se_matricula_asignatura.id_curso_escolar=curso_escolar.id WHERE persona.nif="26902806M";
SELECT DISTINCT departamento.nombre FROM departamento JOIN profesor ON departamento.id=profesor.id_departamento JOIN asignatura ON asignatura.id_profesor=profesor.id_profesor JOIN grado ON asignatura.id_grado=grado.id WHERE grado.id=4;
SELECT DISTINCT persona.apellido1, persona.apellido2, persona.nombre FROM persona INNER JOIN alumno_se_matricula_asignatura ON persona.id=alumno_se_matricula_asignatura.id_alumno INNER JOIN curso_escolar ON curso_escolar.id=alumno_se_matricula_asignatura.id_curso_escolar WHERE curso_escolar.anyo_inicio=2018;

SELECT departamento.nombre, persona.apellido1, persona.apellido2, persona.nombre FROM persona LEFT JOIN profesor ON persona.id=profesor.id_profesor LEFT JOIN departamento ON profesor.id_departamento=departamento.id WHERE persona.tipo="profesor" ORDER BY departamento.nombre, persona.apellido1, persona.apellido2, persona.nombre;
SELECT persona.apellido1, persona.apellido2, persona.nombre FROM persona LEFT JOIN profesor ON persona.id=profesor.id_profesor LEFT JOIN departamento ON profesor.id_departamento=departamento.id WHERE persona.tipo="profesor" AND profesor.id_departamento IS NULL ORDER BY departamento.nombre, persona.apellido1, persona.apellido2, persona.nombre;
SELECT departamento.nombre FROM departamento LEFT JOIN profesor ON departamento.id=profesor.id_departamento WHERE profesor.id_departamento IS NULL;
SELECT persona.apellido1, persona.apellido2, persona.nombre FROM persona INNER JOIN profesor ON persona.id=profesor.id_profesor LEFT JOIN asignatura ON profesor.id_profesor=asignatura.id_profesor WHERE asignatura.id_profesor IS NULL;
SELECT * FROM asignatura WHERE asignatura.id_profesor IS NULL;
SELECT departamento.id, departamento.nombre FROM departamento LEFT JOIN profesor ON departamento.id = profesor.id_departamento LEFT JOIN asignatura ON profesor.id_profesor = asignatura.id_profesor WHERE asignatura.id IS NULL GROUP BY departamento.id, departamento.nombre ORDER BY departamento.nombre;

/*Consultes resum*/
SELECT count(*) FROM persona WHERE persona.tipo="alumno";
SELECT count(*) FROM persona WHERE persona.tipo="alumno" AND YEAR(persona.fecha_nacimiento)=1999;
SELECT departamento.nombre, count(profesor.id_profesor) FROM departamento INNER JOIN profesor ON departamento.id=profesor.id_departamento GROUP BY departamento.id, departamento.nombre ORDER BY count(profesor.id_profesor) DESC;
SELECT departamento.nombre, count(profesor.id_profesor) FROM departamento LEFT JOIN profesor ON departamento.id=profesor.id_departamento GROUP BY departamento.id, departamento.nombre ORDER BY count(profesor.id_profesor) DESC;
SELECT grado.nombre, count(asignatura.id) FROM grado LEFT JOIN asignatura ON grado.id=asignatura.id_grado GROUP BY grado.id, grado.nombre ORDER BY count(asignatura.id) DESC;
SELECT grado.nombre, count(asignatura.id) FROM grado INNER JOIN asignatura ON grado.id=asignatura.id_grado GROUP BY grado.id, grado.nombre HAVING count(asignatura.id)>40 ORDER BY count(asignatura.id) DESC;
SELECT grado.nombre, asignatura.tipo, sum(asignatura.creditos) FROM grado INNER JOIN asignatura ON grado.id=asignatura.id_grado GROUP BY grado.id, grado.nombre, asignatura.tipo;
SELECT curso_escolar.anyo_inicio, count(alumno_se_matricula_asignatura.id_alumno) FROM curso_escolar INNER JOIN alumno_se_matricula_asignatura ON curso_escolar.id=alumno_se_matricula_asignatura.id_curso_escolar GROUP BY curso_escolar.anyo_inicio;
SELECT persona.id, persona.nombre, persona.apellido1, persona.apellido2, count(asignatura.id) FROM persona LEFT JOIN profesor ON persona.id=profesor.id_profesor LEFT JOIN asignatura ON profesor.id_profesor=asignatura.id_profesor WHERE persona.tipo = "profesor" GROUP BY persona.id, persona.nombre, persona.apellido1, persona.apellido2 ORDER BY count(asignatura.id) DESC, persona.id;
SELECT * FROM persona WHERE persona.tipo="alumno" ORDER BY fecha_nacimiento DESC LIMIT 1;
SELECT * FROM persona INNER JOIN profesor ON persona.id=profesor.id_profesor LEFT JOIN asignatura ON profesor.id_profesor=asignatura.id_profesor WHERE asignatura.id IS NULL;