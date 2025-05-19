<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('titulo')</title>
    <style>
        .tabla {
            border-collapse: collapse;
            border: 1px solid;
        }

        .tabla td {
            border-collapse: collapse;
            border: 1px solid;
        }

        .tabla th {
            border-collapse: collapse;
            border: 1px solid;
        }
    </style>
</head>

<body>
    @yield('contenido')
</body>

</html>