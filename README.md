Vistas (Views):

    bodegas/index.blade.php
        Listado de todas las bodegas.
        Cada elemento de la lista incluye datos básicos de la bodega.

    bodegas/show.blade.php
        Detalles de una bodega específica.
        Información detallada de la bodega.
        Lista de vinos asociados a la bodega

    bodegas/create.blade.php
        Formulario para crear una nueva bodega.
        Lista de vinos existentes para seleccionar una bodega asociada.

    bodegas/edit.blade.php
        Formulario para editar una bodega existente.
        Detalles actuales de la bodega a editar.

    vinos/index.blade.php
        Lista de todos los vinos.
        Cada elemento de la lista incluye datos básicos del vino

    vinos/show.blade.php
        Detalles de un vino.

    vinos/create.blade.php
       Formulario para añadir un nuevo vino.
       Lista de bodegas existentes para seleccionar una bodega asociada

    vinos/edit.blade.php
        Formulario para editar un vino existente.
        Detalles actuales del vino a editar.

    layouts/app.blade.php:
        Elementos comunes de la interfaz de usuario (encabezado, pie de página, barra de navegación).
        Inclusión de archivos CSS y JavaScript necesarios (por ejemplo, Bootstrap).

Controladores (Controllers):

    BodegaController
        index: Muestra todas las bodegas.
        show: Muestra detalles de una bodega específica.
        create: Muestra el formulario para crear una nueva bodega.
        store: Almacena una nueva bodega en la base de datos.
        edit: Muestra el formulario para editar una bodega existente.
        update: Actualiza una bodega existente en la base de datos.
        destroy: Elimina una bodega y sus vinos asociados.

    VinoController
        index: Muestra todos los vinos o los vinos de una bodega específica.
        show: Muestra detalles de un vino específico.
        create: Muestra el formulario para añadir un nuevo vino.
        store: Almacena un nuevo vino en la base de datos.
        edit: Muestra el formulario para editar un vino existente.
        update: Actualiza un vino existente en la base de datos.
        destroy: Elimina un vino específico.

Modelos (Models):

    Bodega
        Relación con Vino (uno a muchos).
        Atributos: nombre, dirección, etc.

    Vino
        Relación con Bodega (muchos a uno).
        Atributos: nombre, tipo, año, etc.

    Rutas (Routes):
    
    Configura las rutas en el archivo web.php para vincular las URL a los métodos de los controladores.
