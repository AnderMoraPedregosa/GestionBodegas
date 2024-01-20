<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Aplicación</title>

</head>
<body>
    <header>
        <nav>

            <ul>

                <li><a href="{{ route('bodegas.index') }}">Bodegas</a></li>

            </ul>
        </nav>
    </header>

    <div class="container">
        @yield('content')

    </div>

    <footer>

    </footer>
</body>
</html>
