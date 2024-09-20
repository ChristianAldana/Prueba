<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div id="app">
        <!-- Llamar los componentes -->
        <caja></caja>
        <cuarto-computacion></cuarto-computacion> <!-- Nombre correcto del componente -->
        <quinto-computacion></quinto-computacion> <!-- Nombre correcto del componente -->

    </div>



</body>
</html>
