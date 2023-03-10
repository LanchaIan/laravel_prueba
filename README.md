<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Instalaci??n y ejecuci??n de Laravel

Instala en tu equipo el framework Laravel. Crea una aplicaci??n b??sica y comprueba que funciona correctamente. Posteriormente, modifica la p??gina que se muestra por defecto para que visualice ??nicamente el encabezado H1 "Hola mundo".

## Creaci??n de una plantilla

Dicha aplicaci??n incluir?? varias p??ginas que mantendr??n la misma apariencia durante toda la navegaci??n (encabezado, barra de navegaci??n y pie de p??gina). Para ello, vamos a crear una aplicaci??n en Laravel (o reutilizar la que creamos en la actividad anterior) y sobre ella realizar las siguientes tareas:

- Actividad 1
Crear una vista que utilizaremos como plantilla y que se denominar?? "app.blade.php". Estar?? alojada en la nueva carpeta "resources/views/layouts/". Para ello tendr??s que hacer uso de la directiva "@extends".

El contenido de dicha plantilla ser?? el que se incluye en el fichero adjunto "plantilla.html" (puedes personalizar la apariencia si as?? lo deseas).

Modifica la vista principal de la aplicaci??n para que se cargue en ella el contenido de dicha plantilla en lugar del contenido actual.

- Actividad 2
Modifica la plantilla "app.blade.php" para que en lugar de mostrarse los textos "T??tulo", "Subt??tulo" y "Contenido", se incluyan las siguientes secciones:

    "title", cuyo valor por defecto ser?? "Tienda online".
    "subtitle", cuyo valor por defecto ser?? "Una tienda online Laravel".
    "content".

Modifica la plantilla principal para asignarle contenido a las secciones "title" y "content". Comprueba que se visualiza correctamente.

Haz uso de las directivas "@yield" y "@section". 

- Actividad 3
Crea la carpeta "public/css" y en ella aloja el fichero "app.css" adjunto.

Modifica la plantilla "app.blade.php" para incluir el fichero anterior. Al hacer referencia al fichero utiliza el helper "asset".

Incluye tambi??n en la plantilla "app.blade.php" el pie de p??gina contenido en el fichero adjunto "footer.html".  Debe estar ubicado entre los comentarios "<!-- footer -->"

## Creaci??n de un controlador y de las p??ginas principal y 'about'

En esta actividad vamos a crear dos nuevas p??ginas: Una p??gina principal asociada a la ruta "/" y una p??gina titulada "Acerca de". Ambas p??ginas deber??n estar accesibles a trav??s de los enlaces del men?? principal.

- P??gina principal
A??ade a tu aplicaci??n la carpeta "/public/img" y copia en ella las im??genes adjuntas.

Crea la carpeta "/resources/views/home" y dentro de ella a??ade una vista que contendr?? la nueva p??gina principal de nuestra aplicaci??n: "index.blade.php". Su contenido ser?? el del fichero "index.php" adjunto, teniendo en cuenta que las rutas de las im??genes las deber??s sustituir por las rutas absolutas (para construir las rutas utiliza el helper "asset") y que el t??tulo deber??s sustituirlo por una string que tendr??s que pasar a trav??s de una funci??n an??nima definida en el router ("/").

- P??gina 'acerca de'
Crea, en la carpeta "/resources/views/home", la vista "about.blade.php", e incluye en ella el c??digo contenido en el fichero adjunto "about.php". Para acceder a esta nueva p??gina, crea un nuevo controlador (utilizando artisan) denominado "HomeController". En dicho controlador deber??s implementar el m??todo "about" que devolver?? la vista correspondiente con las asignaciones de variables necesarias para que la p??gina se muestre correctamente.

- Helper 'now'
Utiliza el helper "now" para mostrar, en el pie de p??gina, la fecha y la hora actuales

- Helper 'route'
Utiliza el helper "route" para enlazar, en el encabezado, las dos nuevas p??ginas utilizando los nombres de sus rutas, en lugar de utilizar una string.

## Litado de productos (array)

En esta actividad implementaremos el listado de todos los productos de nuestra tienda. De momento, los productos estar??n almacenados en un array. 

Pero antes de implementar esta nueva funcionalidad, realizaremos los siguientes cambios en el c??digo de la actividad A5.3:

- Cambia la ruta de la p??gina principal para que sea gestionada por el m??todo "index", 
    que crearemos en el controlador ya existente: HomeController. De esta forma, eliminamos la funci??n an??nima que comentamos recientemente que deber??amos intentar evitar.

- Deber??amos modificar los nombres de las variables usadas en el m??todo "about()" 
    del controlador para que sus nombres sea representativos. INTENTA EVITAR denominaciones de ese tipo. 

PERO ANTES:

Vamos a intentar enviar a las vistas, desde el controlador, un array con la informaci??n necesaria. En lugar de enviar muchas variables. Si necesitamos pasar mucha informaci??n tendr??amos que utilizar muchas invocaciones al m??todo "with", lo cual "ensuciar??a" el c??digo. Por lo tanto, modifica el c??digo (de web.php y de la vista correspondiente) para pasar toda la informaci??n en un array y utilizar ??ndices a ese array identificativos.

* Listado de productos
- Crea una nueva ruta denominada "/products" que ser?? gestionada por el m??todo "index()" de un nuevo controlador: "ProductController". 

- En el controlador, crea un array p??blico est??tico denominado $products que contenga los campos "id", "name", "description", "image" y "price". Inserta en ??l, al menos, 4 productos. El primer id deber?? ser el 1 y el resto ser??n consecutivos.

- El m??todo index() del nuevo controlador deber?? redirigir al usuario a la nueva vista que tendremos que implementar (con el contenido del fichero "products.txt" adjunto). Deber??s enviarle a la vista los campos "title", "subtitle", y "products". La nueva vista se denominar?? "/resources/views/product/index.blade.php".

- Modifica el c??digo de la vista para, utilizando la directiva @foreach, mostrar al usuario el listado de productos. 

- De momento, el enlace al producto debe quedar vac??o (hasta que implementemos esta funcionalidad).

- Utiliza im??genes con las mismas dimensiones que las alojadas en "public/img". 

- A??ade un nuevo enlace a la plantilla de nuestra aplicaci??n para que podamos enlazar con el listado de productos. Utiliza el texto "Productos" para dicho enlace.

## Listado de productos (Base de datos)

Realiza las siguientes tareas para mostrar el listado de productos a partir de la informaci??n contenida en una base de datos MySQL:

- Crea una base de datos en MySQL que tenga el mismo nombre que tu tienda online. 

- Crea un usuario que tenga todos los permisos sobre dicha base de datos. 

- Crea una migraci??n en Laravel que te permita a??adir, a la base de datos anterior, la 
    tabla "products". La tabla deber?? tener los mismos campos que el array "products" definido en la actividad anterior, junto con los campos "created_at" y "updated_at".

- Modifica el fichero ".env" para establecer los par??metros necesarios para conectarte con 
    la nueva base de datos utilizando el nuevo usuario y su contrase??a.

- Ejecuta las migraciones.

- Comprueba que las tablas se han creado correctamente.

- Inserta en la base de datos (a trav??s de phpMyAdmin, por ejemplo) 4 productos.

- Crea el modelo "Product" asociado a la tabla que acabas de crear.

- Elimina el array "products" del controlador de productos.

Modifica los m??todos "index" y "show" de dicho controlador para cargar los datos de la base de datos, en lugar del array tal y como se hac??a en la actividad anterior.
Imagina que tras la implementaci??n anterior queremos cambiar el aspecto de p??gina que muestra la informaci??n de un producto para que tanto el nombre como la descripci??n se visualicen en may??scula. ??C??mo podr??as hacerlo? ??Crees que esa es la forma correcta? ??Se podr??a evitar la duplicidad de c??digo que se genera al tener que convertir los textos en may??sculas en varias partes del c??digo? ??C??mo?

## Panel de control - Administraci??n de productos

A continuaci??n vamos a crear un panel de control que nos permita consultar los productos, editarlos y a??adir nuevos. Para ello realizaremos lo siguiente:

Panel de control
Vamos a crear una nueva plantilla que utilizaremos ??nicamente para el panel de control. Dicha plantilla la a??adiremos a la carpeta "resource/views/layouts" y se llamar?? "admin.blade.php". Su c??digo ser?? el que se incluye en "admin.blade.txt".
La plantilla anterior utiliza una imagen y un css que se incluyen en esta actividad. El css debe estar alojado en la carpeta "/public/css" y la imagen en "/public/img".
Crea, en "app/Http/Controllers/Admin", un nuevo controlador denominado "AdminHomeController.php" con el c??digo necesario para mostrar correctamente la vista que crearemos a continuaci??n.
Crea una nueva vista en "resource/views/admin/home" denominada "index.blade.php". Su c??digo ser?? el adjunto en "admin.home.index.blade.txt".
Crea la ruta "/admin", necesaria para acceder a la nueva vista.
Comprueba que puedes acceder al nuevo panel de control y que todo se visualiza correctamente.

Listado de productos
Crea una nueva ruta que apunte a "/admin/products" que sea gestionada por el m??todo "index" de "AdminProductController". Estar?? alojado en "app/Http/Controllers/Admin".
El controlador simplemente pasar?? a la vista el t??tulo de la p??gina y el listado de todos los productos.
Crea la vista "resource/views/admin/product/index.blade.php". La vista deber??a mostrar el id y nombre del producto junto con un enlace para editarlo y eliminarlo (de momento, deshabilitados). Se adjunta parte de su c??digo en "products.index.blade.txt"
A??ade la ruta de la administraci??n de productos en la plantilla del panel de control.
Comprueba que se muestran correctamente los productos.

Nuevo producto
Crea una nueva ruta que utilice el m??todo "post" para crear un nuevo producto. Se llamar?? "admin.product.store" y la gestionar?? el m??todo "store" del controlador "AdminProductController".
Sustituye el contenido de "resources/views/admin/product/index.blade.php" por el proporcionado en "admin.product.index.blade.txt"
Crea el m??todo "store" en el controlador "AdminProductController" para poder validar y almacenar el nuevo producto en la base de datos. Valida lo siguiente:
El nombre sea obligatorio y que tenga un m??ximo de 255 caracteres
La descripci??n sea obligatoria
El precio sea obligatorio, num??rico y mayor que cero.
La imagen no se le pide al usuario. De momento, almacena en la base de datos el nombre del fichero "image.jpg".

## Panel de control - Adjuntando im??genes

Modifica el formulario de creaci??n de productos para que, con la ayuda de la clase Storage, el administrador pueda subir una imagen del producto. Para ello, utiliza en el formulario un nuevo campo denominado "image". 

La imagen se debe almacenar en la carpeta "storage/app/public" del disco del servidor, y su nombre debe coincidir con el id del producto creado. La extensi??n deber?? ser la misma que la de la imagen original.