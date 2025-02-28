## Creo el proyecto

```bash
laravel new practica, e instalamos Breeze
![alt text](documentacion/image.png)

creo las dependencias

![alt text](documentacion/image-1.png)

levanto el programa

![alt text](documentacion/image-2.png)

![alt text](documentacion/image-3.png)

creo un layout con las carpetas header, nav, footer,y layout

![alt text](documentacion/image-4.png)

voy a routes y modifico, añado las rutas del resto de paginas

![alt text](documentacion/image-5.png)
![alt text](documentacion/image-7.png)

creo la carpeta main.blade.php en la carpeta resources view .Que es como la plantilla base de mi proyecto. cambio lo que había por <x-layout.layout> que indica que se esta utilizando un componente dentro del directorio layout.blade.php.

![alt text](documentacion/image-6.png)

modificada ruta de logeo, 
![alt text](documentacion/image-8.png)

en controladores modificado el registered y el authenticated por main
![alt text](documentacion/image-9.png)

una vez logeado para que me acceda a una de las páginas por ejemplo alumno voy a Controllers - Auth y creo AlumnoController.php
![alt text](documentacion/image-11.png)

y creo donde va a ir el contenido de la pagina en Components y creo alumno.blade.php
![alt text](documentacion/image-12.png)

para cambiar que en la pestaña salga donde estamos vamos a Components Layout y poner una variable para indicar donde tiene que apuntar
![alt text](documentacion/image-13.png)

despues en cada layout de cada pagina añadimos title=... la pagina en la que estemos
![alt text](documentacion/image-14.png)

En header.blade.php hacemos otro nuevo header para poder acomplar nuestra pagina en modo responsive y ahí colocamos un input establezco un checked que lo asocio a la clase peer y un div, para poder conseguir el menu hamburguesa
![alt text](image-1.png)
![alt text](image.png)

Creo un documento llamado docker-compose.yaml. y ahí pondre los servicios que quiero
![alt text](image.png)

vamos al fichero .env y modifico a quien le doy acceso
![alt text](image.png)

Para crear tablas interactuando con la base de datos ejecuto dos comandos
![alt text](image.png)
![alt text](image-1.png)

Fabricamos valores
![alt text](image-2.png)

creo la tabla llamada Alumno
![alt text](image-3.png)



## Acceso a ficheros html: vistas

PARA ACCEDER A PAGINA HTML
> ./resources/views
todas son con extensión --- blade.php ---
puedo (debo) establecr carpetas para organizarlo
No me dejo impresionar por la cantidad de ficheros que hay
en caso de que hayas carpetas. Si quiero acceder o referenciar una carpeta
> carpeta.nombre


## Controladores
> están en app/http/controllers
> El código php que quiero que se ejecute ante una solicitud de una ruta

## Rutas
> La ruta es la url que quiero que mi app tenga
> Las rutas se establecen en ./routes/web.php
> Se especifican con Route::verbo("url",.....)
> Para poner nombre o alias a la ruta  Route::verbo("url"..)->name("alumnos.index")
> Para referenciar una ruta por su nombre uso la función route("nombre")
> Las rutas pueden ser parametrizada (sobre todo haciendo un crud de un recurso).
> Una ruta parametrizada es aquella que en la url hay un parámetro (valor que puede cambiar),
http://alumnos/1 o https://alumnos/5, donde 1 y 5 son el parámetro
> Cuando referencio una ruta por su nombre con la funcion route, para pasar el parámetro siempre lo haré
como segundo

