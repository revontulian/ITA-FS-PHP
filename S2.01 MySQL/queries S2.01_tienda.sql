SELECT nombre FROM producto;
SELECT nombre, precio FROM producto;
SELECT * FROM producto;
SELECT nombre, precio, (precio*1.1) FROM producto;
SELECT nombre AS "nom de producto", precio AS "euros" , (precio*1.1) AS "dòlars nord americans" FROM producto;
SELECT upper(nombre), precio FROM producto;
SELECT lower(nombre), precio FROM producto;
SELECT nombre, upper(left(nombre, 2)) FROM fabricante;
SELECT nombre, round(precio) FROM producto;
SELECT nombre, truncate(precio, 0) FROM producto;
SELECT codigo_fabricante FROM producto;
SELECT DISTINCT codigo_fabricante FROM producto;
SELECT nombre FROM fabricante ORDER BY nombre ASC;
SELECT nombre FROM fabricante ORDER BY nombre DESC;
SELECT nombre, precio FROM producto ORDER BY nombre ASC, precio DESC;
SELECT nombre FROM fabricante LIMIT 5;
SELECT nombre FROM fabricante LIMIT 2 OFFSET 3;
SELECT nombre, precio FROM producto ORDER BY precio ASC LIMIT 1;
SELECT nombre, precio FROM producto ORDER BY precio DESC LIMIT 1;
SELECT nombre FROM producto WHERE codigo_fabricante = 2;
SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto INNER JOIN fabricante ON producto.codigo_fabricante=fabricante.codigo;
SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto INNER JOIN fabricante ON producto.codigo_fabricante=fabricante.codigo ORDER BY fabricante.nombre;
SELECT producto.codigo, producto.nombre, fabricante.codigo, fabricante.nombre FROM producto INNER JOIN fabricante ON producto.codigo_fabricante=fabricante.codigo;
SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto INNER JOIN fabricante ON producto.codigo_fabricante=fabricante.codigo ORDER BY producto.precio LIMIT 1;
SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto INNER JOIN fabricante ON producto.codigo_fabricante=fabricante.codigo ORDER BY producto.precio DESC LIMIT 1;
SELECT producto.nombre, fabricante.nombre FROM producto INNER JOIN fabricante ON producto.codigo_fabricante=fabricante.codigo WHERE fabricante.nombre = "Lenovo";
SELECT producto.nombre, fabricante.nombre, producto.precio FROM producto INNER JOIN fabricante ON producto.codigo_fabricante=fabricante.codigo WHERE fabricante.nombre = "Crucial" AND producto.precio > 200;
SELECT producto.nombre, fabricante.nombre FROM producto INNER JOIN fabricante ON producto.codigo_fabricante=fabricante.codigo WHERE fabricante.nombre = "Asus" OR fabricante.nombre = "Hewlett-Packard" OR fabricante.nombre = "Seagate";
SELECT producto.nombre, fabricante.nombre FROM producto INNER JOIN fabricante ON producto.codigo_fabricante=fabricante.codigo WHERE fabricante.nombre IN ("Asus", "Hewlett-Packard", "Seagate");
SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto INNER JOIN fabricante ON producto.codigo_fabricante=fabricante.codigo WHERE right(fabricante.nombre,1)="e";
SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto INNER JOIN fabricante ON producto.codigo_fabricante=fabricante.codigo WHERE fabricante.nombre LIKE "%w%";
SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto INNER JOIN fabricante ON producto.codigo_fabricante=fabricante.codigo WHERE producto.precio >= 180 ORDER BY producto.precio DESC, producto.nombre;
SELECT DISTINCT codigo_fabricante, fabricante.nombre FROM fabricante INNER JOIN producto ON producto.codigo_fabricante=fabricante.codigo;
SELECT fabricante.nombre, producto.nombre FROM fabricante LEFT JOIN producto ON producto.codigo_fabricante=fabricante.codigo;
SELECT fabricante.nombre, producto.nombre FROM fabricante LEFT JOIN producto ON producto.codigo_fabricante=fabricante.codigo WHERE producto.nombre IS NULL;
SELECT fabricante.nombre, producto.nombre FROM fabricante LEFT JOIN producto ON producto.codigo_fabricante=fabricante.codigo WHERE fabricante.nombre = "Lenovo";
SELECT * FROM producto WHERE precio = (SELECT MAX(precio) FROM producto WHERE codigo_fabricante = (SELECT codigo FROM tienda.fabricante WHERE nombre = 'Lenovo'));
SELECT producto.nombre, producto.precio FROM producto INNER JOIN fabricante ON producto.codigo_fabricante=fabricante.codigo WHERE fabricante.nombre="Lenovo" ORDER BY precio DESC LIMIT 1;
SELECT producto.nombre, producto.precio FROM producto INNER JOIN fabricante ON producto.codigo_fabricante=fabricante.codigo WHERE fabricante.nombre="Hewlett-Packard" ORDER BY precio LIMIT 1;
SELECT nombre FROM producto  WHERE precio >= (SELECT MAX(Precio) FROM producto WHERE codigo_fabricante = (SELECT codigo_fabricante FROM fabricante WHERE fabricante.nombre="Lenovo"));
SELECT producto.nombre FROM producto WHERE precio >= (SELECT MAX(precio) FROM producto WHERE codigo_fabricante = (SELECT codigo FROM tienda.fabricante WHERE nombre = 'Lenovo'));
SELECT producto.nombre FROM producto WHERE precio > (SELECT avg(precio) FROM producto WHERE codigo_fabricante = (SELECT codigo FROM tienda.fabricante WHERE nombre = 'Asus'));
