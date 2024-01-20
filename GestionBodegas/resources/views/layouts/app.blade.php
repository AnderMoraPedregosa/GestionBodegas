<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Aplicación</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
    <header>
        <nav>
            <h1>Gestion de bodegas de Ander Mora</h1>
            <h2>Nuestra compañia experta, confie en nosotros</h2>
            <ul>

                <li><a href="{{ route('bodegas.index') }}">Bodegas</a></li>

            </ul>
        </nav>
    </header>

    <div class="container">
        @yield('content')

    </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <footer>

    </footer>
</body>
</html>
