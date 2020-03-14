# GEMA S.A.S

### Tiempo planeado de solución

Se había estimado un tiempo de **tres horas (3h)**.

### Explicación de la solución

Para el desarrollo de la aplicación pensé en realizarlo a través de dos vistas (la de consulta y la que muestra el contenido en las respectivas tablas). Para el primer caso el primer reto fue ver como leer el documento considerando que los diferentes registros no estaban separados, por lo tanto el código de un usuario quedaba conectado al correo electrónico del siguiente.  Para solucionar eso separe el texto del archivo por comas en un arreglo, luego iteré sobre el arreglo con un paso de 3 para agregar una coma donde correspondía -este mismo proceso permitía verificar si existía el código para manejar el error-. Finalmente volvía a unir todo el arreglo a través de comas para separarlo nuevamente con el mismo método retornando el arreglo que esperaba. Con ese arreglo creaba las diferentes peticiones de inserción en la base de datos, la cual estaba previamente conectada usando mysqli. Para mostrar los datos en las tablas se realizo una nueva conexión a  la base de datos para obtener los datos, que fueron agrupados en tres diferentes arreglos que se muestran en sus respectivas tablas.

### Manual de instalación

1. Montar la base de datos: esto se puede hacer con ayuda de Xampp, algún software similar o directamente en la consola. Dentro del ejecutable se encuentra un archivo llamado usuarios.sql que debe ser ejecutado dentro de una base de datos denominada 'gemasas'. El usuario de mysql debe ser 'root' y no debe tener contraseña ('') y debe estar corriendo sobre el puerto 3306.
2. Ejecutar el código: a través de la consola ejecutar el comando php -S localhost:8888 (el puerto puede modificarse en caso de que este se encuentre ocupado).

#### Tiempo real de la solución

Incluyendo el tiempo de desarrollo del documento se gastaron **cuatro horas** en el desarrollo de la solución.

